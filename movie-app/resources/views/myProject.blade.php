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
                      <a class="nav-link text-dark" href="/about">About Me</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link active text-dark" href="/myProject">My Project</a>
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
                    <a class="nav-link" aria-current="page" href="/about">About Me</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="/myProject">My Project</a>
                  </li>
                </ul>
                <form class="d-flex" role="search">
                  <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" style="background-color: #fff; color: #000;">
                  <button class="btn btn-outline-light" type="submit">Submit</button>
                </form>
              </div>
            </div>
          </nav>

    {{-- Content Skill Require --}}
    <!-- Judul Project -->
    <div style="text-align: left; margin-top: 10px; padding-left: 15px">
      <!-- Title -->
      <h1 style="font-size: 2rem; font-weight: 500; margin-bottom: 30px">
        MY <span style="font-weight: bold; color: #000; font-style: italic;">PROJECT</span>
      </h1>
    </div>

    {{-- content 1 --}}
    <div class="container-fluid">
        
        <div class="row d-sm-flex justify-content-center">
            {{-- Img --}}
          <img src="{{ asset('img/react-project.png') }}" alt="Foto-1" 
            class="img-1 col-6 img-fluid" 
              style="height: 320px;
              width: 550px;
              border-radius: 12px;
              margin-top: 40px;
              box-shadow: 0 0 5px 5px rgba(0, 0, 0, 0.8);">
          <div class="col-md-6 d-flex align-items-center"> 
            <div style="padding: 20px;">
              <div class="judul d-flex align-items-center"> 
                <h2 style="font-weight: bold">Project Web Sekolah:</h2>
              </div>
              <p style="text-align: justify; line-height: 1.8;">
                Project ini dibuat menggunakan salah satu Framework dari Java-
                script yaitu ReactJs sebagai Front-End dan pada bagian BackEnd
                saya menggunakan NodeJs.
              </p>
            </div>
          </div>
        </div>
    </div>

    {{-- content 2 --}}
    <div class="container-fluid">
      <div class="row d-sm-flex justify-content-center">
          {{-- Img --}}
        <img src="{{ asset('img/portfolio.png') }}" alt="Foto-1" 
          class="img-1 col-6 img-fluid" 
            style="height: 310px;
            width: 550px;
            border-radius: 12px;
            margin-top: 40px;
            box-shadow: 0 0 5px 5px rgba(0, 0, 0, 0.8);">
        <div class="col-md-6 d-flex align-items-center"> 
          <div style="padding: 20px;">
            <div class="judul d-flex align-items-center"> 
              <h2 style="font-weight: bold;">Project Web Portfolio:</h2>
            </div>
            <p style="text-align: justify; line-height: 1.8;">
              Project ini dibuat menggunakan salah satu Framework dari PHP 
              yaitu Laravel sebagai Backend dan pada bagian FrontEnd nya 
              menggunakan Bootstrap yang sekaligus menggunakan Css Murni.
            </p>
          </div>
        </div>
      </div>
    </div>

    {{-- content 3 --}}
    <div class="container-fluid">
      <div class="row d-sm-flex justify-content-center">
          {{-- Img --}}
        <img src="{{ asset('img/portfolio.png') }}" alt="Foto-1" 
          class="img-1 col-6 img-fluid" 
            style="height: 310px;
            width: 550px;
            border-radius: 12px;
            margin-top: 40px;
            box-shadow: 0 0 5px 5px rgba(0, 0, 0, 0.8);">
        <div class="col-md-6 d-flex align-items-center"> 
          <div style="padding: 20px;">
            <div class="judul d-flex align-items-center"> 
              <h2 style="font-weight: bold;">Project Web Portfolio:</h2>
            </div>
            <p style="text-align: justify; line-height: 1.8;">
              Project ini dibuat menggunakan salah satu Framework dari PHP 
              yaitu Laravel sebagai Backend dan pada bagian FrontEnd nya 
              menggunakan Bootstrap yang sekaligus menggunakan Css Murni.
            </p>
          </div>
        </div>
      </div>
    </div>
    {{-- Content/Project yang dibuat --}}
    
    <!-- Footer -->
  <div class="container-fluid" style="background-color: #007bff; color: white; padding: 30px 10px; font-family: Arial, sans-serif; margin-top: 40px">
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