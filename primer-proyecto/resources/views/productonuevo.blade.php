@extends('home')
@section('content')
<br><br>
<div class="card">
    <div class="card-header">Productos</div>
    <div class="card-body">
        <form action="/categoriacrear" method="post">
            @csrf
            <div class="input-group mb-3">
                <input type="text" name="codigo" class="form-control" placeholder="Código" aria-label="Recipient's username" aria-describedby="basic-addon2">
                <span class="input-group-text" id="basic-addon2">Código Producto</span>
            </div>
            <div class="input-group mb-3">
                <input type="text" name="nombre" class="form-control" placeholder="Nombre" aria-label="Recipient's username" aria-describedby="basic-addon2">
                <span class="input-group-text" id="basic-addon2">Nombre Producto</span>
            </div>
            <div class="input-group mb-3">
                <input type="text" name="descripcion" class="form-control" placeholder="Descripcion del Producto" aria-label="Descripcion de la Categoria" aria-describedby="basic-addon2">
                <span class="input-group-text" id="basic-addon2">Descripcion del Producto</span>
            </div>
            <div class="input-group mb-3">
                <input type="text" name="categoria" class="form-control" placeholder="Categoria" aria-label="Descripcion de la Categoria" aria-describedby="basic-addon2">
                <span class="input-group-text" id="basic-addon2">Categoria Producto</span>
            </div>
            <input class="btn btn-primary" type="submit" value="crear">
        </form>
    </div>
</div>
<br><br>
<h2>Listado Productos</h2>
<div class="table-responsive">
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">Código</th>
                <th scope="col">Nombre</th>
                <th scope="col">Descripción</th>
                <th scope="col">Categorias</th>
            </tr>
        </thead>
        <tbody>
            <tr></tr>
        </tbody>
    </table>
</div>
@stop