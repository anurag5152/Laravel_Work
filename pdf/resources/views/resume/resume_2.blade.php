<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>{{ $name ?? 'A SAIAKHIL' }} – Resume</title>
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



        @page {
            size: A4;
            margin: 25mm;
        }

        body {
            font-family: "Times New Roman", Times, serif;
            font-size: 13px;
            color: #000;
            line-height: 1.4;
            margin: 0;
            padding: 0;
        }

        h1 {
            font-size: 20px;
            text-align: center;
            margin: 0;
            font-weight: bold;
        }

        .contact {
            text-align: center;
            font-size: 13px;
            margin-top: 3px;
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

        .section {
            margin-top: 5px;
        }

        .subsection {
            margin-bottom: 5px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 5px;
        }

        td {
            vertical-align: top;
            padding: 2px 0;
        }

        .left {
            width: 75%;
        }

        .right {
            width: 25%;
            text-align: right;
        }

        ul {
            margin: 3px 0 3px 20px;
            padding: 0;
        }

        li {
            margin-bottom: 3px;
        }

        .small {
            font-size: 12px;
        }
    </style>
</head>

<body style="margin-top: -45px;" data-browser-style="margin-top:45px";>
    <h1>{{ $name ?? 'A SAIAKHIL' }}</h1>
    <div class="contact">
        <div>ph: {{ $phone ?? '+91 7702588283' }}</div>
        <div>Email: {{ $email ?? 'saiakhilakallam9@gmail.com' }}</div>
    </div>

    <div class="section">
        <div class="section-title">CAREER OBJECTIVE</div>
        <ul style="list-style-type: none;">
            <li> To associate with the organization that gives me a scope to update my knowledge and skills in accordance
                with the latest trends in the market and be part of the team that works towards the growth of my organization.</li>
        </ul>
    </div>

    <div class="section">
        <div class="section-title" style="margin-top: -1px;">PROJECT</div>
        <ul style="list-style-type: none;">
            <li>A web application that farmers can use to hire tractors and other agricultural tools at nominal price with the local area using their mobile phone.</li>
            <li>A python application that uses Microsoft vision API to get an image description on image capture and audio outputs the image description which is useful for blind people.</li>
        </ul>
    </div>

    <div class="section">
        <div class="section-title" style="margin-top: -1px;">EDUCATIONAL QUALIFICATION</div>
        <table>
            <tr>
                <td class="left" style="padding-left: 18px;"><strong>PVP Siddhartha Institution of Technology</strong><br>
                    Board Of Education: JNTUK<br>
                    Department of Information Technology
                </td>
                <td class="right">2020 Pursuing<br>Overall CGPA: 8.88</td>
            </tr>
            <tr>
                <td class="left" style="padding-left: 18px;"><strong>Sri Chaitanya Junior College</strong><br>
                    Board Of Education: AP Board Education
                </td>
                <td class="right">2016<br>Overall CGPA: 9.76</td>
            </tr>
            <tr>
                <td class="left" style="padding-left: 18px;"><strong>Narayana Public School</strong><br>
                    Board Of Education: SSC
                </td>
                <td class="right">2014<br>Overall CGPA: 9.3</td>
            </tr>
        </table>
    </div>

    <div class="section">
        <div class="section-title" style="margin-top: -1px;">TECHNICAL SKILLS</div>
        <p style="padding-left: 18px;">C, C++, Java, Python,<br>
            HTML, CSS, Java Script, PHP,<br>
            MY SQL Database</p>
    </div>

    <div class="section">
        <div class="section-title" style="margin-top: -1px;">STRENGTHS</div>
        <p style="padding-left: 18px;">Self-Motivate, Fast Grasper and Deterministic.</p>
    </div>

    <div class="section">
        <div class="section-title" style="margin-top: -1px;">CO/EXTRA-CURRICULAR</div>
        <ul style="list-style-type: none;">
            <li>Secured second and first prize in college level coding competition Code Race and Code Race 2.0 for the two consecutive years conducted in PVPSIT.</li>
            <li>Won runners prize in Kho-Kho.</li>
            <li>Organized International Conference conducted by departments of CSE and IT in PVPSIT.</li>
            <li>Secured NPTEL certificate on the course C++ with an aggregate of 64</li>
        </ul>
    </div>

    <div class="section">
        <div class="section-title" style="margin-top: -1px;">PERSONAL INFORMATION:</div>
        <table style="border-collapse: collapse; width: auto;"> <!-- shrink-to-fit -->
            <tr>
                <td style="padding: 0 10px 0 18px;"><strong>Date of Birth</strong></td>
                <td style="padding: 0 0 0 25px;">13-03-1999</td>
            </tr>
            <tr>
                <td style="padding: 0 10px 0 18px;"><strong>Hobbies</strong></td>
                <td style="padding: 0 0 0 25px;">Playing cricket</td>
            </tr>
            <tr>
                <td style="padding: 0 10px 0 18px;"><strong>Linguistic proficiency</strong></td>
                <td style="padding: 0 0 0 25px;">Telugu, English, Hindi (Intermediate)</td>
            </tr>
        </table>
    </div>

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