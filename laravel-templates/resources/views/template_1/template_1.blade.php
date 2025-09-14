<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Resume - Desktop Exact</title>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;500;700;800&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <style>
        [x-cloak] {
            display: none !important;
        }

        :root {
            --bg: #050505;
            --green: #13b25b;
            --muted: #cfcfcf;
            --white: #ffffff;
            --content-max: 1360px;
        }

        html,
        body {
            height: 100%;
        }

        body {
            margin: 0;
            background: var(--bg);
            color: var(--white);
            font-family: 'Montserrat', system-ui, -apple-system, "Segoe UI", Roboto, Arial;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }

        .wrap {
            display: flex;
            justify-content: center;
            padding: 18px 0;
        }

        .shell {
            width: 100%;
            max-width: var(--content-max);
            padding: 0 48px;
        }

        header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 8px 0 22px 0;
        }

        .brand {
            font-weight: 500;
            color: var(--white);
        }

        .topnav {
            display: flex;
            gap: 28px;
            align-items: center;
            margin-left: 50px;
        }

        .topnav a {
            color: var(--white);
            text-decoration: none;
            font-weight: 500;
            opacity: 0.95;
        }

        .explore-btn {
            background: linear-gradient(180deg, var(--green), #0da148);
            border-radius: 10px;
            padding: 8px 16px;
            border: 2px solid rgba(255, 255, 255, 0.12);
            color: var(--white);
            font-weight: 700;
            box-shadow: 0 2px 0 rgba(0, 0, 0, 0.45);
            cursor: pointer;
        }

        .custom-margin {
            margin-left: 320px;
        }

        .hero {
            margin-top: 6px;
            height: calc(100vh - 140px);
            display: flex;
            align-items: center;
            gap: 48px;
            position: relative;
            overflow: visible;
        }

        .left {
            flex: 0 0 58%;
            max-width: 820px;
            z-index: 6;
        }

        .right {
            flex: 0 0 42%;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            z-index: 6;
        }

        .name {
            font-size: 64px;
            font-weight: 800;
            margin: 0 0 6px 0;
            line-height: 1;
        }

        .name .accent {
            color: var(--green);
            display: inline-block;
            margin-right: 8px;
        }

        .role {
            font-size: 30px;
            font-weight: 600;
            margin: 6px 0 18px 0;
            color: #f8f8f8;
        }

        .tag {
            color: var(--muted);
            font-size: 16px;
            margin-bottom: 26px;
        }

        .cta-row {
            display: flex;
            align-items: center;
            gap: 14px;
        }

        .download {
            background: transparent;
            border-radius: 8px;
            padding: 10px 18px;
            border: 2px solid rgba(255, 255, 255, 0.12);
            color: var(--white);
            font-weight: 700;
            display: inline-flex;
            gap: 10px;
            align-items: center;
            text-decoration: none;
            cursor: pointer;
        }

        .download .icon {
            width: 36px;
            height: 36px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background: rgba(255, 255, 255, 0.03);
            border-radius: 8px;
            border: 1px solid rgba(255, 255, 255, 0.04);
        }

        .tiny-square {
            width: 36px;
            height: 36px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 6px;
            border: 2px solid rgba(255, 255, 255, 0.08);
            margin-left: 6px;
            color: var(--green);
        }

        .artboard {
            width: 420px;
            height: 420px;
            position: relative;
            display: block;
        }

        .frame-img {
            position: absolute;
            inset: 0;
            width: 80%;
            height: 80%;
            object-fit: contain;
            z-index: 1;
            pointer-events: none;
        }

        .profile-img {
            position: absolute;
            width: 70%;
            height: 70%;
            object-fit: cover;
            z-index: 2;
            right: 12%;
            top: -10%;
            border-radius: 6px;
        }

        .grid {
            position: absolute;
            left: -9%;
            right: -9%;
            bottom: -8px;
            height: 220px;
            z-index: 2;
            pointer-events: none;
        }

        .grid img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
        }

        .overlay {
            position: absolute;
            left: 0;
            top: 0;
            right: 0;
            bottom: 0;
            z-index: 0;
            background: linear-gradient(180deg, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.6) 70%);
        }

        @media (max-width:1200px) {
            .name {
                font-size: 56px;
            }

            .role {
                font-size: 26px;
            }
        }

        @media (max-width:1000px) {
            .hero {
                gap: 30px;
            }

            .artboard {
                width: 320px;
                height: 320px;
            }

            .profile-img {
                width: 66%;
                height: 66%;
                right: 6%;
                top: 6%;
            }

            .grid {
                height: 160px;
                bottom: -18px;
            }

            .name {
                font-size: 44px;
            }
        }
        @media (max-width: 576px){
            body{
                margin-right: -55%;
            }
        }
    </style>
</head>

<body>

    <div class="wrap">
        <div class="shell">

            <header>
                <nav class="navbar navbar-expand-lg navbar-dark w-100" style="background-color: var(--bg);">
                    <div class="container-fluid">
                        <a class="navbar-brand fw-bold text-white" href="#">Marcus Thompson</a>

                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent"
                            aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarContent">
                            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                                <li class="nav-item mx-2"><a class="nav-link text-white" href="#about">About</a></li>
                                <li class="nav-item mx-2"><a class="nav-link text-white" href="#skills">Skills</a></li>
                                <li class="nav-item mx-2"><a class="nav-link text-white" href="#experience">Experience</a></li>
                                <li class="nav-item mx-2"><a class="nav-link text-white" href="#projects">Projects</a></li>
                                <li class="nav-item mx-2"><a class="nav-link text-white" href="#education">Education</a></li>
                            </ul>

                            <button class="explore-btn ms-lg-3 mt-2 mt-lg-0" @click="explore = true">Explore</button>
                        </div>
                    </div>
                </nav>
            </header>



            <main class="hero">
                <div class="overlay" aria-hidden="true"></div>

                <section class="left">
                    <h1 class="name"><span class="accent">Marcus</span> Thompson</h1>
                    <div class="role">Full-Stack Developer</div>
                    <div class="tag">Your next unicorn startup is just one commit away</div>

                    <div class="cta-row">
                        <a class="download"  title="Download CV">
                            <span class="icon" aria-hidden="true">
                                <svg width="18" height="18" viewBox="0 0 24 24" fill="none">
                                    <path d="M12 3v12" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" />
                                    <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" />
                                    <path d="M7 10l5 5 5-5" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" />
                                </svg>
                            </span>
                            <span>Download CV</span>
                        </a>

                        <div class="tiny-square" aria-hidden="true">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" style="color:var(--green)">
                                <rect x="3" y="3" width="18" height="18" rx="3" stroke="currentColor" stroke-width="1.2" />
                                <path d="M8 12h8" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" />
                                <path d="M8 16h8" stroke="currentColor" stroke-width="1.4" stroke-linecap="round" />
                            </svg>
                        </div>
                    </div>
                </section>

                <aside class="right" aria-hidden="false">
                    <div class="artboard" role="img" aria-label="Profile artwork area">
                        <img class="frame-img" src="{{ $shapeImage ?? asset('images/bg.png') }}" alt="Shape frame">

                        <img class="profile-img" src="{{ $profileImage ?? asset('images/man.png') }}" alt="Profile photo">
                    </div>
                </aside>

                <div class="grid" aria-hidden="true">
                    <img src="{{ $gridImage ?? asset('images/grid.png') }}" alt="">
                </div>
            </main>
            <div x-show="explore" x-cloak x-transition style="position:fixed;inset:0;display:flex;align-items:center;justify-content:center;z-index:1500;">
                <div @click.outside="explore = false" style="width:520px;">
                    <div class="card p-4" style="background:#0b0b0b;border:1px solid rgba(255,255,255,0.06);">
                        <div class="d-flex justify-content-between align-items-start">
                            <h5 class="mb-1">Explore</h5>
                            <button class="btn btn-sm btn-outline-light" @click="explore = false">Close</button>
                        </div>
                        <p class="text-muted mb-3">Quick links and actions.</p>
                        <div class="d-flex gap-2 flex-wrap">
                            <a href="#skills" class="btn btn-sm btn-light">Go to Skills</a>
                            <a href="#projects" class="btn btn-sm btn-outline-light">See Projects</a>
                            <a href="#" class="btn btn-sm btn-outline-light">Contact</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div id="about">
        @include('template_1.components.prof', [
        'summary' => $summary,
        'twitter' => $twitter,
        'linkedin' => $linkedin,
        'github' => $github
        ])

    </div>

    <div id="skills">
        @include('template_1.components.skills', ['skills' => $skills])

    </div>

    <div id="education">
        @include('template_1.components.education', ['education' => $education])

    </div>

    <div id="projects">
        @include('template_1.components.projects', ['projects' => $projects])

    </div>

    <div id="experience">
        @include('template_1.components.experience', ['experiences' => $experiences])

    </div>

    <div>
        @include('template_1.components.volunteer', ['volunteers' => $volunteers])

    </div>

    <div>
        @include('template_1.components.publications', ['publications' => $publications])
    </div>

    <div>
        @include('template_1.components.awards', ['awards' => $awards])
    </div>

    <div>
        @include('template_1.components.hobbies', ['hobbies' => $hobbies])
    </div>

    <div>
        @include('template_1.components.references', ['references' => $references])
    </div>

    <div>
        @include('template_1.components.contact')

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>