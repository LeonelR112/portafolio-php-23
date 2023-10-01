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
@endsection