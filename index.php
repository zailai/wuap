<?php
error_reporting(0);

require_once('APJP/APJP.php');
require_once('APJP/Application.php');

APJP_APJP::$APJP_KEY = 'J4veYjT1hD5UvRJH';
APJP_APJP::$APJP_REMOTE_HTTP_SERVER_RESPONSE_PROPERTY_KEY[0] = '';
APJP_APJP::$APJP_REMOTE_HTTP_SERVER_RESPONSE_PROPERTY_VALUE[0] = '';
APJP_APJP::$APJP_REMOTE_HTTP_SERVER_RESPONSE_PROPERTY_KEY[1] = '';
APJP_APJP::$APJP_REMOTE_HTTP_SERVER_RESPONSE_PROPERTY_VALUE[1] = '';
APJP_APJP::$APJP_REMOTE_HTTP_SERVER_RESPONSE_PROPERTY_KEY[2] = '';
APJP_APJP::$APJP_REMOTE_HTTP_SERVER_RESPONSE_PROPERTY_VALUE[2] = '';
APJP_APJP::$APJP_REMOTE_HTTP_SERVER_RESPONSE_PROPERTY_KEY[3] = '';
APJP_APJP::$APJP_REMOTE_HTTP_SERVER_RESPONSE_PROPERTY_VALUE[3] = '';
APJP_APJP::$APJP_REMOTE_HTTP_SERVER_RESPONSE_PROPERTY_KEY[4] = '';
APJP_APJP::$APJP_REMOTE_HTTP_SERVER_RESPONSE_PROPERTY_VALUE[4] = '';
APJP_APJP::$APJP_REMOTE_HTTPS_SERVER_RESPONSE_PROPERTY_KEY[0] = '';
APJP_APJP::$APJP_REMOTE_HTTPS_SERVER_RESPONSE_PROPERTY_VALUE[0] = '';
APJP_APJP::$APJP_REMOTE_HTTPS_SERVER_RESPONSE_PROPERTY_KEY[1] = '';
APJP_APJP::$APJP_REMOTE_HTTPS_SERVER_RESPONSE_PROPERTY_VALUE[1] = '';
APJP_APJP::$APJP_REMOTE_HTTPS_SERVER_RESPONSE_PROPERTY_KEY[2] = '';
APJP_APJP::$APJP_REMOTE_HTTPS_SERVER_RESPONSE_PROPERTY_VALUE[2] = '';
APJP_APJP::$APJP_REMOTE_HTTPS_SERVER_RESPONSE_PROPERTY_KEY[3] = '';
APJP_APJP::$APJP_REMOTE_HTTPS_SERVER_RESPONSE_PROPERTY_VALUE[3] = '';
APJP_APJP::$APJP_REMOTE_HTTPS_SERVER_RESPONSE_PROPERTY_KEY[4] = '';
APJP_APJP::$APJP_REMOTE_HTTPS_SERVER_RESPONSE_PROPERTY_VALUE[4] = '';

$application = new APJP_Application();
$application->execute();
?>