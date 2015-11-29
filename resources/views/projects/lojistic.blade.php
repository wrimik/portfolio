
<div class="accordion">
    <div class="accordion-title">
        Lead A Complete Rebranding
    </div>
    <div class="accordion-content">
        <p>In March of 2015, Source Consulting officially became &lsquo;Lojistic&rsquo;.
            To make this happen, my team and I spent 8 weeks rebranding every piece of
            collateral the company had and prepping things like the website and emails for the switch.
        </p>
        <p>We categorized every task in to 3 phases: pre-launch,
            launch day, and post-launch. Everything went off without a hitch and, surpringly,
            migrating the web site to a new domain actually helped our position on most
            of our targeted keywords.
        </p>
    </div>
</div>
<div class="accordion">
    <div class="accordion-title">
        Created Automated Billing Systems
    </div>
    <div class="accordion-content">
        <p>

        </p>
    </div>
</div>
<div class="accordion">
    <div class="accordion-title">
        Created Contract Management System
    </div>
    <div class="accordion-content">

    </div>
</div>
<div class="accordion">
    <div class="accordion-title">
        Created Commission Tracking System
    </div>
    <div class="accordion-content">

    </div>
</div>
<div class="accordion">
    <div class="accordion-title">
        Created Several Industry-Leading Tools
    </div>
    <div class="accordion-content">

    </div>
</div>
<h4>Projects</h4>
<h5>Company Website:</h5>

<p>
    <b>Overview:</b>
    The main focus of the creative team is the company's public website. Every few months
    we shift our goals to bring up any weak points. Some of our goals have included: code
    organization, site speed, search engine position, increasing conversions, integrating
    with our other platforms, and deploying industry leading tools.
</p>

<p>
    <b>Code Management:</b>
    This site was migrated to Laravel, Sass, and VueJS in an effort to keep the growing codebase
    organized and manageable. Server side concatination and minification of css and
    javascript files lets us use many files to organize our components, while keeping
    the number of client side requests as low as possible. A custom icon font library shifts
    most images on the site to a single light-weight font file. This eliminates the need for
    multiple variations of the same images, and
</p>

<p>
    <b>Site Speed:</b>
    Rather than using several size and color variations of the same images, we use fontforge
    to compile our icons into a single font file. We minify css and javascript files using
    gulp and use Cloudflare to minify html and manage caching.
</p>

<p>
    <b>Custom Tracking:</b>
    New features send diagnostic info and notifications through slack to the development team.
    Custom user events are posted to google analytics.
</p>
<hr/>
<h5>Audisee</h5>

<p>
    Audisee is a free tool that automatically finds recovery opportunities
    for our clients in about 120 seconds.
    Other companies take at least 2 weeks to do the same.
</p>

<p>
    UPS and FedEx invoices, containing up to 250 columns and and 120MB of data, are
    uploaded by the general public for auditing. In order to not take resources from
    the rest of the main site, the web server delegates the actual processing of this
    data to a secondary audit server.
</p>

<p>
    This audit server uses laravel, mysql, nodejs, and REST api to import the users data,
    scrape additional data from the carriers website (using some pretty cool multithreading
    headless-browsing nodejs stuff) and identify potentially recoverable charges.
</p>

<p>
    While this is happeneing, the web server estimates time to completion and animates the
    results in an engaging way.
</p>