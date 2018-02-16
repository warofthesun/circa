/*
 * Bones Scripts File
 * Author: Eddie Machado
 *
 * This file should contain any js scripts you want to add to the site.
 * Instead of calling it in the header or throwing it inside wp_head()
 * this file will be called automatically in the footer so as not to
 * slow the page load.
 *
 * There are a lot of example functions and tools in here. If you don't
 * need any of it, just remove it. They are meant to be helpers and are
 * not required. It's your world baby, you can do whatever you want.
*/


/*
 * Get Viewport Dimensions
 * returns object with viewport dimensions to match css in width and height properties
 * ( source: http://andylangton.co.uk/blog/development/get-viewport-size-width-and-height-javascript )
*/
function updateViewportDimensions() {
	var w=window,d=document,e=d.documentElement,g=d.getElementsByTagName('body')[0],x=w.innerWidth||e.clientWidth||g.clientWidth,y=w.innerHeight||e.clientHeight||g.clientHeight;
	return { width:x,height:y };
}
// setting the viewport width
var viewport = updateViewportDimensions();


/*
 * Throttle Resize-triggered Events
 * Wrap your actions in this function to throttle the frequency of firing them off, for better performance, esp. on mobile.
 * ( source: http://stackoverflow.com/questions/2854407/javascript-jquery-window-resize-how-to-fire-after-the-resize-is-completed )
*/
var waitForFinalEvent = (function () {
	var timers = {};
	return function (callback, ms, uniqueId) {
		if (!uniqueId) { uniqueId = "Don't call this twice without a uniqueId"; }
		if (timers[uniqueId]) { clearTimeout (timers[uniqueId]); }
		timers[uniqueId] = setTimeout(callback, ms);
	};
})();

// how long to wait before deciding the resize has stopped, in ms. Around 50-100 should work ok.
var timeToWaitForLast = 100;


/*
 * Here's an example so you can see how we're using the above function
 *
 * This is commented out so it won't work, but you can copy it and
 * remove the comments.
 *
 *
 *
 * If we want to only do it on a certain page, we can setup checks so we do it
 * as efficient as possible.
 *
 * if( typeof is_home === "undefined" ) var is_home = $('body').hasClass('home');
 *
 * This once checks to see if you're on the home page based on the body class
 * We can then use that check to perform actions on the home page only
 *
 * When the window is resized, we perform this function
 * $(window).resize(function () {
 *
 *    // if we're on the home page, we wait the set amount (in function above) then fire the function
 *    if( is_home ) { waitForFinalEvent( function() {
 *
 *	// update the viewport, in case the window size has changed
 *	viewport = updateViewportDimensions();
 *
 *      // if we're above or equal to 768 fire this off
 *      if( viewport.width >= 768 ) {
 *        console.log('On home page and window sized to 768 width or more.');
 *      } else {
 *        // otherwise, let's do this instead
 *        console.log('Not on home page, or window sized to less than 768.');
 *      }
 *
 *    }, timeToWaitForLast, "your-function-identifier-string"); }
 * });
 *
 * Pretty cool huh? You can create functions like this to conditionally load
 * content and other stuff dependent on the viewport.
 * Remember that mobile devices and javascript aren't the best of friends.
 * Keep it light and always make sure the larger viewports are doing the heavy lifting.
 *
*/

/*
 * We're going to swap out the gravatars.
 * In the functions.php file, you can see we're not loading the gravatar
 * images on mobile to save bandwidth. Once we hit an acceptable viewport
 * then we can swap out those images since they are located in a data attribute.
*/
function loadGravatars() {
  // set the viewport using the function above
  viewport = updateViewportDimensions();
  // if the viewport is tablet or larger, we load in the gravatars
  if (viewport.width >= 768) {
  jQuery('.comment img[data-gravatar]').each(function(){
    jQuery(this).attr('src',jQuery(this).attr('data-gravatar'));
  });
	}
} // end function


/* This is the bit that makes the scroll animation

Uncomment  the below to exclude first section from animation
*/




/*
 * Put all your regular jQuery in here.
*/
jQuery(document).ready(function($) {

	$("#mobile-nav").click(function(){
        $(".nav").toggleClass("show");
				$("#mobile-nav").toggleClass("show");
			});


			var kitepath = {
				entry : {
					curviness: 3.0,
					autoRotate: false,
					values: [
							{x: 0,	y: 0},
							{x: 200,	y: 50},
							{x: 100,	y: -250},
						]
				},

				exit : {
					curviness: 3.0,
					autoRotate: false,
					values: [
							{x: -600,	y: -800}
						]
				},
			};

			var balloonpath = {
				entry : {
					curviness: 3.0,
					autoRotate: false,
					values: [
							{x: 30,	y: -200},


						]
				},

				exit : {
					curviness: 3.0,
					autoRotate: false,
					values: [

							{x: -5,	y: 100},
							{x: 10,	y: 100},


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


						{x: -1600,	y: -600}


						]
				},
			};

			var bird3path = {
				entry : {
					curviness: 3.0,
					autoRotate: false,
					values: [


						{x: -1600,	y: -1200}


						]
				},
			};

			var flock1path = {


				exit : {
					curviness: 3.0,
					autoRotate: false,
					values: [
						{x: -500,	y: -500}
						]
				},
			};

			var flock2path = {
				entry : {
					curviness: 3.0,
					autoRotate: false,
					values: [
						{x: 150,	y: -900}
						]
				},
			};

			// init controller
			var controller = new ScrollMagic.Controller();

					// pin the nav
					var pinNav = new ScrollMagic.Scene({
						triggerElement: '#trigger',
						triggerHook: 0.5,
						duration: '30%',
						offset: 1
					})
					.setPin('.header-nav-front', {pushFollowers: false})

					.addTo(controller);

					// create top-half tween
					var tophalfTween = new TimelineMax()
						.add(TweenMax.to($(".top-half"), 2.5, {ease:Power2.easeInOut}))

					// pin the top half
					var pinIntroScene = new ScrollMagic.Scene({
						triggerElement: '#trigger',
						triggerHook: 0.5,
						duration: '50%',
						offset: 1
					})
					.setPin('.top-half', {pushFollowers: false})
					.setTween(tophalfTween)
					.addTo(controller);


					// create logo tween
					var logoTween = new TimelineMax()
						.add(TweenMax.to($("#logo"), 1, {ease:Power2.easeInOut}))

					// pin the logo
					var pinIntroScene = new ScrollMagic.Scene({
						triggerElement: '#trigger',
						triggerHook: 0.2,
						duration: '1',
						offset: 1
					})
					.setPin('#logo', {pushFollowers: false})
					.setTween(logoTween)
					//.addIndicators({
					//	name: "logo",
					//	indent: 200
					//}) // add indicators (requires plugin)
					.addTo(controller);


					// create flock1 tween
					var tweenFlock1 = new TimelineMax()

						.add(TweenMax.to($("#flock-1"), 1, {css:{bezier:flock1path.exit}, ease:Power1.easeInOut}))

					//build Flock 1 Scene
					var sceneFlock1 = new ScrollMagic.Scene({
						triggerElement: "#trigger",
						duration: '30%',
						offset: 0
					})
					.setPin("#trigger-flock-1", {pushFollowers: false})
					.setTween(tweenFlock1)
					//.addIndicators({
					//	name: "flock-1",
					//	indent: 300
					//}) // add indicators (requires plugin)
					.addTo(controller);


					// create flock2 tween
					var tweenFlock2 = new TimelineMax()
						.add(TweenMax.to($("#flock-2"), 1, {css:{bezier:flock2path.entry}, ease:Power1.easeInOut}))

					//build Flock 2 Scene
					var sceneFlock2 = new ScrollMagic.Scene({
						triggerElement: "#trigger",
						duration: '50%',
						offset: 150
					})
					.setPin("#trigger-flock-2", {pushFollowers: false})
					.setTween(tweenFlock2)
					//.addIndicators({
					//	name: "flock-2",
					//	indent: 300
					//}) // add indicators (requires plugin)
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
					//.addIndicators({
					//	name: "bird-1",
					//	indent: 100
					//}) // add indicators (requires plugin)
					.addTo(controller);

					// create bird2 tween
					var tweenBird2 = new TimelineMax()
						.add(TweenMax.to($("#bird-2"), 1, {css:{bezier:bird2path.entry}, ease:Power1.easeInOut}))

					//build Bird 2 Scene
					var sceneBird2 = new ScrollMagic.Scene({
						triggerElement: "#trigger",
						duration: '60%',
						offset: 0
					})
					.setPin("#trigger-bird-2", {pushFollowers: false})
					.setTween(tweenBird2)
					//.addIndicators({
					//	name: "bird-2",
					//	indent: 100
					//}) // add indicators (requires plugin)
					.addTo(controller);


					// create Balloon tween
					var tweenBalloon = new TimelineMax()
					.add(TweenMax.to($("#balloon"), 1, {css:{bezier:balloonpath.entry}, ease:Power1.easeInOut}))
					.add(TweenMax.to($("#balloon"), 1, {css:{bezier:balloonpath.exit}, ease:Power1.easeInOut}))


					//build balloon Scene
					var sceneBalloon = new ScrollMagic.Scene({
						triggerElement: "#trigger",
						duration: '35%',
						offset: -10
					})
					.setPin("#trigger-balloon", {pushFollowers: false})
					.setTween(tweenBalloon)
					//.addIndicators({
					//	name: "balloon"
					//}) // add indicators (requires plugin)
					.addTo(controller);


					// create kite tween
					var tweenKite = new TimelineMax()
						.add(TweenMax.to($("#kite"), 1, {css:{bezier:kitepath.entry}, ease:Power2.easeOutCirc}))
						.add(TweenMax.to($("#kite"), 1, {css:{bezier:kitepath.exit}, ease:Power2.easeOutCirc}))


					// build kite scene
					var scene = new ScrollMagic.Scene({
						triggerElement: "#trigger",
						duration: '70%',
						offset: 10
					})
					.setPin("#trigger", {pushFollowers: false})
					.setTween(tweenKite)
					//.addIndicators({
					//	name: "Kite"
					//}) // add indicators (requires plugin)
					.addTo(controller);

					// create bird-3 tween
					var tweenBird3 = new TimelineMax()
						.add(TweenMax.to($("#bird-3"), 1, {css:{bezier:bird3path.entry}, ease:Power2.easeOutCirc}))


					// build bird-3 scene
					var sceneBird3 = new ScrollMagic.Scene({
						triggerElement: "#trigger",
						duration: '150%',
						offset: 0
					})
					.setPin("#trigger-bird-3", {pushFollowers: false})
					.setTween(tweenBird3)
					//.addIndicators({
					//	name: "Bird 3"
					//}) // add indicators (requires plugin)
					.addTo(controller);


}); /* end of as page load scripts */
