@extends('blog.template.fondo')
@section('Logotipo')
@yield('Logotipo2')
@endsection
@section('Barra')
@yield('Barra2')
@endsection
@section('Contenido')
<!-- Page Content -->
<!-- Banner Starts Here -->
<div class="heading-page header-text">
  <section class="page-heading">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="text-content">
            @yield('Descript')
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
<section class="contact-us">
  <div class="container">
    <div class="col-lg-auto">
      <div class="down-contact">
        <div class="row">
          <div class="col-lg-12">
            <div class="sidebar-item contact-form">
              @yield('Form')
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection