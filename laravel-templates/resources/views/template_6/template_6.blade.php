<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Marck+Script&family=Marmelad&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Marmelad', sans-serif;
            margin: 0;
            padding: 0;
        }

        .sidebar {
            background-color: #F7EEEF;
            min-height: 100vh;
            padding: 2rem 1rem;
        }

        .sidebar h2 {
            font-family: 'Marck Script', cursive;
            font-size: 2rem;
        }

        .nav-link {
            color: black;
            font-weight: 500;
            margin: 0.5rem 0;
        }

        .nav-link:hover {
            color: #d6336c;
        }

        .explore-btn {
            background-color: #c8a7a7;
            color: black;
            border: none;
            border-radius: 8px;
            padding: 0.5rem 1.5rem;
            margin-bottom: 1rem;
            font-weight: 600;
        }

        .explore-btn:hover {
            background-color: #b08c8c;
        }

        .hero-text h1 {
            font-size: 2.8rem;
            font-weight: bold;
        }

        .hero-text h1 span {
            border-bottom: 3px solid red;
        }

        .hero-text p {
            max-width: 500px;
            color: #666;
            margin-top: 1rem;
            line-height: 1.5;
        }

        .nav {
            padding-top: 3rem;
        }

        @media (max-width: 991px) {
            .sidebar {
                min-height: auto;
                padding: 1rem;
                text-align: center;
            }

            .nav {
                flex-direction: row !important;
                justify-content: center;
                gap: 1rem;
                padding-top: 1rem;
            }

            .explore-btn {
                margin-top: 1rem;
            }
        }

        @media (max-width: 768px) {

            .hero-text h1 {
                font-size: 2rem;
            }

            .hero-text p {
                max-width: 100%;
                font-size: 0.95rem;
            }

            .col-lg-6.text-center img {
                position: relative !important;
                width: 70% !important;
                height: auto !important;
                right: 0 !important;
                left: 0 !important;
                margin: 0 auto;
            }
        }

        @media (max-width: 576px) {
            .hero-text h1 {
                font-size: 1.6rem;
            }

            .hero-text p {
                font-size: 0.9rem;
            }
        }
    </style>
</head>

<body style="overflow-x: hidden;">

    <div class="container-fluid">
        <div class="row">

            <div class="col-md-3 col-lg-2 sidebar d-flex flex-column justify-content-between">
                <div>
                    <h2 class="mb-4 text-center">Elsa</h2>
                    <nav class="nav flex-column text-center">
                        <a href="#about" class="nav-link">About</a>
                        <a href="#skills" class="nav-link">Skills</a>
                        <a href="#experience" class="nav-link">Experience</a>
                        <a href="#projects" class="nav-link">Projects</a>
                        <a href="#education" class="nav-link">Education</a>
                    </nav>
                </div>
                <div class="mt-4 text-center">
                    <button class="explore-btn" id="#about">Explore</button>
                </div>
            </div>

            <div class="col-md-9 col-lg-10 d-flex align-items-center">
                <div class="row w-100">
                    <div class="col-lg-6 d-flex flex-column justify-content-center hero-text ps-5">
                        <h1>
                            GRAPHIC <br>
                            <span>DESIGNER</span>
                        </h1>
                        <p>
                            I craft compelling visual experiences that connect brands with their audiences.
                            From logo design to complete brand identities, I transform concepts into
                            stunning visual stories.
                        </p>
                    </div>

                    <div class="col-lg-6 text-center">
                        <img src="{{asset('images/girl6.png')}}" alt="Designer" style="position: absolute; right:5%; width:45%; height:90%;" class="img-fluid">

                        <div class="mt-3 bgimg">
                            <img src="{{asset('images/bg6.png')}}" alt="Additional Work" style="position: relative; left:5%; z-index:-1;" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <div id="about">
        @include('template_6.components.prof-sum', $profileSummary)
    </div>
    <div id="skills">
        @include('template_6.components.skills', ['skills' => $skills])
    </div>
    <div id="education">
        @include('template_6.components.education', ['educations' => $educations])
    </div>
    <div id="experience">
        @include('template_6.components.experience', $experiences)
    </div>
    <div id="projects">
        @include('template_6.components.projects', $projectsSection)
    </div>
    <div>
        @include('template_6.components.volunteer', ['volunteers' => $volunteers])
    </div>
    <div>
        @include('template_6.components.publications', ['publications' => $publications])
    </div>
    <div>
        @include('template_6.components.awards', ['awards' => $awards])
    </div>
    <div>
        @include('template_6.components.hobbies', ['hobbies' => $hobbies])
    </div>
    <div>
        @include('template_6.components.references', ['references' => $references])
    </div>
    <div>
        @include('template_6.components.contact')
    </div>
</body>

</html>