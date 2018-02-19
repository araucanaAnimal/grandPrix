<?php
ini_set('auto_detect_line_endings',TRUE);
$handle = fopen('https://docs.google.com/spreadsheets/d/1HUTuAtDL5D8RiUeO5ZXME5Z6YrRzRBCm42FQhbn5P6o/pub?gid=0&single=true&output=csv','r');
$r = 2016;
while ( ($data = fgetcsv($handle) ) !== FALSE ) {
	$p = "araucano01";
	echo "\t".hash('WHIRLPOOL',$p)."<br/>";
	$r++; 
}