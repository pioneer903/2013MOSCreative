<?php include('includes/title.inc.php'); ?>
<?php include('includes/head.php'); ?>
	
		<!-- jQuery and CSS for BXslider -->
		<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
		<script src="js/jquery.bxslider.min.js"></script>		
		<script src="plugins/jquery.easing.1.3.js"></script>
		<script src="plugins/jquery.fitvids.js"></script>	
		<link rel="stylesheet" type="text/css" href="styles/jquery.bxslider.css" />

		<!-- for CaptionHover Effect -->
		<link rel="stylesheet" type="text/css" href="styles/component.css" />
		<script src="js/modernizr.custom.js"></script>


		<!-- CSS and JavaScript for filter portfolio -->
		<script src="js/jquery.mixitup.js"></script>
		<link rel="stylesheet" type="text/css" href="styles/project_filter.css" />
	
	
</head>
<body>
	<div id="wrapper" style="min-height:100%; position:relative;">
		<?php include('includes/diamonds.php');?>
		<header>
			<div class="row">
				<?php include('includes/navigation.php'); ?>
				<?php include('includes/work-slider.php');?>
			</div>		
		</header>
		<div id="project_container" class="shadow bg_image">
			<div class="controls " style="text-align:right; margin:auto">	
				<ul class="row" >
					<li class="" ><h3>Filter</h3></li>
					<li class="filter" data-filter="all" title="All Projects">All Projects</a></li> 
					<li class="filter" data-filter="web" title="Web">Web & Mobile</a></li> 
					<li class="filter" data-filter="print" title="Print">Print</a></li> 
					<li class="filter" data-filter="branding" title="Branding">Branding</li> 
					<li class="filter" data-filter="branding web" title="Marketing">Marketing</a></li> 
				</ul>
			</div>
			
			<ul id="Grid"  >
				<li  data-id="id-1" class="mix branding mix_all" style="display: inline-block; opacity: 1;">
					<a href="projects/project_mosaic_power.php" ><img class="imgHoverable"  src="images/project_mosaic_power_thumb.png"  alt="MOS Creative project, Mosaic Power" /></a>
				</li> 
				<li  data-id="id-2" class="mix web print" style="display: inline-block; opacity: 1;">
					<a href="projects/project_rt.php" ><img class="imgHoverable" src="images/project_rt_thumb.png"  alt="RT" /></a>
				</li>
				<li  data-id="id-3" class="mix web" style="display: inline-block; opacity: 1;">
					<a  href="projects/project_edward.php" ><img  class="imgHoverable" src="images/project_edward_thumb.png"  alt="MOS Creative project, Edward Artur Jewelers" /></a>
				</li>
				<li  data-id="id-4" class="mix branding web">
					<a href="projects/project_sentrien.php"><img class="imgHoverable" src="images/project_sentrien_thumb.png"  alt="MOS Creative project, Sentrien Systems " /></a>
				</li>
				<li  data-id="id-5" class="mix web">
					<a href="projects/project_northpoint.php" ><img class="imgHoverable" src="images/project_northpoint_thumb.png"  alt="MOS Creative project, North Point Builders " /></a>
				</li>
				<li  data-id="id-6" class="mix branding">
					<a href="projects/project_premier.php" ><img class="imgHoverable" src="images/project_premier_thumb.png"  alt="MOS Creative project, Premier Home Realty " /></a>
				</li>
				<li  data-id="id-7" class="mix branding web">
					<a href="projects/project_aa.php" ><img class="imgHoverable" src="images/project_aa_thumb.png"  alt="MOS Creative project, A and A " /></a>
				</li>
				<li  data-id="id-8" class="mix branding web print">
					<a href="projects/project_green_jobworks.php" ><img class="imgHoverable" src="images/project_green_jobworks_thumb.png"  alt="MOS Creative project " /></a>
				</li>
				<li  data-id="id-9" class="mix web">
					<a href="projects/project_vfc.php" ><img class="imgHoverable" src="images/project_vfc_thumb.png"  alt="MOS Creative project " /></a>
				</li>
				<li  data-id="id-10" class="mix branding web print">
					<a href="projects/project_bellolean.php" ><img class="imgHoverable" src="images/project_bellolean_thumb.png"  alt="MOS Creative project" /></a>
				</li>
				<li  data-id="id-11" class="mix web">
					<a href="projects/project_supanos.php" ><img class="imgHoverable" src="images/project_supanos_thumb.png"  alt="MOS Creative project" /></a>
				</li>
				<li  data-id="id-12" class="mix print web">
					<a href="projects/project_bumble.php" ><img class="imgHoverable" src="images/project_bumble_thumb.png"  alt="MOS Creative project " /></a>
				</li>
				<li class="gap"></li> <!-- "gap" elements fill in the gaps in justified grid -->
			</ul>
		  </div><!-- #project_container -->
	</div><!-- #wrapper -->
		<script>
			$(function(){
			    $('#Grid').mixitup();
			});
		</script>
	<?php include('includes/footer.php');?>
	
	
