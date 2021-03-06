@extends('admin.auths._base',['title' => 'LOGIN'])

@section('style')

@stop


@section('content')
	<div class="card pt-4">
        <div class="card-body">
            <div class="text-center mb-5">
                <img src="{{ asset('assets/images/favicon.svg') }}" height="48" class='mb-4'>
                <h3>Se connecter</h3>
                <p>Conncetez-vous pour continuer.</p>
            </div>
            <form method="POST" action="{{ route('store.login') }}">
                @csrf

                 @if(session()->has('error'))
                        <script src="{{ asset('iziToast/dist/js/iziToast.min.js') }}" type="text/javascript"></script>
                        <script type="text/javascript">
                            iziToast.error({
                            theme: 'light',
                            message: "{{ session()->get('error')}}",
                            //backgroundColor: 'green',
                            //messageSize: 12,
                            timeout: 8000,
                            position: 'topCenter', // bottomRight, bottomLeft, topRight, topLeft, topCenter, bottomCenter
                           //progressBarColor: 'rgb(100, 255, 104)',
                        
                           });
                        </script>
                 @endif

                  @if(session()->has('success'))
                        <script src="{{ asset('iziToast/dist/js/iziToast.min.js') }}" type="text/javascript"></script>
                        <script type="text/javascript">
                            iziToast.success({
                            theme: 'light',
                            message: "{{ session()->get('success')}}",
                            //backgroundColor: 'green',
                            //messageSize: 12,
                            timeout: 8000,
                            position: 'topCenter', // bottomRight, bottomLeft, topRight, topLeft, topCenter, bottomCenter
                           //progressBarColor: 'rgb(100, 255, 104)',
                        
                           });
                        </script>
                 @endif

                <div class="form-group position-relative has-icon-left">
                    <label for="username">Email</label>
                    <div class="position-relative">
                        <input type="text" name="login" class="form-control" id="username">
                        <div class="form-control-icon">
                            <i data-feather="user"></i>
                        </div>
                    </div>
                </div>
                <div class="form-group position-relative has-icon-left">
                    <div class="clearfix">
                        <label for="password">Mot de passe</label>
                        <a href="#" class='float-end'>
                            <small>Mot de passe oubli???</small>
                        </a>
                    </div>
                    <div class="position-relative">
                        <input name="password" type="password" class="form-control" id="password">
                        <div class="form-control-icon">
                            <i data-feather="lock"></i>
                        </div>
                    </div>
                </div>

                <div class='form-check clearfix my-4'>
                    <div class="checkbox float-start">
                        <input type="checkbox" id="checkbox1" class='form-check-input'>
                        <label for="checkbox1">Se souvenir de moi</label>
                    </div>
                    <div class="float-end">
                        <a href="{{ route('register') }}">S'inscrire?</a>
                    </div>
                </div>
                <div class="clearfix">
                    <button class="btn btn-primary float-end">Se connecter</button>
                </div>
            </form>
           
        </div>
    </div>
@stop