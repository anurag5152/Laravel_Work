<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio 8</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link
        href="https://fonts.googleapis.com/css2?family=Alex+Brush&family=Amaranth:wght@400;700&family=Aboreto&display=swap"
        rel="stylesheet">

    <style>
        body {
            background-color: #1a1a1a;
            color: #fff;
            font-family: 'Aboreto', cursive;
        }

        .navbar-brand {
            font-family: 'Alex Brush', cursive;
            font-size: 1.8rem;
        }

        .navbar-nav {
            margin-inline-end: auto;
            padding-left: 20vw;
        }

        .nav-item {
            padding-left: 10%;
        }

        .hero-section {
            position: relative;
            padding: 4rem 0;
        }

        .hero-text h1 {
            font-family: 'Amaranth', sans-serif;
            font-size: 3rem;
        }

        .hero-text p {
            font-family: 'Aboreto', cursive;
            font-size: 1rem;
        }

        .btn-cv {
            background: linear-gradient(90deg, #2ec4f3, #3636f6);
            border: none;
            font-family: 'Aboreto', cursive;
        }

        .hero-img-box {
            position: relative;
            z-index: -1;
            transform: translateY(-25%);
            background: linear-gradient(#090D0CE5, #50736ACC);
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 6px;
            overflow: hidden;
        }

        .hero-img-box img {
            max-width: 100%;
            height: auto;
        }

        .stats {
            margin-top: 3rem;
        }

        .stat-item h2 {
            font-family: 'Amaranth', sans-serif;
            color: #4462ff;
            font-size: 2rem;
            margin-bottom: 0;
        }

        .stat-item p {
            font-family: 'Aboreto', cursive;
            font-size: 1rem;
        }

        .line {
            position: relative;
            top: -50%;
            height: 100px;
            border-right: 5px solid #3636f6;
        }

        @media (max-width: 991px) {
            .navbar-nav {
                padding-left: 0;
            }

            .nav-item {
                padding-left: 0;
                text-align: center;
            }

        }

        @media (max-width: 768px) {
            .line {
                position: relative;
                top: -140%;
                transform: rotate(90deg);
                height: 100px;
                border-right: 5px solid #3636f6;
            }

            .hero-text {
                margin-top: -10%;
                text-align: center;
            }

            .btn-cv {
                position: absolute;
                top: 30%;
                right: 30%;
            }

            .stats {
                margin-top: -20%;
            }

            .edu {
                display: flex;
                align-items: center;
                justify-content: center;
            }

            .edu-border {
                margin-left: 38%;
            }

            .vol-title {
                text-align: center;
            }

            .vol-border {
                margin-left: 30%;
            }

            .pub-title {
                text-align: center;
            }

            .pub-border {
                margin-left: 30%;
            }

            .award-title {
                text-align: center;
            }

            .award-border {
                margin-left: 35%;
            }
        }
    </style>
</head>

<body x-data="{}" style="overflow-x: hidden;">

    <nav class="navbar navbar-expand-lg navbar-dark px-5">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">{{$name}}</a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#about">ABOUT</a></li>
                    <li class="nav-item"><a class="nav-link" href="#skills">SKILLS</a></li>
                    <li class="nav-item"><a class="nav-link" href="#experience">EXPERIENCE</a></li>
                    <li class="nav-item"><a class="nav-link" href="#projects">PROJECTS</a></li>
                    <li class="nav-item"><a class="nav-link" href="#education">EDUCATION</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="hero-section container">
        <div class="row align-items-center">
            <div class="col-md-6 hero-text">
                <p>WELCOME</p>
                <h1>{{$name}}</h1>
                <p>{{$designation}}</p>
                <button class="btn btn-cv mt-3 px-4 py-2">Download CV</button>
            </div>
            <div class="col-md-6 hero-img-box">
                <img src="{{ asset($image) }}" alt="Profile Image">
            </div>

        </div>

        <div class="row text-center stats">
            <div class="col-md-4 stat-item">
                <h2>80+</h2>
                <p>client statisfied</p>
                <div class="line"></div>
            </div>
            <div class="col-md-4 stat-item">
                <h2>200+</h2>
                <p>Project Completed</p>
                <div class="line"></div>
            </div>
            <div class="col-md-4 stat-item">
                <h2>99+</h2>
                <p>Reviews given</p>
            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

</body>
<div id="about">
    @include('template_8.components.prof-sum', ['summary' => $summary, 'email' => $email])
</div>
<div id="skills">
    @include('template_8.components.skills')
</div>
<div id="education">
    @include('template_8.components.education')
</div>
<div id="experience">
    @include('template_8.components.experience')
</div>
<div id="projects">
    @include('template_8.components.projects', ['projects' => $projects])
</div>
<div>
    @include('template_8.components.volunteer', ['volunteer' => $volunteer])
</div>
<div>
    @include('template_8.components.publications', ['publications' => $publications])
</div>
<div>
    @include('template_8.components.awards', ['awards' => $awards])
</div>
<div>
    @include('template_8.components.hobbies', ['hobbies' => $hobbies])
</div>
<div>
    @include('template_8.components.references', ['references' => $references])
</div>
<div>
    @include('template_8.components.contact', ['contact' => $contact])
</div>

</html>