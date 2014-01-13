<?php
include("PushNotification.php");

// set enovirnment and cretificate path
$push = new PushNotification("sandbox","./cert.pem");
// set device token
$push->setDeviceToken("DEVICE TOKEN HERE");
// Set pass phrase if any
$push->setPassPhrase("YOUR pass phrase here");
// Set badge
$push->setBadge(2);
// Set message body
$push->setMessageBody("Message body here");
$push->sendNotification();
?>