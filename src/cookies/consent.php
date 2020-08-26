<?php
$title = "If the new cookie popups don't result in genuine informed consent, what would be better?";
T::head($title);
T::article_head($title, ['/cookies/' => 'What are cookies?']);
?>

<?php T::markdown_begin() ?>

Historically, cookies were always a matter of consent. Even today, when
you visit, say, some news outlet's website, your browser (a program
running on your computer) has a brief conversation with the server (the
program running on a remote computer that houses the website). It goes
something like this:

> **Browser:** Hi `action-news-world.com`, I guess my user is in the mood
> for sadness, because they're requesting the international news page.
> Please send that over.

> **Server:** Kinda busy here, hold on ... OK, got that page for you.
> Also, can you hold these for me?

> <pre>
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

In fact, all browsers have a setting you can toggle to refuse cookies,
but it defaults to "accept," because these days, many websites just
won't work properly without cookies. You can make exceptions for
specific websites, but beyond that, you can't be selective. There's
no way for your browser to tell which cookies are in your interest and
which are against. That depends how the website uses the data, and your
browser is not a mind-reader.

> Note: there are a couple of other ways for a website to store data on
> your computer, but they all rely on the browser agreeing to do what
> the website asks. Please just read that in whenever I use the word
> "cookies."

## The existing cookie consent broke down

So for any given website, we've been stuck with all-or-nothing consent
for cookies. This was OK back in the day when cookies just provided
bonus enhancement features. But now that they often provide essential
functionality, the only way not to consent is not to visit the site at
all.

The GDPR (the EU's 2018 digital privacy law) has a lot to say about
cookies, as [described here](https://gdpr.eu/cookies/). It contains two
key concepts that would improve the above situation:

1. Distinguish "strictly necessary" cookies (i.e. essential website
   functionality) from other kinds of cookies (e.g. free article
   tracking). Consent is only required for use of the latter.
2. "Allow users to access your service even if they refuse to allow the
   use of certain cookies."

Now that's not the only law that's applicable here. There's also 2009's
ePrivacy Directive, along with some most recent enhancements out of the
UK's ICO (Information Commissioner's Office). The more you try to
understand this stuff, the more confusing it gets.

But as far as I can tell, folks running websites were slow to catch up
with the new laws, and understandably so. The changes they demand are
daunting. In order to fully comply, many websites would have to both
hire programmers to make changes and also re-think their whole business
model. So instead of real changes, the first thing we started seeing was
pop-up messages along the lines of, "We use cookies. They help us help
you help us. If you don't like it, you're free to leave." This only
served to reiterate the way things already were. Except that everyone
who didn't know what cookies were before (i.e. most people) now has the
false impression that they are bad, abnormal, but also ubiquitous and
unavoidable: somewhere between MSG and herpes.

---

## OK, so most consent popups are garbage, but it's the fault of lazy webmasters and not EU lawmakers?

While it might be nice if all websites gave you an informed choice about
what kinds of cookies to accept, fulfilling that requirement under the
current situation would result in a lot of duplicated effort for folks
running websites. To be meaningfully compliant, you have to implement a
system to inform the user about all the cookies you use and what purpose
they serve (i.e. strictly necessary, preferences, statistics, marketing,
etc.), design a user interface to display this information and allow the
user to select which cookies they are willing to accept, store the
user's preferences, and then retrieve and follow those preferences in
all parts of your application code that interact with cookie data.

And that's assuming you even know how to do that. Many people running
websites are not software developers, but are using software like
Wordpress or Drupal as a turn-key solution. They rely on third-party
plugins to provide extra features. Indeed, I'd wager most cookie consent
popups you see are provided by such plugins, and that's part of the
reason they lack nuance to the point of meaninglessness. The code that
runs them was written with no specific knowledge of the particular
website on which it would be used, and the people running the website
may not even understand what cookies are.

It's like a Toronto restaurant that only offers dishes shipped in from Russia with no label. But you know, it's fine because they say, "All our
It's all or nothing, and good luck getting genuinely informed.

## The "Do Not Track" experiment

The new EU legislation was introduced just as another e-privacy
experiment failed. Between 2009 and 2018, the internet standards
community tried to introduce a new, standard way for website visitors to
opt out of being tracked between websites for advertising or other
non-essential purposes. (It's this kind of tracking that results in your
being followed around the web by ads for whatever you've been searching
for recently.) The experiment ultimately failed due to a lack of clarity
and legal force.

See what happened there? First there was a technical standard that
lacked legal force. Then there was a law that lacked technical
standardization. Both failed to achieve their goals. Hmmm.

(Keep in mind that cookies are just one part of the EU legislation. I'm
not informed about the rest of it.)

## A holistic solution

If we really want to give people control over what data websites can
store on their computers, we need international legislation with an
integrated technical standard.

Easy, right? But imagine if you could adjust your browser setting thus:
"I'm OK with strictly necessary cookies, preference cookies, and
statistics cookies, but not with marketing cookies. Oh, except for
CBC.com, their marketing cookies are OK."

First of all, you need a technical standard so that, when websites ask
to store data on your computer, they must specify the purpose at the
code level, in terms of some set of categories. Then you need
legislation to provide enough incentive to do this truthfully. Then your
browser can accept or reject cookies on your behalf with confidence.

The key here is that it's up to software developers to adhere to the new
technical standard, but they don't have to do a lot of busywork to
develop new user interfaces for preferences that should just be part of
the browser itself. And as always, it's up to browsers to accept or
reject cookies -- but now they can do so with more nuance. Non-technical
folks running websites are no longer caught in the middle between
systems that don't know how to talk to each other.

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

*/
