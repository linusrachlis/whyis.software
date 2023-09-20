<?php T::head() ?>

    <header class=masthead>
        <h1>
            <div class=main>Why is software</div>
            <div class=completion aria-hidden=true>
                <span class=tty></span><span class=cursor>_</span>
            </div>
        </h1>
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
            What happened to Facebook on October 4, 2021 -- and what is the
            Internet anyway?
        </a>
        <a href="mailto:ask@whyis.software">
            Email me more questions
        </a>
    </section>

    <section class=body-text>
        <h2>Why is this website?</h2>
        <?php T::markdown_begin() ?>

Circa 1992, when I first used a computer, I felt uncertainty and awe. This was
an information powertool, and I had better know what I was doing. Since then, a
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

    <script>
    document.addEventListener('DOMContentLoaded', function () {
        var completions = [
            "so broken",
            "so slow",
            "so fast",
            "so addictive",
            "in everything",
            "in my fridge",
            "mandatory",
            "so hard to use",
            "soft"
        ];
        var container = document.querySelector('.masthead h1 .tty');
        var index = Math.round(Math.random() * (completions.length - 1));
        var targetText, currentText;

        function startNewCompletion () {
            currentText = "";
            targetText = completions[index] + "?";
            typeText();
        }

        function typeText() {
            currentText += targetText[currentText.length];
            container.innerText = currentText;
            if (currentText.length == targetText.length) {
                setTimeout(eraseText, 2000);
            } else {
                setTimeout(typeText, 100);
            }
        }

        function eraseText() {
            currentText = currentText.substring(0, currentText.length - 1);
            container.innerText = currentText;
            var nextFunction = (currentText.length == 0)
                ? finishCompletion
                : eraseText;
            setTimeout(nextFunction, 25);
        }

        function finishCompletion() {
            index = (index + 1) % completions.length;
            setTimeout(startNewCompletion, 1000);
        }

        startNewCompletion();
    });
    </script>
<?php
T::foot(false);
