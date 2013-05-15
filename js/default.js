jQuery(function (){
	/******
	DSIN dedicated animation available for "div.ei-title > h2" and "div.ei-title > h3":
		Add data-property to element
		+ data-direction: bottom/top/right/left
		+ data-offset: any positive value
		+ data-easing: the easing used for text transition
	******/
	
	// LOGO Animation after page loading
	setTimeout(function(){
		handleLogoDisplay($(window));
	}, 1000);
	
	// SlideShow Configuration
	$('#ei-slider').eislideshow({
		animation			: 'center',
		autoplay			: true,
		slideshow_interval	: 8000
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
	
	// Handle Scroll action and related animation
	$(window).bind('scroll', function(){
		// Handle logo display
		handleLogoDisplay($(window));
		
		// Handle Menu Selection
		handleMenuSelection($(window));
		
		// Handle Cart Display
		handleCartDiplay($(window));
	});
	
	// Open Close Cart
	$('#cart a').on('click', function(event){
		openCloseCart();
		event.preventDefault();
	});
	
	// Go Up
	$('#goUp').on('click', function(event){
		$('#linkHome').click();
		event.preventDefault();
	});
	
	// init Social feed
	initSocial();
	
	// Refresh Social Feeds
	/* UNUSED = ENABLE LATER
	var refreshId = setInterval(function(){refreshSocial()},1000);
	*/
	
	// Only for small screen
	initDropDownMenu();
	
	// Handle Offers Images Flipping
	initImagesFlipping();
	
	// Init Map 
	initGoogleMap();
});

// Handle logo display
function handleLogoDisplay(window){
	if (window.scrollTop() > 100){
		$('#logo').addClass('retractTop');
		$('#logoCBC').addClass('retractBottom');
		if (window.scrollTop() > 200) {
			$('#goUp').removeClass('retractBottom');
		} else {
			$('#goUp').addClass('retractBottom');
		}
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

// Handle Cart Display
function handleCartDiplay(window){
	fixedLimit = $('#offres').position().top;
	fixedLimit2 = $('#offres').position().top + $('#offres').height() - 0.2*window.height() - $('#cart').height() - 0.1*window.height();
	
	var pos = $('#offres').position().top + 0.2*window.height();
	

	if (window.scrollTop() >= fixedLimit) {
		if (window.scrollTop() <= fixedLimit2){
			$('#cart').removeAttr('style');
			pos = window.scrollTop() + 0.2*window.height();
			$('#cart').css({'top': pos});
		} else {
			pos = $('#offres').position().top + $('#offres').height() - $('#cart').height() - 0.1*window.height();
			$('#cart').removeClass('fix');
			$('#cart').css({'top': pos});
		}
	} else {
		$('#cart').css({'top': pos});
		$('#cart').removeClass("fix")
	}
}

// Handle Anchors Navigation
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

function refreshSocial(){
	// Insert code to refresh social feeds
}

// Handle DropDownMenu - Only for small screen and smartphones
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

// Detect if navigator used is Internet Explorer
function isIE() {
	var index = navigator.userAgent.indexOf("MSIE");
	return (index > -1);
}

// Handle offers images flipping
function initImagesFlipping() {
	if ($('html').hasClass('csstransforms3d') && !isIE()) {
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

// Init Configuration for the Map
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

// Detect if navigator used is a Mobile
function isMobile() {
	var index = navigator.appVersion.indexOf("Mobile");
	return (index > -1);
}

// Init Configuration for Social part
function initSocial(){
	if (isMobile()){
		$('#social-tabs').dcSocialTabs({
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

/*****/
/* HTML5 Drag & Drop
/*****/
function onDragStart(target, evt){
   evt.dataTransfer.setData("TitleElement", target.title);
   evt.dataTransfer.setData("IdElement", target.id);
}

function onDropTarget(target, evt) { 
	var title = evt.dataTransfer.getData("TitleElement");
	var id = evt.dataTransfer.getData("IdElement");
	if (title !== 'undefined' && title !== '' && id !== 'undefined' && id !== ''){
	
		//Check if cart is empty
		if ($('#cart-offers-list').children().length < 1){
			// Cart Empty => Remove predefined text
			$('.cart-information').hide();
		}
		
		var $li = $('<li>'+title+'</li>');
		$li.appendTo($('#cart-offers-list'));
		$('#'+id).removeAttr('draggable');
		$('#'+id).removeAttr('ondragstart');
		evt.preventDefault();
		
		// Enable buttons
		$('#cart-btn').removeAttr('disabled');
		$('#cart-btn').removeClass('inactive');
		
		$('#empty-cart-btn').removeAttr('disabled');
		$('#empty-cart-btn').removeClass('inactive');
	}
} 

// Handle Cart display
function openCloseCart() {
	if ($('#cart').hasClass('openedCart')) {
		// Close Cart
		slideOffset = Math.round($('#cart').width() / $(window).width() * 100) ;
		p = {left: '-'+slideOffset+'%'};
		
		$('#cart').animate(p, 700, function(){
			$('#cart').removeClass('openedCart');
			$('#cart').addClass('closedCart');
			$('#cart').removeAttr('style');
			handleCartDiplay($(window));
		});
	} else {
		// Open Cart
		p = {left: 0};
		
		$('#cart').addClass('openedCart');
		$('#cart').animate(p, 700, function(){
			$('#cart').removeClass('closedCart');
			$('#cart').removeAttr('style');
			handleCartDiplay($(window));
		});
	}
}

// Function to create mail message from selected offers
function addOffersMessage(){
	var message1 = 'Bonjour,\n\nje suis intéréssé par les offres : \n\n';
	var message2 = "\nPourriez-vous me contacter pour un complément d'information. \n\nMerci d'avance.";
	
	var message = message1;
	
	$('#cart-offers-list').children().each(function(){
		message = message + '    - ' + $(this).text() + '\n';
	});
	
	message = message + message2;
	$('#message').attr('value', message);
	$('#linkContact').click();
}

function emptyCart(){
	$('#cart-offers-list').empty();
	$('.cart-information').show();
	
	$('#cart-btn').attr('disabled', 'disabled');
	$('#cart-btn').addClass('inactive');
	
	$('#empty-cart-btn').attr('disabled', 'disabled');
	$('#empty-cart-btn').addClass('inactive');
	
	$('.offres-thumb').attr('draggable', 'true');
	$('.offres-thumb').attr('ondragstart', 'onDragStart(this, event);');
}