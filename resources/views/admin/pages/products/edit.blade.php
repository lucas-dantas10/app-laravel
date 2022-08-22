@extends('admin.layouts.app')

@section('title', 'Editar')

@section('content')
    <h1>Editar Produto {{ $id }}</h1>

    <form action="{{ route('products.update', "$id")}}" method="POST" class="form">
        @method('PUT')
        @csrf
        <div class="form-group mb-3">
            <input type="text" name="name-edit" class="form-control" placeholder="Nome novo:">
        </div>
        <div class="form-group mb-3">
            <input type="text" name="description-edit" class="form-control" placeholder="Descrição nova:">
        </div>       
        
        <button class="btn btn-success">Editar</button>
    </form>
@endsection