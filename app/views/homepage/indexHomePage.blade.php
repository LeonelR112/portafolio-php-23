@extends('templates.templateMaster')
@section('title', 'Inicio')
@section('meta-desc', 'Descripción de la sección que se está visualizando')
@section('content')
    <section class="container-fluid" id="main_container">
        <div class="row m-0">
            <aside class="col-0 col-lg-1 py-4">
                @include('layouts.asideMenu')
            </aside>
            <section class="col-12 col-lg-11">
                <div class="m-0 p-0 overflow-auto" id="main_content_render">
                    @include("layouts.inicio")
                    @include('layouts.info')
                </div>
            </section>
        </div>
    </section>
@endsection