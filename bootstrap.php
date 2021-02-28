<?php
include 'config/config.example.php';

if (file_exists(dirname(__FILE__) . '/config/config.local.php')) {
    include dirname(__FILE__) . '/config/config.local.php';
}

$matomoUrl = rtrim(trim($matomoUrl), '/');
