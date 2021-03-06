@extends('home')
@section('content')
<br><br>
<div class="card">
    <div class="card-header">Productos - Editar</div>
    <div class="card-body">
        <form action="/productoactualizar" method="post">
            @csrf
            <div class="input-group mb-3">
                <input type="text" name="id" id="id" style="display: none;" value="{{$producto[0]->id}}"/>
                <input type="text" name="codigo" class="form-control" placeholder="Código" value="{{$producto[0]->codigo}}" aria-label="Recipient's username" aria-describedby="basic-addon2" require>
                <span class="input-group-text" id="basic-addon2">Código Producto</span>
            </div>
            <div class="input-group mb-3">
                <input type="text" name="nombre" class="form-control" placeholder="Nombre" value="{{$producto[0]->nombre}}" aria-label="Recipient's username" aria-describedby="basic-addon2" require>
                <span class="input-group-text" id="basic-addon2">Nombre Producto</span>
            </div>
            <div class="input-group mb-3">
                <input type="text" name="descripcion" class="form-control" placeholder="Descripcion del Producto" value="{{$producto[0]->descripcion}}" aria-label="Descripcion de la Categoria" aria-describedby="basic-addon2" require>
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
            <input class="btn btn-primary" type="submit" value="Guardar Cambios">
        </form>
    </div>
</div>
@stop