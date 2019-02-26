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
	if (!defined('TEXT_DATE_FORMAT')) { define('TEXT_DATE_FORMAT','TEXT_DATE_FORMAT',false); }
	if (!defined('TEXT_DATE_LABEL')) { define('TEXT_DATE_LABEL','TEXT_DATE_LABEL',false); }
	if (!defined('TEXT_DH_PATIENT_COUNT')) { define('TEXT_DH_PATIENT_COUNT','TEXT_DH_PATIENT_COUNT',false); }
	if (!defined('TEXT_DH_PATIENT_PAYMENT')) { define('TEXT_DH_PATIENT_PAYMENT','TEXT_DH_PATIENT_PAYMENT',false); }
	if (!defined('TEXT_DH_VISIT_DATE')) { define('TEXT_DH_VISIT_DATE','TEXT_DH_VISIT_DATE',false); }
	if (!defined('TEXT_DH_VISIT_WEEKDAY')) { define('TEXT_DH_VISIT_WEEKDAY','TEXT_DH_VISIT_WEEKDAY',false); }
	if (!defined('TEXT_EXPORT_CSV_BUTTON')) { define('TEXT_EXPORT_CSV_BUTTON','TEXT_EXPORT_CSV_BUTTON',false); }
	if (!defined('TEXT_EXPORT_CSV_BUTTON_TEXT')) { define('TEXT_EXPORT_CSV_BUTTON_TEXT','TEXT_EXPORT_CSV_BUTTON_TEXT',false); }
	if (!defined('TEXT_EXPORT_TSV_BUTTON')) { define('TEXT_EXPORT_TSV_BUTTON','TEXT_EXPORT_TSV_BUTTON',false); }
	if (!defined('TEXT_EXPORT_TSV_BUTTON_TEXT')) { define('TEXT_EXPORT_TSV_BUTTON_TEXT','TEXT_EXPORT_TSV_BUTTON_TEXT',false); }
	if (!defined('TEXT_MONTHLY_PAGE_TITLE')) { define('TEXT_MONTHLY_PAGE_TITLE','TEXT_MONTHLY_PAGE_TITLE',false); }
	if (!defined('TEXT_MONTHLY_VISIT_HEADING')) { define('TEXT_MONTHLY_VISIT_HEADING','TEXT_MONTHLY_VISIT_HEADING',false); }
	if (!defined('TEXT_NO_REPORT_PROMPT')) { define('TEXT_NO_REPORT_PROMPT','TEXT_NO_REPORT_PROMPT',false); }
	if (!defined('TEXT_NO_VISITS_FOUND_MONTH')) { define('TEXT_NO_VISITS_FOUND_MONTH','TEXT_NO_VISITS_FOUND_MONTH',false); }
	if (!defined('TEXT_REPORT_CLINICNAME_LABEL')) { define('TEXT_REPORT_CLINICNAME_LABEL','TEXT_REPORT_CLINICNAME_LABEL',false); }
	if (!defined('TEXT_REPORT_DATE_LABEL')) { define('TEXT_REPORT_DATE_LABEL','TEXT_REPORT_DATE_LABEL',false); }
	if (!defined('TEXT_REPORT_DAY_OF_MONTH_LABEL')) { define('TEXT_REPORT_DAY_OF_MONTH_LABEL','TEXT_REPORT_DAY_OF_MONTH_LABEL',false); }
	if (!defined('TEXT_REPORT_MONTH_PLACEHOLDER')) { define('TEXT_REPORT_MONTH_PLACEHOLDER','TEXT_REPORT_MONTH_PLACEHOLDER',false); }
	if (!defined('TEXT_REPORT_PATIENT_COUNT_LABEL')) { define('TEXT_REPORT_PATIENT_COUNT_LABEL','TEXT_REPORT_PATIENT_COUNT_LABEL',false); }
	if (!defined('TEXT_REPORT_PAYMENT_TOTAL_LABEL')) { define('TEXT_REPORT_PAYMENT_TOTAL_LABEL','TEXT_REPORT_PAYMENT_TOTAL_LABEL',false); }
	if (!defined('TEXT_REPORT_TOTAL')) { define('TEXT_REPORT_TOTAL','TEXT_REPORT_TOTAL',false); }
	if (!defined('TEXT_REPORT_WEEKDAY_1')) { define('TEXT_REPORT_WEEKDAY_1','TEXT_REPORT_WEEKDAY_1',false); }
	if (!defined('TEXT_REPORT_WEEKDAY_2')) { define('TEXT_REPORT_WEEKDAY_2','TEXT_REPORT_WEEKDAY_2',false); }
	if (!defined('TEXT_REPORT_WEEKDAY_3')) { define('TEXT_REPORT_WEEKDAY_3','TEXT_REPORT_WEEKDAY_3',false); }
	if (!defined('TEXT_REPORT_WEEKDAY_4')) { define('TEXT_REPORT_WEEKDAY_4','TEXT_REPORT_WEEKDAY_4',false); }
	if (!defined('TEXT_REPORT_WEEKDAY_5')) { define('TEXT_REPORT_WEEKDAY_5','TEXT_REPORT_WEEKDAY_5',false); }
	if (!defined('TEXT_REPORT_WEEKDAY_6')) { define('TEXT_REPORT_WEEKDAY_6','TEXT_REPORT_WEEKDAY_6',false); }
	if (!defined('TEXT_REPORT_WEEKDAY_7')) { define('TEXT_REPORT_WEEKDAY_7','TEXT_REPORT_WEEKDAY_7',false); }
	if (!defined('TEXT_REPORT_WEEKDAY_LABEL')) { define('TEXT_REPORT_WEEKDAY_LABEL','TEXT_REPORT_WEEKDAY_LABEL',false); }
	if (!defined('TEXT_REPORT_YEAR_PLACEHOLDER')) { define('TEXT_REPORT_YEAR_PLACEHOLDER','TEXT_REPORT_YEAR_PLACEHOLDER',false); }
	if (!defined('TEXT_RH_TOTAL')) { define('TEXT_RH_TOTAL','TEXT_RH_TOTAL',false); }
	if (!defined('TEXT_RPT_DECIMAL')) { define('TEXT_RPT_DECIMAL','TEXT_RPT_DECIMAL',false); }
	if (!defined('TEXT_RPT_DIGIT_SEPARATOR')) { define('TEXT_RPT_DIGIT_SEPARATOR','TEXT_RPT_DIGIT_SEPARATOR',false); }
	if (!defined('TEXT_SHOW_REPORT_BUTTON')) { define('TEXT_SHOW_REPORT_BUTTON','TEXT_SHOW_REPORT_BUTTON',false); }
}
// Strings for UI_ENGLISH_LANGUAGE
if ($pageLanguage == UI_ENGLISH_LANGUAGE) {
	if (!defined('TEXT_DATE_FORMAT')) { define('TEXT_DATE_FORMAT','m/d/Y',false); }
	if (!defined('TEXT_DATE_LABEL')) { define('TEXT_DATE_LABEL','Date&nbsp;(mm/dd/yyyy)',false); }
	if (!defined('TEXT_DH_PATIENT_COUNT')) { define('TEXT_DH_PATIENT_COUNT','Patients',false); }
	if (!defined('TEXT_DH_PATIENT_PAYMENT')) { define('TEXT_DH_PATIENT_PAYMENT','Payment',false); }
	if (!defined('TEXT_DH_VISIT_DATE')) { define('TEXT_DH_VISIT_DATE','Day of month',false); }
	if (!defined('TEXT_DH_VISIT_WEEKDAY')) { define('TEXT_DH_VISIT_WEEKDAY','Weekday',false); }
	if (!defined('TEXT_EXPORT_CSV_BUTTON')) { define('TEXT_EXPORT_CSV_BUTTON','Export as CSV',false); }
	if (!defined('TEXT_EXPORT_CSV_BUTTON_TEXT')) { define('TEXT_EXPORT_CSV_BUTTON_TEXT','Export the report to a CSV file to open as a spreadsheet. This format opens in Excel automatically, but some letters might not appear correctly.',false); }
	if (!defined('TEXT_EXPORT_TSV_BUTTON')) { define('TEXT_EXPORT_TSV_BUTTON','Export as TSV',false); }
	if (!defined('TEXT_EXPORT_TSV_BUTTON_TEXT')) { define('TEXT_EXPORT_TSV_BUTTON_TEXT','Export the report to a TSV file to import into a spreadsheet. Importing this format might require several steps, but the data will appear correctly.',false); }
	if (!defined('TEXT_MONTHLY_PAGE_TITLE')) { define('TEXT_MONTHLY_PAGE_TITLE','Monthly Payment Log',false); }
	if (!defined('TEXT_MONTHLY_VISIT_HEADING')) { define('TEXT_MONTHLY_VISIT_HEADING','Monthly Payment Log',false); }
	if (!defined('TEXT_NO_REPORT_PROMPT')) { define('TEXT_NO_REPORT_PROMPT','Select a date.',false); }
	if (!defined('TEXT_NO_VISITS_FOUND_MONTH')) { define('TEXT_NO_VISITS_FOUND_MONTH','No visits found for this month.',false); }
	if (!defined('TEXT_REPORT_CLINICNAME_LABEL')) { define('TEXT_REPORT_CLINICNAME_LABEL','Clinic',false); }
	if (!defined('TEXT_REPORT_DATE_LABEL')) { define('TEXT_REPORT_DATE_LABEL','Last date reported&nbsp;(mm/dd/yyyy)',false); }
	if (!defined('TEXT_REPORT_DAY_OF_MONTH_LABEL')) { define('TEXT_REPORT_DAY_OF_MONTH_LABEL','Day of the month',false); }
	if (!defined('TEXT_REPORT_MONTH_PLACEHOLDER')) { define('TEXT_REPORT_MONTH_PLACEHOLDER','Report month (MM)',false); }
	if (!defined('TEXT_REPORT_PATIENT_COUNT_LABEL')) { define('TEXT_REPORT_PATIENT_COUNT_LABEL','Patients seen',false); }
	if (!defined('TEXT_REPORT_PAYMENT_TOTAL_LABEL')) { define('TEXT_REPORT_PAYMENT_TOTAL_LABEL','Payment received',false); }
	if (!defined('TEXT_REPORT_TOTAL')) { define('TEXT_REPORT_TOTAL','Total outpatients seen',false); }
	if (!defined('TEXT_REPORT_WEEKDAY_1')) { define('TEXT_REPORT_WEEKDAY_1','Monday',false); }
	if (!defined('TEXT_REPORT_WEEKDAY_2')) { define('TEXT_REPORT_WEEKDAY_2','Tuesday',false); }
	if (!defined('TEXT_REPORT_WEEKDAY_3')) { define('TEXT_REPORT_WEEKDAY_3','Wednesday',false); }
	if (!defined('TEXT_REPORT_WEEKDAY_4')) { define('TEXT_REPORT_WEEKDAY_4','Thursday',false); }
	if (!defined('TEXT_REPORT_WEEKDAY_5')) { define('TEXT_REPORT_WEEKDAY_5','Friday',false); }
	if (!defined('TEXT_REPORT_WEEKDAY_6')) { define('TEXT_REPORT_WEEKDAY_6','Saturday',false); }
	if (!defined('TEXT_REPORT_WEEKDAY_7')) { define('TEXT_REPORT_WEEKDAY_7','Sunday',false); }
	if (!defined('TEXT_REPORT_WEEKDAY_LABEL')) { define('TEXT_REPORT_WEEKDAY_LABEL','Day of the week',false); }
	if (!defined('TEXT_REPORT_YEAR_PLACEHOLDER')) { define('TEXT_REPORT_YEAR_PLACEHOLDER','Report year (YYYY)',false); }
	if (!defined('TEXT_RH_TOTAL')) { define('TEXT_RH_TOTAL','Total',false); }
	if (!defined('TEXT_RPT_DECIMAL')) { define('TEXT_RPT_DECIMAL','.',false); }
	if (!defined('TEXT_RPT_DIGIT_SEPARATOR')) { define('TEXT_RPT_DIGIT_SEPARATOR',',',false); }
	if (!defined('TEXT_SHOW_REPORT_BUTTON')) { define('TEXT_SHOW_REPORT_BUTTON','Show report',false); }
}
// Strings for UI_SPANISH_LANGUAGE
if ($pageLanguage == UI_SPANISH_LANGUAGE) {
	if (!defined('TEXT_DATE_FORMAT')) { define('TEXT_DATE_FORMAT','d/m/Y',false); }
	if (!defined('TEXT_DATE_LABEL')) { define('TEXT_DATE_LABEL','Fecha&nbsp;(dd/mm/aaaa)',false); }
	if (!defined('TEXT_DH_PATIENT_COUNT')) { define('TEXT_DH_PATIENT_COUNT','Pacientes',false); }
	if (!defined('TEXT_DH_PATIENT_PAYMENT')) { define('TEXT_DH_PATIENT_PAYMENT','Pago',false); }
	if (!defined('TEXT_DH_VISIT_DATE')) { define('TEXT_DH_VISIT_DATE','Día del mes',false); }
	if (!defined('TEXT_DH_VISIT_WEEKDAY')) { define('TEXT_DH_VISIT_WEEKDAY','Día de la semana',false); }
	if (!defined('TEXT_EXPORT_CSV_BUTTON')) { define('TEXT_EXPORT_CSV_BUTTON','Descargar como CSV',false); }
	if (!defined('TEXT_EXPORT_CSV_BUTTON_TEXT')) { define('TEXT_EXPORT_CSV_BUTTON_TEXT','Descarga el informe como un archivo CSV para abrirlo como una hoja de cálculo. Excel puede abrir este formato automáticamente, pero no muestra todas las letras correctamente.',false); }
	if (!defined('TEXT_EXPORT_TSV_BUTTON')) { define('TEXT_EXPORT_TSV_BUTTON','Descargar como TSV',false); }
	if (!defined('TEXT_EXPORT_TSV_BUTTON_TEXT')) { define('TEXT_EXPORT_TSV_BUTTON_TEXT','Descarga el informe como un archivo TSV para importarlo como una hoja de cálculo. Excel puede importar este formato manualmente y muestra todas las letras correctamente.',false); }
	if (!defined('TEXT_MONTHLY_PAGE_TITLE')) { define('TEXT_MONTHLY_PAGE_TITLE','Registro de Pagos del Mes',false); }
	if (!defined('TEXT_MONTHLY_VISIT_HEADING')) { define('TEXT_MONTHLY_VISIT_HEADING','Registro de Pagos del Mes',false); }
	if (!defined('TEXT_NO_REPORT_PROMPT')) { define('TEXT_NO_REPORT_PROMPT','Escoge una fecha.',false); }
	if (!defined('TEXT_NO_VISITS_FOUND_MONTH')) { define('TEXT_NO_VISITS_FOUND_MONTH','No visitas encontradas en este mes.',false); }
	if (!defined('TEXT_REPORT_CLINICNAME_LABEL')) { define('TEXT_REPORT_CLINICNAME_LABEL','Establecimiento',false); }
	if (!defined('TEXT_REPORT_DATE_LABEL')) { define('TEXT_REPORT_DATE_LABEL','Última fecha reportada&nbsp;(dd/mm/aaaa)',false); }
	if (!defined('TEXT_REPORT_DAY_OF_MONTH_LABEL')) { define('TEXT_REPORT_DAY_OF_MONTH_LABEL','Día del mes',false); }
	if (!defined('TEXT_REPORT_MONTH_PLACEHOLDER')) { define('TEXT_REPORT_MONTH_PLACEHOLDER','Mes del informe (MM)',false); }
	if (!defined('TEXT_REPORT_PATIENT_COUNT_LABEL')) { define('TEXT_REPORT_PATIENT_COUNT_LABEL','Paceientes atendidos',false); }
	if (!defined('TEXT_REPORT_PAYMENT_TOTAL_LABEL')) { define('TEXT_REPORT_PAYMENT_TOTAL_LABEL','Pagos recibidos',false); }
	if (!defined('TEXT_REPORT_TOTAL')) { define('TEXT_REPORT_TOTAL','Total pacientes atendidos',false); }
	if (!defined('TEXT_REPORT_WEEKDAY_1')) { define('TEXT_REPORT_WEEKDAY_1','Lunes',false); }
	if (!defined('TEXT_REPORT_WEEKDAY_2')) { define('TEXT_REPORT_WEEKDAY_2','Martes',false); }
	if (!defined('TEXT_REPORT_WEEKDAY_3')) { define('TEXT_REPORT_WEEKDAY_3','Miércoles',false); }
	if (!defined('TEXT_REPORT_WEEKDAY_4')) { define('TEXT_REPORT_WEEKDAY_4','Jueves',false); }
	if (!defined('TEXT_REPORT_WEEKDAY_5')) { define('TEXT_REPORT_WEEKDAY_5','Viernes',false); }
	if (!defined('TEXT_REPORT_WEEKDAY_6')) { define('TEXT_REPORT_WEEKDAY_6','Sábado',false); }
	if (!defined('TEXT_REPORT_WEEKDAY_7')) { define('TEXT_REPORT_WEEKDAY_7','Domingo',false); }
	if (!defined('TEXT_REPORT_WEEKDAY_LABEL')) { define('TEXT_REPORT_WEEKDAY_LABEL','Día de la semana',false); }
	if (!defined('TEXT_REPORT_YEAR_PLACEHOLDER')) { define('TEXT_REPORT_YEAR_PLACEHOLDER','Año del informe(AAAA)',false); }
	if (!defined('TEXT_RH_TOTAL')) { define('TEXT_RH_TOTAL','Total',false); }
	if (!defined('TEXT_RPT_DECIMAL')) { define('TEXT_RPT_DECIMAL',',',false); }
	if (!defined('TEXT_RPT_DIGIT_SEPARATOR')) { define('TEXT_RPT_DIGIT_SEPARATOR','.',false); }
	if (!defined('TEXT_SHOW_REPORT_BUTTON')) { define('TEXT_SHOW_REPORT_BUTTON','Mostrar informe',false); }
}
//EOF
