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
        overflow-x: hidden;
      }

      .nav-item, .nav-link{
        color: #fff;
      }

      /* container biodata */
      .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background: linear-gradient(to bottom, #1e90ff, #00bfff);
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            color: #fff;
        }
        .biodata-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }
        .image-container {
            flex: 1 1 200px;
            min-width: 200px;
            max-width: 300px;
        }

        .image-container img:hover {
          box-shadow: 0 0 4px 3px rgb(8, 104, 172);
          transition: all 0.5s;
        }

        .biodata {
            flex: 1 1 300px;
            min-width: 300px;
        }
        /* Hp */
        @media (max-width: 768px) {
            .container {
              max-width: 450px;
              margin: 20px auto;
              padding: 20px;
              overflow: hidden;
            }
            .biodata-container {
              display: flex;
              flex-wrap: wrap;
              gap: 10px;
            }
            .image-container {
              flex: 1 1 100px;
              min-width: 100px;
              max-width: 300px;
            }
            .biodata {
              flex: 1 1 200px;
              min-width: 200px;
              gap: 6px;
            }
        }

        /* container skill */
      .container-skill {
          display: flex;
          justify-content: space-evenly;
          align-items: center;
          gap: 50px;
          padding-top: 20px;
          margin-bottom: 50px;
      }

      /* media query container skill */
      @media(max-width: 768px) {
        .container-skill {
          flex-direction: column;
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
        <nav class="navbar navbar-expand-lg bg-primary" style="position: sticky;"> 
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
                      <a class="nav-link text-dark" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active text-dark" href="/about">About Me</a>
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
                    <a class="nav-link" aria-current="page" href="/">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="/about">About Me</a>
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

          {{-- About Me --}}
          {{-- Judul --}}
          <h1 class="judul-h1
          d-flex 
          justify-content-center 
          align-items-center 
          gap-2
          mt-3"
          style="font-size: 2rem;"
          >About
          <span class="fw-bold" 
          style="font-style: italic;"
          >Me</span></h1>

          {{-- Biodata --}}
          <div class="container border border-primary">
            <div class="biodata-container">
                <div class="image-container">
                    <img src="{{ asset('img/agus.png') }}" alt="Agus Dana" class="img-fluid"
                    style=" 
                    border-radius: 20px;">
                </div>

                <div class="biodata">
                  <h4 class="fw-bold">My <span>Biodata</span></h4>
                    <p><strong>Nama:</strong> Agus Dana</p>
                    <p><strong>Tanggal Lahir:</strong> 21 Mei 2008</p>
                    <p><strong>Alamat:</strong> Bali, Indonesia</p>
                    <p><strong>Kode Pos:</strong> 80119</p>
                    <p><strong>Email:</strong> agusdana@gmail.com</p>
                    <p><strong>Telepon:</strong> +62-81-7675-65726</p>
                    <p class="mt-2">
                      <span style="color: orange; font-weight: bold; font-size: 30px">8</span>
                      <strong class="fst-italic">Project Complete</strong>
                    </p>
                </div>
            </div>
        </div>
          {{-- About Me End --}} 

    {{-- Content Skill Require --}}
    <!-- Skills Section -->
    <div style="text-align: center; margin-top: 30px">
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
            <h5 class="fw-bold fst-italic">Experience</h5>
          </div>
          <div class="col-lg-6 col-md-12">
            <div class="row gap-4 gap-sm-2 justify-content-center">
              <div
                class="col-5 d-flex flex-column align-items-center p-4  rounded-3"
                style="box-shadow: 0 5px 15px rgba(0, 0, 0, 1); background-color: #dc3545;"
              >
                <h1 class="fw-bold text-light">2+</h1>
                <h6 class="fw-bold text-light">Years Experience</h6>
              </div>
              <div
                class="col-5 d-flex flex-column align-items-center p-4  rounded-3"
                style="box-shadow: 0 5px 15px rgba(0, 0, 0, 1); background-color: #ffc107;"
              >
                <h1 class="fw-bold text-dark">3</h1>
                <h6 class="fw-bold text-dark">Achivement</h6>
              </div>
              <div
                class="col-5 d-flex flex-column align-items-center p-4 rounded-3"
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
              <a href="#" style=""><i class="bi bi-geo-alt-fill p-1" style="color: #000;"></i></a>
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