
<!DOCTYPE HTML>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Active Mom's Club - Baku</title>
	<link rel="icon" type="image/png" href="{{asset('image/ico/amclog.png')}}">
	<link href="{{asset('css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="{{asset('js/jquery.min.js')}}"></script>
	<!---- start-smoth-scrolling---->
	<script type="text/javascript" src="{{asset('js/move-top.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/easing.js')}}"></script>

	<!---- start-smoth-scrolling---->
	<!-- Custom Theme files -->
	<link href="{{asset('css/theme-style.css')}}" rel='stylesheet' type='text/css' />
	<!-- Custom Theme files -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

    <!--font-Awesome-->
    <link rel="stylesheet" href="{{asset('fonts/css/font-awesome.min.css')}}">
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
	<script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
	</script>

	<!--dostijeniya-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script>
        $(document).ready(function(){
            $(".flip").click(function(){
                $(".panel").slideToggle("slow");
            });
        });
	</script>
	<!--end dostijeniya-->
	<!--smiOnas-->
	<script>
        $(document).ready(function(){
            $(".gizli").click(function(){
                $(".aciq").slideToggle("slow");
            });
        });
	</script>
	<!--end SmiOnas-->
	<!--eksperti-->
	<script>
        $(document).ready(function(){
            $(".hidex").click(function(){
                $(".shoex").slideToggle("slow");
            });
        });
	</script>
	<!--endexxperti-->
	<!--Team-->
	<script>
        $(document).ready(function(){
            $(".hiteam").click(function(){
                $(".shteam").slideToggle("slow");
            });
        });
	</script>
	<!--endTeam-->
	<!--events-->

	<script>
        $(document).ready(function(){
            $(".evehid").click(function(){
                $(".eveshow").slideToggle("slow");
            });
        });
	</script>
	<!--endevents-->
	<!--library-->
	<script>
        $(document).ready(function(){
            $(".libhide").click(function(){
                $(".libshow").slideToggle("slow");
            });
        });
	</script>
	<!--endlibrary-->

</head>
<body>
<!----start-container---->
<!----start-header---->
<li class="dropdown">
	<a href="#" class="dropdown-toggle" data-toggle="dropdown">
		{{ Config::get('languages')[ App::getLocale()] }}
	</a>
	<ul class="dropdown-menu">
		@foreach (Config::get('languages') as $lang => $language)
			@if ($lang != App::getLocale())
				<li>
					<a href="{{ route('lang.switch', $lang) }}">{{$language}}</a>
				</li>
			@endif
		@endforeach
	</ul>
</li>

<div id="home" class="header scroll">
	<div class="container">
		<!---- start-logo---->
		<div class="logo">
			<a href="{{URL::to('/')}}"><img src="{{asset('/image/ico/amclog.png')}}" title="AMC"
									  style="width:140px; height:90px;" /></a>
		</div>
		<!---- //End-logo---->
		<!----start-top-nav---->
		<nav class="top-nav">
			<ul class="top-nav">
				<li class="aktive"><a href="#home" class="scroll">@lang('words.home')</a></li>
				<li class="page-scroll"><a href="#fea" class="scroll">@lang('words.about')</a></li>
				<li class="page-scroll"><a href="#port" class="scroll">@lang('words.galery')</a></li>
				<li class="page-scroll"><a href="#blog" class="scroll">@lang('words.news')</a></li>
				<li class="page-scroll"><a href="#test" class="scroll">@lang('words.projects')</a></li>
				<li class="contatct-active" class="page-scroll"><a href="#contact" class="scroll">@lang('words.contact')</a></li>
			</ul>
			<!--menu-->

			<a href="#" id="pull"><i class="fa fa-bars fa-2x" style="color: #FD3B01; margin: 0.6em 0.6em"></i></a>

			<!--end menu-->
		</nav>
		<div class="clearfix"> </div>
		<div class="slide-text text-center">
			<br></br>
			<div class="slide-btn" class="page-scroll">
				<a href="#fea" class="scroll"><img src="{{asset('/image/ico/scroll-down.gif')}}" style="width: 40px; height: 40px;"></a></div>
		</div>
		<!----//End-top-nav---->
	</div>
</div>
<!----//End-header---->
<!--start-feartures-->
<div id="fea" class="features">
	<div class="container">
		<div class="head text-center">
			<h3><span> </span>@lang('words.history')</h3>
			@if(isset($history))
				@php

					switch(App::getLocale()){

                        case  'en' : echo "<p>".$history->text_en."</p>";
                        break;
                        case  'ru':echo "<p>".$history->text_ru."</p>";
                        break;
                        case  'az': echo "<p>".$history->text_az."</p>s";
                        break;
                        }
				@endphp

			@endif
		</div>
		<!---- start-features-grids---->
		<div class="features-grids text-center">

			<div class="col-md-3 features-grid">
				<a href="javascript:void(0);" class="flip"><span class="fea-icon1"><i class="fa fa-trophy"> </i> </span>
					<h3>@lang('words.achievement')</h3>
				</a>
				<!--Done-->
			</div>

			<div class="panel" style="border-color: #FD3B01">
				@php

					switch(App::getLocale()){

                        case  'en' : echo '<h4 style="color: white;"><br><b>'.$achievement->title_en.'</b></h4>
				<h5 style="color: white;"><i>'.$achievement->subtitle_en.'</i></h5>
				<p style="font-size: 14px; color: white;">'.$achievement->text_en.'</p>';
                        break;
                        case  'ru': echo '<h4 style="color: white;"><br><b>'.$achievement->title_ru.'</b></h4>
				<h5 style="color: white;"><i>'.$achievement->subtitle_ru.'</i></h5>
				<p style="font-size: 14px; color: white;">'.$achievement->text_ru.'</p>';
                        break;
                        case  'az':  echo '<h4 style="color: white;"><br><b>'.$achievement->title_az.'</b></h4>
				<h5 style="color: white;"><i>'.$achievement->subtitle_az.'</i></h5>
				<p style="font-size: 14px; color: white;">'.$achievement->text_az.'</p>';
                        break;
                        }
				@endphp
			</div>



			<div class="col-md-3 features-grid">
				<a href="javascript:void(0);" class="hidex"><span class="fea-icon1"><i class="fa fa-briefcase"> </i> </span>
					<h3>@lang('words.expert')</h3>
				</a>
				<!--Done-->
			</div>
			<div class="shoex">
				<!--NashiEkspertinachinayetsya-->

				<div class="clearfix"></div>
				<br>
				<h4>Наши эксперты - это ведущие специалисты в различных сферах. Они готовы поделиться профессиональным опытом и обсудить вопросы, касающиеся их профессиональной деятельности.</h4>

				<div class="clearfix"></div>
				<br>
				@foreach($experts as $expert)
					<section class="thumb">
						<div class="polaroid">
							<img src="{{$expert->getImageUrlAttribute()}}" alt="{{$expert->name_en}}" style="width: 100%">
						</div>
						<div>

						@php

							switch(App::getLocale()){

                                case  'en' :  echo '<h4>'.$expert->name_en.'</h4>';
							                  echo '<h5>'.$expert->profession_en.'</h5>';
                                              break;
                                case  'ru':   echo '<h4>'.$expert->name_ru.'</h4>';
							                  echo '<h5>'.$expert->profession_ru.'</h5>';
                                              break;
                                case  'az':   echo '<h4>'.$expert->name_az.'</h4>';
							                  echo '<h5>'.$expert->profession_az.'</h5>';
                                              break;
                                }
						@endphp
						</div>

						<!--NashiEkspertiend-->
					</section>

					@endforeach
			</div>

			<div class="col-md-3 features-grid">
				<a href="javascript:void(0);" class="hiteam" ><span class="fea-icon1"><i class="fa fa-users"> </i> </span>
					<h3>@lang('words.team')</h3>
				</a>
			</div>

			<div class="shteam">
				<div class="clearfix"></div>
				<br>
				<section id="two">
					<div class="inner">
						<!--1-->
						<br>
						<h4>Команда «Active Mom’s Club» – это союз молодых, талантливых, целеустремленных и ярких людей, которые объединившись, создали мощную созидательную энергию. Каждый член команды готов сделать больше, чем требуется, здесь нет «пассажиров».</h4>
						<br>
						<div class="clearfix"></div>
						@foreach($teams as $team)
						<div class="spotlight">
							<div class="polaroid">
								<img src="{{$team->getImageUrlAttribute()}}" alt="{{$team->name_ru}}" style="width: 100%" />
							</div>

							<div class="content">
								<!--toDo like this-->
								<a href="javascript:void(0);">

									@php

										switch(App::getLocale()){

                                            case  'en' :  echo '<h3>'.$team->name_en.'</h3>';
                                                          echo '<h4>'.$team->profession_en.'</h4></a>';
                                                          echo '<p style="font-size: 14px;"><b>'.$team->name_en.'</b>'.$team->text_en.'<br><i><b> text</b></i></p>';
                                                          break;
                                            case  'ru':   echo '<h3>'.$team->name_ru.'</h3>';
                                                          echo '<h4>'.$team->profession_ru.'</h4></a>';
                                                          echo '<p style="font-size: 14px;"><b>'.$team->name_ru.'</b>'.$team->text_ru.'<br><i><b> text</b></i></p>';
                                                          break;;
                                            case  'az':   echo '<h3>'.$team->name_az.'</h3>';
                                                          echo '<h4>'.$team->profession_az.'</h4></a>';
                                                          echo '<p style="font-size: 14px;"><b>'.$team->name_az.'</b>'.$team->text_az.'<br><i><b> text</b></i></p>';
                                                          break;
                                            }
									@endphp


							</div>



						</div>
						@endforeach
						<div class="clearfix"></div>

						<!--end-->
					</div>
				</section>
			</div>



			<div class="col-md-3 features-grid">
				<a href="javascript:void(0);" class="gizli"><span class="fea-icon1"><i class="fa fa-list-alt"> </i> </span>
					<h3>@lang('words.kiv')</h3>
				</a>
				<!-- -->
			</div>

			<div class="aciq">
				<div class="clearfix"></div><br>
				<br>
				<div class="portfolio-pagination">
					<ul class="pagination">


					</ul>
				</div>
				<br>
				<div class="clearfix"></div>
				<section class="thumb">
					<div class="res">
						<div class="gal">
							<a href="http://ru.oxu.az/society/196122" target="_blank">
								<img src="img/mm/kidsDay.jpg" alt="KidsDay" />
								<div class="limit"><h5>Active Mom’s Club провело познавательное мероприятие ко Дню детей</h5></div>
							</a>

						</div>
					</div>

					<div class="res">
						<div class="gal">
							<a href="http://ru.oxu.az/society/194292" target="_blank">
								<img src="img/mm/beatform.jpg" alt="BeFit!" />
								<div class="limit"><h5>Как безболезненно, быстро и недорого привести себя в форму?</h5></div>
							</a>

						</div>
					</div>
					<!--h5 elemek hamisinni-->
					<div class="res">
						<div class="gal">
							<a href="http://ru.oxu.az/society/192753" target=_"blank">
								<img src="img/mm/qwest.jpg" alt="Qwest" />
								<div class="limit"><h5>Квест на природе – увлекательное времяпрепровождение для родителей и детей</h5></div>
							</a>

						</div>
					</div>

					<div class="res">
						<div class="gal">
							<a href="http://lady.day.az/news/career/883901.html" target="_blank">
								<img src="img/mm/kidsbookday.jpg" alt="KidsBook" />
								<div class="limit"><h5>Мамы отметили в Баку Международный день детской книги.</h5></div>
							</a>

						</div>
					</div>


				</section>
				<div class="clearfix"></div>

				<!--davam edirem-->

				<section class="thumb">

					<div class="res">
						<div class="gal">
							<a href="http://lady.day.az/news/career/884961.html" target="_blank">
								<img src="img/mm/handmaders.jpg" alt="Handmaders" />
								<div class="limit"><h5>Азербайджанские "ХЕНДМЕЙДЕРЫ" приняли участие в международной выставке туризма</h5></div>
							</a>

						</div>
					</div>

					<div class="res">
						<div class="gal">
							<a href="http://lady.day.az/news/career/871985.html" target="_blank">
								<img src="img/mm/poleznyZavtrak.jpg" alt="HaveANiceDay!" />
								<div class="limit"><h5>Презентован новый проект «ACTIVE MOM’S CLUB» - «МАМЫ В БИЗНЕСЕ»</h5></div>
							</a>

						</div>
					</div>
					<!--h5 elemek hamisinni-->
					<div class="res">
						<div class="gal">
							<a href="http://www.1news.az/mobile/society/20170317081639377.html" target=_"blank">
								<img src="img/mm/nenesaq.jpg" alt="GrandMothers4Ever" />
								<div class="limit"><h5>В преддверии Новруз байрамы Active Mom’s Club представил социальный проект «Nənələr sağ olsun!»</h5></div>
							</a>

						</div>
					</div>

					<div class="res">
						<div class="gal">
							<a href="http://aze.az/semeyniy-pokhod-v-gori-v-preddverii.html" target="_blank">
								<img src="img/mm/noyruzbay.jpg" alt="«Novruz»" />
								<div class="limit"><h5>Семейный поход в горы в преддверии Новруз Байрам.</h5></div>
							</a>

						</div>
					</div>


				</section>
				<div class="clearfix"></div>

				<!--davam edirem-->

				<section class="thumb">

					<div class="res">
						<div class="gal">
							<a href="http://lady.day.az/news/career/866487.html" target="_blank">
								<img src="img/mm/mammMia.jpg" alt="MammaMia" />
								<div class="limit"><h5>В Баку прошла тематическая вечеринка по мотивам мюзикла "MAMMA MIA"</h5></div>
							</a>

						</div>
					</div>

					<div class="res">
						<div class="gal">
							<a href="http://lady.day.az/news/relations/854568.html" target="_blank">
								<img src="img/mm/1mm.jpg" alt="Семейный поход: один из успешных проектов Active Mom`s Club" />
								<div class="limit"><h5>Семейный поход: один из успешных проектов Active Mom`s Club</h5></div>
							</a>

						</div>
					</div>
					<!--h5 elemek hamisinni-->
					<div class="res">
						<div class="gal">
							<a href="http://www.1news.az/society/20161220080804736.html" target=_"blank">
								<img src="img/mm/qv.jpg" alt="Успешные мамы и их дети снялись в социальном проекте" />
								<div class="limit"><h5>Успешные мамы и их дети снялись в социальном проекте</h5></div>
							</a>

						</div>
					</div>

					<div class="res">
						<div class="gal">
							<a href="http://ru.oxu.az/society/165644" target="_blank">
								<img src="img/mm/artmosfera.jpg" alt="«АРТмосфера»" />
								<div class="limit"><h5>Новый проект «Active Moms Club»: «АРТмосфера» </h5></div>
							</a>

						</div>
					</div>


				</section>
				<div class="clearfix"></div>

				<!--end-->
				<div class="clearfix"></div>
				<br>
				<div class="portfolio-pagination">
					<ul class="pagination">

					</ul>
				</div>
				<br>
				<div class="clearfix"></div>

			</div>

			<div class="clearfix"> </div>
		</div>
		<!---- //End-features-grids---->
	</div>
</div>
<!--End-feartures-->
<div class="clearfix"></div>
<!-- start-work-->
<div style="background: url(image/ad/bannerad.png);" class="work">

</div>
<div class="clearfix"></div>
<br>
<!---- //End-work---->
<div class="clearfix"></div>
<!--start-portfolio-->
<div id="port" class="portfolio portfolio-box">
	<div class="head text-center">
		<h3><span> </span> @lang('words.galery')</h3>
	</div>
	<!--gallery-->

	<section id="portfolio">
		<div class="container">
			<div class="row">
				<ul class="portfolio-filter text-center">
					<li><a class="btn btn-default active" href="#" data-filter="*"><i class="fa fa-random fa-lg"></i></a></li>
					<li><a class="btn btn-default" href="#" data-filter=".branded"><i class="fa fa-picture-o fa-lg"></i></a></li>
					<li><a class="btn btn-default" href="#" data-filter=".logos"><i class="fa fa-film fa-lg"></i></a></li>
				</ul><!--/#portfolio-filter-->
				<div class="portfolio-pagination">
					<ul class="pagination">
						{{$albumlist->render()}}
					</ul>
				</div>

				<div class="portfolio-items">
					<!--Burda bashliyir-->
					@foreach($albumlist as $album)
						<div class="col-xs-6 col-sm-4 col-md-3 portfolio-item branded">
							<div class="portfolio-wrapper">
								<div class="portfolio-single">
									<div class="portfolio-thumb">
										<img src="{{$album->getImageUrlAttribute()}}" class="img-responsive" alt="AMC">
									</div>
									<div class="portfolio-view">
										<ul class="nav nav-pills">
											<li><a href="{{URL::to('/album/'.$album->id)}}"><i class="fa fa-link"></i></a></li>
											<li><a href="{{URL::to($album->getImageUrlAttribute())}}" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
								<div class="portfolio-info ">
									@php

										switch(App::getLocale()){

                                            case  'en' :echo "<h4>".$album->title_en."</h4>";

                                            break;
                                            case  'ru': echo "<h4>".$album->title_ru."</h4>";
                                            break;
                                            case  'az':
                                                echo "<h3 class=".'fh5co-section-title animate-box'.'>'.$album->title_az.'</h3>';

                                            break;

                                            }
									@endphp

								</div>

						</div>
				@endforeach

				<!--Burda bashliyir-->
					@foreach($videos as $video)
					<div class="col-xs-6 col-sm-4 col-md-3 portfolio-item logos">
						<div class="portfolio-thumb">
							<div class="videoWrapper">
								<iframe width="260" src="{{$video->link}}" frameborder="0" allowfullscreen></iframe>
							</div>
						</div>
						<div class="portfolio-info">
							@php

								switch(App::getLocale()){

                                    case  'en' :echo "<h4>".$video->title_en."</h4>";

                                    break;
                                    case  'ru': echo "<h4>".$video->title_ru."</h4>";
                                    break;
                                    case  'az':  echo "<h4>".$video->title_az."</h4>";

                                    break;

                                    }
							@endphp
						</div>
					</div>
						@endforeach


				</div>
				<div class="portfolio-pagination">
					<ul class="pagination">
						{{$albumlist->render()}}


					</ul>
				</div>
			</div>
		</div>
	</section>
	<!--/#portfolio-->

	<!--/#footer-->
	<link href="{{asset('css/responsive.css')}}" rel="stylesheet">
	<link href="{{asset('css/animate.min.css')}}" rel="stylesheet">
	<link href="{{asset('css/lightbox.css')}}" rel="stylesheet">
	<script type="text/javascript" src="{{asset('js/jquery.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/jquery.isotope.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/lightbox.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/wow.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/main.js')}}"></script>
	<!--endGallery-->
</div>

<div class="clearfix"> </div>
<script>
    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }
</script>


<div class="clearfix"> </div>
<!----//End-portfolio----->

<!----start-blog---->
<div id="blog" class="blog">
	<div class="container">
		<div class="head text-center">
			<h3><span> </span> @lang('words.news')</h3>
		</div>
	</div>
	<!---- start-blog-time-line---->
	<div class="blog-time-line">
		<div class="col-md-6 blog-time-line-left"></div>
		<div class="col-md-6 blog-time-line-right">
			<div class="blog-post">
				<div class="col-md-2 blog-post-date">
					<span><label><i class="fa fa-calendar fa-2x"></i></label></span>
				</div>
				<div class="col-md-10 blog-post-info">
					<h4 class="post-head"><a class="evehid" href="javascript:void(0);">@lang('words.event')</a></h4>
				</div>
				<div class="clearfix"> </div>
				<div class="eveshow">
					<div class="slideshow-container">
						<div class="mySlides fade">
							<div class="numbertext">1 / 18</div>
							<img class="borad" src="{{URL::to('image/eve/events (1).png')}}" style="width:100%">
						</div>



						<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
						<a class="next" onclick="plusSlides(1)">&#10095;</a>
					</div>
					<br>

					<div style="text-align:center">
						<span class="dot" onclick="currentSlide(1)"></span>



					</div>
				</div>
				<script>
                    var slideIndex = 1;
                    showSlides(slideIndex);

                    function plusSlides(n) {
                        showSlides(slideIndex += n);
                    }

                    function currentSlide(n) {
                        showSlides(slideIndex = n);
                    }

                    function showSlides(n) {
                        var i;
                        var slides = document.getElementsByClassName("mySlides");
                        var dots = document.getElementsByClassName("dot");
                        if (n > slides.length) {slideIndex = 1}
                        if (n < 1) {slideIndex = slides.length}
                        for (i = 0; i < slides.length; i++) {
                            slides[i].style.display = "none";
                        }
                        for (i = 0; i < dots.length; i++) {
                            dots[i].className = dots[i].className.replace(" act", "");
                        }
                        slides[slideIndex-1].style.display = "block";
                        dots[slideIndex-1].className += " act";
                    }
				</script>
			</div>

			<div class="clearfix"> </div>
			<div class="blog-post">
				<div class="col-md-2 blog-post-date">
					<span><label><i class="fa fa-file-text fa-2x"></i></label></span>
				</div>
				<div class="col-md-10 blog-post-info">
					<h4 class="post-head"><a href="{{URL::to('/stories')}}">@lang('words.story')</a></h4>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
			<div class="blog-post">
				<div class="col-md-2 blog-post-date">
					<span><label><i class="fa fa-book fa-2x"></i></label></span>
				</div>
				<div class="col-md-10 blog-post-info">
					<h4 class="post-head"><a class="libhide" href="javascript:void(0);">@lang('words.library')</a></h4>
				</div>

				<div class="clearfix"> </div>
				<div class="libshow">

					<section class="thumb">
						<div class="polaroid">
							<a href="https://www.litmir.me/bd/?b=31235" target="_blank">
								<img  src="img/lib/library1.jpeg" alt="После трех уже поздно" style="width: 100%">
							</a>
						</div>

						<br>



					</section>

				</div>
			</div>
			<div class="clearfix"> </div>
			<div class="blog-post">
				<div class="col-md-2 blog-post-date">
					<span><label><i class="fa fa-comments-o fa-2x"></i></label></span>
				</div>
				<div class="col-md-10 blog-post-info">
					<h4 class="post-head"><a href="{{URL::to('/momsblog')}}">@lang('words.blogmum')</a></h4>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="clearfix"> </div>
	</div>
	<!---- //End-blog-time-line---->
</div>
<!----//End-blog---->
<!----start-test-monials---->
<div  id="test" class="testmonials">
	<div class="container">
		<div class="head text-center">
			<h3><span> </span> @lang('words.projects')</h3>
		</div>

		<!--script of projects-->

		<div class="clearfix"></div>

		<br>
		<div class="portfolio-pagination">
			<ul class="pagination">




			</ul>
		</div>
		<br>
		<div class="clearfix"></div>

		<section id="two">
			<div class="inner">

				<!-- navigation holder -->
				<!-- item container -->

				<div class="spotlight">
					<div class="image">
						<img src="img/proj/polezny_zavtrak.jpg" alt="Полезный завтрак" />
					</div>
					<div class="content">
						<a href="http://www.1news.az/society/20160519092742407.html" target="_blank">
							<h3>"Полезный завтрак" – семейный просветительский проект.</h3>
						</a>
						<p>Это возможность поделиться идеями, опытом, знаниями, касающиеся не только воспитания и развития детей, но и семьи в целом.</p>
					</div>
				</div>


			</div>
		</section>

		<div class="clearfix"></div>

		<br>
		<div class="portfolio-pagination">
			<ul class="pagination">



			</ul>
		</div>
		<br>
		<div class="clearfix"></div>

	</div>

</div>
<div class="clearfix"> </div>
<!----//End-testmonial-time-line---->
<!----start-contact---->
<div id="contact" class="contact">
	<div class="contact-map">
		<iframe src="https://maps.google.com/maps?t=m&amp;hl=en-US&amp;gl=US&amp;mapclient=embed&amp;q=United+States&amp;ie=UTF8&amp;hq=&amp;hnear=United+States&amp;ll=37.359243,-91.525727&amp;spn=0.409036,0.837021&amp;z=11&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?t=m&amp;hl=en-US&amp;gl=US&amp;mapclient=embed&amp;q=United+States&amp;ie=UTF8&amp;hq=&amp;hnear=United+States&amp;ll=37.359243,-91.525727&amp;spn=0.409036,0.837021&amp;z=11&amp;source=embed"> </a></small>
	</div>
	<div class="contact-grids">
		<div class="col-md-6 contact-left">
			<h3><img src="{{URL::to('image/ico/contactss.png')}}"
					 alt="Contacts Icon" width="40" height="40">@lang('words.contact')</h3>
			<p><i class="fa fa-map-marker" style="color: #1B242F"> </i> ***</p>
			<p><i class="fa fa-phone-square fa-lg" style="color: #1B242F"></i> +994-50-365-45-71</p>
			</span>
			<h4>@lang('words.follow')</h4>
			<a class="social" href="https://www.facebook.com/ActiveMomsClub/"
			   target="_blank">
				<i class="fa fa-facebook-square fa-2x"></i></a>
			<a class="social" href="https://www.instagram.com/activemomsclubbaku/"
			   target="_blank">
				<i class="fa fa fa-instagram fa-2x"></i></a>
			<a class="social" href="https://www.youtube.com/channel/UCTPEmIERJjc9_QnjtNUjRdg" target="_blank">
				<i class="fa fa-youtube-square fa-2x"></i></a>
			<form>
				<input type="text" value="@lang('words.name')" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
				<input type="text" value="info@mail.com *" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'info@activemoms.club';}">
				<textarea onfocus="if(this.value == 'Message *') this.value='';" onblur="if(this.value == '') this.value='Message *;">@lang('words.letter') *</textarea>
				<span class="submit-btn"><input type="submit" value="@lang('words.send')"></span>
			</form>
		</div>
		<div class="col-md-6 contact-right">
			<span class="pin-map"> </span>
		</div>
		<div class="clearfix"> </div>
	</div>
</div>
<!----//End-contact---->
<!----start-footer---->
<div class="footer">
	<div class="container">
		<div class="footer-left">
			<a href="{{URL::to('/')}}"><img src="{{URL::to('image/ico/cover.jpg')}}" title="AMC"
									  style="width:280px;height:100px;"></a>
			<p>Template by <a href="https://work-87456800.facebook.com/profile.php?id=100016745117824" target="_blank">Anar Haydarli</a></p>
		</div>

		<a href="#home" id="toTop" style="display: block;"> <span id="toTopHover"> </span></a>
	</div>
</div>
<!----//End-footer---->
<!----//End-container---->
</body>
</html>
