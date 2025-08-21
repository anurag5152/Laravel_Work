<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>John Doe – Resume</title>
    <link rel="stylesheet" href="styles.css" />
    <link rel="stylesheet" href="{{ asset('css/resume.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Latin+Modern+Roman&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.3.3/dist/tailwind.min.css" rel="stylesheet">


</head>

<body style="margin-left:40px; margin-right:40px;" >

    <!-- <button id="download">Download PDF</button> -->
    <main class="page" role="main">
        <h1 style="font-size:36px;text-align:center;margin:0 0 8px 0;letter-spacing:.2px;font-weight:600;">
            John Doe
        </h1>
        <h3 style="font-size:24px;text-align:center;margin:0 0 8px 0;letter-spacing:.2px;font-weight:520;">
            Professional title
        </h3>

        <div class="contact small" style="text-align: center;">
            <div class="row">
                <span>Your Location</span>
                <span class="thin-sep"> | </span>
                <a href="mailto:youremail@yourdomain.com" style="color: #111; text-decoration: none;">youremail@yourdomain.com</a>
                <span class="thin-sep"> | </span>
                <span>0541 999 99 99</span>
                <span class="thin-sep"> | </span>
                <a href="yourwebsite.com" style="color: #111; text-decoration: none;">yourwebsite.com</a>
            </div>
            <div class="row">
                <a href="linkedin.com/in/yourusername" style="color: #111; text-decoration: none;">linkedin.com/in/yourusername</a>
                <span class="thin-sep"> | </span>
                <a href="github.com/yourusername" style="color: #111; text-decoration: none;">github.com/yourusername</a>
            </div>
        </div>

        <section class="section">
            <h2 class="section-title" style="margin-bottom: -5px; font-weight:520; font-size:20px;">Education</h2>
            <hr class="divider" />
            <div class="item" style="margin-top: -5px;">
                <div class="entry-head">
                    <div class="edu-degree"><span style="font-weight: 700;">University of Pennsylvania</span>, BS in Computer Science</div>
                    <div class="dates subtle font-bold" style="font-weight: 700;">Sep 2000 – May 2005</div>
                </div>
                <div class="tiny muted"><span style="font-weight: 700;">GPA</span>: 3.9/4.0 (a link to somewhere)</div>
                <div class="tiny"><span style="font-weight: 700;">Coursework</span>: Computer Architecture, Comparison of Learning Algorithms, Computational Theory</div>
            </div>
        </section>

        <section class="section">
            <h2 class="section-title" style="margin-bottom: -5px; font-weight:520; font-size:20px;">Experience</h2>
            <hr class="divider" />
            <div class="item" style="margin-top: -5px;">
                <div class="entry-head">
                    <div class="role"><span style="font-weight: 700;">Software Engineer</span>, Apple – Cupertino, CA</div>
                    <div class="dates subtle" style="font-weight: 700;">June 2005 – Aug 2007</div>
                </div>
                <ul style = "margin-top:-2px;">
                    <li>Reduced time to render user iBuddy lists by 75% by implementing a prediction algorithm against backend.</li>
                    <li>Integrated iChat with Spotlight Search by creating a tool to convert iChat information stored with transcripts and saved chat logs.</li>
                    <li>Redesigned the file format and implemented backward compatibility for search.</li>
                </ul>
            </div>

            <div class="item">
                <div class="entry-head">
                    <div class="role" ><span style="font-weight: 700;">Designer</span>, iChat – Apple</div>
                    <div class="dates subtle" style="font-weight: 700;">June 2003 – Aug 2003</div>
                </div>
                <ul style = "margin-top:-2px;">
                    <li>Designed a UI for the iOS given file switcher (ChiTab) and extended it to tool windows.</li>
                    <li>Converted our code generation script across VS and Xcode, enabling improvements via caching.</li>
                    <li>Wrote a research paper and created fast I/O parsers with add-ins, optimizing to O(n) over O(n^2) to O(n log n).</li>
                    <li>Constructed an automatic generation of test data from random XML docs from XML Schema.</li>
                    <li>Built tools to scrape the presentation and transform datasets from legacy systems using SQL and Perl scripts.</li>
                </ul>
            </div>
        </section>

        <section class="section">
            <h2 class="section-title" style="margin-bottom: -5px; margin-top: -2px; font-weight:520; font-size:20px;">Publications</h2>
            <hr class="divider" />
            <div class="item" style="margin-top: -5px;">
                <div class="entry-head">
                    <div class="pub-title" style="font-weight: 700;">3D Finite Element Analysis of No-Insulation Coils</div>
                    <div class="dates subtle" style="font-weight: 700;">Jan 2004</div>
                </div>
                <div class="tiny">Frodo Baggins, <strong>John Doe</strong>, Samwise Gamgee</div>
                <div class="tiny">10.1109/TASC.2023.3304468</div>
            </div>
        </section>

        <section class="section">
            <h2 class="section-title" style="margin-bottom: -5px; font-weight:520; font-size:20px;" >Projects</h2>
            <hr class="divider" />
            <div class="item">
                <div class="entry-head">
                    <div class="proj-title" style="font-weight: 700;">Multi-User Drawing Tool</div>
                    <a href="github.com/yourusername" style="color: #111; text-decoration: none; ">github.com/yourusername</a>
                </div>
                <ul >
                    <li>Developed a networked classroom where multiple users can simultaneously view and draw on a “chalkboard”.</li>
                    <li>Each person’s edits synchronize.</li>
                    <li>Tools Used: C++ , MPC</li>
                </ul>
            </div>
            <div class="item">
                <div class="entry-head">
                    <div class="proj-title" style="font-weight: 700;">Synchronized Desktop Calendar</div>
                    <a href="github.com/yourusername" style="color: #111; text-decoration: none;">github.com/yourusername</a>
                </div>
            </div>
        </section>

    </main>
</body>

</html>