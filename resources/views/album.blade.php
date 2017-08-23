
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Album Gallery | AMC - Baku</title>
	<link rel="icon" type="image/png" href="{{asset('image/ico/amclog.png')}}">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">
	<!-- Google Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,700|Roboto:400,300,700' rel='stylesheet' type='text/css'>
	<!-- Animate -->
	<link rel="stylesheet" href="{{asset('css/album_animate.css')}}">
	<!-- Flexslider -->
	<link rel="stylesheet" href="{{asset('css/album_flexslider.css')}}">
	<!-- Icomoon -->
	<link rel="stylesheet" href="{{asset('css/album_icomoon.css')}}">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{asset('css/album_bootstrap.css')}}">

	<link rel="stylesheet" href="{{asset('css/album_style.css')}}">

	<!-- Modernizr JS -->
	<script src="{{asset('js/album_modernizr-2.6.2.min.js')}}"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="{{asset('js/respond.min.js')}}"></script>
	<![endif]-->

	</head>
	<body>
	
	<div id="fh5co-header">
		<div class="container">
			<!-- Mobile Toggle Menu Button -->
			<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
			<div id="fh5co-logo">
				<a href="{{URL::to('/')}}"><img src="{{asset('image/ico/amclog.png')}}" title="AMC"
					style="width:140px; height:90px;" /></a>
			</div>
			<nav id="fh5co-main-nav">
				<ul>
					<li><a href="{{URL::to('/')}}" class="transition" data-nav-section="contact">@lang('words.back')</a></li>
				</ul>
			</nav>
		</div>
	</div>
	<div id="fh5co-main">
		<div class="fh5co-overlay-mobile"></div>

		<div id="fh5co-content">
			<div class="container">
				<div class="row r-pb">
					<div class="col-md-8 col-md-offset-2 text-center section-heading">
						@php

                                                switch(App::getLocale()){

                                                    case  'en' :
                                                echo "<h3 class=".'fh5co-section-title animate-box'.'>'.$galery->title_en.'</h3>';
                                                echo "<p class=".'fh5co-lead animate-box'.">".$galery->text_en."</p>";
                                                    break;
                                                    case  'ru':
                                                      echo "<h3 class=".'fh5co-section-title animate-box'.'>'.$galery->title_ru.'</h3>';
                                                echo "<p class=".'fh5co-lead animate-box'.">".$galery->text_ru."</p>";
                                                    break;
                                                    case  'az':
                                                        echo "<h3 class=".'fh5co-section-title animate-box'.'>'.$galery->title_az.'</h3>';
                                                echo "<p class=".'fh5co-lead animate-box'.">".$galery->text_az."</p>";

                                                    break;

                                                    }
							@endphp
					</div>
				</div>

				<div class="row">

					@foreach($images as $image)
					<figure class="animate-box">
						<img src="{{$image->getImageUrlAttribute()}}" alt="image" class="img-responsive">
					</figure>

   @endforeach
				</div>
	
			</div>
		</div>
	</div>

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
						<a href="index.html"><img src="{{asset('image/ico/cover.jpg')}}" title="AMC"
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

	<!-- jQuery -->


	<script src="{{URL::to('js/album_jquery.min.js')}}"></script>
	<!-- jQuery Easing -->
	<script src="{{URL::to('js/album_jquery.easing.1.3.js')}}"></script>
	<!-- Bootstrap -->
	<script src="{{URL::to('js/album_bootstrap.min.js')}}"></script>
	<!-- Waypoints -->
	<script src="{{URL::to('js/album_jquery.waypoints.min.js')}}"></script>
	<!-- Stellar Parallax -->
	<script src="{{URL::to('js/album_jquery.stellar.min.js')}}"></script>
	<!-- Flexslider -->
	<script src="{{URL::to('js/album_jquery.flexslider-min.js')}}"></script>
	<!-- Main JS -->
	<script src="{{URL::to('js/album_main.js')}}"></script>

	</body>
</html>

