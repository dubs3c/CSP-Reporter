<?php
date_default_timezone_set("Europe/Stockholm");

$data = file_get_contents('php://input');
$log  = '/path/to/location/website.com.csp-violation.log';
$date = date("j/m/Y H:i:s");

if ($data) {

	$obj = json_decode($data);

	$out = "\n============= ".$date." =============\n";
	$out .= 'document-uri: '.$obj->{'csp-report'}->{'document-uri'}."\n";
	$out .= 'referrer: '.$obj->{'csp-report'}->{'referrer'}."\n";
	$out .= 'violated-directive: '.$obj->{'csp-report'}->{'violated-directive'}."\n";
	$out .= 'original-policy: '.$obj->{'csp-report'}->{'original-policy'}."\n";
	$out .= 'blocked-uri: '.$obj->{'csp-report'}->{'blocked-uri'}."\n";

	$fp = fopen($log, 'a');
	fwrite($fp, $out);
	fclose($fp);

}

?>