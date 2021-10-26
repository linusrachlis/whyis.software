<?php T::head("Facebook's outage and the Internet") ?>

    <header class=article>
        <h1><a href="/">Why is software?</a></h1>
    </header>

    <article class=body-text>
        <h2>
            Facebook's outage: what happened, and what is the Internet
            anyway?
        </h2>
        <?php T::markdown_begin() ?>

Is the Internet a series of tubes? What really happens when you connect
to Facebook, or any other website? Does the signal have to go to space?
Is that why some things are called "the cloud?" Somewhere out there,
Facebook lives on a powerful computer (in fact, thousands of them). How
does your computer talk to it, and then hear back?

The "series of tubes" image got a bad rap, but it's not inaccurate (it's
just that the argument behind it was silly). Actually, these days, the
first tube is usually air: radio signals between your computer or phone,
and a router. You know what a router is, it's that thing with antennas
that you restart when the Internet's down. When you go to restart it,
you can see the first real "tube," going out the back of it, through
your wall, and into a Rogers or Bell box outside. Another tube comes out
of that and either into the ground, or up to join the other wires connecting
the utility poles. Okay -- do Rogers or Bell eventually send the signal to
space?

Nope. The cloud is a lie. It's tubes all the way down -- all the way
from your house to Facebook. Yes, the sheer amount of tubing in the
world blows my mind, too. Although if you think about it, the amount of
tubing was already ridiculous pre-Internet. Just think of the power
grid. Or, for that matter, telephone and TV cables, on which the
Internet began its mainstream existence.

### Anyway, so what happened to Facebook on October 4? Did somebody cut their tube?

No, but let's back up to a different question first. If it's tubes all
the way down, that sounds like a mess. You might have this image of a
world covered in spaghetti, except the spaghetti is network cable. If
you're on Facebook right now, that means there is some path from your
individual computer, through all those criss-crossing cables, to one of
Facebook's computers, and back again. How does the signal know what path
to take? Why doesn't it get lost?

Okay, *one more* sub-question, and then I promise we'll start digging
up. Who owns all those cables? Well, what's your first guess? The
government? Rogers? Bell? ... Facebook?

The answer is yes. The government owns some of them. Rogers and Bell own
some. And Facebook's connectivity needs are such that they also run a
bunch of their own cables. You may have heard the Internet described --
as the name implies -- as a network of networks. There are governmental
networks, there's the Rogers and Bell networks, and there's the Facebook
network. But you're not on the Facebook network; you're on your home
network, or a Starbucks network or something. So how do you talk to
Facebook? We've made it back up to the path-finding question. How does
your signal find its way to Facebook?

Well, it doesn't just go through a bunch of cables and magically know to
take the third left, then two rights, and straight on until morning.
Signals know nothing; they just propagate through the wire. The journey
is taken in smaller steps.

### How to get to Facebook: well, they have their own highway exit

The first couple of steps are no-brainers. When your computer wants to
talk to *anything* on the Internet, the first step is always the same,
because physically, your computer is only connected to one other thing.
It says to your router, "here's some data for Facebook." Your router is
also only connected to one other thing: that cable going through the
wall. It says into that cable, "here's some data for Facebook." After
passing through that Rogers or Bell box on the side of your building, it
goes into the ground, and after joining up with signals from your
neighbours, and after *those* signals join up with *other*
neighbourhoods' signals, it's received by a router (yes, just like the
one in your living room, but more cables and no antennas) owned by
Rogers, or Bell, or Teksavvy, which must now make an actual decision.
It's received some data bound for Facebook on one of its cables. It has
a bunch of other cables coming out, which are connected to other
routers. Which one leads to Facebook?

Actually, in Facebook's case, this is probably a simple decision. Like I
said, Facebook has a huge network of their own; they probably run more
of their own cable than many telecom companies. If you live in a major
city, Facebook probably has its own cable plugged directly into one of
your Internet service provider's routers, so "Which way to Facebook" is
an easy question: "Through the 'Facebook' cable!" The Rogers router
forwards your signal into the "Facebook" cable, and what happens from
there is up to Facebook's network engineers. Your signal is now in
Facebook's network.

### Something more adventurous

So the Facebook example is actually not great for explaining the
Internet in general. What does it look like when the decision is less
simple? Maybe you're not in a major city. And maybe you're not talking
to Facebook; maybe you're downloading a paper from the website of the
University of Delhi. In this situation, you can actually see the magic
of the Internet.

The first few steps are the same. Your signal ends up on a router in
e.g. the Rogers network, and that router has a bunch of cables coming
out, but obviously, none of them leads directly to the University of
Delhi's network. Nevertheless, this router only has to know what the
next step is.

In its memory, the Rogers router has a phone book. The numbers aren't
phone numbers, but they're still just numbers. Imagine the number for
the University of Delhi's website is 1234567890. All this Rogers router
has to know is, "For all numbers starting with '123,' I pass them onto
cable 5." In this case, cable 5 may well lead to another Rogers router,
closer to a major city. After some number of these steps, the signal may
reach, say, the Toronto Internet Exchange. An Internet exchange is a
place where Internet companies exchange signals when they themselves
can't take the signal where it needs to go. They usually have to pay to
connect to an exchange. What is an exchange, really? A whole bunch of
routers! Also, so many tubes.

But wait, how did Rogers know to send your signal to the exchange? Were
they just hoping for the best? No, it's because *another* Internet
company on that exchange -- let's call them Coast2Coast -- had their
own router plugged into a bunch of others, including the Rogers one. The
Coast2Coast router was advertising to anyone listening, "I can handle
signals bound for computer numbers starting with '123.'" "Great!" the
Rogers router said, "here you go!"

A bit strange, right? Rogers just trusted them. It had no way to be sure
it wasn't false advertising. But there is the incentive that falsely
advertising which computers you can reach may ruin a company's
reputation and get them kicked off the exchange.

In this made-up example, suppose computer numbers starting with '123'
are all in India. In that case, your signal and all others bound for
'123' numbers will somehow make their way, step by step, to one of the
transatlantic communications cables, under the ocean, through some of
Europe, and finally to India. At this point, an Indian Internet service
provider may receive the signal -- again, because *its* router
advertised the ability to deliver signals bound for '123' numbers. Now
it may look at the '4567' part and say, "ah, that goes to cable 11."
Why? Because the University of Delhi has a router plugged into cable 11
saying "I can handle '4567' numbers!" Now your signal is in their
network, and it's up to them to figure out the '890' part.

By the way, your computer also has a number -- maybe it's 1029384756.
After your signal finally reaches the computer with the paper on it that
you wanted to download, that computer will say to its router, "Here's
some data for 1029384756." When the signal gets back to the Indian ISP,
their router will know which cable to put signals on that are bound for
'102' numbers, and the whole process will go in reverse.

### Okay, I promise this is relevant to what happened to Facebook.

If you're thinking that this sounds a lot like how phone numbers have
country codes and area codes, and is even reminiscent of how mailing
addresses have postal codes, you're spot-on. The principle is the same:
at each step in the journey, someone or something is holding the thing
to deliver, and only has to know where to hand it off next. What makes
the Internet different is that conditions are always in flux, and
routers are constantly re-evaluating where's the best place to make the
next hand-off.

What happens if the Toronto Internet Exchange has a bad day and loses
power? What if a shark chews on one of the transatlantic cables? (Okay,
they're probably designed to be shark-proof, actually. But still,
erosion could be a thing.) Well, there's normally more than one route to
get from A to B.

At first, from your computer, there's just one way to go -- but at many
of the steps along the way, it's not actually so simple as, "Cable 5
handles numbers starting with '123.'" It's more like, "Cable 5 is *best*
for numbers starting with '123.' Cable 25 can also do it, but that's a
longer way around (maybe it goes through New York first). Actually,
cable 2 is the fastest for '123' numbers, but that way goes through the
Fancy Pants Internet exchange, and they're too expensive if there's
another option."

If the Toronto Internet Exchange lost power, the Rogers router could use
one of the other options. But less drastic events could also result in
choosing different routes. In this example, Coast2Coast had the only
router on the Toronto exchange that could handle '123' numbers. Maybe
they need to do some maintenance, so they simply stop advertising that
they can handle *any* numbers. The Rogers router on the exchange notices
this, and in turn, stops advertising that *it* can handle '123' numbers,
since it lost its only way of doing that. The Rogers router in the small
town notices *that*, and now it sends '123' signals through cable 25
instead.

Later on, Coast2Coast reboots their router, it starts advertising for
'123' numbers again, the Rogers router on the exchange notices *that*,
the small town router notices *that*, and *it* can now use cable 5 again
for '123' numbers. This adaptive resilience is the Internet's greatest
strength -- but it also gets complicated.

### Finally, the problem

If you run a network that's part of the Internet -- like Rogers, Bell,
or indeed, Facebook -- your routers not only advertise whether or not
they can handle a given range of numbers, but for a given range, you
also qualify *how* you can handle it with a bunch of metadata, so that
routers considering passing a signal to you can make informed decisions.
Conditions change -- you add new routers to your network, you remove
other routers for maintenance. You're making frequent changes to the
complex set of information about exactly what connectivity you're
advertising. It's easy to make the wrong change by accident, and when
you do, it cascades quickly through the world, just like the right
change would have.

Facebook didn't release all the specifics of what happened, but they
basically explained that on Monday, they had some maintenance to do on
part of their network. Totally normal situation, the plan was simply to
reconfigure things so that this *one part* of Facebook's network will
stop advertising that it can handle anything. Due to the natural
resilience of the Internet, signals should simply take another path in
the meantime. Facebook's network has enough redundancy for this.

But, oops. The new configuration had a mistake that somehow cascaded
through Facebook's network. One router would stop advertising the
ability to reach *anything*, and the next router would notice that,
dutifully stop its *own* advertising, and so on. Probably within
seconds, this cascade made it out to all the entry points of Facebook's
entire network.

For example, just like we made up that '123' numbers are reserved for
India, let's say Facebook owns all computer numbers starting with
"555." Facebook has a router plugged into the Rogers data centre in
Toronto constantly saying, "I'm the best at handling '555' numbers, so
gimme those signals!" They have another one at the Bell data centre
saying the same thing. They probably have another one at the Toronto
Internet Exchange. And it's the same all over the world -- wherever
it's worth their while to run cable. Any data bound for Facebook, even
from a remote, small-time network, sniffs its way along to the next
router that can handle '555,' then the next, then the next, until it
finally enters Facebook's network. But on Monday, within a few minutes,
every router in the world learned that *no one* could reach '555'
anymore. As far as all Internet infrastructure was concerned, Facebook
-- along with everything else on its network, such as Instagram and
WhatsApp -- was not a thing anymore.

What made this an especially bad day for Facebook was that the person
who made this mistake -- sent this new configuration to part of their
network -- did so remotely, *through the Internet*. The ability to make
the change depended on Facebook's network being reachable, and the
change made the network unreachable. This is exactly like locking your
keys in your car.

Facebook's only option was to send engineers physically on-site to a
data centre, so they could access these computers that were effectively
no longer on the Internet, and correct the configuration. After that,
Facebook's network started advertising for '555' again, and Rogers
noticed, Bell noticed, etc. It sounds like there may also have been some
trouble due to some of the data centre's security measures being
Internet-based. I haven't seen that confirmed, but maybe the regular
smart locks or whatever were inoperable, since they were on Facebook's
network, but only designed to be accessed through the Internet. In that
case they'd presumably have a backup way to get in, but maybe the people
who needed to know about it didn't know. I'm sure the post-mortems will
continue for weeks.

Whoever made the original bad change, I hope they don't lose their job.
It's unlikely they were particularly negligent. When it comes to complex
computer systems, mistakes this spectacular are usually like someone
being told to keep the birthday cake lit in a room that no one realized
was also being used for gunpowder storage. Sure, you can screw up
lighting candles and you might burn yourself or ruin the cake. But
eventually, the inevitable explosion happens, and it wasn't the fault of
whoever was lighting the candles that day. Why was all the gunpowder
stored there? That sounds a miscommunication, a gap in process, a
leadership issue, etc.

The Internet is a crazy concept, and what makes it crazy is that it's
really kind of mundane -- just lots and lots and lots of cables -- but
somehow it does what it does. If you're a little bit tech savvy, you may
have at some point run a network cable in your home. You may have gazed
into the spaghetti of cables behind your desk at the office and felt
bewildered. Okay, at some point you've probably at least run an
electrical extension cable from one room to another, and thought, "This
is not a great idea."

Now you know that the entire Internet is basically that, but a bit
better organized. It's still disorganized enough that weird things can
happen. A botched censorship attempt by the government of Pakistan once
made YouTube unreachable for the entire world. Surprisingly, it's hard
to entirely prevent that kind of thing, and it's because, in a network
of networks, you have to have some trust; otherwise you won't have
enough people to connect with. Trust and sharing are deep in the
Internet's DNA. Compared to 30 years ago, our demands on it have
evolved, and for most regular people, it looks more like a place where
customers go for commodities than a network where equals exchange
information. But to me, it's unclear how far that evolution can really
go, since it goes against the Internet's deeper nature.

### Notes

I intentionally avoided technical jargon in the above, but if you want
further reading, here's what to look up:

-   <a href="https://en.wikipedia.org/wiki/IP_address">IP addresses</a>:
    Like phone numbers, but for computers on the Internet
-   <a
    href="https://en.wikipedia.org/wiki/Autonomous_system_(Internet)">Autonomous
    System</a>:
    A network that's part of the internet, like Rogers, Facebook, etc.
-   <a href="https://en.wikipedia.org/wiki/Border_Gateway_Protocol">Border
    Gateway Protocol</a>:
    The system for routers to advertise what addresses they can handle
-   I used the word "signal" a lot, but data actually travels over a
    network in discrete chunks called
    [packets](https://en.wikipedia.org/wiki/Network_packet).
-   Read about the [2008 Pakistan/YouTube
    incident](https://www.cnet.com/news/how-pakistan-knocked-youtube-offline-and-how-to-make-sure-it-never-happens-again/)

### Addenda

-   actually, not all facebook's routes stopped being advertised, just
    the ones for their DNS servers :D [Why was Facebook down for five
    hours?](https://www.youtube.com/watch?v=-wMU8vmfaYo&amp;list=WL&amp;index=3)
    near the end of the video he shows a spreadsheet of routes he
    saved during the outage

        <?php T::markdown_end() ?>

    </article>
<?php
T::foot(false);
