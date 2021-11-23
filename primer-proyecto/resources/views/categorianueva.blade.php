@extends('home')
@section('content')
<br><br>
<div class="card">
    <div class="card-header">Categorías</div>
    <div class="card-body">
        <form action="/productocrear" method="post">
            @csrf
            <div class="input-group mb-3">
                <input type="text" name="nombre" class="form-control" placeholder="Nombre" aria-label="Recipient's username" aria-describedby="basic-addon2">
                <span class="input-group-text" id="basic-addon2">Nombre Categoria</span>
            </div>
            <div class="input-group mb-3">
                <input type="text" name="descripcion" class="form-control" placeholder="Descripcion de la Categoria" aria-label="Descripcion de la Categoria" aria-describedby="basic-addon2">
                <span class="input-group-text" id="basic-addon2">Descripcion Categoria</span>
            </div>
            <input class="btn btn-primary" type="submit" value="crear">
        </form>
    </div>
</div>
<br><br>
<h2>Listado Categorias</h2>
<div class="table-responsive">
    <table class="table table-striped table-sm">
        <thead>
            <tr>
                <th scope="col">Nombre</th>
                <th scope="col">Descripción</th>
                <th scope="col">Opciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categorias as $categoria)
            <tr>
                <td>{{$categoria->nombre}}</td>
                <td>{{$categoria->descripcion}}</td>
                <td>
                    <a href="/categoriaeditar/{{$categoria->id}}" class="btn btn-success">Editar</a>
                    <a href="/categoriaeliminar/{{$categoria->id}}" class="btn btn-danger">Eliminar</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@stop