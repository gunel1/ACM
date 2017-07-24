
<!DOCTYPE HTML>
<html>
<head>
	<meta charset="UTF-8">
	<title>Active Mom's Club - Baku</title>
	<link href="{{asset('/css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="{{asset('/js/jquery.min.js')}}"></script>
	<!---- start-smoth-scrolling---->
	<script type="text/javascript" src="{{asset('/js/move-top.js')}}"></script>
	<script type="text/javascript" src="{{asset('/js/easing.js')}}"></script>
	
	<!---- start-smoth-scrolling---->
	<!-- Custom Theme files -->
	<link href="{{asset('/css/theme-style.css')}}" rel='stylesheet' type='text/css' />
	<!-- Custom Theme files -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!--font-Awesome-->
<link rel="stylesheet" href="{{asset('/fonts/css/font-awesome.min.css')}}">
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
	<div id="home" class="header scroll">
		<div class="container">
			<!---- start-logo---->
			<div class="logo">
				<a href="{{URL::to('/home')}}"><img src="{{asset('/image/ico/amclog.png')}}" title="AMC"
					style="width:140px; height:90px;" /></a>
				</div>
				<!---- //End-logo---->
				<!----start-top-nav---->
				<nav class="top-nav">
					<ul class="top-nav">
						<li class="aktive"><a href="#home" class="scroll">Главная</a></li>
						<li class="page-scroll"><a href="#fea" class="scroll">О Клубе</a></li>
						<li class="page-scroll"><a href="#port" class="scroll">Галерея</a></li>
						<li class="page-scroll"><a href="#blog" class="scroll">Новости</a></li>
						<li class="page-scroll"><a href="#test" class="scroll">Проекты</a></li>
						<li class="contatct-active" class="page-scroll"><a href="#contact" class="scroll">Контакты</a></li>
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
						<h3><span> </span> Наша История</h3>
						<p>Не секрет, что по мере взросления детей, перед мамами
							возникают новые задачи, а порой и неизвестные вызовы,
							требующие своевременных и ответственных решений. С целью
							информационно-образовательной поддержки молодых мам, в
							январе 2014 года, было создано Сообщество мам «Active
							Mom's Club» - единая платформа для разделения опыта и
							знаний, касающиеся не только воспитания и развития детей,
							семьи в целом, но и личностного роста самих женщин.
							За три года активной деятельности было организовано и
							проведено свыше 40 мероприятий, при участии специалистов
							из разных сфер. Личное общение с профессионалами,
							которые не просто выслушают, а могут дать ценный жизненный
							совет, бесценно, и мамы знают это, как нельзя лучше.
							Начавший свою деятельность в facebook, спустя всего год
							«Active Mom's Club» становится первым и самым популярным
							объединением мам в Баку и на сегодняшний день объединяет 6 000 мам в социальной сети.
							Главная миссия клуба – создание сообщества, которое сплотит
							вокруг себя умных и талантливых мам, окажет содействие в
							решении злободневных вопросов, организует интересный и
							полезный досуг совместно с детьми.
							Мы будем и дальше расти, и развиваться, принося пользу обществу! </p>
						</div>
						<!---- start-features-grids---->
						<div class="features-grids text-center">

							<div class="col-md-3 features-grid">
								<a href="javascript:void(0);" class="flip"><span class="fea-icon1"><i class="fa fa-trophy"> </i> </span>
									<h3>Достижения</h3>
								</a>
								<!--Done-->
							</div>

							<div class="panel" style="border-color: #FD3B01">
								<h4 style="color: white;"><br><b>В Азербайджане создана новая организация по поддержке и просвещению молодых семей.</b></h4>
								<h5 style="color: white;"><i>В ближайшей перспективе ожидаются социальные проекты и общественные кампании</i></h5>
								<p style="font-size: 14px; color: white;">В Азербайджане основана новая неправительственная организация (НПО) по вопросам поддержки, просвещения и всестороннего укрепления института семьи.
									Организация прошла регистрацию в Министерстве юстиции Азербайджана, заручилась поддержкой Государственного Комитета по проблемам семьи, женщин и детей. Главная цель объединения – дать информационную и эмоциональную поддержку азербайджанским семьям, сформировать нормы ответственного родительства. В современном мире роль молодой семьи возрастает, имеется необходимость укреплять семейные ценности – любовь, верность, взаимопонимание, доверие, сохранять добрые семейные традиции, - организация окажет необходимое содействие в верном направлении.
									В перспективе НПО «Просвещение и поддержка семей» - социальные проекты и акции, общественные кампании. В его рамках будут созданы условия для семейной социализации, позитивного и конструктивного общение, проходить полезные встречи, тренинги личностного роста с участием, как местных специалистов, так и зарубежных.
									Одной из значимых целей организации является активизация и поддержка контактов и сотрудничества между подобными организациями по всему миру, а также плодотворное сотрудничество с местными государственными и неправительственными организациями.
									Следует отметить немаловажный факт – объединение возникло не случайно, не в один час и не на пустом месте. Его возникновению и становлению предшествовала трехлетняя работа популярного в Баку сообщества мам «Active Mom’s Club». Клубная деятельность, интересные встречи, общественные мероприятия – то малое, из чего состоит работа сообщества, вокруг которого объединились женщины разных профессий с активной жизненной позицией. 
									Три года стараний не прошли даром, отныне организация продолжит свой путь в новом формате, выходит на международный уровень, и будет реализовывать масштабные проекты не только в Баку, но и по всей республике, а также за её пределами. «Active Mom’s Club» будет функционировать в рамках деятельности НПО, как один из его успешных проектов.</p>
								</div>



								<div class="col-md-3 features-grid">
									<a href="javascript:void(0);" class="hidex"><span class="fea-icon1"><i class="fa fa-briefcase"> </i> </span>
										<h3>Эксперты</h3>
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
									<section class="thumb">
										<div class="polaroid">
											<img src="img/ex/Nini_Karseladze.jpg" alt="Нини Карселадзе" style="width: 100%">
										</div>

										<div>
											<!--h4 ve h5-->				<h4>Нини Карселадзе</h4>
											<h5>Международный тренер и консультант в сфере бизнеса и личностного роста</h5>
										</div>


									</section>

									<!--NashiEkspertiend-->
								</div>

								<div class="col-md-3 features-grid">
									<a href="javascript:void(0);" class="hiteam" ><span class="fea-icon1"><i class="fa fa-users"> </i> </span>
										<h3>Команда</h3>
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
											<div class="spotlight">
												<div class="polaroid">
													<img src="img/tm/india.jpg" alt="Rugiya_Afsharli" style="width: 100%" />
												</div>
												<div class="content">
													<!--toDo like this-->			<a href="javascript:void(0);">
													<h3>Ругия Ашрафли</h3>
													<h4>Учредитель, творческий руководитель</h4>
												</a>
												<p style="font-size: 14px;"><b>Ругия</b> - человек с высоким уровнем мотивации, неисчерпаемой энергией и великой жаждой достижений. 
													По образованию психолог, окончила БГУ, факультет «Психология и социальные науки». Последние годы работает над самыми различными проектами, как творческого, так и коммерческого характера: ведет авторский проект «Наши за рубежом» и занимается общественной деятельностью – являясь творческим руководителем Сообщества мам «Active Mom’s Club». <br>
													<i><b>«Мечтаю основать большую компанию и семейный центр, сплотив вокруг себя всех своих единомышленников, но самое главное - хочу быть хорошей мамой для своего сына».
													</b></i></p>
												</div>
											</div>				

											<div class="clearfix"></div>

																	<!--end-->
																</div>
															</section>
														</div>



														<div class="col-md-3 features-grid">
															<a href="javascript:void(0);" class="gizli"><span class="fea-icon1"><i class="fa fa-list-alt"> </i> </span>
																<h3>СМИ О Нас</h3>
															</a>
															<!-- -->
														</div>

														<div class="aciq">
															<div class="clearfix"></div><br>
															<br>
															<div class="portfolio-pagination">
                    <ul class="pagination">
                      <li><a href="#">left</a></li>
                      <li class="active"><a href="#">1</a></li>
                      <li><a href="#">2</a></li>
                      <li><a href="#">3</a></li>
                      <li><a href="#">4</a></li>
                      <li><a href="#">5</a></li>
                      <li><a href="#">6</a></li>
                      <li><a href="#">7</a></li>
                      <li><a href="#">8</a></li>
                      <li><a href="#">9</a></li>
                      <li><a href="#">10</a></li>
                      <li><a href="#">right</a></li>
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


															<!--end-->

															<br>
															<div class="portfolio-pagination">
                    <ul class="pagination">
                      <li><a href="#">left</a></li>
                      <li class="active"><a href="#">1</a></li>
                      <li><a href="#">2</a></li>
                      <li><a href="#">3</a></li>
                      <li><a href="#">4</a></li>
                      <li><a href="#">5</a></li>
                      <li><a href="#">6</a></li>
                      <li><a href="#">7</a></li>
                      <li><a href="#">8</a></li>
                      <li><a href="#">9</a></li>
                      <li><a href="#">10</a></li>
                      <li><a href="#">right</a></li>
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
		<!----//End-feartures----->
		<!---- start-work---->
		<div class="work">
			
		</div>
		<!---- //End-work---->
		<!--start-portfolio-->
		<div id="port" class="portfolio portfolio-box">
			<div class="head text-center">
				<h3><span> </span> Галерея</h3>
			</div>
			<!--galerylery-->

				<section id="portfolio">
        <div class="container">
            <div class="row">
                <ul class="portfolio-filter text-center">
                    <li><a class="btn btn-default active" href="#" data-filter="*">All</a></li>
                    <li><a class="btn btn-default" href="#" data-filter=".branded"><i class="fa fa-picture-o fa-lg"></i></a></li>
                    <li><a class="btn btn-default" href="#" data-filter=".logos"><i class="fa fa-film fa-lg"></i></a></li>
                </ul><!--/#portfolio-filter-->
                 <div class="portfolio-pagination">
                    <ul class="pagination">
                      <li><a href="#">left</a></li>
                      <li class="active"><a href="#">1</a></li>
                      <li><a href="#">2</a></li>
                      <li><a href="#">3</a></li>
                      <li><a href="#">4</a></li>
                      <li><a href="#">5</a></li>
                      <li><a href="#">6</a></li>
                      <li><a href="#">7</a></li>
                      <li><a href="#">8</a></li>
                      <li><a href="#">9</a></li>
                      <li><a href="#">10</a></li>
                      <li><a href="#">right</a></li>
                    </ul>
                </div>
                    
                <div class="portfolio-items">
                <!--Burda bashliyir-->
                    <div class="col-xs-6 col-sm-4 col-md-3 portfolio-item branded">
                        <div class="portfolio-wrapper">
                            <div class="portfolio-single">
                                <div class="portfolio-thumb">
                                    <img src="{{asset('/image/portfolio/artmosfera/artmosferaesas.jpg')}}" class="img-responsive" alt="">
                                </div>
                                <div class="portfolio-view">
                                    <ul class="nav nav-pills">
                                        <li><a href="album.html"><i class="fa fa-link"></i></a></li>
                                        <li><a href="{{asset('/image/portfolio/artmosfera/artmosferaesas.jpg')}}" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="portfolio-info ">
                                <h4>АРТмосфера</h4>
                            </div>
                        </div>
                    </div>
<!--Burda bashliyir-->


                </div>
                <div class="portfolio-pagination">
                    <ul class="pagination">
                      <li><a href="#">left</a></li>
                      <li class="active"><a href="#">1</a></li>
                      <li><a href="#">2</a></li>
                      <li><a href="#">3</a></li>
                      <li><a href="#">4</a></li>
                      <li><a href="#">5</a></li>
                      <li><a href="#">6</a></li>
                      <li><a href="#">7</a></li>
                      <li><a href="#">8</a></li>
                      <li><a href="#">9</a></li>
                      <li><a href="#">10</a></li>
                      <li><a href="#">right</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!--/#portfolio-->

    <!--/#footer-->
    <link href="{{asset('/css/responsive.css')}}" rel="stylesheet">
	<link href="{{asset('/css/animate.min.css')}}" rel="stylesheet">
	<link href="{{asset('/css/lightbox.css')}}" rel="stylesheet">
    <script type="text/javascript" src="{{asset('/js/jquery.js')}}"></script>
    <script type="text/javascript" src="{{asset('/js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/js/jquery.isotope.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/js/lightbox.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/js/wow.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/js/main.js')}}"></script>

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
					<h3><span> </span> Новости</h3>
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
							<h4 class="post-head"><a class="evehid" href="javascript:void(0);">Мероприятия</a></h4>
						</div>
						<div class="clearfix"> </div>
						<div class="eveshow">
							<div class="slideshow-container">
								<div class="mySlides fade">
									<div class="numbertext">1 / 18</div>
									<img class="borad" src="{{asset('image/eve/events (1).png')}}" style="width:100%">
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
									<h4 class="post-head"><a href="{{URL::to('/stories')}}">Статьи</a></h4>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="clearfix"> </div>
							<div class="blog-post">
								<div class="col-md-2 blog-post-date">
									<span><label><i class="fa fa-book fa-2x"></i></label></span>
								</div>
								<div class="col-md-10 blog-post-info">
									<h4 class="post-head"><a class="libhide" href="javascript:void(0);">Библиотека</a></h4>
								</div>

								<div class="clearfix"> </div>
								<div class="libshow">

									<section class="thumb">
										<div class="polaroid">
											<a href="https://www.litmir.me/bd/?b=31235" target="_blank">
												<img  src="/image/lib/library1.jpeg" alt="После трех уже поздно" style="width: 100%">
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
									<h4 class="post-head"><a href="{{URL::to('/momsblog')}}">Блог Мам</a></h4>
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
							<h3><span> </span> Проекты</h3>
						</div>

						<!--script of projects-->

						<div class="clearfix"></div>

						<br>
						<div class="portfolio-pagination">
                    <ul class="pagination">
                      <li><a href="#">left</a></li>
                      <li class="active"><a href="#">1</a></li>
                      <li><a href="#">2</a></li>
                      <li><a href="#">3</a></li>
                      <li><a href="#">4</a></li>
                      <li><a href="#">5</a></li>
                      <li><a href="#">6</a></li>
                      <li><a href="#">7</a></li>
                      <li><a href="#">8</a></li>
                      <li><a href="#">9</a></li>
                      <li><a href="#">10</a></li>
                      <li><a href="#">right</a></li>
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
										<img src="/image/proj/semeyniypoxod.jpg" alt="Семейный поход" />
									</div>
									<div class="content">
										<a href="http://lady.day.az/news/relations/854568.html" target="_blank">
											<h3>"Семейный поход" - выездной проект для всей семьи.</h3>
										</a>
										<p>Выезды на природу дают  возможность не только насладиться природными красотами, но и найти много новых тем для приятного времяпровождения детей и родителей.</p>
									</div>
								</div>

								<div class="clearfix"> </div>


						</div>
					</section>

					<div class="clearfix"></div>

					<br>
					<div class="portfolio-pagination">
                    <ul class="pagination">
                      <li><a href="#">left</a></li>
                      <li class="active"><a href="#">1</a></li>
                      <li><a href="#">2</a></li>
                      <li><a href="#">3</a></li>
                      <li><a href="#">4</a></li>
                      <li><a href="#">5</a></li>
                      <li><a href="#">6</a></li>
                      <li><a href="#">7</a></li>
                      <li><a href="#">8</a></li>
                      <li><a href="#">9</a></li>
                      <li><a href="#">10</a></li>
                      <li><a href="#">right</a></li>
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
						<h3><img src="{{asset('/image/ico/contactss.png')}}"
							alt="Contacts Icon" width="40" height="40"> Контакты</h3>
							<p><i class="fa fa-map-marker" style="color: #1B242F"> </i> ***</p>
							<p><i class="fa fa-phone-square fa-lg" style="color: #1B242F"></i> +994-50-365-45-71</p>								
						</span>
						<h4>Подписаться на Active Mom's Club:</h4>
						<a class="social" href="https://www.facebook.com/ActiveMomsClub/" 
						target="_blank">
						<i class="fa fa-facebook-square fa-2x"></i></a>
						<a class="social" href="https://www.instagram.com/activemomsclubbaku/"
						target="_blank">
						<i class="fa fa fa-instagram fa-2x"></i></a>
						<a class="social" href="https://www.youtube.com/channel/UCTPEmIERJjc9_QnjtNUjRdg" target="_blank">
							<i class="fa fa-youtube-square fa-2x"></i></a>
							<form>
								<input type="text" value="Иия" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
								<input type="text" value="info@mail.com *" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'info@activemoms.club';}">
								<textarea onfocus="if(this.value == 'Message *') this.value='';" onblur="if(this.value == '') this.value='Message *;">Письмо *</textarea>
								<span class="submit-btn"><input type="submit" value="Отправить"></span>
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
							<a href="index.html"><img src="{{asset('/image/ico/cover.jpg')}}" title="AMC"
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

