<?php

require_once('../vendor/autoload.php');

$kss = new \Scan\Kss\Parser('\css');
$ref = isset($_GET['ref']) ? $_GET['ref'] : 0;

require_once('../includes/header.php');

if ($ref > 0) {
    $sections = $kss->getSectionChildren($ref);
    foreach ($sections as $section) {
        include('../includes/block.php');
    }
} else {
    echo '<p>Welcome to our Styleguide!</p>';
}

require_once('../includes/footer.php');
