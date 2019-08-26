@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header container-fluid">
                    <div class="row">
                        <div class="col-md-10">
                            <h3>Produtos</h3>
                        </div>
                        <div class="col-md-2 float-right">
                            <button class="btn btn-primary" (click)="onAddCategoieModal(addCategorieModal)">Adicionar</button>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @include('products')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
