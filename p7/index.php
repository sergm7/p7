<?php
	//en mode desenvolupament
	ini_set('display_errors','on');
	
	
	//cridem al nucli
	include 'constants.php';
	require 'system/core.php';
	require 'system/helper.php';	
	require 'system/config.php';
	Core::init();
