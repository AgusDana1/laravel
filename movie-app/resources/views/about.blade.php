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
                text-shadow:0 0 10px #000;"
                >AD
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
                style="background-color: #fff">
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
                    width: 100%;">AD <span style="color: #03fce8; text-shadow:0 0 2px #000;font-weight: bold; font-style: italic;" 
                    href="/">Project</span></a> 
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
                    <a class="nav-link" aria-current="page" href="/">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="/about">About Me</a>
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

          {{-- About Me --}}
          {{-- Judul --}}
          <h1 class="judul 
          d-flex 
          justify-content-center 
          align-items-center 
          gap-2
          mt-3"
          >About
          <span class="fw-bold" 
          style="font-style: italic;"
          >Me</span></h1>

          {{-- content --}}
          <div class="container mt-5">
            <div class="row justify-content-center"
            style="max-width: 1200px; margin:auto; margin-top: 20px; border-radius: 20px;">
              <!-- Card Utama -->
              <div
                class="col-12 col-md-8 col-lg-6 p-4"
                style="
                  background: linear-gradient(to bottom, #1e90ff, #00bfff);
                  border-radius: 10px;
                  color: #fff;
                  box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
                "
              >
                <div class="row g-3 align-items-center">
                  <!-- Gambar -->
                  <div class="col-12 col-md-5">
                    <img
                      src="{{ asset('img/agus.png') }}"
                      alt="Agus Dana"
                      class="img-fluid rounded"
                      style="max-width: 100%; height: auto;"
                    />
                  </div>
                  <!-- Biodata -->
                  <div class="col-12 col-md-7">
                    <h4 class="fw-bold text-center text-md-start mb-3">
                      My <span class="fw-bold">Biodata</span>
                    </h4>
                    <div class="container-bio d-flex">
                      <p class="mb-1">
                        <strong class="g-3">Nama:</strong> Agus Dana <br />
                        <strong class="g-3">Date of Birth:</strong> May 21, 2008 <br />
                        <strong class="g-3">Address:</strong> Bali, Indonesia <br />
                        <strong class="g-3">ZIP Code:</strong> 80119 <br />
                        <strong class="g-3">Email:</strong> agusdana@gmail.com <br />
                        <strong class="g-3">Phone:</strong> +628176726532
                      </p>
                    </div>
                    <p>
                      <span class="text-warning fw-bold"
                      style="font-size: 23px">8</span> Project Complete
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          {{-- About Me End --}} 

    {{-- Content Skill Require --}}
    <!-- Skills Section -->
    <div style="text-align: center; margin-top: 30px">
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