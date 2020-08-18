<?php

require __DIR__ . '/../vendor/autoload.php';

use Michelf\Markdown, Michelf\SmartyPants;

class T {
    function markdown_begin() {
        ob_start();
    }

    function markdown_end() {
        $input = ob_get_clean();
        $output = self::markdown_to_html($input);
        echo $output;
    }

    function markdown_to_html($input) {
        $output = Markdown::defaultTransform($input);
        $output = self::typograph($output);
        return $output;
    }

    function typograph($input) {
        $output = SmartyPants::defaultTransform($input);
        return $output;
    }

    function head($title = null) {
        ?>
<!DOCTYPE html>
<html>

<head>
    <title><?= isset($title) ? self::typograph($title) . ' - ' : '' ?>Why is software?</title>
    <meta charset="utf-8">
    <meta name="description" content="Opinionated answers for the non-technical tech-curious">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#000000">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Code&family=Fira+Sans+Condensed:ital,wght@0,400;0,700;1,400;1,700&family=Fira+Sans:ital,wght@0,400;0,700;1,400;1,700&family=VT323&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/style.css">
</head>

<body>
        <?php
    }

    function article_head($article_title, array $breadcrumbs = []) {
        ?>

    <article>
        <div class=header>
            <div class=breadcrumbs>
                <a href="/">Why is software?</a> &raquo;
                <?php foreach ($breadcrumbs as $url => $title): ?>

                <a href="<?= $url ?>"><?= self::typograph($title) ?></a> &raquo;
                <?php endforeach ?>
            </div>
            <h1><?= self::typograph($article_title) ?></h1>
        </div>
        <div class=content>
        <?php
    }

    function article_foot(array $backlinks = []) {
        ?>

            </div>
        </article>

        <footer>
            <?php foreach ($backlinks as $url => $title): ?>

            <p>&lt; <a href="<?= $url ?>"><?= self::typograph($title) ?></a></p>
            <?php endforeach ?>
            <p>&lt; <a href="/">Return home</a></p>
        </footer>
        <?php
    }

    function foot() {
        ?>

    <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
    <!--
    <script>
        window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
        ga('create', 'UA-XXXXX-Y', 'auto'); ga('set', 'anonymizeIp', true); ga('set', 'transport', 'beacon'); ga('send', 'pageview')
    </script>
    <script src="https://www.google-analytics.com/analytics.js" async></script>
    -->
    </body>

</html>
        <?php
    }
}
