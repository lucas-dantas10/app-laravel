@extends('admin.layouts.app')

@section('title', 'Cadastrar novo Produto')

@section('content')
    <h1>Cadastrar um produto</h1>

    <form action="{{ route('products.store') }}" method="POST" class="form" enctype="multipart/form-data">
        {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}
        @method('post')
        @include('admin.pages.products.partials.form')
    </form>
@endsection