<?php
// testsnap.php fichier de test de l'api SnapChat

require_once '/src/snapchat.php';

$username = "tomkfr"; // Your snapchat username
$password = "Thomas67x1"; // Your snapchat password
$gEmail   = ""; // Gmail account
$gPasswd  = ""; // Gmail account password
$debug = false; // Set this to true if you want to see all outgoing requests and responses from server

$snapchat = new Snapchat($username, $gEmail, $gPasswd, $debug);

//Login to Snapchat with your username and password
$friends = $snapchat->getFriends();

$snapchat->login($password);

$snapchat->addFriend('linepaoou');

$message = 'Coucou Paupau !';
$to = 'linepaoou';

$snapchat->sendMessage($to, $msg);


echo print_r($friends);

$snapchat->closeAppEvent();

?>