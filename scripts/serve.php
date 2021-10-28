<?php

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/config.php';

use ScssPhp\ScssPhp\Compiler;

define('DEV_MODE', true);

$request_uri = $_SERVER['REQUEST_URI'];

if (substr($_SERVER['REQUEST_URI'], -1) == '/') {
    $request_uri .= 'index.html';
}

foreach ($pages as $page) {
    if ($request_uri == "/$page.html") {
        require "$src_dir/_inc.php";
        require "$src_dir/$page.php";
        exit;
    }
}

if (preg_match('/\/style\.css(\?.*)?$/', $request_uri)) {
    header('Content-type: text/css');
    foreach ($css_files as $css_file) {
        readfile("$src_dir/styles/$css_file.css");
        echo PHP_EOL;
    }

    $scss = new Compiler();
    foreach ($scss_files as $scss_file) {
        $scss_code = file_get_contents("$src_dir/styles/$scss_file.scss");
        echo $scss->compile($scss_code) . PHP_EOL;
    }

    exit;
}

// Serve a file as-is if it exists, or 404 if not.
// NOTE: PHP's working directory must be 'src'. Merely setting docroot to 'src'
// won't work, counter-intuitively.
return false;
