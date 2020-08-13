<?php

$list = [
    'index',
    'cookies',
];

$src_dir = __DIR__ . '/../src';
$dist_dir = __DIR__ . '/../dist';

require $src_dir . '/_inc.php';

foreach ($list as $page) {
    ob_start();
    require $src_dir . '/' . $page . '.php';
    $output = ob_get_clean();
    file_put_contents($dist_dir . '/' . $page . '.html', $output);
}
