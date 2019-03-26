@extends('layouts.app')

@section('content')
    <div class="container path-signin">
        <div class="row justify-content-center">
            <div class="col-md-8">
    
                <h1 class="font-weight-bold homeflow-bold text-center mb-5 mt-4">
                    {{ __('Conéctate a tu espacio de trabajo') }}
                </h1>
                
                <div class="col-md-8 mx-auto homeflow-card pb-5">
                    <div class="card-body">
                        <p class="font-weight-bold text-center mt-2">Ingrese el nombre de su espacio</p>
                        <form method="POST" action="{{ url('signin') }}">
                            @csrf
    
                            <div class="input-group mb-3">
                                <input type="text" class="form-control text-right font-weight-bold homeflow-bold" placeholder="url-de-tu-espacio" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <span class="input-group-text font-weight-bold homeflow-bold" name="account-subdomain" id="basic-addon2">.homeflowapp.com</span>
                                </div>
                            </div>
                            
                            
                            <div class="form-group row mb-0 mt-4 mt-2">
                                <a class="btn btn-homeflow-primary text-white homeflow-bold w-50 mx-auto">
                                    Continuar
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
