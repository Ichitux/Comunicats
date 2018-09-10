<?php

ini_set('display_errors', 1);
ini_set('error_reporting', E_ALL);

print_r($_POST);

//Primer switch
if(isset($_POST['selectComunicat'])){
	$primerComunicat = $_POST['selectComunicat'];
	switch($primerComunicat){
		case 'com1': templateOne();
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
			case 'comCold': templateTwo();
			break;
			case 'comDNS': templateThree();
			break;
		}
	}
}

//Tercer switch
function segonSwitch(){
	if(isset($_POST['selectSubclass'])){
		$tercerComunicat = $_POST['selectSubclass'];
		switch($tercerComunicat){
			case 'hosting': templateFour();
			break;
			case 'mailOnly': templateFive();
			break;
		}
	}
}

//Templates

function templateOne(){
	ob_start();
	require('plantilla1.php');
	$plantilla1 = ob_get_contents();
	ob_clean();
	echo $plantilla1;
}
function templateTwo(){
	ob_start();
	require('plantilla2.php');
	$plantilla2 = ob_get_contents();
	ob_clean();
	echo $plantilla2;
}
function templateThree(){
	ob_start();
	require('plantilla3.php');
	$plantilla3 = ob_get_contents();
	ob_clean();
	echo $plantilla3;
}
function templateFour(){
	ob_start();
	require('plantilla4.php');
	$plantilla4 = ob_get_contents();
	ob_clean();
	echo $plantilla4;
}
function templateFive(){
	ob_start();
	require('plantilla5.php');
	$plantilla5 = ob_get_contents();
	ob_clean();
	echo $plantilla5;
}
?>
