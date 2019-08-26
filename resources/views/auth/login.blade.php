@extends('layouts.web')

@section('content')

    <form class="form-signin" method="POST" action="{{ route('login') }}">
        @csrf
        <img class="mb-4" src="../../assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
        <h1 class="h3 mb-3 font-weight-normal">Faça login</h1>

        <label for="inputEmail" class="sr-only">Endereço de email</label>
        <input type="email" id="inputEmail" class="form-control @error('email') is-invalid @enderror" name="email"
               placeholder="Seu email" value="{{ old('email') }}" required autocomplete="email" autofocus>
        @error('email')
        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
        @enderror
        <label for="inputPassword" class="sr-only">{{ __('Senha') }}</label>
        <input type="password" id="inputPassword" class="form-control  @error('password') is-invalid @enderror"
               name="password"
               placeholder="Senha" required autocomplete="current-password">
        @error('password')
        <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
        @enderror
        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" name="remember"
                       id="remember" {{ old('remember') ? 'checked' : '' }}> Lembrar de mim
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">{{ __('Login') }}</button>
        @if (Route::has('password.request'))
            <a class="btn btn-link" href="{{ route('password.request') }}">
                {{ __('Esqueceu a senha?') }}
            </a>
        @endif
        <p class="mt-5 mb-3 text-muted">&copy; iBank</p>
    </form>
@endsection
