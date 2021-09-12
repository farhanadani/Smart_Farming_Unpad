<?php
require_once __DIR__ . "/vendor/autoload.php";
$koneksi = (new MongoDB\Client)->tester->user;
$koneksi1 = (new MongoDB\Client)->tester->data;
