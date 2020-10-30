<?php
$title = 'What are cookies, and why does every website make me agree to them?';
T::head($title);
T::article_head($title);
?>

<?php T::markdown_begin() ?>

Any website you visit can request that your computer store some data for
later use by the same site. Modern web browsers provide a few mechanisms
for this, but the oldest and most common is referred to as a "cookie,"
in the whimsical style of software jargon.

The data can be anything, and for a set time, your computer will present
the stored data back to the website on subsequent visits. Often, a
cookie is just a random number that's used to identify you during your
visit, and match you up with your profile data permanently stored on the
website. But in principle, a cookie can be anything, such as preferences
you've selected (e.g. Celsius vs. Fahrenheit), number of free articles
you've viewed, etc.

Websites have used cookies exuberantly since the 1990s, but in the new
millenium, the European parliament has been busy passing digital privacy
laws that (among other things) affect the use of cookies and other ways
of storing data on visitors' computers. Most websites are globally
available, and therefore available to EU citizens, and therefore subject
to these laws.

The most noticeable result -- especially when browsing from the EU -- is
yet another layer of pop-ups and legalese for website visitors to wade
through. So far, this approach has not genuinely empowered users to
control their data, especially since most websites have countervailing
incentives.

<?php T::markdown_end() ?>

        <h2 id=sub-questions>Sub-questions</h2>

        <ul class=articles>
            <li><a href="websites-and-memory.html">
                <?= T::typograph("Why does my browser have to present the same data again on every visit? Can't the website just remember who I am?") ?>
            </a></li>
            <li><a href="anonymous.html">If cookies can be used to identify me, can I be anonymous if I disable cookies?</a><br>(Short answer: no.)</li>
            <li><a href="consent.html">
                <?= T::typograph("If the new cookie popups don't result in genuine informed consent, what would be better?") ?>
            </a></li>
            <li><em>Coming soon:</em> My browser gives the option to block third-party cookies. What does that mean, and why would I want to?</li>
        </ul>

<?php T::markdown_begin() ?>

## Further reading

The most well-known piece of new legislation is 2018's GDPR (General
Data Protection Regulation). For more on the legislation itself (which
is about much more than just cookies), see the
[official word](https://gdpr.eu/cookies/) and an [unofficial
interpretive
article](https://www.varonis.com/blog/differences-between-the-gdpr-and-privacy-directive/).

For a great survey and discussion of the various design approaches to
the consent pop-ups, see
[this article](https://www.smashingmagazine.com/2019/04/privacy-ux-better-cookie-consent-experiences/)
from Smashing Magazine.

<?php T::markdown_end() ?>

<?php
T::article_foot();
T::foot();
