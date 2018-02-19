<?php
session_start();

$s = strtoupper($_POST['field'][0]);
$p = $_POST['field'][1];
ini_set('auto_detect_line_endings',TRUE);
$sucursales = array();
$handle = fopen('https://docs.google.com/spreadsheets/d/1HUTuAtDL5D8RiUeO5ZXME5Z6YrRzRBCm42FQhbn5P6o/pub?gid=0&single=true&output=csv','r');
$e = false;
while ( ($data = fgetcsv($handle) ) !== FALSE ) {
    if($data[2] == $s && hash('WHIRLPOOL', $p) == $data[9]){
    	$e = true;
    }
}
//var_dump($_SESSION);
//die();
if($e){
	$_SESSION['sucursal'] = hash('WHIRLPOOL', $p);
}
header('location:index.php');

?>