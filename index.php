<?php
require_once 'vendor/autoload.php';

define('SPREADSHEET_ID', '11BCnspCt2Mut3nhc4WMY6CYTd0zF9C3eCzsk1AEpKLM');
define('RANGE', 'sales!A1:E6');

$client = new Google_Client();
$client->setDeveloperKey("AIzaSyDwxpicDSa3GBcLJmgE1yxdtjYpIJFogcA");

$service = new Google_Service_Sheets($client);
$response = $service->spreadsheets_values->get(SPREADSHEET_ID, RANGE);

foreach ($response->getValues() as $key => $val) {
	echo sprintf("'%s',", implode("','", $val)) . "\n";
}
