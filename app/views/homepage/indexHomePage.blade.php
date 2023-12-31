@extends('templates.templateMaster')
@section('title', 'LRWEB - Inicio')
@section('meta-desc', 'Descripción de la sección que se está visualizando')
@section('content')
    <section class="section-home bg-banner-init"  id="inicio">
        <div class="row justify-content-center m-0">
            <div class="col-12 col-lg-5">
                <div class="content-descrip-home">
                    <p class="display-4 fw-bold mb-0">Hola soy Leonel Ruiz</p>
                    <p class="display-5">Desarrollador web Full-Stack</p>
                    <p class="text-description-home">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illum officia quis corrupti tempore ex ipsum quas in? Rem aliquid quibusdam alias, numquam impedit officia mollitia vel excepturi consectetur a minus!</p>
                    <div class="w-100 justify-content-center-align-items-center flex-wrap">
                        <button type="button" class="button-lr" onclick="scrollToElement('portafolio')">Portafolio</a>
                        <button type="button" class="button-lr" onclick="scrollToElement('contacto')">Contacto</button>
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-3 d-flex justify-content-start align-items-center">
                <img src="{{assets('img/web-image-representation.png')}}" class="img-fluid" alt="img_not_found">
            </div>
        </div>
    </section>

    <section class="section-services bg-grey-1 text-light py-5 shadow-top-effect position-relative">
        <article class="container pb-5">
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
                        @foreach($languages_prog as $lang)
                        <div class="col-6 col-sm-4 col-md-3 col-lg-2 col-xxl-1 mb-3 d-flex justify-content-end align-items-center flex-column">
                            <a href="javascript:void(0)" class="button_more_details_lang" data-id-lang="{{$lang['id_lang']}}" title="Más info" onclick="$('#modalInfoLenguajes').modal('show')"><img src="{{assets('icons/' . $lang["icon_img"])}}"  class="language-more-info-link" width="40px" alt="{{$lang['name']}}"></a>
                            <p class="m-0 small">{{$lang['name']}}</p>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </article>
    </section>
    <section class="section-portfolio position-relative py-5" id="portafolio">
        <article class="container">
            <p class="title-section-1 mt-5">PORTAFOLIO</p>
            <div class="d-flex justify-content-center align-items-center flex-wrap mb-5">
                <button type="button" href="#" class="button-lr d-block button-filter-proyects">Todo</button>
                <button type="button" href="#" class="button-lr d-block button-filter-proyects">Plantillas web</button>
                <button type="button" href="#" class="button-lr d-block button-filter-proyects">App web</button>
            </div>
            <section class="row m-0">
                <div class="col-6 col-md-4 col-lg-4">
                    <div class="card-proyect ratio ratio-1x1 backgrounds-cards" style="background-image: url('{{assets('img/example_1.jpg')}}')">
                        <div class="hover-card-selected">
                            <p class="hover-card-title">Mi sitio web</p>
                            <p class="hover-card-subtitle">Plantilla web</p>
                            <a href="#" class="hover-card-button">Ver proyecto</a>
                        </div>
                    </div>
                </div>
            </section>
        </article>
    </section>

    <section class="section-contacto position-relative py-5 text-light">
        <article class="container" id="contacto">
            <p class="title-section-1 mt-5">CONTACTO</p>
            <div class="row m-0">
                <div class="col-12 col-lg-6">
                    <p class="text-center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Non nesciunt earum laudantium dolore minus excepturi perferendis eum delectus iusto aut.</p>
                </div>
                <div class="col-12 col-md-6">
                    <form action="#" method="POST">
                        <div class="row g-2 m-0">
                            <div class="col-12 col-md-6">
                                <input type="text" name="nombre" id="input_nombre" class="input-form-control" placeholder="Nombre *">
                                <div class="input-invalid" id="invalidNombre"></div>
                            </div>
                            <div class="col-12 col-md-6">
                                <input type="email" name="email" id="input_mail" class="input-form-control" placeholder="Email *">
                                <div class="input-invalid" id="invalidEmail"></div>
                            </div>
                            <div class="col-12 col-md-6">
                                <input type="text" name="telefono" id="input_telefono" class="input-form-control" placeholder="Teléfono">
                                <div class="input-invalid" id="invalidTelefono"></div>
                            </div>
                            <div class="col-12 col-md-6">
                                <input type="text" name="sitioWeb" id="input_web" class="input-form-control" placeholder="Sitio web">
                                <div class="input-invalid" id="invalidSitioWeb"></div>
                            </div>
                            <div class="col-12 mb-0">
                                <textarea name="mensaje" id="input_mensaje" cols="30" rows="5" class="input-form-control" placeholder="Mensaje"></textarea>
                                <p class="text-end"><span class="text-counter-msg">0 </span>/ 250</p>
                                <div class="input-invalid" id="invalidMensaje"></div>
                            </div>
                            <div class="col-12 text-center">
                                <button type="submit" title="Enviar mensaje" class="button-lr px-5">Enviar mensaje</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </article>
    </section>

    <!-- Modal info lenguajes-->
    <div class="modal fade slide-in-right" id="modalInfoLenguajes" tabindex="-1" aria-labelledby="modalInfoLenguajesLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content section-portfolio text-light">
                <div class="modal-body">
                    <section class="row m-0 overflow-hidden">
                        <div class="col-12">
                            <h5 class="text-center text-light">Más información</h5>
                            <hr class="border border-light">
                        </div>
                        <div class="col-12 col-md-6 col-lg-4 d-flex justify-content-center align-items-center flex-column">
                            <img src="#" class="img-fluid scale-in-center display-1" alt="" id="img_icon_lang">
                            <h3 class="text-center text-light" id="modal_title_lang">HTML5</h3>
                        </div>
                        <div class="col-12 col-md-6 col-lg-8 d-flex justify-content-center align-items-center slide-in-elliptic-top-fwd" id="content_certificate"></div>
                        <div class="col-12 puff-in-center" id="content_descrip_lang">
                            descripción. Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti iure, omnis praesentium sunt illum porro quidem blanditiis nisi dolorem modi pariatur fugiat quisquam, quae quibusdam, quos doloribus odio. Expedita, ab.
                        </div>
                    </section>
                </div>
                <div class="modal-footer">
                    <button type="button" class="button-lr" data-bs-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
    
    <button type="button" class="button-lr-sroll-up slide-in-right" id="button_scroll_index" onclick="scrollToElement('inicio')"><i class="bi bi-arrow-up"></i></button>
@endsection
@section('scripts-footer')
<script>
    const JSON_LANGUAGES = {!! $json_languages !!};
    const URL_ASSETS_ICONS = `{{ assets('icons/') }}`;
    const URL_ASSETS_IMG = `{{ assets('img/') }}`
</script>
{!! jsFile('funcionts\homepage', false) !!}
@endsection