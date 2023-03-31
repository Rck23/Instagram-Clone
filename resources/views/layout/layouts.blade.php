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

    <header>

    <nav class="navbar navbar-expand-lg">
        <div class="nav-cont d-flex ">
            <h1>Instagram Clone</h1>
    
            <div class="iconos">
                <svg aria-label="Inicio" class="_8-yf5 " fill="#262626" height="22" viewBox="0 0 48 48" width="22"><path d="M45.3 48H30c-.8 0-1.5-.7-1.5-1.5V34.2c0-2.6-2-4.6-4.6-4.6s-4.6 2-4.6 4.6v12.3c0 .8-.7 1.5-1.5 1.5H2.5c-.8 0-1.5-.7-1.5-1.5V23c0-.4.2-.8.4-1.1L22.9.4c.6-.6 1.5-.6 2.1 0l21.5 21.5c.4.4.6 1.1.3 1.6 0 .1-.1.1-.1.2v22.8c.1.8-.6 1.5-1.4 1.5zm-13.8-3h12.3V23.4L24 3.6l-20 20V45h12.3V34.2c0-4.3 3.3-7.6 7.6-7.6s7.6 3.3 7.6 7.6V45z"></path></svg>
                <svg aria-label="Messenger" class="_8-yf5 " fill="#262626" height="22" viewBox="0 0 48 48" width="22"><path d="M36.2 16.7L29 22.2c-.5.4-1.2.4-1.7 0l-5.4-4c-1.6-1.2-3.9-.8-5 .9l-6.8 10.7c-.7 1 .6 2.2 1.6 1.5l7.3-5.5c.5-.4 1.2-.4 1.7 0l5.4 4c1.6 1.2 3.9.8 5-.9l6.8-10.7c.6-1.1-.7-2.2-1.7-1.5zM24 1C11 1 1 10.5 1 23.3 1 30 3.7 35.8 8.2 39.8c.4.3.6.8.6 1.3l.2 4.1c0 1 .9 1.8 1.8 1.8.2 0 .5 0 .7-.2l4.6-2c.2-.1.5-.2.7-.2.2 0 .3 0 .5.1 2.1.6 4.3.9 6.7.9 13 0 23-9.5 23-22.3S37 1 24 1zm0 41.6c-2 0-4-.3-5.9-.8-.4-.1-.8-.2-1.3-.2-.7 0-1.3.1-2 .4l-3 1.3V41c0-1.3-.6-2.5-1.6-3.4C6.2 34 4 28.9 4 23.3 4 12.3 12.6 4 24 4s20 8.3 20 19.3-8.6 19.3-20 19.3z"></path></svg>
                <svg aria-label="Buscar personas" class="_8-yf5 " fill="#262626" height="22" viewBox="0 0 48 48" width="22"><path clip-rule="evenodd" d="M24 0C10.8 0 0 10.8 0 24s10.8 24 24 24 24-10.8 24-24S37.2 0 24 0zm0 45C12.4 45 3 35.6 3 24S12.4 3 24 3s21 9.4 21 21-9.4 21-21 21zm10.2-33.2l-14.8 7c-.3.1-.6.4-.7.7l-7 14.8c-.3.6-.2 1.3.3 1.7.3.3.7.4 1.1.4.2 0 .4 0 .6-.1l14.8-7c.3-.1.6-.4.7-.7l7-14.8c.3-.6.2-1.3-.3-1.7-.4-.5-1.1-.6-1.7-.3zm-7.4 15l-5.5-5.5 10.5-5-5 10.5z" fill-rule="evenodd"></path></svg>
                <svg aria-label="Sección de actividad" class="_8-yf5 " fill="#262626" height="22" viewBox="0 0 48 48" width="22"><path d="M34.6 6.1c5.7 0 10.4 5.2 10.4 11.5 0 6.8-5.9 11-11.5 16S25 41.3 24 41.9c-1.1-.7-4.7-4-9.5-8.3-5.7-5-11.5-9.2-11.5-16C3 11.3 7.7 6.1 13.4 6.1c4.2 0 6.5 2 8.1 4.3 1.9 2.6 2.2 3.9 2.5 3.9.3 0 .6-1.3 2.5-3.9 1.6-2.3 3.9-4.3 8.1-4.3m0-3c-4.5 0-7.9 1.8-10.6 5.6-2.7-3.7-6.1-5.5-10.6-5.5C6 3.1 0 9.6 0 17.6c0 7.3 5.4 12 10.6 16.5.6.5 1.3 1.1 1.9 1.7l2.3 2c4.4 3.9 6.6 5.9 7.6 6.5.5.3 1.1.5 1.6.5.6 0 1.1-.2 1.6-.5 1-.6 2.8-2.2 7.8-6.8l2-1.8c.7-.6 1.3-1.2 2-1.7C42.7 29.6 48 25 48 17.6c0-8-6-14.5-13.4-14.5z"></path></svg>
                <img class="small-logo" src="data:image/jpeg;base64,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" alt="">
            </div>
        </div>
     </nav>
        <!-- Navbar -->
        {{-- <nav class="navbar navbar-expand-lg" >
          <div class="d-flex justify-content-center align-items-center">
            <button
              class="navbar-toggler bg-light m-3"
              type="button"
              data-mdb-toggle="collapse"
              data-mdb-target="#navbarExample01"
              aria-controls="navbarExample01"
              aria-expanded="false"
              aria-label="Toggle navigation"
            ><i class="bi bi-list"></i></button>
            <div class="collapse navbar-collapse" id="navbarExample01">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
 
                @guest
                <li class="nav-item active">
                  <a class="nav-link  fw-bold" aria-current="page" href="http://127.0.0.1:8000/">Inicio</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link  fw-bold" aria-current="page" href="http://127.0.0.1:8000/login">Inicio de sesión</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link  fw-bold" aria-current="page" href="http://127.0.0.1:8000/formulario">Crear cuenta</a>
                </li>
                @endguest
                
                @auth
                <ul class="d-flex align-items-center">
                    <li class="nav-item ">
                        <a style="color:#F20746;" class="nav-link fw-bold">
                          <i style="color: #000;" class="fas fa-solid fa-user"></i>
                          {{ auth()->user()->username }}
                        </a>
                    </li>
                </ul>
                <div class="d-flex ">
                    <ul class=" navbar-nav ml-auto derecha">
                        <li class="nav-item">
                            <a href="{{ route('post.create') }}" class="nav-link  botonesAuth ">
                                <i class="fas fa-plus-circle m-1"></i>Añadir dulces
                            </a>
                        </li>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="btn botonesAuth1  fw-bold">
                              Cerrar sesión
                            </button>
                        </form>
                </div>
            </ul>
        @endauth
              </ul>
            </div>
          </div>
        </nav>
        <!-- Navbar --> --}}

      <div class="container mt-5 mb-5">
        <h1>@yield('titulo')</h1>
        <hr class="hr">
        @yield('contenido')
      </div>


      {{-- <section class="">
        <!-- Footer -->
        <footer class="text-center text-white" style="background-color: #000;">

          <!-- Copyright -->
          <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            © 2023 Holi:
            <a class="text-white" href="https://github.com/Rck23">isabelcristina.com</a>
          </div>
          <!-- Copyright -->
        </footer>
        <!-- Footer -->
      </section> --}}

</body>
</html>
