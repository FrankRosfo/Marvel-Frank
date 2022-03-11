@extends('template.fondo')
@section('Barra')
  <li class="nav-item">
    <a class="nav-link" href="inicio">Inicio</a>
  </li>
  <li class="nav-item active">
    <a class="nav-link" href="personajes">Personajes
      <span class="sr-only">(current)</span>
    </a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="personajes">Comics</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="contacto">Contacto</a>
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
            <div class="col-lg-6">
              <div class="blog-post">
                <div class="blog-thumb">
                  <img src="assets/images/Image1.jpg" alt="">
                </div>
                <div class="down-content">
                  <span>Conceptos</span>
                  <a href="1_sistemas"><h4>Sistemas de Informaci&oacute;n</h4></a>
                  <p>Un sistema de informaci&oacute;n es un conjunto de datos que interactúan entre s&iacute; con un fin com&uacute;n.</p>
                  <div class="post-options">
                    <div class="row">
                      <div class="col-lg-12">
                        <ul class="post-tags">
                          <li><i class="fa fa-tags"></i></li>
                          <li><a href="#">UPT</a>,</li>
                          <li><a href="#">Tec&aacute;mac</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="blog-post">
                <div class="blog-thumb">
                  <img src="assets/images/Image2.jpg" alt="">
                </div>
                <div class="down-content">
                  <span>Evolución</span>
                  <a href="2_sistemas"><h4>Sistemas de Informaci&oacute;n</h4></a>
                  <p>El papel de SI fue principalmente para realizar actividades como el procesamiento de transacciones.</p>
                  <div class="post-options">
                    <div class="row">
                      <div class="col-lg-12">
                        <ul class="post-tags">
                          <li><i class="fa fa-tags"></i></li>
                          <li><a href="#">UPT</a>,</li>
                          <li><a href="#">Tec&aacute;mac</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="blog-post">
                <div class="blog-thumb">
                  <img src="assets/images/Image3.jpg" alt="">
                </div>
                <div class="down-content">
                  <span>Conceptos</span>
                  <a href="3_sistemas"><h4>Cliente-Servidor</h4></a>
                  <p>Se tiene una m&aacute;quina cliente que requiere un servicio de una m&aacute;quina servidor.</p>
                  <div class="post-options">
                    <div class="row">
                      <div class="col-lg-12">
                        <ul class="post-tags">
                          <li><i class="fa fa-tags"></i></li>
                          <li><a href="#">UPT</a>,</li>
                          <li><a href="#">Tec&sacute;mac</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="blog-post">
                <div class="blog-thumb">
                  <img src="assets/images/Image4.jpg" alt="">
                </div>
                <div class="down-content">
                  <span>Sistemas</span>
                  <a href="4_sistemas"><h4>Computadoras Centrales y Dedicadas</h4></a>
                  <p>El t&eacute;rmino apareci&oacute; a principios de los años 70’s con la introducci&oacute;n de
                      ordenadores m&aacute;s pequeños como la serie DEC PDP.</p>
                  <div class="post-options">
                    <div class="row">
                      <div class="col-lg-12">
                        <ul class="post-tags">
                          <li><i class="fa fa-tags"></i></li>
                          <li><a href="#">UPT</a>,</li>
                          <li><a href="#">Tec&aacute;mac</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="blog-post">
                <div class="blog-thumb">
                  <img src="assets/images/Image5.jpg" alt="">
                </div>
                <div class="down-content">
                  <span>Sistemas</span>
                  <a href="5_sistemas"><h4>Conexi&oacute;n Libre y Atravez de Redes</h4></a>
                  <p>Esta es la era que esta basada en el concepto de redes de computadoras en la que la
                      informaci&oacute;n reside en una o varias computadoras.</p>
                  <div class="post-options">
                    <div class="row">
                      <div class="col-lg-12">
                        <ul class="post-tags">
                          <li><i class="fa fa-tags"></i></li>
                          <li><a href="#">UPT</a>,</li>
                          <li><a href="#">Tec&aacute;mac</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="blog-post">
                <div class="blog-thumb">
                  <img src="assets/images/Image6.jpg" alt="">
                </div>
                <div class="down-content">
                  <span>Sistemas</span>
                  <a href="6_sistemas"><h4>Arquitectura Cliente-Servidor</h4></a>
                  <p>La computadora de cada uno de los usuarios, llamada cliente, produce una demanda de
                      informaci&oacute;n a cualquiera de las computadoras que proporcionan informaci&oacute;n.</p>
                  <div class="post-options">
                    <div class="row">
                      <div class="col-lg-12">
                        <ul class="post-tags">
                          <li><i class="fa fa-tags"></i></li>
                          <li><a href="#">UPT</a>,</li>
                          <li><a href="#">Tec&aacute;mac</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="blog-post">
                <div class="blog-thumb">
                  <img src="assets/images/Image7.jpg" alt="">
                </div>
                <div class="down-content">
                  <span>Protocolos</span>
                  <a href="7_sistemas"><h4>Comunicaci&oacute;n Red</h4></a>
                  <p>La arquitectura de red es el diseño de una red de comunicaciones. Es un marco para la
                      especificaci&oacute;n de los componentes f&iacute;sicos de una red.</p>
                  <div class="post-options">
                    <div class="row">
                      <div class="col-lg-12">
                        <ul class="post-tags">
                          <li><i class="fa fa-tags"></i></li>
                          <li><a href="#">UPT</a>,</li>
                          <li><a href="#">Tec&aacute;mac</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="blog-post">
                <div class="blog-thumb">
                  <img src="assets/images/Image8.jpg" alt="">
                </div>
                <div class="down-content">
                  <span>Sistemas de informaci&oacute;n</span>
                  <a href="8_sistemas"><h4>Deacuerdo a su arquitectura</h4></a>
                  <p>Los sistemas de informaci&oacute;n, de manera general se pueden clasificar de tres formas
                      seg&oacute;n sus prop&oacute;sitos generales.</p>
                  <div class="post-options">
                    <div class="row">
                      <div class="col-lg-12">
                        <ul class="post-tags">
                          <li><i class="fa fa-tags"></i></li>
                          <li><a href="#">UPT</a>,</li>
                          <li><a href="#">Tec&aacute;mac</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="blog-post">
                <div class="blog-thumb">
                  <img src="assets/images/Image9.jpg" alt="">
                </div>
                <div class="down-content">
                  <span>Proceso de diagramaci&oacute;n</span>
                  <a href="post-details.html"><h4>Arquitectura Cliente-Servidor</h4></a>
                  <p>Combinaci&oacute;n de un cliente que interact&uacute;a con el usuario, y un servidor que interact&uacute;a con los
                      recursos a compartir.</p>
                  <div class="post-options">
                    <div class="row">
                      <div class="col-lg-12">
                        <ul class="post-tags">
                          <li><i class="fa fa-tags"></i></li>
                          <li><a href="#">UPT</a>,</li>
                          <li><a href="#">Tec&aacute;mac</a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-12">
              <ul class="page-numbers">
                <li><a href="#">1</a></li>
                <li class="active"><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#"><i class="fa fa-angle-double-right"></i></a></li>
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
