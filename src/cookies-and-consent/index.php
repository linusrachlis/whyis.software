<?php
T::article_head("Cookies and consent");
T::markdown_begin();
?>

What are cookies, and why does every website make me agree to them?
===================================================================

Any website you visit can request that your computer store some data for
later use by the same site. Modern web browsers provide a few mechanisms
for this, but the oldest and most common is referred to as a "cookie,"
in the whimsical style of software jargon.

The data can be anything, and for a set time, your computer will continually
present the stored data back to the website. Often, a cookie is just a random
number that's used to identify you during your visit, and match you up with
your profile data permanently stored on the website. But in principle, a cookie
can be anything, such as preferences you've selected (e.g. Celsius vs.
Fahrenheit), number of free articles you've viewed, etc.

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

Why can't a website just remember that stuff, without being constantly reminded?
--------------------------------------------------------------------------------

This may seem strange. Maybe you're imagining a real-life analogy where
you've met someone at a party who is having short-term memory trouble,
and are having a surreal conversation:

> **Me:** Hi, I'm Linus. I'm from Toronto and I'm a software developer.
>
> **Him:** Hi Linus. Nice to meet you. Tell me, why is software still so
> hard to use? Haven't you people been at this for decades? By the way,
> I'll forget who you are by the time you reply.
>
> **Me:** Oh, no worries. So I'm Linus. I'm a software developer from
> Toronto. You just asked me why most software is so hard to use despite
> its being a decades-old discipline. I would, however, point out that
> decades is hardly very old for an engineering discipline. How long
> have we been at bridges, for example?
>
> **Him:** Hi Linus. Thanks for catching me up. Now what I want to ask
> is, does the creation of software really qualify as engineering? From
> where I'm sitting, most software looks very seat-of-the-pants compared
> to bridges.
>
> **Me:** I'd say there's a spectrum. It's true, much of the software
> people use is created quite casually, but at the other end, there's
> the software that controls rocket launches. I'd call that engineering
> for sure.
>
> **Him:** A spectrum of what? Who are you? Are you trying to sell me
> rockets?
>
> **Me:** 🤦‍♂️

### Some quick history

The thing is, a one-on-one conversation isn't a great analogy for information
flow when it comes to websites. Let's recall the web's original purpose: It's
1989. For most people, personal computers still aren't a thing, and if you want
to read up on something, you go to the library and physically open a book. But
for certain groups of scientists, reading and writing have become digital
activities. The only problem is, digital text is still cooped up on individual
computers, and must be shared either via physical printout or by explicitly
making a digital copy to share.

This new "Internet" thing has made it _possible_ to share digital information
far and wide, but it hasn't become _easy_ yet. Tim Berners-Lee of CERN creates
a digital-documents-on-demand system, and a document format that can embed
links to other documents. The web is born.

As you can see, the original "World Wide Web" was conceived as a collection of
_places_ one could _visit_. As in, I'm a professor at BigWig University, and
here's my homepage, with some links to things I've written. Click on them and
you can read those things. That's it. Everyone who visits gets the same
experience.

That's pretty different from the web we have today. Certainly, some websites
are still like that -- basically a place with a bunch of things you can read,
and links to other things you can read. But even those websites have busy hands
under the table, trying to guess things you'll be interested in reading next,
keeping track of how many free articles you've read, trying to get you to sign
up and share your data, etc. And then you have some "websites," like Gmail,
Facebook, or Netflix, that are nothing like the original web at all. They are
just programs that happen to run inside your browser instead of having to be
formally "installed" on your computer.

So how did we get from digital-documents-on-demand to Facebook and Netflix?

If the new cookie popups haven't made things better for users, what would be better?
-----------------------------------------------------------------------------

Further reading
---------------

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

<?php
T::markdown_end();
T::article_foot();
