@extends('layout.layouts')

@section('titulo')
    <span class="text-center"> Instragram Clone</span>
@endsection


@section('contenido')
    <div class="text-center ">



        <aside>
            <h1>Bienvenido</h1>
            <h3><b>Instragram Clone</b> permite publicar y ver fotos por usuario,
                iniciar sesión y hacer nuevo registro de usuario.
            </h3>

            <a type="submit" class="btn enlaces  fw-bold" aria-current="page" href="http://127.0.0.1:8000/login">Inicia Sesión</a>
            <a type="submit" class="btn enlaces fw-bold" aria-current="page" href="http://127.0.0.1:8000/formulario">Crear cuenta</a>

        </aside>
    </div>
@endsection
