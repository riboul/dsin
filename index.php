<?php 

//--------------------------------------
// INCLUDES
//--------------------------------------

// Configuration du site
include_once('config/paramFile.php');
include_once('config/fonction.php');

$url2parse = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; 
$baliseTitle =  dynTitle($url2parse);

?>
<!DOCTYPE html>

<html lang="fr">

    <head>

        <title><?php echo $baliseTitle ?></title>

		<meta name="viewport" content="user-scalable=no">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		
		<meta name="keywords" content="Digital, Social, Interactions, Workplace, Workspace, Cloud, As a Service, Poste de travail, Social Business, Collaboration, Content, Connexion, Communication, Trust,  Community, User, Innovation, Efficiency, Project, Team, Discussion, Videos, Portal, Documents, Workflow, Rich media, Production, Profiling, Social media, Friends, Colleagues, Microblogging, Real-time, Engage, Audience, CGI, CGI Business Consulting, Business, Consulting, Digital Asset Management, External Communities, Communaut&eacute;s Externes, Communaut&eacute;s, tweeter, facebook, pinterest, youtube," />
		<meta name="description" content="Digital & Social Interactions : Bienvenue sur le site de Digital And Social Interactions alias DSIN, Business Team de plus 60 consultants d&eacute;di&eacute;e qui a pour objectif d’accompagner les entreprises dans leur Transformation Digitale par la maîtrise des organisations, des solutions de l’entreprise et du Web Social, DSIN &eacute;tant une entit&eacute; de CGI Business Consulting" />

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
		<script type="text/javascript" src="<?php echo _URL_WWW; ?>/js/default.js"></script>
		<script type="text/javascript" src="<?php echo _URL_WWW; ?>/js/function.js"></script>

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
			<script type="text/javascript" src="<?php echo _URL_WWW; ?>/js/html5shiv.js"></script>
			<script type="text/javascript" src="<?php echo _URL_WWW; ?>/js/css3-mediaqueries.js"></script>
			<link rel="stylesheet" type="text/css" href="<?php echo _URL_WWW; ?>/css/lessthanie9.css" />
		<![endif]-->
		<!--[if lte IE 9]>
			<script type="text/javascript" src="<?php echo _URL_WWW; ?>/js/lessthanie9.js"></script>
		<![endif]-->
	</head>

    <body>
		<header id="header">
			<div id="spanNav">
				<nav id="mainNav">
					<ul class="largeScreen">
						<li><a id="linkHome" href="#home"><span>Home</span></a></li>
						<li><a id="linkOffres" href="#offres"><span>Offres</span></a></li>
						<li><a id="linkExpertises" href="#expertises"><span>Expertises</span></a></li>
						<li><a id="linkParolesClients" href="#parolesClients"><span>Paroles de Clients</span></a></li>
						<li><a id="linkParolesExpert" href="#parolesExpert"><span>Paroles d'expert</span></a></li>
						<li><a id="linkMedia" href="#media"><span>Media</span></a></li>
						<li><a id="linkPartenaires" href="#partenaires"><span>Partenaires</span></a></li>
						<li><a id="linkContact" href="#contact"><span>Contact</span></a></li>
					</ul>
					<ul class="smallScreen">
						<li>
							<span class="menu">Menu</span>
							<div class="subs">
								<div>
									<ul>
										<li><a id="linkHomeSmall" href="#home"><span>Home</span></a></li>
										<li><a id="linkOffresSmall" href="#offres"><span>Offres</span></a></li>
										<li><a id="linkExpertisesSmall" href="#expertises"><span>Expertises</span></a></li>
										<li><a id="linkParolesClientsSmall" href="#parolesClients"><span>Paroles de Clients</span></a></li>
										<li><a id="linkParolesExpertSmall" href="#parolesExpert"><span>Paroles d'expert</span></a></li>
										<li><a id="linkMediaSmall" href="#media"><span>Media</span></a></li>
									</ul>
								</div>
							</div>
						</li>
						<li><a id="linkPartenairesSmall" href="#partenaires"><span>Partenaires</span></a></li>
						<li><a id="linkContactSmall" href="#contact"><span>Contact</span></a></li>
					</ul>
				</nav>
			</div>
			<div id="social-tabs"></div>
			<div class="logoContainer"><img id="logo" class="logo retractTop" src="<?php echo _URL_WWW; ?>/images/logo/logo_DSIN_transparent_white.png" alt="Logo Digital &amp; Social Interactions"/></div>
			<div class="logoContainerCBC"><img id="logoCBC" class="logoCBC retractBottom" src="<?php echo _URL_WWW; ?>/images/logo/logo_CBC.png" alt="logo CGI Business Consulting"/></div>
			<a id="goUp" href="#" title="goUp" class="goUp retractBottom"></a>
		</header>

		<section id="home" class="row">
			<div id="ei-slider" class="ei-slider">
				<ul class="ei-slider-large">
					<li>
						<img src="<?php echo _URL_WWW; ?>/images/large/Fotolia_48035317_M.jpg" alt="Move to Digital Workplace" />
						<div class="ei-title" data-style="top: 60%; bottom: auto; padding:2% 40% 2% 15%;">
							<h2 data-direction="top" data-offset="10"><a href="#" data-offers="workplace-as-a-service social-collaboration digital-workplace" class="flipRelatedOffers">Move to Digital Workplace</a></h2>
							<h3 data-direction="top" data-offset="500"><a href="#" data-offers="workplace-as-a-service social-collaboration digital-workplace" class="flipRelatedOffers">When your information and your apps are profiled to meet your immediate context and needs. Discover how to re-think your workplace into a social enabled workplace, accessible anytime from any device, focused on delivering a positive user experience to better support your business activities.</a></h3>
						</div>
					</li>
					<li>
						<img src="<?php echo _URL_WWW; ?>/images/large/Fotolia_48034284_M.jpg" alt="Transform into Social Business" />
						<div class="ei-title" data-style="top: 60%; bottom: auto; padding:2% 40% 2% 15%;">
							<h2 data-direction="bottom" data-offset="100"><a href="#" data-offers="communautes-externes social-collaboration social-business" class="flipRelatedOffers">Transform into Social Business</a></h2>
							<h3 data-direction="right" data-offset="30"><a href="#" data-offers="communautes-externes social-collaboration social-business" class="flipRelatedOffers">When the Web is both a source of cautions and opportunities. Discover how to feed your business functions with the real relevant  informations to bring immediate value : define your digital brand strategy, improve your customer care services, generate more leads, accelerate your product and service go-to-market, retain your customers, detect competitive opportunities</a></h3>
						</div>
					</li>
					<li>
						<img src="<?php echo _URL_WWW; ?>/images/large/Fotolia_45602048_L.jpg" alt="Go 2 Cloud" />
						<div class="ei-title" data-style="top: 60%; bottom: auto; padding:2% 40% 2% 15%;">
							<h2 data-direction="right" data-offset="80"><a href="#" data-offers="workplace-as-a-service" class="flipRelatedOffers">Go 2 Cloud</a></h2>
							<h3 data-direction="left" data-offset="100"><a href="#" data-offers="workplace-as-a-service" class="flipRelatedOffers">When cloud services become standard. Discover how to plan a go to cloud strategy to not only optimize cost but also to target an improved user experience, anytime, from any device.</a></h3>
						</div>
					</li>
					<li>
						<img src="<?php echo _URL_WWW; ?>/images/large/Fotolia_50383363_M.jpg" alt="Engage the Web" />
						<div class="ei-title" data-style="top: 60%; bottom: auto; padding:2% 40% 2% 15%;">
							<h2 data-direction="left" data-offset="10"><a href="#" data-offers="digital-asset-management communautes-externes e-presence-reputation social-business" class="flipRelatedOffers">Engage the Web</a></h2>
							<h3 data-direction="top" data-offset="900"><a href="#" data-offers="digital-asset-management communautes-externes e-presence-reputation social-business" class="flipRelatedOffers">When a web site is not enough anymore. Discover how to re-think a web engagement platform to support your external communities, to empower your brand champions and ambassadors, and seamlessly plug your platform to social media channels  and efficiently.</a></h3>
						</div>
					</li>
				</ul><!-- ei-slider-large -->
				<ul class="ei-slider-thumbs">
					<li class="ei-slider-element">Current</li>
					<li><a href="#">Slide 6</a><img src="<?php echo _URL_WWW; ?>/images/thumbs/Fotolia_48035317_S_reversethumb.jpg" alt="Move to Digital Workplace" /></li>
					<li><a href="#">Slide 1</a><img src="<?php echo _URL_WWW; ?>/images/thumbs/Fotolia_48034284_S_reversethumb.jpg" alt="Transform into Social Business" /></li>
					<li><a href="#">Slide 2</a><img src="<?php echo _URL_WWW; ?>/images/thumbs/Fotolia_45602048_S_reversethumb.jpg" alt="Go 2 Cloud" /></li>
					<li><a href="#">Slide 3</a><img src="<?php echo _URL_WWW; ?>/images/thumbs/Fotolia_44295877_Sthumb.jpg" alt="Engage the Web" /></li>
				</ul><!-- ei-slider-thumbs -->

				<a href="#" class="ei-slider-prev"><img src="<?php echo _URL_WWW; ?>/images/btn-previous.png" alt="Pr&eacute;c&eacute;dent" /></a>
				<a href="#" class="ei-slider-next"><img src="<?php echo _URL_WWW; ?>/images/btn-next.png" alt="Suivant" /></a>
			</div><!-- ei-slider -->

		</section>

		<section id="offres" class="row offers">
			<!-- Cart -->
			<div id="cart" class="cart closedCart" ondragover="return false" ondrop="onDropTarget(this, event);">
				<div class="cart-container">
					<div class="cart-content">
						<a href="#" class="cart-icon" title="Panier offres"><img src="<?php echo _URL_WWW; ?>/images/icons/panier.png" alt="Votre panier d'offres" /></a>
						<div class="cart-title">Mes Offres</div>
						<div class="cart-offers">
							<span class="cart-information">Glissez/D&eacute;posez les offres qui vous int&eacute;ressent</span>
							<ul id="cart-offers-list"></ul>
						</div>
						<button id="empty-cart-btn" class="empty-cart-btn inactive" disabled="disabled" onClick="emptyCart();">
							<span>Vider Panier</span>
						</button>
						<button id="cart-btn" class="cart-btn inactive" disabled="disabled" onClick="addOffersMessage();">
							<span>Envoyer Message</span>
						</button>
					</div>
				</div>
			</div>

			<div class="center">
				<h1>Les Offres DSIN</h1>
				<h2>Un accompagnement de A &acute; Z</h2>
				<div class="columns">
					<div class="half">
						<article id="digital-asset-management" title="Digital Asset Management" class="offres-thumb scroll" draggable="true" ondragstart="onDragStart(this, event);">
							<div class="offres-thumb-wrapper">
								<img src="<?php echo _URL_WWW; ?>/images/offers/template_cardOffer_DAM.jpg" alt="Digital Asset Management" title="Cliquez pour obtenir plus de d&eacute;tails" />
								<div class="offres-caption-background">
									<div class="offres-caption">
										<div class="rougeCerise bold offres-caption-title">Digital Asset Management</div>
										<div>Exploitez pleinement la richesse de vos m&eacute;dia.</div>
										<div class="betteraveCGI offres-caption-information">Cliquez pour plus d'infos</div>
									</div>
								</div>
								<div class="offres-thumb-detail">
									<img src="<?php echo _URL_WWW; ?>/images/offers/template_cardOffer_back.jpg" alt="Card offer background" title="Cliquez pour afficher la carte de visite" />
									<div class="offres-thumb-detail-text">
										<div class="rougeCerise bold offres-caption-title">Digital Asset Management</div>
										La gestion optimum des m&eacute;dias concourt &acute; fid&eacute;liser et conqu&eacute;rir des clients de plus en plus exigeants : en facilitant l’adaptation aux nouveaux formats, canaux et usages, en r&eacute;duisant le Time-to-Market ainsi qu’en maîtrisant l’image de marque. Faites glisser cette fiche dans votre panier !
										<br/><br/>
										<span class="bold">Proposer une exp&eacute;rience utilisateur simple, coh&eacute;rente et riche</span><br />
										Vos clients sont sollicit&eacute;s par les m&eacute;dias de mani&egrave;re intensive et leurs attentes ont &eacute;volu&eacute;es. Votre performance commerciale sera renforc&eacute;e par la coh&eacute;rence de votre image de marque, la richesse et la personnalisation de votre relation  cliente ainsi que grâce &acute; des parcours cross-canal adapt&eacute;s aux nouveaux usages.
									</div>
									<div class="offres-thumb-detail-text-resume">
										<div class="rougeCerise bold offres-caption-title">Digital Asset Management</div>
										La gestion optimum des m&eacute;dias concourt &acute; fid&eacute;liser et conqu&eacute;rir des clients de plus en plus exigeants : en facilitant l’adaptation aux nouveaux formats, canaux et usages, en r&eacute;duisant le Time-to-Market ainsi qu’en maîtrisant l’image de marque. Faites glisser cette fiche dans votre panier !
									</div>
								</div>
							</div>
						</article>
					</div>

					<div class="half">
						<article id="communautes-externes" title="External Communities" class="offres-thumb scroll" draggable="true" ondragstart="onDragStart(this, event);">
							<div class="offres-thumb-wrapper">
								<img src="<?php echo _URL_WWW; ?>/images/offers/template_cardOffer_extComm.jpg" alt="External Communities" title="Cliquez pour obtenir plus de d&eacute;tails" />
								<div class="offres-caption-background">
									<div class="offres-caption">
										<div class="rougeCerise bold offres-caption-title">External Communities</div>
										<div>Associer vos clients au d&eacute;veloppement de votre activit&eacute;.</div>
										<div class="betteraveCGI offres-caption-information">Cliquez pour plus d'infos</div>
									</div>
								</div>
								<div class="offres-thumb-detail">
									<img src="<?php echo _URL_WWW; ?>/images/offers/template_cardOffer_back.jpg" alt="Card offer background" title="Cliquez pour afficher la carte de visite" />
									<div class="offres-thumb-detail-text">
										<div class="rougeCerise bold offres-caption-title">External Communities</div>
										L‘av&egrave;nement du Web 2.0 et des m&eacute;dia sociaux a boulevers&eacute; les relations que les entreprises entretiennent avec leurs clients. Parce que ces derniers recherchent d&eacute;sormais des relations durables et authentiques avec les marques, les entreprises se doivent d’adopter des strat&eacute;gies d’engagement en accord avec les besoins des consomm’acteurs.
										<br/><br/>
										La mise en place de strat&eacute;gies communautaires, red&eacute;finissant les processus internes, vous permettent de vous adapter efficacement &acute; ce nouveau paradigme et de rassembler les consommateurs &eacute;parpill&eacute;s &acute; travers les nombreux  canaux de la sph&egrave;re sociale.
									</div>
									<div class="offres-thumb-detail-text-resume">
										<div class="rougeCerise bold offres-caption-title">External Communities</div>
										Parce que les clients recherchent d&eacute;sormais des relations durables et authentiques avec les marques port&eacute;es par les canaux du web 2.0, les entreprises se doivent d’adopter des strat&eacute;gies d’engagement en accord avec les besoins des consomm’acteurs. La mise en place de strat&eacute;gies communautaires, red&eacute;finissant les processus internes, vous permettent de vous adapter efficacement &acute; ce nouveau paradigme.
									</div>
								</div>
						  </div>
						</article>
					</div>
				</div>
				<div class="columns">
					<div class="half">
						<article id="workplace-as-a-service" title="Workplace As A Service" class="offres-thumb scroll" draggable="true" ondragstart="onDragStart(this, event);">
							<div class="offres-thumb-wrapper">
								<img src="<?php echo _URL_WWW; ?>/images/offers/template_cardOffer_WAAS.jpg" alt="Workplace As A Service" title="Cliquez pour obtenir plus de d&eacute;tails" />
								<div class="offres-caption-background">
									<div class="offres-caption">
										<div class="rougeCerise bold offres-caption-title">Worplace As A Service</div>
										<div>Tirez profits des usages du Digital Workplace tout en ayant une maîtrise de vos coûts.</div>
										<div class="betteraveCGI offres-caption-information">Cliquez pour plus d'infos</div>
									</div>
								</div>
								<div class="offres-thumb-detail">
									<img src="<?php echo _URL_WWW; ?>/images/offers/template_cardOffer_back.jpg" alt="Card offer background" title="Cliquez pour afficher la carte de visite" />
									<div class="offres-thumb-detail-text">
										<div class="rougeCerise bold offres-caption-title">Worplace As A Service</div>
										Le traditionnel poste de travail op&egrave;re sa mutation naturelle vers le Digital Workplace, plus proche des usages de vos collaborateurs. Mais cette &eacute;volution logique n&eacute;cessite souvent une transformation de votre infrastructure technique. Hors, les investissements requis pour permettre la transition vers le Digital Workplace peuvent repr&eacute;senter un frein pour votre entreprise.
										<br/><br/>
										Nous avons cr&eacute;&eacute; l’offre WaaS afin de r&eacute;duire, voire de supprimer une partie des coûts de mise en œuvre d’un Digital Workplace, en le proposant en tant que service et en y associant l’accompagnement n&eacute;cessaire. Vous pouvez ainsi vous focaliser sur la conduite du changement aupr&egrave;s de vos collaborateurs, indubitablement plus structurante pour la r&eacute;ussite de cette transformation.<br/><br/>
										Souplesse, Flexibilit&eacute;, Maitrise, Savoir-Faire : Le Cloud n’a jamais autant tenu ses promesses.
									</div>
									<div class="offres-thumb-detail-text-resume">
										<div class="rougeCerise bold offres-caption-title">Worplace As A Service</div>
										Le traditionnel poste de travail op&egrave;re sa mutation naturelle vers le Digital Workplace, plus proche des usages de vos collaborateurs. Mais cette &eacute;volution logique n&eacute;cessite souvent une transformation de votre infrastructure technique. Hors, les investissements requis pour permettre la transition vers le Digital Workplace peuvent repr&eacute;senter un frein pour votre entreprise.
									</div>
								</div>
						  </div>
						</article>
					</div>
					<div class="half">
						<article id="social-collaboration" title="Social Collaboration" class="offres-thumb scroll" draggable="true" ondragstart="onDragStart(this, event);">
							<div class="offres-thumb-wrapper">
								<img src="<?php echo _URL_WWW; ?>/images/offers/template_cardOffer_socialCollab.jpg" alt="Social Collaboration" title="Cliquez pour obtenir plus de d&eacute;tails" />
								<div class="offres-caption-background">
									<div class="offres-caption">
										<div class="rougeCerise bold offres-caption-title">Social Collaboration</div>
										<div>Garantissez la r&eacute;ussite de vos projets Collaboratifs et de R&eacute;seau Social d’Entreprise.</div>
										<div class="betteraveCGI offres-caption-information">Cliquez pour plus d'infos</div>
									</div>
								</div>
								<div class="offres-thumb-detail">
									<img src="<?php echo _URL_WWW; ?>/images/offers/template_cardOffer_back.jpg" alt="Card offer background" title="Cliquez pour afficher la carte de visite" />
									<div class="offres-thumb-detail-text justify">
										<div class="rougeCerise bold offres-caption-title">Social Collaboration</div>
										Fort de ses 11 ann&eacute;es d’exp&eacute;rience dans le domaine du collaboratif d’entreprise, CGI Business Consulting vous accompagne dans l’ensemble de vos projets de Collaboration sociale:<br/>
										<p><span class="bold">Conception et impl&eacute;mentation de solutions collaboratives sociales :</span></p>
										<ul>
											<li>D&eacute;finition de votre strat&eacute;gie de collaboration sociale : de l’identification des cas d’usage et des KPIs &acute; la s&eacute;lection des solutions et plan de d&eacute;ploiement</li>
											<li>Am&eacute;lioration de vos performances : adaptation des process de l’organisation aux solutions de Social Collaboration, strat&eacute;gie de change management 2.0, d&eacute;finition de charte d’utilisation guidant les meilleures pratiques,</li>
											<li>Services technologiques : mise en œuvre des technologies leaders du march&eacute; (Jive, Microsoft) et int&eacute;gration dans votre SI, garante du succ&egrave;s de votre projet</li>
										</ul>
										<p><span class="bold">Services d’accompagnement:</span></p>
										<ul>
											<li>Analyse et mesure de vos processus collaboratifs : analyse des r&eacute;seaux sociaux, de votre maturit&eacute; organisationnelle, de la dynamique des communaut&eacute;s</li>
											<li>Community management : m&eacute;thodologie de formation de vos community managers et transition vers une animation autonome de vos communaut&eacute;s</li>
										</ul>
									</div>
									<div class="offres-thumb-detail-text-resume">
										<div class="rougeCerise bold offres-caption-title">Social Collaboration</div>
										Fort de ses 11 ann&eacute;es d’exp&eacute;rience dans le domaine du collaboratif d’entreprise, CGI Business Consulting vous accompagne dans l’ensemble de vos projets de Collaboration sociale:
										<ul>
											<li>Conception et impl&eacute;mentation de solutions collaboratives et sociales (Jive, NewsGator, Yammer…);</li>
											<li>Services d’accompagnement (Analyse des r&eacute;seaux sociaux, Community Management)</li>
										</ul>
									</div>
								</div>
						  </div>
						</article>
					</div>
				</div>
				<div class="columns">
					<div class="half">
						<article id="digital-workplace" title="Digital Workplace" class="offres-thumb scroll" draggable="true" ondragstart="onDragStart(this, event);">
							<div class="offres-thumb-wrapper">
								<img src="<?php echo _URL_WWW; ?>/images/offers/template_cardOffer_digitalWk.jpg" alt="Digital Workplace" title="Cliquez pour obtenir plus de d&eacute;tails" />
								<div class="offres-caption-background">
									<div class="offres-caption">
										<div class="rougeCerise bold offres-caption-title">Digital Workplace</div>
										<div>Embarquez sur le Digital Workplace avec CGI Business Consulting</div>
										<div class="betteraveCGI offres-caption-information">Cliquez pour plus d'infos</div>
									</div>
								</div>
								<div class="offres-thumb-detail">
									<img src="<?php echo _URL_WWW; ?>/images/offers/template_cardOffer_back.jpg" alt="Card offer background" title="Cliquez pour afficher la carte de visite" />
									<div class="offres-thumb-detail-text justify">
										<div class="rougeCerise bold offres-caption-title">Digital Workplace</div>
										Par l’&eacute;tendue de sa pr&eacute;sence dans les entreprises et la compl&eacute;tude de son p&eacute;rim&egrave;tre de services, SharePoint s’impose aujourd’hui comme la solution majeure pour la mise en place du Digital Workplace.
										<ul>
											<li>Cependant, l’utilisation qui en est faite reste g&eacute;n&eacute;ralement partielle et le b&eacute;n&eacute;fice retir&eacute; par les entreprises rarement optimis&eacute;.</li>
											<li>SharePoint et son &eacute;cosyst&egrave;me repr&eacute;sentent pourtant un large gisement d’opportunit&eacute;s pour d&eacute;velopper de nouveaux usages en favorisant les &eacute;changes et le partage. Il permet d’apporter, dans un environnement unique, simple et efficace, de la valeur m&eacute;tier &acute; l’exp&eacute;rience collaborative.</li>
											<li>Bâtie sur cette vision du Digital Workplace avec SharePoint, notre offre de services vous fait b&eacute;n&eacute;ficier de toute notre expertise pour tirer le plein parti de la solution SharePoint, et transformer avec vous l’environnement collaboratif de vos utilisateurs en espace num&eacute;rique de travail.</li>
										</ul>
									</div>
									<div class="offres-thumb-detail-text-resume">
										<div class="rougeCerise bold offres-caption-title">Digital Workplace</div>
										Avec son &eacute;cosyst&egrave;me, Sharepoint repr&eacute;sente un large gisement d’opportunit&eacute;s de nouveaux usages favorisant le partage et apportant, dans un environnement unique et efficace, la valeur m&eacute;tier &acute; la collaboration. Bâtie sur cette vision, notre offre de services vous fait b&eacute;n&eacute;ficier de notre expertise pour tirer le plein parti de SharePoint, et transformer votre environnement collaboratif en espace num&eacute;rique de travail.
									</div>
								</div>
						  </div>
						</article>
					</div>
					<div class="half">
						<article id="e-presence-reputation" title="ePresence" class="offres-thumb scroll" draggable="true" ondragstart="onDragStart(this, event);">
							<div class="offres-thumb-wrapper">
								<img src="<?php echo _URL_WWW; ?>/images/offers/template_cardOffer_ePresence.jpg" alt="ePresence" title="Cliquez pour obtenir plus de d&eacute;tails" />
								<div class="offres-caption-background">
									<div class="offres-caption">
										<div class="rougeCerise bold offres-caption-title">ePresence</div>
										<div>Exploiter la richesse et les opportunit&eacute;s du web social, &acute; tous les niveaux de votre organisation</div>
										<div class="betteraveCGI offres-caption-information">Cliquez pour plus d'infos</div>
									</div>
								</div>
								<div class="offres-thumb-detail">
									<img src="<?php echo _URL_WWW; ?>/images/offers/template_cardOffer_back.jpg" alt="Card offer background" title="Cliquez pour afficher la carte de visite" />
									<div class="offres-thumb-detail-text justify">
										<div class="rougeCerise bold offres-caption-title">ePresence</div>
										Vos clients, vos prospects, vos collaborateurs, vos partenaires, vos actionnaires, vos concurrents, vos d&eacute;tracteurs… Tous sont pr&eacute;sents sur le web social, tous &eacute;coutent et sont &eacute;cout&eacute;s, 24/24h, 7/7j, sur tous vos march&eacute;s. Et chacune des fonctions de votre organisation est impact&eacute;e, chacune &acute; sa mani&egrave;re. A vous de savoir reconnaître et exploiter les opportunit&eacute;s offertes par le web social.
										<br />
										Le web social peut faire mal. Mais permet aussi de g&eacute;n&eacute;rer de nouveaux revenus. Nous pouvons intervenir pour vous aider &acute; :
										<ul>
											<li>gagner de nouveaux clients et int&eacute;grer leurs donn&eacute;es &acute; votre syst&egrave;me CRM</li>
											<li>am&eacute;liorer votre image, vos offres, vos &eacute;tudes, vos ventes, vos recrutements, etc.</li>
											<li>identifier les influen&ccedil;eurs, destructeurs, sources-cl&eacute;s et conversations-cl&eacute;s pour optimiser vos campagnes digitales et le d&eacute;velopement de vos offres</li>
											<li>mettre en place une gouvernance pour partager m&eacute;thodologies et outils</li>
											<li>anticiper et g&eacute;rer vos crises sur le web social, et celles de vos concurrents…</li>
										</ul>
									</div>
									<div class="offres-thumb-detail-text-resume">
										<div class="rougeCerise bold offres-caption-title">ePresence</div>
										Vos clients, vos prospects, vos collaborateurs, vos partenaires, vos actionnaires, vos concurrents, vos d&eacute;tracteurs… Tous sont pr&eacute;sents sur le web social, tous &eacute;coutent et sont &eacute;cout&eacute;s, 24/24h, 7/7j, sur tous vos march&eacute;s. Et chacune des fonctions de votre organisation est impact&eacute;e, chacune &acute; sa mani&egrave;re. A vous de savoir reconnaître et exploiter les opportunit&eacute;s offertes par le web social.
									</div>
								</div>
							</div>
						</article>
					</div>
				</div>
				<div class="columns">
					<div class="half">
						<article id="social-business" title="Social Business" class="offres-thumb scroll" draggable="true" ondragstart="onDragStart(this, event);">
							<div class="offres-thumb-wrapper">
								<img src="<?php echo _URL_WWW; ?>/images/offers/template_cardOffer_socialBusiness.jpg" alt="Social Business" title="Cliquez pour obtenir plus de d&eacute;tails" />
								<div class="offres-caption-background">
									<div class="offres-caption">
										<div class="rougeCerise bold offres-caption-title">Social Business</div>
										<div>Exploiter et Manager la richesse des m&eacute;dias sociaux au service des m&eacute;tiers de votre entreprise</div>
										<div class="betteraveCGI offres-caption-information">Cliquez pour plus d'infos</div>
									</div>
								</div>
								<div class="offres-thumb-detail">
									<img src="<?php echo _URL_WWW; ?>/images/offers/template_cardOffer_back.jpg" alt="Card offer background" title="Cliquez pour afficher la carte de visite" />
									<div class="offres-thumb-detail-text justify">
										<div class="rougeCerise bold offres-caption-title">Social Business</div>
										Par nos comp&eacute;tences et expertises certifi&eacute;es sur la suite Marketing Cloud / Salesforce, notre offre Social Business se met &acute; votre service afin de cr&eacute;er les nouveaux cockpits au service de vos m&eacute;tiers permettant :
										<ul>
											<li>d’adresser vos communaut&eacute;s externes</li>
											<li>de f&eacute;d&eacute;rer et cr&eacute;er vos contenus sur vos plateformes sociales, et parce que cr&eacute;er une relation c’est d’abord l’&eacute;coute, ce sont aussi les nouveaux cockpits d’&eacute;coute et de monitoring de la sph&egrave;re Web Social jusqu’&acute; l’interaction, l’engagement social.</li>
										</ul>
										Ces cockpits  deviennent un atout indispensable aux m&eacute;tiers de l’entreprise digitale :
										<ul>
											<li>LA RH : pour mieux recruter et porter la marque employeur,</li>
											<li>Les Ventes et le marketing : pour acqu&eacute;rir et fid&eacute;liser les clients, pour la veille et l’innovation</li>
											<li>Le service client : pour augmenter la satisfaction client sur les temps de r&eacute;ponse ou r&eacute;duire des plaintes sur les centres d’appels, coordonner les communaut&eacute;s d’entre-aide</li>
										</ul>
										Tout ceci afin de cr&eacute;ation d’une relation « digitale » privil&eacute;gi&eacute;e et affinitaire avec vos internautes, clients, prospects, ambassadeurs, influenceurs, partenaires…
									</div>
									<div class="offres-thumb-detail-text-resume">
										<div class="rougeCerise bold offres-caption-title">Social Business</div>
										Notre offre Social Business se met &acute; votre service afin de cr&eacute;er les nouveaux cockpits au service de vos m&eacute;tiers permettant d’adresser vos communaut&eacute;s externes, de f&eacute;d&eacute;rer et cr&eacute;er vos contenus sur vos plateformes sociales, et parce que cr&eacute;er une relation c’est d’abord l’&eacute;coute, ce sont aussi les nouveaux cockpits d’&eacute;coute et de monitoring de la sph&egrave;re Web Social jusqu’&acute; l’interaction, l’engagement social
									</div>
								</div>
						  </div>
						</article>
					</div>
					<div class="half">
						<!-- EMPTY -->
					</div>
				</div>
			</div>
		</section>

		<section id="expertises" class="row grey expertise">
			<div class="center">
				<h1>Nos Expertises</h1>
				<h2>Parce que la diversit&eacute; nous enrichit</h2>
				<div class="columns">
					<div class="oneThird">
						<div class="imgHolder fullWidth"><img src="<?php echo _URL_WWW; ?>/images/expertises_visuel.png" alt="Nos Expertises" /></div>
						<p>Bien sûr, nous disposons de profils exp&eacute;riment&eacute;s en gestion de projet, maîtrise d’ouvrage et maîtrise d’œuvre, mais nous avons &eacute;galement &acute; cœur que nos consultants vous apportent des expertises compl&eacute;mentaires que nous jugeons indispensables lorsqu’il s’agit de faire la diff&eacute;rence pour la r&eacute;ussite de vos projets :</p>
					</div>
					<div class="oneThird">
						<ul>
							<li>
								<h3 class="expertise-title">Social Strategy :</h3>
								<p>La construction des nouvelles trajectoires internes et externes, bas&eacute;es sur l’&eacute;mergence des m&eacute;dias sociaux, est men&eacute;e par des consultants ayant une <strong>exp&eacute;rience m&eacute;tier</strong> (RH, Marketing, Communication, Support...). Notre &eacute;quipe inclut &eacute;galement un <strong>Sociologue</strong> afin que l’interaction dans le num&eacute;rique, reste de l’interaction entre individus. L’&eacute;tude des comportements dans un contexte professionnel permet de d&eacute;finir des trajectoires, un cycle de d&eacute;ploiement pour accompagner et encourager au mieux  les interactions.</p>
							</li>
							<li>
								<h3 class="expertise-title">D&eacute;finition des nouveaux usages bas&eacute;s sur les solutions :</h3>
								<p>Nos Consultants avec des profils <strong>technico-fonctionnels</strong>, construirons des nouveaux usages en ad&eacute;quation avec les capacit&eacute;s des solutions et leurs &eacute;volutions futures dans les domaines du :</p>
								<ul>
									<li>Collaboratifs</li>
									<li>R&eacute;seaux sociaux</li>
									<li>Content Management</li>
									<li>Digital Asset Management</li>
									<li>Portail</li>
									<li>Search</li>
									<li>Workplace as Service</li>
								</ul>
							</li>
						</ul>
					</div>
					<div class="oneThird">
						<ul>
							<li>
								<h3 class="expertise-title">Conduite des d&eacute;ploiements :</h3>
								<p>Nos directeurs et chefs  de projet vous accompagnent  sur le d&eacute;ploiement de vos programmes de transformation avec de solides expertises sur :</p>
								<ul>
									<li>M&eacute;thodologies agiles</li>
									<li>People adoption</li>
									<li>Offres de services</li>
									<li>Usines &acute; site</li>
								</ul>
								<p>Nos Coachs, sp&eacute;cialis&eacute;s dans la mise en place de r&eacute;seaux de champions et d’ambassadeurs portent  les leviers d’influence pour r&eacute;ussir la transformation num&eacute;rique par l’appropriation de leurs usages</p>
								<p>Nos Community Manager assurent les r&egrave;gles d’engagement, d’animation, de coordination, ainsi que la mont&eacute;e en comp&eacute;tences de vos &eacute;quipes.</p>
							</li>
							<li>
								<h3 class="expertise-title">Expertises technologiques :</h3>
								<p>Les  experts solutions disposent de plusieurs ann&eacute;es d’exp&eacute;riences et de certifications  pour vous accompagner dans la mise en oeuvre</p>
								<p>Les architectes interviennent  pour proposer et mettre en œuvre nos recommandations autour de la plateforme digitale et sa place dans votre syst&egrave;me d’information actuel</p>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</section>

		<section id="parolesClients" class="row">
			<div class="center">
				<h1>Paroles de clients</h1>
				<h2>Ils nous ont fait confiance</h2>
				<div class="columns">
					<article id="valeo" class="news oneThird">
						<div class="whiteColumn">
							<h3>Valeo</h3>
							<div class="content">
								<a href="#" class="imgHolder fullWidth"><img src="<?php echo _URL_WWW; ?>/images/clients/visuel_valeo.jpg" alt="" /></a>
								<p>Valeo a choisi une <strong>solution collaborative sur le cloud</strong> bas&eacute;e sur l'offre Google Apps Entreprise de Google pour ses 33 000 collaborateurs connect&eacute;s au Syst&egrave;me d'information. <strong>Collaborer plus vite, plus efficacement</strong>, en s'appuyant sur la simplicit&eacute; d'usage et la dynamique d'&eacute;volution d'une solution issue du monde internet grand public a &eacute;t&eacute; une des raisons majeures de ce choix. <strong>CGI Business Consulting a accompagn&eacute; Valeo</strong> dans les phases de prise de d&eacute;cision et de mise en place de l'organisation n&eacute;cessaire au d&eacute;ploiement de la solution. </p>
								<p><strong>Valeo</strong><br />Valeo est un Groupe ind&eacute;pendant enti&egrave;rement focalis&eacute; sur la conception, la fabrication et la vente de composants, de syst&egrave;mes int&eacute;gr&eacute;s et de modules pour l'industrie automobile, principalement pour la r&eacute;duction des &eacute;missions de CO<sub>2</sub>.</p>
								<p><strong>Chiffres cl&eacute;s du projet</strong><p>
								<p>La solution : <strong>Google Apps</strong><br />
								<ul class="listXML">
									<li>+33 000 utilisateurs, 194 sites dans 28 pays</li>
									<li>Sites & Video: +40 consultations par utilisateur par mois, +3 700 video partag&eacute;es</li>
									<li>Docs: +270 000 documents partag&eacute;s, ~20 collaborateurs par document</li>
									<li>Mail: ~20 millions re&ccedil;us et envoy&eacute;s</li>
								</ul>
							</div>
						</div>
					</article>
					<article id="banque-investissement" class="news oneThird">
						<div class="whiteColumn">
							<h3>Groupe pharmaceutique</h3>
							<div class="content">
								<a href="#" class="imgHolder fullWidth"><img src="<?php echo _URL_WWW; ?>/images/clients/visuel_pharma.jpg" alt="" /></a>
								<p>Dans le cadre de la mise en place d'un <strong>programme informatique collaboratif d'envergure</strong> - qui permettra demain &acute; nos collaborateurs d'être au <strong>centre des &eacute;changes</strong>, et de travailler de mani&egrave;re encore plus <strong>efficace et innovante</strong> - nous avons choisi de faire appel aux <strong>expertises cibl&eacute;es de CGI Business Consulting</strong>.</p><p>Depuis fin 2010, les sp&eacute;cialistes de l'<strong>offre DSIN "Digital & Social Interactions"</strong> nous accompagnent &acute; la fois sur la <strong>d&eacute;finition de notre strat&eacute;gie de collaboration, la mise en place de projets et de leurs outils associ&eacute;s</strong>, mais aussi sur la <strong>communication et la conduite du changement</strong> li&eacute;es &acute; ces nouvelles m&eacute;thodes de travail. Si le <strong>partage de connaissances et l'esprit collaboratif</strong> sont bel et bien au coeur de nos projets pour le groupe, ils le sont aussi dans notre mani&egrave;re de travailler au quotidien, avec CGI Business Consulting !</p>
							</div>
						</div>
					</article>
					<article id="groupe-pharmaceutique" class="news oneThird">
						<div class="whiteColumn">
							<h3>Banque d'Investissement</h3>
							<div class="content">
								<a href="#" class="imgHolder fullWidth"><img src="<?php echo _URL_WWW; ?>/images/clients/visuel_bank.jpg" alt="" /></a>
								<p>Afin de <strong>r&eacute;duire les risques op&eacute;rationnels</strong> li&eacute;s aux probl&egrave;mes de capitalisation et de partage des connaissances &acute; l'&eacute;chelle locale et internationale, <strong>une grande banque d'investissement</strong> a d&eacute;cid&eacute; de lancer une <strong>d&eacute;marche de Knowledge Management proactive</strong>.</p><p> Soutenant le d&eacute;ploiement d'une <strong>organisation apprenante</strong>, l'acc&egrave;s rapide &acute; des informations fiables et l'identification d'expertises internes, cette d&eacute;marche s'articule autour d'une <strong>plateforme collaborative param&eacute;tr&eacute;e sur-mesure</strong>.</p><p>Cet outil propose un <strong>espace d&eacute;di&eacute;</strong> au r&eacute;f&eacute;rentiel documentaire de l'organisme, des <strong>espaces de partage</strong> pour les projets, les &eacute;quipes et les applications. Mais &eacute;galement des <strong>communaut&eacute;s de pratiques</strong> et un moteur de recherche transverse permettant de trouver des documents et des experts.</p><p>CGI Business Consulting accompagne cette banque depuis la <strong>conception</strong> de cette plateforme, jusqu'&acute; la <strong>formation</strong> des utilisateurs et l'<strong>accompagnement du changement</strong>.</p><p>Nous avons ainsi con&ccedil;u un <strong>mod&egrave;le de gouvernance sp&eacute;cifique</strong>, construit des kits m&eacute;thodologiques et une <strong>offre de services d&eacute;di&eacute;e</strong> aux probl&eacute;matiques du KM du secteur de la banque d'investissement. </p>
								<p><strong>Donn&eacute;es cl&eacute;s du projet</strong> :</p>
								<ul>
									<li>Solution : <strong>Sharepoint 2010</strong></li>
									<li>Utilisateurs cibles pour 2012 : <strong>6000</strong></li>
									<li><strong>33</strong> pays concern&eacute;s</li>
								</ul>
							</div>
						</div>
					</article>
				</div>
			</div>
		</section>

		<section id="parolesExpert" class="row grey parolesExpert">
			<div class="center">
				<h1>Paroles d'expert</h1>
				<div class="columns">
					<article class="news oneThird">
						<div class="whiteColumn">
							<div class="content">
								<div class="latestNews">
									<img src="<?php echo _URL_WWW; ?>/images/experts/banner_expert.jpg" alt="Banner Paroles d'Expert"  class="imgHolder fullWidth" />
									<p><strong>Nos derni&egrave;res interventions et vid&eacute;os vous sont accessibles</strong> en cliquant sur les liens suivants : </p>
									<ul>
										<li>dans le  Journal du Net : <a href="http://www.journaldunet.com/solutions/reseau-social-d-entreprise/solutions-pour-creer-un-reseau-social-d-entreprise/" onClick="window.open(this.href); return false;" class="externalLink">Comparatif des solutions de r&eacute;seau social d'entreprise</a></li>
										<li>dans le Journal du Net : <a href="http://www.journaldunet.com/solutions/dsi/mise-en-place-reseau-social-d-entreprise/mobiliser-ses-troupes.shtml" onClick="window.open(this.href); return false;" class="externalLink">Mise en place r&eacute;seau social d'entreprise | S'assurer de l'implication des managers : un facteur cl&eacute; de r&eacute;ussite</a></li>
										<li>sur FrenchWeb : <a href="http://frenchweb.fr/reseaux-sociaux-quelle-identite-pour-les-salaries-60854" onClick="window.open(this.href); return false;" class="externalLink">[R&eacute;seaux Sociaux] Quelle identit&eacute; pour les salari&eacute;s ?</a></li>
										<li>sur 01Business : <a href="http://www.01net.com/editorial/596301/celio-passe-sa-messagerie-dans-le-cloud-et-ca-va-mieux/" onClick="window.open(this.href); return false;" class="externalLink">Celio passe sa messagerie dans le cloud, et &ccedil;a va mieux</a></li>
									</ul>
								</div>
							</div>
						</div>
					</article>
					<article class="news twoThird">
						<div class="whiteColumn">
							<div class="content">
								<div class="columns">
									<div class="half">
										<div class="expert">
											<img src="<?php echo _URL_WWW; ?>/images/experts/visuel_marc_trilling.jpg" alt="Paroles d'Expert : Marc Trilling" />
											<div><strong>Marc Trilling, Associ&eacute;</strong> en charge de l'activit&eacute; <strong>DSIN</strong> (<strong>Digital & Social Interactions</strong>), CGI Business Consulting</div>
										</div>
										<p>
											<strong>Et si l'entreprise apprivoisait enfin les m&eacute;dias sociaux ?</strong>
											<br/>
											Aujourd'hui, les entreprises ne se posent plus la question de savoir ce que sont les m&eacute;dias sociaux. D&eacute;sormais, elles cherchent &agrave; savoir comment utiliser ces outils et en mesurer l'int&eacute;r&ecirc;t pour leur activit&eacute;. Il n'est plus un dirigeant qui n'ait d&eacute;j&agrave; exp&eacute;riment&eacute; Twitter, Facebook ou YouTube. La question qu'elles doivent &agrave; pr&eacute;sent aborder est : comment ma&icirc;triser ces outils, comment les utiliser &agrave; bon escient voire comment s'en servir dans le cadre d'une strat&eacute;gie plus offensive et plus globale ?
										</p>
										<p>
											<strong>Media social, to be or not to be, that is the question</strong>
											<br/>
											Une veille calibr&eacute;e avec une bonne capacit&eacute; de r&eacute;action peut aussi suffire. Les entreprises n'ont pas toutes un avenir sur Facebook ou sur Twitter. La strat&eacute;gie de l'entreprise en mati&egrave;re de pr&eacute;sence sur les m&eacute;dias sociaux est dict&eacute;e &agrave; la fois par la valeur de la marque et son pouvoir d'attraction et par les objectifs explicites qu'elle se fixe.
										</p>
									</div>
									<div class="half">
										<p>Les m&eacute;dias sociaux destin&eacute;s au grand public valorisent l'individu; ceux &agrave; vocation professionnelle, doivent lib&eacute;rer la capacit&eacute; d'innovation de l’entreprise, aider au partage des connaissances et  accro&icirc;tre sa performance. Ils ont pour finalit&eacute;  l'engagement de la sph&egrave;re sociale du web au service de l'entreprise&nbsp;: recruter des ambassadeurs ou des fans, utiliser des experts pour anticiper et r&eacute;pondre &agrave; certains probl&egrave;mes de ses clients ou questions de ses prospects. Aujourd'hui, les m&eacute;dias sociaux sont parmi nous, il ne s'agit plus de les ignorer, mais de les analyser, pour mieux les apprivoiser et ainsi en utiliser tout le potentiel.</p>
										<p>
											<strong>Repenser les outils collaboratifs de l'entreprise</strong>
											<br/>
											A l’instar de Valeo, des entreprises ont d'ores et d&eacute;j&agrave; adopt&eacute; des ensembles de services collaboratifs dans le Cloud. Ces outils facilitent la gestion des mails et y associent des fonctions dites &quot;sociales&quot; telles que la gestion de carnet d'adresses, d'agendas partag&eacute;s, de contenus etc.
										</p>
										<p>La question de la s&eacute;curit&eacute; des acc&egrave;s et des donn&eacute;es, souvent &eacute;voqu&eacute;e comme principal frein &agrave; l'adoption de ces outils, n'est plus pertinente. Un prestataire d&eacute;di&eacute; &agrave; exploiter des messageries dans le Cloud pour le compte de grandes entreprises est souvent plus avanc&eacute; dans sa d&eacute;marche s&eacute;curit&eacute; que son client. </p>
									</div>
								</div>
							</div>
						</div>
					</article>
				</div>
			</div>
		</section>

		<section id="media" class="row">
			<div class="center">
				<h1>Nos Vid&eacute;os</h1>
				<h2>Vid&eacute;os DSIN on the Cloud</h2>
				<div class="columns medias">
					<article id="video-social-business" class="media fullWidth textCenter">
						<p class="content">
							<span class="underline">Pitch</span> : D&eacute;couvrez comment cr&eacute;er une relation « digitale » privil&eacute;gi&eacute;e et affinitaire avec les internautes, clients, prospects, ambassadeurs, influenceurs et partenaires de l'entreprise
						</p>
						<iframe class="videoDSIN" src="https://www.youtube.com/embed/hCYBYNM-6PQ" allowfullscreen></iframe>
					</article>
					<article id="video-dsin-on-the-cloud" class="media fullWidth textCenter">
						<p class="content">
							<span class="underline">Pitch</span> : D&eacute;couvrez en 1 minute pourquoi Thomas, employ&eacute; mod&egrave;le et efficace, passe aujourd&acute;hui devant une commission.
						</p>
						<iframe class="videoDSIN" src="https://www.youtube.com/embed/RQO_aDaAds0" allowfullscreen></iframe>
					</article>
					<article id="video-outils-et-collaboration" class="media fullWidth textCenter">
						<p class="content">
							<span class="underline">Pitch</span> : Dans une d&eacute;marche 2.0, les outils ne font pas la collaboration. Explication en images par l'&eacute;quipe DSIN
						</p>
						<iframe class="videoDSIN" src="https://www.youtube.com/embed/2P5bIaXLBlg" allowfullscreen></iframe>
						<p class="content">
							Dans un projet collaboratif, le plus important n'est pas de penser aux outils. Nous sommes convaincus qu&acute;il convient d'abord de r&eacute;fl&eacute;chir aux objectifs de votre projet et de questionner vos usages, afin de s'inscrire dans une d&eacute;marche p&eacute;renne et adapt&eacute;e &agrave; vos besoins.
							<br/>
							Au del&agrave; de nos pr&eacute;conisations techniques, nous vous proposons d'accompagner vos &eacute;quipes afin qu'elles adh&egrave;rent &agrave; votre d&eacute;marche et quelles s'approprient les solutions choisies.
						</p>
					</article>
				</div>
			</div>
		</section>

		<section id="partenaires" class="row grey">
			<div class="center">
				<h1>Nos solutions partenaires</h1>
				<h2></h2>
				<div class="columns partners">
					<article id="office365" class="oneThird">
						<div class="partner">
							<img src="<?php echo _URL_WWW; ?>/images/partners/Office365.png" alt="Microsoft Office 365" />
							<div class="content"><strong>Leader incontournable du collaboratif, des portails et de la gestion de contenu</strong>, Microsoft et CGI Business Consulting ont accompagn&eacute; depuis plus de dix ans de grandes entreprises. Aujourd'hui l'offre <strong>Office 365</strong> repr&eacute;sente une solution innovante et pertinente que les consultants de CGI Business Consulting mettent en place chez leur client.</div>
						</div>
					</article>
					<article id="newsgator" class="oneThird">
						<div class="partner">
							<img src="<?php echo _URL_WWW; ?>/images/partners/Newsgator.png" alt="Newsgator" />
							<div class="content">Reconnu comme un <strong>add-on incontournable &acute; Microsoft Sharepoint, Newsgator</strong> offre des fonctionnalit&eacute;s de m&eacute;dia social convaincantes. CGI Business Consulting a accompagn&eacute; de nombreux grands groupes dans la r&eacute;flexion autour des m&eacute;dias sociaux pour les entreprises disposant d&eacute;j&acute; de Microsoft Sharepoint. Newsgator se propose &eacute;galement comme un service dans le Cloud.</div>
						</div>
					</article>
					<article id="lotus-connections" class="oneThird">
						<div class="partner">
							<img src="<?php echo _URL_WWW; ?>/images/partners/LotusConnection.png" alt="Lotus Connection" />
							<div class="content">Rejoignant la liste des acteurs incontournables, l'outil <strong>Lotus Connections</strong> a &eacute;t&eacute; int&eacute;gr&eacute; et repackag&eacute; par CGI en une offre cl&eacute; en main baptis&eacute;e <strong>CGI Live Connections</strong>.</div>
						</div>
					</article>
				</div>
				<div class="columns partners">
					<article id="jive" class="oneThird">
						<div class="partner">
							<img src="<?php echo _URL_WWW; ?>/images/partners/Jive.png" alt="JIVE" />
							<div class="content">Editeur sp&eacute;cialis&eacute; dans le monde du social workplace, <strong>Jive</strong> est devenu en quelques ann&eacute;es un <strong>leader des plateformes de collaboration d'entreprise</strong>. Depuis 2010, le <strong>partenariat avec DSIN</strong> s'est traduit par de nombreux succ&egrave;s pour des clients appr&eacute;ciant la <strong>facilit&eacute; d'appr&eacute;hension</strong> et <strong>les usages innovants</strong> que permet la technologie Jive.</div>
						</div>
					</article>
					<article id="salesforce-marketing-cloud" class="oneThird">
						<div class="partner">
							<img src="<?php echo _URL_WWW; ?>/images/partners/logo_marketingCloud.png" alt="Marketing Cloud / Salesforce" />
							<div class="content">A l’&egrave;re des medias sociaux, Salesforce avec sa suite Marketing Cloud propose l’offre cloud la plus compl&egrave;te du march&eacute; d&eacute;di&eacute; au social Business. Avec une &eacute;quipe form&eacute;e et certifi&eacute;e sur les technologies Salesforce, CGI Business Consulting vous permettra d’acc&eacute;l&eacute;rer vos projets sur les m&eacute;dias sociaux pour toutes les fonctions de votre entreprise.</div>
						</div>
					</article>
					<article id="google" class="oneThird">
						<div class="partner">
							<img src="<?php echo _URL_WWW; ?>/images/partners/GoogleApps.png" alt="Google Apps for Business" />
							<div class="content">Parfaite illustration de services dans le Cloud, <strong>Google</strong> propose sa suite collaborative aux entreprises <strong>Google Aps for Business</strong> et CGI a mis en place depuis 2010 ans un <strong>centre de comp&eacute;tence d&eacute;di&eacute; aux technologies Google</strong> et accompagne depuis 2007 de grands clients dans leur mise en place.</div>
						</div>
					</article>
				</div>
				<div class="columns partners">
					<article id="adobe" class="oneThird">
						<div class="partner">
							<img src="<?php echo _URL_WWW; ?>/images/partners/Adobe.png" alt="Adobe" />
							<div class="content">Acteur international reconnu pour ses logiciels de cr&eacute;ation multim&eacute;dia, Adobe a en 3 ans compl&eacute;t&eacute; son offre avec la gamme de produit « Digital Marketing ». Il est depuis 2013 le leader du Digital eXperience Management (WCM, DAM, Analytics, Targeting, Social, etc.). CGI Business Consulting accompagne depuis 2008 de Grands Comptes, de la r&eacute;flexion sur les parcours client &acute; la refonte de leurs sites Web, en passant par l’optimisation de la segmentation Client et l’architecture de plateformes Digitales</div>
						</div>
					</article>
				</div>
			</div>
		</section>

		<section id="contact" class="row bleuCGI">
			<div class="center">
				<h1>Contactez Nous</h1>
				<!--<h2>lorem ipsum dolor sit amet, consectetur adipiscing elit</h2>-->
				<div class="columns">
					<div class="half">
						<form action="components/sendMail.php" method="post"
							id="contact_form" class="form">
							<fieldset>
								<h4>Formulaire de Prise de Contact</h4>
								<div class="formRow">
									<div class="textField">
										<input type="text" id="nom" name="nom" placeholder="Votre nom ..." />
									</div>
								</div>
								<div class="formRow">
									<div class="textField">
										<input type="email" id="email" name="email" placeholder="Votre Email ..." />
									</div>
								</div>
								<div class="formRow">
									<div class="textField">
										<textarea id="message" name="message" cols="20" rows="4" placeholder="Votre Message ..."></textarea>
									</div>
								</div>
								<div class="formRow">
									<button class="btn right" id="submit-contact" type="submit">
										<span>Envoyer Message</span>
									</button>
								</div>
							</fieldset>
						</form>
					</div>
					<div class="half">
						<h4>Comment nous trouver !</h4>
						<div id="map">
							<div class="imgHolder">
								<div id="map_canvas" class="mapCanvas"></div>
							</div>
						</div>
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
							<span>© Groupe CGI Inc.</span>
						</div>
					</div>
				</div>
			</div>
		</footer>
    </body>
</html>