<?php
T::head('What are cookies, and why does every website make me agree to them?');
?>

    <header>
        <h1><a href="/">Why is software?</a></h1>
    </header>

    <article>
        <h1>What are cookies, and why does every website make me agree to them?</h1>

        <p>Any website you visit can request that your computer store some data, and for silly reasons the technical
            term for this data is “cookie.” The data can be anything, and for a set time, your computer will present the
            stored data back to the website on subsequent visits. A cookie is often just a random number that's used to
            identify you during your visit, and match you up with your profile data permanently stored on the website.
            But in principle, a cookie can be anything, such as preferences you've selected (e.g. Celsius vs.
            Fahrenheit), number of free articles you've viewed, etc.

        <p>Websites have used cookies exuberantly for decades, but in 2018 the EU passed new privacy laws that have been
            widely interpreted to require websites to obtain consent for the usage of most cookies. Most websites are
            globally available, and therefore available to EU citizens, and therefore subject to these laws. This has
            resulted in yet another pop-up we all have to dismiss or ignore to get at the actual website we came to
            visit, without becoming genuinely informed or giving meaningful consent. (The confusing nature of the laws
            themselves is not helpful, although they are well-meaning, and are about much more than just cookies. For
            more, see the <a href="https://gdpr.eu/cookies/">official word</a> and an <a
                href="https://www.varonis.com/blog/differences-between-the-gdpr-and-privacy-directive/">unofficial
                interpretive article</a>.)

        <p>It’s worth noting that we’ve always had the option to disable cookies (i.e., to tell one’s browser to ignore
            websites’ requests to store data), but in that case many websites just won’t work. Like Javascript, cookies
            began as an optional feature that could enhance a website’s functionality. But due to the free evolution of
            the web, features designed as optional in theory often become mandatory in practice.

        <h2>Why does my browser have to present the same data again on every visit? Can’t the website just
            remember who I am?</h2>

        <details>
            <p>Nowadays, “documents on demand” describes only a narrow aspect of the web. A more general description of
                the modern web would be “software as a broadcast medium.” Even websites that are essentially document
                repositories still run code to track visitors’ behaviour, allow them to post comments, and serve them
                ads. Obviously, many modern websites care a great deal who each visitor is, and serve each visitor a
                personalized experience. So aspect (2) is no longer true, but with more and more activities moving
                online, aspect (1) is more true than ever.

            <p>If a website wants to build up extensive profile data for each visitor, a cookie is not allowed to hold
                enough data to accomplish this (there has to be a limit for the data size of a cookie; otherwise your
                hard drive could fill up indefinitely with the data websites have asked you to store). Besides, cookies
                are stored on your computer, whereas if a website is bothering to accumulate profile data for you, they
                would like to be in control of that data, and have it live with them. In this case, the website will set
                a cookie that just holds a large random number. Your computer presents this unique random number again
                on every visit, and the computer running the website can use it to look up your information in an
                internal database (and add to it) before deciding how to serve you. You may or may not have to enter a
                password to interact with your profile information, depending on the nature of the website. In the food
                catering analogy, this is like having a barcode on your lanyard instead of actual information. The
                catering staff can scan the barcode to pull up your profile, which could now be extensive because it
                doesn’t have to fit on a little card, only the barcode (representing a unique number) does.

            <p>Of course, another strategy would be to simply hire as many staff as attendees, so that each staff member
                only has to remember one person’s preferences, but this would be overly costly. It’s the same with a
                website serving visitors. Each time you visit a page, the computer running a website spends a little
                time and energy to figure out how to respond. After responding, it could in theory keep the line open
                just for you, so that it would genuinely remember who you are upon the next interaction. But there’s a
                limit to how many lines it can keep open at a time, so this strategy would quickly becomes infeasible
                for a busy website. It would be too complicated to have one way that busy websites work and another way
                for non-busy websites, so instead we all use the way that will keep working no matter how busy a website
                gets.
        </details>

        <h2>If cookies can be used to identify me, can I be anonymous if I disable cookies?</h2>

        <p>(Short answer: no.)

        <details>
            <p>If you use a regular web browser, you are never truly anonymous no matter what settings you use. Cookies
                provide a reliable way for a website to remember who you are, but there are many other quasi-reliable
                ways. This means if you disable cookies, a website can’t be absolutely sure who you are, but you’re
                still far from anonymous.

            <p>A website you visit still receives a lot of information other than cookies, the combination of which can
                still uniquely identify you. Just like if you don’t take an order number at the deli, you’re probably
                still recognizable by your face or your clothing. Without accepting cookies, you may lose the ability to
                log into the website, but you may still be trackable for, e.g., advertising purposes. Advertisers are
                comfortable with a 95% probability of your identity, whereas a login system needs certainty.
        </details>
    </article>
<?php
T::foot();
