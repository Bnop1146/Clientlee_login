<?php
require "classes/classDB.php";

const CONFIG_LIVE = "0"; // 0: Test enviroment || 1: Live enviroment

if (CONFIG_LIVE == 0) {
    $DB_SERVER = 'localhost';
    $DB_NAME = 'phplogin';
    $DB_USER = 'root';
    $DB_PASS = '';

} else {
    $DB_SERVER = "mysql98.unoeuro.com";
    $DB_NAME = "bengtson_multiservice_dk_db_phplogin";
    $DB_USER = "";
    $DB_PASS = "";


}

$db = new db($DB_SERVER, $DB_NAME, $DB_USER, $DB_PASS);