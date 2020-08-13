<?php

class T {
    function head($title = null) {
        ?>
<!DOCTYPE html>
<html>

<head>
    <title><?= isset($title) ? $title . ' - ' : '' ?>Why is software?</title>
    <meta charset="utf-8">
    <meta name="description" content="Opinionated answers for the non-technical tech-curious">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#000000">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Fira+Code&family=Fira+Sans+Condensed:ital,wght@0,400;0,700;1,400;1,700&family=Fira+Sans:ital,wght@0,400;0,700;1,400;1,700&family=VT323&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/custom.css">
</head>

<body>
        <?php
    }

    function foot($show_footer = true) {
        if ($show_footer) {
            ?>

    <footer>
        <a href="/">&lt; Return Home</a>
    </footer>
            <?php
        }
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
