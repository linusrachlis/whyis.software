<?php

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/../src/_inc.php';

use ScssPhp\ScssPhp\Compiler;

define('DEV_MODE', true);

$request_uri = $_SERVER['REQUEST_URI'];

if (substr($_SERVER['REQUEST_URI'], -1) == '/') {
    $request_uri .= 'index.html';
}

foreach ($pages as $page) {
    if ($request_uri == "/$page.html") {
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

foreach ($content_images as $content_image) {
    $base_url_preg_escaped = preg_quote($content_image[0], '/');
    $regex = (
        '/^\/'
        . $base_url_preg_escaped
        . '-(\d+)\.'
        . $content_image[1]
        . '$/'
    );
    $matches = null;
    if (preg_match($regex, $request_uri, $matches)) {
        $width = $matches[1];
        header('Content-type: image/jpeg');
        T::build_image(
            $src_dir,
            $content_image[0],
            $content_image[1],
            $width,
            null
        );
        exit;
    }
}

// Serve a file as-is if it exists, or 404 if not.
// NOTE: PHP's working directory must be 'src'. Merely setting docroot to 'src'
// won't work, counter-intuitively.
return false;
