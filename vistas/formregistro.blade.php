{{-- Usamos la vista app como plantilla --}}
@extends('app')
{{-- Sección aporta el título de la página --}}
@section('title', 'Formulario registro')
{{-- Sección aporta el título de la página --}}
@section('navbar')
<li class="nav-item">
    <a class="nav-link" aria-current="page" href="index.php?botonlogin">Login</a>
</li>

@endsection
@section('usermenu')
@endsection
{{-- Sección muestra el formulario de login del usuario --}}
@section('content')
<div class="container col-md-8">
    <div class="panel panel-default">
        @if (isset($errorBD)) 
        <div class="alert alert-danger" role="alert">Error alta usuario</div>
        @endif
        <h2 class="text-center">Registro</h2>
        <div class="panel-body mt-3">
            <form class="form-horizontal" method="POST" action="index.php" id='formregistro' novalidate>
                <div class="mb-3 row">                            
                    <label for="inputNombre" class="col-sm-2 col-form-label">Nombre</label>
                    <div class="col-sm-10">
                        <input id="inputNombre" type="text" value="{{ $nombre ?? ""}}"
                               class="form-control col-sm-10 {{ isset($errorNombre) ? ($errorNombre ? "is-invalid" : "is-valid") : "" }}" 
                               id="inputNombre" placeholder="Nombre" name="nombre">
                        <div class="col-sm-10 invalid-feedback">
                            El nombre de usuario debe tener entre 3 y 15 letras sin blancos
                        </div>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" value="{{ $clave ?? ""}}"
                               class="form-control col-sm-10 {{ isset($errorPassword) ? ($errorPassword ? "is-invalid" : "is-valid") : "" }}" id="inputPassword" placeholder="Password" name="clave">
                        <div class="col-sm-10 invalid-feedback">
                            El password debe estar compuesto por 6 dígitos
                        </div>
                    </div>        
                </div>
                <div class="mb-3 row">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" value="{{ $email ?? "" }}"
                               class="form-control col-sm-10 {{ isset($errorEmail) ? (($errorEmail) ? "is-invalid" : "is-valid") : "" }}" id="inputEmail" placeholder="Email" name="email">
                        <div class="col-sm-10 invalid-feedback">
                            El email debe tener el formato correcto
                        </div>
                    </div>        
                </div>
                <div class="mb-3">
                    <div class="col-md-8 col-md-offset-4">
                        <input type="submit" class="btn btn-primary" name="botonprocregistro" value="Registro">
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection