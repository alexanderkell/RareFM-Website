<?php

ob_start();//header function to redirect to original page
session_start();

$http_referer = $_SERVER['HTTP_REFERER'];
$current_file = $_SERVER['SCRIPT_NAME'];

function loggedin(){
	if(isset($_SESSION['user_id'])&&!empty($_SESSION['user_id'])){
		return true;
	}else{
		return false;
	}
	
}

function getuserfield($field){
	$query= "SELECT `$field`
			FROM `users`
			WHERE `id`='".$_SESSION['user_id']."'";
	if($query_run = mysql_query($query)){//if succesful then:
		if ($query_result = mysql_result($query_run, 0, $field)){ //only if this works
			return $query_result;
		}
	}
}

?>