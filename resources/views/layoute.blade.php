<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    {{-- ref --}}
    <meta name="keywords" content="Branding & Graphisme, Print & édition, Réseaux sociaux, La production événementielle, Personnalisation textile" />
    {{-- <meta name="description" content=""/> --}}
    <meta charset="utf-8">


    {{-- end ref --}}
    <title>SMART COMMUNICATION</title>
    <link href="{{URL::asset('img/smart_logo.png')}}" rel="icon">
    <link href="{{URL::asset('img/smart_logo.png')}}" rel="apple-touch-icon">
    <link rel="apple-touch-icon" href="{{URL::asset('img/smart_logo.png')}}">
    <link rel="shortcut" href="{{URL::asset('img/smart_logo.png')}}">

    <link rel="stylesheet" href="css/owl.carousel.min.css" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
      crossorigin="anonymous"
    />
    <!-- aos -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <!-- font -->
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="{{URL::asset('css/line-font.css')}}">
    <!-- style -->
    <link rel="stylesheet" href="{{URL::asset('css/style.css')}}">
  </head>
  <body data-bs-spy="scroll" data-bs-target=".navbar">
    <!-- Start Navbar -->
    <nav
      class="navbar navbar-expand-lg bg-white fixed-top"
      data-aos="fade-down">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img class="logo-smart" src="{{URL::asset('img/smart_logo.png')}}" alt="smart communication" />
        </a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="#ACCUEIL">ACCUEIL</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#SOMME-NOUS">QUI SOMME-NOUS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#services">SERVICES</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact">CONTACT</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->


    <div>
        @yield("content")
    </div>


       <!-- start Footer -->
       <footer class="py-4">
        <div class="container">
          <div class="row">
            <div class="col-md-6">
              <p class="mb-3">&copy; Copyright Tous les droits sont réservés à SMART COMMUNICATION
              </p>
            </div>
            <div class="col-md-6 text-md-end">
              <div class="social">
                <a href="https://www.facebook.com/visaimmigrationgroup?mibextid=LQQJ4d" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="https://instagram.com/vig_nkc?igshid=YmMyMTA2M2Y=" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a class="tiktok" href="https://www.tiktok.com/@vig_nkc?_t=8ZA0o6Pfep3&_r=1" ><i class='bx bxl-tiktok'></i></a>
              </div>
            </div>
          </div>
        </div>
      </footer>
      <!-- End Footer -->

      <!-- bootstrap -->
      <script src="{{URL::asset('js/jquery-3.3.1.min.js')}}"></script>
      <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"
      ></script>
      <!-- aos -->
      <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
      <script src=" {{URL::asset('js/owl.carousel.min.js')}} "></script>
      <script src="{{URL::asset('js/app.js')}}"></script>
    </body>
  </html>

