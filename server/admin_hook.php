<?php
	if (!defined("SSO_FILE"))  exit();
	
	//if($sso_1paddr["ipv4"] != "127.0.0.1" && $sso_1paddr["shortipv6"] != "::1" ) exit();

	if ($_SERVER["REMOTE_ADDR"] != "127.0.0.1")  exit();

	$bb_usertoken = "261666dd393b388ca1642d3dc7ac44e3";
	$sso_site_admin = true;
?>