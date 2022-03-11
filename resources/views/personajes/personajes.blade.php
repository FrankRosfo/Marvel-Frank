@extends('template.fondo')
@section('Logotipo')
<a class="navbar-brand" href="http://marvel-frank.herokuapp.com/inicio" ><h2>Marvel/Frank<em>.</em></h2></a>
@endsection
@section('Barra')
  <li class="nav-item">
    <a class="nav-link" href="http://marvel-frank.herokuapp.com/inicio">Inicio</a>
  </li>
  <li class="nav-item active">
    <a class="nav-link" href="http://marvel-frank.herokuapp.com/personajes">Personajes
      <span class="sr-only">(current)</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="http://marvel-frank.herokuapp.com/comics">Comics</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="http://marvel-frank.herokuapp.com/contacto">Contacto</a>
  </li>
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
            <h4>Marvel</h4>
            <h2>Personajes</h2>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

<section class="blog-posts grid-system">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <div class="all-blog-posts">
          <div class="row">
            @foreach($personajes as $personaje)
            <div class="col-lg-6">
              <div class="blog-post">
                <div class="blog-thumb">
                  <img src="{{ $personaje['imagen'] }}.{{ $personaje['imagen_extension'] }}" alt="">
                </div>
                <div class="down-content">
                  <span>Conceptos</span>
                  <a href="contenido"><h4>{{ $personaje['nombre'] }}</h4></a>
                  {{ $personaje['descripcion'] }} 
                  <div class="post-options">
                    <div class="row">
                      <div class="col-lg-12">
                        <ul class="post-tags">
                          <li><i class="fa fa-tags"></i></li>
                          <li><a>Comics:</a>,</li>
                          <li><a>{{ $personaje['comics_numero'] }}</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
            <div class="col-lg-12">
              <ul class="page-numbers">
                @if($page>1)
                <li><a href="{{route('personajes',$page-1)}}"><i class="fa fa-angle-double-left"></i></a></li>
                @endif
                  <li><a href="{{route('personajes',$page)}}">{{ $page }}</a></li>
                @if($page<150)
                <li><a href="{{route('personajes',$page+1)}}"><i class="fa fa-angle-double-right"></i></a></li>
                @endif
              </ul>
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
                      <h5>Interesante tu blog como portafolio de Evidencias, muy bueno y muy interesante</h5>
                      <span>Ene 28, 2022</span>
                    </a></li>
                    <li><a>
                      <h5>Buena información y un gran blog el que hiciste, mucha suerte y gracias por la información</h5>
                      <span>Ene 18, 2022</span>
                    </a></li>
                    <li><a>
                      <h5>Me gusto el diseño de tu blog, es muy bueno y muy interesante excelente trabajo</h5>
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
                    <li><a href="#">- Juego Clasico</a></li>
                    <li><a href="#">- QSMN/F</a></li>
                    <li><a href="#">- Batalla Naval</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="sidebar-item tags">
                <div class="sidebar-heading">
                  <h2>Lenguajes de Programación</h2>
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
@endif
@endsection
