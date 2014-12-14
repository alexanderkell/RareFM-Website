<?php 
//require 'core.inc.php';
//require 'connect.inc.php';

$db_host = 'localhost:2083';
$db_username = 'rarefmco_website';
$db_password = 'j4aD93xN0k!';
$mysql_db = 'rarefmco_Shows';

function Connect($dbhost,$dbusername,$dbpassword,$mysqldb){

	$mysql = new mysqli($dbhost, $dbusername, $dbpassword, $mysqldb);
	if ($mysql->connect_errno) {
	    echo "Failed to connect to MySQL: (" . $mysql->connect_errno . ") " . $mysql->connect_error;
	}else{
		return $mysql;
	}
}
//$connect = new DatabaseConnect($db_host, $db_username,$db_password,$mysql_db);

date_default_timezone_set('Europe/London');
$todayDay = date('N');
$timeNow = date('G');
if($timeNow == 0 || $timeNow == 1){
	$todayDay = $todayDay-1;
}

function getName(){
global $todayDay, $timeNow;
	$mysql = Connect('localhost', 'rarefmco', 'j4aD93xN0k!', 'rarefmco_Shows');
	$query= "SELECT `Name`
		FROM `RareFM`
		WHERE `Day`='$todayDay'
		AND `Time`= '$timeNow'";
	if($result = $mysql->query($query)){
		$row = $result->fetch_row();
		echo ' '.$row[0];
	}else{
		echo 'No live show information';
		echo $todayDay;
		echo 'hi';
		echo $timeNow;
	}
}
	
function getFacebook(){
	global $todayDay, $timeNow;
	$mysql = Connect('localhost', 'rarefmco', 'j4aD93xN0k!', 'rarefmco_Shows');
	$query= "SELECT `Facebook`
		FROM `RareFM`
		WHERE `Day`='$todayDay'
		AND `Time`= '$timeNow'";
	
	if($result = $mysql->query($query)){
		$row = $result->fetch_row();
		echo ' '.$row[0];
	}else{
		echo 'https://www.facebook.com/rarefm';	
	}
}
	

function getTwitter(){
	global $todayDay, $timeNow;
	$mysql = Connect('localhost', 'rarefmco', 'j4aD93xN0k!', 'rarefmco_Shows');

	$query= "SELECT `Twitter`
		FROM `RareFM`
		WHERE `Day`='$todayDay'
		AND `Time`= '$timeNow'";

if($result = $mysql->query($query)){
		$row = $result->fetch_row();
		echo ' '.$row[0];
	}else{
		echo 'https://www.twitter.com/RareFM';	
	}
}

function getMixcloud(){
	global $todayDay, $timeNow;
	$mysql = Connect('localhost', 'rarefmco', 'j4aD93xN0k!', 'rarefmco_Shows');

	$query= "SELECT `Mixcloud`
		FROM `RareFM`
		WHERE `Day`='$todayDay'
		AND `Time`= '$timeNow'";

if($result = $mysql->query($query)){
		$row = $result->fetch_row();
		echo ' '.$row[0];
	}else{
		echo 'https://www.Mixcloud.com/RareFM';	
	}
}


function getImage(){
	global $todayDay, $timeNow;
	$mysql = Connect('localhost', 'rarefmco', 'j4aD93xN0k!', 'rarefmco_Shows');

	$query= "SELECT `Facebook`
		FROM `RareFM`
		WHERE `Day`='$todayDay'
		AND `Time`= '$timeNow'";

	if($result = $mysql->query($query)){
		$row = $result->fetch_row();
		
		$fbID = explode("facebook.com/", $row[0]);

		
		
		echo "https://graph.facebook.com/".$fbID[1]."/picture?type=large";
		
	}else{
		echo 'images/RareFM_Logo.png';	
	}
}

function getTagline(){
	global $todayDay, $timeNow;
	$mysql = Connect('localhost', 'rarefmco', 'j4aD93xN0k!', 'rarefmco_Shows');

	$query= "SELECT `Tagline`
		FROM `RareFM`
		WHERE `Day`='$todayDay'
		AND `Time`= '$timeNow'";

	if($result = $mysql->query($query)){
		$row = $result->fetch_row();
		echo ' '.$row[0];
	}else{
		echo 'Your soundtrack to London.';
	}
}

function coverPhoto(){
	global $todayDay, $timeNow;
	$mysql = Connect('localhost', 'rarefmco', 'j4aD93xN0k!', 'rarefmco_Shows');
	$query= "SELECT `Facebook`
		FROM `RareFM`
		WHERE `Day`='$todayDay'
		AND `Time`= '$timeNow'";
	
	if($result = $mysql->query($query)){
		$row = $result->fetch_row();
		
		$JSONCoverData = file_get_contents('https://graph.facebook.com/'.$row[0].'?fields=cover');
		$DecodedData = json_decode($JSONCoverData);
		$source = $DecodedData->cover->source;
		
		$src2 = "images/thames_skyline_1.jpg";
		if(is_null($source)){
			echo $src2;
		}else{
			echo $source;
		}
	}else{
		echo 'images/thames_skyline_1.jpg';	
	}
}


?>