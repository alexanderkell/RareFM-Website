<?php 
//require 'core.inc.php';
//require 'connect.inc.php';

$db_host = 'p3plcpnl017.prod.phx3.secureserver.net';
$db_username = 'rarefm1';
$db_password = 'j4aD93xN0k';
$mysql_db = 'RareFM';

$mysql = new mysqli("p3plcpnl017.prod.phx39.secureserver.net", "rarefm1", "j4aD93xN0k", "RareFM");
if ($mysql->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysql->connect_errno . ") " . $mysql->connect_error;
}

//$connect = new DatabaseConnect($db_host, $db_username,$db_password,$mysql_db);

$todayDay = date('N');
$timeNow = date('G');
if($timeNow == 0 || $timeNow == 1){
	$todayDay = $todayDay-1;
}

function getName(){
	echo 'hi';
	$query= "SELECT `Name`
		FROM `RareFM`
		WHERE `Day`=6
		AND `Time`= 18
	";
	
	if($result= $mysql->query($query)){
		echo 'hi'.$result;
		
	}else{
		echo 'didnt work';
	}
	/*
	if(!$result = $db->query($sql)){
		echo $db->error;
	}else{
		$row=$result->fetch_assoc();
		echo ''.$row;
	}	
*/

	
/*	
if(mysql_num_rows($query_run)==1){
		if($query_run = mysql_query($query)){
			if ($query_result = mysql_result($query_run, 0)){ //only if this works
				echo ''.$query_result;
			}
		}else{
			echo 'Could not connect';
		}
	}else{
		//echo 'Rare FM (No live show information)';
		echo ''.mysql_error();	
	}
}
*/



function getFacebook(){
	$query= "SELECT `Facebook`
	FROM `RareFM`
	WHERE `Day`= '$day' AND `Time`='$time'";
	$query_run = mysql_query($query);
	if(mysql_num_rows($query_run)==1){
		if($query_run = mysql_query($query)){
			if ($query_result = mysql_result($query_run, 0)){ //only if this works
				echo ''.$query_result;
			}
		}else{
			echo 'Could not connect';
		}
	}else{
		echo 'https://www.facebook.com/rarefm';	
	}
}


function getTwitter(){
	$query= "SELECT `Twitter`
	FROM `RareFM`
	WHERE `Day`= '$day' AND `Time`='$time'";
	$query_run = mysql_query($query);
	if(mysql_num_rows($query_run)==1){
		if($query_run = mysql_query($query)){
			if ($query_result = mysql_result($query_run, 0)){ //only if this works
				echo ''.$query_result;
			}
		}else{
			echo 'Could not connect';
		}
	}else{
		echo 'https://www.twitter.com/RareFM';	
	}
}

function getMixcloud(){
	$query= "SELECT `Mixcloud`
	FROM `RareFM`
	WHERE `Day`= '$day' AND `Time`='$time'";
	$query_run = mysql_query($query);
	if(mysql_num_rows($query_run)==1){
		if($query_run = mysql_query($query)){
			if ($query_result = mysql_result($query_run, 0)){ //only if this works
				echo ''.$query_result;
			}
		}else{
			echo 'Could not connect';
		}
	}else{
		echo 'http://www.mixcloud.com/RareFM/';	
	}
}


function getImage(){
	$query= "SELECT `Image`
	FROM `RareFM`
	WHERE `Day`= '$day' AND `Time`='$time'";
	$query_run = mysql_query($query);
	if(mysql_num_rows($query_run)==1){
		if($query_run = mysql_query($query)){
			if ($query_result = mysql_result($query_run, 0)){ //only if this works
				echo ''.$query_result;
			}
		}else{
			echo 'Could not connect';
		}
	}else{
		echo 'images/RareFM_Logo.png';	
	}
}

function getTagline(){
	$query= "SELECT `Tagline`
	FROM `RareFM`
	WHERE `Day`= '$day' AND `Time`='$time'";
	$query_run = mysql_query($query);
	if(mysql_num_rows($query_run)==1){
		if($query_run = mysql_query($query)){
			if ($query_result = mysql_result($query_run, 0)){ //only if this works
				echo ''.$query_result;
			}
		}else{
			echo 'Could not connect';
		}
	}else{
		echo 'Your soundtrack to London.';
	}
}


/*
switch ($todayDay){
	case 1:
		echo 'Monday';
		break;
	case 2:
		echo 'Tuesday';
		break;
	case 3:
		echo 'Wednesday';
		break;
	case 4:
		echo 'Thursday';
		break;
	case 5:
		echo 'Friday';
		break;
	case 6:
		echo 'Saturday';
		break;
	case 7:
		echo 'Sunday';
}




switch ($timeNow){
	case 9:
		echo ''.$timeNow;
		break;
	case 10:
		echo ''.$timeNow;
		break;
	case 11:
		echo ''.$timeNow;
		break;
	case 12:
		echo ''.$timeNow;
		break;
	case 13:
		echo ''.$timeNow;
		break;
	case 14:
		echo ''.$timeNow;
		break;
	case 15:
		echo ''.$timeNow;
		break;
	case 16:
		echo ''.$timeNow;
		break;
	case 17:
		echo ''.$timeNow;
		break;
	case 18:
		echo ''.$timeNow;
		break;
	case 19:
		echo ''.$timeNow;
		break;
	case 20:
		echo ''.$timeNow;
		break;
	case 21:
		echo ''.$timeNow;
		break;
	case 22:
		echo ''.$timeNow;
		break;
	case 23:
		echo ''.$timeNow;
		break;
	case 0:
		echo ''.$timeNow;
		break;
	case 1:
		echo ''.$timeNow;
		break;
	case 2:
		echo ''.$timeNow;
		break;
}
*/

?>