<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>SMART</title>
    <link href="{{URL::asset('img/smart logo.png')}}" rel="icon">

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


    <div>
        @yield("content")
    </div>


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

