<?php $currentPage = basename($_SERVER['SCRIPT_NAME']); ?>
<script>
		$(function() {
			var pull 		= $('#pull');
				menu 		= $('nav ul');
				menuHeight	= menu.height();

			$(pull).on('click', function(e) {
				e.preventDefault();
				menu.slideToggle();
			});

			$(window).resize(function(){
        		var w = $(window).width();
        		if(w > 320 && menu.is(':hidden')) {
        			menu.removeAttr('style');
        		}
        		
    		});
		});
	</script>


	<!-- Navigation. -->
		<nav class=" clearfix sticky" >
			
			<ul class=""  style="">
				<li><a href="portfolio.php" <?php if ($currentPage == 'portfolio.php') {echo 'class="active"'; } ?> accesskey="2" title="portfolio">Portfolio</a></li>
				<li><img src="images/blue_dot.png" alt="blue dot" class="blue_dot"/></li>
				<li><a href="about.php"  <?php if ($currentPage == 'about.php') {echo 'class="active"'; } ?> accesskey="3" title="About">About</a></li>
				<li><a href="index.php" class="logoNav"  title="Home" > <img  src="images/logo.png" class="" alt="MOS Creative Logo" title="Home"/><span>Home</span></a>	</li>
				<li><a href="contact.php"  <?php if ($currentPage == 'contact.php') {echo 'class="active"'; } ?> accesskey="4" title="Contact">Contact</a></li>
				<li><img src="images/blue_dot.png" alt="blue dot" class="blue_dot"/></li>
				<li><a href="http://blog.moscreative.com/"  <?php if ($currentPage == 'blog.php') {echo 'class="active"'; } ?> accesskey="5" title="Blog">Blog</a></li>	
			</ul>
			<a href="#" id="pull"><img id="logo_button" src="images/mos_logo_light.png"  alt="logo" /> Menu</a>
	    </nav>
