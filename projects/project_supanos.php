<? include('projects_header.php')?>
<body>
	<div class="topline"></div>

	<div class="wrap group">
        
    </div>

    <div class="group section-wrap upper" id="upper">
        <div class="wrap group">
            <div class="section-1">
                <h2 class="subtitle">Supanos</h2>
				<p>
					<span class="bolded"> Challenge: </span> 
					The award-winning Supano's Prime Steak House was competing against restaurants in the Baltimore area and needed to improve their online presence in order to position themselves as "the best in the industry" against the competition. 
				</p>
				<p><span class="bolded"> Goal: </span>
					To create a website and mobile site that better engaged with customers and positioned them as a leader in the industry. Also, to develop a custom competitive analysis in order to identify industry keywords/phrases and trends that would be used to optimize Supano's web presence.
				</p>
				<p><span class="bolded"> Result: </span>
We created an easily navigable website and mobile site that demonstrated the atmosphere of the company. We also incorporated tools to increase customer engagement by driving people to call, download information, or ask for general information. Through an in-depth research analysis, we were also able to identify powerful keywords/phrases for Supano's industry and create a strong SEO campaign to boost their visibility.  				</p>
                <input id="back_button" type="button" value="Back" onclick="goBack()">

                
            </div> <!-- /.section-1 -->

            <div class="section-2 group">
				<ul id="images" class="rs-slider">
				   
				    <li class="group">
				        <a href="#" class="slide-parent">
				            <img src="img/project_supanos.png" alt=""/>
				        </a>
				        <div class="rs-caption rs-top-right">
				        	<p>Visit  <a href="http://www.supanossteakhouse.com/" target="_blank" class="button">Supanos</a></p>
				        </div>
				    </li>
				    <li class="group">
				        <a href="#" class="slide-parent">
				            <img src="img/project_supanos_review.png" alt=""/>
				        </a>
				        <div class="rs-caption rs-bottom-left">
				        	<p>Visit  <a href="http://www.supanossteakhouse.com/reviews.php" target="_blank" class="button">Supanos</a></p>
				        </div>
				    </li>
				    
				</ul>
            </div> <!-- /.section-2 -->
        </div> <!-- /.wrap -->
    </div> <!-- /#upper -->
<? include('projects_footer.php')?>
  	<div id="footer" class="wrap group">
       
   	</div>

    <script src="js/jquery.js"></script>
    <script src="jquery.refineslide.js"></script>
    <script>
        $(function () {
            var $upper = $('#upper');

            $('#images').refineSlide({
                transition : 'cubeV',
                onInit : function () {
                    var slider = this.slider,
                       $triggers = $('.translist').find('> li > a');

                    $triggers.parent().find('a[href="#_'+ this.slider.settings['transition'] +'"]').addClass('active');

                    $triggers.on('click', function (e) {
                       e.preventDefault();

                        if (!$(this).find('.unsupported').length) {
                            $triggers.removeClass('active');
                            $(this).addClass('active');
                            slider.settings['transition'] = $(this).attr('href').replace('#_', '');
                        }
                    });

                    function support(result, bobble) {
                        var phrase = '';

                        if (!result) {
                            phrase = ' not';
                            $upper.find('div.bobble-'+ bobble).addClass('unsupported');
                            $upper.find('div.bobble-js.bobble-css.unsupported').removeClass('bobble-css unsupported').text('JS');
                        }
                    }

                    support(this.slider.cssTransforms3d, '3d');
                    support(this.slider.cssTransitions, 'css');
                }
            });
        });
    </script>
</body>
</html>
