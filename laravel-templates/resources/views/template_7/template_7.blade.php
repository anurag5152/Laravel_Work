<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Hero</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <link href="https://fonts.googleapis.com/css2?family=Inria+Sans:wght@400;700&family=Marko+One&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        body {
            background: white;
            color: black;
            overflow-x: hidden;
        }

        .hero-section {
            background: linear-gradient(135deg, #073642, #0f3d3e);
            min-height: 100vh;
            color: white;
            position: relative;
        }

        .circle {
            position: absolute;
            border-radius: 50%;
            filter: blur(150px);
            z-index: 0;
        }

        .circle1 {
            background: #95E96E85;
            width: 52vw;
            height: 52vw;
            top: -10%;
            left: -20%;
        }

        .circle2 {
            background: #80FFF78F;
            width: 56vw;
            height: 56vw;
            bottom: -15%;
            right: -20%;
        }

        .circle3 {
            background: rgba(200, 255, 200, 0.2);
            width: 40vw;
            height: 40vw;
            top: 20%;
            left: 30%;
        }

        .navbar {
            font-family: 'Inria Sans', sans-serif;
        }

        .navbar a {
            color: white !important;
            font-weight: 500;
            margin: 0 30px;
        }

        .navbar-toggler-icon {
            filter: invert(1);
            text-align: center;
        }

        .hero {
            position: relative;
            z-index: 2;
            padding: 6rem 0;
            margin-top: 5rem;
            font-family: 'Marko One', serif;
        }

        .profile-card {
            position: relative;
            display: inline-block;
            height: auto;
            max-width: 100%;
        }

        .profile-card img {
            border-radius: 20px;
            position: relative;
            z-index: 2;
            max-width: 100%;
            height: auto;
        }

        .box1 {
            background: #537B84;
            border-radius: 20px;
            position: absolute;
            top: -20px;
            width: 90%;
            left: 5%;
            height: 100%;
            z-index: 0;
        }

        .box2 {
            background: #8EB9C317;
            border-radius: 20px;
            position: absolute;
            top: -40px;
            width: 80%;
            left: 10%;
            height: 100%;
            z-index: 0;
        }

        .btn-custom {
            background: white;
            color: black;
            font-weight: bold;
            border-radius: 10px;
            padding: 10px 20px;
            border: 2px solid #D8D67F;
        }

        .btn-light {
            border: 2px solid #D8D67F;
        }

        .btn-custom:hover {
            background: #eee8d5;
        }

        .texta {
            position: relative;
            left: 0;
        }

        @media (max-width: 768px) {
            .hero {
                padding: 3rem 1rem;
                margin-top: 2rem;
                text-align: center;
            }

            .profile-card {
                margin-bottom: 2rem;
            }

            .texta {
                text-align: center;
            }

            .display-5 {
                font-size: 1.8rem;
            }
        }

        @media (max-width: 991.98px) {
            .navbar-collapse {
                justify-content: center !important;
                text-align: center;
            }
        }

        .section-wrapper {
            background: white;
            color: black;
            padding: 4rem 2rem;
        }
    </style>
</head>

<body>

    <div class="hero-section">
        <div class="circle circle1"></div>
        <div class="circle circle2"></div>
        <div class="circle circle3"></div>

        <nav class="navbar navbar-expand-lg px-5">
            <div class="container-fluid">
                <button class="navbar-toggler text-white border-0" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#skills">Skills</a></li>
                        <li class="nav-item"><a class="nav-link" href="#experience">Experience</a></li>
                        <li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li>
                        <li class="nav-item"><a class="nav-link" href="#education">Education</a></li>
                    </ul>
                </div>
                <a href="#about">
                    <button class="btn btn-sm btn-light ms-lg-3 mt-2 mt-lg-0">Explore More</button>
                </a>
            </div>
        </nav>
        <section class="hero container">
            <div class="row align-items-center">
                <div class="col-12 col-md-5 text-center mb-4 mb-md-0">
                    <div class="profile-card d-inline-block">
                        <div class="box2"></div>
                        <div class="box1"></div>
                        <img src="{{asset('images/girl7.png')}}" alt="Profile Picture">
                    </div>
                </div>
                <div class="col-12 col-md-7 texta text-md-start">
                    <h5 class="text-warning">Upasana Raj</h5>
                    <h1 class="display-5 fw-bold">Software Engineer<br>and Developer</h1>
                    <p class="mt-3">
                        I'm a results-driven CEO with over 15 years of experience building and scaling
                        high-growth companies across diverse industries. My journey began in engineering.
                    </p>
                    <button class="btn-custom mt-3">
                        Download CV <i class="bi bi-download"></i>
                    </button>
                </div>
            </div>
        </section>
    </div>
    <div class="section-wrapper" id="about">
        @include('template_7.components.prof-sum', [
        'paragraph' => $paragraph,
        'links' => $links
        ])
    </div>

    <div id="skills">
        @include('template_7.components.skills', ['skills' => $skills])
    </div>
    <div id="education">
        @include('template_7.components.education', ['education' => $education])
    </div>
    <div id="experience">
        @include('template_7.components.experience', ['experience' => $experience])
    </div>
    <div id="projects">
        @include('template_7.components.projects', ['projects' => $projects])
    </div>
    <div>
        @include('template_7.components.volunteer', ['volunteers' => $volunteers])
    </div>
    <div>
        @include('template_7.components.publications', ['publications' => $publications])
    </div>
    <div>
        @include('template_7.components.awards', ['awards' => $awards])
    </div>
    <div>
        @include('template_7.components.hobbies', ['hobbies' => $hobbies])
    </div>
    <div>
        @include('template_7.components.references', ['references' => $references])
    </div>
    <div>
        @include('template_7.components.contact')
    </div>

</body>

</html>