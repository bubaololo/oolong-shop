@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Подтвердите вашу почту') }}</div>

                <div class="card-body">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('Новая ссылка для верификации почтнового ящика была отправлена вам на почту') }}
                        </div>
                    @endif

                    {{ __('Прежде чем продолжить пожалуйста проверьте ваш почтовый ящик, в нём уже должна быть ссылка для подтверждения') }}
                    {{ __('Если вы не получили ссылку') }},
                    <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                        @csrf
                        <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('нажмите здесь, чтобы запросить новую') }}</button>.
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
