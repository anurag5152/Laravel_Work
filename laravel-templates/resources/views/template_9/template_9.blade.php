<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - Chhayank Patel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inria+Serif:wght@400;700&family=Magra:wght@400;700&display=swap" rel="stylesheet">

    <style>
        body {
            background-color: #0d1b2a;
            font-family: 'Magra', sans-serif;
            color: white;
        }

        .navbar {
            font-family: 'Inria Serif', serif;
            background-color: #1b263b;
            border-radius: 25px;
            margin: 2.4rem auto 1.5rem auto;
            padding: 0.5rem 2rem;
            max-width: 900px;
        }

        .navbar-nav .nav-link {
            color: #e0e0e0 !important;
            font-size: 1rem;
            margin: 0 10px;
        }

        .navbar-nav .nav-link:hover {
            color: #00e0ff !important;
        }

        .hero-section {
            display: flex;
            align-items: center;
            justify-content: space-between;
            flex-wrap: wrap;
            padding: 3rem 5%;
        }

        .hero-text h1 {
            font-size: 5rem;
            font-weight: 700;
        }

        .hero-text h4 {
            font-size: 3rem;
        }

        .hero-text h1 span {
            color: #00e0ff;
        }

        .hero-text p {
            margin-top: 0.5rem;
            color: #bbb;
            font-size: 1.5rem;
        }

        .btn-download {
            background: linear-gradient(to right, #00e0ff, #007a7a);
            color: white;
            font-size: x-large;
            font-weight: bold;
            border: 2px solid white;
            border-radius: 30px;
            padding: 1rem 3rem;
            margin-top: 1rem;
            transition: 0.3s;
            display: inline-block;
        }

        .btn-download:hover {
            background: linear-gradient(to right, #007a7a, #00e0ff);
            color: white;
        }

        .hero-img {
            position: relative;
            max-width: 380px;
            width: 80%;
        }

        .hero-img img.pattern {
            position: absolute;
            top: 0;
            left: -10%;
            z-index: 1;
            width: 100%;
        }

        .hero-img img.person {
            position: relative;
            z-index: 2;
            width: 70%;
            margin-left: 5%;
            border-radius: 45%;
        }

        @media (max-width: 992px) {
            .hero-section {
                flex-direction: column;
                text-align: center;
            }

            .hero-text h1 {
                font-size: 3rem;
            }

            .hero-text h4 {
                font-size: 2rem;
            }

            .hero-text p {
                font-size: 1.2rem;
            }

            .btn-download {
                margin: 2rem auto;
            }

            .hero-img {
                margin-top: 3rem;
                max-width: 250px;
            }

            .hero-img img.pattern {
                width: 100%;
                left: 0;
            }

            .hero-img img.person {
                width: 80%;
                margin-left: 2%;
                margin-top: -10%;
            }

            .edu-image {
                max-width: 50vw;
            }
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <button class="navbar-toggler mx-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center text-center w-100" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#skills">Skills</a></li>
                    <li class="nav-item"><a class="nav-link" href="#experience">Experience</a></li>
                    <li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li>
                    <li class="nav-item"><a class="nav-link" href="#education">Education</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="hero-section">
        <div class="hero-text">
            <h1><span>CHHAYANK</span> PATEL</h1>
            <h4>Full-Stack Developer</h4>
            <p>Your next unicorn startup is just one commit away</p>
            <a href="#" class="btn btn-download">Download CV</a>
        </div>

        <div class="hero-img mt-4 mt-lg-0">
            <img src="{{asset('images/bg9.png')}}" alt="Pattern" class="pattern">
            <img src="{{asset('images/man9.png')}}" alt="Person" class="person">
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
<div id="about" style="margin-top: 10%;">
    @include('template_9.components.prof-sum', [
    'subtitle' => $subtitle,
    'description' => $description
    ])
</div>
<div id="experience">
    @include('template_9.components.experience', ['experiences' => $experiences])
</div>
<div id="skills">
    @include('template_9.components.skills', ['skills' => $skills])
</div>
<div id="projects">
    @include('template_9.components.projects', ['projects' => $projects])
</div>
<div id="education">
    @include('template_9.components.education', ['education' => $education])
</div>
<div>
    @include('template_9.components.volunteer', ['volunteer' => $volunteer])
</div>
<div>
    @include('template_9.components.publications', ['publications' => $publications])
</div>
<div>
    @include('template_9.components.awards', ['awards' => $awards])
</div>
<div>
    @include('template_9.components.hobbies', ['hobbies' => $hobbies])
</div>
<div>
    @include('template_9.components.references', ['references' => $references])
</div>
<div>
    @include('template_9.components.contact', ['contact' => $contact])
</div>

</html>