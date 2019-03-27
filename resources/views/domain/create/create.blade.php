@extends('layouts.app')

@section('content')
    <div class="container path-create">
        <div class="row justify-content-center">
            <div class="col-md-8">
    
                <h1 class="font-weight-bold homeflow-bold text-center mb-5 mt-4">
                    {{ __('Crea tu espacio Homeflow') }}
                </h1>

                @include('messages.flash-message')
                
                <div class="col-md-7 mx-auto homeflow-card">
                    <div class="card-body">
                        <h5 class="homeflow-bold text-left mt-2 mb-3">
                            ¿Cómo se llamara tu espacio?
                        </h5>

                        {{--<p class="homeflow-regular text-center mt-2">Ingrese el nombre de su espacio</p>--}}
                        <form method="POST" action="{{ url('create') }}">
                            @csrf
    
                            <div class="input-group mb-3">
                                <input type="text" name="account_domain" class="form-control font-weight-bold homeflow-bold" placeholder="Ej: Homeflow">
                            </div>
                            
                            
                            <div class="form-group row mb-0 mt-4 mt-2">
                                <button type="submit" class="btn btn-homeflow-primary-squared-button text-white homeflow-bold w-75 mx-auto mt-3">
                                    Continuar <i class="far fa-long-arrow-right fa-1x"></i>
                                </button>
                            </div>
                        </form>
                    </div>

                    <div class="card-footer bg-white mt-3 text-center homeflow-regular" style="color: #838588;font-size: 15px;">
                        2019 <i class="far fa-copyright"></i> Homeflow App
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
