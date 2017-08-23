<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Moms Can | AMC - Baku</title>
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="css/projects.css" />

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<!---- start-smoth-scrolling---->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>

	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
	</script>
<!-- read more-->
<script>
	$(document).ready(function() {
    // Configure/customize these variables.
    var showChar = 400; //How many characters are shown by default
    var ellipsestext = "...";
    var moretext = "Читать далее";
    var lesstext = "Скрыть текст";
    

    $('.more').each(function() {
    	var content = $(this).html();

    	if(content.length > showChar) {

    		var c = content.substr(0, showChar);
    		var h = content.substr(showChar, content.length - showChar);

    		var html = c + '<div class="moreellipses">' + ellipsestext+ '&nbsp;</div><div class="morecontent"><div>' + h + '</div>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + '</a></div>';

    		$(this).html(html);
    	}

    });

    $(".morelink").click(function(){
    	if($(this).hasClass("less")) {
    		$(this).removeClass("less");
    		$(this).html(moretext);
    	} else {
    		$(this).addClass("less");
    		$(this).html(lesstext);
    	}
    	$(this).parent().prev().toggle();
    	$(this).prev().toggle();
    	return false;
    });
});
</script>
<!--end read more-->
<!---- start-smoth-scrolling---->
<!-- Custom Theme files -->
<link href="css/momscan_css.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!----font-Awesome----->
<link rel="stylesheet" href="fonts/css/font-awesome.min.css">
<!----font-Awesome----->
<!----webfonts---->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700' rel='stylesheet' type='text/css'>
<!----//webfonts---->
<!----start-top-nav-script---->
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
<!----//End-top-nav-script---->
</head>
<body>
	<!----start-container---->
	<!----start-header---->
	<div id="home" class="header">
		<div class="container">
			<!---- start-logo---->
			<div class="logo">
				<a href="index.blade.php"><img src="/image/ico/amclog.png" title="AMC"
                                               style="width:110px; height:70px;" /></a>
				</div>
				<!---- //End-logo---->
				<!----start-top-nav---->
				<nav class="top-nav">
					<ul class="top-nav">
						<li class="active" class="page-scroll"><a href="#test" class="scroll">Мамы Могут</a></li>
						<li class="page-scroll"><a href="{{URL::to('/')}}">Назад</a></li>
						<li class="contatct-active" class="page-scroll"><a href="#contact" class="scroll">Конец</a></li>
					</ul>
					<a href="#" id="pull"><i class="fa fa-bars fa-2x" style="color: #FD3B01; margin: 0.6em 0.6em"></i></a>
				</nav>
				<div class="clearfix"> </div>
				<!----//End-top-nav---->
			</div>
		</div>
		<!----//End-header---->
		<div class="clearfix"></div>
		<br>
		
		<!----start-test-monials---->
		<div  id="test" class="testmonials">
			<div class="container">
				<div class="head text-center">
					<h3><span> </span> Мамы Могут</h3>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
		<br>
		<section id="two">
			<div class="inner">
				<!--1-->
				@foreach($momscan as $momcan)
					<div class="spotlight">
						<div class="image">
							<img src="{{URL::to($momcan->getImageUrlAttribute())}}" alt="{{$momcan->name_ru}}" />
						</div>
						<div class="content">
							<a href="javascript:void(0);">
								@php

									switch(App::getLocale()){

                                        case  'en' :echo "<h3>".$momcan->name_en."</h3>";
                                        "<h4>".$momcan->subtitle_en.'</h4></a>
							<div class="more">
								<p style="font-size: 14px;"><b>'.$momcan->text_en.'</b></p>';

                                        break;
                                        case  'ru': echo "<h3>".$momcan->name_ru."</h3>";
                                        "<h4>".$momcan->subtitle_ru.'</h4></a>
							<div class="more">
								<p style="font-size: 14px;"><b>'.$momcan->text_ru.'</b></p>';
                                        break;
                                        case  'az': echo "<h3>".$momcan->name_az."</h3>";
                                        "<h4>".$momcan->subtitle_az.'</h4></a>
							<div class="more">
								<p style="font-size: 14px;"><b>'.$momcan->text_az.'</b></p>';

                                        break;

                                        }
								@endphp

							</div>
						</div>

					@endforeach

					</div>
						<!--end-->
					</section>			



					<!----//End-testmonial-time-line---->
					<!----start-footer---->
					<div id="contact" class="footer">
						<div class="container">
							<div class="footer-left">
								<div>
									<p><a class="social" href="https://www.facebook.com/ActiveMomsClub/" 
										target="_blank">
										<i class="fa fa-facebook-square fa-2x"></i>&#160;&#160;</a>
										<a class="social" href="https://www.instagram.com/activemomsclubbaku/"
										target="_blank">
										<i class="fa fa fa-instagram fa-2x"></i>&#160;&#160;</a>
										<a class="social" href="https://www.youtube.com/channel/UCTPEmIERJjc9_QnjtNUjRdg" target="_blank">
											<i class="fa fa-youtube-square fa-2x"></i>&#160;&#160;</a></p>
										</div>
										<a href="{{URL::to('/')}}"><img src="/image/ico/cover.jpg" title="AMC"
                                                                       style="width:280px;height:100px;"></a>
											<p>Template by <a href="https://work-87456800.facebook.com/profile.php?id=100016745117824" target="_blank">Anar Haydarli</a></p>
										</div>
										<script type="text/javascript">
											$(document).ready(function() {
					/*
					var defaults = {
			  			containerID: 'toTop', // fading element id
						containerHoverID: 'toTopHover', // fading element hover id
						scrollSpeed: 1200,
						easingType: 'linear' 
			 		};
			 		*/

			 		$().UItoTop({ easingType: 'easeOutQuart' });

			 	});
			 </script>
			 <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
			</div>
		</div>
		<!----//End-footer---->
		<!----//End-container---->
	</body>
	</html>