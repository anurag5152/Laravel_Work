<!DOCTYPE html>
<html lang="en" x-data="{ open: false }">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Portfolio</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Agbalumo&family=Alike&family=Aladin&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

    <style>
        .bg-rect {
            position: absolute;
            top: 20px;
            left: -20px;
            width: 50%;
            height: 90%;
            background-color: #966E4D;
            z-index: 0;
        }

        .pattern-img {
            position: absolute;
            top: -15px;
            right: 260px;
            width: 60px;
            z-index: 1;
        }

        .main-img {
            position: relative;
            margin-top: 10%;
            z-index: 2;
            border-radius: 5px;
        }

        body {
            font-family: 'Aladin', cursive;
            background: #fff;
            overflow-x: hidden;
            margin: 0;
        }

        .center {
            text-align: center;
        }

        .sidebar {
            font-family: 'Agbalumo', cursive;
            color: #826D61;
            height: 100vh;
            width: 220px;
            position: absolute;
            left: 0;
            top: 0;
            background: #fff;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            padding: 2rem 1rem;
            border-right: 1px solid #e0e0e0;
            z-index: 1000;
        }

        .sidebar a {
            color: #826D61;
            text-decoration: none;
            font-weight: bold;
            margin: 1.2rem 0;
            display: block;
            transition: 0.2s;
        }

        .sidebar a:hover {
            opacity: 0.7;
        }

        .socials {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 10px;
        }

        .social-icon {
            width: 45px;
            height: 45px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            background: linear-gradient(135deg, #C78E6A, #F3D2BD);
            transition: transform 0.18s;
            text-decoration: none;
        }

        .social-icon img {
            width: 20px;
            height: 20px;
            object-fit: contain;
            display: block;
        }

        .social-icon:hover {
            transform: scale(1.05);
        }

        footer.sidebar-footer {
            font-size: 0.8rem;
            color: #826D61;
            text-align: center;
            padding-top: 0.5rem;
        }

        .hero {
            margin-left: 220px;
            min-height: 100vh;
            display: flex;
            align-items: center;
            padding: 0 4rem;
            background-size: cover;
            background-position: top;
            color: white;
            box-sizing: border-box;
        }

        .hero-content h1 {
            margin: 0;
            color: #432614;
            font-size: 2.4rem;
        }

        .hero-content h2 {
            margin: 0.2rem 0 1rem;
            font-size: 1.6rem;
        }

        .hero-content p {
            font-family: 'Alike', cursive;
            font-size: 1.1rem;
            color: white;
        }

        .btn-gradient {
            background: linear-gradient(135deg, #98420C, #F6CBB1);
            border: none;
            color: #fff;
            padding: 0.6rem 1.2rem;
            border-radius: 8px;
            font-weight: bold;
            transition: opacity 0.2s;
        }

        .icon {
            position: relative;
            top: 25%;
            left: 25%;
        }

        .btn-gradient:hover {
            opacity: 0.9;
        }

        .mobile-header {
            display: none;
        }

        .hamburger-btn {
            --size: 40px;
            width: var(--size);
            height: var(--size);
            border-radius: 50%;
            border: 1px solid #eee;
            background: white;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
        }

        .mobile-nav {
            position: fixed;
            left: 0;
            right: 0;
            top: 62px;
            background: white;
            z-index: 1200;
            padding: 1rem 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 0.6rem;
            border-bottom: 1px solid #e9e9e9;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.06);
        }

        .mobile-nav a {
            color: #826D61;
            text-decoration: none;
            font-weight: bold;
            padding: 0.6rem 1rem;
        }

        @media (max-width: 768px) {
            .sidebar {
                display: none;
            }

            .mobile-header {
                display: flex;
                position: fixed;
                left: 0;
                right: 0;
                top: 0;
                background: #fff;
                align-items: center;
                justify-content: center;
                height: 62px;
                z-index: 1100;
                border-bottom: 1px solid #eaeaea;
            }

            .hero {
                margin-left: 0;
                padding: 80px 1.25rem 2.5rem;
                text-align: center;
                min-height: calc(100vh - 62px);
                background-position: center;
            }

            .hero-content h1 {
                font-size: 3.8rem;
            }

            .hero-content h2 {
                font-size: 1.1rem;
                margin-top: .25rem;
            }

            .hero-content p {
                font-size: 0.95rem;
                color: white;
            }

            .socials {
                display: none;
            }

            .sidebar-footer {
                display: none !important;
            }

            .about-res {
                margin-left: 15%;
            }

            .bg-rect {
                margin-left: 15%;
            }

            .pattern-img {
                left: 60%;
            }
        }
    </style>
</head>

<body>
    <div class="sidebar d-none d-md-flex flex-column">
        <div class="center">
            <h5 class="mb-4">RS</h5>
            <nav class="d-flex flex-column">
                <a href="#about">About</a>
                <a href="#skills">Skills</a>
                <a href="#timeline">Experience</a>
                <a href="#projects">Projects</a>
                <a href="#timeline">Education</a>
            </nav>
        </div>

        <div>
            <div class="socials">
                <a class="social-icon" href="{{ $socials[0] }}" target="_blank" aria-label="Twitter">
                    <img src="{{ asset('images/twitter.png') }}" alt="Twitter" class="icon">
                </a>
                <a class="social-icon" href="{{ $socials[1] }}" target="_blank" aria-label="Instagram">
                    <img src="{{ asset('images/insta.png') }}" alt="Instagram" class="icon">
                </a>
                <a class="social-icon" href="{{ $socials[2] }}" target="_blank" aria-label="LinkedIn">
                    <img src="{{ asset('images/linkedin.png') }}" alt="LinkedIn" class="icon">
                </a>
            </div>
            <footer class="sidebar-footer mt-4">
                Copyright ©2025. <br> All rights reserved
            </footer>
        </div>
    </div>

    <div class="mobile-header d-flex d-md-none">
        <button class="hamburger-btn" @click="open = !open" :aria-expanded="open.toString()" aria-label="Toggle menu">
            <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#826D61" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <line x1="3" y1="6" x2="21" y2="6"></line>
                <line x1="3" y1="12" x2="21" y2="12"></line>
                <line x1="3" y1="18" x2="21" y2="18"></line>
            </svg>
            <svg x-show="open" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="#826D61" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <line x1="18" y1="6" x2="6" y2="18"></line>
                <line x1="6" y1="6" x2="18" y2="18"></line>
            </svg>
        </button>
    </div>

    <div x-show="open" x-transition.opacity.duration.200ms @click.away="open = false" class="mobile-nav d-md-none" style="display: none;">
        <a href="#about" @click="open = false">About</a>
        <a href="#skills" @click="open = false">Skills</a>
        <a href="#timeline" @click="open = false">Experience</a>
        <a href="#projects" @click="open = false">Projects</a>
        <a href="#timeline" @click="open = false">Education</a>
        <div style="display:flex; gap:12px; margin-top:6px;">
            <a class="social-icon" href="{{ $socials[0] }}" target="_blank" aria-label="Twitter" style="width:40px;height:40px;">
                <img src="{{ asset('images/twitter.png') }}" alt="Twitter" style="width:18px;height:18px">
            </a>
            <a class="social-icon" href="{{ $socials[1] }}" target="_blank" aria-label="Instagram" style="width:40px;height:40px;">
                <img src="{{ asset('images/insta.png') }}" alt="Instagram" style="width:18px;height:18px">
            </a>
            <a class="social-icon" href="{{ $socials[2] }}" target="_blank" aria-label="LinkedIn" style="width:40px;height:40px;">
                <img src="{{ asset('images/linkedin.png') }}" alt="LinkedIn" style="width:18px;height:18px">
            </a>
        </div>

    </div>

    <section class="hero" style="background-image: url('{{ asset('images/man12.png') }}'); ">
        <div class="hero-content">
            <p>Hii I'm</p>
            <h1>{{$name}}</h1>
            <h2>{{$role}}</h2>
            <p>
                {{$desc}}
            </p>
            <button class="btn-gradient mt-3">Download CV</button>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" defer></script>
</body>
<div id="about">
    @include('template_12.components.prof-sum', ['about' => $about])
</div>
<div id="skills">
    @include('template_12.components.skills', ['skills' => $skills])
</div>
<div id="projects"> 
    @include('template_12.components.projects', ['description' => $description, 'projects' => $projects])
</div>
<div id="timeline" >
    @include('template_12.components.timeline', [
    'experiences' => $experiences,
    'educations' => $educations
    ])
</div>
<div>
    @include('template_12.components.volunteer', ['volunteers' => $volunteers])
</div>
<div>
    @include('template_12.components.publications', ['publications' => $publications])
</div>
<div>
    @include('template_12.components.awards', ['awards' => $awards])
</div>
<div>
    @include('template_12.components.hobbies', ['hobbies' => $hobbies])
</div>
<div>
    @include('template_12.components.references', ['references' => $references])
</div>
<div>
    @include('template_12.components.contact')
</div>

</html>