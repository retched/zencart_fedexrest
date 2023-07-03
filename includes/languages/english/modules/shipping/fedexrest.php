<?php
// Language file for FedEx REST API 
define('MODULE_SHIPPING_FEDEX_REST_TEXT_TITLE', 'FedEx REST API');
define('MODULE_SHIPPING_FEDEX_REST_TEXT_DESCRIPTION', '<h2>FedEx REST API</h2><p>You will need to have registered an account with FedEx to use this module. Please see the README.TXT file.</p>');

// For locales other than en_US please see 
// https://developer.fedex.com/api/en-mx/guides/api-reference.html#locales
define('MODULE_SHIPPING_FEDEX_REST_TEXT_LOCALE','en_US'); 

// Email if bad credentials
define('MODULE_SHIPPING_FEDEXREST_EMAIL_SUBJECT', 'The fedexrest shipping method has been automatically disabled');
define('MODULE_SHIPPING_FEDEXREST_INVALID_CREDENTIALS', 'The API Key/Secret Key combination you set were not recognized by FedEx, and so the fedexrest shipping module has been automatically disabled.  Please work with your FedEx Account Rep to get working credentials.');
