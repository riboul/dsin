jQuery(function (){
	/******
	DSIN dedicated animation available for "div.ei-title > h2" and "div.ei-title > h3":
		Add data-property to element
		+ data-direction: bottom/top/right/left
		+ data-offset: any positive value
		+ data-easing: the easing used for text transition
	******/
	
	/* SUPORT DRAG N DROP */
	/*
	if (Modernizr.draganddrop) {
	  // Browser supports HTML5 DnD.
	  alert("supported");
	} else {
	  // Fallback to a library solution.
	  alert("not supported");
	}
	*/
	
	// LOGO Animation after page loading
	setTimeout(function(){
		handleLogoDisplay($(window));
	}, 1000);
	
	// SlideShow Configuration 
	$('#ei-slider').eislideshow({
		animation			: 'center',
		autoplay			: true,
		slideshow_interval	: 5000
	});
	
	// Handle Anchors Navigation
	initScrollNav({
		nav:'#mainNav a'
	});
	var navItems = jQuery('#mainNav li');
	navItems.find('a').click(function (){
		navItems.removeClass('active');
		this.parentNode.className += ' active';
		$("#mainNav ul .selected div div").slideUp(100);
		$("#mainNav ul .selected").removeClass("selected");
	});
	
	$(window).bind('scroll', function(){
		// Handle logo display
		handleLogoDisplay($(window));
		
		// Handle Menu Selection
		handleMenuSelection($(window));
	});
	
	// init Social feed
	//initLargeScreenSocial();
	soso();
	
	// Refresh Social Feeds
	var refreshId = setInterval(function(){refreshSocial()},1000);
	
	// Only for small screen
	initDropDownMenu();
	
	// 
	initImagesFlipping();
	
	// Init Map 
	initGoogleMap();
});

// Handle logo display
function handleLogoDisplay(window){
	if (window.scrollTop() > 100){
		$('#logo').addClass('retractTop');
		$('#logoCBC').addClass('retractBottom');
	} else {
		$('#logo').removeClass('retractTop');
		$('#logoCBC').removeClass('retractBottom');
	}
}


// Handle Menu Selection
function handleMenuSelection(window){
	
	var navItems = jQuery('#mainNav li');
	var addingHeight = jQuery("#spanNav").outerHeight(true);

	if (window.scrollTop() >= $('#home').position().top - addingHeight){
		navItems.removeClass('active');
		$('.largeScreen #linkHome').parent().addClass(' active');
		$('.smallScreen #linkHome').parent().addClass(' active');
	}
	if (window.scrollTop() >= $('#offres').position().top - addingHeight){
		navItems.removeClass('active');
		$('.largeScreen #linkOffres').parent().addClass(' active');
		$('.smallScreen #linkOffres').parent().addClass(' active');
	}
	if (window.scrollTop() >= $('#expertise').position().top - addingHeight){
		navItems.removeClass('active');
		$('.largeScreen #linkExpertise').parent().addClass(' active');
		$('.smallScreen #linkExpertise').parent().addClass(' active');
	}
	if (window.scrollTop() >= $('#parolesClients').position().top - addingHeight){
		navItems.removeClass('active');
		$('.largeScreen #linkParolesClients').parent().addClass(' active');
		$('.smallScreen #linkParolesClients').parent().addClass(' active');
	}
	if (window.scrollTop() >= $('#parolesExpert').position().top - addingHeight){
		navItems.removeClass('active');
		$('.largeScreen #linkParolesExpert').parent().addClass(' active');
		$('.smallScreen #linkParolesExpert').parent().addClass(' active');
	}
	if (window.scrollTop() >= $('#media').position().top - addingHeight){
		navItems.removeClass('active');
		$('.largeScreen #linkMedia').parent().addClass(' active');
		$('.smallScreen #linkMedia').parent().addClass(' active');
	}
	if (window.scrollTop() >= $('#partenaires').position().top - addingHeight){
		navItems.removeClass('active');
		$('.largeScreen #linkPartenaires').parent().addClass(' active');
		$('.smallScreen #linkPartenaires').parent().addClass(' active');
	}
	if (window.scrollTop() >= $('#contact').position().top - addingHeight){
		navItems.removeClass('active');
		$('.largeScreen #linkContact').parent().addClass(' active');
		$('.smallScreen #linkContact').parent().addClass(' active');
	}
}

function initScrollNav(_options){
	var options = jQuery.extend({
		nav:'#nav a',
		animSpeed:750
	}, _options);
	var window = jQuery('html,body');
	var addingHeight = jQuery("#spanNav").outerHeight(true);
	
	var nav = jQuery(options.nav);
	nav.each(function (){
		var hold = jQuery(this);
		var block = jQuery(hold.attr('href'));
		if(block.length){
			hold.click(function (){
				var curPos = window.scrollTop();
				var blockPost = block.offset().top - addingHeight;
				
				window.stop().animate({scrollTop: blockPost},{duration: options.animSpeed});
				return false;
			});
		}
	});
}

function initLargeScreenSocial(){
	cleanSocialMedia();
	/* Social Media Configuration */
	$('#socialMedia').socialist({ 
        networks: [ 
            //{name:'linkedin',id:'cgi'}, 
            //{name:'facebook_search',id:'cgigroup'}, 
            {name:'twitter',id:'cgi_ir'}
        ],
        maxResults: 3,
		textLength: 70,
		isotope:false,
		fields:['text', 'date'],
		screenSize: 9999
    });
}

function cleanSocialMedia(){
	$('#socialMedia').empty();
	$('#socialMedia').hide();
	var $imgHeader = $('<div class="social-header" ><img src="images/social/newsAndPosts_clear.png" alt="News And Posts" /></div>');
	$imgHeader.appendTo($('#socialMedia'));
}

function refreshSocial(){
	//insérer code pour rafraichir le bloc de feeds
}

function initDropDownMenu(){
	$("#mainNav > ul > li > .menu").click(function (e){
		if ($(this).parent().hasClass('selected')){
			$("#mainNav ul .selected div div").slideUp(100);
			$("#mainNav ul .selected").removeClass("selected");
			handleLogoDisplay($(window));
		} else {
			$("#mainNav ul .selected div div").slideUp(100);
			$("#mainNav ul .selected").removeClass("selected");
			
			if($(this).next(".subs").length){
				$(this).parent().addClass("selected");
				$(this).next(".subs").children().slideDown(200);
				$('#logo').addClass('retract');
				$('#logoCBC').addClass('retract');
				//$("#logo").slideUp();
			}
		}
		e.stopPropagation();
	});
	
	$("body").click(function() {
		$("#mainNav ul .selected div div").slideUp(100);
		$("#mainNav ul .selected").removeClass("selected");
		handleLogoDisplay($(window));
	});
}

function initImagesFlipping() {
	if ($('html').hasClass('csstransforms3d')) {
		// CSS3 supported
		$('.offres-thumb').removeClass('scroll').addClass('flip');
		$('.offres-thumb.flip').click(
			function () {
				if ($(this).find('.offres-thumb-wrapper').hasClass('flipIt')){
					$(this).find('.offres-thumb-wrapper').removeClass('flipIt');
				} else {
					$(this).find('.offres-thumb-wrapper').addClass('flipIt');
				}
			}
		);
	} else {
		// CSS3 Not supported
		$('.offres-thumb').click(
			function () {
				if ($(this).find('.offres-thumb-wrapper').hasClass('slideIt')){
					$(this).find('.offres-thumb-wrapper').removeClass('slideIt');
					$(this).find('.offres-thumb-detail').stop().animate({bottom: ($(this).height() * -1)}, 500, 'easeOutCubic');
				} else {
					$(this).find('.offres-thumb-wrapper').addClass('slideIt');
					$(this).find('.offres-thumb-detail').stop().animate({bottom:0}, 500, 'easeOutCubic');
				}
			}
		);
	}
}

function initGoogleMap(){
	geocoder = new google.maps.Geocoder();
	var latlng = new google.maps.LatLng(-34.397, 150.644);
	var myOptions = {
		zoom: 10,
		center: latlng,
		mapTypeId: google.maps.MapTypeId.ROADMAP
	};
	var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
	
	geocoder.geocode( { 'address': '17 place des Reflets 92097 Paris, France'}, function(results, status) {
    if (status == google.maps.GeocoderStatus.OK) {
      map.setCenter(results[0].geometry.location);
      var marker = new google.maps.Marker({
          map: map, 
          position: results[0].geometry.location
      });
    } else {
      alert("Geocode was not successful for the following reason: " + status);
    }
  });
}

function isMobile() {
	var index = navigator.appVersion.indexOf("Mobile");
	return (index > -1);
}

function soso(){
	if (isMobile()){
		$('#social-tabs').dcSocialTabs({
			/* width: 360,
			height: 460, */
			/* width: 760,//iPhone landscape
			height: 260, */
			zopen: 9,
			loadOpen: false,
			autoClose: true,
			position: 'fixed',
			location: 'top',
			align: 'right',
			offset: 20,
			rotate: {
				delay: 8000,
				direction: 'down'
			},
			widgets: 'rss,twitter,youtube',
			rssId: 'http://www.cgi.com/fr/all/feeds/rss.xml',
			twitterId: "cgi_ir",
			youtubeId: 'LogicaFRA'
		});
	} else {
		$('#social-tabs').dcSocialTabs({
			/* width: 360,
			height: 460, */
			/* width: 760,//iPhone landscape
			height: 260, */
			zopen: 9,
			loadOpen: true,
			autoClose: true,
			position: 'fixed',
			location: 'top',
			align: 'right',
			offset: 20,
			rotate: {
				delay: 8000,
				direction: 'down'
			},
			widgets: 'rss,twitter,youtube',
			rssId: 'http://www.cgi.com/fr/all/feeds/rss.xml',
			twitterId: "cgi_ir",
			youtubeId: 'LogicaFRA'
		});
	}
}