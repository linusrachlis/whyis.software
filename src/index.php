<?php T::head() ?>

    <header>
        <h1>Why is software?</h1>
        <p class=tagline>
            Opinionated answers for the non-technical tech-curious.<br>
            How the sausage is programmed.
        </p>
    </header>

    <section>
        <h1>Articles</h1>

        <ul class=articles>
            <li><a href="/cookies.html">What are cookies, and why does every website make me agree to them?</a></li>
            <li><em>Coming soon:</em> Why do I use some apps through a web browser and others have to be installed?</li>
            <li><em>Coming soon:</em> Password strength, two-factor authentication, not re-using passwords. Why do these matter?</li>
            <li><em>Coming soon:</em> I upgraded to Mac OS Catalina and can't use 32-bit apps anymore. What does that mean?</li>
            <li><em>Coming soon:</em> Computers today are 1000 times as powerful as early PCs were, right? Why do they often still feel slow?</li>
            <li><a href="mailto:ask@whyis.software">Email a question</a></li>
        </ul>
    </section>

    <section>
        <h1>About</h1>
        <?php T::markdown_begin() ?>

When I first used a computer, the experience was stuffy and arcane, but
awe-inspiring. The thing waited for you to figure it out -- or not.
Since then, computing has gone mainstream. A few companies have grown
massive by making computing into a sleek and magical experience --
except that we grow bored of the magic, and distrustful of the
never-ending hiccups. It seems an unhealthy relationship.

I made this site because even if software isn't your field, it's a big
part of your life. You probably find it useful, curious, maddening,
confounding, addicting, and maybe sometimes still awe-inspiring. Let me
tell you from the inside: there's nothing magical or sleek about
software. There's just a lot of people working hard, making a mess, and
trying to keep it from getting too out of hand. It all affects your
life, so you deserve more insight.

Despite all that effort to make the sailing feel smooth, the icebergs of
complexity often poke up above the surface, hinting at the unimaginable
depth. Users are expected to cope and adapt, but not to question. I've
based each article on the tip of such an iceberg, providing a high-level
answer, followed by additional questions you can expand, depending where
you're interested in diving deeper.

I'm a software developer in Toronto, ON, Canada. You can also find me at
my [strange personal website](https://linus.rachlis.net),
[Twitter](https://twitter.com/winnythefoo), or
[Github](https://github.com/linusrachlis).

        <?php T::markdown_end() ?>

    </section>
<?php
T::foot(false);
