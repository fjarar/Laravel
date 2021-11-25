@extends('home')
@section('content')
<br><br>
<div class="card">
    <div class="card-header">Productos</div>
    <div class="card-body">
        <form action="/productocrear" method="post">
            @csrf
            <div class="input-group mb-3">
                <input type="text" name="codigo" class="form-control" placeholder="Código" aria-label="Recipient's username" aria-describedby="basic-addon2" require>
                <span class="input-group-text" id="basic-addon2">Código Producto</span>
            </div>
            <div class="input-group mb-3">
                <input type="text" name="nombre" class="form-control" placeholder="Nombre" aria-label="Recipient's username" aria-describedby="basic-addon2" require>
                <span class="input-group-text" id="basic-addon2">Nombre Producto</span>
            </div>
            <div class="input-group mb-3">
                <input type="text" name="descripcion" class="form-control" placeholder="Descripcion del Producto" aria-label="Descripcion de la Categoria" aria-describedby="basic-addon2" require>
                <span class="input-group-text" id="basic-addon2">Descripcion del Producto</span>
            </div>
            <div class="input-group mb-3">
                <select name="categoria" id="categoria_container" class="form-control" require>
                    <option selected="selected" class="input-group-text">Eliga una categoría</option>
                    @foreach($categorias as $categoria)
                    <option value="{{$categoria->id}}" class="input-group-text">{{$categoria->nombre}}</option>
                    @endforeach
                </select>
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
            </tr>
        </thead>
        <tbody>
            @foreach($productos as $producto)
            <tr>
                <td>{{$producto->codigo}}</td>
                <td>{{$producto->nombre}}</td>
                <td>{{$producto->descripcion}}</td>
                <td>
                    <a href="/productoeditar/{{$producto->id}}" class="btn btn-success">Editar</a>
                    <a href="/productoeliminar/{{$producto->id}}" class="btn btn-danger">Eliminar</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@stop