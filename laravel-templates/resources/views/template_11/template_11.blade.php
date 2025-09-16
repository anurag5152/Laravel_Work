<!doctype html>
<html lang="en" x-data>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Portfolio — 11</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <link href="https://fonts.googleapis.com/css2?family=Inria+Serif:wght@300;400;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --img-width-desktop: 50%;
        }

        /* ✅ Global fix */
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
            background: #000;
            color: #fff;
            font-family: "Inria Serif", serif;
            overflow-x: hidden !important; /* stop horizontal scroll */
        }

        * {
            box-sizing: border-box;
            max-width: 100%; /* prevent children from overflowing */
        }

        .hero-row {
            margin: 0;
        }

        .site-nav-desktop {
            background: transparent;
            padding-top: 1rem;
            padding-bottom: 1rem;
        }

        .site-nav-desktop .nav-link {
            color: #fff !important;
            font-weight: 400;
            letter-spacing: 0.02em;
        }

        .site-nav-mobile {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 0.6rem 1rem;
            background: transparent;
        }

        .site-nav-mobile .navbar-toggler {
            border: 0;
            font-size: 1.1rem;
            color: #fff;
            background: transparent;
        }

        .hero-left {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: flex-start;
            padding: 3.5rem 4rem;
        }

        .greeting {
            margin: 0 0 0.4rem 0;
            font-size: 1rem;
            color: #dcdcdc;
        }

        .name {
            margin: 0;
            font-size: clamp(2.6rem, 8vw, 6.2rem);
            line-height: 0.88;
            font-weight: 700;
            letter-spacing: -0.02em;
            display: inline-block;
            border-bottom: 4px solid rgba(255, 255, 255, 0.95);
            padding-bottom: 0.18rem;
        }

        .subtitle {
            margin: 0.6rem 0 1rem 0;
            font-size: clamp(1.25rem, 3.2vw, 2rem);
            font-weight: 600;
        }

        .desc {
            max-width: 52ch;
            color: #cfcfcf;
            margin-bottom: 1.1rem;
            font-size: 0.95rem;
        }

        .btn-view {
            background: #fff;
            color: #000;
            padding: 0.55rem 1.1rem;
            border-radius: 10px;
            font-weight: 600;
            border: none;
            box-shadow: 0 3px 0 rgba(0, 0, 0, 0.15);
        }

        .hero-image {
            min-height: 100vh;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .img-top-mobile {
            height: 55vh;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .mobile-collapse .nav-link {
            color: #fff;
            padding: 0.65rem 1rem;
            display: block;
            border-bottom: 1px solid rgba(255, 255, 255, 0.06);
        }

        /* background circles fix */
        .education-section .background-circles .circle,
        .contact-section .background-circles .circle {
            position: absolute;
            z-index: -1;
            border-radius: 50%;
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.7), rgba(0, 0, 0, 1));
            opacity: 0.6;
            pointer-events: none;
            max-width: 100vw; /* ✅ prevent overflow */
            max-height: 100vh;
        }

        .contact-section {
            position: relative;
            z-index: 10;
            overflow: hidden;
        }

        .contact-section .background-circles {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        @media (max-width: 991.98px) {
            :root {
                --img-width-desktop: 55%;
            }
            .hero-left {
                position: relative;
                bottom: 25%;
                padding: 2rem; /* reduce padding */
            }
            .img-top-mobile {
                height: 65vh;
            }
            .about-mob {
                position: relative;
                top: -55%;
            }
        }

        @media (max-width: 767.98px) {
            .hero-left {
                padding: 1.25rem;
                align-items: center; /* ✅ center instead of pushing left */
                text-align: center;
            }
            .site-nav-desktop {
                display: none !important;
            }
            .site-nav-mobile {
                display: flex !important;
            }
            .hero-image {
                display: none;
            }
            .img-top-mobile {
                display: block;
            }
        }

        @media (max-width: 576px) {
            .desc {
                text-align: center;
            }
            .btn-view,
            .greeting,
            .name,
            .subtitle {
                position: static;
                margin-left: 0;
                text-align: center;
            }
            .hero-left {
                bottom: 0;
                padding: 1rem;
            }
            .about-mob {
                position: relative;
                top: -30%;
            }
        }
    </style>
</head>
<body>
    <div class="container-fluid px-0">
        <nav class="navbar site-nav-mobile d-md-none">
            <div class="container-fluid justify-content-center px-0">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mobileMenu"
                    aria-controls="mobileMenu" aria-expanded="false" aria-label="Toggle navigation">
                    ☰
                </button>
            </div>
            <div class="collapse text-center mobile-collapse w-100" id="mobileMenu">
                <div class="bg-black px-3">
                    <ul class="nav flex-column">
                        <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Skills</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Experience</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Projects</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="img-top-mobile d-block d-md-none"
            style="background-image: url('{{ asset('images/girl11.png') }}');">
        </div>

        <div class="row g-0 hero-row">
            <div class="col-md-6">
                <nav class="navbar navbar-expand-md site-nav-desktop px-4 d-none d-md-flex">
                    <div class="container-fluid px-0">
                        <a class="navbar-brand text-white fw-bold" href="#" style="letter-spacing: 0.03em;">&nbsp;</a>
                        <div class="collapse navbar-collapse justify-content-end" id="siteNavDesktop">
                            <ul class="navbar-nav">
                                <li class="nav-item"><a class="nav-link px-3" href="#about">About</a></li>
                                <li class="nav-item"><a class="nav-link px-3" href="#skills">Skills</a></li>
                                <li class="nav-item"><a class="nav-link px-3" href="#experience">Experience</a></li>
                                <li class="nav-item"><a class="nav-link px-3" href="#education">Education</a></li>
                                <li class="nav-item"><a class="nav-link px-3" href="#projects">Projects</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>

                <section class="hero-left">
                    <p class="greeting">Hi There I’m</p>
                    <h1 class="name">Emma Watson</h1>
                    <div class="mt-3">
                        <p class="subtitle">A Professional</p>
                        <p class="subtitle">Graphic Designer</p>
                    </div>
                    <p class="desc">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit est necessitatibus numquam nobis nam,
                        perspiciatis accusamus placeat neque. Accusantium molestiae odit.
                    </p>
                    <button class="btn-view">View Work</button>
                </section>
            </div>
            <div class="col-md-6 d-none d-md-block">
                <div class="hero-image" style="background-image: url('{{ asset('images/girl11.png') }}');"></div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

<div class="about-mob" id="about">
    @include('template_11.components.prof-sum', $data)
</div>
<div class="about-mob" id="skills">
    @include('template_11.components.skills', ['skills' => $skills])
</div>
<div class="about-mob" id="experience">
    @include('template_11.components.experience', ['experiences' => $experiences, 'images' => $images])
</div>
<div class="about-mob" id="education">
    @include('template_11.components.education', ['education' => $education])
</div>
<div class="about-mob" id="projects">
    @include('template_11.components.projects', ['projects' => $projects])
</div>
<div class="about-mob">
    @include('template_11.components.volunteer', ['volunteers' => $volunteers])
</div>
<div class="about-mob">
    @include('template_11.components.publications', ['publications' => $publications])
</div>
<div class="about-mob">
    @include('template_11.components.awards', ['awards' => $awards])
</div>
<div class="about-mob">
    @include('template_11.components.hobbies', ['hobbies' => $hobbies])
</div>
<div class="about-mob">
    @include('template_11.components.references', ['references' => $references])
</div>
<div class="about-mob">
    @include('template_11.components.contact', ['contacts' => $contacts])
</div>
</html>
