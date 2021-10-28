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

    function content_image($alt_text, $src_path) {
        T::markdown_end();
?>
<p class=content-image>
    <img
        src="/<?= htmlspecialchars($src_path) ?>"
        alt="<?= htmlspecialchars($alt_text) ?>">
</p>
<?php
        T::markdown_begin();
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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:ital,wght@0,400;0,600;1,400;1,600&family=Roboto:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/style.css" class="site-styles">
<? if (DEV_MODE) { ?>
    <script>
        window.addEventListener('load', () => {
            const links = document.getElementsByClassName('site-styles');
            const reloadSiteStyles = () => {
                const queryString = '?' + (new Date()).getTime();
                const link = links[0];
                const parentElement = link.parentElement;
                const newLink = link.cloneNode();
                newLink.href = link.href.replace(/\?.*|$/, queryString);
                newLink.addEventListener('load', () => {
                    link.remove();
                });
                parentElement.insertBefore(newLink, link);
            };
            setInterval(reloadSiteStyles, 1000);
        })
    </script>
<? } ?>
</head>

<body>
        <?php
    }

    function foot() {
        ?>
    </body>

</html>
        <?php
    }
}
