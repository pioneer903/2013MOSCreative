<?php include('includes/title.inc.php'); ?>
<?php include('includes/head.php'); ?>

	<!-- CSS and JS for the da-Slider -->
	<link rel="stylesheet" type="text/css" href="styles/slider_style.css" />
	<script type="text/javascript" src="js/modernizr.custom.28468.js"></script>
	<script type="text/javascript" src="js/jquery.cslider.js"></script>
	<noscript>
		<link rel="stylesheet" type="text/css" href="styles/nojs.css" />
	</noscript>
		
	<script type="text/javascript">
			$(function() {
				$('#da-slider').cslider();
			});
	</script>
	
	<!-- JavaScript for RSS feed from MOS blog -->
	<script src="js/jquery.zrssfeed.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(document).ready(function () {
			$('#blogFeed').rssfeed('http://blog.moscreative.com/feed/', {
				limit: 6,
				linkcontent: true
			});
		});
	</script>
	
</head>
<body>
	<div id="wrapper" style="min-height:100%; position:relative;" class="wfull">
		<?php include('includes/diamonds.php');?>
		<header>
			<div class="row">
				<?php include('includes/navigation.php'); ?>
				<?php include('includes/da-slider.php');?>
			</div>		
		</header>
		
		<div id="fixed" style="position: fixed; top: 55%; left: 0%; z-index:999;"></div>
		<div id="fixed2" style="position: fixed; top: 55%; left: 20%; z-index:999;"></div>
		
		<div id="process" class="row shadow bg_image">
			<h2 class="c12" >OUR PROCESS</h2>
			<div class="process c3" id="untitled-region-111" >
				<img src="images/process_analyze.png" />
				<h3>Analyze</h3>
				<p>We begin by analyzing your company from top to bottom to develop a tailored plan of action.</p>
			</div>
			<div class="process c3">
				<img src="images/process_visualize.png" />
				<h3>Visualize</h3>
				<p>Based on this plan, we create initial concepts and refine the plan into a vision.</p>
			</div>

			<div class="process c3">
				<a href=""><img src="images/process_create.png" /></a>
				<h3>Create</h3>
				<p>Once we have a vision, we bring it to life with custom user experience, design, and development.</p>
			</div>
				
			<div class="process c3">
				<img src="images/process_market.png" />
				<h3>Market</h3>
				<p>Finally, we call attention to what we've made to ensure that its beauty does not go unnoticed.</p>
			</div>
		</div><!-- #process -->
		
		<div class="row">
			<div class="c6" style="text-align: center;">
				<div id="blogFeed" class=" shadow " style="">
				<!-- Uses JS to insert feeds -->
				</div><!-- #blogFeed -->
			</div>
			
			<div class="c6" style="text-align: center; ">		
				<div id="newsFeed" class="rssFeed shadow">
					<h3 class="rssHeader">News &amp; Press</h3>
					<div class="rssBody">
						<ul style="margin: 0 0 0;">
							<li class="rssRow"><h4><a href="http://www.bizjournals.com/baltimore/print-edition/2011/08/12/mos-creative-seeks-millions-in-mobile.html" target="_blank" >Baltimore Business Journal: MOS Creative seeks millions in mobile website market</a></h4></li>
							<li class="rssRow"><h4><a href="http://www.prlog.org/11635742-local-marketing-start-up-acquires-new-office-more-employees-as-mobile-web-market-continues-to-grow.html" target="_blank">Local Marketing Start-Up Acquires New Office...</a></h4></li>
							<li class="rssRow"><h4><a href="http://www.creativebloq.com/web-design-tips/3-of-the-best-mobile-sites-mandel-group-ea-mobile-mos-creative-1231309/" target="_blank">3 Best Mobile Sites: MOS Creative, Mandel Group, & EA Mobile...</a></h4></li>
							<li class="rssRow"><h4><a href="http://www.creativebloq.com/web-design-tips/3-of-the-best-mobile-sites-mandel-group-ea-mobile-mos-creative-1231309/" target="_blank">3 Best Mobile Sites: MOS Creative, Mandel Group, & EA Mobile...</a></h4></li><br/>
						</ul>
					</div><!-- .rssBody -->
				</div><!-- #newsFeed -->
			</div>
		</div><!-- #feeds -->
	
	
	
	<?php include('includes/footer.php');?>
	
