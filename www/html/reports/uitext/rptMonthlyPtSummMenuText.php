<?php
/*

 *
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

// check to make sure this file wasn't called directly
//  it must be called from a script that supports access checking
$apiCommonInclude = dirname(__FILE__).'/../api/api_common.php';
if (!file_exists($apiCommonInclude)) {
    // if not over one, try up one more directory and then over.
    // it should be in one of these two locations.
    $apiCommonInclude = dirname(__FILE__).'/../../api/api_common.php';
}
require_once $apiCommonInclude;
exitIfCalledFromBrowser(__FILE__);

// Strings for UITEST_LANGUAGE
if ($pageLanguage == UITEST_LANGUAGE) {
	if (!defined('TEXT_REPORT_GROUP_PATIENTS')) { define('TEXT_REPORT_GROUP_PATIENTS','TEXT_REPORT_GROUP_PATIENTS',false); }
	if (!defined('TEXT_REPORT_LINK_DESC_MONTHLY_PATIENT_BY_DAY_LOG')) { define('TEXT_REPORT_LINK_DESC_MONTHLY_PATIENT_BY_DAY_LOG','TEXT_REPORT_LINK_DESC_MONTHLY_PATIENT_BY_DAY_LOG',false); }
	if (!defined('TEXT_REPORT_LINK_TEXT_MONTHLY_PATIENT_BY_DAY_LOG')) { define('TEXT_REPORT_LINK_TEXT_MONTHLY_PATIENT_BY_DAY_LOG','TEXT_REPORT_LINK_TEXT_MONTHLY_PATIENT_BY_DAY_LOG',false); }
	if (!defined('TEXT_REPORT_LINK_TITLE_MONTHLY_PATIENT_BY_DAY_LOG')) { define('TEXT_REPORT_LINK_TITLE_MONTHLY_PATIENT_BY_DAY_LOG','TEXT_REPORT_LINK_TITLE_MONTHLY_PATIENT_BY_DAY_LOG',false); }
	if (!defined('TEXT_REPORT_LINK_URI_MONTHLY_PATIENT_BY_DAY_LOG')) { define('TEXT_REPORT_LINK_URI_MONTHLY_PATIENT_BY_DAY_LOG','TEXT_REPORT_LINK_URI_MONTHLY_PATIENT_BY_DAY_LOG',false); }
}
// Strings for UI_ENGLISH_LANGUAGE
if ($pageLanguage == UI_ENGLISH_LANGUAGE) {
	if (!defined('TEXT_REPORT_GROUP_PATIENTS')) { define('TEXT_REPORT_GROUP_PATIENTS','Patient Activity',false); }
	if (!defined('TEXT_REPORT_LINK_DESC_MONTHLY_PATIENT_BY_DAY_LOG')) { define('TEXT_REPORT_LINK_DESC_MONTHLY_PATIENT_BY_DAY_LOG','Summary of patients seen by day and age group',false); }
	if (!defined('TEXT_REPORT_LINK_TEXT_MONTHLY_PATIENT_BY_DAY_LOG')) { define('TEXT_REPORT_LINK_TEXT_MONTHLY_PATIENT_BY_DAY_LOG','Daily Report of Outpatient Care',false); }
	if (!defined('TEXT_REPORT_LINK_TITLE_MONTHLY_PATIENT_BY_DAY_LOG')) { define('TEXT_REPORT_LINK_TITLE_MONTHLY_PATIENT_BY_DAY_LOG','Daily Report of Outpatient Care',false); }
	if (!defined('TEXT_REPORT_LINK_URI_MONTHLY_PATIENT_BY_DAY_LOG')) { define('TEXT_REPORT_LINK_URI_MONTHLY_PATIENT_BY_DAY_LOG','',false); }
}
// Strings for UI_SPANISH_LANGUAGE
if ($pageLanguage == UI_SPANISH_LANGUAGE) {
	if (!defined('TEXT_REPORT_GROUP_PATIENTS')) { define('TEXT_REPORT_GROUP_PATIENTS','Actividad de los pacientes',false); }
	if (!defined('TEXT_REPORT_LINK_DESC_MONTHLY_PATIENT_BY_DAY_LOG')) { define('TEXT_REPORT_LINK_DESC_MONTHLY_PATIENT_BY_DAY_LOG','Resumen de pacientes atendidos por día y grupo de edad',false); }
	if (!defined('TEXT_REPORT_LINK_TEXT_MONTHLY_PATIENT_BY_DAY_LOG')) { define('TEXT_REPORT_LINK_TEXT_MONTHLY_PATIENT_BY_DAY_LOG','Informe Diario de Atenciones Ambulatorias',false); }
	if (!defined('TEXT_REPORT_LINK_TITLE_MONTHLY_PATIENT_BY_DAY_LOG')) { define('TEXT_REPORT_LINK_TITLE_MONTHLY_PATIENT_BY_DAY_LOG','Informe Diario de Atenciones Ambulatorias',false); }
	if (!defined('TEXT_REPORT_LINK_URI_MONTHLY_PATIENT_BY_DAY_LOG')) { define('TEXT_REPORT_LINK_URI_MONTHLY_PATIENT_BY_DAY_LOG','',false); }
}
//EOF
