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
*	clinicLogin
*		Starts an authenticated session 
*
*/
// set charset header
header('Content-type: text/html; charset=utf-8');
// include files 
require_once('./api/api_common.php');
require_once('./shared/ui_common.php');
require_once('./shared/headTag.php');
// get the current session info (if any)
$sessionInfo = getUiSessionInfo();
// $pageLanguage is used by the UI string include files.
$pageLanguage = $sessionInfo['pageLanguage'];
$requestData = $sessionInfo['parameters'];
// load the strings for the page language
//	assumes $pageLanguage contains a valid language
require_once ('./uitext/clinicLoginText.php');

$loginData = array();
$loginData['username'] = '';
$loginData['password'] = '';
?>
<?= pageHtmlTag($sessionInfo['sessionLanguage']) ?>
<?= pageHeadTag(TEXT_CLINIC_LOGIN_PAGE_TITLE, 86400) ?>
<body>
	<?= piClinicTag(); ?>
	<div id="sessionMenu"><p>&nbsp;</p><!-- placeholder for this page --></div>
	<?php require ('uiErrorMessage.php') ?>
	<div id="loginDiv">
		<p class="piClinicPageTitle"><?= TEXT_CLINIC_LOGIN_PAGE_TITLE ?></p>
		<form enctype="multipart/form-data" action="/uihelp/startUiSession.php" method="post">
			<p><label class="piClinicFieldLabel"><?= TEXT_LOGIN_USERNAME ?>:</label><br>
				<?= dbFieldTextInput ($loginData, "username", TEXT_LOGIN_USERNAME_PLACEHOLDER, false, true,
					'text', 'piClinicEdit', 64, 'username' ) ?>
			</p>
			<p><label class="piClinicFieldLabel"><?= TEXT_LOGIN_PASSWORD ?>:</label><br>
				<?= dbFieldTextInput ($loginData, "password", TEXT_LOGIN_PASSWORD_PLACEHOLDER, true, false, 'password', 'piClinicEdit', 128, 'current-password') ?>
			</p>
			<?= (!empty($sessionInfo['sessionLanguage']) ? '<input type="hidden" id="langField" name="lang" value="'.$sessionInfo['sessionLanguage'].'" >': "") ?>
			<p class="piClinicButton"><button type="submit"><?= TEXT_LOGIN_SUBMIT_BUTTON ?></button></p>
		</form>
	</div>
</body>
</html>