@extends('template.fondo')
@section('Logotipo')
<a class="navbar-brand" href="inicio" ><h2>Marvel/Frank<em>.</em></h2></a>
@endsection
@section('Barra')
<li class="nav-item">
  <a class="nav-link" href="inicio">Inicio</a>
</li>
<li class="nav-item">
  <a class="nav-link" href="personajes">Personajes</a>
</li>
<li class="nav-item">
  <a class="nav-link" href="comics">Comics</a>
</li>
<li class="nav-item active">
  <a class="nav-link" href="contacto">Contacto
    <span class="sr-only">(current)</span>
  </a>
</li>
<li class="nav-item">
  <a class="nav-link" href="logout">Cerrar Sesi&oacute;n</a>
</li>
<div class="sidebar-item search">
  <form id="search_form" name="gs" method="GET" action="#">
    <input type="text" name="q" class="searchText" placeholder="type to search..." autocomplete="on">
  </form>
</div>
@endsection
@section('Contenido')
@if(auth()->check())
<!-- Page Content -->
<!-- Banner Starts Here -->
<div class="heading-page header-text">
  <section class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="text-content">
            <h4>Contacto</h4>
            <h2>¡Env&iacute;ame tu opini&oacute;n, y gracias por visitar nuestro blog!</h2>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<!-- Banner Ends Here -->


<section class="contact-us">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="down-contact">
          <div class="row">
            <div class="col-lg-8">
              <div class="sidebar-item contact-form">
                <div class="sidebar-heading">
                  <h2>Env&iacute;a un mensaje</h2>
                </div>
                <div class="content">
                  <form action="/mail" method="post">
                    @csrf
                    <div class="row">
                      <div class="col-md-6 col-sm-12">
                        <fieldset>
                          <input name="name" type="text" id="name" placeholder="Nombre" required="">
                        </fieldset>
                      </div>
                      <div class="col-md-6 col-sm-12">
                        <fieldset>
                          <input name="email" type="text" id="email" placeholder="Correo" required="">
                        </fieldset>
                      </div>
                      <div class="col-lg-12">
                        <fieldset>
                          <textarea name="message" rows="6" id="message" placeholder="Mensaje" required=""></textarea>
                        </fieldset>
                      </div>
                      <div class="col-lg-12">
                        <fieldset>
                          <button type="submit" id="form-submit" class="main-button">Enviar Mensaje</button>
                        </fieldset>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="sidebar-item contact-information">
                <div class="sidebar-heading">
                  <h2>Informaci&oacute;n de Contacto</h2>
                </div>
                <div class="content">
                  <ul>
                    <li>
                      <h5>+52 5501 345 6789</h5>
                      <span>N&Uacute;MERO TELEF&acute;NICO</span>
                    </li>
                    <li>
                      <h5>frank.pruebas.0402@gmail.com</h5>
                      <span>CORREO PERSONAL</span>
                    </li>
                    <li>
                      <h5>Mi Direcció&oacute;n,
                        <br>Av.La Esquina #139</h5>
                      <span>DIRECCIÓ&acute;N</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-12">
        <div id="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3755.9643050922386!2d-98.98036838508888!3d19.71414378672505!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1ed2fa5d3a6c1%3A0x1f383377175dc58a!2sUniversidad%20Politecnica%20de%20Tecamac!5e0!3m2!1ses-419!2smx!4v1643115676597!5m2!1ses-419!2smx" width="100%" height="450px" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>
</section>
@endif
@endsection
