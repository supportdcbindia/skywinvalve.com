<?php
session_start();
error_reporting(0);

define('INQUIRY_LOG_FILE', 'inquiry-logs.txt');
define('CATALOGUE_LOG_FILE', 'cat-inquiry-logs.txt');

define('WEBSITE_DOMAIN', 'skywinvalve.com');
define('COMPANY_NAME', 'Skywin Valve Pvt. Ltd.');

define('CONTACT_PAGE', 'contact-us.php');
define('THANK_YOU_PAGE', 'thankyou.php');
define('THANK_YOU_CATALOGUE_PAGE', 'thankyou-catalogue.php');
define('IS_DOMESTIC', true);

## EMAIL Settings
define('FROM_EMAIL', 'support@skywinvalve.com');
define('TO_EMAIL', 'mkt@skywinvalve.com');
define('CC_EMAIL', '');
define('EMAIL_SUBJECT', 'New Inquiry From '.COMPANY_NAME.' Website');
define('CATALOGUE_EMAIL_SUBJECT', 'New Catalogue Request From '.COMPANY_NAME.' Website');
## SMTP2GO Username & Password
define('SMTP2GO_USERNAME', 'skywinvalve');
define('SMTP2GO_PASSWORD', '8NT4gT6ReFgWvufb');

## For inquiry testing configuration
define('DCB_INQUIRY_TEST_EMAILS_ARR', array("dcbindia@dcbindia.in", "dcb@dcbindia.in"));
define('DCB_INQUIRY_EMAIL', 'dcbrainsinquiry@gmail.com');
?>
