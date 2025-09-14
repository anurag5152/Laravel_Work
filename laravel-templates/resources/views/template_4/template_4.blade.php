<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portfolio</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css2?family=Eagle+Lake&family=Abhaya+Libre:wght@500&display=swap" rel="stylesheet">

  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <style>
    body {
      background-color: #2b2f36;
      color: white;
      font-family: 'Eagle Lake', serif;
    }

    nav {
      font-family: 'Abhaya Libre', serif;
      background: transparent !important;
      z-index: 3;
    }

    .hero {
      position: relative;
      margin: 0 50px;
      border-radius: 5px;
      height: 100vh;
      overflow: hidden;
    }

    .hero img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      opacity: 0.4;
      position: absolute;
      top: 0;
      left: 0;
      z-index: -1;
    }

    .hero-content {
      position: relative;
      z-index: 2;
      font-size: 2rem;
      padding: 80px 40px;
      text-align: left;
    }

    .hero h1 {
      font-size: 3rem;
      font-weight: 700;
    }

    .hero h2 {
      font-size: 2.5rem;
      color: #f6b300;
      font-weight: 400;
    }

    .btn-custom {
      background-color: #F47E61;
      color: white;
      font-weight: 500;
      border-radius: 8px;
      padding: 10px 25px;
    }

    .btn-custom:hover {
      background-color: #e4684c;
      color: #fff;
    }

    @media (max-width: 992px) {
      .hero {
        margin: 0 20px;
        height: auto;
        min-height: 100vh;
      }

      .hero-content {
        padding: 60px 20px;
        text-align: center;
        font-size: 1.5rem;
      }

      .hero h1 {
        font-size: 2.5rem;
      }

      .hero h2 {
        font-size: 2rem;
      }

      nav .btn-custom {
        display: none;
      }
    }

    @media (max-width: 768px) {
      .hero-content {
        padding: 40px 15px;
        font-size: 1.2rem;
      }

      .hero h1 {
        font-size: 2rem;
      }

      .hero h2 {
        font-size: 1.8rem;
      }

      .hero-content p {
        font-size: 0.9rem;
      }
    }

    @media (max-width: 576px) {
      .hero {
        margin: 0 10px;
      }

      .hero-content {
        padding: 30px 10px;
        font-size: 1rem;
      }

      .hero h1 {
        font-size: 1.5rem;
      }

      .hero h2 {
        font-size: 1.3rem;
      }

      .hero-content p {
        font-size: 0.85rem;
      }

      .hero .btn-custom {
        width: 100%;
        padding: 12px;
      }
      .hero img{
        margin-top: 10%;
        height: 90vh;
      }
    }
  </style>
</head>

<body x-data="{}">

  <section class="hero">
    <img src="{{ asset('images/bg4.png')}}" alt="Background Image">
    <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3">
      <a class="navbar-brand fw-bold" href="#">Emily</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
        <ul class="navbar-nav gap-4" style="font-size: 1.2rem;">
          <li class="nav-item"><a class="nav-link active" href="#about">About</a></li>
          <li class="nav-item"><a class="nav-link active" href="#skills">Skills</a></li>
          <li class="nav-item"><a class="nav-link active" href="#experience">Experience</a></li>
          <li class="nav-item"><a class="nav-link active" href="#projects">Projects</a></li>
          <li class="nav-item"><a class="nav-link active" href="#education">Education</a></li>
        </ul>
      </div>
      <a href="#about" class="btn btn-custom">Explore more</a>
    </nav>

    <div class="hero-content">
      <p class="mb-2">Welcome to my Portfolio</p>
      <h1>I'm Emily Anderson</h1>
      <h2>Freelance Copywriter</h2>
      <p class="mt-4" style="max-width: 500px; font-family: 'Abhaya Libre', serif; font-size: 1rem;">
        Since 2020 we have been working for our clients who want to have a website
        or strengthen their current business through digital marketing. Located in
        New York, USA.
      </p>
      <button class="btn btn-custom mt-3">Get Started</button>
    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  <div id="about">
    @include('template_4.components.prof-sum', ['paragraph' => $paragraph, 'image' => $image])
  </div>
  <div id="skills">
    @include('template_4.components.skills', ['skills' => $skills])
  </div>
  <div id="education">
    @include('template_4.components.education', ['education' => $education])
  </div>
  <div id="experience">
    @include('template_4.components.experience', ['experiences' => $experiences])
  </div>
  <div id="projects">
    @include('template_4.components.projects', ['projects' => $projects])
  </div>
  <div>
    @include('template_4.components.volunteer', ['volunteers' => $volunteers])
  </div>
  <div>
    @include('template_4.components.publications', ['publications' => $publications])
  </div>
  <div>
    @include('template_4.components.awards', ['awards' => $awards])
  </div>
  <div>
    @include('template_4.components.hobbies', ['hobbies' => $hobbies])
  </div>
  <div>
    @include('template_4.components.references', ['references' => $references])
  </div>
  <div>
    @include('template_4.components.contact')
  </div>
</body>

</html>
