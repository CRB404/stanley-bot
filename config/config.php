<?php
// config.php

// only for debugging
//error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING);
//ini_set('display_errors', 1);

include('includes/Twilio/TinyHttp.php');

// set local timezone
date_default_timezone_set('America/San_Francisco');

// General
$projectName="ORACLE";
$projectEmail="alukasik@ideocolab.com";
$projectPhoneNumber="+17202516853";


// Twilio API credentials
$accountSid = "AC9de15e153604d68c925a87ba63e179df";
$authToken = "80365d27f8d84f6f769eb8dfcde1e20"; //
$twilioPhoneNumber = "+17209612494";
$siteURL="YOUR SITE URL";


// Slack Webhook integration
$slackWebHookURL="YOUR SLACK PRIVATE CHANNEL WEB HOOK";
$slackRoom = "THE NAME OF YOUR SLACK ROOM";
$slackBotName = "Stanley"; //THE NAME OF YOUR BOT
$slackBotIcon = ":robot_face:"; // THE PROFILE IMAGE OF YOUR BOT example :money_mouth_face: or :shit:


// Database Stuff
$dbHost = "us-cdbr-iron-east-04.cleardb.net";
$dbName = "heroku_18661a199e4a1dd";
$dbUserName = "bd245b7f10ad77";
$dbPassword = "3a4742d8";
$dbTable = "THE NAME OF THE DATABASE TABLE";

$dbConnection = mysqli_connect($dbHost, $dbUserName, $dbPassword,$dbName);
mysqli_error($dbConnection);


// Responses setup (when you need an automated response to users - i.e. when the team is away or the session is over)
$automatedResponseOver="n"; // options: y | n
$automatedResponseTeamSleeping ="n"; // options: y | n
$automatedResponseTimeStart = "Today 9pm";
$automatedResponseTimeEnd = "Tomorrow 10am";



// Create a API client instance
$http = new Services_Twilio_TinyHttp(
    'https://api.twilio.com',
    array('curlopts' => array(
        CURLOPT_SSL_VERIFYPEER => true,
        CURLOPT_SSL_VERIFYHOST => 2
    )));

$client = new Services_Twilio($accountSid, $authToken, "2010-04-01", $http);

?>
