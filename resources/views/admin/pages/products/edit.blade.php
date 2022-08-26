@extends('admin.layouts.app')

@section('title', 'Editar Produto')

@section('content')
    <h1>Editar Produto {{ $product->name }}</h1>

    <form action="{{ route('products.update', "$product->id")}}" method="POST" class="form">
        @method('PUT')
        @include('admin.pages.products.partials.form')
    </form>
@endsection