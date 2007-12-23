<?php

//
// GIMME SOME MONEY CONFIGURATION
//

$GLOBALS['ARTIST'] = "artist name";
$GLOBALS['ARTIST_URL'] = "http://www.yoursite.com/";
$GLOBALS['ROOT'] = "http://www.yoursite.com/gimme/"; // where your gimme install is
$GLOBALS['PAYPAL_URL'] = "www.paypal.com"; // www.paypal.com or www.sandbox.paypal.com if you're using the paypal sandbox
$GLOBALS['COMPLETED'] = "http://www.yoursite.com/money/completed/"; // where to send the buyer after buying
$GLOBALS['PAYPAL_EMAIL'] = "your@paypalemail.com"; // your paypal account email (or sandbox business account email)
$GLOBALS['CURRENCY'] = "USD"; // default currency

//
// ITEMS CONFIGURATION
//
// name / price
//
$GLOBALS['ITEMS'] = array("star" => "5",
                          "heart" => "10",
                          "cookie" => "20");

// DATABASE CONFIGURATION
// 
// Variables for the database. 
// 
$GLOBALS['PURCHASE_TABLE'] = "gimme_transactions"; // table name
$sql_type = "1"; // 1 --> MySQL ; 2 --> MSSQL
$sql_host = "localhost"; // host name
$sql_name = ""; // database name
$sql_user = ""; // sql username
$sql_pass = ""; // sql password

?>