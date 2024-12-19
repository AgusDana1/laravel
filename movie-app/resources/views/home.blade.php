<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    {{-- Bs Link --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Bs icons -->
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
/>
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

      /* img slider hover */
      .img-1 {
        transition: all 0.5s;
      }

      .img-1:hover {
        filter: blur(0.8);
        box-shadow: 0 0 8px 8px rgba(0, 0, 0, 0.2);
      }

      .nav-item, .nav-link{
        color: #fff;
      }

      #text-bergerak {
        animation-name: geser;
        animation-duration: 10s;
        animation-timing-function: linear;
        animation-iteration-count: infinite;
      }

      @keyframes geser {
        from {
          transform: translateX(-120%); 
        }
        to {
          transform: translateX(120%);
        }
      }

      /* media querry container skill */
      @media(max-width: 768px) {
        .container-skill {
          flex-direction: column;
        }
      }

      /* media queryy text bergerak animation */
      @media(max-width: 768px) {
        #text-bergerak {
        animation-name: geser;
        animation-duration: 8s;
        animation-timing-function: linear;
        animation-iteration-count: infinite;
      }
      }

      /* media query con-sosmed versi desktop */
      @media(max-width: 1900px) {
        .con-sosmed {
            display: flex; 
            flex-direction: column; 
            align-items: center;
            gap: 10px; 
            margin-top: 10px;
        }
      }

      /* media query con-sosmed versi mobile */
      @media(max-width: 768px) {
        .con-sosmed {
          align-items: start;
        }
      }

      /* media query container-email, telephone, location versi desktop */
      @media(max-width: 1900px) {
        .container-email {
          display: flex;
          justify-content: center;
          align-items: start;
        }

        .container-telephone {
          display: flex;
          justify-content: center;
          align-items: start;
        }

        .container-location {
          display: flex;
          justify-content: center;
          align-items: start;
        }
      }

      /* media query container-email, telephone, location versi mobile */
      @media(max-width: 768px) {
        .container-email {
          display: flex; 
          justify-content: left;
          align-items: start
        }

        .container-telephone {
          display: flex; 
          justify-content: left;
          align-items: start
        }

        .container-location {
          display: flex; 
          justify-content: left;
          align-items: start
        }
      }

      /* media query judul sosial versi mobile */
      @media(max-width: 768px) {
        .judul-sosial {
          display: flex;
          justify-content: left;
        }

        .judul-contact {
          display: flex;
          justify-content: left;
          padding-top: 30px;
        }
      }

      .judul a {
        display: flex;
        justify-content: center;
        font-weight: bold;
        padding-left: 3px;
        font-size: 1.4rem;
        margin-bottom: 4px;
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
                    style="color: dodgerblue">
                    <li class="nav-item">
                      <a class="nav-link active text-dark" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-dark" href="/about">About Me</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text-dark" href="/myProject">My Project</a>
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
                    <a class="nav-link" href="/myProject">My Project</a>
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
            <img src="{{ asset('img/nextt.jpg') }}" alt="Foto-1" class="img-1 col-6 img-fluid" style="height: 320px;
              width: 330px;
              border-radius: 50%">
            <!-- Right (Text) -->
            <div class="col-md-6 d-flex align-items-center"> 
              <div style="padding: 20px;">
                <div class="judul d-flex align-items-center"> 
                  <h2 style="font-weight: bold">Experience 1</h2>
                  <a href="https://nextjs.org/" style="text-decoration: none;">Next Js :</a>
                </div>
                <p style="text-align: justify; line-height: 1.8;">
                  Project ini dibuat oleh saya sendiri menggunakan Framework
              seperti React Js pada front-endnya dan pada bagian server side
              rendering (SSR) saya menggunakan Next Js. Sebenarnya Next Js sendiri
              merupakan Framework yang sudah mengandung sifat "FullStack" didalamnya.
              Dan Mengapa saya memilih menggunakan Next Js sebagai server side? 
              Karena hasil dari riset yang saya dapat bahwa Next Js lebih populer.
                </p>
              </div>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item">
          <div class="row d-sm-flex justify-content-center" style="padding: 20px">
            <!-- Left (Image Placeholder) -->
            <img src="{{ asset('img/node-js-removebg-preview.png') }}" alt="Foto-1" class="img-1 col-6 img-fluid" style="height: 320px;
              width: 320px;
              border-radius: 12px;">
            <!-- Right (Text) -->
            <div class="col-md-6 d-flex align-items-center"> 
              <div style="padding: 20px;">
                <div class="judul d-flex align-items-center"> 
                  <h2 style="font-weight: bold">Experience 2</h2>
                  <a href="https://nodejs.org/en" style="text-decoration: none;">Node Js :</a>
                </div>
                
                <p style="text-align: justify; line-height: 1.8;">
                  Untuk selanjutnya saya memiliki project dan memilih 
                  menggunakan Node Js karena dari segi Fleksibelnya sebagai Backend Website
                  dan kebetulan basic saya di Javascript, maka dari itu saya memilih untuk 
                  menggunakan Node Js ini sebagai Backend nya jika lebih prefer menggunakan
                  Javascript. Dan karena saya pernah membuatkan website untuk client saya 
                  menggunakan Node Js.
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
            class="img-1 col-6 img-fluid" 
            style="height: 320px;
              width: 320px;
              border-radius: 12px;">
            <!-- Right (Text) -->
            <div class="col-md-6 d-flex align-items-center"> 
              <div style="padding: 20px;">
                <div class="judul d-flex align-items-center"> 
                  <h2 style="font-weight: bold">Experience 3</h2>
                  <a href="https://react.dev/" style="text-decoration: none;">React Js :</a>
                </div>

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
            class="img-1 col-6 img-fluid" 
            style="height: 320px;
              width: 320px;
              border-radius: 12px;">
            <!-- Right (Text) -->
            <div class="col-md-6 d-flex align-items-center"> 
              <div style="padding: 20px;">
                <div class="judul d-flex align-items-center"> 
                  <h2 style="font-weight: bold">Experience 4</h2>
                  <a href="https://laravel.com/" style="text-decoration: none;">Laravel :</a>
                </div>

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
        color: black;
        font-size: 2rem;
        font-weight: bold;
        text-align: center;
        margin-top: 50px;
        padding: 8px 0;
        background-color:rgba(67, 60, 190, 0.1);
      "
    >
        <div id="text-bergerak">
          Agus Dana <span style="color: #0d6efd; font-style:oblique">Portfolio</span>
        </div>
        
    </div>

    <!-- Skills Section -->
    <div style="text-align: center; margin-top: 50px">
      <!-- Title -->
      <h1 style="font-size: 2rem; font-weight: 500; margin-bottom: 30px">
        MY <span style="font-weight: bold; color: #000; font-style: italic;">SKILLS</span>
      </h1>

      <!-- Skills Icons -->
      <div
        class="container-skill"
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
            class="col-lg-6 col-md-12 d-flex justify-content-center align-items-center"
          >
            <h1 class="fw-bold p-2">My</h1>
            <h5 class="fw-bold">Experience</h5>
          </div>
          <div class="col-lg-6 col-md-12">
            <div class="row gap-4 gap-sm-2 justify-content-center">
              <div
                class="col-5 d-flex flex-column align-items-center p-4 rounded-3"
                style="box-shadow: 0 5px 15px rgba(0, 0, 0, 1); background-color: #dc3545;"
              >
                <h1 class="fw-bold text-light">2+</h1>
                <h6 class="fw-bold text-light">Years Experience</h6>
              </div>
              <div
                class="col-5 d-flex flex-column align-items-center p-4 rounded-3"
                style="box-shadow: 0 5px 15px rgba(0, 0, 0, 1); background-color: #ffc107;"
              >
                <h1 class="fw-bold text-dark">3</h1>
                <h6 class="fw-bold text-dark">Achivement</h6>
              </div>
              <div
                class="col-5 d-flex flex-column align-items-center p-4  rounded-3"
                style="box-shadow: 0 5px 15px rgba(0, 0, 0, 1); background-color: #20c997;"
              >
                <h1 class="fw-bold text-light">6</h1>
                <h6 class="fw-bold text-light">Complete Projects</h6>
              </div>
              <div
                class="col-5 d-flex flex-column align-items-center p-4 rounded-3"
                style="box-shadow: 0 5px 15px rgba(0, 0, 0, 1); background-color: #fd7e14;"
              >
                <h1 class="fw-bold text-dark">6</h1>
                <h6 class="fw-bold text-dark">Clients</h6>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Footer -->
<div class="container-fluid" style="background-color: #007bff; color: white; padding: 30px 10px; font-family: Arial, sans-serif;">
  <div class="row text-center">
      <!-- Bagian Connect -->
      <div class="col-md-6">
        <div class="judul-sosial">
          <h5 style="font-weight: bold;">SOCIAL MEDIA</h5>
        </div>
          <div class="con-sosmed">
              <div style="display: flex; align-items: center; gap: 18px;">
                  <img src="https://upload.wikimedia.org/wikipedia/commons/9/95/Instagram_logo_2022.svg"  alt="Instagram" width="20" height="20">
                  <div class="container-sosmed"
                    style="gap: 30px;">
                    <a href="https://instagram.com" style="color: #fff; text-decoration: none;">@aagusss_7</a>
                  </div>
              </div>
              <div style="display: flex; align-items: center; gap: 20px;">
                  <img src="https://upload.wikimedia.org/wikipedia/commons/6/6c/Facebook_Logo_2023.png" alt="Facebook" width="20" height="20">
                  <div class="container-sosmed"
                    style="gap: 30px;">
                    <a href="https://facebook.com" style="color: #fff; text-decoration: none;">Agus Dana</a>
                  </div>
              </div>
              <div style="display: flex; align-items: center; gap: 20px;">
                  <img src="https://upload.wikimedia.org/wikipedia/commons/4/42/YouTube_icon_%282013-2017%29.png" alt="Youtube" width="30" height="20">
                  <div class="container-sosmed"
                    style="gap: 30px;">
                    <a href="https://youtube.com" style="color: #fff; text-decoration: none;">Agus Danaa</a>
                  </div>
              </div>
              <div style="display: flex; align-items: center; gap: 10px;">
                  <img src="{{ asset('img/x.png') }}" alt="Twitter" width="30" height="30">
                  <div class="container-sosmed"
                    style="gap: 30px;">
                    <a href="https://x.com/home" style="color: #fff; text-decoration: none;">Agus Danaa</a>
                  </div>
              </div>
          </div>
      </div>
      <!-- Bagian Contact -->
      <div class="col-md-6">
        <div class="judul-contact">
          <h5 style="font-weight: bold;">CONTACT</h5>
        </div>
          <div style=" text-align:start;">
            {{-- c-email --}}
            <div class="container-email">
              <a href="https://gmail.com/" style=""><i class="bi bi-envelope p-1" style="color: #000;"></i></a>
              <p>sheetscreww@gmail.com</p>
            </div>

            {{-- c-telephone --}}
            <div class="container-telephone">
              <a href="#" style=""><i class="bi bi-telephone p-1" style="color: #000;"></i></a>
              <p>+62-81-7675-65726</p>
            </div>

            {{-- c-location --}}
            <div class="container-location">
              <a href="https://www.google.com/maps" style=""><i class="bi bi-geo-alt-fill p-1" style="color: #000;"></i></a>
              <p>Jl. Bukit Tunggal Gg Belawa No 9</p>
            </div>
          </div>
      </div>
  </div>
  <!-- Copyright -->
  <div class="row mt-4">
      <div class="col text-center">
          <p style="margin: 0;">Created By <span style="font-weight: bold;">Nyoman Agus Dana Adnyana</span> &copy; December 2024</p>
      </div>
  </div>
</div>
      {{-- Footer End --}}

    {{-- Bs Script --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>