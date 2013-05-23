<?php

define("_HOST", $_SERVER["SERVER_NAME"]);

if (_HOST == '127.0.0.1') {
  define("_URL_WWW", "http://127.0.0.1/DSIN");
} else if (_HOST == 'digital-and-social-interactions.com') {
  define("_URL_WWW", "http://www.digital-and-social-interactions.com");
}

//--------------------------------------
// MAILS
//--------------------------------------
define("_MAIL_FROM",        "dsin@fr.logica.com");
define("_MAIL_TO",        "dsin@fr.logica.com");
define("_MAIL_CONTACT",     "dsin@fr.logica.com");
define("_MAIL_REPLY",     "dsin@fr.logica.com");
define("_MAIL_NOREPLY",     "dsin@fr.logica.com");
define("_MAIL_HOST", 		"ssl://smtp.gmail.com:465");
define("_MAIL_USERNAME", 	"dsin.cgi@gmail.com");
define("_MAIL_PWD", 		"dsin2013");

?>