<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Bs Link --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>{{ $title }}</title>

    <style>
      body {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
        background-color: #f8f9fa;
      }
    </style>
</head>
<body>
    {{-- Navbar --}}
        <!-- Navbar content -->
        <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark"> 
            <div class="container-fluid">
              <a class="navbar-brand" href="#" style="font-weight: bold; font-style: italic;">Gus <span style="color: yellow; font-weight: bold; font-style: italic;" href="#">Project</span></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">About Me</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"  style="transition: color 0.3s ease, transform 0.3s ease;">
                      Role
                    </a>
                    <ul class="dropdown-menu" style="transition: opacity 0.3s ease, transform 0.7s ease; opacity: 0; transform: translateY(-8px);">
                      <li><a class="dropdown-item" href="#">Next Js</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Node Js</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Laravel</a></li>
                    </ul>
                  </li>
                </ul>
                <form class="d-flex" role="search">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-light" type="submit">Search</button>
                </form>
              </div>
            </div>
          </nav>

          {{-- content --}}
          <div
      id="projectCarousel"
      class="carousel slide"
      data-bs-ride="carousel"
      style="max-width: 90%; margin: auto; margin-top: 40px"
    >
      <!-- Indicators -->
      <div
        class="carousel-indicators"
        style="margin-bottom: -10px; justify-content: center"
      >
        <button
          type="button"
          data-bs-target="#projectCarousel"
          data-bs-slide-to="0"
          class="active"
          aria-current="true"
          aria-label="Slide 1"
          style="background-color: #3d3737; border-radius: 50%; width: 12px; height: 12px;"
        ></button>
        <button
          type="button"
          data-bs-target="#projectCarousel"
          data-bs-slide-to="1"
          aria-label="Slide 2"
          style="background-color: #d6d6d6; border-radius: 50%; width: 12px; height: 12px;"
        ></button>
        <button
          type="button"
          data-bs-target="#projectCarousel"
          data-bs-slide-to="2"
          aria-label="Slide 3"
          style="background-color: #d6d6d6; border-radius: 50%; width: 12px; height: 12px;"
        ></button>
      </div>

      <!-- Slides -->
      <div class="carousel-inner">
        <!-- Slide 1 -->
        <div class="carousel-item active">
          <div class="row">
            <!-- Left (Image Placeholder) -->
            <div
              class="col-md-6"
              style="background-color: #e0e0e0; height: 320px; border-radius: 12px"
            ></div>
            <!-- Right (Text) -->
            <div class="col-md-6 d-flex align-items-center">
              <div>
                <h2 style="font-weight: bold">Project 1:</h2>
                <p style="text-align: justify; line-height: 1.8">
                  Project ini dibuat oleh saya sendiri menggunakan Framework
                  seperti React Js pada front-endnya dan pada bagian server side
                  rendering (SSR) saya menggunakan Next Js. Mengapa saya
                  menggunakan Next Js sebagai server side? Karena hasil dari
                  riset yang saya dapat bahwa Next Js lebih populer dan mudah
                  digunakan untuk proses pengembangan web apps.
                </p>
              </div>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item">
          <div class="row">
            <div
              class="col-md-6"
              style="background-color: #e0e0e0; height: 320px; border-radius: 12px"
            ></div>
            <div class="col-md-6 d-flex align-items-center">
              <div>
                <h2 style="font-weight: bold">Project 2:</h2>
                <p style="text-align: justify; line-height: 1.8">
                  Dalam project ini, saya menggunakan teknologi Laravel dan
                  React Js untuk mengembangkan aplikasi fullstack. Laravel
                  sebagai backend API dan React Js untuk tampilan frontend yang
                  interaktif.
                </p>
              </div>
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item">
          <div class="row">
            <div
              class="col-md-6"
              style="background-color: #e0e0e0; height: 320px; border-radius: 12px"
            ></div>
            <div class="col-md-6 d-flex align-items-center">
              <div>
                <h2 style="font-weight: bold">Project 3:</h2>
                <p style="text-align: justify; line-height: 1.8">
                  Aplikasi ini dibangun dengan Node Js dan Express sebagai
                  backend serta teknologi MySQL untuk database. Saya menekankan
                  keamanan dan optimisasi API dalam project ini.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Navigation Arrows -->
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#projectCarousel"
        data-bs-slide="prev"
      >
        <span
          class="carousel-control-prev-icon"
          aria-hidden="true"
          style="background-color: rgba(0, 0, 0, 0.5); border-radius: 50%"
        ></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#projectCarousel"
        data-bs-slide="next"
      >
        <span
          class="carousel-control-next-icon"
          aria-hidden="true"
          style="background-color: rgba(0, 0, 0, 0.5); border-radius: 50%"
        ></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    {{-- Bs Script --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    {{-- Script Dropdown --}}
    <script>
      document.querySelectorAll('.nav-item.dropdown').forEach(function (dropdown) {
        const dropdownMenu = dropdown.querySelector('.dropdown-menu');
        dropdown.addEventListener('mouseenter', function () {
          dropdownMenu.style.opacity = '1';
          dropdownMenu.style.transform = 'translateY(0)';
        });
        dropdown.addEventListener('mouseleave', function () {
          dropdownMenu.style.opacity = '0';
          dropdownMenu.style.transform = 'translateY(-10px)';
        });
      });
    </script>
</body>
</html>