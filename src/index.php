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
            <li><a href="mailto:ask@whyis.software">Email a question</a>. If you're afraid it may be a stupid question,
                then I really want to hear it!</li>
        </ul>
    </section>

    <section>
        <h1>Why is this website?</h1>
        <?php T::markdown_begin() ?>

When I first used a computer, I felt uncertainty and awe. This was an
information powertool, and I had better know what I was doing. Since
then, a few companies have grown massive by redefining personal
computing as a sleek and magical experience. Users are no longer
supposed to understand how software works.

On the one hand, this lowers computing's barrier to entry. It's good
that more people can benefit from shared digital information.

On the other hand, a tool you're not supposed to understand is
disempowering, especially when it malfunctions, which software often
does. Furthermore, the software industry needs more accountability, both
for its own good and for the public good. This requires demystification.

This website is for folks who don't make software, but often wonder
about it. It's such a big part of your life, you deserve some
explanation. For each question, I give a high-level answer followed by
more questions you can expand, depending where you're interested in
diving deeper.

I'm a software developer in Toronto, ON, Canada. You can also find me at
my [strange personal website](https://linus.rachlis.net),
[Twitter](https://twitter.com/winnythefoo), or
[Github](https://github.com/linusrachlis).

        <?php T::markdown_end() ?>

    </section>
<?php
T::foot(false);
