<?php
include 'config/config.example.php';

if (file_exists('config/config.local.php')) {
    include 'config/config.local.php';
}

$matomoUrl = rtrim(trim($matomoUrl), '/');