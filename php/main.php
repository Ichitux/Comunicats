<?php

ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL);

print_r($_POST);

$host = $_POST['domini'];


//Primer switch 
if(isset($_POST['selectComunicat'])){
	$primerComunicat = $_POST['selectComunicat'];
	switch($primerComunicat){
		case 'com1': templateOne($host);
		break;
		case 'com2': primerSwitch();
		break;
	}
}

//Segon switch
function primerSwitch(){
	if(isset($_POST['segonComunicat'])){
		$segonComunicat = $_POST['segonComunicat'];
		switch($segonComunicat){
			case 'comSta': segonSwitch();
			break;
			case 'comCold': templateTwo($host);
			break;
			case 'comDNS': templateThree($host);
			break;
		}
	}
}

//Tercer switch
function segonSwitch(){
	if(isset($_POST['selectSubclass'])){
		$tercerComunicat = $_POST['selectSubclass'];
		switch($tercerComunicat){
			case 'noAlias': templateFour($host);
			break;
			case 'siAlias': templateFive($host);
			break;
		}
	}
}

//Templates 

function templateOne($host){
	ob_start();
	require('plantilla1.php');
	$plantilla1 = ob_get_contents();
	ob_clean();
	echo $plantilla1;
}
function templateTwo($host){
	ob_start();
	require('plantilla2.php');
	$plantilla2 = ob_get_contents();
	ob_clean();
	echo $plantilla2;
}
function templateThree($host){
	ob_start();
	require('plantilla3.php');
	$plantilla3 = ob_get_contents();
	ob_clean();
	echo $plantilla3;
}
function templateFour($host){
	ob_start();
	require('plantilla4.php');
	$plantilla4 = ob_get_contents();
	ob_clean();
	echo $plantilla4;
}
function templateFive($host){
	ob_start();
	require('plantilla5.php');
	$plantilla5 = ob_get_contents();
	ob_clean();
	echo $plantilla5;
}
?>