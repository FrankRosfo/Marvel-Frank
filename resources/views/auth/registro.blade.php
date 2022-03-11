@extends('template.sesion') {{-- HOME SESION --}}
@section('Logotipo')
<a class="navbar-brand" href="registro" ><h2>Marvel/Frank<em>.</em></h2></a>
@endsection
@section('Barra')
<li class="nav-item">
  <a class="nav-link" href="login">Iniciar Sesi&oacute;n</a>
</li>
@endsection
@section('Descript')
<h4>Registro</h4>
<h2>¡Bienvenido!</h2>
@endsection
@section('Form')
<div class="sidebar-heading">
    <h2>Registro</h2>
</div>
<div class="content">
    <form action="/registro" method="post">
        @csrf
        <div class="row">
            <div class="col-sm-12">
                <fieldset>
                    <input name="name" type="text" id="name" placeholder="Nombre" required="">
                </fieldset>
            </div>
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
            <div class="col-lg-12">
                <fieldset>
                    <button type="submit" id="form-submit" class="main-button">Registrarse</button>
                </fieldset>
            </div>
        </div>
    </form>
</div>
@endsection
