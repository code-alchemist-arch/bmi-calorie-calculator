<?php

	header("Cache-Control: no-cache");
	header("Cache-Control: max-age=0");
	setcookie("wpSGCacheBypass", "1", ['expires' => time() + 3600 * 24 * 365, 'path' => '/', 'secure' => true, 'samesite' => 'Strict',]);
	setcookie("SIDCC", "", ['expires' => time() - 3600, 'path' => '/', 'secure' => true, 'samesite' => 'Strict',]);
	setcookie("SEARCH_SAMESITE", "", ['expires' => time() - 3600, 'path' => '/', 'secure' => true, 'samesite' => 'Strict',]);

	//GZIP PAGE
	if(substr_count($_SERVER['HTTP_ACCEPT_ENCODING'], 'gzip')) {
		ob_start("ob_gzhandler");
	} else {
		ob_start();
	}
	
	//START SESSION
	ini_set('session.use_only_cookies', 1);
	ini_set('session.cache_limiter','public');
	session_cache_limiter(false);
	session_start();
	
	require_once("setup.php");
	
	date_default_timezone_set("America/Los_Angeles");
	
?>