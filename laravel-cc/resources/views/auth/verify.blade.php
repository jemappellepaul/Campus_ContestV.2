@extends('layouts.app')
<link rel="stylesheet" href="{{ asset('css/main.css') }}" />
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Vérifiez votre adrese email') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('un mail viens de vous être envoyé à votre adresse email.') }}
                        </div>
                    @endif

                    {{ __('veuillez vérifier votre adresse email part le lien de confirmation.') }}
                    {{ __('If you did not receive the email') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('Cliquez ici pour recevoir une autre confirmation.') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
