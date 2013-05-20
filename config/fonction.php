<?php
/***
 * MENU du fichier de fonctions
 */

//--------------------------------------
// TRAITEMENT DE CHAINES DE CARACTERES
//--------------------------------------
// Fonction de traitement des chaines avant insertion en base
function sql_quote($value) {
  if (get_magic_quotes_gpc()) {
    $value = stripslashes($value);
  }
  // Vérifie si la fonction existe
  /*if (function_exists("mysql_real_escape_string")) {
    $value = mysql_real_escape_string($value);
  } else {
    // for PHP version < 4.3.0 use addslashes
    $value = addslashes($value);
  }*/
  $value = addslashes($value);
  $value = mysql_real_escape_string($value);
  $value = htmlspecialchars($value);
  return $value;
}

// Fonction remplacement de caractères en caractères html
function replace4HTML($chaine) {
$caract = array('é', 'É', 'è', 'à', 'â', 'î', 'ï', 'ù', 'û', 'ü', 'ë', 'ö', 'Ö', 'ô', 'ç', 'Ü', 'ê');
$html   = array('&eacute;', '&Eacute;', '&egrave;', '&agrave;', '&acirc;', '&icirc;', '&iuml;', '&ugrave;' , '&ucirc;', '&uuml;' , '&euml;', '&ouml;', '&Ouml;', '&ocirc;', '&ccedil;', '&Uuml;', '&ecirc;');
  
 if (stripos($chaine,'&')===false){
  for ($i=0; $i<count($caract); $i++) {
    $chaine = str_replace($caract, $html, $chaine);
  }
  }
  else{
	//Cas particulier du & commercial
	$chaine = str_replace('&', '&amp;', $chaine); 
  }	
return $chaine;
}


//---------------------------------------------------------
//Formatage des nombres des formulaires
//---------------------------------------------------------
function nombre_format_form($nombre){

//$nombre_formate=number_format($nombre, 2, ',', '');//Pas de séparateur décimal sur les champs
$nombre_formate = $nombre;
if ($nombre_formate=='0.00')	$nombre_formate='';//On supprime les valeurs nulles
$nombre_formate=str_replace('.00','',$nombre_formate);
return $nombre_formate;

}

//**************************************************************************************************
//Cryptage et Decryptage du mot de pase
//**************************************************************************************************

function password_decode($filter, $str)
{
   $filter = md5($filter);
   $letter = -1;
   $newstr = '';
   $str = base64_decode($str);
   $strlen = strlen($str);

   for ( $i = 0; $i < $strlen; $i++ ) {
      $letter++;
      if ( $letter > 31 ) {
         $letter = 0;
      }

      $neword = ord($str{$i}) - ord($filter{$letter});

      if ( $neword < 1 ) {
         $neword += 256;
      }
      
      $newstr .= chr($neword);
   	}
   return $newstr;
}

function password_encode($filter, $str)
{
   $filter = md5($filter);
   $letter = -1;
   $newpass = '';

   $strlen = strlen($str);
   
   for ( $i = 0; $i < $strlen; $i++ )
   {
      $letter++;

      if ( $letter > 31 )
      {
         $letter = 0;
      }

      $neword = ord($str{$i}) + ord($filter{$letter});

      if ( $neword > 255 )
      {
         $neword -= 256;
      }

      $newpass.= chr($neword);

   }
   
   return base64_encode($newpass);
}

//**************************************************************************************************
//Pour mettre la première lettre en majuscule et le reste en minuscule
//**************************************************************************************************
function UcFirstAndToLower($str) {
     return ucfirst(strtolower(trim($str)));
}

//**************************************************************************************************
//function pour l'url rewriting
//**************************************************************************************************
function htmlentities_utf8($string){
	return htmlentities($string, ENT_QUOTES, 'UTF-8');
}

function relace4URLRewriting($url){
	$url = htmlentities_utf8($url);
	$caract = array('é', 'è', 'à', 'â', 'î', 'ï', 'ù', 'û', 'ü', 'ë', 'ö', 'ô', 'ç', ' ', '-?', '?', '&eacute;', '&egrave;', '&agrave;', '&acirc;', '&icirc;', '&iuml;', '&ugrave;' , '&ucirc;', '&uuml;' , '&euml;', '&ouml;', '&ocirc;', '&ccedil;', '(', ')', '-/-', '(-', '-)', '\'', '---', '--', '-?', 'L/M', '&amp;eacute;', '&amp;egrave;', '&amp;agrave;', '&amp;acirc;', '&amp;icirc;', '&amp;iuml;', '&amp;ugrave;' , '&amp;ucirc;', '&amp;uuml;' , '&amp;euml;', '&amp;ouml;', '&amp;ocirc;', '&amp;ccedil;');
	$newCaract   = array('e','e', 'a', 'a', 'i', 'i', 'u;' , 'u', 'u' , 'e', 'o', 'o', 'c', '-', '', '', 'e', 'e', 'a', 'a', 'i', 'i', 'u;' , 'u', 'u' , 'e', 'o', 'o', 'c','', '', '-', '-', '-', '-', '-', '-', '', 'lm', 'e', '&egrave;', 'e', 'a', 'i', 'i', 'u' , 'u', 'u' , 'e', 'o', 'o', 'c');
  	for ($i=0; $i<count($caract); $i++) {
    	$url = str_replace($caract, $newCaract , $url);
 	 }

	$url= strtolower($url);

	return $url;
}

//**************************************************************************************************
// Fonction pour formater la date de publication en anglais
//**************************************************************************************************
function pubDateToFrench($string){
	$timestamp =  strtotime($string);
	$jour = date('d',  $timestamp);
	$mois = date('m',  $timestamp);
	$an = date('Y', $timestamp); 
	$heure = date('H', $timestamp); 
	$minute = date('i', $timestamp); 
	$seconde = date('s', $timestamp);
	$nombre_de_jour = date('z', $timestamp);
	$numero_du_jour_de_la_semaine = date('w', $timestamp);
	$numero_de_la_semaine = date('W', $timestamp);
	$bissextile = date('L', $timestamp);

	$date = $jour."/".$mois."/".$an." - ".$heure."h:".$minute.'mn:'.$seconde.'s';
	return $date;
}



//**************************************************************************************************
// Fonction de conversion des mois numériques
//**************************************************************************************************
function mois($number,$lang) {
$mois=array();
$mois ['fr']= array('1'=>'Janvier','2'=>'F&eacute;vrier','3'=>'Mars','4'=>'Avril','5'=>'Mai','6'=>'Juin','7'=>'Juillet','8'=>'Aout', '9'=>'Septembre','10'=>'Octobre','11'=>'Novembre','12'=>'D&eacute;cembre');
$mois ['en']= array('1'=>'Janvier','2'=>'Février','3'=>'Mars','4'=>'Avril','5'=>'Mai','6'=>'Juin','7'=>'Juillet','8'=>'Aout', '9'=>'Septembre','10'=>'Octobre','11'=>'Novembre','12'=>'Décembre');
$mois ['de']= array('1'=>'Janvier','2'=>'Février','3'=>'Mars','4'=>'Avril','5'=>'Mai','6'=>'Juin','7'=>'Juillet','8'=>'Aout', '9'=>'Septembre','10'=>'Octobre','11'=>'Novembre','12'=>'Décembre');
return $mois[$lang][$number];
}

//**************************************************************************************************
// Fonctions permettant de retrouver le nom de domaine ou l'extension du nom de domaine
//**************************************************************************************************
function getNomDeDomaine() {
 
    $hostParts = explode('.', $_SERVER['HTTP_HOST']);
    $numberParts = sizeof($hostParts);
    $domain='';
    
    // Domaine sans tld (ex: http://server/page.php)
    if(1 === $numberParts) {
        $domain = current($hostParts);
    }
    // Domaine avec tld (ex: http://fr.php.net/parse-url)
    elseif($numberParts>=2) {
        $hostParts = array_reverse($hostParts);
        $domain = $hostParts[1] .'.'. $hostParts[0];
    }
    return $domain;
}

function getExtension() {
 
    $hostParts = explode('.', $_SERVER['HTTP_HOST']);
    $numberParts = sizeof($hostParts);
    $extension='';
    
    // Domaine sans tld (ex: http://server/page.php)
    if(1 === $numberParts) {
        $extension = current($hostParts);
    }
    // Domaine avec tld (ex: http://fr.php.net/parse-url)
    elseif($numberParts>=2) {
        $hostParts = array_reverse($hostParts);
        $extension = $hostParts[0];
    }
    return $extension;
}

//**************************************************************************************************
// Fonction de redirection
//**************************************************************************************************
function redirect($url, $time) {
	echo '<meta http-equiv="refresh" content="'.$time.';url='.$url.'" />';
}


//**************************************************************************************************
// Fonction permettant d'intercepter les retours chariots avant insertion en base
//**************************************************************************************************
function replace4BDD($stringToReplace) {
	$stringToReturn = trim($stringToReplace); // enlève les bla,c
	$stringToReturn = nl2br($stringToReturn);
	$stringToReturn = mysql_real_escape_string($stringToReturn);	
	//$stringToReturn = replace($stringToReturn, '\r\n', '<br />');
	$stringToReturn = str_replace('\r\n', '<br />', $stringToReturn);
	return $stringToReturn;
}

//**************************************************************************************************
// Fonction permettant d'intercepter les <br /> avant affichage pour le textarea
//**************************************************************************************************
function replace4TextArea($stringToReplace) {
	$stringToReturn = str_replace('<br />', '', $stringToReplace);
	return $stringToReturn;
}
//**************************************************************************************************
// Fonction permettant de proposer un lien transverse au site suivant la navigation effectuée
//**************************************************************************************************
function compareAndpropose($arraySession) {
			////Association de l'ID Page à son URL	
			$idPagesWebsite = array( 
									//'11'	=>	T_PAGE_HOMEPAGE, 
									'12'	=> 	T_PAGE_OFFRES_4CS,
									'121'	=>	T_PAGE_SOCIAL,
									'123'	=>	T_PAGE_WCM,
									'124'	=>	T_PAGE_SEARCH,
									'125'	=>	T_PAGE_DAM,
									'126'	=>	T_PAGE_EPRESENCE,
									'127'	=>	T_PAGE_ECOMMERCE,
									'131'	=>	T_PAGE_ON_THE_CLOUD_PRESENTATION,		
									'132'	=>	T_PAGE_ON_THE_CLOUD_PARTENARIAT,																		
									'2'		=>	T_PAGE_VIDEO_VIDEOS,
									'22'	=>	T_PAGE_VIDEO_DOWNLOAD,									
									'3'		=>	T_PAGE_ACTUS,	
									'31'	=>	T_PAGE_ACTUS.T_PAGE_NEWS1.'#news1',										
									'32'	=>	T_PAGE_ACTUS.T_PAGE_NEWS2.'#news2',		
									'33'	=>	T_PAGE_ACTUS.T_PAGE_NEWS3.'#news3',																			
									'4'		=>	T_PAGE_SUCCESS_STORY,	
									'41'	=>	T_PAGE_SUCCESS_STORY.T_PAGE_SUCCESS1.'#successStory1',										
									'42'	=>	T_PAGE_SUCCESS_STORY.T_PAGE_SUCCESS2.'#successStory2',		
									'43'	=>	T_PAGE_SUCCESS_STORY.T_PAGE_SUCCESS3.'#successStory3',														
									'5'		=>	T_PAGE_EXPERT,							
									//'6'		=>	T_PAGE_CONTACT,
									'7'		=>	T_PAGE_BOILER																														
							 );		
			//Association de la page à son teaser				 
			$idPageToDescription = array( 
									//T_PAGE_HOMEPAGE						=>		T_PAGE_HOMEPAGE_TEASER,
									T_PAGE_OFFRES_4CS					=> 		T_PAGE_OFFRES_4CS_TEASER,
									T_PAGE_SOCIAL						=>		T_PAGE_SOCIAL_TEASER,
									T_PAGE_WCM							=>		T_PAGE_WCM_TEASER,
									T_PAGE_SEARCH						=>		T_PAGE_SEARCH_TEASER,
									T_PAGE_DAM							=>		T_PAGE_DAM_TEASER,
									T_PAGE_EPRESENCE					=>		T_PAGE_EPRESENCE_TEASER,
									T_PAGE_ECOMMERCE					=>		T_PAGE_ECOMMERCE_TEASER,
									T_PAGE_ON_THE_CLOUD_PRESENTATION	=>		T_PAGE_ON_THE_CLOUD_PRESENTATION_TEASER,		
									T_PAGE_ON_THE_CLOUD_PARTENARIAT		=>		T_PAGE_ON_THE_CLOUD_PARTENARIAT_TEASER,																		
									T_PAGE_VIDEO_VIDEOS					=>		T_PAGE_VIDEO_VIDEOS_TEASER,
									T_PAGE_VIDEO_DOWNLOAD				=>		T_PAGE_VIDEO_DOWNLOAD_TEASER,									
									T_PAGE_ACTUS						=>		T_PAGE_ACTUS_TEASER,	
									T_PAGE_ACTUS.T_PAGE_NEWS1.'#news1'	=>		T_PAGE_NEWS1_TEASER,										
									T_PAGE_ACTUS.T_PAGE_NEWS2.'#news2'	=>		T_PAGE_NEWS2_TEASER,		
									T_PAGE_ACTUS.T_PAGE_NEWS3.'#news3'	=>		T_PAGE_NEWS3_TEASER,																			
									T_PAGE_SUCCESS_STORY				=>		T_PAGE_SUCCESS_STORY_TEASER,	
									T_PAGE_SUCCESS_STORY.T_PAGE_SUCCESS1.'#successStory1'	=>		T_PAGE_SUCCESS1_TEASER,										
									T_PAGE_SUCCESS_STORY.T_PAGE_SUCCESS2.'#successStory2'	=>		T_PAGE_SUCCESS2_TEASER,		
									T_PAGE_SUCCESS_STORY.T_PAGE_SUCCESS3.'#successStory3'	=>		T_PAGE_SUCCESS3_TEASER,														
									T_PAGE_EXPERT						=>		T_PAGE_EXPERT_TEASER,							
									//T_PAGE_CONTACT						=>		T_PAGE_CONTACT_TEASER,
									T_PAGE_BOILER						=>		T_PAGE_BOILER_TEASER																														
							 );									 
													
			//on enlève toutes les pages présentes dans la variable de session
			//$tailleTab = 'AVANT - : '.sizeof($idPagesWebsite);
			
			//Tout d'abord si toutes les pages du site ont été visitées on propose le contact
			//echo 'taille du tableau de la chaine naviguée :'.sizeof($arraySession).'<br />';
			//echo 'taille du tableau de la chaine initiale :'.sizeof($idPagesWebsite).'<br />';
			if (sizeof($arraySession)==sizeof($idPagesWebsite)) {
			
			$suggestedPage = '<div id="suggestDiv"><p>'.T_SUGGEST.'</p><p><a href="'._URL_WWW.'/'.T_PAGE_CONTACT.'" class="suggestLink">'.T_PAGE_CONTACT_TEASER.'</a></p></div>';		
			} else {
			
				$i=0;
				while ($i < sizeof($arraySession)) {
					
					if (isset($idPagesWebsite[$arraySession[$i]])) {
						$element = $idPagesWebsite[$arraySession[$i]];
						//echo "element à enlever : $element<br />";
						unset($idPagesWebsite[array_search($element, $idPagesWebsite)]);
					}
					$i++;
				}
			//On choisit 1 élément au hasard dans le tableau pour la suggestion
			$indiceURL = array_rand($idPagesWebsite);
			$suggestedPage = '<div id="suggestDiv"><p>'.T_SUGGEST.'</p><p><a href="'._URL_WWW.'/'.$idPagesWebsite[$indiceURL].'" class="suggestLink">'.$idPageToDescription[$idPagesWebsite[$indiceURL]].'</a></p></div>';						
			}	

		
			return $suggestedPage ;
		}
//**************************************************************************************************
// Fonction permettant de lire les élements d'un tableau
//**************************************************************************************************
function arrayValue($arr) {
	$string2Return = "<p>";
	foreach ($arr as $value) {
   				 $string2Return.= "Valeur: $value <br />";
  	}
	$string2Return .= "</p>";
  return $string2Return;
}

//**************************************************************************************************
//Table de corresponsance Note / Commentaires afin d'eviter la BDD
//**************************************************************************************************
function note2Comment($paramNote) {
	$string2Return = '';
	switch ($paramNote) {
		case "NA":
			$string2Return = "Pas d'&eacute;valuation attribu&eacute;e...";
			break;
		case "1":
			$string2Return = "reproduit un mod&egrave;le dans lequel je ne me reconnais/ projette pas";
			break;
		case "2":
			$string2Return = "en dessous de mes attentes";
			break;
		case "3":
			$string2Return = "au niveau de mes attentes, mais pas plus";
			break;
		case "4":
			$string2Return = "m'inspire sur la majorit&eacute; des sujets";		
			break;
		case "5":
			$string2Return = "je le consid&egrave;re comme un mod&egrave;le sur cet aspect";	
			break;									
	}
	
	return $string2Return;
}
?>