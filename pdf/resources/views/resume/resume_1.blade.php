<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>{{ $name ?? 'John Doe' }} – Resume</title>


    <style>
        /* fonts */
        @font-face {
            font-family: 'Latin Modern Roman';
            src: url('/fonts/lmroman/lmroman10-regular.ttf') format('truetype');
            font-weight: 400;
            font-style: normal;
        }

        @font-face {
            font-family: 'Latin Modern Roman';
            src: url('/fonts/lmroman/lmroman10-bold.ttf') format('truetype');
            font-weight: 700;
            font-style: normal;
        }

        @font-face {
            font-family: 'Latin Modern Roman';
            src: url('/fonts/lmroman/lmroman10-italic.ttf') format('truetype');
            font-weight: 400;
            font-style: italic;
        }

        @font-face {
            font-family: 'Latin Modern Roman';
            src: url('/fonts/lmroman/lmroman10-bolditalic.ttf') format('truetype');
            font-weight: 700;
            font-style: italic;
        }

        html,
        body {
            height: 100%
        }

        body {
            margin: 0;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            color: #111;
            font: 15px/1.45 "Latin Modern Roman", serif;
            background: #fff;
        }

        @page {
            size: A4 portrait;
            margin: 20mm;
        }

        .page {
            margin-top: -40px;
            padding: 0;
            box-shadow: none;
            background: #fff;
        }

        /* Header */
        .name {
            font-size: 36px;
            text-align: center;
            margin: 0 0 8px 0;
            letter-spacing: .2px;
            font-weight: 700;
        }

        .title {
            font-size: 20px;
            text-align: center;
            margin: -10px 0 12px 0;
        }

        .contact {
            text-align: center;
            font-size: 14px;
            color: #222;
        }

        .contact a {
            color: inherit;
            text-decoration: none
        }

        .contact .row {
            margin: 2px 0
        }

        .thin-sep {
            color: #666;
            padding: 0 8px
        }

        /* Sections */
        .section {
            margin-top: 22px
        }

        .section-title {
            font-variant-caps: small-caps;
            letter-spacing: .8px;
            font-weight: 700;
            color: #111;
            margin: 18px 0 6px;
            border-bottom: 1px solid #111;
            padding-bottom: 2px;
        }

        p {
            margin: 8px 0
        }

        ul {
            margin: 6px 0 8px 1.15rem;
            padding: 0
        }

        li {
            margin: 3px 0
        }

        .small {
            font-size: 14px
        }

        .tiny {
            font-size: 13px
        }

        .muted {
            color: #4a4a4a
        }

        .font-bold {
            font-weight: 700
        }

        .item {
            margin-bottom: 10px;
            width: 100%
        }

        .role,
        .edu-degree,
        .pub-title,
        .proj-title {
            font-weight: 700
        }

        .subtle {
            color: #333
        }

        .entry-head {
            display: flex;
            align-items: flex-start;
            /* top align */
            gap: 16px;
            flex-wrap: nowrap;
        }

        .entry-head .left {
            flex: 1 1 auto;
            min-width: 0;
            overflow-wrap: anywhere;
            margin: 0;
            line-height: 1.35;
        }

        .entry-head .right {
            flex: 0 0 auto;
            margin-left: auto;
            white-space: nowrap;
            text-align: right;
            line-height: 1.35;
        }
        a {
            display: inline-block;
        }

        
    </style>
</head>

<body>
    <main class="page" role="main" data-browser-style="margin-top:0px"; >
        <h1 class="name">{{ $name ?? 'John Doe' }}</h1>
        <h3 class="title">Professional title</h3>

        <div class="contact small">
            <div class="row">
                <span>Your Location</span>
                <span class="thin-sep"> | </span>
                <span>{{ $email ?? 'youremail@yourdomain.com' }}</span>
                <span class="thin-sep"> | </span>
                <span>{{ $phone ?? '0541 999 99 99' }}</span>
                <span class="thin-sep"> | </span>
                <span>yourwebsite.com</span>
            </div>
            <div class="row">
                <span>linkedin.com/in/yourusername</span>
                <span class="thin-sep"> | </span>
                <span>github.com/yourusername</span>
            </div>
        </div>

        <section class="section">
            <h2 class="section-title" style="margin-top: -5px;">Education</h2>

            <div class="item">
                <div class="entry-head">
                    <div class="left edu-degree"><span class="font-bold">University of Pennsylvania</span>, BS in Computer Science</div>
                    <div class="right subtle font-bold" style="margin-top: -20px;" data-browser-style="margin-top:0px";>Sep 2000 – May 2005</div>
                </div>
                <div class="left" style="margin-top: -5px;">Location</div>
                <div class="tiny muted"><span class="font-bold">GPA</span>: 3.9/4.0 (a link to somewhere)</div>
                <div class="tiny"><span class="font-bold">Coursework</span>: Computer Architecture, Comparison of Learning Algorithms, Computational Theory</div>
            </div>
        </section>

        <section class="section">
            <h2 class="section-title" style="margin-top: -5px;">Experience</h2>

            <div class="item">
                <div class="entry-head">
                    <div class="left role"><span class="font-bold">Software Engineer</span>, Apple – Cupertino, CA</div>
                    <div class="right subtle font-bold" style="margin-top: -20px;" data-browser-style="margin-top:0px";>June 2005 – Aug 2007</div>
                </div>
                <ul>
                    <li>Reduced time to render user iBuddy lists by 75% by implementing a prediction algorithm against backend.</li>
                    <li>Integrated iChat with Spotlight Search by creating a tool to convert iChat information stored with transcripts and saved chat logs.</li>
                    <li>Redesigned the file format and implemented backward compatibility for search.</li>
                </ul>
            </div>

            <div class="item">
                <div class="entry-head">
                    <div class="left role"><span class="font-bold">Designer</span>, iChat – Apple</div>
                    <div class="right subtle font-bold" style="margin-top: -20px;" data-browser-style="margin-top:0px";>June 2003 – Aug 2003</div>
                </div>
                <ul>
                    <li>Designed a UI for the iOS given file switcher (ChiTab) and extended it to tool windows.</li>
                    <li>Converted our code generation script across VS and Xcode, enabling improvements via caching.</li>
                    <li>Wrote a research paper and created fast I/O parsers with add-ins, optimizing to O(n) over O(n^2) to O(n log n).</li>
                    <li>Constructed an automatic generation of test data from random XML docs from XML Schema.</li>
                    <li>Built tools to scrape the presentation and transform datasets from legacy systems using SQL and Perl scripts.</li>
                </ul>
            </div>
        </section>

        <section class="section">
            <h2 class="section-title" style="margin-top: -5px;">Publications</h2>
            <div class="item">
                <div class="entry-head">
                    <div class="left pub-title">3D Finite Element Analysis of No-Insulation Coils</div>
                    <div class="right subtle font-bold" style="margin-top: -20px;" data-browser-style="margin-top:0px";>Jan 2004</div>
                </div>
                <div class="tiny">Frodo Baggins, <strong>John Doe</strong>, Samwise Gamgee</div>
                <div class="tiny">10.1109/TASC.2023.3304468</div>
            </div>
        </section>

        <section class="section">
            <h2 class="section-title" style="margin-top: -5px;">Projects</h2>

            <div class="item">
                <div class="entry-head">
                    <div class="left proj-title">Multi-User Drawing Tool</div>
                    <div class="right" style="margin-top: -20px;" data-browser-style="margin-top:0px";><a href="https://github.com/yourusername">github.com/yourusername</a></div>
                </div>
                <ul>
                    <li>Developed a networked classroom where multiple users can simultaneously view and draw on a “chalkboard”.</li>
                    <li>Each person’s edits synchronize.</li>
                    <li>Tools Used: C++ , MPC</li>
                </ul>
            </div>

            
        </section>
    </main>
</body>
<script>
  // run in browser only
  document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('[data-browser-style]').forEach(function(el){
      el.style.cssText += el.getAttribute('data-browser-style');
    });
  });
</script>


</html>