@extends('layout.layouts')


@push('styles')
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
@endpush

@section('contenido')

<nav class="navbar navbar-expand-lg">
    <div class="nav-cont d-flex ">
        <h1>Instagram Clone</h1>

        <div class="iconos">
          

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
        
              <div class="d-flex ">
                  <ul class=" navbar-nav ml-auto ">
           
                      <form action="{{ route('logout') }}" method="POST">
                          @csrf
                          <button type="submit" class="btn post  fw-bold">
                            Cerrar sesión
                          </button>
                      </form>
              </div>
          </ul>
      @endauth

            {{-- <svg aria-label="Messenger" class="_8-yf5 " fill="#262626" height="22" viewBox="0 0 48 48" width="22"><path d="M36.2 16.7L29 22.2c-.5.4-1.2.4-1.7 0l-5.4-4c-1.6-1.2-3.9-.8-5 .9l-6.8 10.7c-.7 1 .6 2.2 1.6 1.5l7.3-5.5c.5-.4 1.2-.4 1.7 0l5.4 4c1.6 1.2 3.9.8 5-.9l6.8-10.7c.6-1.1-.7-2.2-1.7-1.5zM24 1C11 1 1 10.5 1 23.3 1 30 3.7 35.8 8.2 39.8c.4.3.6.8.6 1.3l.2 4.1c0 1 .9 1.8 1.8 1.8.2 0 .5 0 .7-.2l4.6-2c.2-.1.5-.2.7-.2.2 0 .3 0 .5.1 2.1.6 4.3.9 6.7.9 13 0 23-9.5 23-22.3S37 1 24 1zm0 41.6c-2 0-4-.3-5.9-.8-.4-.1-.8-.2-1.3-.2-.7 0-1.3.1-2 .4l-3 1.3V41c0-1.3-.6-2.5-1.6-3.4C6.2 34 4 28.9 4 23.3 4 12.3 12.6 4 24 4s20 8.3 20 19.3-8.6 19.3-20 19.3z"></path></svg>

            <svg aria-label="Buscar personas" class="_8-yf5 " fill="#262626" height="22" viewBox="0 0 48 48" width="22"><path clip-rule="evenodd" d="M24 0C10.8 0 0 10.8 0 24s10.8 24 24 24 24-10.8 24-24S37.2 0 24 0zm0 45C12.4 45 3 35.6 3 24S12.4 3 24 3s21 9.4 21 21-9.4 21-21 21zm10.2-33.2l-14.8 7c-.3.1-.6.4-.7.7l-7 14.8c-.3.6-.2 1.3.3 1.7.3.3.7.4 1.1.4.2 0 .4 0 .6-.1l14.8-7c.3-.1.6-.4.7-.7l7-14.8c.3-.6.2-1.3-.3-1.7-.4-.5-1.1-.6-1.7-.3zm-7.4 15l-5.5-5.5 10.5-5-5 10.5z" fill-rule="evenodd"></path></svg>

            <svg aria-label="Sección de actividad" class="_8-yf5 " fill="#262626" height="22" viewBox="0 0 48 48" width="22"><path d="M34.6 6.1c5.7 0 10.4 5.2 10.4 11.5 0 6.8-5.9 11-11.5 16S25 41.3 24 41.9c-1.1-.7-4.7-4-9.5-8.3-5.7-5-11.5-9.2-11.5-16C3 11.3 7.7 6.1 13.4 6.1c4.2 0 6.5 2 8.1 4.3 1.9 2.6 2.2 3.9 2.5 3.9.3 0 .6-1.3 2.5-3.9 1.6-2.3 3.9-4.3 8.1-4.3m0-3c-4.5 0-7.9 1.8-10.6 5.6-2.7-3.7-6.1-5.5-10.6-5.5C6 3.1 0 9.6 0 17.6c0 7.3 5.4 12 10.6 16.5.6.5 1.3 1.1 1.9 1.7l2.3 2c4.4 3.9 6.6 5.9 7.6 6.5.5.3 1.1.5 1.6.5.6 0 1.1-.2 1.6-.5 1-.6 2.8-2.2 7.8-6.8l2-1.8c.7-.6 1.3-1.2 2-1.7C42.7 29.6 48 25 48 17.6c0-8-6-14.5-13.4-14.5z"></path></svg> 
            
            <img class="small-logo" src="{{asset('img/uta.png')}}" alt=""> --}}
        </div>
    </div>
 </nav>
 
    <div class="row">
        <div class="mb-5 mt-5 col-5 p-5 text-center m-2 rounded-2">
            <h4 class="mb-3">imagen aqui</h4>

            <form action="{{ route('imagenes') }}" id="dropzone" method="POST" enctype="multipart/form-data"
                class="dropzone w-100 h-100 rounded border-1 d-flex" style="align-items: center;">
                @csrf
            </form>

        </div>

        <div class="mb-5 mt-5  col-6 p-5 text-center m-1 rounded-2 border">
            <h2 class="mb-3">Crea tu nuevo post</h2>
            <form class="" action="{{ route('post.store') }}" method="POST" novalidate>
                @csrf
                <div class="form-outline m-3">
                    <input type="text" id="typeText" class="form-control" name="titulo" />
                    <label class="form-label" for="typeText">Titulo</label>
                </div>
                @error('titulo')
                    <p style="color: red">{{ $message }}</p>
                @enderror
                <div class="form-outline m-3">
                    <textarea class="form-control" name="descripcion" id="textAreaExample" rows="4"></textarea>
                    <label class="form-label" for="textAreaExample">Mensaje</label>
                </div>
                @error('descripcion')
                    <p style="color: red">{{ $message }}</p>
                @enderror
                <div>
                    <input name="imagen" id="imagen" type="hidden" value={{ old('imagen') }} />
                </div>
                @error('imagen')
                    <p style="color:red">{{ $message }}</p>
                @enderror
                <button type="submit" class="btn post mb-4">Crear Publicacion</button>
            </form>
        </div>
    @endsection
