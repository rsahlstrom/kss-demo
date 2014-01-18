<?php

require_once('../vendor/autoload.php');

$kss = new \Scan\Kss\Parser('\css');

require_once('../includes/header.php');

$section = $kss->getSection('1.1');
include('../includes/block.php');
$section = $kss->getSection('1.2');
include('../includes/block.php');

require_once('../includes/footer.php');
