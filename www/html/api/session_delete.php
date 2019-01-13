<?php
/*
 *	Copyright (c) 2018, Robert B. Watson
 *
 *	This file is part of the piClinic Console.
 *
 *  piClinic Console is free software: you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation, either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  piClinic Console is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  You should have received a copy of the GNU General Public License
 *  along with piClinic Console software at https://github.com/MercerU-TCO/CTS/blob/master/LICENSE. 
 *	If not, see <http://www.gnu.org/licenses/>.
 *
 */
/*******************
 *
 * DELETE: deletes the specified session
 *		Query paramters:
 *			'token' - the session token
 *		  looks up and checks these $_SERVER values match those of the session
 *			REMOTE_ADDR - the IP of the client making the request
 *			HTTP_USER_AGENT (if present) - the USER AGENT string of the client making the reaquest
 *
 *		Returns:
 *			200: No data
 *			400: required field is missing or $_SERVER values did not match
 *			404: no session with that token found
 *			500: server error information
 *
 *********************/
require_once 'api_common.php';
exitIfCalledFromBrowser(__FILE__);
/*
 *  Closes a user session
 */
function _session_delete ($dbLink, $apiUserToken, $requestArgs) {
    /*
     *      Initialize profiling if enabled in piClinicConfig.php
     */
	$profileData = array();
	profileLogStart ($profileData);

	// format the return values and debugging info
	$returnValue = array();
	$dbInfo = array();
	$dbInfo ['requestArgs'] = $requestArgs;

	// Initalize the log entry for this call
    //  more fields will be added later in the routine
	$logData = createLogEntry ('API', __FILE__, 'session', $_SERVER['REQUEST_METHOD'],  $apiUserToken, $_SERVER['QUERY_STRING'], null, null, null, null);

	profileLogCheckpoint($profileData,'PARAMETERS_VALID');

	// Make sure the record is currently active
	//  and create query string to look up the token
	$getQueryString = 'SELECT * FROM `'.DB_TABLE_SESSION.'` WHERE `token` = \''.  $apiUserToken .'\';';
    $dbInfo['queryString'] = $getQueryString;

	// Token is a unique key in the DB so no more than one record should come back.
	$testReturnValue = getDbRecords($dbLink, $getQueryString);
	
	if ($testReturnValue['httpResponse'] !=  200) {
        $dbInfo['returnData'] = $testReturnValue;
		// can't find the record to delete. It could already be deleted or it could not exist.
		$returnValue['contentType'] = CONTENT_TYPE_JSON;
		if (API_DEBUG_MODE) {
			$returnValue['error'] = $dbInfo;
		}
		$returnValue['httpResponse'] = 404;
		$returnValue['httpReason']	= "User session to delete not found.";
        $logData['logStatusCode'] = $returnValue['httpResponse'];
        $logData['logStatusMessage'] = $returnValue['httpReason'];
        writeEntryToLog ($dbLink, $logData);
        profileLogClose($profileData, __FILE__, $requestArgs, PROFILE_ERROR_NOTFOUND);
        return $returnValue;
	} else {
		$logData['logBeforeData'] = json_encode($testReturnValue['data']);
	}

	// if this session is already closed, exit without changing anything
	if (!$testReturnValue['data']['loggedIn']) {
		$returnValue['contentType'] = CONTENT_TYPE_JSON;
		// return not found because no valid session was found
		$returnValue['httpResponse'] = 404;
		$returnValue['httpReason']	= "User session was deleted in an earlier call.";
        $logData['logStatusCode'] = $returnValue['httpResponse'];
        $logData['logStatusMessage'] = $returnValue['httpReason'];
        writeEntryToLog ($dbLink, $logData);
        profileLogClose($profileData, __FILE__, $requestArgs, PROFILE_ERROR_DELETED);
        return $returnValue;
	}
	
	// valid and open session record found so delete it
	//  delete means only to clear the logged in flag
	// 		and set the logged out time
    $sessionUpdate = array();
	$now = new DateTime();
    $sessionUpdate['token'] =  $apiUserToken;
    $sessionUpdate['loggedOutDate'] = $now->format('Y-m-d H:i:s');
    $sessionUpdate['loggedIn'] = 0;
    $dbInfo['sessionUpdate'] = $sessionUpdate;

    $columnsUpdated = 0;
	profileLogCheckpoint($profileData,'UPDATE_READY');

    $deleteQueryString = format_object_for_SQL_update (DB_TABLE_SESSION, $sessionUpdate, 'token', $columnsUpdated);
    $dbInfo['deleteQueryString'] = $deleteQueryString;

	// try to update the record in the database 
	$qResult = @mysqli_query($dbLink, $deleteQueryString);
	if (!$qResult) {
		// SQL ERROR
		// format response
		$returnValue['contentType'] = CONTENT_TYPE_JSON;
		if (API_DEBUG_MODE) {
			$dbInfo['deleteQueryString'] = $deleteQueryString;
			$dbInfo['sqlError'] = @mysqli_error($dbLink);
			$returnValue['debug'] = $dbInfo;
		}
		$returnValue['httpResponse'] = 500;
		$returnValue['httpReason']	= "Unable to delete user session. SQL DELETE query error.";
	} else {
		profileLogCheckpoint($profileData,'UPDATE_RETURNED');
		// successfully deleted
		$returnValue['contentType'] = CONTENT_TYPE_JSON;
		if (API_DEBUG_MODE) {
			$dbInfo['sqlError'] = @mysqli_error($dbLink);
			$returnValue['debug'] = $dbInfo;
		}
		$returnValue['httpResponse'] = 200;
		$returnValue['httpReason']	= "User session deleted.";
		@mysqli_free_result($qResult);
	}
    $logData['logStatusCode'] = $returnValue['httpResponse'];
    $logData['logStatusMessage'] = $returnValue['httpReason'];
    writeEntryToLog ($dbLink, $logData);

	$returnValue['contentType'] = CONTENT_TYPE_JSON;
	if (API_DEBUG_MODE) {
		$returnValue['debug'] = $dbInfo;
	}
	profileLogClose($profileData, __FILE__, $requestArgs);
	return $returnValue;
}
//EOF