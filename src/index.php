<?php T::head() ?>

    <header>
        <h1>Why is software?</h1>
        <p class=tagline>
            <script>
            (function() {
                var taglines = [
                    'Opinionated answers for the non-technical tech-curious.',
                    'How the sausage is programmed.',
                ];
                var choice = Math.round(Math.random() * (taglines.length-1));
                document.write(taglines[choice]);
            })();
            </script>
        </p>
    </header>

    <section class=article-previews>
        <a href="/facebook-and-the-internet/">
            The 2021 Facebook outage: what happened, and what is the Internet
            anyway?
        </a>
        <a href="/foo-bar-zam/">
            Foo bar, and also zam
        </a>
    </section>

    <section class=body-text>
        <h2>Why is this website?</h2>
        <?php T::markdown_begin() ?>

When I first used a computer, I felt uncertainty and awe. This was an
information powertool, and I had better know what I was doing. Since then, a
few companies have grown massive by redefining personal computing as a sleek
and magical experience. Users are no longer supposed to understand how software
works.

On the one hand, this lowers computing's barrier to entry. It's good that more
people can benefit from shared digital information. On the other hand, using a
tool you're not supposed to understand is undignified and disempowering,
especially when it malfunctions, which software often does.

This website is for folks who don't make software, but often wonder about it.
It's such a big part of your life, you deserve some explanation.

I'm a software developer in Toronto, ON, Canada. I also write on other topics
on my [personal website](https://linus.rachlis.net) and share some code on
[Github](https://github.com/linusrachlis).

        <?php T::markdown_end() ?>

    </section>
<?php
T::foot(false);
