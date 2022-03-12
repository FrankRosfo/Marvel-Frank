@if(auth()->check())
@extends('template.fondo')
@section('Logotipo')
<a class="navbar-brand" href="{{route('inicio')}}"><h2>Marvel/Frank<em>.</em></h2></a>
@endsection
@section('Barra')
  <li class="nav-item">
    <a class="nav-link" href="{{route('inicio')}}">Inicio</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{route('personajes',1)}}">Personajes</a>
  </li>
  <li class="nav-item active">
    <a class="nav-link" href="{{route('comics',1)}}">Comics
      <span class="sr-only">(current)</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{route('contacto')}}">Contacto</a>
  </li>
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
            <h4>Detalles del Comic</h4>
            <h2>¡Bienvenido!</h2>
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
            <div class="col-lg-12">
              <div class="blog-post">
                <div class="blog-thumb">
                  <img src="{{ $comic['imagen'] }}.{{ $comic['imagen_extension'] }}" alt="">
                </div>
                <div class="down-content">
                  <span>Marvel</span>
                  <a><h4>{{ $comic['titulo'] }}</h4></a>
                  <p> Fecha: {{ $comic['modificado'] }}</p>
                  <p> #paginas: {{ $comic['n_paginas'] }}</p>
                </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="sidebar-item comments">
                <div class="sidebar-heading">
                  <h2>{{ $registros }} comentarios</h2>
                </div>
                <div class="content">
                  <ul>
                    {{ $x = 1 }}
                    @foreach($comentarios as $comentario)
                    @if($i == 1)
                    {
                    <li>
                      {{ $i = 2 }}
                      <div class="author-thumb">
                        <img src="assets/images/comment-author-01.jpg" alt="">
                      </div>
                      <div class="right-content">
                        <h4>{{ $comentarios['Nombre'] }}<span>{{ $comentarios['Fecha'] }}</span></h4>
                        <p>{{ $comentarios['Comentario'] }}</p>
                      </div>
                    </li>
                    }
                    @endif
                    @if($i == 2)
                    {
                    <li>
                      {{ $i = 1 }}
                      <div class="author-thumb">
                        <img src="assets/images/comment-author-01.jpg" alt="">
                      </div>
                      <div class="right-content">
                        <h4>{{ $comentarios['Nombre'] }}<span>{{ $comentarios['Fecha'] }}</span></h4>
                        <p>{{ $comentarios['Comentario'] }}</p>
                      </div>
                    </li>
                    }
                    @endif
                    @endforeach
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="sidebar-item submit-comment">
                <div class="sidebar-heading">
                  <h2>Escribe un omentario</h2>
                </div>
                <div class="content">
                  <form id="comment" action="comentar_personaje" method="post">
                    <div class="row">
                      <div class="col-md-12 col-sm-12">
                        <fieldset>
                          <input name="name" type="text" id="name" placeholder="Nombre" required="">
                        </fieldset>
                      </div>
                      <div class="col-lg-12">
                        <fieldset>
                          <textarea name="message" rows="6" id="message" placeholder="Comentario" required=""></textarea>
                        </fieldset>
                      </div>
                      <div class="col-lg-12">
                        <fieldset>
                          <button type="submit" id="form-submit" class="main-button">Enviar</button>
                        </fieldset>
                      </div>
                    </div>
                  </form>
                </div>
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
@endsection
@endif