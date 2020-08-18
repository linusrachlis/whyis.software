<?php
T::head('What are cookies, and why does every website make me agree to them?');
?>

    <article>
        <div class=header>
            <div class=home-link><a href="/">Why is software?</a> &raquo;</div>
            <h1>What are cookies, and why does every website make me agree to them?</h1>
        </div>
        <div class=content>

<?php T::markdown_begin() ?>

Any website you visit can request that your computer store some data,
and for silly reasons the technical term for this data is "cookie." The
data can be anything, and for a set time, your computer will present the
stored data back to the website on subsequent visits. A cookie is often
just a random number that's used to identify you during your visit, and
match you up with your profile data permanently stored on the website.
But in principle, a cookie can be anything, such as preferences you've
selected (e.g. Celsius vs. Fahrenheit), number of free articles you've
viewed, etc.

Websites have used cookies exuberantly for decades, but in 2018 the EU
passed new privacy laws that have been widely interpreted to require
consent for the usage of most cookies. Most websites are globally
available, and therefore available to EU citizens, and therefore subject
to these laws. This has resulted in yet another pop-up we all have to
dismiss or ignore to get at the actual website we came to visit, without
becoming genuinely informed or giving meaningful consent.

(The new laws do seems well-meaning, and are about much more than just
cookies. For more, see the [official word](https://gdpr.eu/cookies/) and
an [unofficial interpretive
article](https://www.varonis.com/blog/differences-between-the-gdpr-and-privacy-directive/).)

<?php T::markdown_end() ?>

        <h2>Why does my browser have to present the same data again on every visit? Can’t the website just
            remember who I am?</h2>

        <details>

        <?php T::markdown_begin() ?>

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

The thing is, a one-on-one conversation isn't a great analogy for
information flow when it comes to websites. Let's recall the web's
original purpose: It's 1989. For most people, personal computers still
aren't a thing, and if you want to read up on something, you go to the
library and physically open a book. But for certain groups of
scientists, reading and writing have become digital activities. The only
problem is, digital text is still cooped up on individual computers, and
must be shared either via physical printout or by explicitly making a
digital copy to share. Tim Berners-Lee of CERN creates a
digital-documents-on-demand system, and a document format that can embed
links to other documents. The web is born.

Compared with today's web, this original version is modest and stuffy.
Today's web solves for a different problem than the original. Notice two
key aspects of the original version, one of which is now more true, and
the other less:

1.  A website has a one-to-many relationship with visitors.
2.  A website is a repository of documents. For the most part, any
    visitor requesting the same document will be served in the same way.

In this original version of the web, aspect (1) means, for the computer
running a website, remembering individual visitors adds programming
complexity and occupies system resources, and you don't even know who
will actually return. Aspect (2) means this is a moot point: when a
visitor requests "document A", you send them "document A"; you don't
care who they are or if they've visited before.

That's the basic design of the web, but the lack of continuity for
visitors soon became an issue. I want websites to remember that I
selected Celsius, or a larger font size. I want them to remember my VIP
status without having to re-enter a password on every visit. And website
creators want to be able to analyze which pages I visited, in what
order, for how long -- ostensibly so they can improve my experience.
This requires my having a continuous identity from page to page.

If a website has only a small amount of data to store, the simplest way
is to put it in the cookie itself. If a website sets two cookies, "temp
unit = C" and "font size = 18," my browser will no longer merely say
"send me document A." It will now say "send me document A, and by the
way, temp unit = C and font size = 18." And then, "send me document *B*,
and by the way, temp unit = C and font size = 18." This is like being at
an event with catered food, and wearing a lanyard with the code "VGN,
GF, AP." This could efficiently tell the catering staff that you are
vegan and gluten-intolerant with a peanut allergy, without their having
to re-interview you on every interaction. They still don't know who you
are individually, but you constantly present all the information they
need. Websites may use this strategy to store minor customizations and
preferences.

Nowadays, "documents on demand" describes only a narrow aspect of the
web. A more general description of the modern web would be "software as
a broadcast medium." Even websites that are essentially document
repositories still run code to track visitors' behaviour, allow them to
post comments, and serve them ads. Obviously, many modern websites care
a great deal who each visitor is, and serve each visitor a personalized
experience. So, in contrast to the original design of the web, aspect
(2) is no longer true. But with more and more activities moving online,
aspect (1) is more true than ever.

If a website wants to build up extensive profile data for each visitor,
storing this data in the cookie itself won't work. First, because
cookies are limited in size, to protect visitors' hard drive space.
Second, each computer stores its own set of cookies. If you use your
phone instead of your laptop, the same cookies will not be sent. Third,
visitors can choose to delete cookies any time, destroying the data. If
a website bothers to accumulate profile data on you, they would like to
be in control of that data, and have it live with them. In this case,
the website will set a cookie that just holds a large random number.
Your computer presents this unique random number again on every visit,
and the computer running the website can use it to look up your
information in an internal database (and add to it) before deciding how
to serve you. You may or may not have to enter a password to interact
with your profile information, depending on the nature of the website.
In the food catering analogy, this is like having a barcode on your
lanyard instead of actual information. The catering staff can scan the
barcode to pull up your profile, which could now be extensive because it
doesn't have to fit on a little card; all that needs to fit is the
barcode (representing a unique number).

Of course, another strategy would be to simply hire as many staff as
attendees, so that each staff member only has to remember one person's
preferences, but this would be overly costly. It's the same with a
website serving visitors. Each time you visit a page, the computer
running a website spends a little time and energy to figure out how to
respond. After responding, it *could* in theory keep the line open just
for you, so that it would genuinely remember who you are upon the next
interaction. But there's a limit to how many lines it can keep open at a
time, so this strategy would quickly become infeasible for a busy
website. It would be too complicated to have one way that busy websites
work and another way for non-busy websites, so instead we all use the
way that will keep working no matter how busy a website gets.

        <?php T::markdown_end() ?>

        </details>

        <h2>If cookies can be used to identify me, can I be anonymous if I disable cookies?</h2>

        <p>(Short answer: no.)</p>

        <details>

        <?php T::markdown_begin() ?>

If you use a regular web browser, you are never truly anonymous no
matter what settings you use. Cookies provide a reliable way for a
website to remember who you are, but there are many other quasi-reliable
ways. This means if you disable cookies, a website can't be absolutely
sure who you are, but you're still far from anonymous.

A website you visit still receives a lot of information other than
cookies, the combination of which can still uniquely identify you. Just
like if you don't wear your lanyard with the barcode, you're probably
still recognizable by your face or your clothing. Without accepting
cookies, you may lose the ability to log into the website, but you may
still be trackable for, e.g., advertising purposes. Advertisers are
comfortable with a 95% probability of your identity, whereas a login
system needs certainty.

Finally, if your internet service provider (e.g. Rogers) receives a
court order, or if you live under an oppressive government, any internet
activity can be traced back to the physical location you connected from.
The only way around this is to use software like the Tor browser, which
you may remember from such shows as Mr. Robot.

        <?php T::markdown_end() ?>

        </details>

        <h2>Okay wise guy, if the new cookie popups don&rsquo;t result in genuine informed consent, what would be better?</h2>

        <details>

<?php T::markdown_begin() ?>

Historically, cookies were always a matter of consent. Even today, when
you visit, say, some news outlet's website, your browser (a program
running on your computer) has a conversation with a server (a program
running on a remote computer). It goes something like this:

> **Browser:** Hi `action-news-world.com`, I guess my user is in the mood
> for sadness, because they're requesting the international news page.
> Please send that over.

> **Server:** Kinda busy here, hold on ... OK, got that page for you.
> Also, can you hold these for me?

> * `visitor ID = ABC123`
> * `country code = CA`
> * `free articles viewed = 0`

> That's just a couple pieces of information to serve your user better.
> If you could present them on every visit for the next four years,
> that'd be great. OK, here's the international news page. Hope your
> user is ready for a deep funk. `<data stream follows>`

> **Browser:** Hmm. I'm not sure if tracking "free articles viewed" is
> really about serving my user better, but as a computer program, it's
> pretty hard for me to tell. For all I know, it's essential
> functionality. OK, I'll do as you say. By the way, surely some
> positive things are happening internationally as well as sad things?

> **Server:** I mean, probably ... I just don't consider them news,
> though.

See that? If your browser refused to accept the cookies, there is
nothing the website could do to force the issue. It can't block the
browser for refusing the cookies, because the cookies are the only
reliable way to recognize the same browser coming back!

In fact, all browsers have a setting you can toggle to refuse cookies,
but it defaults to "accept," because many websites just won't work
properly without cookies. And for the most part, it's not possible for
your browser to be selective, because there's no way for it to tell
which cookies are in your interest and which are against. That all
depends how the website uses the data, and your browser is not a
mind-reader.

the problem is basically no one does this part: Allow users to access your service even if they refuse to allow the use of certain cookies

it's just "by conitnuing you accept" and it's all or nothing.

1) it'd be stupid for each website to build its own interface for deciding
what types of cookies to accept
2) in order for the choice to be made in your browser, we'd need a new standard
for announcing the type of each cookie, and legal force to require truthful use of it.
3) cookies are no longer the only way to store data client-side

<?php T::markdown_end() ?>

        </details>

        <h2>My browser gives the option to block third-party cookies. What does that mean, and why would I want to?</h2>

        <p>Coming soon...</p>

        </div>
    </article>
<?php
T::foot();
