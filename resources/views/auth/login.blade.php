@extends('template.sesion')
@section('Logotipo2')
<a class="navbar-brand" href="login" ><h2>Blog A/F<em>.</em></h2></a>
@endsection
@section('Barra2')
<li class="nav-item">
  <a class="nav-link" href="/">Registrarse</a>
</li>
@endsection
@section('Descript')
<h4>Login</h4>
<h2>¡Bienvenido!</h2>
@endsection
@section('Form')
<div class="sidebar-heading">
    <h2>Login</h2>
</div>
<div class="content">
    <form action="login" method="post">
        @csrf
        <div class="row">
            <div class="col-sm-12">
                <fieldset>
                    <input name="email" type="text" id="email" placeholder="Correo" required="">
                </fieldset>
            </div>
            <div class="col-sm-12">
                <fieldset>
                    <input name="password" type="text" id="password" placeholder="Contraseña" required="">
                </fieldset>
            </div>
            @error('message')
            <div class="col-sm-12">
                <fieldset>
                    <h4>*{{$message}}</h4>
                </fieldset>
            </div>
            @enderror
            <div class="col-lg-12">
                <fieldset>
                    <button type="submit" id="form-submit" class="main-button">Ingresar</button>
                </fieldset>
            </div>
        </div>
    </form>
</div>
@endsection
