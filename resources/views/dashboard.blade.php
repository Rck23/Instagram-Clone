@extends('layout.layouts')
{{-- 
@section('titulo')
    historia de
@endsection --}}

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
    <header>
        <div class="perfil-container">
            <img class="img-perfil" src="{{asset('img/uta.png')}}" alt="logo-universidad">
            <div class="contenedor-cabezera">
                <div class="cabezera1">
                    <h1>{{ auth()->user()->username }}</h1>
                    <button>IDGS-8-A</button>
                    <svg aria-label="Opciones" class="_8-yf5 " fill="#262626" height="24" viewBox="0 0 48 48" width="24"><path clip-rule="evenodd" d="M46.7 20.6l-2.1-1.1c-.4-.2-.7-.5-.8-1-.5-1.6-1.1-3.2-1.9-4.7-.2-.4-.3-.8-.1-1.2l.8-2.3c.2-.5 0-1.1-.4-1.5l-2.9-2.9c-.4-.4-1-.5-1.5-.4l-2.3.8c-.4.1-.8.1-1.2-.1-1.4-.8-3-1.5-4.6-1.9-.4-.1-.8-.4-1-.8l-1.1-2.2c-.3-.5-.8-.8-1.3-.8h-4.1c-.6 0-1.1.3-1.3.8l-1.1 2.2c-.2.4-.5.7-1 .8-1.6.5-3.2 1.1-4.6 1.9-.4.2-.8.3-1.2.1l-2.3-.8c-.5-.2-1.1 0-1.5.4L5.9 8.8c-.4.4-.5 1-.4 1.5l.8 2.3c.1.4.1.8-.1 1.2-.8 1.5-1.5 3-1.9 4.7-.1.4-.4.8-.8 1l-2.1 1.1c-.5.3-.8.8-.8 1.3V26c0 .6.3 1.1.8 1.3l2.1 1.1c.4.2.7.5.8 1 .5 1.6 1.1 3.2 1.9 4.7.2.4.3.8.1 1.2l-.8 2.3c-.2.5 0 1.1.4 1.5L8.8 42c.4.4 1 .5 1.5.4l2.3-.8c.4-.1.8-.1 1.2.1 1.4.8 3 1.5 4.6 1.9.4.1.8.4 1 .8l1.1 2.2c.3.5.8.8 1.3.8h4.1c.6 0 1.1-.3 1.3-.8l1.1-2.2c.2-.4.5-.7 1-.8 1.6-.5 3.2-1.1 4.6-1.9.4-.2.8-.3 1.2-.1l2.3.8c.5.2 1.1 0 1.5-.4l2.9-2.9c.4-.4.5-1 .4-1.5l-.8-2.3c-.1-.4-.1-.8.1-1.2.8-1.5 1.5-3 1.9-4.7.1-.4.4-.8.8-1l2.1-1.1c.5-.3.8-.8.8-1.3v-4.1c.4-.5.1-1.1-.4-1.3zM24 41.5c-9.7 0-17.5-7.8-17.5-17.5S14.3 6.5 24 6.5 41.5 14.3 41.5 24 33.7 41.5 24 41.5z" fill-rule="evenodd"></path></svg>
                </div>
                <div class="cabezera2">
                    <p><b>1</b> publicaciones</p>
                    <p><b>395</b> seguidores</p>
                    <p><b>619</b> seguidos</p>
                </div>
                <div class="cabezera3">
                    <h2>Universidad Tecnológica de Aguascalientes</h2>
                    <p class="p-ciencia">Materia: Desarrollo web profesional</p>
                    <p class="p-creador">Maestro: Jorge Alejandro Wong Alba</p>
                    <p class="p-dev">Hecho con: Php, Laravel 8</p>
                    <p class="p-suscribe">Encuentra este proyecto y otros en:   <a class="p-link" href="https://github.com/Rck23"><b>https://github.com/Rck23</b></a></p>
                  

                </div>
            </div>
        </div>

    </header>
    <main>
        <a href="{{ route('post.create') }}" class="btn post">
            <i class="fas fa-plus-circle m-1"></i>Crear nuevo post
        </a>
        <div class="linea"></div>
        <div class="main-nav">
            <a href="#">
                <svg aria-label="Publicaciones" class="_8-yf5 " fill="#262626" height="12" viewBox="0 0 48 48" width="12"><path clip-rule="evenodd" d="M45 1.5H3c-.8 0-1.5.7-1.5 1.5v42c0 .8.7 1.5 1.5 1.5h42c.8 0 1.5-.7 1.5-1.5V3c0-.8-.7-1.5-1.5-1.5zm-40.5 3h11v11h-11v-11zm0 14h11v11h-11v-11zm11 25h-11v-11h11v11zm14 0h-11v-11h11v11zm0-14h-11v-11h11v11zm0-14h-11v-11h11v11zm14 28h-11v-11h11v11zm0-14h-11v-11h11v11zm0-14h-11v-11h11v11z" fill-rule="evenodd"></path></svg>
                PUBLICACIONES
            </a>

        </div>

    </main>


    <div class="card-body text-dark" style="background-color: rgba(240, 234, 234, 0.817)">

        @if ($posts->count())
            <div class="row row-cols-1 row-cols-md-3 g-4">
                @foreach ($posts as $post)
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{ asset('uploads') . '/' . $post->imagen }}" class="card-img-top" alt="Devstagram" />
                            <div class="card-body">
                                <h5 class="card-title">{{ $post->titulo }}</h5>
                                <p class="card-text">
                                    <small class="text-info">
                                        {{ $post->descripcion }}
                                    </small>
                                    <small class="text-muted">{{ $post->created_at->diffForHumans() }}</small>
                                </p>
                            </div>
                            <div class="card-footer">
                                <a href="{{ route('posts.show', ['post' => $post, 'user' => $user]) }}"><i
                                        class="far fa-comment"></i></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
          <div> {{ $posts->links('pagination::bootstrap-5') }}
            @else
                <h1 class="text-center"></h1>
        @endif

        
    </div> 
    </div>
@endsection
