@extends('layout.layouts')
{{-- 
@section('titulo')
    historia de
@endsection --}}

@section('contenido')

    <header>
        <div class="perfil-container">
            <img class="img-perfil" src="{{asset('img/uta.png')}}" alt="logo-universidad">
            <div class="contenedor-cabezera">
                <div class="cabezera1">
                    <h1>Ulises Mtz</h1>
                    <button>IDGS-8-A</button>
                    <svg aria-label="Opciones" class="_8-yf5 " fill="#262626" height="24" viewBox="0 0 48 48" width="24"><path clip-rule="evenodd" d="M46.7 20.6l-2.1-1.1c-.4-.2-.7-.5-.8-1-.5-1.6-1.1-3.2-1.9-4.7-.2-.4-.3-.8-.1-1.2l.8-2.3c.2-.5 0-1.1-.4-1.5l-2.9-2.9c-.4-.4-1-.5-1.5-.4l-2.3.8c-.4.1-.8.1-1.2-.1-1.4-.8-3-1.5-4.6-1.9-.4-.1-.8-.4-1-.8l-1.1-2.2c-.3-.5-.8-.8-1.3-.8h-4.1c-.6 0-1.1.3-1.3.8l-1.1 2.2c-.2.4-.5.7-1 .8-1.6.5-3.2 1.1-4.6 1.9-.4.2-.8.3-1.2.1l-2.3-.8c-.5-.2-1.1 0-1.5.4L5.9 8.8c-.4.4-.5 1-.4 1.5l.8 2.3c.1.4.1.8-.1 1.2-.8 1.5-1.5 3-1.9 4.7-.1.4-.4.8-.8 1l-2.1 1.1c-.5.3-.8.8-.8 1.3V26c0 .6.3 1.1.8 1.3l2.1 1.1c.4.2.7.5.8 1 .5 1.6 1.1 3.2 1.9 4.7.2.4.3.8.1 1.2l-.8 2.3c-.2.5 0 1.1.4 1.5L8.8 42c.4.4 1 .5 1.5.4l2.3-.8c.4-.1.8-.1 1.2.1 1.4.8 3 1.5 4.6 1.9.4.1.8.4 1 .8l1.1 2.2c.3.5.8.8 1.3.8h4.1c.6 0 1.1-.3 1.3-.8l1.1-2.2c.2-.4.5-.7 1-.8 1.6-.5 3.2-1.1 4.6-1.9.4-.2.8-.3 1.2-.1l2.3.8c.5.2 1.1 0 1.5-.4l2.9-2.9c.4-.4.5-1 .4-1.5l-.8-2.3c-.1-.4-.1-.8.1-1.2.8-1.5 1.5-3 1.9-4.7.1-.4.4-.8.8-1l2.1-1.1c.5-.3.8-.8.8-1.3v-4.1c.4-.5.1-1.1-.4-1.3zM24 41.5c-9.7 0-17.5-7.8-17.5-17.5S14.3 6.5 24 6.5 41.5 14.3 41.5 24 33.7 41.5 24 41.5z" fill-rule="evenodd"></path></svg>
                </div>
                <div class="cabezera2">
                    <p><b>16</b> publicaciones</p>
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
        <div class="linea"></div>
        <div class="main-nav">
            <a href="#">
                <svg aria-label="Publicaciones" class="_8-yf5 " fill="#262626" height="12" viewBox="0 0 48 48" width="12"><path clip-rule="evenodd" d="M45 1.5H3c-.8 0-1.5.7-1.5 1.5v42c0 .8.7 1.5 1.5 1.5h42c.8 0 1.5-.7 1.5-1.5V3c0-.8-.7-1.5-1.5-1.5zm-40.5 3h11v11h-11v-11zm0 14h11v11h-11v-11zm11 25h-11v-11h11v11zm14 0h-11v-11h11v11zm0-14h-11v-11h11v11zm0-14h-11v-11h11v11zm14 28h-11v-11h11v11zm0-14h-11v-11h11v11zm0-14h-11v-11h11v11z" fill-rule="evenodd"></path></svg>
                PUBLICACIONES
            </a>

        </div>
        <div class="mainCont__grid">
            {{-- <div><img src="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885_1280.jpg" alt=""></div>
            <div><img src="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885_1280.jpg" alt=""></div>
            <div><img src="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885_1280.jpg" alt=""></div>
            <div><img src="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885_1280.jpg" alt=""></div>
            <div><img src="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885_1280.jpg" alt=""></div>
            <div><img src="https://cdn.pixabay.com/photo/2015/04/23/22/00/tree-736885_1280.jpg" alt=""></div>
             --}}

             
        </div>
    </main>


    <div class="card-body text-dark" style="background-color: rgba(128, 128, 128, 0.10)">

        @if ($posts->count())
            {{-- <h1 class="card-title text-center">PUBLICACIONES</h1> --}}
            <div class="row row-cols-1 row-cols-md-3 g-4">
                @foreach ($posts as $post)
                    <div class="col">
                        <div class="card h-100">
                            <img src="{{ asset('uploads') . '/' . $post->imagen }}" class="card-img-top" alt="Devstagram" />
                            <div class="card-body">
                                <h5 class="card-title">{{ $post->titulo }}</h5>
                                <p class="card-text">
                                    <small class="text-info">{{ '@' . $post->user->username }}</small>
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
