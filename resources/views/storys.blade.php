<!DOCTYPE HTML>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Storys | AMC - Baku</title>
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
<link href="css/storys_css.css" rel='stylesheet' type='text/css' />
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
				<a href="index.blade.php"><img src="{{asset('/image/ico/amclog.png')}}" title="AMC"
                                               style="width:110px; height:70px;" /></a>
				</div>
				<!---- //End-logo---->
				<!----start-top-nav---->
				<nav class="top-nav">
					<ul class="top-nav">
						<li class="active" class="page-scroll"><a href="#test" class="scroll">Статьи</a></li>
						<li class="page-scroll"><a href="{{URL::to('/')}}" >Назад</a></li>
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
					<h3><span> </span> Статьи</h3>
				</div>
			</div>
		</div>
		<div class="clearfix"></div>
		<br>
		<section id="two">
			<div class="inner">
				<!--1-->
					<div class="spotlight">
						<div class="image">
							<img src="/image/storys/yuliyacan.jpg" alt="YuliyaQippenreyter" />
						</div>
						<div class="content">
							<a href="https://ru.wikipedia.org/wiki/%D0%93%D0%B8%D0%BF%D0%BF%D0%B5%D0%BD%D1%80%D0%B5%D0%B9%D1%82%D0%B5%D1%80,_%D0%AE%D0%BB%D0%B8%D1%8F_%D0%91%D0%BE%D1%80%D0%B8%D1%81%D0%BE%D0%B2%D0%BD%D0%B0" target="_blank">
								<h3>Юлия Гиппенрейтер</h3>
								<h4>Доктор психологических наук, профессор МГУ им. М. В. Ломоносова Юлия Борисовна Гиппенрейтер – автор десятков публикаций, в том числе бестселлеров о правилах общения с детьми «Общаться с ребенком. Как?» и «Продолжаем общаться с ребенком. Так?».</h4>
							</a>
							<div class="more">
								<p style="font-size: 14px;"><b>«Школа как организация не заинтересована в развитии творческого мышления и самостоятельности ребенка»</b><br><br>
								<b><i>Что мы действительно можем сделать для блага своего ребенка?</i></b><br>
								Юлия Гиппенрейтер: Лучшим ответом будет зрительный образ. Вспомните фреску Микеланджело: Бог сотворяет Адама. Их руки вот-вот встретятся; мощная, мускулистая рука Бога устремляется к протянутой руке Адама. Взрослый – носитель знаний, мудрости, этических принципов. И он передает все это своему ребенку. <br>
								<i>То есть воспитывает?</i><br>
								Ю. Г.: Я бы заменила глагол: он слишком часто ассоциируется с такими действиями, как заставлять, принуждать, требовать, контролировать, проверять. Поэтому лучше сказать не «воспитывает», а «растит». Помогает расти. Чтобы когда-нибудь ребенок вырос и мог жить среди других людей, самостоятельно. И тогда взрослый должен свою руку отодвинуть. Потому что рука ребенка уже обрела собственную силу. Он индивидуум, личность. И когда это произойдет, родительская миссия окончена. Тогда остаются только их личные чувства друг к другу, их любовь, дружба между родителями и ребенком.<br>
								<b>Но бывает иначе: родители продолжают «воспитывать», вмешиваться в жизнь ребенка, даже когда тот давно вырос.</b><br>
								Ю. Г.: Такое отношение – это насилие над ребенком. И не только над теми, кто вырос, но и над маленькими детьми. У каждого ребенка свой процесс осмысления, свой темп развития, роста. Нам нельзя вмешиваться в этот процесс, тем более вмешиваться неаккуратно. Это значит нарушать его! Родители должны быть помощниками: это как с растением – его нужно подпитывать, защищать, а не тянуть за верхушку, не торопить.<br>
								<b>Но есть еще и внешние требования: что ребенок должен уметь к определенному возрасту… </b><br>
								Ю. Г.: Великий математик Владимир Арнольд вспоминал, как в конце первого класса учительница вызвала его мать и сказала: «Я вашего сына перевести не могу, он до сих пор не выучил таблицу умножения, складывает в уме числа, вместо того чтобы умножать». Но у него отец профессор, дед профессор – не может быть! И вот что придумала тогда бабушка – сделала карты, наподобие игральных, но с примерами: семью восемь или пятью три. А на другой стороне – ответ. И они стали вместе играть: «Пятью шесть». – «Тридцать», – говорит Володя. Откладывают карточку в одну сторону. А если неправильный ответ, то в другую. И так с одной стороны стопка карт худела, а с другой росла... Так он быстро выучил всю таблицу умножения. Почему? Учительница требовала автоматических ответов, а мальчик вдумывался, ему надо было понять. Она ему грозила наказанием: не переведу. А бабушка превратила обучение в игру и достигла нужного результата, не принуждая ребенка, а следуя за ним. <br>
								<b>Насколько совпадают интересы школы и родителей?</b><br>
								Ю. Г.: Школа как организация не заинтересована в развитии творческого мышления и самостоятельности ребенка. Она построена на спущенных сверху заданиях, программах, методиках. И требует беспрекословного их выполнения. По сути школа – это лаборатория по изготовлению безвольных людей: школьник по определению подневолен. Он исполнитель. Для творчества у него не остается времени, мысли. А волевая личность рождается, только когда ребенок растет в атмосфере свободы, инициативы, любопытства, поиска. <br>
								<b>Принято думать, что волевой человек как раз может себя заставить делать то, чего не хочет…</b><br>
								Ю. Г.: Воля – это понятие, неприменимое к действию. Оно применимо к личности. Воля – это свободная энергия, а волевая личность – тот, у кого есть эта энергия и кто делает то, что ему интересно. Физиолог Павлов зарплату забывал получать, обедать забывал, так его увлекали его исследования. Давайте такую волю у ребенка воспитывать, чтобы он хотел что-то делать и делал, чтобы у него было живое желание и интерес. А когда его заставляют, запугивают, как та учительница, которая говорит: «Не переведу», или «Все выучили, а ты почему такой глупый?» – в ребенка вселяют страх и чувство неполноценности. У него пропадает энергия, стремление что-то делать. Поэтому родителям приходится сделать выбор: встать либо на сторону школы, либо на сторону ребенка. Вдохновлять – вот задача взрослого. Если школа этого не делает, значит, должны делать родители – по крайней мере первые шаги в этом направлении. Освободить ребенка от принудиловки, сказать ему: «Ты не должен».<br> 
								<b>Но можно ли разрешить ребенку делать все, что он хочет? </b><br>
								Ю. Г.: Прежде всего необходимо учиться понимать, чего он действительно хочет и почему он этого хочет. Интересное наблюдение сделала одна мама. Ей казалось, сын испытывает ее терпение: он смотрел много раз подряд мультфильм, который ей категорически не нравился. А мать упрекала его: «У тебя есть масса развивающих программ, книг и игр, займись чем-нибудь другим, в конце концов! Этот мультфильм больше смотреть нельзя». После чего следовали слезы, истерики и обиды. Но потом мать прошла курс активного слушания* и попробовала изменить тактику. «Ты хочешь, чтобы я включила тебе этот мультфильм», – говорит она в утвердительной форме. – «Да, хочу смотреть именно этот мультфильм, потому что он мне очень нравится!» – «Тебе очень нравится именно этот мультфильм», – говорит она. «Да, очень!» – отвечает мальчик. Мать выдерживает паузу. «Но ты никогда не разрешаешь мне его смотреть», – продолжает мальчик. Тогда мама говорит: «Ты сердишься из-за того, что мама не разрешает тебе смотреть мультфильм, который тебе очень нравится». – «Да, мне этого так хочется!» И после паузы: «Я хочу смотреть фильм с тобой, мама». Мы видим, что в ребенке идет какой-то свой, особенный процесс. «Тебя не было дома целый день, и я очень соскучился». Мама опять повторяет: «Ты очень соскучился, мой малыш, и хочешь со мной смотреть мультфильм». – «Да, очень хочу». Она обнимает ребенка. Он бежит в свою комнату, приносит... диск «Учимся читать» и предлагает посмотреть его немного, а потом просто вместе почитать его любимую книгу. Что произошло? Мать услышала наконец, что на самом деле ребенок хотел ласки и понимания. Это парадоксальное поведение – рассердить, чтобы получить внимание, – очень типично для детей.</p>
							</div>
						</div>
					</div>				
				</div>


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
										<a href="{{URL::to('/')}}"><img src="{{asset('/image/ico/cover.jpg')}}" title="AMC"
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

			 		//$().UItoTop({ easingType: 'easeOutQuart' });

			 	});
			 </script>
			 <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
			</div>
		</div>
		<!----//End-footer---->
		<!----//End-container---->
	</body>
	</html>