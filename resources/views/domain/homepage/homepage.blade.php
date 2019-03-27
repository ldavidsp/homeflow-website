@extends('layouts.app')

@section('content')
    {{-- Header --}}
    <div class="container-fluid path-homepage">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mt-5">
                    <h1 class="font-weight-bold text-black homeflow-medium mt-5">
                        {{--Crea tus listas en cualquier momento.--}}
                        Te damos la bienvenida a Homeflow.
                    </h1>
                    
                    <p class="header-subtitle mt-4 homeflow-regular">
                        Maneja las compras de tu hogar con <span class="font-weight-bold">Homeflow</span>
                        y menten en tu casa todo lo que necesites de una manera facil y rapida</p>
    
                    
                    {{--<a class="btn btn-homeflow-primary text-white homeflow-bold">
                        Crea tu espacio de trabajo
                    </a>--}}
                    
                    <div class="col-12">
                        <a href="https://play.google.com/store/apps/details?id=com.homeflow" target="_blank">
                            <img src="/assets/img/phone/play.png" alt="Play Store">
                        </a>
                    </div>
                </div>
                
                <div class="col-md-6 mt-5">
                    <img src="/assets/img/phone/homeflow.png" class="mx-auto" style="width: 15rem;transform: rotate(15deg);justify-content: center;display: flex;" alt="Homeflow"/>
                </div>
            </div>
        </div>
    </div>
@endsection
