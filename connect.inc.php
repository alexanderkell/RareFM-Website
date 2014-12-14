<?php

$conn_error = 'Could not connect';

class DatabaseConnect{
	
	//create constructor (auto called in new instance of class)
	public function __construct($db_host, $db_username, $db_password,$mysql_db){ 
		echo 'Attempting connection...';
		
		$todayDay = date('N');
		$timeNow = date('G');
		
		echo $todayDay;
		echo $timeNow;
			
		if(!@$this->Connect($db_host, $db_username, $db_password,$mysql_db)){
			echo 'Connection to database failed.';
			echo mysql_error();
		}else{
			echo 'Connected to database.<br>';
		}		
	}
	public function Connect($db_host,$db_username,$db_password, $mysql_db){
		if(!mysql_connect($db_host,$db_username,$db_password,$mysql_db)){
			return false;
		}else{
			return true;
		}
	}
}


?>