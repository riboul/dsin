<?php 

//--------------------------------------
// INCLUDES
//--------------------------------------

// Configuration du site
include_once('../config/paramFile.php');
include_once('../config/fonction.php');

$url2parse = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; 
$baliseTitle =  dynTitle($url2parse);

?>
<!DOCTYPE html>

<html lang="fr">

    <head>

        <title><?php echo $baliseTitle ?></title>

		<meta name="viewport" content="user-scalable=no">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		
		<meta name="keywords" content="Digital, Social, Interactions, Workplace, Workspace, Cloud, As a Service, Poste de travail, Social Business, Collaboration, Content, Connexion, Communication, Trust,  Community, User, Innovation, Efficiency, Project, Team, Discussion, Videos, Portal, Documents, Workflow, Rich media, Production, Profiling, Social media, Friends, Colleagues, Microblogging, Real-time, Engage, Audience, CGI, CGI Business Consulting, Business, Consulting, Digital Asset Management, External Communities, Communautés Externes, Communautés, tweeter, facebook, pinterest, youtube," />
		<meta name="description" content="Digital & Social Interactions : Bienvenue sur le site de Digital And Social Interactions alias DSIN, Business Team de plus 60 consultants dédiée qui a pour objectif d’accompagner les entreprises dans leur Transformation Digitale par la maîtrise des organisations, des solutions de l’entreprise et du Web Social, DSIN étant une entité de CGI Business Consulting" />

		<link rel="shortcut icon" href="<?php echo _URL_WWW; ?>/images/bg/favicon.ico" type="image/x-icon"/>
		<link rel="icon" href="<?php echo _URL_WWW; ?>/images/bg/favicon.ico" type="image/x-icon"/>
        <link rel="stylesheet" type="text/css" href="<?php echo _URL_WWW; ?>/css/style.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo _URL_WWW; ?>/css/dsin_style.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo _URL_WWW; ?>/css/dcsmt.css" />

		<!-- jQuery -->
		<!-- <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> -->
		<script type="text/javascript" src="<?php echo _URL_WWW; ?>/js/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo _URL_WWW; ?>/js/jquery.easing.1.3.js"></script>

		<!-- FancyBox -->
		<link rel="stylesheet" href="<?php echo _URL_WWW; ?>/css/jquery.fancybox.css" type="text/css" media="screen" />
        <script type="text/javascript" src="<?php echo _URL_WWW; ?>/js/jquery.fancybox.pack.js"></script>

		<!-- HTML5/CSS3 detector -->
		<script type="text/javascript" src="<?php echo _URL_WWW; ?>/js/modernizr.2.5.3.min.js"></script>

		<!-- Slide show -->
        <script type="text/javascript" src="<?php echo _URL_WWW; ?>/js/jquery.eislideshow.dsin.js"></script>

		<!-- Social Media -->
		<script type="text/javascript" src="<?php echo _URL_WWW; ?>/js/jquery.social.media.tabs.1.7.js"></script>

		<!-- Google Maps API -->
		<script type="text/javascript" src="https://maps.google.com/maps/api/js?sensor=false"></script>

		<!-- DSIN WebSite -->
		<!--
		<script type="text/javascript" src="<?php echo _URL_WWW; ?>/js/default.js"></script>
		<script type="text/javascript" src="<?php echo _URL_WWW; ?>/js/function.js"></script>
		-->

		<!-- Google Analytics -->
		<script>
			var _gaq = _gaq || [];
			_gaq.push(['_setAllowAnchor', true]);
			//_gaq.push(['_setAccount', 'UA-41181128-1']);

			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

			ga('create', 'UA-41181128-1', 'digital-and-social-interactions.com');
			ga('send', 'pageview');
		</script>
		
		<!-- Server URL -->
		<script type="text/javascript"> 
			<?php echo "var _URL_WWW = '"._URL_WWW."';" ?>
		</script>

        <!-- <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Playfair+Display:400italic' rel='stylesheet' type='text/css' /> -->

		<!--[if lt IE 9]>
			<script type="text/javascript" src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
			<script type="text/javascript" src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
			<link rel="stylesheet" type="text/css" href="<?php echo _URL_WWW; ?>/css/lessthanie9.css" />
		<![endif]-->
		<!--[if lte IE 9]>
			<script type="text/javascript" src="<?php echo _URL_WWW; ?>/js/lessthanie9.js"></script>
		<![endif]-->
	</head>

    <body>
		<header id="header">
		</header>

		<section id="error" class="row">
			<div class="center">
				<div class="columns">
					<div class="oneThird">
						<p class="bold">Cette page n'existe pas ou n'existe plus !</p>
						<p class="tCenter">D&eacute;sol&eacute; de ce d&eacute;sagr&eacute;ment temporaire et merci d'utiliser le lien ci-dessous afin de naviguer sur le site DSIN !</p>
						<p class="tCenter backLink"><a href="<?php echo _URL_WWW; ?>">Naviguer vers le site DSIN</a></p>
						<p class="bold tCenter">- L'&eacute;quipe DSIN -</p>
					</div>
					<div class="twoThird">
						<img class="errorImg" src="<?php echo _URL_WWW; ?>/images/errors/404.jpg" alt="Erreur 404" />
						<p class="copyright">Â©Lucas Film</p>
					</div>
				</div>
			</div>
		</section>

		<footer id="footer">
			<div class="center">
				<div class="center">
					<img class="footerLogo" src="<?php echo _URL_WWW; ?>/images/logo/footer_logo_DSIN.png" alt="DSIN" />
					<div class="columns">
						<div class="oneThird">
							<p>
								<img class="left" src="<?php echo _URL_WWW; ?>/images/icons/footer_call.png" alt="" />
								<span class="subHeading">Digital &amp; Social Interactions</span>
							</p>
							<div class="subFooter">
								<p>T. : +33 1 57  32 40 40<br/>@ : <a href="mailto:dsin@fr.logica.com?subject=Prise%20de%20contact" class="footerLink">dsin@cgi.com</a></p>
								<p>CGI Business Consulting<br/>Si&egrave;ge Social : Immeuble CB16<br/>17 place des Reflets<br/>92400 Courbevoie</p>
								<p>Capital :751 040 euros<br/>RCS Nanterre 340 337 864</p>
							</div>
						</div>
						<div class="oneThird">
							<p>
								<img class="left" src="<?php echo _URL_WWW; ?>/images/icons/footer_contactl.png" alt="Social Media" />
								<span class="subHeading">Suivez nous sur les m&eacute;dias sociaux</span>
							</p>
							<ul>
								<li><a href="http://twitter.com/cgi_ir"><img src="<?php echo _URL_WWW; ?>/images/icons/footer_twitter.png" alt="Icone Twitter" /></a></li>
								<li><a href="http://facebook.com/cgigroup"><img src="<?php echo _URL_WWW; ?>/images/icons/footer_facebook.png" alt="Icone Facebook" /></a></li>
								<li><a href="http://www.youtube.com/user/CGIGroup"><img src="<?php echo _URL_WWW; ?>/images/icons/footer_Utube.png" alt="Icone YouTube" /></a></li>
								<li><a href="http://www.cgi.com/fr/fils-rss-balados"><img src="<?php echo _URL_WWW; ?>/images/icons/footer_rss.png" alt="Icone RSS" /></a></li>
							</ul>
						</div>
					</div>
					<div class="columns">
						<div class="oneThird">
							<span>Â© Groupe CGI Inc.</span>
						</div>
					</div>
				</div>
			</div>
		</footer>
    </body>
</html>