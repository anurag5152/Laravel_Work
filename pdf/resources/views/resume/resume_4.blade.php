<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>{{ $name ?? 'Andrew Ryan' }} – Resume</title>

    <style>
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


        body {
            margin: 0;
            padding: 0;
            font-family: 'Times New Roman', serif;
            font-size: 12pt;
            color: #000;
            line-height: 1.35;
            background: #fff;
        }

        @page {
            size: A4;
            margin: 25mm 20mm;
        }

        .page {
            width: 100%;
            padding: 0;
        }

        .name {
            font-size: 20pt;
            font-weight: bold;
            text-align: center;
            margin-bottom: 8pt;
        }

        .contact {
            text-align: center;
            font-size: 10.5pt;
            margin-top: 18pt;
        }

        .contact span {
            margin: 0 3px;
        }

        .contact a {
            color: #000;
            text-decoration: none;
        }

        .section-title {
            font-variant: small-caps;
            font-size: 12pt;
            margin-top: 14pt;
            margin-bottom: 4pt;
            border-bottom: 1px solid #000;
            padding-bottom: 1pt;
        }

        .item {
            margin-bottom: 6pt;
        }

        .entry-head {
            display: table;
            width: 100%;
            table-layout: fixed;
        }

        .entry-head>div {
            display: table-cell;
            vertical-align: top;
        }

        .left {
            font-weight: bold;
            text-align: left;
        }

        .right {
            text-align: right;
            white-space: nowrap;
        }

        .subtext {
            font-style: italic;
        }

        ul {
            margin: 4pt 0 0 16pt;
            padding: 0;
        }

        li {
            margin-bottom: 2pt;
        }

        .two-col {
            display: flex;
            justify-content: space-between;
        }

        .two-col div {
            width: 48%;
        }
    </style>
</head>

<body style="margin-top: -45px;" data-browser-style="margin-top:45px" ;>
    <main class="page">
        <div class="name">{{ $name ?? 'Andrew Ryan' }}</div>

        <div class="section-title">Education</div>
        <div class="item" style="padding-left: 10px;">
            <div class="entry-head">
                <div class="left">Brooklyn Technical High School</div>
                <div class="right">Brooklyn, NY</div>
            </div>
            <div class="entry-head">
                <div class="subtext">GPA 3.96, Class rank 66/450, SAT 1510</div>
                <div class="right"><em>Sept. 2021 – Jun. 2025</em></div>
            </div>
        </div>

        <div class="section-title">Extracurricular Activities</div>
        <div class="item" style="padding-left: 10px;">
            <div class="entry-head">
                <div class="left">Student Government – Treasurer</div>
                <div class="right">Sept. 2023 – Jun. 2024</div>
            </div>
            <div class="entry-head">
                <div><em>Treasurer</em></div>
                <div class="right"><em>Brooklyn, NY</em></div>
            </div>
            <ul style="padding-left: 10px;">
                <li>Developed budget proposals, collaborating with the student government team to plan major school events.
                </li>
                <li>Organized and led fundraising events, <span style="font-weight: bold;">raising over $5,000</span>  for school activities and projects.</li>
                <li>Managed the student government budget, ensuring accurate tracking and allocation of funds</li>
            </ul>
        </div>

        <div class="item" style="padding-left: 10px;">
            <div class="entry-head">
                <div class="left">Math Team – Team Captain</div>
                <div class="right">Sept. 2022 – Present</div>
            </div>
            <div class="entry-head">
                <div><em>Team Captain</em></div>
                <div class="right"><em>Brooklyn, NY</em></div>
            </div>
            <ul style="padding-left: 10px;">
                <li>Competed in regional, state, and national-level math competitions( <span style="font-weight: bold;">NYCIML, NYCMTS</span>).</li>
                <li>Facilitated weekly study sessions to discuss high-level<span style="font-weight: bold;"> Probability Theory, Geometry & Algebra.</span>
                </li>
                <li>Led a 26-member math team as captain, overseeing strategy development and competition preparation.</li>
            </ul>
        </div>

        <div class="item" style="padding-left: 10px;">
            <div class="entry-head">
                <div class="left">Varsity Swim Team – Team Captain</div>
                <div class="right">Sept. 2021 – Jun. 2024</div>
            </div>
            <div class="entry-head">
                <div><em>Team Captain</em></div>
                <div class="right"><em>Brooklyn, NY</em></div>
            </div>
            <ul style="padding-left: 10px;">
                <li>Led the varsity swim team to its <span style="font-weight: bold;">inaugural section championship</span> through leadership and strategic planning.</li>
                <li>Mentored juzior team members, providing guidance on proper techniques, race preparation, and sportsmanship.</li>
            </ul>
        </div>

        <div class="section-title">Experience</div>
        <div class="item" style="padding-left: 10px;">
            <div class="entry-head">
                <div class="left">FlexiDip – Co-Founder</div>
                <div class="right">June 2024 – Present</div>
            </div>
            <div class="entry-head">
                <div><em>Co-Founder</em></div>
                <div class="right"><em>Ann Arbor, MI</em></div>
            </div>
            <ul style="padding-left: 10px;">
                <li>Co-founded startup specializing in adjustable dipping containers, optimizing buffalo wing dining experience.</li>
                <li>Developed minimum viable product(MVP) capable of early-stage revenue generation.</li>
                <li>Received positive feedback from established brands like Buffalo Wild Wings for innovative sauce holder designs</li>
                <li>Validated startup ides through market research and interview feedhack as a part of Launch-X U-Michigan.</li>
            </ul>
        </div>

        <div class="item" style="padding-left: 10px;">
            <div class="entry-head">
                <div class="left">Private Math Tutor</div>
                <div class="right">Sept. 2021 – Present</div>
            </div>
            <div class="entry-head">
                <div><em>Team Captain</em></div>
                <div class="right"><em>Brooklyn, NY</em></div>
            </div>
            <ul style="padding-left: 10px;">
                <li>Provided personalized tutoring sessions in algebra, calculus, and geometry to elementary && middle-school students</li>
                <li>Developed lesson plans for diverse learning styles, leading to improvements by <span style="font-weight: bold;">upwards of 1.5 letter grades.</span></li>
            </ul>
        </div>

        <div class="section-title">Awards</div>
        <div class="item" style="padding-left: 10px;">
            <div class="entry-head">
                <div class="left">Speedo Scholastic All-American</div>
                <div class="right">Aug. 2023 – Present</div>
            </div>
            <ul style="padding-left: 10px;">
                <li>
                    <div>National award given to student-atheletes who achieve a <span class="left">national time standard</span> and 3.5+ GPA.</div>
                </li>
            </ul>
        </div>

        <div class="item" style="padding-left: 10px;">
            <div class="entry-head">
                <div class="left">National Junior Honor Society</div>
                <div class="right">June 2023 – Present</div>
            </div>
            <ul style="padding-left: 10px;">
                <li>
                    <div>Award presented to students with outstanding achievements in academics, leadership, and community service.</div>
                </li>
            </ul>
        </div>

        <div class="section-title">Classes</div>
        <p style="padding-left: 10px;"><span class="left">Courses:</span> AP Calculus BC, AP Chemistry, AP Physics, AP World History, AP U.S. History, AP Statistics, AP Literature</p>

        <div class="section-title">Skills & Interests</div>
        <p style="padding-left: 10px;"><strong>Skills:</strong> Probability Theory, Web Design, Microsoft Excel, Microsoft Office</p>
        <p style="padding-left: 10px;"><strong>Interests:</strong> Photography, Creative Writing, Archery, New York Knicks</p>

        <div class="contact">
            123-456-7890 |
            <a href="mailto:andrew@gmail.com">andrew@gmail.com</a> |
            <a href="https://linkedin.com/in/andrew">linkedin.com/in/andrew</a>
        </div>
    </main>
</body>
<script>
    // run in browser only
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('[data-browser-style]').forEach(function(el) {
            el.style.cssText += el.getAttribute('data-browser-style');
        });
    });
</script>


</html>