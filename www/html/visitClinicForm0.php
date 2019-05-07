<?php
/*
 *	Copyright (c) 2019, Robert B. Watson
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
 *  along with piClinic Console software at https://github.com/docsbydesign/piClinic/blob/master/LICENSE.
 *	If not, see <http://www.gnu.org/licenses/>.
 *
 */
/*
* 	Show the contents of a single patient visit for reading/viewing
*
*		Required query parameters:
*			patientVisitID
*	`		
*		Optional
* 			clinicPatientID
*			lang
*
*/
// set charset header
header('Content-type: text/html; charset=utf-8');
// include files
require_once './shared/piClinicConfig.php';
require_once './shared/headTag.php';
require_once './shared/dbUtils.php';
require_once './api/api_common.php';
require_once './shared/profile.php';
require_once './shared/security.php';
require_once './shared/ui_common.php';
require_once './api/patient_common.php';
require_once './api/visit_common.php';

// get the current session info (if any)
$sessionInfo = getUiSessionInfo();
// $pageLanguage is used by the UI string include files.
$requestData = $sessionInfo['parameters'];
$pageLanguage = $sessionInfo['pageLanguage'];
// load the strings for the page language
//	assumes $pageLanguage contains a valid language
require_once('./uitext/visitClinicForm0Text.php');
// functions to translate Enums to localized text
require_once('./visitUiStrings.php');
require_once('./patientUiStrings.php');

// open DB
// open session variables and check for access to this page
$pageAccessRequired = PAGE_ACCESS_STAFF;
require('./uiSessionInfo.php');

// open DB
$errorUrl = makeUrlWithQueryParams('/clinicDash.php', ['msg'=>MSG_DB_OPEN_ERROR]);
// this will open the DB or, if it can't open the DB, return to the dashboard with an error
$dbLink = _openDBforUI($sessionInfo['parameters'], $errorUrl);
// log any open workflows.
$logProcessed = logWorkflow($sessionInfo, __FILE__, $dbLink);

// Get the selected visit record
// create query string for get operation
$visitRecord = [];
$staffResponse = [];
$getQueryString = '';
if ((!empty($requestData['patientVisitID'])) && empty($dbStatus)) {
	/*
	*	TODO_REST:
	*		Resource: visit
	*		Filter: patientVisitID = patientVisitID
	*		Sort: N/A
	*		Return: visit object array
	*/
	$getQueryString = "SELECT * FROM `".
		DB_VIEW_VISIT_PATIENT_GET. "` WHERE `patientVisitID` = '".
		$requestData['patientVisitID']."';";
	$visitRecord = getDbRecords($dbLink, $getQueryString);
} else {
	if (empty($dbStatus)) {
		// no query parameter found.
		$dbStatus['contentType'] = 'Content-Type: application/json; charset=utf-8';
		if (API_DEBUG_MODE) {
			$dbInfo['sqlError'] = @mysqli_error($dbLink);
			$dbInfo['getQueryString'] = $getQueryString;
			$dbInfo['requestData'] = $requestData;
			$dbInfo['language'] = $pageLanguage;
			$dbStatus['error'] = $dbInfo;
		}
		$dbStatus['httpResponse'] = 400;
		$dbStatus['httpReason']	= TEXT_MESSAGE_PATIENT_VISIT_NOT_SPEICIFIED;
	} // else display DB error message
}
// if the visit record was not returned, exit in error
// if it was, save the data to $visitInfo
$visitInfo = array();
if (empty($visitRecord)  || ($visitRecord['httpResponse'] != 200)) {
    if (!empty($visitRecord) ) {
        $dbStatus = $visitRecord;
        if ($dbStatus['httpResponse'] == 404) {
            $dbStatus['httpReason']	= TEXT_MESSAGE_PATIENT_VISIT_NOT_FOUND;
        } else {
            $dbStatus['httpReason']	= TEXT_MESSAGE_GENERIC;
        }
    } else {
        $requestData['msg'] = MSG_NOT_FOUND;
    }
	// load fields that should have data so the form doesn't break
    if (!isset($visitInfo['patientVisitID'])) {
        $visitInfo['patientVisitID'] = '';
    }
    if (!isset($visitInfo['dateTimeIn'])) {
        $visitInfo['dateTimeIn'] = '';
    }
	$visitInfo['clinicPatientID'] = '';
	$visitInfo['lastName'] = '';
	$visitInfo['firstName'] = '';
	$visitInfo['sex'] = '';
	$visitInfo['birthDate'] = '';
	$visitInfo['staffName'] = '';
	$visitInfo['primaryComplaint'] = '';
	$visitInfo['secondaryComplaint'] = '';
	$visitInfo['visitType'] = '';
	$visitInfo['visitStatus'] = '';
    $visitInfo['diagnosis1'] = '';
    $visitInfo['diagnosis2'] = '';
    $visitInfo['diagnosis3'] = '';
    $visitInfo['condition1'] = '';
    $visitInfo['condition2'] = '';
    $visitInfo['condition3'] = '';
} else {
	$visitInfo = $visitRecord['data'];	
}

function writeTopicMenu ($sessionInfo) {
	$topicMenu = '<div id="topicMenuDiv" class="noprint">'."\n";
	$topicMenu .= '<ul class="topLinkMenuList">'."\n";
    $topicMenu .= '<li class="firstLink">'.
        '<a href="'.makeUrlWithQueryParams('/visitInfo.php', $sessionInfo['parameters']).'" '.
        'title="'.TEXT_CLINIC_VISIT_RETURN.'">'.TEXT_CLINIC_VISIT_RETURN_LINK.'</a>';
	$topicMenu .= '</ul></div>'."\n";
	return $topicMenu;
}

?>
<?= pageHtmlTag($pageLanguage) ?>
<?= pageHeadTag(TEXT_VISIT_DETAILS_PAGE_TITLE) ?>
<body>
	<?= piClinicTag(); ?>
	<?= $sessionDiv /* defined in uiSessionInfo.php above */ ?>
	<?php require('./uiErrorMessage.php') ?>
    <?= piClinicAppMenu(null,$sessionInfo,  $pageLanguage, __FILE__) ?>
	<div class="pageBody portraitReport<?= (empty($visitRecord) ? ' hideDiv' : '') ?>">
        <?= writeTopicMenu($sessionInfo) ?>
        <div class="logoBlock printOnly"><p>Logo Here</p></div>
        <div class="infoBlock <?= $visitInfo['visitStatus'] == 'Open' ? ' hideDiv' : '' ?>">
            <h2><?= TEXT_REPRINT_HEADING ?></h2>
        </div>
        <div class="nameBlock<?= (empty($visitRecord) ? ' hideDiv' : '') ?>">
            <div class="infoBlock fullWidth">
                <div class="leftDiv">
                    <img class="barcode" alt="<?= $visitInfo['patientVisitID'] ?>" src="/code39.php?code=<?= $visitInfo['patientVisitID'] ?>&y=44">
                </div>
                <div class="rightDiv">
                    <label class="close"><?= TEXT_ASSIGNED_LABEL ?>:</label><span class="idInHeading"><?= (!empty($visitInfo['staffName']) ? $visitInfo['staffName'] : str_repeat("_",22))  ?></span><br>
                    <label class="close"><?= TEXT_VISIT_ID_PRINT_LABEL ?>:</label><span class="idInHeading"><?= $visitInfo['patientVisitID'] ?></span><br>
                    <label class="close"><?= TEXT_VISIT_DATE_LABEL ?>:</label><?= (!empty($visitInfo['dateTimeIn']) ? date(TEXT_VISIT_DATE_FORMAT, strtotime($visitInfo['dateTimeIn'])) : '<span class="inactive">'.TEXT_DATE_BLANK.'</span>') ?>
                </div>
            </div>
            <div class="hrDiv"></div>
            <div class="infoBlock fullWidth">
                <div class="leftDiv">
                    <h1 class="pageHeading noBottomPad noBottomMargin"><?= formatPatientNameLastFirst ($visitInfo) ?>
                        <span class="idInHeading">&nbsp;&nbsp;<?= '('.$visitInfo['sex'].')' ?></span>
                        <span class="idInHeading"><a class="a_ptInfo" href="/ptInfo.php?clinicPatientID=<?= $visitInfo['clinicPatientID'].createFromLink (FROM_LINK_QP, __FILE__, 'a_ptInfo') ?>" title="<?= TEXT_SHOW_PATIENT_INFO ?>"><?= $visitInfo['clinicPatientID'] ?></a></span><br>
                    </h1>
                </div>
            </div>
            <div class="infoBlock fullWidth">
                <div class="leftDiv">
                    <label class="close"><?= TEXT_PATIENT_NEW_RESPONSIBLE_PARTY_LABEL ?>:</label> <?= (!empty($visitInfo['patientResponsibleParty']) ? $visitInfo['patientResponsibleParty'] : str_repeat("_",22))  ?><br>
                    <label class="close"><?= TEXT_FIRST_VISIT_LABEL ?>:</label>
                    <?= ((!empty($visitInfo['firstVisit']) && $visitInfo['firstVisit'] == 'YES') ? TEXT_FIRST_VISIT_TEXT : "" ) ?>
                    <?= ((!empty($visitInfo['firstVisit']) && $visitInfo['firstVisit'] == 'NO') ? TEXT_RETURN_VISIT_TEXT : "" ) ?>
                </div>
                <div class="rightDiv">
                    <label class="close"><?= TEXT_BIRTHDATE_LABEL ?>:</label><?= date(TEXT_BIRTHDAY_DATE_FORMAT, strtotime($visitInfo['birthDate'])) ?>&nbsp;(<?= formatAgeFromBirthdate ($visitInfo['birthDate'], strtotime($visitInfo['dateTimeIn']), TEXT_VISIT_YEAR_TEXT, TEXT_VISIT_MONTH_TEXT, TEXT_VISIT_DAY_TEXT) ?>)<br>
                    <label class="close"><?= TEXT_MARITAL_STATUS_LABEL ?>:</label> <?= (!empty($visitInfo['patientMaritalStatus']) ? $maritalStatusString[$visitInfo['patientMaritalStatus']] : str_repeat("_",22))  ?><br>
                    <label class="close"><?= TEXT_PATIENT_NEW_PROFESSION_LABEL ?>:</label> <?= (!empty($visitInfo['patientProfession']) ? $visitInfo['patientProfession'] : str_repeat("_",22))  ?>
                </div>
            <div class="hrDiv"></div>
            <div class="infoBlock fullWidth">
                <div class="leftDiv">
                    <label class="close"><?= TEXT_PATIENT_NEW_ADDRESS_LABEL ?>:</label><br>
                    <p class="indent1"><?= (!empty($visitInfo['patientHomeAddress1']) ? $visitInfo['patientHomeAddress1'].'<br>' : '') ?>
                    <?= (!empty($visitInfo['patientHomeAddress2']) ? $visitInfo['patientHomeAddress2'].'<br>' : '') ?>
                    <?= (!empty($visitInfo['patientHomeNeighborhood']) ? $visitInfo['patientHomeNeighborhood'].'<br>' : '') ?>
                    <?= (!empty($visitInfo['patientHomeCity']) ? $visitInfo['patientHomeCity'].'<br>' : '') ?>
                    <?= (!empty($visitInfo['patientHomeState']) ? $visitInfo['patientHomeState'].'<br>' : '') ?>
                    </p>
                </div>
                <div class="rightDiv">
                    <label class="close"><?= TEXT_PATIENT_NEW_CONTACT_LABEL ?>:</label><br>
                    <p class="indent1"><?= (!empty($visitInfo['patientContactPhone']) ? $visitInfo['patientContactPhone'].'<br>' : '') ?>
                        <?= (!empty($visitInfo['patientContactAltPhone']) ? $visitInfo['patientContactAltPhone'].'<br>' : '') ?>
                    </p>
                </div>
            </div>
        </div>
        <div class="clearFloat"></div>
        <div class="hrDiv"></div>
		<div id="PatientVisitDataView">
			<div id="PatientVisitDetails">
				<div class="infoBlock">
                    <label><?= TEXT_PATIENT_ALLERGY_LIST_HEAD ?></label><br>
                    <ul class="allergyList">
                        <?php
                        if (empty($visitInfo['patientKnownAllergies'])) {
                            $allergyList = array(TEXT_PATIENT_NO_KNOWN_ALLERGIES);
                        } else {
                            // there's a list so explode it into the array
                            $allergyList = explode( '|', $visitInfo['patientKnownAllergies']);
                        }
                        foreach ($allergyList as $allergy) {
                            echo ('<li>'.$allergy.'</li>');
                        }
                        ?>
                    </ul>
                </div>
                <div class="infoBlockRight">
                    <label><?= TEXT_PATIENT_CURRENT_MEDICATIONS_LABEL ?></label><br>
                    <ul class="medsList">
                        <?php
                        if (empty($visitInfo['patientCurrentMedications'])) {
                            $medList = array(TEXT_PATIENT_NO_CURRENT_MEDS);
                        } else {
                            // there's a list so explode it into the array
                            $medList = explode( '|', $visitInfo['patientCurrentMedications']);
                        }
                        foreach ($medList as $med) {
                            echo ('<li>'.$med.'</li>');                        }
                        ?>
                    </ul>
                </div>
            </div>
            <div class="clearFloat"></div>
            <div class="hrDiv"></div>
            <div class="infoBlock threeCm">
                <label><?= TEXT_VISIT_LIST_HEAD_COMPLAINT ?>:</label>
                <?= (!empty($visitInfo['primaryComplaint']) ? '<p class="indent1">'.$visitInfo['primaryComplaint'].'</p>' : '') ?>
                <?= (!empty($visitInfo['secondaryComplaint']) ? '<p class="indent1">'.$visitInfo['secondaryComplaint'].'</p>' : '') ?>
            </div>
            <div class="hrDiv"></div>
            <div class="infoBlock<?= $visitInfo['visitStatus'] == 'Closed' ? ' hideDiv' : '' ?>">
                <div class="infoBlock">
                    <table class="fullPortrait">
                        <tr>
                            <th class="sixCol"><label><?= TEXT_VISIT_FORM_HEIGHT_LABEL ?></label></th>
                            <th class="sixCol"><label><?= TEXT_VISIT_FORM_WEIGHT_LABEL ?></label></th>
                            <th class="sixCol"><label><?= TEXT_VISIT_FORM_TEMP_LABEL ?></label></th>
                            <th class="sixCol"><label><?= TEXT_VISIT_FORM_BP_LABEL ?></label></th>
                            <th class="sixCol"><label><?= TEXT_VISIT_FORM_PULSE_LABEL ?></label></th>
                            <th class="sixCol"><label><?= TEXT_VISIT_FORM_BS_LABEL ?></label></th>
                        </tr>
                        <tr>
                            <td class="sixCol">&nbsp;</td>
                            <td class="sixCol">&nbsp;</td>
                            <td class="sixCol">&nbsp;</td>
                            <td class="sixCol">&nbsp;</td>
                            <td class="sixCol">&nbsp;</td>
                            <td class="sixCol">&nbsp;</td>
                        </tr>
                    </table>
                </div>
                <div class="hrDiv"></div>
                <div class="infoBlock fiveCm">
                    <label><?= TEXT_EXAM_NOTES_LABEL ?>:</label>
                </div>
                <div class="hrDiv"></div>
                <div class="infoBlock">
                    <table class="fullPortrait">
                        <tr>
                            <th class="threeCol"><label><?= TEXT_DIAGNOSIS_1_LABEL ?></label></th>
                            <th class="threeCol"><label><?= TEXT_DIAGNOSIS_2_LABEL ?></label></th>
                            <th class="threeCol"><label><?= TEXT_DIAGNOSIS_3_LABEL ?></label></th>
                        </tr>
                        <tr>
                            <td class="threeCol"><?= TEXT_VISIT_FORM_DIAGNOSIS_PROMPT_LABEL ?></td>
                            <td class="threeCol"><?= TEXT_VISIT_FORM_DIAGNOSIS_PROMPT_LABEL ?></td>
                            <td class="threeCol"><?= TEXT_VISIT_FORM_DIAGNOSIS_PROMPT_LABEL ?></td>
                        </tr>
                    </table>
                </div>
                <div class="hrDiv"></div>
                <div class="infoBlock fiveCm">
                    <label><?= TEXT_ASSESSMENT_NOTES_LABEL ?>:</label>
                </div>
            </div>
            <div class="infoBlock<?= $visitInfo['visitStatus'] == 'Open' ? ' hideDiv' : '' ?>">
                <table class="fullPortrait">
                    <tr>
                        <th class="threeCol"><label><?= TEXT_DIAGNOSIS_1_LABEL ?></label></th>
                        <th class="threeCol"><label><?= TEXT_DIAGNOSIS_2_LABEL ?></label></th>
                        <th class="threeCol"><label><?= TEXT_DIAGNOSIS_3_LABEL ?></label></th>
                    </tr>
                    <tr>
                        <td class="threeCol"><?= empty($visitInfo['condition1']) ? TEXT_NOT_SPECIFIED :  '['.conditionText($visitInfo['condition1']).']&nbsp;'.getIcdDescription ($dbLink, $visitInfo['diagnosis1'], $pageLanguage, SHOWCODE_CODE_BEFORE_TEXT)  ?></td>
                        <td class="threeCol"><?= empty($visitInfo['condition2']) ? TEXT_NOT_SPECIFIED :  '['.conditionText($visitInfo['condition2']).']&nbsp;'.getIcdDescription ($dbLink, $visitInfo['diagnosis2'], $pageLanguage, SHOWCODE_CODE_BEFORE_TEXT)  ?></td>
                        <td class="threeCol"><?= empty($visitInfo['condition3']) ? TEXT_NOT_SPECIFIED :  '['.conditionText($visitInfo['condition3']).']&nbsp;'.getIcdDescription ($dbLink, $visitInfo['diagnosis3'], $pageLanguage, SHOWCODE_CODE_BEFORE_TEXT)  ?></td>
                    </tr>
                </table>
            </div>
        </div>
        <div class="clearFloat"></div>
    </div>
</body>
<?php @mysqli_close($dbLink); ?>