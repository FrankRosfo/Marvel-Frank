@extends('template.fondo')
@section('Logotipo')
<a class="navbar-brand" href="inicio" ><h2>Marvel/Frank<em>.</em></h2></a>
@endsection
@section('Barra')
<li class="nav-item active">
  <a class="nav-link" href="inicio">Inicio
    <span class="sr-only">(current)</span>
  </a>
</li>
<li class="nav-item">
  <a class="nav-link" href="blog">Blog</a>
</li>
<li class="nav-item">
  <a class="nav-link" href="contacto">Contacto</a>
</li>
<li class="nav-item">
  <a class="nav-link" href="logout">Cerrar Sesi&oacute;n</a>
</li>
@endsection
@section('Contenido')
{{-- @if(auth()->check()) --}}
<!-- Page Content -->
<!-- Banner Starts Here -->
<div class="main-banner header-text">
  <div class="container-fluid">
    <div class="owl-banner owl-carousel">
      <div class="item">
        <img src="assets/images/banner-item-01.jpg" alt="">
        <div class="item-content">
          <div class="main-content">
            <div class="meta-category">
              <span>Fashion</span>
            </div>
            <a href="post-details.html"><h4>Morbi dapibus condimentum</h4></a>
            <ul class="post-info">
              <li><a href="#">Admin</a></li>
              <li><a href="#">May 12, 2020</a></li>
              <li><a href="#">12 Comments</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="item">
        <img src="assets/images/banner-item-02.jpg" alt="">
        <div class="item-content">
          <div class="main-content">
            <div class="meta-category">
              <span>Fashion</span>
            </div>
            <a href="post-details.html"><h4>Morbi dapibus condimentum</h4></a>
            <ul class="post-info">
              <li><a href="#">Admin</a></li>
              <li><a href="#">May 12, 2020</a></li>
              <li><a href="#">12 Comments</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="item">
        <img src="assets/images/banner-item-03.jpg" alt="">
        <div class="item-content">
          <div class="main-content">
            <div class="meta-category">
              <span>Fashion</span>
            </div>
            <a href="post-details.html"><h4>Morbi dapibus condimentum</h4></a>
            <ul class="post-info">
              <li><a href="#">Admin</a></li>
              <li><a href="#">May 12, 2020</a></li>
              <li><a href="#">12 Comments</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="item">
        <img src="assets/images/banner-item-04.jpg" alt="">
        <div class="item-content">
          <div class="main-content">
            <div class="meta-category">
              <span>Fashion</span>
            </div>
            <a href="post-details.html"><h4>Morbi dapibus condimentum</h4></a>
            <ul class="post-info">
              <li><a href="#">Admin</a></li>
              <li><a href="#">May 12, 2020</a></li>
              <li><a href="#">12 Comments</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<section class="blog-posts">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <div class="all-blog-posts">
          <div class="row">
            @foreach($personajes as $personaje)
              @if($loop->index < 3)
                <div class="col-lg-12">
                  <div class="blog-post">
                    <div class="blog-thumb">
                      <img src="{{ $personaje['imagen'] }}.{{ $personaje['imagen_extension'] }}" alt="">
                    </div>
                    <div class="down-content">
                      <span>Marvel</span>
                      <a href="contenido"><h4>{{ $personaje['nombre'] }}</h4></a>
                      <p>{{ $personaje['descripcion'] }}</p>
                      <div class="post-options">
                        <div class="row">
                          <div class="col-6">
                            <ul class="post-tags">
                              <li><i class="fa fa-tags"></i></li>
                              <li><a>Comics:</a>,</li>
                              <li><a>{{ $personaje['comics_numero'] }}</a></li>
                            </ul>
                          </div>
                          <div class="col-6">
                            <ul class="post-share">
                              <li><i class="fa fa-share-alt"></i></li>
                              <li><a href="https://www.facebook.com/profile.php?id=100064101466027">Facebook</a></li>
                              <li><a href="https://instagram.com/frankrosfo?utm_medium=copy_link">Instagram</a></li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              @endif
            @endforeach
            <div class="col-lg-12">
              <div class="blog-post">
                <div class="blog-thumb">
                  <img src="assets/images/Image2.jpg" alt="">
                </div>
                <div class="down-content">
                  <span>Evoluci&oacute;n</span>
                  <a href="2_sistemas"><h4>Sistemas de informaci&oacute;n</h4></a>
                  <p>1950 - 1960: procesamiento de datos electr&oacute;nicos, sistema de procesamiento de transacciones. Durante este per&iacute;odo,
                      el papel de SI fue principalmente para realizar actividades como el procesamiento de transacciones, el mantenimiento de
                      registros y la contabilidad. SI se utiliz&oacute; principalmente para el procesamiento electr&oacute;nico de datos.</p>
                  <div class="post-options">
                    <div class="row">
                      <div class="col-6">
                        <ul class="post-tags">
                          <li><i class="fa fa-tags"></i></li>
                          <li><a>UPT</a>,</li>
                          <li><a>Tec&aacute;mac</a></li>
                        </ul>
                      </div>
                      <div class="col-6">
                        <ul class="post-share">
                          <li><i class="fa fa-share-alt"></i></li>
                          <li><a href="https://www.facebook.com/profile.php?id=100064101466027">Facebook</a>,</li>
                          <li><a href="https://instagram.com/frankrosfo?utm_medium=copy_link">Instagram</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="blog-post">
                <div class="blog-thumb">
                  <img src="assets/images/Image3.jpg" alt="">
                </div>
                <div class="down-content">
                  <span>Conceptos</span>
                  <a href="3_sistemas"><h4>Cliente-Servidor</h4></a>
                  <p>Empez&oacute; a ser aceptado a finales de los años 80’ para referirse a las PC’s en red.<br>Su funcionamiento es de la siguiente
                    manera, se tiene una m&aacute;quina cliente que requiere un servicio de una m&aacute;quina servidor, y &eacute;ste realiza la funci&oacute;n para la
                    que está programado.Desde el punto de vista funcional, es una arquitectura distribuida que permite a los usuarios finales
                    obtener acceso a la informaci&oacute;n a&uacute;n en los entornos multiplataforma.</p>
                  <div class="post-options">
                    <div class="row">
                      <div class="col-6">
                        <ul class="post-tags">
                          <li><i class="fa fa-tags"></i></li>
                          <li><a>UPT</a>,</li>
                          <li><a>Tec&aacute;mac</a></li>
                        </ul>
                      </div>
                      <div class="col-6">
                        <ul class="post-share">
                          <li><i class="fa fa-share-alt"></i></li>
                          <li><a href="https://www.facebook.com/profile.php?id=100064101466027">Facebook</a>,</li>
                          <li><a href="https://instagram.com/frankrosfo?utm_medium=copy_link">Instagram</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="main-button">
                <a href="blog">Ver m&aacute;s Posts</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="sidebar">
          <div class="row">
            <div class="col-lg-12">
              <div class="sidebar-item recent-posts">
                <div class="sidebar-heading">
                  <h2>&Uacute;ltimos Comentarios</h2>
                </div>
                <div class="content">
                  <ul>
                    <li><a>
                      <h5>Interesante sitio web</h5>
                      <span>Ene 28, 2022</span>
                    </a></li>
                    <li><a>
                      <h5>¿Para pasar la materia cierto? XD</h5>
                      <span>Ene 18, 2022</span>
                    </a></li>
                    <li><a>
                      <h5>Me gusto el diseño esta muy interesante</h5>
                      <span>Ene 10, 2022</span>
                    </a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="sidebar-item categories">
                <div class="sidebar-heading">
                  <h2>Trabajos Realizados</h2>
                </div>
                <div class="content">
                  <ul>
                    <li><a href="#">- Hobbies/F</a></li>
                    <li><a href="#">- Uso Orientado a Objetos</a></li>
                    <li><a href="#">- Juego Cl&aacute;sicos</a></li>
                    <li><a href="#">- QSMN/F</a></li>
                    <li><a href="#">- Batalla Naval</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="sidebar-item tags">
                <div class="sidebar-heading">
                  <h2>Lenguajes de Programaci&oacute;n</h2>
                </div>
                <div class="content">
                  <ul>
                    <li><a href="#">Java</a></li>
                    <li><a href="#">JavaScript</a></li>
                    <li><a href="#">Php</a></li>
                    <li><a href="#">C++</a></li>
                    <li><a href="#">C#</a></li>
                    <li><a href="#">Laravel</a></li>
                    <li><a href="#">C</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
{{-- @endif --}}
@endsection
