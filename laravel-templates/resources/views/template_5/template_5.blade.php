<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - Steven Job</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Magra:wght@400;700&display=swap" rel="stylesheet">


    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <style>
        body {
            font-family: 'Magra', sans-serif;
            background-color: #0c1b33;
            color: white;
        }

        .hero-section {
            margin-top: -5%;
            min-height: 100vh;
            display: flex;
            align-items: center;
        }

        .highlight {
            color: #00b4d8;
        }

        .info-box {
            background-color: #1c2a4a;
            border-radius: 8px;
            padding: 10px 20px;
            margin-bottom: 12px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .info-value {
            background-color: #00b4d8;
            color: white;
            padding: 5px 15px;
            border-radius: 6px;
            font-weight: 600;
        }

        .nav-link {
            color: white !important;
            margin: 0 10px;
        }

        .btn-custom {
            background-color: #00b4d8;
            color: white;
            border-radius: 8px;
            padding: 8px 18px;
        }
        .man{
            height: 100vh;
        }
        .navbar-brand{
            font-size: 2rem;
        }
        @media (max-width:576px){
            body{
                margin-right: -110%;
                font-size: 2.2rem;
            }
        }
    </style>
</head>

<body x-data="{}" class="overflow-x-hidden">

    <nav class="navbar navbar-expand-lg py-3">
        <div class="container">
            <a class="navbar-brand text-white fw-bold" href="#">Steven</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#skills">Skills</a></li>
                    <li class="nav-item"><a class="nav-link" href="#education">Education</a></li>
                    <li class="nav-item"><a class="nav-link" href="#experiences">Experiences</a></li>
                    <li class="nav-item"><a class="nav-link" href="#projects">Projects</a></li>
                </ul>
                <a href="#about" class="btn btn-custom ms-3">Explore More</a>
            </div>
        </div>
    </nav>

    <section class="hero-section">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-lg-6">
                    <p class="text-uppercase small">Digital Storyteller & Content Creator</p>
                    <h1 class="fw-bold">I’m <span class="highlight">Steven Job</span></h1>
                    <p class="mt-3">
                        Crafting engaging narratives that inspire, inform, and connect with audiences worldwide.
                        Specializing in tech, lifestyle, and creative content that drives engagement and builds communities.
                    </p>

                    <div class="info-box">
                        <span>Subscribers</span>
                        <span class="info-value">500k+</span>
                    </div>
                    <div class="info-box">
                        <span>Engagement Rates</span>
                        <span class="info-value">85%</span>
                    </div>
                    <div class="info-box">
                        <span>Brand Partners</span>
                        <span class="info-value">50+</span>
                    </div>
                </div>

                <div class="col-lg-6 text-center mt-4 mt-lg-0">
                    <img src="{{ asset('images/man5.png') }}" alt="Profile Image" class="man rounded">
                </div>

            </div>
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <div id="about">
        @include('template_5.components.prof-sum')
    </div>
    <div id="skills">
        @include('template_5.components.skills', ['skills' => $skills])
    </div>
    <div id="education">
        @include('template_5.components.education', ['education' => $education])
    </div>
    <div id="experiences">
        @include('template_5.components.experience', ['experiences' => $experiences])
    </div>
    <div id="projects">
        @include('template_5.components.projects', ['projects' => $projects])
    </div>
    <div id="volunteers">
        @include('template_5.components.volunteers', ['volunteers' => $volunteers])
    </div>
    <div id="publications">
        @include('template_5.components.publications', ['publications' => $publications])
    </div>
    <div id="awards">
        @include('template_5.components.awards', ['awards' => $awards])
    </div>
    <div id="hobbies">
        @include('template_5.components.hobbies', ['hobbies' => $hobbies])
    </div>
    <div id="contact">
        @include('template_5.components.contact')
    </div>
</body>

</html>