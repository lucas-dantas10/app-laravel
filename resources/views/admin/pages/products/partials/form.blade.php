@include('admin.includes.alerts')

@csrf
<div class="form-group mb-3">
    <input type="text" name="name" class="form-control" placeholder="Nome novo:" value="{{ $product->name ?? old('name') }}">
</div>

<div class="form-group mb-3">
    <input type="text" name="price" class="form-control" placeholder="Price novo:" value="{{ $product->price ?? old('price') }}">
</div>

<div class="form-group mb-3">
    <input type="text" name="description" class="form-control" placeholder="Descrição nova:" value="{{ $product->description ?? old('description') }}">
</div>       
       
<div class="form-group">
    <button class="btn btn-success">Enviar</button>
</div>