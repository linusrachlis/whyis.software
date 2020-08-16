<?php

$src_dir = __DIR__ . '/../src';
$dist_dir = __DIR__ . '/../dist';

$pages = [
    'index',
    'cookies',
];

if ($_SERVER['REQUEST_URI'] == '/') {
    $request_uri = '/index.html';
} else {
    $request_uri = $_SERVER['REQUEST_URI'];
}

foreach ($pages as $page) {
    if ($request_uri == "/$page.html") {
        require $src_dir . '/_inc.php';
        require $src_dir . '/' . $page . '.php';
        exit;
    }
}

if ($request_uri == '/style.css') {
    header('Content-type: text/css');
    $css_files = [
        'normalize',
        'main',
        'custom',
    ];
    foreach ($css_files as $css_file) {
        readfile("$src_dir/css/$css_file.css");
        echo PHP_EOL;
    }
    exit;
}

// If I end up serving other static assets, you can apparently return
// false to serve the file as-is.

header('HTTP/1.1 404 File Not Found');
