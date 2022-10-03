<?php
$title = "If the new cookie popups don't result in genuine informed consent, what would be better?";
T::head($title);
T::article_head($title, ['/cookies/' => 'What are cookies?']);
?>

<?php T::markdown_begin() ?>

Let's take things back. Historically, cookies were always a matter of
consent. Even today, when you visit, say, some news outlet's website,
your browser (a program running on your computer) has a brief
conversation with the server (the program running on a remote computer
that houses the website). It goes something like this:

> **Browser:** Hi `action-news-world.com`, I guess my user is in the mood
> for sadness, because they're requesting the international news page.
> Please send that over.

> **Server:** Kinda busy here, hold on ... OK, got that page for you.
> Also, can you hold these for me?

> <pre>
> font size = 14
> temp unit = C
> visitor ID = ABC123
> country code = CA
> free articles viewed = 0
> </pre>

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

See that? Had your browser refused to accept the cookies, there is
nothing the website could have done to force the issue. It can't block
the browser for refusing the cookies, because the cookies are the only
reliable way to recognize the same browser coming back!

<aside>
    <strong>Note:</strong>
    there are a couple of other ways for a website to store data on
    your computer, but they all rely on the browser agreeing to do what
    the website asks. Please just read that in whenever I use the word
    "cookies."
</aside>

In fact, all browsers have a setting you can toggle to refuse cookies,
but it defaults to "accept," because these days, many websites just
won't work properly without cookies. You can make exceptions for
specific websites, but beyond that, you can't be selective. There's
no way for your browser to tell which cookies are in your interest and
which are against. That depends how the website uses the data, and your
browser is not a mind-reader.

## Making cookies consensual again

So for any given website, we've been stuck with all-or-nothing consent
for cookies. This was OK back in the day when cookies just provided
bonus enhancement features. But now that they often provide essential
functionality, the only way not to consent is not to visit the site at
all. This was the situation at the turn of the millenium. It so happened
the European parliament was about to pass some sweeping digital privacy
laws, which among other things, affect the use of cookies by anyone
anywhere, so long as the cookie recipient is in the EU.

I won't dwell on the legal specifics, because I probably have them
slightly wrong. But as far as I can tell, it began in 2009 with
something called the ePrivacy Directive, which introduced a distinction
between essential cookies (cookies that are technically necessary to
provide the requested service) and others (e.g. free article tracking,
ad personalization). The ePrivacy Directive required *some kind* of
consent for the use of non-essential cookies, but the wording was weak
enough that most folks making websites didn't take much notice.

Then in 2018, another batch of digital privacy laws, the GDPR (General
Data Protection Regulation) raised the standard of consent that applies
to this requirement. This is when I remember cookie consent messages
suddenly popping up on every major website like weeds. They tended to be
some polite variation of,

> We use cookies. They help us help you help us. If you don't like it,
> you're free to leave.

> <small>Also, by even looking at this message, you agree to anything we
> want, NO TAKEBACKS</small>

When you started seeing these messages, you probably had one of two
reactions. If you already knew how cookies work, as described above, you
thought, "Duh. That's the way things always were. It's so annoying to be
told over and over again."

On the other hand, if, like most people, you were unfamiliar with
cookies before, these messages simply added to the vague fear and
helplessness that already permeate so much of modern life. You got the
false impression that cookies are bad, abnormal, and paradoxically
ubiquitous and unavoidable -- like something between MSG and herpes.

You may have noticed that "you're free to leave" doesn't sound much like
genuine consent, especially if you need to access a website for
practical purposes (like your bank). Indeed, these pop-ups do not comply
with [EU laws](https://gdpr.eu/cookies/), especially this part:

> "Allow users to access your service even if they refuse to allow the
> use of certain cookies."

However, there's a pretty good reason it took folks running websites a
while to get compliant with this. It so happens that it's a big ask on a
technical level. The computer code running a website that asks your
browser to store some data was never written with the expectation that
it may have to be selective. Now new code must be written not only to
ask for the visitor's consent, but to ask the browser to store that
consent (using -- what else -- a cookie), check the stored value in
every piece of code that uses cookies, and decide how to handle that
logic branch in this new world where some cookies may be set but not
others.

Did I mention that many, if not most, websites don't have their own
programmers? They rely on content management systems like Wordpress. For
those websites, it was literally impossible to comply with this law
until plugins were created to take care of this for them. For
organizations big enough to have their own programmers, compliance still
represented a daunting technical project. So in the meantime, everyone
tried to cover their butt.

## Pop-ups eventually get compliant -- to nobody's benefit

Eventually, most websites caught up to what they thought was required of
them. Nowadays, if you browse the web from the EU (or use proxy software
to make it look like you're in the EU), you will be constantly
interrupted by things you probably don't care about (so, the internet,
but moreso). Just about every major website will explain technical
details in its own way (often trying to be cute and on-brand), and give
you an overwhelming array of choices, the most natural reaction to which
is to click the big, shiny "accept business as usual" button so you can
just do what you came to do with the confidence that things will work
correctly.

Meanwhile, those of us outside the EU still mostly get the old-style,
"Cookies! Deal with it!" banners, though I'm not sure why. They aren't
remotely compliant with EU legislation, nor do they seem to be required
by any other jurisdiction. But forget it, I'm not a lawyer.

The point is, despite increasing compliance, the EU cookie laws have
created a mountain of busywork for folks who make websites without much
advancing the public interest. Billions of people learned that "cookies
are small text files stored on your computer," and then learned that
over and over until they were blue in the face.

A smaller demographic (mostly in the EU) have gained some control over
what cookies they accept. However, unless you have the extra time and
patience to figure out how to do this separately for each website you
visit, your only option is usually "accept everything." The consent
still isn't genuine, since accepting business as usual is easy, and
gaining any control is daunting.

Of course, this is by design. Most websites have a strong interest in
your accepting *all* cookies, even if it's just for analytics (so they can
observe visitor behaviour and make evidence-based design decisions). But
for many websites, their entire business model relies on serving
personalized ads. They will therefore make it as hard as legally
permissible to opt out of advertising-related cookies.

## There goes the neighbourhood

Now, even more recently, the UK Information Commissioner's Office (ICO)
published new guidelines for GDPR compliance that raise the standard of
consent even further. They made it explicit that all non-essential
cookies must be *opt-in,* and the button for opting in may not be
emphasized over the button for staying out.

Who do you know who would opt into ad personalization, or even
anonymized analytics? The interruptive nature of consent pop-ups means
most people will simply dismiss them in the fastest way possible. In
other words, the default settings are everything. They will apply to
99.9% of your visitors.

So at least for UK visitors, websites are effectively no longer allowed
to personalize ads. The extent to which they can analyze user behaviour
and make design improvements (either in their own or visitors' interests)
is limited.

Well, this looks a lot more like consent. Now the question becomes ...
is this a good thing? Sure, I resent ads following me between websites,
but unfortunately, many websites currently have no other source of
revenue. Sure, I don't like that my web browsing experience is often
used as part of an experiment to see which type of manipulative
behaviour can best increase conversion rates. On the other hand,
effective analytics tracking allows useful websites to become even more
useful, and it now seems to be illegal in the UK.

I'm not sure how the ICO's new guidelines will play out, but suffice to
say they make it almost as hard to be good as to be bad.

Where did this all go wrong?

## The "Do Not Track" experiment

The GDPR was introduced just as another digital privacy experiment
failed. Between 2009 and 2018, the internet standards community tried to
create a new, standard way for website visitors to opt out of being
tracked between websites for advertising or other non-essential
purposes. (It's this kind of tracking that results in your being
followed around the web by ads for whatever you've been searching for
recently.)

They proposed a special "Do Not Track" tag that browsers could send when
talking to websites. However, not everyone agreed on exactly what
behaviour should be changed in response to this tag. And obviously, some
pretty influential internet companies had a vested interest in
preventing very many people from using it. The experiment ultimately
failed due to a lack of clarity and legal force.

See what happened there? First there was a technical standard that
lacked legal force. Then there was a law that lacked technical
standardization. Both missed their mark somehow. Hmm.

## A holistic solution

If we really want to give people control over what data websites can
store on their computers, we need international legislation working
together with a new technical standard.

Easy, right?

But imagine if you could adjust your browser setting thus: "I'm OK with
essential cookies, preference cookies, and analytics cookies, but not
with advertising cookies. Oh, except for CBC.ca, their advertising
cookies are OK. 🇨🇦😁"

* No more getting interrupted for each new website you visit: set up
  your browser however you want and then forget about it.
* No more figuring out a new interface for each new site, no more
  fighting that interface because it's not designed in your
  interest: use your browser's interface, which is designed to be easy
  to use and take your side.
* No more duplicated busywork for programmers to make websites ask for
  consent, store the response, and check the response in every code
  path. Cookies were always a matter of consent: just ask the browser to
  store some data, and it will either accept or refuse, according to the
  user's wishes.

To enable the browser to make that choice, one key thing needs to
change. Let's go back to that conversation above, between the browser
and `action-news-world.com`. The server says,

> **Server:** ... OK, got that page for you. Also, can you hold these for me?

Now spot the difference:

> <pre>
> font size = 14           (preferences)
> temp unit = C            (preferences)
> visitor ID = ABC123      (advertising)
> country code = CA        (analytics)
> free articles viewed = 0 (paywall)
> </pre>

And now the browser can say,

> **Browser:** OK, my user is willing to accept preference and analytics
> cookies, but not advertising or paywall cookies. I won't bother
> storing those `visitor ID` and `free articles viewed` things.

> **Server:** Well, gee shucks.

In addition to simply asking to store bits of data, the server has
described the purpose of each datum in terms of a set of categories that
the browser can match up with its user preferences.

For that matching to happen, we need a technical standard. To
incentivize the people who program the server to use those categories
truthfully, we need a law. Problem solved (you know, other than the 999
details that would need to be worked out).

## Sounds good, but ... does it solve the right problem?



<?php T::markdown_end() ?>

<?php
T::article_foot(['/cookies/#sub-questions' => "Other sub-questions"]);
T::foot();



/*

- when websites implement it, the only way to remember you want to opt out of certain cookies is to set another cookie
- when websites implement it, they can design them in such a way as to go against the spirit of the legislation,
making it more natural to just click OK. even very thorough consent interfaces are overwhelming and don't speak to the user
about what they care about.
- it's annoying for the user that even more of the web browsing
  experience now consists of getting rid of interruptions. it would be much better to set your preferences once (in your browser settings), and be done with it. instead, we just treat consent popups the way internet users have treated all kinds of web popups since the beginning of time: get rid of them as quickly as possible. and that's great for companies that want to mine your data, because the quickest way to get rid of these popups always constitutes "consent."
- it makes it seem like cookies are exceptional or pernicious
- if we're going to attack the internet's primary business model (individualized advertising), we should work on establishing a new model (a standardized system for voluntary micropayments?)

*/
