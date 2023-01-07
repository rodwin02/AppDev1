<?php

//start session on web page
session_start();

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('740532103404-t2qu1bd5024a2rdt69c7u807spknbt0v.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('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');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/AppDevFinal/register.php');

// to get the email and profile 
$google_client->addScope('email');

$google_client->addScope('profile');

?> Close your php here  