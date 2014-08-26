<?php include('includes/title.inc.php'); ?>
<?PHP

require_once("./includes/fgcontactform.php");
require_once("./includes/captcha-creator.php");

$formproc = new FGContactForm();
$captcha = new FGCaptchaCreator('scaptcha');

$formproc->EnableCaptcha($captcha);

//1. Add your email address here.
//You can add more than one receipients.
$formproc->AddRecipient('yuriy@moscreative.com'); //<<---Put your email address here


//2. For better security. Get a random tring from this link: http://tinyurl.com/randstr
// and put it here
$formproc->SetFormRandomKey('CnRrspl1FyEylUj');

$formproc->AddFileUploadField('document','doc,docx,odt,pdf',4024);

if(isset($_POST['submitted']))
{
   if($formproc->ProcessForm())
   {
        $formproc->RedirectToURL("thank-you.php");
   }
}

//FORM NUMBER 2//
$formproc2 = new FGContactForm();

//1. Add your email address here.
//You can add more than one receipients.
$formproc2->AddRecipient('yuriy@moscreative.com'); //<<---Put your email address here


//2. For better security. Get a random tring from this link: http://tinyurl.com/randstr
// and put it here
$formproc2->SetFormRandomKey('1nHqD3SGfpeCMGk');

if(isset($_POST['submitted']))
{
   if($formproc2->ProcessForm())
   {
        $formproc2->RedirectToURL("thank-you.php");
   }
}

?>

<?php include('includes/head.php'); ?>	
	<link rel="STYLESHEET" type="text/css" href="styles/contact.css" />
	<link rel="STYLESHEET" type="text/css" href="styles/contactintern.css" />
	<script type='text/javascript' src='js/gen_validatorv31.js'></script>
	<script type='text/javascript' src='js/fg_captcha_validator.js'></script>

	<!--[if lt IE 9]>
	<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
	<script>
      function initialize() {
        var map_canvas = document.getElementById('map_canvas');
        var map_options = {
          center: new google.maps.LatLng(39.16767,-76.854026),
          zoom: 15,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(map_canvas, map_options)
        var image = 'images/m-pointer.png';
		  var myLatLng = new google.maps.LatLng(39.16767,-76.854026);
		  var beachMarker = new google.maps.Marker({
		      position: myLatLng,
		      map: map,
		      icon: image
		  });
      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
	<style>
		
		#map_canvas {
		    width: 100%;
		    height: 300px;
		    background-color: #CCC;
	 	 }
	
	</style>
	
</head>
<body>
	<div id="wrapper" style="min-height:100%; position:relative;">
		<?php include('includes/diamonds.php');?>
		<div class="row">
			<?php include('includes/navigation.php'); ?>
		</div>
	
    <div id="" class="row" style="text-align: center;">
		<div class="c3"></div>
    	<div class="c8 shadow" style="background: white;  padding:20px;">
    		<div class="c5 cardLeft">
    			<p><img id="sendMessage" src="images/contact_page/sendMessage.png"/></p>
    			<div style="height:auto;width:100%;font-family: NeutraText BookItalic;">
	            	<p style="margin-left:12%;">Dearest MOS,</p>
					<form id='contactus' action='<?php echo $formproc2->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
			            <input type='hidden' name='submitted' id='submitted' value='1'/>
			            <input type='hidden' name='<?php echo $formproc2->GetFormIDInputName(); ?>' value='<?php echo $formproc2->GetFormIDInputValue(); ?>'/>
						<div class='container'>
						    <label for='name' >My name is: </label>
						    <input type='text' name='name' id='name' value='<?php echo $formproc2->SafeDisplay('name') ?>' maxlength="50" style="" /><br/>
						    <span id='contactus_name_errorloc' class='error'></span>
						</div>
						<div class='container'>
						<label for='work' >I work for: &nbsp; </label>
						    <input type='text'  name='work' id='work' value='<?php echo $formproc2->SafeDisplay('work') ?>' maxlength="150" size="100"/><br/>
						   
						</div>
						<div class='container'>
						    <label for='email' >Contact me:</label>
						    <input type='text'  name='email' id='email' value='<?php echo $formproc2->SafeDisplay('email') ?>' maxlength="150" size="100"/><br/>
						    <span id='contactus_email_errorloc' class='error'></span>
						</div>
						
						<div class='container'>
						    <span id='contactus_message_errorloc' class='error'></span>
						    <textarea rows="10" cols="70" placeholder="Write your message…" name='message' id='message'><?php echo $formproc2->SafeDisplay('message') ?></textarea>
						</div>
						
						
						<div class='container'>
						   <input type='submit' name='Submit' value='SEND' class="send_button"  />
						</div>
					</form>
	       		</div>
    		</div>
    		<div class="c1 divider" ><img src="images/divider_03.png" style="height: 400px;"/> </div>    		
    		<div class="c6">
    			<div class="c12">
	        		<img id="stamp" src="images/contact_page/stamp.png" style=""/>
	            </div>
	            <div class="address" >
	            	<a title="Show MOS Creative on Map" target="_blank" style="text-decoration:none; " href="https://maps.google.com/maps?q=+MOS+CREATIVE+8945+GUILFORD+RD.++STE+130+|+COLUMBIA,+MD+21046&hl=en&ll=39.171411,-76.851833&spn=0.009399,0.022466&sll=39.16767,-76.854026&sspn=0.010265,0.022252&hq=MOS+CREATIVE&hnear=8945+Guilford+Rd+%23130,+Columbia,+Howard,+Maryland+21046&t=m&z=16&iwloc=A">
		            	<p><b>MOS CREATIVE</b></p>
		                <p>8945 GUILFORD RD.</p>
		                <p>STE 130 | COLUMBIA, MD 21046</p>
		            </a>
	                <p><black>phone</black> +1 410.878.7482</p>
	                <p><black>email</black> MOS@MOSCREATIVE.COM</p>
		            <div id="contact_social" class="" >
		            	<a target="_blank" href="https://www.facebook.com/pages/MOS-Creative/17384788219?sk=app_154272794636138"><img src="images/contact_page/fb.png" class="social_icon"/></a>
		            	<a target="_blank"  href="https://twitter.com/moscreative"><img src="images/contact_page/twitter.png" class="social_icon" style=""/></a>
		                <a target="_blank" href="http://pinterest.com/moscreative/"><img src="images/contact_page/pint.png" class="social_icon" style=" "/></a>
		                <a target="_blank" href="http://www.linkedin.com/company/mos-creative"> <img src="images/contact_page/in.png" class="social_icon" style=" "/></a>
		               	<a target="_blank" href="http://www.behance.net/moscreative"> <img src="images/contact_page/be.png" class="social_icon" style=" "/></a>
		               	<a target="_blank" href="http://www.youtube.com/mosismost"> <img src="images/contact_page/you.png"  class="social_icon" style=" "/></a>
		            </div>
    			</div>		
    		</div>    		
    	</div>
    	<div class="c1"></div>
    </div>	
    <div class="row bg_image" style="margin-bottom: 50px">
    	<h2 class="middle_title">CONTACT</h2>
        <div class="blue_cover" style="z-index:2"></div>
        <a title="Show MOS Creative on Map" target="_blank" href="https://maps.google.com/maps?q=+MOS+CREATIVE+8945+GUILFORD+RD.++STE+130+|+COLUMBIA,+MD+21046&hl=en&ll=39.171411,-76.851833&spn=0.009399,0.022466&sll=39.16767,-76.854026&sspn=0.010265,0.022252&hq=MOS+CREATIVE&hnear=8945+Guilford+Rd+%23130,+Columbia,+Howard,+Maryland+21046&t=m&z=16&iwloc=A"> 
        	<div id="map_canvas" class="shadow"></div>
        </a>
		<h2 class="middle_title" style="">Internship Sign Up</h2>
        <div class="" style=" font-family: NeutraText Book; margin-top:-40px;">
        	<div id="internshipText" class="c5" style="padding-left: 50px;">
            	<p style=" font-weight:bold; font-size:1.5em">Looking for Work Experience?</p>
                <p style="">If you're craving a taste of the creative world, an internship at MOS may be right for you!</p>
                <p style="">Those interested in perfecting their skills in the realm of advertising,marketing, public relations, and graphic<br/>design are encouraged to apply</p>
                <p style=" font-style:italic;">College credit is available for those who qualify.</p>
            </div>
        	<div id="" class="c6" style="">
				<form id='internForm' action='<?php echo $formproc->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'
				enctype="multipart/form-data">
					<input type='hidden' name='submitted' id='submitted' value='1'/>
					<input type='hidden' name='<?php echo $formproc->GetFormIDInputName(); ?>' value='<?php echo $formproc->GetFormIDInputValue(); ?>'/>
					<input type='text'  class='spmhidip' name='<?php echo $formproc->GetSpamTrapInputName(); ?>' />
					<div class='container'>
					    <label for='name' >Your Full Name: </label><br/>
					    <input type='text' name='name' id='name' value='<?php echo $formproc->SafeDisplay('name') ?>' maxlength="50" /><br/>
					    <span id='internForm_name_errorloc' class='error'></span>
					</div>
					<div class='container'>
					    <label for='email' >Email Address:</label><br/>
					    <input type='text' name='email' id='email' value='<?php echo $formproc->SafeDisplay('email') ?>' maxlength="50" /><br/>
					    <span id='internForm_email_errorloc' class='error'></span>
					</div>
					<div class='container'>
					    <label for='name' >School: </label><br/>
					    <input type='text' name='schoolName' id='schoolName' value='<?php echo $formproc->SafeDisplay('schoolName') ?>' maxlength="50" /><br/>
					</div>
					<div class='container'>
					    <label for='name' >Expected Graduation Date: </label><br/>
					    <input type='text' name='graduationDate' id='graduationDate' value='<?php echo $formproc->SafeDisplay('graduationDate') ?>' maxlength="50" /><br/>
				   </div>
    				<div class='container'>
					    <label for='document' >Upload Your Resume:</label><br/>
					    <input type="file" name='document' id='document' /><br/>
					    <span id='internForm_document_errorloc' class='error'></span>
					</div>
					<div class='container'>
					    <label for='name' >Preferred Intern Position: </label><br/>
					    <select name="position" style="width:230px;border:1px solid #CCC;height:30px;">
        					<option value="Graphic Designer" >Graphic Designer</option>
        					<option value="Graphic Designer" >Web Developer</option>
        					<option value="Graphic Designer" >Marketing</option>
        					<option value="Graphic Designer" >Other</option>
        				</select><br/>
					</div>
                    <input type='hidden' name='submitted' id='submitted' value='1'/>
					 <input type='hidden' name='<?php echo $formproc->GetFormIDInputName(); ?>' value='<?php echo $formproc->GetFormIDInputValue(); ?>'/>
					<input type='text'  class='spmhidip' name='<?php echo $formproc->GetSpamTrapInputName(); ?>' />
                	<div class='container' style="float:left">
                    	<span class='error'><?php echo $formproc->GetErrorMessage(); ?></span>
					    <div><img alt='Captcha image' src='show-captcha.php?rand=1' id='scaptcha_img' /></div>
					    <label for='scaptcha' >Enter the code above here:</label>
					    <input type='text' name='scaptcha' id='scaptcha' maxlength="10" /><br/>
					    <span id='contactintern_scaptcha_errorloc' class='error'></span>
					    <div class='short_explanation'>Can't read the image?
					    <a href='javascript: refresh_captcha_img();'>Click here to refresh</a>.</div>
					</div>
        			<div class='container' style="float:right; padding:70px 0px 0px 0px;">
						    <input type='submit' name='Submit' value='SEND' class="send_button"  />
					</div>          	
				</form>
		 	</div>
		 </div>	
	</div>
	<!-- client-side Form Validations:
			Uses the excellent form validation script from JavaScript-coder.com-->
			<script type='text/javascript'>
			// <![CDATA[
			
			    var frmvalidator  = new Validator("contactus");
			    frmvalidator.EnableOnPageErrorDisplay();
			    frmvalidator.EnableMsgsTogether();
			    frmvalidator.addValidation("name","req","Please provide your name");
			
			    frmvalidator.addValidation("email","req","Please provide your email address");
			
			    frmvalidator.addValidation("email","email","Please provide a valid email address");
			
			    frmvalidator.addValidation("message","maxlen=2048","The message is too long!(more than 2KB!)");
			
			// ]]>
			</script>
			<script type='text/javascript'>
				// <![CDATA[
			
			    var frmvalidator  = new Validator("internForm");
			    frmvalidator.EnableOnPageErrorDisplay();
			    frmvalidator.EnableMsgsTogether();
			    frmvalidator.addValidation("name","req","Please provide your name");
			
			    frmvalidator.addValidation("email","req","Please provide your email address");
			
			    frmvalidator.addValidation("email","email","Please provide a valid email address");
			
			    frmvalidator.addValidation("message","maxlen=2048","The message is too long!(more than 2KB!)");
			
			    frmvalidator.addValidation("document","file_extn=doc;docx;odt;pdf","Upload documents only. Supported file types are: doc,docx,odt,pdf");
			
			    frmvalidator.addValidation("scaptcha","req","Please enter the code in the image above");
			
			    document.forms['internForm'].scaptcha.validator
			      = new FG_CaptchaValidator(document.forms['internForm'].scaptcha,
			                    document.images['scaptcha_img']);
			
			    function SCaptcha_Validate()
			    {
			        return document.forms['internForm'].scaptcha.validator.validate();
			    }
			
			    frmvalidator.setAddnlValidationFunction("SCaptcha_Validate");
			
			    function refresh_captcha_img()
			    {
			        var img = document.images['scaptcha_img'];
			        img.src = img.src.substring(0,img.src.lastIndexOf("?")) + "?rand="+Math.random()*1000;
			    }
			
			// ]]>
			</script>
	
	<?php include('includes/footer.php');?>
