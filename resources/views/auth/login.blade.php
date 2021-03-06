@extends('layouts.subdomain')

@section('content')
    <div class="container path-login">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <h1 class="font-weight-bold homeflow-bold text-center mb-5 mt-4">
                    Conectarse a <span class="homeflow-primary-color">
                        @if ($account)
                            {{ $account }}
                        @endif
                    </span>
                    {{--{{ __('Conéctate a tu espacio Homeflow') }}--}}
                </h1>

                @include('messages.flash-message')

                <div class="col-md-7 mx-auto homeflow-card">
                    <div class="card-body">
                        <p class="homeflow-medium text-center mt-2 homeflow-text-gray">
                            Introduzca los datos de su espacio.
                        </p>

                        {{--<p class="homeflow-regular text-center mt-2">Ingrese el nombre de su espacio</p>--}}
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="input-group mb-3">
                                <input id="email" type="email"
                                       class="homeflow-medium form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                       name="email"
                                       placeholder="Correo electrónico"
                                       value="{{ old('email') }}" required
                                       autofocus/>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback"
                                          role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="input-group mb-3">
                                <input id="password" type="password"
                                       placeholder="Contraseña"
                                       class="homeflow-medium form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                       name="password" required/>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback"
                                          role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>


                            <div class="form-group row mb-0 mt-4 mt-2">
                                <button type="submit"
                                        class="btn btn-homeflow-primary-squared-button text-white homeflow-bold w-75 mx-auto mt-3">
                                    Continuar <i class="far fa-long-arrow-right fa-1x"></i>
                                </button>
                            </div>
                        </form>
                    </div>

                    <div class="card-footer bg-white mt-3 text-center homeflow-regular"
                         style="color: #838588;font-size: 15px;">
                        2019 <i class="far fa-copyright"></i> Homeflow App
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
