<!DOCTYPE html>
<html lang="en" x-data>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - Kshipra</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
        }

        /* Sidebar */
        .sidebar {
            position: fixed;
            top: 0;
            right: 0;
            width: 70px;
            height: 110vh;
            background-color: #1a2537;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            z-index: 1000;
        }

        .sidebar a {
            writing-mode: vertical-rl;
            transform: rotate(180deg);
            color: white;
            text-decoration: none;
            margin: 15px 0;
            font-weight: bold;
        }

        .sidebar a:hover {
            color: #ddd;
        }

        .text {
            position: relative;
            left: 15%;
        }

        /* Left background */
        .hero-left {
            position: relative;
            color: white;
            padding: 60px 40px;
        }

        .p1 {
            font-size: 2rem;
            color: #297AF6;
        }

        .big {
            font-size: 6rem;
            white-space: nowrap; /* keeps text in one line */
        }

        .p2 {
            font-size: 1.5rem;
        }

        .hero-left::before {
            content: "";
            position: absolute;
            top: 0;
            left: -5%;
            right: 0;
            bottom: 0;
            background: url('{{ asset("images/bg10.png") }}') no-repeat center center/cover;
            z-index: -1;
        }

        .btn-custom {
            border: 2px solid white;
            color: white;
            background: transparent;
            padding: 10px 20px;
            margin-left: 14%;
            width: 15vw;
            font-weight: bold;
            margin-top: 20px;
        }

        .btn-custom:hover {
            background: white;
            color: #1a2537;
        }

        .work-box {
            background: #fff;
            padding: 20px;
            margin-top: 20px;
            position: relative;
            left: -1.3%;
            width: 85vw;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            text-align: left;
            max-width: 100%;
        }

        .img-fluid {
            position: relative;
            bottom: -4%;
        }
        @media (max-width: 991px) {
            .big {
                font-size: 3.5rem;
            }

            .p1 {
                font-size: 1.5rem;
            }

            .p2 {
                font-size: 1.2rem;
            }

            .hero-left {
                padding: 40px 20px;
                text-align: center;
            }

            .text {
                left: 0;
            }

            .work-box {
                left: 2.5%;
                margin: 20px auto;
            }

            .img-fluid {
                width: 80% !important;
                height: auto !important;
                margin-top: 20px !important;
                bottom: 0;
            }
            .btn{
                width: 40vw;
                position: relative;
                left: 8%;
            }
            .text{
                left: -6%;
            }
            .work-box{
                position: relative;
                top: 3%;
                margin-left: -3%;
                width: 90vw;
                height: 30vh;
            }
            .work-button{
                margin-left: 16%;
            }
            .proj-link{
                position: relative;
                left: -6%;
            }
        }

        @media (max-width: 576px) {
            .big {
                font-size: 2.5rem;
            }
            .text{
                left: -7%;
            }
            .btn{
                width: 40vw;
            }
            .img-fluid{
                height: 90%;
                width: 40vw;
                max-height:90%;
            }
            .work-box{
                position: relative;
                /* top: 10%; */
                margin-left: -3%;
                width: 83vw;
                height: 30vh;
            }
            .p1 {
                font-size: 1.2rem;
            }

            .p2 {
                font-size: 1rem;
            }
            .prof-title{
                text-align: center;
            }
            .prof-all{
                margin-left: -5%;
            }
            .exp-title{
                text-align: center;
            }
            .exp-card{
                margin-left:15px;
                margin-right:50px;
            }
            .edu-title, .vol-title, .pub-title, .award-title, .hobbies-title, .ref-title{
                text-align: center;
            }
            .edu-card, .vol-card, .pub-card, .award-card, .ref-card{
                margin-left:15px;
                margin-right:90px;
            }
            .hobbies-card{
                margin-left:15px;
                margin-right:30px;
            }
            .contact-form{
                margin-left:15px;
                margin-right:50px;
            }
            .proj-card{
                margin-left:15px;
                margin-right:70px;
            }
            .proj-link{
                position: relative;
                left: -6%;
            }
            .contact-button{
                position: relative;
                left: -10%;
            }
        }
    </style>
</head>

<body>
    <div class="sidebar">
        <a href="#about">About</a>
        <a href="#skills">Skills</a>
        <a href="#experience">Experience</a>
        <a href="#projects">Projects</a>
        <a href="#education">Education</a>
    </div>
    <div class="container-fluid ">
        <div class="row h-100">
            <div class="col-md-4 d-flex flex-column justify-content-center hero-left">
                <div class="text">
                    <p class="p1">Hello</p>
                    <h1 class="fw-bold big">I’m Kshipra</h1>
                    <p class="p2">A Professional <span class="text-info">Data Scientist</span><br> based in India</p>
                </div>
                <button class="btn btn-custom">Downlode CV</button>
                <div class="mt-4 d-flex gap-3">
                    <!-- Example:
                    <a href="#"><i class="bi bi-linkedin text-white"></i></a>
                    -->
                </div>
            </div>

            <div class="right col-md-8 d-flex flex-column justify-content-center align-items-center " style="background-color: #AAAFB8;">
                <img src="{{asset('images/woman10.png')}}" alt="Profile" class="img-fluid mb-3"
                    style="max-height: 500px; height:80vh; width:60vw; margin-top:12%;">
                <div class="work-box">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit est necessitatibus numquam
                        nobis nam, perspiciatis accusamus placeat neque. Accusantium molestiae odit quasi quod saepe
                        sint quam iusto quia illo magnam!</p>
                    <button class="btn work-button btn-outline-dark mt-2">View work</button>
                </div>
            </div>

        </div>
    </div>

</body>
<div id="about">
    @include('template_10.components.prof-sum', ['profileSummary' => $profileSummary])
</div>
<div id="skills" style="margin-left: -5%;">
    @include('template_10.components.skills', ['skills' => $skills])
</div>
<div id="experience" style="margin-left: -5%;">
    @include('template_10.components.experience', ['experiences' => $experiences])
</div>
<div id="projects">
    @include('template_10.components.projects', ['projects' => $projects])
</div>
<div id="education" style="margin-left: -5%;">
    @include('template_10.components.education', ['educations' => $educations])
</div>
<div style="margin-left: -5%;">
    @include('template_10.components.volunteer', ['volunteers' => $volunteers])
</div>
<div style="margin-left: -5%;">
    @include('template_10.components.publications', ['publications' => $publications])
</div>
<div style="margin-left: -5%;">
    @include('template_10.components.awards ', ['awards ' => $awards ])
</div>
<div style="margin-left: -5%;">
    @include('template_10.components.hobbies ', ['hobbies ' => $hobbies ])
</div>
<div style="margin-left: -6%;">
    @include('template_10.components.references ', ['references ' => $references ])
</div>
<div style="margin-left: -6%;">
    @include('template_10.components.contact')
</div>
</html>
