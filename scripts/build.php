<?php

require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/config.php';
require_once "$src_dir/_inc.php";

use ScssPhp\ScssPhp\Compiler;

define('DEV_MODE', false);

$dist_dir = __DIR__ . '/../dist';

if (!is_dir($dist_dir)) {
    mkdir($dist_dir);
}


foreach ($pages as $page) {
    ob_start();
    require "$src_dir/$page.php";
    $output = ob_get_clean();
    $output_path = "$dist_dir/$page.html";
    $output_dir = dirname($output_path);
    if (!is_dir($output_dir)) {
        mkdir($output_dir, 0777, true); // recursive
    }
    file_put_contents($output_path, $output);
}

foreach ($content_images as $content_image) {
    foreach (T::$content_image_widths as $width) {
        T::build_image(
            $src_dir,
            $content_image[0],
            $content_image[1],
            $width,
            $dist_dir
        );
    }
}

$css_code = '';
foreach ($css_files as $css_file) {
    $css_code .= file_get_contents("$src_dir/styles/$css_file.css") . PHP_EOL;
}

$scss = new Compiler();
$scss_code = '';
foreach ($scss_files as $scss_file) {
    $scss_code = file_get_contents("$src_dir/styles/$scss_file.scss");
    $css_code .= $scss->compile($scss_code) . PHP_EOL;
}

file_put_contents("$dist_dir/style.css", $css_code);
