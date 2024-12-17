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

      html {
        scroll-behavior: smooth;
      }

      body {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
        background-color: #f8f9fa;
      }

      .nav-item, .nav-link{
        color: #fff;
      }

      .my-orange {
        background-color: #ff6200;
      }
    </style>
</head>
<body style="overflow-x: hidden;">
    {{-- Navbar --}}
        <!-- Navbar content -->
        <nav class="navbar navbar-expand-lg bg-primary"> 
            <div class="container-fluid">
              <a class="navbar-brand" 
              href="#" 
              style="font-weight: bold; 
              font-style: italic; 
              color: #fff;
              text-shadow:0 0 10px #000;
              ">AD
              <span style="color: #03fce8; 
              font-weight: bold; 
              font-style: italic;" 
              href="#">Project</span></a>
              {{-- Navbar toggle --}}
              <button class="navbar-toggler" 
              type="button"
              data-bs-toggle="offcanvas"
              data-bs-target="#offcanvasScrolling"
              aria-controls="offcanvasScrollingLabel"
              style="background-color: #fff"
              >
                <span class="navbar-toggler-icon"></span>
              </button>

              <div class="offcanvas offcanvas-start d-lg-none" 
              data-bs-scroll="true" 
              data-bs-backdrop="true" 
              tabindex="-1" 
              id="offcanvasScrolling" 
              aria-labelledby="offcanvasScrollingLabel">

                <div class="offcanvas-header">
                  <a class="navbar-brand" href="/" style="font-weight: bold;
                  font-style: italic; 
                  color: #000;
                  text-shadow:0 0 2px #000;
                  width: 100%;"
                  >AD
                  <span style="color: #03fce8;
                  text-shadow:0 0 2px #000;
                  font-weight: bold; 
                  font-style: italic;" 
                  href="/"
                  >Project</span></a> 
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                  </div>

                  {{-- Offcanvas body --}}
                <div class="offcanvas-body">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0"
                    style="color: #000">
                    <li class="nav-item">
                      <a class="nav-link active text-dark" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-dark" href="/about">About Me</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-dark" href="/contact">Contact</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link dropdown-toggle text-dark" href="#" role="button"
                      data-bs-toggle="dropdown">
                        Role
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Next Js</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">Node Js</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#">React Js</a></li>
                      </ul>
                    </li>
                  </ul>

                  {{-- form --}}
                  <form class="d-flex" role="search">
                    <input class="form-control me-2 border border-primary" 
                    type="search"
                    placeholder="Search"
                    aria-label="Search" 
                    style="background-color: #fff; color: #000;">
                    <button class="btn btn-outline-primary" type="submit">Submit</button>
                  </form>
                  </div>
                  </div>

              {{-- Menu tanpa sidebar --}}
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/about">About Me</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/contact">Contact</a>
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
                      <li><a class="dropdown-item" href="#">React Js</a></li>
                    </ul>
                  </li>
                </ul>
                <form class="d-flex" role="search">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" style="background-color: #fff; color: #000;">
                  <button class="btn btn-outline-light" type="submit">Submit</button>
                </form>
              </div>
            </div>
          </nav>

          {{-- Content Slider --}}
          <div
      id="projectCarousel"
      class="carousel slide"
      data-bs-ride="carousel"
      style="max-width: 100%; margin:auto; margin-top: 20px; border-radius: 20px;"
    >
      <!-- Button Indicators -->
      <div
        class="carousel-indicators"
        style="margin-bottom: -8px; justify-content: center"
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
          style="background-color: #3d3737; border-radius: 50%; width: 12px; height: 12px;"
        ></button>
        <button
          type="button"
          data-bs-target="#projectCarousel"
          data-bs-slide-to="2"
          aria-label="Slide 3"
          style="background-color: #3d3737; border-radius: 50%; width: 12px; height: 12px;"
        ></button>
        <button
          type="button"
          data-bs-target="#projectCarousel"
          data-bs-slide-to="3"
          aria-label="Slide 4"
          style="background-color: #3d3737; border-radius: 50%; width: 12px; height: 12px;"
        ></button>
      </div>

      <!-- Slider content -->
      <div class="carousel-inner"
      style="gap: 15px;">
        <!-- Slide 1 -->
        <div class="carousel-item active">
          <div class="row d-sm-flex justify-content-center" style="padding: 20px">
            <!-- Left (Image Placeholder) -->
            <img src="{{ asset('img/nextt.jpg') }}" alt="Foto-1" class="col-6 img-fluid" style="height: 320px;
              width: 330px;
              border-radius: 50%">
            <!-- Right (Text) -->
            <div class="col-md-6 d-flex align-items-center"> 
              <div style="padding: 20px;">
                <h2 style="font-weight: bold">Project 1 <span class="fw-bold text-primary" 
                  style="cursor: pointer;">Next Js</span> :</h2>
                <p style="text-align: justify; line-height: 1.8;">
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
          <div class="row d-sm-flex justify-content-center" style="padding: 20px">
            <!-- Left (Image Placeholder) -->
            <img src="{{ asset('img/node-js-removebg-preview.png') }}" alt="Foto-1" class="col-6 img-fluid" style="height: 320px;
              width: 320px;
              border-radius: 12px;">
            <!-- Right (Text) -->
            <div class="col-md-6 d-flex align-items-center"> 
              <div style="padding: 20px;">
                <h2 style="font-weight: bold">Project 2 <span class="fw-bold text-primary" 
                  style="cursor: pointer;">Node Js</span> :</h2>
                <p style="text-align: justify; line-height: 1.8;">
                  Kenapa ada gambar Node js? Ini kan lagi pakai Laravel?
                  Ya karena saya pernah membuatkan website untuk client saya 
                  menggunakan Node Js dan menggunakan API berupa Express Js.
                  Dan untuk Database menggunakan MySql, kenapa MySql? Karena,
                  MySql sangat cocok untuk pembuatan project Website yang kompleks
                  dan laravel lebih cocok jika menggunakan database MySql.
                </p>
              </div>
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item">
          <div class="row d-sm-flex justify-content-center" style="padding: 20px">
            <!-- Left (Image Placeholder) -->
            <img src="{{ asset('img/react-js-removebg-preview.png') }}" alt="Foto-1" 
            class="col-6 img-fluid" 
            style="height: 320px;
              width: 320px;
              border-radius: 12px;">
            <!-- Right (Text) -->
            <div class="col-md-6 d-flex align-items-center"> 
              <div style="padding: 20px;">
                <h2 style="font-weight: bold">Project 3 <span class="fw-bold text-primary" 
                  style="cursor: pointer;">React Js</span> :</h2>
                <p style="text-align: justify; line-height: 1.8;">
                  Kenapa ada gambar React Js disini? Dikarenakan saya pernah
                  menggunakan React Js sebagai Front-End dan menurut studi
                  React Js sangat Fleksibel untuk digunakan. Bisa di Next Js,
                  bisa di Laravel, dan juga bisa digunakan pada project HTML,CSS,
                  yang mungkin memerlukan website yang responsif namun tidak seribet
                  menggunakan CSS only. Jika ingin mengetahui lebih lanjut, silahkan 
                  kunjungi Page selanjutnya.
                </p>
              </div>
            </div>
          </div>
        </div>

        {{-- Slide 4 --}}
        <div class="carousel-item">
          <div class="row d-sm-flex justify-content-center" style="padding: 20px">
            <!-- Left (Image Placeholder) -->
            <img src="{{ asset('img/laravel.png') }}" alt="Foto-1" 
            class="col-6 img-fluid" 
            style="height: 320px;
              width: 320px;
              border-radius: 12px;">
            <!-- Right (Text) -->
            <div class="col-md-6 d-flex align-items-center"> 
              <div style="padding: 20px;">
                <h2 style="font-weight: bold">Project 4 <span class="fw-bold text-primary" 
                  style="cursor: pointer;">Laravel</span> :</h2>
                <p style="text-align: justify; line-height: 1.8;">
                  Kenapa ada gambar Laravel disini? Dikarenakan saya sedang
                  menggunakan Laravel sebagai Fullstack dan menurut studi
                  Laravel sangat Fleksibel untuk digunakan. Dan bisa digunakan
                  pada project HTML,CSS, maupun React, Bootstrap dll didalamnya,
                  yang mungkin memerlukan website yang responsif namun tidak seribet
                  menggunakan CSS only. Jika ingin mengetahui lebih lanjut, silahkan 
                  kunjungi Page selanjutnya.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Navigation Arrow -->
      <button
        class="carousel-control-prev "
        type="button"
        data-bs-target="#projectCarousel"
        data-bs-slide="prev"
      >
        <span
          class="carousel-control-prev-icon p-2"
          aria-hidden="true"
          style="background-color: rgba(0, 0, 0, 0.2);"
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
          class="carousel-control-next-icon p-2"
          aria-hidden="true"
          style="background-color: rgba(0, 0, 0, 0.2);"
        ></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>

    {{-- Content Skill Require --}}
    {{-- Title --}}
    <div
      style="
        max-width: 100%;
        margin: 0 auto;
        background-color: #0d6efd;
        color: white;
        font-size: 2rem;
        font-weight: bold;
        text-align: center;
        margin-top: 50px;
        padding: 8px 0;
      "
    >
      Agus Dana <span style="color: yellow; font-style:oblique">Portfolio</span>
    </div>

    <!-- Skills Section -->
    <div style="text-align: center; margin-top: 50px">
      <!-- Title -->
      <h1 style="font-size: 2.7rem; font-weight: 500; margin-bottom: 30px">
        MY <span style="font-weight: bold; color: #000; font-style: italic;">SKILLS</span>
      </h1>

      <!-- Skills Icons -->
      <div
        style="
          display: flex;
          justify-content: space-evenly;
          align-items: center;
          gap: 50px;
          padding-top: 20px;
          margin-bottom: 50px;
        "
      >
        <!-- React Js -->
        <div>
          <img
            src="{{ asset('img/react-js-removebg-preview.png') }}" 
            href="#"
            alt="React Js"
            style="
              width: 100px;
              transition: transform 0.3s ease-in-out;
              cursor: pointer;
            "
            onmouseover="this.style.transform='scale(1.1)'"
            onmouseout="this.style.transform='scale(1)'"
          />
          <h4 style="font-weight: 500; 
          margin-top: 10px;"
          >React Js</h4>
        </div>

        <!-- Next Js -->
        <div>
          <img
            src="{{ asset('img/nextt.jpg') }}"
            href="#"
            alt="Next Js"
            style="
              width: 100px;
              transition: transform 0.3s ease-in-out;
              cursor: pointer;
              border-radius: 50%"
            onmouseover="this.style.transform='scale(1.1)'"
            onmouseout="this.style.transform='scale(1)'"
          />
          <h4 style="font-weight: 500; 
          margin-top: 20px"
          >Next Js</h4>
        </div>

        <!-- Node Js -->
        <div>
          <img
            src="{{ asset('img/node-js-removebg-preview.png') }}"
            href="#"
            alt="Node Js"
            style="
              width: 100px;
              transition: transform 0.3s ease;
              cursor: pointer;
              margin-top: 20px
            "
            onmouseover="this.style.transform='scale(1.1)'"
            onmouseout="this.style.transform='scale(1)'"
          />
          <h4 style="font-weight: 500; "
          >Node Js</h4>
        </div>
      </div>

      <!-- Experience Section -->
      <div class="container-fluid">
        <div class="row p-4 -md-4">
          <div
            class="col-lg-6 col-md-12 d-flex flex-column align-items-center justify-content-center"
          >
            <h1 class="fw-bold">2</h1>
            <h1>Years <span class="fw-bold" style="font-style: italic;">Experience</span></h1>
          </div>
          <div class="col-lg-6 col-md-12">
            <div class="row gap-4 gap-sm-2 justify-content-center">
              <div
                class="col-5 d-flex flex-column align-items-center p-4 bg-danger rounded-3"
              >
                <h1 class="fw-bold text-light">2+</h1>
                <h6 class="fw-bold text-light">Years Experience</h6>
              </div>
              <div
                class="col-5 d-flex flex-column align-items-center p-4 bg-warning rounded-3"
              >
                <h1 class="fw-bold text-dark">3</h1>
                <h6 class="fw-bold text-dark">Achivement</h6>
              </div>
              <div
                class="col-5 d-flex flex-column align-items-center p-4 bg-success rounded-3"
              >
                <h1 class="fw-bold text-light">6</h1>
                <h6 class="fw-bold text-light">Complete Projects</h6>
              </div>
              <div
                class="col-5 d-flex flex-column align-items-center p-4 my-orange rounded-3"
              >
                <h1 class="fw-bold text-dark">6</h1>
                <h6 class="fw-bold text-dark">Clients</h6>
              </div>
            </div>
          </div>
        </div>
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