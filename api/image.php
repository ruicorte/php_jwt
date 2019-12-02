<?php
// required headers
/* header("Access-Control-Allow-Origin: http://localhost/judo_server/");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
 */

$remoteImage = "./seoinage.gif";
$imgInfo = getimagesize($remoteImage);
header('Content-type: ' . $imgInfo['mime']);
readfile(remoteImage);