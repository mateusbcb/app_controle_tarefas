@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
<<<<<<< HEAD
                <div class="card-header">{{ __('Verify Your Email Address') }}</div>
=======
                <div class="card-header">{{ __('Falta pouco agora! Precisamos que você valide seu e-mail') }}</div>
>>>>>>> e20793dc502e16bb4f574ef710e30538363f4c24

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
<<<<<<< HEAD
                            {{ __('A fresh verification link has been sent to your email address.') }}
                        </div>
                    @endif

                    {{ __('Before proceeding, please check your email for a verification link.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
=======
                            {{ __('Reenviamos o e-mail de verificação.') }}
                        </div>
                    @endif

                    {{ __('Antes de proceguir na aplicação, favor verificar seu e-mail clicando no link de verificação enviado para seu e-mail cadastrdo.') }}
                    <br>
                    {{ __('Se você não recebeu o e-mail clique no link abaixo para reenviar o e-mail de verificação') }},
                    <br>
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('Clique aqui') }}</button>.
>>>>>>> e20793dc502e16bb4f574ef710e30538363f4c24
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
