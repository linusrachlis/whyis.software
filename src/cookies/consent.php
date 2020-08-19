<?php
$title = "Okay wise guy, if the new cookie popups don't result in genuine informed consent, what would be better?";
T::head($title);
T::article_head($title, ['/cookies/' => 'What are cookies?']);
?>

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
reliable way to recognize the same browser coming back! TK

In fact, all browsers have a setting you can toggle to refuse cookies,
but it defaults to "accept," because many websites just won't work
properly without cookies. And for the most part, it's not possible for
your browser to be selective, because there's no way for it to tell
which cookies are in your interest and which are against. That depends
how the website uses the data, and your browser is not a mind-reader.

So for any given website, we've been stuck with all-or-nothing consent
for cookies, and since cookies are sometimes essential functionality,
the only way not to consent is not to visit the site at all.

It seems like this is where the EU's new laws were supposed to come in.
As [described here](https://gdpr.eu/cookies/), they contain two key
concepts that would improve the above situation:

1. Distinguish "strictly necessary" cookies (i.e. essential website
   functionality) from other kinds of cookies. Consent is not required
   for the use of strictly necessary cookies, only other kinds.
2. "Allow users to access your service even if they refuse to allow the
   use of certain cookies."

Now when's the last time you saw a cookie consent popup with that kind
of nuance? For me, basically never. They tend to be some polite
variation of, "We use cookies. They help us help you help us. If you
don't like it, you're free to leave." I'm no legal expert, but I feel
like most popups don't actually fulfill the EU's legal requirements, and
instead are hasty attempt to mitigate the risk of getting slapped with the
full-on, "you completely failed" fine.

## OK, so the consent popups are garbage, but it's the fault of lazy webmasters and not EU lawmakers?

<?php

/*

Kind of, but the laws should have been integrated into technical standards.

the problem is basically no one does this part:

it's just "by conitnuing you accept" and it's all or nothing.

1) it'd be stupid for each website to build its own interface for deciding
what types of cookies to accept
2) in order for the choice to be made in your browser, we'd need a new standard
for announcing the type of each cookie, and legal force to require truthful use of it.
3) cookies are no longer the only way to store data client-side

*/

?>

<?php T::markdown_end() ?>

<?php
T::article_foot(['/cookies/#sub-questions' => "Other sub-questions"]);
T::foot();
