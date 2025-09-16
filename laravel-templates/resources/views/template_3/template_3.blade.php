<!DOCTYPE html>
<html lang="en" x-data="{ open: false }">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Template3</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Markazi+Text:wght@400;600;700&display=swap" rel="stylesheet">

  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

  <style>
    body {
      font-family: 'Markazi Text', serif;
      background-color: #0b1724;
      color: white;
      margin: 0;
      padding: 0;
      overflow-x: hidden; 
    }

    .navbar {
      font-size: 160%;
      margin-left: 10%;
    }

    .hero {
      min-height: 100vh;
      display: flex;
      align-items: center;
      position: relative;
      overflow: hidden;
    }

    .hero-text h1 {
      position: relative;
      z-index: 3;
      margin-right: -30px;
      font-size: 6rem;
      font-weight: 700;
    }

    .hero-text h2 {
      position: relative;
      z-index: 3;
      border: 2px solid white;
    }

    .arrow {
      font-size: 4rem;
      position: relative;
      z-index: 3;
    }

    .hero-img {
      position: relative;
      z-index: 2;
    }

    .img-fluid {
      width: 100%;
      max-width: 100%;
      height: auto;
    }

    .background-img {
      position: absolute;
      right: 0;
      top: 30%;
      width: 50%;
      height: 80%;
      object-fit: cover;
      opacity: 0.2;
      z-index: 1;
    }

    .proj-img {
      width: 100%;
      height: auto;
    }

    .form-control.text-white,
    .form-control.text-white::placeholder {
      padding-left: 12px;
      color: #fff !important;
      font-size: 1.2rem;
    }

    .download-btn {
      border: 1px solid white;
      border-radius: 8px;
      padding: 6px 16px;
      background-color: #1D3A4C;
      color: white;
      font-weight: 500;
      text-decoration: none;
    }

    .download-btn:hover {
      background: white;
      color: #0b1724;
    }
    @media (max-width: 991px) {
      .hero {
        flex-direction: column;
        text-align: center;
        padding: 40px 0;
        min-height: auto;
      }

      .hero-text h1 {
        font-size: 3rem;
        margin-right: 0;
      }

      .arrow {
        font-size: 2.5rem;
      }

      .background-img {
        width: 100%;
        height: 50%;
        top: auto;
        bottom: 0;
        opacity: 0.15;
      }

      .hero-img {
        margin-top: 20px;
        max-width: 80%;
      }
    }

    @media (max-width: 576px) {
      .hero-text h1 {
        font-size: 2.2rem;
      }

      .arrow {
        display: none; 
      }

      .hero-img {
        max-width: 90%;
      }
    }
  </style>
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark px-4 py-3">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" @click="open = !open">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" :class="open ? 'show' : ''">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 gap-3">
          <li class="nav-item"><a class="nav-link text-white" href="#about">About</a></li>
          <li class="nav-item"><a class="nav-link text-white" href="#skills">Skills</a></li>
          <li class="nav-item"><a class="nav-link text-white" href="#experience">Experience</a></li>
          <li class="nav-item"><a class="nav-link text-white" href="#projects">Projects</a></li>
          <li class="nav-item"><a class="nav-link text-white" href="#education">Education</a></li>
        </ul>
        <a href="#" class="download-btn">Download CV</a>
      </div>
    </div>
  </nav>

  <section class="hero container-fluid">
    <img src="{{ asset('images/bg3.png') }}" alt="background" class="background-img">

    <div class="container d-flex flex-column flex-lg-row align-items-center justify-content-between">
      <div class="hero-text text-center text-lg-start mb-4 mb-lg-0">
        <h1>
          I am Williom, a<br>
          Full-Stack Developer<br>
          & Software Engineer<br>
          based in Austin.
        </h1>
        <p class="arrow">←</p>
        <h2></h2>
      </div>

      <div class="hero-img">
        <img src="{{ asset('images/man3.png') }}" alt="Profile" class="img-fluid rounded">
      </div>
    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

  <div id="about">
    @include('template_3.components.prof-sum', ['summary' => $summary,'socials' => $socials])
  </div>
  <div id="skills">
    @include('template_3.components.skills', ['skills' => $skills])
  </div>
  <div id="education">
    @include('template_3.components.education', ['education' => $education])
  </div>
  <div id="experience">
    @include('template_3.components.experience', ['experiences' => $experiences])
  </div>
  <div id="projects">
    @include('template_3.components.projects', ['projects' => $projects])
  </div>
  <div>
    @include('template_3.components.volunteer', ['volunteers' => $volunteers])
  </div>
  <div>
    @include('template_3.components.publications', ['publications' => $publications])
  </div>
  <div>
    @include('template_3.components.awards', ['awards' => $awards])
  </div>
  <div>
    @include('template_3.components.hobbies', ['hobbies' => $hobbies])
  </div>
  <div>
    @include('template_3.components.references', ['references' => $references])
  </div>
  <div>
    @include('template_3.components.contact')
  </div>
</body>
</html>
