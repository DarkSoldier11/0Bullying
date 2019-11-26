<?php
include("../res/x5engine.php");
$nameList = array("ume","2nf","7ma","dlz","fmf","pxm","lpa","fyp","8nn","yve");
$charList = array("6","3","N","N","L","4","3","4","N","5");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
