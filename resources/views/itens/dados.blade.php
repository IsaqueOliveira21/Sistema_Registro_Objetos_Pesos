@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Cadastrar novo item') }}</div>

                    <div class="card-body">
                        <form action="{{ route('pesos.store') }}" method="POST" enctype="application/x-www-form-urlencoded">
                            @csrf
                            <div class="row">
                                <div class="col-12 mb-3">
                                    <label for="item" class="form-label">Item</label>
                                    <input type="text" class="form-control" name="item" id="item" placeholder="Nome do item...">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 mb-3">
                                    <label for="peso" class="form-label">Peso</label>
                                    <input type="number" class="form-control" class="form-control" name="peso" id="peso" min="0" placeholder="0">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 mb-3">
                                    <label for="tipo_peso" class="form-label">Unidade de Medida</label>
                                    <input type="text" class="form-control" name="tipo_peso" id="tipo_peso" maxlength="3" placeholder="KG">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <button class="btn btn-success" type="submit">Cadastrar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
