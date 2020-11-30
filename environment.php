<?php
// Generic environment variables
$_ENV["SITE_URL"] = "https://asaeldev-mp-commerce-php.herokuapp.com/";

// URLs for views
$_ENV["SUCCESS_PAYMENT_URL"] = $_ENV["SITE_URL"] . "success.php";
$_ENV["FAILURE_PAYMENT_URL"] = $_ENV["SITE_URL"] . "failure.php";
$_ENV["PENDING_PAYMENT_URL"] = $_ENV["SITE_URL"] . "pending.php";

// Endpoint URLs
$_ENV["NOTIFICATIONS_URL"] = $_ENV["SITE_URL"] . "notification.php";

// Credentials
$_ENV["PRODUCTION_MODE"] = true;
$_ENV["MP_DEV_ACCESS_TOKEN"] = "";
$_ENV["MP_PROD_ACCESS_TOKEN"] = "APP_USR-1159009372558727-072921-8d0b9980c7494985a5abd19fbe921a3d-617633181";

$_ENV["MP_ACCESS_TOKEN"] = $_ENV["PRODUCTION_MODE"] ? $_ENV["MP_PROD_ACCESS_TOKEN"] : $_ENV["MP_DEV_ACCESS_TOKEN"];
$_ENV["MP_INTEGRATOR_ID"] = "dev_24c65fb163bf11ea96500242ac130004";