@extends('layout.layouts')


@section('contenido')

    <body class="login">
        <div class="container-login">
            <div class="center-login">
                <div class="header-login">
                    <h3>Inicia sesión</h3>
                </div>
                <div class="inputElement-login">
                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        @if (session('mensaje'))
                            <p style="color: red">{{ session('mensaje') }}</p>
                        @endif

                        <!-- Email input -->
                        <div class="mb-3">
                            <input type="email" id="email" placeholder="Correo electrónico" name="email"
                                class="form-control" />

                        </div>
                        @error('email')
                            <p style="color:red;">{{ $message }}</p>
                        @enderror

                        <!-- Password input -->
                        <div class="mb-3">
                            <input type="password" placeholder="Contraseña" id="password" name="password"
                                class="form-control" />
                        </div>
                        @error('password')
                            <p style="color:red;">{{ $message }}</p>
                        @enderror


                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary d-block mx-auto mb-4 mt-4"
                            style="background-color: #F20746;">
                            Inicia sesión
                        </button>

                    </form>
                    <div class="line">
                        <span class="arrow-login"></span>
                        <span class="content-login">O</span>
                        <span class="arrow-login"></span>
                    </div>
                    <div class="social__icon-login">
                        <span>Registrate creando una cuenta nueva en el
                            enlace de abajo
                        </span>
                    </div>
                    <a href="http://127.0.0.1:8000/formulario" class="forgetPassword-login">Crear cuenta</a>
                </div>
            </div>

        </div>
    </body>
@endsection
