<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Michelf\Markdown, Michelf\SmartyPants;

class T {
    static $content_image_widths = [
        380,
        697
    ];

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

    function build_image($src_dir, $base_path, $ext, $dst_width, $save_dir) {
        // NOTE: only jpgs for now
        $src_filename = "$src_dir/$base_path.$ext";
        $src_image = imagecreatefromjpeg($src_filename);
        if (!$src_image) {
            exit("Couldn't load file: $src_filename");
        }
        $src_width = imagesx($src_image);
        $src_height = imagesy($src_image);
        $dst_height = $src_height * ($dst_width / $src_width);
        $dst_image = imagecreatetruecolor($dst_width, $dst_height);
        imagecopyresampled(
            $dst_image,
            $src_image,
            0,
            0,
            0,
            0,
            $dst_width,
            $dst_height,
            $src_width,
            $src_height
        );
        // NOTE: doesn't save to file ever currently
        if (isset($save_dir)) {
            $dest_filename = "$save_dir/$base_path-$dst_width.$ext";
        } else {
            $dest_filename = null;
        }
        imagejpeg($dst_image, $dest_filename, 85);
    }

    function content_image($alt_text, $src_path, $caption = null) {
        T::markdown_end();

        $pathinfo = pathinfo($src_path);
        $srcset_list = [];
        $sizes_list = [];
        $num_sizes = count(T::$content_image_widths);

        foreach (T::$content_image_widths as $i => $w) {
            // NOTE: the last one of these will be used as the default 'src'
            $url_for_size = htmlspecialchars(
                '/' . $pathinfo['dirname'] . '/'
                . $pathinfo['filename']
                . "-$w."
                . $pathinfo['extension']
            );
            $srcset_list[] = "$url_for_size ${w}w";

            $sizes_list[] = (
                (
                    // If we're on the last size, no media query
                    ($i+1 == $num_sizes)
                    ? ''
                    : "(max-width: ${w}px) "
                )
                . "${w}px"
            );
        }
?>
<figure class=content-image>
    <img
        srcset="<?= htmlspecialchars(implode(', ', $srcset_list)) ?>"
        sizes="<?= htmlspecialchars(implode(', ', $sizes_list)) ?>"
        src="<?= htmlspecialchars($url_for_size) ?>"
        alt="<?= htmlspecialchars($alt_text) ?>">
<?php
        if (isset($caption)) {
?>
    <figcaption><?= T::markdown_to_html($caption) ?></figcaption>
<?php
        }
?>
</figure>
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

    function article_head($title) {
        self::head($title);
?>
    <header class=article>
        <div class=home><a href="/">Why is software?</a></div>
    </header>

    <article class=body-text>
<?php
    }

    function foot() {
        ?>
    </body>

</html>
        <?php
    }

    function article_foot() {
?>
    </article>

    <footer class=article>
        <div class=home><a href="/">Why is software?</a></div>
    </footer>
<?php
        self::foot();
    }
}
