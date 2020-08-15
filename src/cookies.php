<?php
T::head('What are cookies, and why does every website make me agree to them?');
?>

    <header>
        <h1><a href="/">Why is software?</a></h1>
    </header>

    <article>
        <h1>What are cookies, and why does every website make me agree to them?</h1>

        <p>Any website you visit can request that your computer store some data, and for silly reasons the technical term for this data is &ldquo;cookie.&rdquo; The data can be anything, and for a set time, your computer will present the stored data back to the website on subsequent visits. A cookie is often just a random number that's used to identify you during your visit, and match you up with your profile data permanently stored on the website. But in principle, a cookie can be anything, such as preferences you've selected (e.g. Celsius vs. Fahrenheit), number of free articles you've viewed, etc.</p>

        <p>Websites have used cookies exuberantly for decades, but in 2018 the EU passed new privacy laws that have been widely interpreted to require websites to obtain consent for the usage of most cookies. Most websites are globally available, and therefore available to EU citizens, and therefore subject to these laws. This has resulted in yet another pop-up we all have to dismiss or ignore to get at the actual website we came to visit, without becoming genuinely informed or giving meaningful consent. (The confusing nature of the laws themselves is not helpful, although they are well-meaning, and are about much more than just cookies. For more, see the <a href="https://gdpr.eu/cookies/">official word</a> and an <a href="https://www.varonis.com/blog/differences-between-the-gdpr-and-privacy-directive/">unofficial interpretive article</a>.)</p>

        <p>It&rsquo;s worth noting that we&rsquo;ve always had the option to disable cookies (i.e., to tell one&rsquo;s browser to ignore websites&rsquo; requests to store data), but in that case many websites just won&rsquo;t work. Like Javascript, cookies began as an optional feature that could enhance a website&rsquo;s functionality. But due to the free evolution of the web, features designed as optional in theory often become mandatory in practice.</p>

        <h2>Why does my browser have to present the same data again on every visit? Can’t the website just
            remember who I am?</h2>

        <details>
            <p>This may seem strange. Maybe you&rsquo;re imagining a real-life analogy where you&rsquo;ve met someone at a party who is having short-term memory trouble, and are having a surreal conversation:</p>

            <blockquote>
                <p><strong>Me:</strong> Hi, I&rsquo;m Linus. I&rsquo;m from Toronto and I&rsquo;m a software developer.</p>
                <p><strong>Him:</strong> Hi Linus. Nice to meet you. Tell me, why is software still so hard to use? Haven&rsquo;t you people been at this for decades? By the way, I&rsquo;ll forget who you are by the time you reply.</p>
                <p><strong>Me:</strong> Oh, no worries. So I&rsquo;m Linus. I&rsquo;m a software developer from Toronto. You just asked me why most software is so hard to use despite its being a decades-old discipline. I would, however, point out that decades is hardly very old for an engineering discipline. How long have we been at bridges, for example?</p>
                <p><strong>Him:</strong> Hi Linus. Thanks for catching me up. Now what I want to ask is, does the creation of software really qualify as engineering? From where I&rsquo;m sitting, most software looks very seat-of-the-pants compared to bridges.</p>
                <p><strong>Me:</strong> I&rsquo;d say there&rsquo;s a spectrum. It&rsquo;s true, much of the software people use is created quite casually, but at the other end, there&rsquo;s the software that controls rocket launches. I&rsquo;d call that engineering for sure.</p>
                <p><strong>Him:</strong> A spectrum of what? Who are you? Are you trying to sell me rockets?</p>
                <p><strong>Me:</strong> 🤦‍♂️</p>
            </blockquote>

            <p>The thing is, a one-on-one conversation isn&rsquo;t a great analogy for information flow when it comes to websites. Let&rsquo;s recall the web&rsquo;s original purpose: It&rsquo;s 1989. For most people, personal computers still aren&rsquo;t a thing, and if you want to read up on something, you go to the library and physically open a book. But for certain groups of scientists, reading and writing have become digital activities. The only problem is, digital text is still cooped up on individual computers, and must be shared either via physical printout or by explicitly making a digital copy to share. Tim Berners-Lee of CERN creates a digital-documents-on-demand system, and a document format that can embed links to other documents. The web is born.</p>

            <p>Compared with today&rsquo;s web, this original version is modest and stuffy. Today&rsquo;s web solves for a different problem than the original. Notice two key aspects of the original version, one of which is now more true, and the other less:</p>

            <ol type="1">
            <li>A website has a one-to-many relationship with visitors.</li>
            <li>A website is a repository of documents. For the most part, any visitor requesting the same document will be served in the same way.</li>
            </ol>

            <p>In this original version of the web, aspect (1) means, for the computer running a website, remembering individual visitors adds programming complexity and occupies system resources, and you don&rsquo;t even know who will actually return. Aspect (2) means this is a moot point: when a visitor requests &ldquo;document A&rdquo;, you send them &ldquo;document A&rdquo;; you don&rsquo;t care who they are or if they&rsquo;ve visited before.</p>

            <p>That&rsquo;s the basic design of the web, but the lack of continuity for visitors soon became an issue. I want websites to remember that I selected Celsius, or a larger font size. I want them to remember my VIP status without having to re-enter a password on every visit. And website creators want to be able to analyze which pages I visited, in what order, for how long &mdash; ostensibly so they can improve my experience. This requires my having a continuous identity from page to page.</p>

            <p>If a website has only a small amount of data to store, the simplest way is to put it in the cookie itself. If a website sets two cookies, &ldquo;temp unit = C&rdquo; and &ldquo;font size = 18,&rdquo; my browser will no longer merely say &ldquo;send me document A.&rdquo; It will now say &ldquo;send me document A, and by the way, temp unit = C and font size = 18.&rdquo; And then, &ldquo;send me document <em>B</em>, and by the way, temp unit = C and font size = 18.&rdquo; This is like being at an event with catered food, and wearing a lanyard with the code &ldquo;VGN, GF, AP.&rdquo; This could efficiently tell the catering staff that you are vegan and gluten-intolerant with a peanut allergy, without their having to re-interview you on every interaction. They still don&rsquo;t know who you are individually, but you constantly present all the information they need. Websites may use this strategy to store minor customizations and preferences.</p>

            <p>Nowadays, &ldquo;documents on demand&rdquo; describes only a narrow aspect of the web. A more general description of the modern web would be &ldquo;software as a broadcast medium.&rdquo; Even websites that are essentially document repositories still run code to track visitors&rsquo; behaviour, allow them to post comments, and serve them ads. Obviously, many modern websites care a great deal who each visitor is, and serve each visitor a personalized experience. So, in contrast to the original design of the web, aspect (2) is no longer true. But with more and more activities moving online, aspect (1) is more true than ever.</p>

            <p>If a website wants to build up extensive profile data for each visitor, storing this data in the cookie itself won&rsquo;t work. First, because cookies are limited in size, to protect visitors&rsquo; hard drive space. Second, each computer stores its own set of cookies. If you use your phone instead of your laptop, the same cookies will not be sent. Third, visitors can choose to delete cookies any time, destroying the data. If a website bothers to accumulate profile data on you, they would like to be in control of that data, and have it live with them. In this case, the website will set a cookie that just holds a large random number. Your computer presents this unique random number again on every visit, and the computer running the website can use it to look up your information in an internal database (and add to it) before deciding how to serve you. You may or may not have to enter a password to interact with your profile information, depending on the nature of the website. In the food catering analogy, this is like having a barcode on your lanyard instead of actual information. The catering staff can scan the barcode to pull up your profile, which could now be extensive because it doesn&rsquo;t have to fit on a little card; all that needs to fit is the barcode (representing a unique number).</p>

            <p>Of course, another strategy would be to simply hire as many staff as attendees, so that each staff member only has to remember one person&rsquo;s preferences, but this would be overly costly. It&rsquo;s the same with a website serving visitors. Each time you visit a page, the computer running a website spends a little time and energy to figure out how to respond. After responding, it <em>could</em> in theory keep the line open just for you, so that it would genuinely remember who you are upon the next interaction. But there&rsquo;s a limit to how many lines it can keep open at a time, so this strategy would quickly becomes infeasible for a busy website. It would be too complicated to have one way that busy websites work and another way for non-busy websites, so instead we all use the way that will keep working no matter how busy a website gets.</p>
        </details>

        <h2>If cookies can be used to identify me, can I be anonymous if I disable cookies?</h2>

        <p>(Short answer: no.)

        <details>
            <p>If you use a regular web browser, you are never truly anonymous no matter what settings you use. Cookies provide a reliable way for a website to remember who you are, but there are many other quasi-reliable ways. This means if you disable cookies, a website can&rsquo;t be absolutely sure who you are, but you&rsquo;re still far from anonymous.</p>

            <p>A website you visit still receives a lot of information other than cookies, the combination of which can still uniquely identify you. Just like if you don&rsquo;t wear your lanyard with the barcode, you&rsquo;re probably still recognizable by your face or your clothing. Without accepting cookies, you may lose the ability to log into the website, but you may still be trackable for, e.g., advertising purposes. Advertisers are comfortable with a 95% probability of your identity, whereas a login system needs certainty.</p>

            <p>Finally, if your internet service provider (e.g. Rogers) receives a court order, or if you live under an oppressive government, any internet activity can be traced back to the physical location you connected from. The only way around this is to use software like the Tor browser, which you may remember from such shows as Mr. Robot.</p>
        </details>

        <h2>My browser gives the option to block third-party cookies. What does that mean, and why would I want to?</h2>

        <p>Coming soon...</p>

        <h2>Okay wise guy, if the current cookie popups don&rsquo;t result in genuine informed consent, what would be better?</h2>

        <p>Coming soon...</p>
    </article>
<?php
T::foot();
