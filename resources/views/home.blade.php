@extends('layouts.app')

@section('content')
    <div class="jumbotron">
        <div class="container">
            <h1 class="display-3">Olá, seja bem vindo!</h1>
            <p>Esse sistema está sendo usado pra teste!</p>
            <p><a class="btn btn-primary btn-lg" href="{{ url('/products') }}" role="button">Produtos »</a></p>
        </div>
    </div>
@endsection
