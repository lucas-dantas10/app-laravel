@extends('admin.layouts.app')

@section('title', "Detalhes do Produto")

@section('content')
    <h1>Produto {{ $product->name }}</h1>
    <a href="{{ route('products.index') }}" class="btn btn-primary">Home</a>

    <ul>
        <li>Nome {{ $product->name }}</li>
        <li>Preço {{ $product->price }}</li>
        <li>Descrição {{ $product->description }}</li>
    </ul>

    <form action="{{ route('products.destroy', $product->id) }}" method="POST">
        @method('DELETE')
        @csrf

        <button type="submit" class="btn btn-danger">Deletar Produto</button>

    </form>
@endsection

