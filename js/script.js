	
	$(window).load(function(){
		
		function isTouchDevice(){
		  return (typeof(window.ontouchstart) != 'undefined') ? true : false;
		}
		if(isTouchDevice()){
			$('.strip').attr('src','images/footer_strip_touch.png');

		}
	
		var $window = $(window);
		var scroll_max = document.documentElement.scrollHeight - document.documentElement.clientHeight;
		var wrapper_height = $('#innerBox').height();
		var wrapper_width = $('#innerBox').width();
		var nav = $("nav");
		var selected = $('div.person.selected').height();

		window.onresize = resize;
		
	
		//set the height of #middle to height of #process 
		$("#middle").css({
				'height' : $("#process").height()
			});


		$('#boxWrapper').css({
			'width': window.innerWidth,
			'height' : document.documentElement.clientHeight,
			'margin' : 0 + 'px',
			'padding' : 0 + 'px',
			'top' : 0 });
		
	/*
	var displayTopNavigation = function(){
			if(window.innerWidth >= 800){
			    nav.data('faded');
			    if (!nav.data('faded')) nav.data('faded', 1).stop(true).fadeTo(300, 0);
			    } else if (nav.data('faded')) {
			        nav.data('faded', 0).stop(true).fadeTo(500, 1);
			    }
		};
		
*/
		var equalHeight = function(){
			if($("#newsFeed").height() < $("#blogFeed").height()	){
				$("#newsFeed").css('height',  $("#blogFeed").height());
			}else{
				$("#blogFeed").css('height', $("#newsFeed").height());
			}	
		}
		
	//	displayTopNavigation();
		equalHeight();
		
				 
		/**************************
			Footer
		***************************/
		if(window.innerWidth < 700){
			$('footer').find(".socialIcon").appendTo('#footer tr:first');
			$('#get_started').removeAttr('rowspan');
			$('#get_started').attr('colspan', 6);
			$('footer').find("#get_started").appendTo('#footer tr:last');
		}
		
		/******************************************
		*		ON WINDOW RESIZE		 
		* do something when the window is resized
		*******************************************/
		function resize()
		{	
			$('#boxWrapper').css({
			'width': window.innerWidth,
			'height' : document.documentElement.clientHeight,
			'margin' : 0 + 'px',
			'padding' : 0 + 'px',
			'top' : 0 });

			
		//	displayTopNavigation();
			equalHeight();
			
			if(window.innerWidth <= 800){
				$("#newsFeed").css("height","");
				$("#blogFeed").css("height","");
				equalHeight();
			
				$('footer').find(".socialIcon").appendTo('#footer tr:first');
				$('#get_started').removeAttr('rowspan');
				$('#get_started').attr('colspan', 6);
				$('footer').find("#get_started").appendTo('#footer tr:last');
			}else{
				$("#newsFeed").css("height","");
				$("#blogFeed").css("height","");
				equalHeight();
				
				$('footer').find("#td1").appendTo('#footer tr:first');
				$('#get_started').removeAttr('colspan');
				$('footer').find("#get_started").appendTo('#footer tr:first');
				$('#get_started').attr('rowspan', 3);
				$('footer').find("#td2").appendTo('#tr2');
				$('footer').find("#td3").appendTo('#tr3');
				$('footer').find("#td4").appendTo('#footer tr:first');				
				$('footer').find("#td5").appendTo('#tr2');				
				$('footer').find("#td6").appendTo('#tr3');				
			}
		}//end resize()

		
		/* Toggle mobile menu */
		$("#mobile-menu").toggle(
			function () {
				
				$("#navList").removeClass("navList");
				$("#navList").addClass("mobileList");
			},
			function () {
				$("#navList").removeClass("mobileList");
				$("#navList").addClass("navList");
			}
		);
		
		/* FORM SUBMISSION ACTIONS */
		$("#contactForm").submit(function(){
			var name = $('#contactForm #name').val();
			var company = $('#contactForm #company').val();
			var contact_info = $('#contactForm #contact_info').val();
			var message = $('contactForm #message').val();
		});
		
		
		
		
		/*  Cover for google map */
		$('.blue_cover').hover(function() {
		    $(this).stop(true).fadeTo("slow", 0);
		    setTimeout(function() {
		        $('#map_canvas').css({zIndex: 3});
		    }, 500 );
		    
		}, function() {});	
		
		$('#map_canvas').hover(function(){
				
			},function(){
				$('#map_canvas').css({zIndex: 1});
		        $('.blue_cover').stop(true).fadeTo("slow", 0.8);
	    
			
		});
		
				
		$window.scroll(function () {
			/*******************************
				Floating nav
			********************************/	/*

			if(window.innerWidth >= 800){
			    nav.data('faded');
			    if ($(this).scrollTop() < 250) {
			        if (!nav.data('faded')) nav.data('faded', 1).stop(true).fadeTo(300, 0);
			    } else if (nav.data('faded')) {
			        nav.data('faded', 0).stop(true).fadeTo(500, 1);
			    }
			}//end if
*/
			
		/******************************************
	
	 				RED
	 
		 ******************************************/
	  	    $('#bigRed').css({
        		'top': 25 + $window.scrollTop() / scroll_max  * wrapper_height * .1 + "%",
		        'left': 40 - $window.scrollTop() / scroll_max  * wrapper_width * .03 +"%"
   			 });
   			 $('#smallRed').css({
        		'top': 160 - $window.scrollTop() / scroll_max  * wrapper_height * .5 + '%',
		        'left': 20 + $window.scrollTop() / scroll_max  * wrapper_width * .04 + '%'
		    });
		    
		    
		    /****************************************
  
				SMALL LIGHT BLUE
	
			***************************************/
		    
		    $("#smallLightBlue1").css({
		    	"top": 15 + $window.scrollTop() / scroll_max  * wrapper_height * .3 + "%",
		    	"left": 30 + $window.scrollTop() / scroll_max  * wrapper_width * .1+ "%"
		    });
			if($("#smallLightBlue1").offset().top > $(window).height()+1000){
				$("#smallLightBlue1").css({
					"top":  $(window).height()/2 - $window.scrollTop() / scroll_max  * wrapper_height+ "%",
					"left": $(window).height()/2.5 - $window.scrollTop() / scroll_max  * wrapper_height+ "%"} );
			}//end if
			
			$("#smallLightBlue2").css({
		    	"top": 5 - $window.scrollTop() / scroll_max  * wrapper_height * .3 + "%",
		    	"left": 15 + $window.scrollTop() / scroll_max  * wrapper_width * .1+ "%"
		    });
			
			$("#smallLightBlue3").css({
			    'top':  80 - ( .2 * $window.scrollTop() / scroll_max  * wrapper_height) + '%',
			    'left': -20 + (0.02 * $window.scrollTop() / scroll_max  * wrapper_width) + '%', 
		   	 });
		   	
		   	$("#smallLightBlue4").css({
			    'top':  40 + (0.6 * $window.scrollTop() / scroll_max  * wrapper_height) + '%',
			    'left': -50 + (0.3 * $window.scrollTop() / scroll_max  * wrapper_width) + '%', 
   			 });
		    if($("#smallLightBlue4").offset().left > $(window).width()){
				$("#smallLightBlue4").css({
					"top":  $(window).width()/2 - $window.scrollTop() / scroll_max  * wrapper_height+ "%",
					"left": $(window).width()/2.5 - $window.scrollTop() / scroll_max  * wrapper_height+ "%"} );
			}
    	
    		/****************************************
  
				MEDIUM LIGHT BLUE
	
			***************************************/
	
    		$("#mediumLightBlue1").css({
			    'top':  35 + ( .01 * $window.scrollTop() / scroll_max  * wrapper_height) + '%',
			    'left': 5 + (0.02 * $window.scrollTop() / scroll_max  * wrapper_width) + '%', 
		   	 });
		   	 
		   	 /****************************************
  
				LARGE LIGHT BLUE
	
			***************************************/
	
    		$("#largeLightBlue").css({
			    'top':  20 - ( .1 * $window.scrollTop() / scroll_max  * wrapper_height) + '%',
			    'left': 30 + (0.02 * $window.scrollTop() / scroll_max  * wrapper_width) + '%', 
		   	 });
		   	 
		   	 /****************************************
  
				Small Dark BLUE
	
			***************************************/
	
    		$("#smallDarkBlue1").css({
			    'top':  -10 + ( 1 * $window.scrollTop() / scroll_max  * wrapper_height) + '%',
			    'left': 100 - (0.2 * $window.scrollTop() / scroll_max  * wrapper_width) + '%', 
		   	 });

/* 			 console.log(scroll_max); */
		});// end $window.scroll
		
		/****************************************
  			Change the image of hoverable images	
		**************************************/
	
	   $(".imgHoverable").hover( function() {
	       var hoverImg = HoverImgOf($(this).attr("src"));
	       $(this).attr("src", hoverImg);
	     }, function() {
	       var normalImg = NormalImgOf($(this).attr("src"));
	       $(this).attr("src", normalImg);
	     }
	   );
	
		function HoverImgOf(filename)
		{
		   var re = new RegExp("(.+)\\.(gif|png|jpg)", "g");
		   return filename.replace(re, "$1_hover.$2");
		}
		function NormalImgOf(filename)
		{
		   var re = new RegExp("(.+)_hover\\.(gif|png|jpg)", "g");
		   return filename.replace(re, "$1.$2");
		}		
	
		
		/****************************************
  			About page. Character Illustration
		**************************************/
		$('.team__member').on('mouseenter', function() {
                var num = $(this).attr('rel');
				var selectedChar = $('.team-content__member[rel="' + num + '"]').height();
                if (!$('.team-content__member[rel="' + num + '"]').hasClass('active')) {
                    $('.team-content').addClass('hide');
                    setTimeout(function() {
                    	$('div.about_details_holder').animate({
							height: selectedChar
						},600)
                        $('.team-content__member').removeClass('active');
                        $('.team-content__member[rel="' + num + '"]').addClass('active');
                        $('.team-content').removeClass('hide');
                    }, 500);
                }
            });

/* //original by Yuriy
		$(".link").mouseenter(function(){
			var num = $(this).attr('rel');
			var selectedChar = $('.person[rel="' + num + '"]').height();
			$('div.person').animate({
				left:'0',
				opacity:'0'
			});
			
			$('div.about_details_holder').animate({
				height: selectedChar
			},600)
			
			$('div.person[rel="' + num + '"]').animate({
				left:'100px',
				opacity:'1'
			},600);
		});	
*/
		
	});  //end $(window).load
	
		
		
		
		
		
		//console.log(selectedChar);
			// temporary test div to display the size of other div
		//	$("#fixed").html(" width: " +  $("#process").width()+ 
		//			"</br>  height: " +  $("#process").height() );
		
		  /*
var $window.scrollTop() / scroll_max  * wrapper_height = ($window.scrollTop() / scroll_max)  * wrapper_height;
			var $window.scrollTop() / scroll_max  * wrapper_width = ($window.scrollTop() / scroll_max)  * wrapper_width;
			
*/

/*

		 $("#fixed").html(" height-left: " +  $("#newsFeed").height() ); 
		$("#fixed2").html(" height-right: " +  $("#blogFeed").height() );
				 
*/