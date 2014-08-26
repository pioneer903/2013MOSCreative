<?php include('includes/title.inc.php'); ?>
<?PHP
/*
    Contact Form from HTML Form Guide
    This program is free software published under the
    terms of the GNU Lesser General Public License.
    See this page for more info:
    http://www.html-form-guide.com/contact-form/php-contact-form-tutorial.html
*/
require_once("./includes/fgcontactform.php");
require_once("./includes/captcha-creator.php");

$formproc = new FGContactForm();
$captcha = new FGCaptchaCreator('scaptcha');



//1. Add your email address here.
//You can add more than one receipients.
$formproc->AddRecipient('yuriy@moscreative.com'); //<<---Put your email address here


//2. For better security. Get a random tring from this link: http://tinyurl.com/randstr
// and put it here
$formproc->SetFormRandomKey('CnRrspl1FyEylUj');


if(isset($_POST['submitted']))
{
   if($formproc->ProcessForm())
   {
        $formproc->RedirectToURL("thank-you.php");
   }
}

?>

<!DOCTYPE html>
<!-- HTML5 Mobile Boilerplate -->
<!--[if IEMobile 7]><html class="no-js iem7"><![endif]-->
<!--[if (gt IEMobile 7)|!(IEMobile)]><!--><html class="no-js" lang="en"><!--<![endif]-->

<!-- HTML5 Boilerplate -->
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html class="no-js lt-ie9 lt-ie8" lang="en"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js lt-ie9" lang="en"><![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"><!--<![endif]-->
<html lang="en">
<head>
	<meta charset="utf-8"/>
<title> MOS Creative<?php  if (isset($title)) {echo "&#8212;{$title}";} ?></title>
	<meta name="viewport" content="width=device-width, minimumscale=
	1.0, maximum-scale=1.0" />
	<link href="styles/main.css" type="text/css" rel="stylesheet">
	<link href="styles/diamonds.css" type="text/css" rel="stylesheet">	
	<link rel="STYLESHEET" type="text/css" href="styles/contact.css" />
	<link rel="STYLESHEET" type="text/css" href="styles/contactintern.css" />
	<script type='text/javascript' src='js/gen_validatorv31.js'></script>
	<script type='text/javascript' src='js/fg_captcha_validator.js'></script>
      

	<!--[if lt IE 9]>
	<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- 	JQuery libraries -->
	<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
	<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	<script type="text/javascript" src="js/jquery-1.7.1.js"></script>
	
	<!-- CSS and JS for Diamonds -->
	<script type="text/javascript"  src="js/script.js"></script>
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
	.social_icon{
		width:20%;
	}
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
	<header >
		<?php include('includes/navigation.php'); ?>
		
		<div id="right" style="">

		</div><!-- end #right -->
		<div class="clearfix"></div>
	</header>
	
	<!-- testing div -->
	<div id="fixed" style="position: fixed; top: 50%, left: 0%;"></div>
	
    <!-- CONTACT FORM BEGIN -->
    <div id="contactform_container">
    	<div id="contactform_left">
        	<div style="height:auto;padding:6% 0 0 4%;">
        		<img src="images/contact_page/sendMessage.png"/>
            </div>
            <div style="height:auto;width:100%;font-family: NeutraText BookItalic;">
            	<p style="margin-left:12%;">Dearest MOS,</p>
            	<!-- Form Code Start -->
			<form id='contactus' action='<?php echo $formproc->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'>
			<fieldset >
			
			
			<input type='hidden' name='submitted' id='submitted' value='1'/>
			<input type='hidden' name='<?php echo $formproc->GetFormIDInputName(); ?>' value='<?php echo $formproc->GetFormIDInputValue(); ?>'/>
			<input type='text'  class='spmhidip' name='<?php echo $formproc->GetSpamTrapInputName(); ?>' />
		
			<div><span class='error'><?php echo $formproc->GetErrorMessage(); ?></span></div>
			<div class='container'>
			    <label for='name' >My name is: </label>
			    <input type='text' name='name' id='name' value='<?php echo $formproc->SafeDisplay('name') ?>' maxlength="50" tyle="" /><br/>
			    <span id='contactus_name_errorloc' class='error'></span>
			</div>
			<div class='container'>
			<label for='work' >I work  for: &nbsp; </label>
			    <input type='text'  name='work' id='work' value='<?php echo $formproc->SafeDisplay('work') ?>' maxlength="150" size="100"/><br/>
			    <span id='contactus_email_errorloc' class='error'></span>
			</div>
			<div class='container'>
			    <label for='email' >Contact me:</label>
			    <input type='text'  name='email' id='email' value='<?php echo $formproc->SafeDisplay('email') ?>' maxlength="150" size="100"/><br/>
			    <span id='contactus_email_errorloc' class='error'></span>
			</div>
			
			
			<div class='container'>
			    
			    <span id='contactus_message_errorloc' class='error'></span>
			    <textarea rows="10" cols="70" placeholder="Write your message…" name='message' id='message'><?php echo $formproc->SafeDisplay('message') ?></textarea>
			</div>
			
			
			<div class='container'>
			    <input type='submit' name='Submit' value='' size="200" />
			</div>
			
			</fieldset>
			</form>
            	
            	        	<!--<form id="contactForm" name="contactForm" method="post">
                	<p style="margin-left:12%;">My name is  <input type="text" name="name" id="name" size="13" style=" background: transparent;border-style: none none solid none; border-color:black;border-width:1px;white-space:nowrap;"/></p>
                    <p style="margin-left:12%;line-height:1px;">I work for  <input type="text" name="company" id="company" size="13" style=" background: transparent;border-style: none none solid none; border-color:black;border-width:1px;white-space:nowrap;"/></p>
                    <p style="margin-left:12%;line-height:1px;">Contact me:  <input type="text" name="contact_info" id="contact_info" size="13" style=" background: transparent;border-style: none none solid none; border-color:black;border-width:1px;white-space:nowrap;"/></p>
                    <textarea name="message" placeholder="Write your message…" id="message" rows="5" col="20" style=" background: transparent; border:none; resize:none;"></textarea>
                </form>
                -->
               
            </div>
           
        </div>
        <div id="contacctform_center">
         	<img src="images/contact_page/dividerlines.png" style="padding:0% 0 0 0; height:95%;"/>
        </div>
        <div id="contactform_right">
        	<div style="height:auto;padding:6% 0 0 6%;">
        		<img src="images/contact_page/stamp.png" style="margin: 0 0 0 16%;"/>
            </div>
            <div style="height:auto;width:100%;padding: 0 25% 0 0;font-family: NeutraText Book;">
            	<p style="margin-left:3%;margin-top:30%; line-height:5px;"><b>MOS CREATIVE</b></p>
                <p style="margin-left:3%;line-height:5px;">8945 GUILFORD RD.</p>
                <p style="margin-left:3%;line-height:5px; width:100%;white-space:nowrap;">STE 130 | COLUMBIA, MD 21046</p><br/>
                <p style="margin-left:3%;line-height:5px;">phone +1 410.878.7482</p>
                <p style="margin-left:3%;line-height:5px; white-space:nowrap;">email MOS@MOSCREATIVE.COM</p>
            </div>
           <div id="contact_social" style="height:auto;float:left;white-space:nowrap; padding: 0 20% 0 0; width: 90%;" >
            	<a target="_blank" href="https://www.facebook.com/pages/MOS-Creative/17384788219?sk=app_154272794636138"><img src="images/contact_page/fb.png" class="social_icon"/></a>
            	<a target="_blank"  href="https://twitter.com/moscreative"><img src="images/contact_page/twitter.png" class="social_icon" style=""/></a>
                <a target="_blank" href="http://pinterest.com/moscreative/"><img src="images/contact_page/pint.png" class="social_icon" style=" "/></a>
                <a target="_blank" href="http://www.linkedin.com/company/mos-creative"> <img src="images/contact_page/in.png" class="social_icon" style=" "/></a>
               	<a target="_blank" href="http://www.behance.net/moscreative"> <img src="images/contact_page/be.png" class="social_icon" style=" "/></a>
               	<a target="_blank" href="http://www.youtube.com/mosismost"> <img src="images/contact_page/you.png"  class="social_icon" style=" "/></a>
            </div>
        </div>
    </div>
    <!-- CONTACT FORM END-->
    
    <div id="middle_container">
	    <div class="middle-bg"></div>
		<h2 class="middle_title">CONTACT</h2>
    	
        <div id="middle_banner">
        <div class="blue_cover" style="z-index:2"></div>
     <!--   <iframe width="100%" height="300px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=+MOS+CREATIVE+8945+GUILFORD+RD.++STE+130+|+COLUMBIA,+MD+21046&amp;aq=&amp;sll=39.16767,-76.854026&amp;sspn=0.010265,0.022252&amp;g=8945+GUILFORD+RD.++STE+130+|+COLUMBIA,+MD+21046&amp;ie=UTF8&amp;hq=MOS+CREATIVE&amp;hnear=8945+Guilford+Rd+%23130,+Columbia,+Howard,+Maryland+21046&amp;t=m&amp;cid=15110226638546032372&amp;ll=39.178514,-76.826363&amp;spn=0.066534,0.480652&amp;z=12&amp;output=embed"></iframe><br /><small>
        <a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=+MOS+CREATIVE+8945+GUILFORD+RD.++STE+130+|+COLUMBIA,+MD+21046&amp;aq=&amp;sll=39.16767,-76.854026&amp;sspn=0.010265,0.022252&amp;g=8945+GUILFORD+RD.++STE+130+|+COLUMBIA,+MD+21046&amp;ie=UTF8&amp;hq=MOS+CREATIVE&amp;hnear=8945+Guilford+Rd+%23130,+Columbia,+Howard,+Maryland+21046&amp;t=m&amp;cid=15110226638546032372&amp;ll=39.178514,-76.826363&amp;spn=0.066534,0.480652&amp;z=12" style="color:#0000FF;text-align:left">View Larger Map</a>
        </small>-->
        
        <a  target="_blank" href="https://maps.google.com/maps?q=+MOS+CREATIVE+8945+GUILFORD+RD.++STE+130+|+COLUMBIA,+MD+21046&hl=en&ll=39.171411,-76.851833&spn=0.009399,0.022466&sll=39.16767,-76.854026&sspn=0.010265,0.022252&hq=MOS+CREATIVE&hnear=8945+Guilford+Rd+%23130,+Columbia,+Howard,+Maryland+21046&t=m&z=16&iwloc=A"> <div id="map_canvas"></div></a>
        </div>
        
        
        	<div style=""><h2 class="middle_title" style="text-align:center;">Internship Sign Up</h2></div>
            <div style="">
            	<div style="display:inline-block;width:33%;float:left; padding:0 0 0 5%;">
                	<p style="font-family: NeutraText BookItalic; font-weight:bold;">Looking for Work Experience?</p>
                    <p style=" white-space:normal;font-family: NeutraText Book;">If you're craving a taste of the creative<br/> world, an internship at MOS may be<br/> right for you!</p>
                    <p style=" white-space:normal;font-family: NeutraText Book;">Those interested in perfecting their<br/> skills in the realm of advertising,<br/>marketing, public relations,and graphic<br/>design are encouraged to apply</p>
                    <p style=" white-space:normal;font-family: NeutraText Book; font-style:italic;">College credit is available for those who qualify.</p>
                </div>
                
            	<!--<div style="border:1px solid blue;display:inline-block;;width:33%;"></div>-->
            	<div style="display:inline-block;">
                	 <!-- Form Code Start -->
					<form id='contactintern' action='<?php echo $formproc->GetSelfScript(); ?>' method='post' accept-charset='UTF-8'
					enctype="multipart/form-data">
					
						<fieldset >
							<input type='hidden' name='submitted' id='submitted' value='1'/>
							<input type='hidden' name='<?php echo $formproc->GetFormIDInputName(); ?>' value='<?php echo $formproc->GetFormIDInputValue(); ?>'/>
							<input type='text'  class='spmhidip' name='<?php echo $formproc->GetSpamTrapInputName(); ?>' />
	                    	<table id="internFormTable" style="font-family: NeutraText Book;margin-left:10%;">
	                        	<tbody>
	                            	<tr>
	                            		<td>
		                            		<div><span class='error'><?php echo $formproc->GetErrorMessage(); ?></span></div>
											<div class='container'>
											    <label for='name' >Your Full Name: </label><br/>
											    <input type='text' name='name' id='name' value='<?php echo $formproc->SafeDisplay('name') ?>' maxlength="50" /><br/>
											    <span id='contactintern_name_errorloc' class='error'></span>
											</div>
										</td>
		
										<td >
											<div class='container'>
											    <label for='email' >Email Address:</label><br/>
											    <input type='text' name='email' id='email' value='<?php echo $formproc->SafeDisplay('email') ?>' maxlength="50" /><br/>
											    <span id='contactintern_email_errorloc' class='error'></span>
											</div>
										</td>
									</tr>
	                                <tr>
		                                <td>
		                            		<div><span class='error'><?php echo $formproc->GetErrorMessage(); ?></span></div>
											<div class='container'>
											    <label for='name' >School: </label><br/>
											    <input type='text' name='name' id='name' value='<?php echo $formproc->SafeDisplay('name') ?>' maxlength="50" /><br/>
											    <span id='contactintern_name_errorloc' class='error'></span>
											</div>
										</td>
		                            	<td>
		                            		<div><span class='error'><?php echo $formproc->GetErrorMessage(); ?></span></div>
											<div class='container'>
											    <label for='name' >Expected Graduation Date: </label><br/>
											    <input type='text' name='graduation_date' id='graduation_date' value='<?php echo $formproc->SafeDisplay('graduation_date') ?>' maxlength="50" /><br/>
											    <span id='contactintern_graduation_date_errorloc' class='error'></span>
											</div>
										</td>    
	                                </tr>
	                                
	                        		<tr>
	                        			<td>Preferred Intern Position<br/>
	                        				<select name="position" style="width:81%;border:1px solid #CCC;height:30px;">
	                        					<option value="Graphic Designer" >Graphic Designer</option>
	                        					<option value="Graphic Designer" >Web Developer</option>
	                        					<option value="Graphic Designer" >Marketing</option>
	                        					<option value="Graphic Designer" >Other</option>
	                        				</select><br/>
	                        			</td>
	                        		
		                        		<td rowspan="2">
		                                	<div class='container'>
											    <div><img alt='Captcha image' src='show-captcha.php?rand=1' id='scaptcha_img' /></div>
											    <label for='scaptcha' >Enter the code above here:</label>
											    <input type='text' name='scaptcha' id='scaptcha' maxlength="10" /><br/>
											    <span id='contactintern_scaptcha_errorloc' class='error'></span>
											    <div class='short_explanation'>Can't read the image?
											    <a href='javascript: refresh_captcha_img();'>Click here to refresh</a>.</div>
											</div>
	                                	</td>
									</tr>
										
	                                <tr>
	                                	<td >
		                        			<div class='container'>
											    <label for='document' >Upload Your Resume:</label><br/>
											    <input type="file" name='document' id='document' value=""/><br/>
											    <span id='contactintern_document_errorloc' class='error'></span>
											</div>
										</td>
	                                </tr>
	                                <tr>
	                                	<td>
	                                	</td>
	                                	<td style="text-align: right;">
	                                		<div class='container'>
											    <input type='submit' name='Submit' value='' id="submit_button" />
											</div>
	                                	</td>
	                                </tr>
	                       		</tbody>
	                        </table>
	                      </fieldset>
						</form>
						<!-- client-side Form Validations:
						Uses the excellent form validation script from JavaScript-coder.com-->
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

    var frmvalidator  = new Validator("contactintern");
    frmvalidator.EnableOnPageErrorDisplay();
    frmvalidator.EnableMsgsTogether();
    frmvalidator.addValidation("name","req","Please provide your name");

    frmvalidator.addValidation("email","req","Please provide your email address");

    frmvalidator.addValidation("email","email","Please provide a valid email address");

    frmvalidator.addValidation("message","maxlen=2048","The message is too long!(more than 2KB!)");

    frmvalidator.addValidation("document","file_extn=doc;docx;odt;pdf","Upload documents only. Supported file types are: doc,docx,odt,pdf");

    frmvalidator.addValidation("scaptcha","req","Please enter the code in the image above");

    document.forms['contactintern'].scaptcha.validator
      = new FG_CaptchaValidator(document.forms['contactintern'].scaptcha,
                    document.images['scaptcha_img']);

    function SCaptcha_Validate()
    {
        return document.forms['contactintern'].scaptcha.validator.validate();
    }

    frmvalidator.setAddnlValidationFunction("SCaptcha_Validate");

    function refresh_captcha_img()
    {
        var img = document.images['scaptcha_img'];
        img.src = img.src.substring(0,img.src.lastIndexOf("?")) + "?rand="+Math.random()*1000;
    }

// ]]>
</script>
	
