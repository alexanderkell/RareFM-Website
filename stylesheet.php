<?php header("Content-type: text/css; charset: UTF-8"); ?>
<?php require 'dataGrab.php'; ?>

*{
	margin: 0px;
	padding: 0px;
}
/*header, section, footer, aside, nav, article
{
	display:block;
}*/
body{
	background: #00ff00 url("<?php coverPhoto() ?>");

	background-attachment:fixed;
	background-repeat: repeat-y;
	
	text-align: center;
	background-size: contain;
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;

	text-align: center;
	width: 100%;
}

#heading
{
	opacity:1;
	background-color:blue;
	position:relative;
	display:inline;
	text-align:center;
	font-family: 'Raleway', 'Helvetica', sans-serif;
}

#mainsubtitle {
	font-family: 'Helvetica', sans-serif;
	color: #ecf0f1;
	font-size: 40px;
	opacity: 0.8;
	font-weight: bold;
	text-align: center;
	padding-top: 160px;
}

#radio_player {
	position: relative;
	top: 10px;
	margin: 40px auto -23px;
}
#logomain {
	position: relative;
	opacity: 0.7;
	top: 28px;
	right: 311px;
}


.main {
	background-color: #ff0000;
	opacity: 0.87;
	font-weight: 300;
	width: 100%;
	padding: 0;
	margin: 0;
}
.main a:hover {
  	color: #ecf0f1;
  	opacity: 0.9;
}
.main a {
    text-decoration: none;
    color: #95a5a6;
}
.main {
	background-color: #262D33;
opacity:0.91;	opacity: 0.95;
	font-weight: 300;
	width: 100%;
	padding: 0;
	margin: 0;
	border-top: 2px solid rgb(9, 26, 37);
	border-bottom: 2px solid rgb(9, 26, 37);	
}
#navbar ul {
	padding: 0;
	margin: 0;
}
#navbar li {
  	font-size: 20px;
  	display: inline-block; 
	margin: 0.75% 2%;
  	color: #000;
  	z-index: 1;
  	font-weight: 200;
	font-weight: lighter;
	color: #2c3e50;
}

#bottom{

}

#leftopac{
	float:left;
	color:black;
	width:10%;
	height: 500px;
	background-color: rgba(37, 57, 105, 0.18);
}
#rightopac{
	float:right;
	width:9%;
	height:500px;
	background-color: rgba(37, 57, 105, 0.18);
}


#wrapper
{
	width: 1050px;
	margin: 0px 0px;
	background-color: rgba(21, 28, 36, 0.94);
	border-left:0px solid gray;
	border-right:0px solid gray;
	text-align:left;
	margin: auto ;
	/* margin-left:auto;
	margin-right:auto; */
	width:80%
	color:white;
}





#topHub{
	margin:auto;	
}
#main{
	width: 96.8%;
	margin-left: 12px;
	padding: 0px;
	top: 300px;
	height: 480px;
}

#eventsIsland{
	width:62%;
	height:100%;
	background-color: #262D33;
	opacity:0.91;
	float:left;
	bottom:0px;
	left:0px;
	border-radius:5px;
	box-shadow: rgba(0, 0, 0, 0.3) 2px 3px 3px;
	margin-top:10px;
}

#side{
	float: right;
	width: 37%;
	height: 100%;
	margin: 2% 0px;
	padding: 0% 0% 1.5% 1%;
	margin-top: 0px;
	text-align: left;
	font-weight: lighter;
	font-family: 'Raleway', 'Helvetica', sans-serif;
	margin-top: 10px;
	color: white;
}



#sectionHeader{
	width:59%;
	height:20px;
	background-color:#343E4B;
	position:relative;
	top:10px;
	height:30px;
	/*font-family: 'Raleway', 'Helvetica', sans-serif; */
	color: #BDC6C7;
	font-size: 24px;
	text-align:right;
	font-weight:lighter;
	box-shadow: 0px 1px 1px 1px rgb(39, 39, 39);
	/* font-variant:small-caps; */
}


#sectionHeaderCom{
	width: 67%;
	height: 20px;
	background-color: #343E4B;
	position: relative;
	top: 10px;
	height: 30px;
	font-family: 'Raleway', 'Helvetica', sans-serif;
	color: #BDC6C7;
	font-size: 27px;
	text-align: right;
	font-weight: lighter;
	box-shadow: 0px 1px 1px 1px rgb(39, 39, 39);
	font-variant: small-caps;
}

#sectionHeader p{
	padding-right:6px;
}


#comIsland{
	width:1000px;
	height:100%;
	opacity:0.91;	
	position:relative;
	bottom:0px;
	left:0px;
	border-radius:5px;
	color:white;
	margin-left: -28px;

}
#totaldiv{
	height:858px;
}



#descrBox{
	width: 100%;
	height: 38%;
	position: absolute;
	bottom: 0px;
	background-color: rgba(26, 34, 39, 0.75);
}
#descrText{
	margin: 1px 10px 6px 16px;
	font-family: 'Helvetica', sans-serif;
	font-weight: 300;
	color:white;
	opacity:1;
	overflow:hidden;
	text-overflow:ellipsis;
	text-align: left;
}
#descrTitle{
	font-variant: small-caps;
	font-weight: 300;
	text-decoration: underline;
	font-size: x-large;
}




#statsIsland{
	width:100%;
	height: 104%;
	background-color:#262D33;
	opacity:0.91;
	position:relative;
	bottom:0px;
	left:0px;
	border-radius:5px;
	box-shadow: rgba(0, 0, 0, 0.3) 2px 3px 3px;
}
#sectionHeader2{
	width:71%;
	height:20px;
	background-color:#343E4B;
	position:relative;
	float:right;
	top:10px;
	right:0px;
	height:30px;
	/*font-family: 'Raleway', 'Helvetica', sans-serif; */
	color: #BDC6C7;
	font-size: 22px;
	text-align:left;
	font-weight:lighter;
	box-shadow: 0px 1px 1px 1px rgb(39, 39, 39);
	/* font-variant:small-caps; */
}
#sectionHeader2 p{
	padding-left:5px;
}
#reqfeature{
	top: 50px;
	padding-top: 12px;
	padding-bottom: 3px;
	padding-left: 15px;
	/*font-weight: lighter;
	font-family: 'Raleway', 'Helvetica', sans-serif;*/
}

#cc_tunein{
	margin-top:88px;
}

#openStream{
	padding-top: 0px;
	margin-top: 11px;
	padding-left: 17px;
	padding-bottom: 6px;
	background-color: rgb(31, 38, 44);
	box-shadow: 0px 1px 1px 1px rgb(39, 39, 39);
	margin-top: -93px;

}
#bottom{
	height:100%; 
}

#cc_tunein ul
{
	list-style-type:none;
	margin:0;
	padding-left: 29px;
	padding-top: 5px;
}
#cc_tunein li{
	display:inline;
	padding-right:30px;
}

#smallHeader{
	padding-top:30px;
	padding-left: 6px;
}

#currentDJ{
	padding-top: 2px;
	padding-left: 3px;
	margin-top: 10px;
	position: relative;
	bottom: 10px;
	position: top;
	background-color: rgb(31, 38, 44);
	height: 106px;
	box-shadow: 0px 1px 1px 1px rgb(39, 39, 39);

}
#showInfo{

}

#showInfo ul
{
	list-style-type:none;
	margin:0;
	padding-left: 29px;
	padding-top: 5px;
}
#showInfo li{
	display:inline;
	padding-right:10px;
}

#image{
	float:left;
	padding-right: 3px;
}


#socialHub{
	height:300px;
	margin-left: 1%;
	margin-right: -1%;
	margin-top:33px;
}
#social{
	width: 31.6%;
	height: 100%;
	margin-right: 1%;
	margin-top: -1%;
	float: left;
	background-color: #262D33;
opacity:0.91;	position: relative;
	margin-right: 1% bottom:0px;
	left: 0px;
	border-radius: 2px;
	box-shadow: rgba(0, 0, 0, 0.3) 2px 3px 3px;
	height: 420px;
}
#sectionHeader3{
	width: 59%;
	height: 20px;
	background-color: #343E4B;
	position: relative;
	top: 10px;
	height: 30px;
	/* font-family: 'Raleway', 'Helvetica', sans-serif; */
	color: #BDC6C7;
	font-size: 22px;
	padding-right: 5px;
	text-align: right;
	font-weight: lighter;
	box-shadow: 0px 1px 1px 1px rgb(39, 39, 39);
	/* font-variant: small-caps; */
	margin-bottom: 18px;
}
#footer{
	text-align: center;
	color:gray;
}
#indBox{
	width: 24%;
	height: 100%;
	margin-right: 1%;
	margin-top: 1%;
	padding-left: 4px;
	float: left;
	background-color: #262D33;
	opacity: 0.91;
	position: relative;
	margin-right: 1% bottom:0px;
	left: 0px;
	border-radius: 5px;
	box-shadow: rgba(0, 0, 0, 0.3) 2px 3px 3px;
	color: #D8D8D8;

}

#comHeader{
	width: 59%;
	height: 20px;
	background-color: #343E4B;
	margin-bottom: 10px;
	position: relative;
	top: 10px;
	height: 30px;
	font-family: 'Raleway', 'Helvetica', sans-serif;
	color: #BDC6C7;
	font-size: 27px;
	text-align: right;
	font-weight: lighter;
	box-shadow: 0px 1px 1px 1px rgb(39, 39, 39);
	font-variant: small-caps;
}


#text{
	text-align: left;
	font-weight: lighter;
	font-family: 'Raleway', 'Helvetica', sans-serif;
	margin-left: 14px;
	margin-right: 14px;
	color: #000000;
}

#boxes{
	margin-left: 33px;
}

