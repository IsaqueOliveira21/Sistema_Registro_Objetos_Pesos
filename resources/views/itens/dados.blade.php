@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __(!isset($peso) ? 'Cadastrar item' : 'Atualizar item') }}</div>

                    <div class="card-body">
                        <form action="{{ !isset($peso) ? route('pesos.store') : route('pesos.update', $peso)}}" method="POST" enctype="application/x-www-form-urlencoded">
                            @csrf
                            @if(isset($peso))
                                @method('PUT')
                            @endif
                            <div class="row">
                                <div class="col-12 mb-3">
                                    <label for="item" class="form-label">Item</label>
                                    <input type="text" class="form-control" name="item" id="item" value="{{!isset($peso) ? '' : $peso->item}}" placeholder="Nome do item...">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 mb-3">
                                    <label for="peso" class="form-label">Peso</label>
                                    <input type="number" class="form-control" class="form-control" name="peso" id="peso" min="0" value="{{!isset($peso) ? '' : $peso->peso}}" placeholder="0">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 mb-3">
                                    <label for="tipo_peso" class="form-label">Unidade de Medida</label>
                                    <input type="text" class="form-control" name="tipo_peso" id="tipo_peso" maxlength="3" value="{{!isset($peso) ? '' : $peso->tipo_peso}}" placeholder="KG">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <button class="btn btn-success" type="submit">{{ !isset($peso) ? 'Cadastrar' : 'Atualizar' }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
