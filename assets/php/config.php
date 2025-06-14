<?php
error_reporting(0);
date_default_timezone_set('Asia/Kolkata');

//google re-captcha keys
define("SITE_KEY", "6Ld98qwUAAAAAAU7-tgkrp335hDAY099V8ZLEfwd");
define("SITE_SECRET", "6Ld98qwUAAAAAHywdutp4rsg16QzR9BdFk7GQLgi");
define("TO_EMAIL", "info@praful-patel.com");

//website db
// $servername = "localhost";
// $username = "youtusnl_prafudf";
// $password = "}9Nv5sT&KRNT";
// $dbname = "youtusnl_prafudf3_webpp";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "praful";
//app db
// $servername_app = "localhost";
// $username_app = "youtusnl_ppuser";
// $password_app = "micUN&aU)l-B";
// $dbname_app = "youtusnl_pp";

$servername_app = "localhost";
$username_app = "root";
$password_app = "";
$dbname_app = "praful";

$db = mysqli_connect($servername, $username, $password, $dbname);

if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}
// else{
//     print_r(json_encode(["status"=>"success","msg"=>"Successfully connected to db"]));
// }
