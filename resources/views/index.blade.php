@extends('template.fondo')
@section('Logotipo')
<a class="navbar-brand" href="{{route('cita')}}"><h2>Marvel/Frank<em>.</em></h2></a>
@endsection
@section('Barra')
  <li class="nav-item active">
    <a class="nav-link" href="{{route('inicio')}}">Inicio
      <span class="sr-only">(current)</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{route('personajes',1)}}">Personajes</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{route('comics',1)}}">Comics</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{route('contacto')}}">Contacto</a>
  </li>
@endsection
@section('Contenido')
@if(auth()->check())
<!-- Page Content -->
<!-- Banner Starts Here -->
<div class="main-banner header-text">
  <div class="container-fluid">
    <div class="owl-banner owl-carousel">
      @foreach($comics as $comic)
      <div class="item">
        <img src="{{ $comic['imagen'] }}.{{ $comic['imagen_extension'] }}" alt="">
        <div class="item-content">
          <div class="main-content">
            <div class="meta-category">
              <span>Comic</span>
            </div>
            <a href={{route('detalle.comic',$comic['id'])}}><h4>{{ $comic['titulo'] }}</h4></a>
            <ul class="post-info">
              <li><a><{{ $comic['series_name'] }} </a></li>
              <li><a>Paginas: {{ $comic['n_paginas'] }}</a></li>
            </ul>
          </div>
        </div>
      </div>
      @endforeach
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
                      <a href={{route('detalle.personaje',$personaje['id'])}}><h4>{{ $personaje['nombre'] }}</h4></a>
                      {{ $personaje['descripcion'] }} 
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
              <div class="main-button">
                <a href="{{route('personajes',$page=1)}}">Ver m&aacute;s Personajes</a>
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
@endif
@endsection
