<?php
require_once '../vendor/autoload.php';

$client = new Google_Client();
$client->setClientId('CLIENT_ID');
$client->setClientSecret('CLIENT_SECRET');
$client->setRedirectUri('http://yourdomain.com/google-callback.php');
$client->addScope('email');
$client->addScope('profile');

//usecase 
<?php
require_once 'google-config.php';

$loginUrl = $client->createAuthUrl();
echo "<a href='$loginUrl'>Login with Google</a>";
?>
