@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Itens cadastrados') }}</div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col" class="text-center">-</th>
                                <th scope="col">Item</th>
                                <th scope="col" class="text-center">Peso</th>
                                <th scope="col" class="text-center">Medida</th>
                                <th scope="col" class="text-center">Nº Registro</th>
                                <th scope="col" class="text-center">-</th>
                                <th scope="col" class="text-center">-</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($items as $k => $item)
                                <tr>
                                    <th scope="row" class="text-center">{{ $k + 1 }}</th>
                                    <td>{{ $item->item }}</td>
                                    <td class="text-center">{{ $item->peso }}</td>
                                    <td class="text-center">{{ $item->tipo_peso }}</td>
                                    <td class="text-center">{{ $item->id }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('pesos.edit', $item) }}" class="btn btn-warning" role="button">Editar</a>
                                    </td>
                                    <td class="text-center">
                                        <form action="{{ route('pesos.destroy', $item) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Excluir</button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                    <tr>
                                        <td class="text-center" colspan="7">Nenhum item registrado</td>
                                    </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
