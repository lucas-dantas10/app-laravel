@extends('admin.layouts.app')

@section('title', 'Gestão de Produtos')

@section('content')
    <h1>Exibindo os Produtos</h1>

    <a href="{{ route('products.create') }}" class="btn btn-primary">Cadastrar</a>

    <hr>

    <form action="{{ route('products.search') }}" method="POST" class="form form-inline">
        @csrf
        <div class="form-group">
            <input type="text" name="filter" placeholder="Filtrar:" class="form-control" value="{{ $filters['filter'] ?? '' }}">
        </div>
        
        <div class="form-group ml-3">
            <button class="btn btn-info" type="submit">Pesquisar</button>
        </div>        
    </form>

    <table class="table table-striped mt-3">
        <thead>
            <th>Imagem</th>
            <th>Nome</th>
            <th>Preço</th>
            <th width="100">Ações</th>
        </thead>

        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>
                        @if ($product->photo)
                            <img src="{{url("storage/$product->image")}}" alt="{{$product->name}}">
                        @else
                            
                        @endif
                    </td>
                    <td>
                        {{ $product->name }}
                    </td>
                    <td>
                        {{ $product->price }}
                    </td>
                    <td>
                        <a href="{{ route('products.show', $product->id) }}">Detalhes</a>
                        <a href="{{ route('products.edit', $product->id) }}">Editar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    @if (isset($filters))
        {!! $products->appends($filters)->links() !!} 
    @else
        {!! $products->links() !!}
    @endif
    
    
@endsection