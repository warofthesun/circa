<!doctype html>
<!--header-front-->
<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // force Internet Explorer to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title(''); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-touch-icon.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>

		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
            <meta name="theme-color" content="#121212">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>
		<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
		<script>
      window.sr = ScrollReveal({ duration: 600, reset: true, easing: 'ease-in', scale: .98, distance:'50px'});
    </script>
		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>

	</head>

	<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">
		<div class="header-nav">
			<nav role="navigation" class="wrap row" itemscope itemtype="http://schema.org/SiteNavigationElement">
					<?php wp_nav_menu(array(
										 'container' => false,                           // remove nav container
										 'container_class' => 'menu cf',                 // class of container (should you choose to use it)
										 'menu' => __( 'The Main Menu', 'bonestheme' ),  // nav name
										 'menu_class' => 'nav top-nav cf',               // adding custom nav class
										 'theme_location' => 'main-nav',                 // where it's located in the theme
										 'before' => '',                                 // before the menu
													 'after' => '',                                  // after the menu
													 'link_before' => '',                            // before each link
													 'link_after' => '',                             // after each link
													 'depth' => 0,                                   // limit the depth of the nav
										 'fallback_cb' => ''                             // fallback function (if there is one)
					)); ?>
			</nav>
			<div id="mobile-nav">
				Navigation
			</div>
		</div>
		<div id="container">
			<div class="top-half">
				<header class="header" role="banner" itemscope itemtype="http://schema.org/WPHeader">

					<div id="inner-header" class="wrap cf row">
						<div id=trigger-bird-1>
							<div id="bird-1"></div>
						</div>
						<div id=trigger-kite>
							<div id="kite"></div>
						</div>
						<p id="logo" class="h1" itemscope itemtype="http://schema.org/Organization">
							<a href="<?php echo home_url(); ?>" rel="nofollow"><img src="<?php echo get_template_directory_uri(); ?>/library/images/logo.png"></a>
						</p>

						<div id=trigger-bird-2>
							<div id="bird-2"></div>
						</div>


						<div id=trigger-balloon>
							<div id="balloon"></div>
						</div>

					</div>
					<div class="row wrap" id="header-graf">
						<div class="col-xs-0 col-sm-1 cf"></div>
						<div class="col-xs-12  col-sm-10 cf">
							<div class="row">
								<div class="col-xs-12 cf header-graf">
									Nullam sagittis auctor mauris ut fringilla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
								</div>
							</div>
						</div>
						<div class="col-xs-0 col-sm-1 cf"></div>
					</div>
				</header>

				<script>
				jQuery(function ($) { // wait for document ready
						var kitepath = {
							entry : {
								curviness: 3.0,
								autoRotate: false,
								values: [
										{x: 0,	y: 0},
										{x: 200,	y: 50},
										{x: 100,	y: -250},
										{x: -600,	y: -400}
									]
							},
						};

						var balloonpath = {
							entry : {
								curviness: 3.0,
								autoRotate: false,
								values: [
										{x: -5,	y: 100},
										{x: 10,	y: 100},
										{x: -10,	y: 200}


									]
							},
						};

						var bird1path = {
							entry : {
								curviness: 3.0,
								autoRotate: false,
								values: [

									{x: 600,	y: -400}


									]
							},
						};

						var bird2path = {
							entry : {
								curviness: 3.0,
								autoRotate: false,
								values: [


									{x: -1600,	y: -400}


									]
							},
						};

						// init controller
						var controller = new ScrollMagic.Controller();

								// create tween
								var logoTween = new TimelineMax()
									.add(TweenMax.to($("#logo"), 2.5, {ease:Power2.easeInOut}))

								// pin the logo
								var pinIntroScene = new ScrollMagic.Scene({
									triggerElement: '#logo',
									triggerHook: 0.2,
									duration: '30%'
								})
								.setPin('#logo', {pushFollowers: false})
								.setTween(logoTween)
								.addIndicators({
									name: "logo"
								}) // add indicators (requires plugin)
								.addTo(controller);

								// create bird1 tween
								var tweenBird1 = new TimelineMax()
									.add(TweenMax.to($("#bird-1"), 1, {css:{bezier:bird1path.entry}, ease:Power1.easeInOut}))

								//build Bird 1 Scene
								var sceneBird1 = new ScrollMagic.Scene({
									triggerElement: "#trigger",
									duration: '30%',
									offset: 0
								})
								.setPin("#trigger-bird-1", {pushFollowers: false})
								.setTween(tweenBird1)
								.addIndicators({
									name: "bird-1",
									indent: 100
								}) // add indicators (requires plugin)
								.addTo(controller);

								// create bird2 tween
								var tweenBird2 = new TimelineMax()
									.add(TweenMax.to($("#bird-2"), 1, {css:{bezier:bird2path.entry}, ease:Power1.easeInOut}))

								//build Bird 2 Scene
								var sceneBird2 = new ScrollMagic.Scene({
									triggerElement: "#trigger",
									duration: '30%',
									offset: 0
								})
								.setPin("#trigger-bird-2", {pushFollowers: false})
								.setTween(tweenBird2)
								.addIndicators({
									name: "bird-2",
									indent: 100
								}) // add indicators (requires plugin)
								.addTo(controller);

								//build balloon Scene
								var sceneBalloon = new ScrollMagic.Scene({
									triggerElement: "#trigger",
									duration: '70%',
									offset: 150
								})
								.setPin("#trigger-balloon", {pushFollowers: false})
								.setTween(tween)
								.addIndicators({
									name: "balloon",
									color: "#fff"
								}) // add indicators (requires plugin)
								.addTo(controller);


								// create tween
								var tween = new TimelineMax()
									.add(TweenMax.to($("#kite"), 1, {css:{bezier:kitepath.entry}, ease:Power2.easeOutCirc}))
									.add(TweenMax.to($("#balloon"), 1, {css:{bezier:balloonpath.entry}, ease:Power1.easeInOut}))


								// build kite scene
								var scene = new ScrollMagic.Scene({
									triggerElement: "#trigger",
									duration: '70%',
									offset: 10
								})
								.setPin("#trigger", {pushFollowers: false})
								.setTween(tween)
								.addIndicators({
									name: "Kite"
								}) // add indicators (requires plugin)
								.addTo(controller);

					})
				</script>
			</div>
			<div class="overview row">
				<div class="overview-content row">
					Nullam sagittis auctor mauris ut fringilla. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Pellentesque id dapibus orci, nec luctus nisi. accumsan fringilla magna. Aenean sit amet odio ante. Donec pharetra nisi ut hendrerit congue.
				</div>
			</div>
