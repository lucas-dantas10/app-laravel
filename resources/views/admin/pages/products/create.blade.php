@extends('admin.layouts.app')

@section('title', 'Cadastrar novo Produto')

@section('content')
    <h1>Cadastrar um produto</h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach     
        </ul>        
    @endif

    <form action="{{ route('products.store') }}" method="POST" class="form" enctype="multipart/form-data">
        {{-- <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}
        @csrf
        <div class="form-group mb-3">
            <input type="text" name="name" placeholder="Nome:" class="form-control" value="{{ old('name') }}">
        </div>

        <div class="form-group mb-3">
            <input type="text" name="description" placeholder="Descrição:" class="form-control" value="{{ old('description') }}">
        </div>   
        
        <div class="form-grou mb-3">
            <input type="file" name="photo" id="photo">
        </div>
        
        <button type="submit" class="btn btn-success">Enviar</button>
    </form>
@endsection