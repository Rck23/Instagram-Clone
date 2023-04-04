@extends('layout.layouts')


@section('contenido')


    <body class="login">
        <div class="container-login">
            <div class="center-login">
                <div class="header-login">
                    <h3>Crea tu cuenta</h3>
                </div>
                <div class="inputElement-login">
                    <form action="/formulario" method="POST">
                        @csrf

                        <div class="mb-3">
                            <input type="text" id="name" name="name" class="form-control"
                                placeholder="Nombre completo" />

                        </div>
                        @error('name')
                            <p style="color:red;">{{ $message }}</p>
                        @enderror

                        <div class="mb-3">
                            <input type="text" id="username" name="username" placeholder="Nombre de usuario"
                                class="form-control" />

                        </div>
                        @error('username')
                            <p style="color:red;">{{ $message }}</p>
                        @enderror

                        <div class="mb-3">
                            <input type="email" id="email" placeholder="Correo electrónico" name="email"
                                class="form-control" />

                        </div>
                        @error('email')
                            <p style="color:red;">{{ $message }}</p>
                        @enderror



                        <div class="mb-3">
                            <input type="password" id="password" name="password" placeholder="Contraseña"
                                class="form-control" />

                        </div>
                        @error('password')
                            <p style="color:red;">{{ $message }}</p>
                        @enderror

                        <!-- Submit button -->
                        <button type="submit" class="btn btn-primary d-block mx-auto mb-4 mt-4"
                            style="background-color: #F20746;">Crear cuenta</button>

                    </form>
                    <div class="line">
                        <span class="arrow-login"></span>
                        <span class="content-login">O</span>
                        <span class="arrow-login"></span>
                    </div>
                    <div class="social__icon-login">
                        <span>Inicia sesión con tu cuenta
                        </span>
                    </div>
                    <a href="http://127.0.0.1:8000/login" class="forgetPassword-login">Inicio de sesión</a>
                </div>
            </div>

        </div>
    </body>
@endsection
