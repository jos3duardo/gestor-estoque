@extends('layouts.login')
@section('content')
    <form method="POST" class="form-signin" action="{{ route('register') }}">
        @csrf
        <img class="mb-3" src="/img/logo.png" alt="" width="72" height="72">
        <h1 class="mb-3 font-weight-normal"><b>Sis</b>Compras</h1>
        <div class="form-group">
            <input id="name"  placeholder="Nome" type="text" class="son-form-field form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
            <input id="email" type="email"
                   placeholder="Email" class="son-form-field form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group">
            <input id="password" type="password"   placeholder="Senha" class="form-control son-form-field  @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group">
            <label for="password-confirm" class="col-md-4 sr-only col-form-label text-md-right">{{ __('Confirme') }}</label>
            <input id="password-confirm"  placeholder="Confirmar senha" type="password" class="form-control son-form-field " name="password_confirmation" required autocomplete="new-password">
        </div>
        <button type="submit" class="btn btn-warning btn-lg btn-block" title="Registrar-se">
            {{ __('Cadastrar-se') }}
        </button>
        <a href="/" class="btn btn-dark btn-lg btn-block" title="login">Entrar</a>
        <p class="mt-4 mb-1 text-muted">&copy; Todos os Direitos Reservados
            {{date('Y')}}</p>
        <a href="http://jos3duardo.xyz" target="_blank">Siscompras || Jos3duardo</a>
    </form>
@endsection
