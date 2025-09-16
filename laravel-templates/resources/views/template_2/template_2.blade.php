<!DOCTYPE html>
<html lang="en" x-data="{ navOpen: false, explore: false }">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Template 2 - Alex River</title>
    <link href="https://fonts.googleapis.com/css2?family=Aldrich&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <style>
        [x-cloak] {
            display: none !important
        }

        :root {
            --blue-top: #709EBA;
            --blue-bottom: #193546;
            --accent: #2f93c2;
            --gray-from: #ffffff;
            --gray-to: #999999;
        }

        * {
            box-sizing: border-box;
        }

        html,
        body {
            width: 100%;
            margin: 0;
            padding: 0;
            overflow-x: hidden;
            font-family: 'Aldrich', sans-serif;
            background: #ffffff;
            color: #0b0b0b;
        }

        .wrap {
            display: flex;
            justify-content: center;
            padding: 18px 0;
        }

        .shell {
            width: 100%;
            max-width: 1360px;
            padding: 0 36px;
        }

        header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px 0 18px;
        }

        .brand {
            font-size: 20px;
            letter-spacing: 0.6px;
        }

        .topnav a {
            margin-left: 22px;
            text-decoration: none;
            color: #000;
            font-size: 18px;
        }

        .hero {
            display: grid;
            grid-template-columns: 480px 1fr 320px;
            gap: 28px;
            align-items: start;
            min-height: 600px;
            position: relative;
        }

        .visual {
            position: relative;
            height: 560px;
            overflow: visible;
        }

        .visual .bg-blue {
            position: absolute;
            left: -125px;
            top: 80px;
            width: 580px;
            height: 500px;
            background: linear-gradient(to bottom, var(--blue-top), var(--blue-bottom));
            z-index: 1;
            border-radius: 2px;
        }

        .visual .bg-gray {
            position: absolute;
            left: 160px;
            top: 180px;
            width: 360px;
            height: 310px;
            background: linear-gradient(to right, var(--gray-from), var(--gray-to));
            z-index: 2;
            border-radius: 2px;
        }

        .visual img.profile {
            position: absolute;
            left: 152px;
            top: 30px;
            width: 350px;
            height: 460px;
            object-fit: cover;
            z-index: 3;
            display: block;
        }

        .meta {
            margin-left: 20px;
            padding-top: 40px;
            position: relative;
            min-height: 560px;
        }

        .meta .name {
            font-size: 92px;
            line-height: 0.95;
            margin: 60px 0 6px -65px;
            letter-spacing: 1px;
            white-space: nowrap;
        }

        .meta .subtitle {
            position: relative;
            top: -10px;
            left: 260px;
            font-size: 16px;
            margin-bottom: 6px;
            color: #222;
        }

        .meta .headline {
            position: relative;
            z-index: 20;
            margin-top: 120px;
            margin-left: -80px;
            font-size: 45px;
            line-height: 1.05;
            max-width: 880px;
        }

        .meta .headline .accent {
            color: var(--accent);
            display: inline-block;
        }

        .aside {
            padding-top: 60px;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            margin-left: 50px;
            margin-top: 100px;
        }

        .aside h3 {
            font-size: 32px;
            border-bottom: 3px solid var(--blue-bottom);
            padding-bottom: 6px;
            margin-bottom: 14px;
        }

        .spec-list {
            list-style: none;
            padding: 0;
            margin: 0 0 26px 0;
            width: 100%;
        }

        .spec-list li {
            font-size: 15px;
            color: var(--accent);
            margin: 10px 0;
            display: flex;
            align-items: center;
        }

        .spec-list li::before {
            content: '✦';
            margin-right: 10px;
            color: var(--blue-bottom);
            transform: scale(1.05);
        }

        .download-box {
            margin-top: 6px;
        }

        .download-btn {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 10px 18px;
            border-radius: 10px;
            border: 2px solid rgba(0, 0, 0, 0.08);
            background: linear-gradient(to bottom, var(--blue-top), var(--blue-bottom));
            color: #fff;
            cursor: pointer;
            box-shadow: 0 6px 0 rgba(0, 0, 0, 0.06) inset;
            font-weight: 700;
        }

        .download-btn .icon {
            width: 32px;
            height: 32px;
            border-radius: 6px;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #fff;
            color: var(--blue-bottom);
            font-weight: 700;
        }

        .headline-break {
            display: block;
        }

        @media (max-width: 1200px) {
            .meta .name {
                font-size: 72px;
            }

            .meta .headline {
                font-size: 34px;
                margin-top: 80px;
            }

            .hero {
                grid-template-columns: 420px 1fr 300px;
                gap: 18px;
            }

            .visual .bg-blue {
                left: -40px;
                width: 440px;
                height: 380px;
            }

            .visual img.profile {
                width: 320px;
                height: 380px;
                left: 28px;
                top: 52px;
            }
        }

        @media (max-width: 900px) {
            .hero {
                grid-template-columns: 1fr;
                gap: 40px;
            }

            .visual {
                order: 0;
                height: auto;
                min-height: 400px;
            }

            .visual img.profile {
                position: relative;
                width: 100%;
                max-width: 380px;
                height: auto;
                left: 0;
                top: 0;
                margin: 0 auto;
                display: block;
            }

            .visual .bg-blue,
            .visual .bg-gray {
                display: none;
            }

            .meta {
                order: 1;
                padding-top: 20px;
                margin-left: 0;
                text-align: center;
                min-height: auto;
            }

            .meta .name {
                font-size: 56px;
                margin: 20px 0 10px;
            }

            .meta .subtitle {
                position: static;
                font-size: 16px;
                margin-bottom: 12px;
            }

            .meta .headline {
                margin: 40px auto 0;
                font-size: 28px;
                max-width: 100%;
            }

            .aside {
                order: 2;
                padding-top: 20px;
                margin: 0 auto;
                align-items: center;
                text-align: center;
            }

            .aside h3 {
                font-size: 26px;
            }

            .spec-list li {
                justify-content: center;
            }

            .topnav {
                display: none;
            }
        }

        @media (max-width: 576px) {
            .meta .name {
                font-size: 42px;
            }

            .meta .headline {
                font-size: 22px;
                margin-top: 20px;
            }

            .aside h3 {
                font-size: 22px;
            }

            .download-btn {
                padding: 8px 14px;
                font-size: 14px;
            }

            .download-btn .icon {
                width: 28px;
                height: 28px;
            }
        }
    </style>
</head>

<body>
    <div class="wrap">
        <div class="shell">

            <header>
                <div class="brand">Alex River</div>
                <div class="d-none d-lg-flex align-items-center topnav">
                    <a href="#about">About</a>
                    <a href="#skills">Skills</a>
                    <a href="#experience">Experience</a>
                    <a href="#projects">Projects</a>
                    <a href="#education">Education</a>
                </div>
                <div class="d-lg-none">
                    <button class="btn btn-link p-0" @click="navOpen = !navOpen" aria-label="toggle">
                        <svg width="26" height="26" viewBox="0 0 24 24" fill="none">
                            <path d="M3 6h18M3 12h18M3 18h18" stroke="#111" stroke-width="1.6" stroke-linecap="round" />
                        </svg>
                    </button>
                </div>
            </header>

            <div x-show="navOpen" x-cloak class="mb-3 d-lg-none">
                <a class="d-block py-1" href="#about">About</a>
                <a class="d-block py-1" href="#skills">Skills</a>
                <a class="d-block py-1" href="#experience">Experience</a>
                <a class="d-block py-1" href="#projects">Projects</a>
                <a class="d-block py-1" href="#education">Education</a>
            </div>

            <main class="hero">
                <div class="visual" aria-hidden="true">
                    <div class="bg-blue"></div>
                    <div class="bg-gray"></div>
                    <img class="profile" src="{{ $shapeImage ?? asset('images/man2.png') }}" alt="Profile image">
                </div>
                <div class="meta">
                    <h1 class="name">Alex River</h1>
                    <div class="subtitle">UX/UI Designer</div>
                    <div class="headline">
                        Crafting Digital <span class="accent">Experiences</span> That
                        <span class="headline-break">Matter</span>
                    </div>
                </div>
                <aside class="aside">
                    <h3>Specialties</h3>
                    <ul class="spec-list">
                        @foreach($specialties as $item)
                        <li>{{ $item }}</li>
                        @endforeach
                    </ul>
                    <div class="download-box">
                        <div class="download-btn" role="button" @click="alert('Replace with actual download route')">
                            <div class="icon">CV</div>
                            <div>Download CV</div>
                        </div>
                    </div>
                </aside>
            </main>
        </div>
    </div>

    <div id="about" class="component-wrapper" style="background: linear-gradient(to left, #305469, #000000E5);">
        @include('template_2.components.professional-summary', ['summary' => $summary,'socials' => $socials])
    </div>
    <div id="skills" class="component-wrapper" style="background: linear-gradient(to left, #305469, #000000E5); ">
        @include('template_2.components.skills', ['skills' => $skills])
    </div>
    <div id="education" class="component-wrapper" style="background: linear-gradient(to left, #305469, #000000E5); ">
        @include('template_2.components.education', ['education' => $education])
    </div>
    <div id="projects" class="component-wrapper" style="background: linear-gradient(to left, #305469, #000000E5); ">
        @include('template_2.components.projects', ['projects' => $projects])
    </div>
    <div id="experience" class="component-wrapper" style="background: linear-gradient(to left, #305469, #000000E5); ">
        @include('template_2.components.experience', ['experience' => $experience])
    </div>
    <div class="component-wrapper" style="background: linear-gradient(to left, #305469, #000000E5); ">
        @include('template_2.components.volunteer', ['volunteers' => $volunteers])
    </div>
    <div class="component-wrapper" style="background: linear-gradient(to left, #305469, #000000E5); ">
        @include('template_2.components.publications', ['publications' => $publications])
    </div>
    <div class="component-wrapper" style="background: linear-gradient(to left, #305469, #000000E5); ">
        @include('template_2.components.awards', ['awards' => $awards])
    </div>
    <div class="component-wrapper" style="background: linear-gradient(to left, #305469, #000000E5); ">
        @include('template_2.components.hobbies', ['hobbies' => $hobbies])
    </div>
    <div class="component-wrapper" style="background: linear-gradient(to left, #305469, #000000E5); ">
        @include('template_2.components.references', ['references' => $references])
    </div>
    <div class="component-wrapper" style="background: linear-gradient(to left, #305469, #000000E5); ">
        @include('template_2.components.contact')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
