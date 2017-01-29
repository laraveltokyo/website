<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<title>Laravel Tokyo - User Group on Tokyo</title>
<meta name="keywords" content="laravel,php,framework">
<meta name="description" content="Laravel Tokyoはメンバーが自由にイベントを企画・開催できるユーザーグループです。">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/assets/styles/app.min.css" type="text/css">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script type="text/javascript" src="https://use.typekit.net/guh6wia.js"></script>
<script type="text/javascript" src="/assets/scripts/app.min.js" defer="defer"></script>
</head>
<body>
	<div id="background">
		<ul id="location">
			<li id="name1">
				<span class="circle"></span><span class="line"></span><span class="title shuffle">Roppongi</span>
			</li>
			<li id="name2">
				<span class="circle"></span><span class="line"></span><span class="title shuffle">ShutoExpressway</span>
			</li>
			<li id="name3">
				<span class="circle"></span><span class="line"></span><span class="title shuffle">Shibakoen</span>
			</li>
			<li id="name4">
				<span class="circle"></span><span class="line"></span><span class="title shuffle">DaiichiKeihin</span>
			</li>
			<li id="name5">
				<span class="circle"></span><span class="line"></span>
				<dl>
					<dt class="title shuffle">Tokyo Tower</dt>
					<dd class="title data1 shuffle">35.65858,139.745433</dd>
					<dd class="title data2 shuffle">333m</dd>
				</dl>
			</li>
		</ul>
	</div>

	<header id="header">
		<h1 id="logo">
			<a href="https://laravel.tokyo"><img src="/assets/images/header_logo.png" alt="Laravel東京ユーザーグループ ホームページ"></a>
		</h1>
		<ul id="nav">
			<!--<li class="item1">
				<a href="#">スポンサー</a>
			</li>-->
			<li class="item2">
				<a href="https://www.facebook.com/groups/laraveltokyo/">フォーラム</a>
			</li>
			<li class="item4">
				<a href="https://github.com/laraveltokyo" target="_blank">Git</a>
			</li>
			<li class="item5">
				<a href="https://laravel.com/" target="_blank">laravel.com</a>
			</li>
		</ul>
	</header>

	<main id="content">
		<div class="grid">
			<div id="jumbotron">
				<div id="jumbotron-title1" class="title"><img src="assets/images/con_title1.png" alt="Laravel ‐ララベル"></div>
				<div id="jumbotron-title2" class="title"><img src="assets/images/con_title2.png" alt="トウキョウユーザーグループ"></div>
				<div id="jumbotron-text1" class="text shuffle">Laravel is The hottest PHP framework now</div>
				<div id="jumbotron-text2" class="text shuffle">The latest version: 5.4</div>

				<div id="jumbotron-description">
					<img src="assets/images/footer_title.png" alt="THE PHP FRAMEWORK FOR WEB ARTISANS.PHP THAT DOESN'T HURT. CODE HAPPY &amp; ENJOY THE FRESH AIR.">
				</div>
			</div>

			<div id="side">
				<div id="side-icons">
					<div><span class="icon news"></span></div>
					<div><span class="icon event"></span></div>
				</div>
				<div id="side-windows">
					<h2 class="event">イベント</h2>
					<dl class="window">
@forelse ($events as $data)
						<dt>{!! $data['datetime_html'] !!}</dt>
						<dd>
							{!! $data['content_html'] !!}
						</dd>
@empty
						<dt>次回をお楽しみに！</dt>
						<dd>&nbsp;</dd>
@endforelse
					</dl>

					<h2 class="news">ニュース</h2>
					<dl class="window">
@forelse ($news as $data)
						<dt>{!! $data['date_html'] !!} 更新</dt>
						<dd>
							{!! $data['content_html'] !!}
						</dd>
@empty
@endforelse
					</dl>
				</div>

				<audio id="window-open-sound">
					<source src="assets/sounds/window-open.ogg">
					<source src="assets/sounds/window-open.wav">
				</audio>
			</div><!--/side-->
		</div><!-- .grid -->
	</main><!--/content-->

	<footer id="footer">
		<div class="grid">
			<div id="copy">
				&copy; <a href="mailto:contact@laravel.tokyo">Laravel Tokyo</a> with <a href="http://geekpavilion.club">Geek Pavilion</a>.
				Designed by IIZAWA.
			</div>
			<div id="catch">Laravelはフロントエンジニアにも優しいPHPフレームワークです。</div>
		</div>
	</footer>

	<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	ga('create', 'UA-64035052-2', 'auto');
	ga('send', 'pageview');
	</script>
</body>
</html>