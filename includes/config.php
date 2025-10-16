<?php

session_start();
// Retrieve IP address
$ip = $_SERVER['REMOTE_ADDR'];

// Retrieve location using IP address
$location = file_get_contents("http://ip-api.com/json/{$ip}");
$locationData = json_decode($location);

// Retrieve internet connection details
$userAgent = $_SERVER['HTTP_USER_AGENT'];

// Get the complete URL with protocol and domain
$currentFullURL = "http" . (isset($_SERVER['HTTPS']) ? "s" : "") . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];


define('PHONE', '+1 (412) 214-9197'); // phone
define('PHONE_HREF', 'tel:+14122149197'); // tel: phone
define('WEBSITE_NAME', 'Amazon Book Publication'); // website name
define('ADMIN_EMAIL', 'info@amazonbookpublication.com'); // website name
define('ADDRESS', '301 Grant Street, Suite 270, Pittsburgh, PA, 15219.');