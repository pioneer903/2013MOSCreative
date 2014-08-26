<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>Project Interview Form | MOS Creative</title>
	<link rel="stylesheet" href="css/validationEngine.jquery.css" type="text/css"/>
<!-- 	<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" /> -->
	<link rel="stylesheet" href="css/projectInterviewForm.css" type="text/css"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"> 	
	<meta name="author" content="Yuriy Buha"/>



	
	<!-- 	Form Validation Engine -->
	<script src="js/jquery-1.8.2.min.js" type="text/javascript"></script>
	<script src="js/languages/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8"></script>
	<script src="js/jquery.validationEngine.js" type="text/javascript" charset="utf-8"></script>
	<script>
		jQuery(document).ready(function(){
		
			jQuery("#formID1").validationEngine('attach', {
				onValidationComplete: function(form, status1){
					if (status1){
						$("#formID1").css('display', 'none');
						$("#formID2").css('display', 'block');
						
					}
				}  
			})
			jQuery("#formID2").validationEngine('attach', {
				onValidationComplete: function(form, status2){
					if (status2){
						$("#formID2").css('display', 'none');
						$("#formID3").css('display', 'block');
						$("#formID3").css('visibility', 'visible');
						$(".jslider-value span").css('visibility', 'visible');
						$(".jslider-value").css('color', 'black');
						
						

					}
				}  
			})
			
			jQuery("#formID3").validationEngine('attach', {
				onValidationComplete: function(form, status3){
					
					if (status3){
					    $(".submit").css('visibility', 'hidden');
					    $(".heading").css('visibility', 'hidden');
 						$("#formID3").css('visibility', 'hidden');
 						$(".jslider-value span").css('visibility', 'hidden');
						$(".jslider-value").css('color', 'white');
					
						$("#formID1").find(":input").appendTo("#formID3");
						$("#formID2").find(":input").appendTo("#formID3");	
						$("#formID3").attr("action", "form_processor.php");
						$("#formID3").submit();

					}						
				}  
			})
			$("#backto1").click(function(){
				$("#formID1").css('display', 'block');
				$("#formID2").css('display', 'none');
				$("#formID3").css('display', 'none');				

			
			});
			$("#backto2").click(function(){
				$("#formID1").css('display', 'none');
				$("#formID2").css('display', 'block');
				$("#formID3").css('display', 'none');
			});
		});
	</script>
	

	  	 
	  
	<!-- 	Placeholder handler for not supportive browsers -->
	<script src="js/jquery.placeholder.js"></script>
	<script>
		// To test the @id toggling on password inputs in browsers that don’t support changing an input’s @type dynamically (e.g. Firefox 3.6 or IE), uncomment this:
		// $.fn.hide = function() { return this; }
		// Then uncomment the last rule in the <style> element (in the <head>).
		$(function() {
			// Invoke the plugin
			$('input, textarea').placeholder();
			
		});
	</script>
	
	
	<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
		
<!-- Range slider from http://touchpunch.furf.com/ -->
<!-- bin/jquery.slider.min.css -->
	<link rel="stylesheet" href="css/jslider.css" type="text/css">
<!-- end -->

	<!-- bin/jquery.slider.min.js -->
	<script type="text/javascript" src="js/jslider/jshashtable-2.1_src.js"></script>
	<script type="text/javascript" src="js/jslider/jquery.numberformatter-1.2.3.js"></script>
	<script type="text/javascript" src="js/jslider/tmpl.js"></script>
	<script type="text/javascript" src="js/jslider/jquery.dependClass-0.1.js"></script>
	<script type="text/javascript" src="js/jslider/draggable-0.1.js"></script>
	<script type="text/javascript" src="js/jslider/jquery.slider.js"></script>
  <!-- end -->
	
	<style type="text/css" media="screen">
	  .layout-slider { margin: 20px auto 50px auto; width: 50%; }
	  
	 </style>
 
	  	 
	  	 
	  	 
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
	<script>
		$(function() {
		$( ".slideDown" ).tooltip({
		  show: {
		    effect: "slideDown",
		    delay: 250
		  }
		});
		<!-- 	  Date picker -->
		    $( "#datepicker" ).datepicker({
		      showButtonPanel: true
		    });
		});
	</script>
  <style type="text/css" media="screen">  	/* Tooltip */
	.ui-tooltip {
		padding: 8px;
		position: absolute;
		z-index: 9999;
		max-width: 253px;
		width: 253px;
		-webkit-box-shadow: 0 0 5px #aaa;
		box-shadow: 0 0 5px #aaa;
		background: #bd141b;
		color:white;	
		font-variant: normal;
		text-align: left
	}

  </style>
  
</head>
<body>
    <h1 class="center heading" id="">Let's get started</h1>	
	<form id="formID1" class="formular center" method="post" action="" >
		<div class="section group " style="margin:auto">
			<div class="col span_1_of_3">
				<h2 >Your Details</h2>
			</div>
			<div class="col span_1_of_3">
				<div style="" class="center">
				<img  src="../images/progressBar1.png"  border="0" alt="MOS Creative Progress bar" />
				
			</div>
			</div>
			<div class="col span_1_of_3">
			</div>
		</div>
		<div class="center">
			<input type=hidden name="oid" value="00DU0000000HgRO">
			<input type=hidden name="retURL" value="http://advertisingmos.com/hosting/2013MOS/project_interview_form/thanks.html">
			
			<input   id="first_name" placeholder="Your Name" data-validation-engine="validate[required]"  maxlength="40" name="first_name" size="20" type="text" /><br>
	
			<input  id="last_name" placeholder="Last Name" data-validation-engine="validate[required]" maxlength="80" name="last_name" size="20" type="text" /><br>
	
			<input  id="company" placeholder="Company Name"  maxlength="40" name="company" size="20" type="text" /><br>
			
			<input  id="phone" placeholder="Your Contact Telephone Number" data-validation-engine="validate[required,custom[phone]]" maxlength="80" name="phone" type="text" /><br>
			
			<input  id="email" placeholder="Your Email" data-validation-engine="validate[required,custom[email]]"  maxlength="80" name="email" size="20" type="text" /><br>
			
			<input  placeholder="Your Website"  class="class_url " type="text" name="URL" id="url" /><br>
			
			<button class=" submit btn btn-5 btn-5a icon-arrow-right"><span>Continue</span></button>
		</div>	
	</form>
		
		
		
		<form id="formID2" class="formular center" method="post" action="">
			<div class="section group">
				<div class="col span_1_of_3">
					<h2 > Project Scope</h2>
				</div>
				<div class="col span_1_of_3">
					<div style="" class="center">
					<img  src="../images/progressBar2.png"  border="0" alt="MOS Creative Progress bar" />
					
				</div>
				</div>
				<div class="col span_1_of_3">
				</div>
			</div>
			
			<div class="section group">
				<div class="col span_1_of_3">
					<input type="checkbox" id="checkbox-1-1" class="validate[minCheckbox[1]] checkbox regular-checkbox big-checkbox" name="group[group]" value="Comp analysis and Research"/>
					<label class="slideDown" for="checkbox-1-1" title="Comp analysis and Research. Praesent tortor ligula, suscipit et bibendum sit amet, sollicitudin sed arcu.">comp analysis &amp; research</label>
				</div>
				<div class="col span_1_of_3">	
					<input type="checkbox" id="checkbox-1-2" class="validate[minCheckbox[1]] checkbox regular-checkbox big-checkbox" name="group[group]" value="Marketing Strategy"/>
					<label title="Add description in the title property" class="slideDown" for="checkbox-1-2">marketing strategy</label>
					</div>
				<div class="col span_1_of_3">
					<input type="checkbox" id="checkbox-1-3" class="validate[minCheckbox[1]] checkbox regular-checkbox big-checkbox" name="group[group]" value="Brand Identity/Logo" />
					<label title="" class="slideDown" for="checkbox-1-3">brand identity / logo </label>
				</div>
			
				<div class="col span_1_of_3">
					<input type="checkbox" id="checkbox-2-1" class="validate[minCheckbox[1]] checkbox regular-checkbox big-checkbox" name="group[group]" value="Web Design and Development" />
					<label title="" class="slideDown" for="checkbox-2-1">web design &amp; development</label>
				</div>
				<div class="col span_1_of_3">	
					<input type="checkbox" id="checkbox-2-2" class="validate[minCheckbox[1]] checkbox regular-checkbox big-checkbox" name="group[group]" value="Mobile Design" />
					<label title="" class="slideDown" for="checkbox-2-2">mobile design </label>
				</div>
				<div class="col span_1_of_3">	
					<input type="checkbox" id="checkbox-2-3" class="validate[minCheckbox[1]] checkbox regular-checkbox big-checkbox" name="group[group]" value="Pring Design" />
					<label title="" class="slideDown" for="checkbox-2-3">print design</label>
				</div>
				<div class="col span_1_of_3">
					<input type="checkbox" id="checkbox-3-1" class="validate[minCheckbox[1]] checkbox regular-checkbox big-checkbox" name="group[group]" value="Search Engine Optimization" />
					<label title="" class="slideDown" for="checkbox-3-1">search engine marketing  </label>
				</div>
				<div class="col span_1_of_3">	
					<input type="checkbox" id="checkbox-3-2" class="validate[minCheckbox[1]] checkbox regular-checkbox big-checkbox" name="group[group]" value="Social Medie" />
					<label title="" class="slideDown" for="checkbox-3-2">social media </label>
				</div>
				<div class="col span_1_of_3">	
					<input type="checkbox" id="checkbox-3-3" class="validate[minCheckbox[1]] checkbox regular-checkbox big-checkbox" name="group[group]" value="Video/Animation" />
					<label title="" class="slideDown" for="checkbox-3-3">video / animation</label>
				</div>
			</div>
			
			 <input type="text" value="" id="tags" name="00NU00000038is3" style="display:none;">
			 <div class="section group">
				<div class="col span_1_of_2">
					<button type="button" name="back1" id="backto1" class="btn btn-5 btn-5a icon-arrow-left"><span>Return</span></button>
				</div>
				<div class="col span_1_of_2">
					<button class=" submit btn btn-5 btn-5a icon-arrow-right"><span>Continue</span></button>
				</div>
			</div>
		</form>
		
		
		<form id="formID3" class="formular center" method="post" action="" >
			<div class="section group">
				<div class="col span_1_of_3">
					<h2 >Your Project</h2>
				</div>
				<div class="col span_1_of_3">
					<div style="" class="center">
					<img src="../images/progressBar3.png"  border="0" alt="MOS Creative Progress bar" />
					
				</div>
				</div>
				<div class="col span_1_of_3">
				</div>
			</div>
			<div class="section group">
				<div class="col span_1_of_2">
					<textarea id="description"  placeholder="Briefly Describe the Project" data-validation-engine="validate[required]" name="description" rows="18" cols="50"></textarea>
				</div>
				<div class="col span_1_of_2">
					<label  for="00NU00000038gb4" id="sliderLebel">Drag your budget range:</label><br/>
					<div class="layout-slider" style="width: 100%">
						<span style="display: inline-block; width: 400px; padding: 0px; "><input id="Slider1" type="slider"  name="00NU00000038gb4" value="5000;40000" /></span>
				    </div>
				    <script type="text/javascript" charset="utf-8">
				      jQuery("#Slider1").slider({ from: 1000, to: 50000, step: 500, smooth: true, round: 0, dimension: "&nbsp;$", skin: "plastic" });
				    </script>
				</div>
				<div class="col span_1_of_2">	
					<input placeholder="Due Date" data-validation-engine="validate[required,custom[americandate]]"  type="text" name="00NU00000038is8"id="datepicker" class="validate[required] text-input datepicker"  />
				</div>
			</div>
		
		
		
			
			<button type="button" name="back2" id="backto2" class="btn btn-5 btn-5a icon-arrow-left"><span>Return</span></button>		

			<button class=" submit btn btn-5 btn-5a icon-envelope"><span>Submit</span></button>
		</form>
		
</body>
</html>