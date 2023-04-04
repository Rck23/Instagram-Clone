<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Instagram Clone</title>


    <link rel="stylesheet" href="{{asset('css/mdb.min.css')}}">


    <link rel="stylesheet" href="{{asset('css/estiloYo.css')}}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/min/dropzone.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/min/dropzone.min.js"></script>

    <script src="{{asset('js/mdb.min.js')}}"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">


    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    
</head>
<body>



      <div class="container mt-2 mb-5">
        <h1>@yield('titulo')</h1>
    
        @yield('contenido')
      </div>


      </section>
      <footer>
        <!-- Copyright -->
        <div class="text-center p-3" >
          © 2023 Desarrollado por:
          <a class="fw-bold" target="_blank" href="https://github.com/Rck23">
            <span class="fas fa-heart"></span>
            Ulises Mtz 
          </a>
        </div>
        <!-- Copyright -->
      </footer>
</body>
</html>
