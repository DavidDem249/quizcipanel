@extends('admin.auths._base',['title' => 'Dashboard'])

@section('style')

@stop


@section('content')
	<div class="card pt-4">
        <div class="card-body">
            <div class="text-center mb-5">
                <img src="{{ asset('assets/images/favicon.svg') }}" height="48" class='mb-4'>
                <h3>S'INSCRIRE</h3>
                <p>INSCRIVEZ-VOUS POUR CONTINUER.</p>
            </div>
            <form method="POST" action="{{ route('store.register') }}">
            	@csrf
                <div class="form-group position-relative has-icon-left">
                    <label for="username">Email</label>
                    <div class="position-relative">
                        <input name="email" type="email" class="form-control" id="username">
                        <div class="form-control-icon">
                            <i data-feather="user"></i>
                        </div>
                    </div>
                </div>
                <div class="form-group position-relative has-icon-left">
                    <div class="clearfix">
                        <label for="password">Mot de passe</label>
                        <!-- <a href="auth-forgot-password.html" class='float-end'>
                            <small>Mot de passe oublié?</small>
                        </a> -->
                    </div>
                    <div class="position-relative">
                        <input name="password" type="password" class="form-control" id="password">
                        <div class="form-control-icon">
                            <i data-feather="lock"></i>
                        </div>
                    </div>
                </div>

                <div class='form-check clearfix my-4'>
                    <!-- <div class="checkbox float-start">
                        <input type="checkbox" id="checkbox1" class='form-check-input'>
                        <label for="checkbox1">Se souvenir de moi</label>
                    </div> -->
                    <div class="float-end">
                        <a href="{{ route('login') }}">Se connecter?</a>
                    </div>
                </div>
                <div class="clearfix">
                    <input type="submit" value="S'INSCRIRE" class="btn btn-primary float-end" />
                </div>
            </form>
            
        </div>
    </div>
@stop