@extends('templates.templateMaster')
@section('title', 'Inicio')
@section('meta-desc', 'Descripción de la sección que se está visualizando')
@section('content')
    <section class="section-home bg-banner-init">
        <div class="row justify-content-center m-0">
            <div class="col-12 col-lg-5">
                <div class="content-descrip-home">
                    <p class="display-4 fw-bold mb-0">Hi' I'm Sen Maxuale</p>
                    <p class="display-5">Desarrollador web Full-Stack</p>
                    <p class="text-description-home">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illum officia quis corrupti tempore ex ipsum quas in? Rem aliquid quibusdam alias, numquam impedit officia mollitia vel excepturi consectetur a minus!</p>
                    <div class="w-100 justify-content-center-align-items-center flex-wrap">
                        <a href="#" class="button-lr">Portafolio</a>
                        <a href="#" class="button-lr">Contacto</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3 d-flex justify-content-start align-items-center">
                <img src="{{assets('img/web-image-representation.png')}}" class="img-fluid" alt="img_not_found">
            </div>
        </div>
    </section>

    <section class="section-services bg-grey-1 text-light py-5 shadow-top-effect position-relative">
        <div class="separator-effect-1"></div>
        <article class="container">
            <div class="row m-0 gy-3 justify-content-center">
                <div class="col-12">
                    <p class="title-section-1">Qué servicios ofrezco</p>
                </div>
                <div class="col-12">
                    <section class="row justify-content-center g-3">
                        <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                            <div class="card bg-dark text-light card-info-portfolio">
                                <div class="card-body d-justify-content-center align-items-center flex-column">
                                    <p class="icon-info mb-0"><i class="bi bi-window-stack"></i></p>
                                    <p class="text-card">Applicaciones Web</p>
                                    <p class="text-descript-card">Lorem ipsum dolor sit amet consectetur adipisicing elit. Error optio itaque soluta excepturi dolorem dicta in esse eaque animi perspiciatis, cupiditate ut, quos nesciunt voluptatum eligendi ipsum molestiae at eos.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 col-lg-4">
                            <div class="card bg-dark text-light card-info-portfolio">
                                <div class="card-body d-justify-content-center align-items-center flex-column">
                                    <p class="icon-info mb-0"><i class="bi bi-layout-text-window-reverse"></i></p>
                                    <p class="text-card">Diseños de sitios Web</p>
                                    <p class="text-descript-card">Lorem ipsum dolor sit amet consectetur adipisicing elit. Error optio itaque soluta excepturi dolorem dicta in esse eaque animi perspiciatis, cupiditate ut, quos nesciunt voluptatum eligendi ipsum molestiae at eos.</p>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </article>
        <div class="separator-effect-2"></div>
    </section>

    <section class="section-about text-light py-5">
        <article class="container pt-5">
            <p class="title-section-1 mt-5">SOBRE MÍ</p>
            <div class="row m-0 gy-3">
                <div class="col-12 col-lg-3 col-xxl-4">
                    <div class="border border-1 border-light text-center" style="width: 100%;height:150px">
                        foto
                    </div>
                </div>
                <div class="col-12 col-lg-9 col-xxl-8 border p-2">
                    <p class="text-center display-5 fw-bold mb-0 fst-italic"><span class="text-gold">L</span>eonel <span class="text-gold">R</span>uiz <br> <span class="display-6 fw-bold">Desarrollador web <span class="text-gold">Full-Stack</span></span></p>
                    <p class="text-light">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illum officia quis corrupti tempore ex ipsum quas in? Rem aliquid quibusdam alias, numquam impedit officia mollitia vel excepturi consectetur a minus!</p>
                    <p class="text-light">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illum officia quis corrupti tempore ex ipsum quas in? Rem aliquid quibusdam alias, numquam impedit officia mollitia vel excepturi consectetur a minus!</p>
                </div>
                <div class="col-12 border p-2 mb-5">
                    <h5 class="text-start">Lenguajes de programación</h5>
                    <div class="row m-0 g-2">
                        <div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xxl-1 mb-3 d-flex justify-content-end align-items-center flex-column">
                            <img src="{{assets('icons/html5.png')}}" width="40px" alt="HTML5">
                            <p class="m-0 small">HTML5</p>
                            <div class="w-100">
                                <div class="progress" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-gold" style="width: 75%"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xxl-1 mb-3 d-flex justify-content-end align-items-center flex-column">
                            <img src="{{assets('icons/css3.png')}}" width="40px" alt="CSS3">
                            <p class="m-0 small">CSS3</p>
                            <div class="w-100">
                                <div class="progress" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-gold" style="width: 75%"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xxl-1 mb-3 d-flex justify-content-end align-items-center flex-column">
                            <img src="{{assets('icons/javascript.png')}}" width="40px" alt="JAVASCRIPT">
                            <p class="m-0 small">JAVASCRIPT</p>
                            <div class="w-100">
                                <div class="progress" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-gold" style="width: 65%"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xxl-1 mb-3 d-flex justify-content-end align-items-center flex-column">
                            <img src="{{assets('icons/php.png')}}" width="50px" alt="PHP">
                            <p class="m-0 small">PHP</p>
                            <div class="w-100">
                                <div class="progress" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-gold" style="width: 65%"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xxl-1 mb-3 d-flex justify-content-end align-items-center flex-column">
                            <img src="{{assets('icons/mysql.png')}}" width="50px" alt="MYSQL">
                            <p class="m-0 small">MYSQL</p>
                            <div class="w-100">
                                <div class="progress" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-gold" style="width: 65%"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xxl-1 mb-3 d-flex justify-content-end align-items-center flex-column">
                            <img src="{{assets('icons/jquery.png')}}" width="50px" alt="JQUERY">
                            <p class="m-0 small">JQUERY</p>
                            <div class="w-100">
                                <div class="progress" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-gold" style="width: 45%"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xxl-1 mb-3 d-flex justify-content-end align-items-center flex-column">
                            <img src="{{assets('icons/bootstrap.png')}}" width="40px" alt="BOOTSTRAP">
                            <p class="m-0 small">BOOTSTRAP</p>
                            <div class="w-100">
                                <div class="progress" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-gold" style="width: 45%"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xxl-1 mb-3 d-flex justify-content-end align-items-center flex-column">
                            <img src="{{assets('icons/git-noname.png')}}" width="40px" alt="GIT">
                            <p class="m-0 small">GIT</p>
                            <div class="w-100">
                                <div class="progress" role="progressbar" aria-valuenow="38" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-gold" style="width: 38%"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xxl-1 mb-3 d-flex justify-content-end align-items-center flex-column">
                            <img src="{{assets('icons/laravel.png')}}" width="40px" alt="LARAVEL">
                            <p class="m-0 small">LARAVEL</p>
                            <div class="w-100">
                                <div class="progress" role="progressbar" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-gold" style="width: 28%"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xxl-1 mb-3 d-flex justify-content-end align-items-center flex-column">
                            <img src="{{assets('icons/angular.png')}}" width="40px" alt="ANGULAR">
                            <p class="m-0 small">ANGULAR</p>
                            <div class="w-100">
                                <div class="progress" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-gold" style="width: 25%"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xxl-1 mb-3 d-flex justify-content-end align-items-center flex-column">
                            <img src="{{assets('icons/reactjs.png')}}" width="40px" alt="REACTJS">
                            <p class="m-0 small">REACT JS</p>
                            <div class="w-100">
                                <div class="progress" role="progressbar" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-gold" style="width: 18%"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xxl-1 mb-3 d-flex justify-content-end align-items-center flex-column">
                            <img src="{{assets('icons/nodejs.png')}}" width="40px" alt="NODEJS">
                            <p class="m-0 small">NODE JS</p>
                            <div class="w-100">
                                <div class="progress" role="progressbar" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-gold" style="width: 18%"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xxl-1 mb-3 d-flex justify-content-end align-items-center flex-column">
                            <img src="{{assets('icons/electronjs.png')}}" width="40px" alt="ELECTRONJS">
                            <p class="m-0 small">ELECTRON JS</p>
                            <div class="w-100">
                                <div class="progress" role="progressbar" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-gold" style="width: 18%"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xxl-1 mb-3 d-flex justify-content-end align-items-center flex-column">
                            <img src="{{assets('icons/mongodb.png')}}" width="40px" alt="MONGODB">
                            <p class="m-0 small">MONGODB</p>
                            <div class="w-100">
                                <div class="progress" role="progressbar" aria-valuenow="7" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-gold" style="width: 7%"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xxl-1 mb-3 d-flex justify-content-end align-items-center flex-column">
                            <img src="{{assets('icons/vuejs.png')}}" width="40px" alt="VUEJS">
                            <p class="m-0 small">VUE JS</p>
                            <div class="w-100">
                                <div class="progress" role="progressbar" aria-valuenow="7" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-gold" style="width: 7%"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xxl-1 mb-3 d-flex justify-content-end align-items-center flex-column">
                            <img src="{{assets('icons/python.png')}}" width="40px" alt="PYTHON">
                            <p class="m-0 small">PYTHON</p>
                            <div class="w-100">
                                <div class="progress" role="progressbar" aria-valuenow="11" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-gold" style="width: 11%"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xxl-1 mb-3 d-flex justify-content-end align-items-center flex-column">
                            <img src="{{assets('icons/golang.png')}}" width="40px" alt="GO">
                            <p class="m-0 small">GO LANG</p>
                            <div class="w-100">
                                <div class="progress" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100">
                                    <div class="progress-bar bg-gold" style="width: 5%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </section>

    <section class="section-portfolio position-relative py-5">
        <div class="separator-effect-2" style="top:-35px;transform: skewY(-1.5deg);"></div>
        <article class="container">
            <p class="title-section-1 mt-5">PORTAFOLIO</p>
            <div class="d-flex justify-content-center align-items-center flex-wrap mb-5">
                <button type="button" href="#" class="button-lr d-block button-filter-proyects">Todo</button>
                <button type="button" href="#" class="button-lr d-block button-filter-proyects">Plantillas web</button>
                <button type="button" href="#" class="button-lr d-block button-filter-proyects">App web</button>
            </div>
            <section class="row m-0">
                <div class="col-6 col-md-4 col-lg-4">
                    <div class="card-proyect">
                        <div class="hover-card-selected"></div>
                    </div>
                </div>
            </section>
        </article>
    </section>
@endsection