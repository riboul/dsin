<?php
/***
 * MENU du fichier de fonctions
 */



//**************************************************************************************************
//	TRAITEMENT DU TITRE DES PAGES
//**************************************************************************************************
function dynTitle($page_url) {
	$string2Return = "Digital & Social Interactions :";
	$url = parse_url($page_url);
	
	/* $string2Return = 'Protocole : '.$url['scheme'];
	
	$string2Return =  'Protocole : '.$url['scheme']; //http
	
	$string2Return.= 'Nom de domaine : '.$url['host']; //www.zone-webmasters.net
	
	$string2Return.= 'Fichier :'.$url['path']; //page.php
	
	$string2Return.= 'Arguments:'.$url['query']; //variable=valeur
	
	$string2Return.= 'Ancre:'.$url['fragment']; //ancre	*/
	
	$string2analyse = $url['path'];
	
	switch ($string2analyse) {
		case "/engage-the-web/":
			$string2Return .= " engagez � la vitesse du Web et du Web Social / ";
			break;
		case "/move-to-digital-workplace/":
			$string2Return .= " repensez votre poste de travail en une workspace int�grant vos applications m�tiers contextualis�es et la collaboration / ";
			break;
		case "/transform-into-social-business/":
			$string2Return .= " transformez vos m�tiers par le Web Social, source d'opportunit�s pour tous les m�tiers de votre entreprise / ";
			break;
		case "/go-to-cloud/":
			$string2Return .= " decouvrez comment planifier votre strat�gie Cloud / ";
			break;
		case "/les-offres-dsin/":
			$string2Return .= " des offres pour vous accompagner de bout en bout / ";		
			break;
		case "/les-offres-dsin/digital-asset-management/":
			$string2Return .= " des offres pour vous accompagner de bout en bout : le Digital Asset Management pour g�rer et b�n�ficier de tous les assets digitaux de votre entreprise /";	
			break;			
		case "/les-offres-dsin/communautes-externes/":
			$string2Return .= " des offres pour vous accompagner de bout en bout : cr�er vos communaut�s externes comme nouveau support client ou nouvelle source de valeur pour vos produits et services / ";	
			break;	
		case "/les-offres-dsin/workplace-as-a-service/":
			$string2Return .= " des offres pour vous accompagner de bout en bout : tirez profits des usages du Digital Workplace tout en ayant une ma�trise de vos co�ts / ";	
			break;				
		case "/les-offres-dsin/social-collaboration/":
			$string2Return .= " des offres pour vous accompagner de bout en bout : garantissez la r�ussite de vos projets Collaboratifs et de R�seau Social d�Entreprise / ";	
			break;			
		case "/les-offres-dsin/e-presence-reputation/":
			$string2Return .= " des offres pour vous accompagner de bout en bout : Exploiter la richesse et les opportunit�s du web social, � tous les niveaux de votre organisation / ";	
			break;
		case "/les-offres-dsin/digital-workplace/":
			$string2Return .= " des offres pour vous accompagner de bout en bout :embarquez sur le Digital Workplace / ";	
			break;		
		case "/les-offres-dsin/social-business/":
			$string2Return .= " des offres pour vous accompagner de bout en bout : exploiter et Manager la richesse des m�dias sociaux au service des m�tiers de votre entreprise / ";	
			break;			
		case "/nos-expertises/":
			$string2Return .= " nos expertises - Parce que la diversit� nous enrichit ";	
			break;	
		case "/paroles-de-clients/":
			$string2Return .= " paroles de clients - Ils nous ont fait confiance / ";	
			break;		
		case "/paroles-de-clients/valeo/":
			$string2Return .= " paroles de clients - Ils nous ont fait confiance / Valeo / ";	
			break;		
		case "/paroles-de-clients/groupe-pharmaceutique/":
			$string2Return .= " paroles de clients - Ils nous ont fait confiance / Grand Groupe Pharmaceutique / ";	
			break;	
		case "/paroles-de-clients/banque-investissement/":
			$string2Return .= " paroles de clients - Ils nous ont fait confiance / Grande Banque d'Investissement / ";	
			break;	
		case "/paroles-expert/":
			$string2Return .= " paroles d'Expert / ";	
			break;			
		case "/videos-media/":
			$string2Return .= " nos videos / ";	
			break;	
		case "/videos-media/video-dsin-on-the-cloud/":
			$string2Return .= " nos videos / Video de DSIN ON THE CLOUD / ";	
			break;		
		case "/videos-media/video-social-business/":
			$string2Return .= " nos videos / Video : Social Business / ";	
			break;			
		case "/videos-media/video-outils-et-collaboration/":
			$string2Return .= " nos videos / Video : les outils ne font pas la collaboration / ";	
			break;		
		case "/nos-partenaires/":
			$string2Return .= " nos partenaires / ";	
			break;		
		case "/nos-partenaires/office365/":
			$string2Return .= " nos partenaires : office365 / ";	
			break;	
		case "/nos-partenaires/newsgator/":
			$string2Return .= " nos partenaires : Newsgator / ";	
			break;		
		case "/nos-partenaires/lotus-connections/":
			$string2Return .= " nos partenaires : Lotus-Connections /";	
			break;			
		case "/nos-partenaires/jive/":
			$string2Return .= " nos partenaires : Jive / ";	
			break;		
		case "/nos-partenaires/salesforce-marketing-cloud/":
			$string2Return .= " nos partenaires : Salesforce / Marketing cloud / ";	
			break;		
		case "/nos-partenaires/google/":
			$string2Return .= " nos partenaires : Google / ";	
			break;	
		case "/nos-partenaires/google/":
			$string2Return .= " nos partenaires : Adobe / ";	
			break;				
		case "/contactez-nous/":
			$string2Return .= " contactez-nous / ";	
			break;	
																																																																					
	}
	
	$string2Return .= " When Digital Reconnects people / Quand le Digital Reconnecte les Individus";		
	
	return $string2Return;
}
?>