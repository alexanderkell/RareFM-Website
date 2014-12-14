<?php

	//require 'core.inc.php';
	require 'connect.inc.php';
	
function urlSplit($facebook){
	if (strpos($facebook, 'facebook') == true ) {
		$fbID = explode('facebook.com/' , $facebook );
		if (strpos($fbID[1], '?fref=ts') == true) {
			$fbCut = explode('?fref=ts' ,$fbID[1], -1);
			return "https://graph.facebook.com/".$fbCut[0]."/picture?type=large";
		}else{
			return "https://graph.facebook.com/".$fbID[1]."/picture?type=large";
		}
	}else{
		echo 'Not a valid facebook link';
	}
}




function updateTagline($name, $password, $tagline){
	$queryCheck = "SELECT `Name` AND `Password` FROM `RareFM` WHERE `Name`='$name' AND `Password` = '$password'";
	$query_runUpdate=mysql_query($queryCheck);	//Cross checks name and password
	if (mysql_num_rows($query_runUpdate)==1){	//Checks to see if name and password exists
		$query_update = "UPDATE RareFM	
		SET Tagline = '$tagline'
		WHERE Name = '$name' AND Password = '$password'";
		if($query_run2 = mysql_query($query_update)){
			header('Location:sent_success.php');
		}else{
			echo 'Could not revise tagline. <br> Try again.';
		}
	}else{
		echo '<br>Your Password and Show Name do not match. <br>Check your show name is as you originally typed it.';
	}
}



function addData($name, $password, $time, $day, $facebook, $twitter, $mixcloud, $tagline, $ip){
	
	$query = "SELECT `Time` AND `Day` FROM `RareFM` WHERE `Time`='$time' AND `Day` = '$day'";
	$query_run=mysql_query($query);
		
	if(mysql_num_rows($query_run)<1)
	{
		$query1 = "INSERT INTO `RareFM` VALUES(id,'".mysql_real_escape_string($name)."',
				'".$password."',
				'".$time."',
				'".$day."',
				'".mysql_real_escape_string($facebook)."',
				'".mysql_real_escape_string($twitter)."',
				'".mysql_real_escape_string($mixcloud)."',
				'".mysql_real_escape_string(urlSplit($facebook))."',
				'".mysql_real_escape_string($tagline)."',
				'".$ip.”’
				)";
		
		if($query_run = mysqli_query($query1)){
			header('Location:sent_success.php');
		}else
			echo 'Could not add details. <br> Try again.';
		
	}else{
		echo 'The slot time and date has already been added. <br> <br> 
			If you think that this is a mistake please contact:<br> alexander.kell.11@ucl.ac.uk';
	}
}



	
		$name= $_POST['name'];
		$password = $_POST['password'];
		$time= $_POST['time'];
		$day= $_POST['day'];
		$facebook= $_POST['facebook'];
		$twitter= $_POST['twitter'];
		$mixcloud= $_POST['mixcloud'];
		$tagline= $_POST['tagline'];
		$check = $_POST['check'];
		
		$name1= $_POST['name1'];
		$password1 = $_POST['password1'];
		$tagline1= $_POST['tagline1'];
		

	?>
	<link rel="stylesheet" type="text/css" href="form.css" />
	

<body>

<div id="total">	

<img alt="Schedule!" src="images/schedule.png">


<div id="left">

	<?php 
		if(!empty($name) && $time != 1000 && $day != 1000){
			$ip = $_SERVER["REMOTE_ADDR"];
			addData($name, $password, $time, $day, $facebook, $twitter, $mixcloud, $tagline, $ip);
		}
	
	?>
	<h2><br><br>Register your show here:</h2>
	<form action="presenterForm.php" method="Post">
	Show name:<br> <input type ="text" name ="name"><br><br>
	Create Password: <br><input type ="password" name ="password"><br><br>
	
	<h3>Copy schedule at top of page when inputting slot time.</h3>
	If show is at 1am or 2am set day as shown in picture.<br> Not following day.<br><br>
	Show time:<br> 
	<select name="time">
		<option value="1000"> </option
		<option value="9">9-10am</option>
		<option value="9">9-10am</option>
		<option value="10">10-11am</option>
		<option value="11">11-12am</option>
		<option value="12">12-1pm</option>
		<option value="13">1-2pm</option>
		<option value="14">2-3pm</option>
		<option value="15">3-4pm</option>
	 	<option value="16">4-5pm</option> 	
	 	<option value="17">5-6pm</option> 
	 	<option value="18">6-7pm</option> 
	 	<option value="19">7-8pm</option> 
	  	<option value="20">8-9pm</option> 
	 	<option value="21">9-10pm</option> 
	 	<option value="22">10-11pm</option> 
	 	<option value="23">11-12pm</option> 	
	 	<option value="0">12-1am</option>
	 	<option value="1">1-2am</option>
	</select><br><br>
	Select the Day:<br>
	<select name="day">
		<option value="1000"> </option
		<option value="1">Monday</option>
		<option value="1">Monday</option>
		<option value="2">Tuesday</option>
		<option value="3">Wednesday</option>
		<option value="4">Thursday</option>
		<option value="5">Friday</option>
		<option value="6">Saturday</option>
		<option value="7">Sunday</option>
	</select><br><br>
		<h2>CHECK YOUR SHOW SLOT AGAIN</h2>
	Facebook link:<br> <input type ="text" name ="facebook" size= "32px" maxlength="75" placeholder="http://www.facebook.com/JoesRadioShow"><br><br>
	Twitter link:<br> <input type ="text" name ="twitter" maxlength="75"  size = "32px" placeholder= "http://www.twitter.com/JoesRadioShow"><br><br>
	Mixcloud link:<br> <input type ="text" name ="mixcloud" maxlength="75" size = "32px" placeholder= "http://www.mixcloud.com/tag/JoeRadioShow"><br><br>
	Tagline (Sentence displayed under your show image):<br> <input type ="text" name ="tagline" size = "32px" maxlength="34" placeholder= "You're listening to Joe's Show!"><br><br>
	<input type = "submit" value="Submit">
	</form>
	
	</div>
	
	<div id="left">
	
	<h1>READ FIRST</h1>
	Fill this form in very carefully. <br>
	You can not change any details once you have clicked submit.<br><br>
		
	Do not forget your password as there is no way to retrieve it.<br><br>

	The information you input here will be displayed on the site during your slot.<br><br>
	
	
	You can change your tagline at any time. This will be displayed during your show.<br><br>
	Use your <b>Show Name</b> and <b>Password</b> made when registered to do this.<br><br>
	These are case-sensitive!
	</div>
	
	<div id="left">
	<?php 
		if(!empty($name1) && !empty($password1) && !empty($tagline1)){
			updateTagline($name1, $password1, $tagline1);
		}
	?>
	<h2><br><br>Change your show's tagline here:</h2>
	<form action="presenterForm.php" method="Post">
		Show name:<br> <input type ="text" name ="name1"><br><br>
		Password <br><input type ="password" name ="password1"><br><br>
		Change your tagline:<br> <input type ="text" name ="tagline1" size = "32px" maxlength="34" placeholder= "You're listening to Joe's Show!"><br><br>
		<input type = "submit" value="Submit">
	</form>

	</div>

</div>
</body>