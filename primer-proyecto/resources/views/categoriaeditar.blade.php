@extends('home')
@section('content')
<br>
<br>
<div class="card">
    <div class="card-header">Categorías - Editar</div>
    <div class="card-body">
        <form action="/categoriaactualizar" method="post">
            @csrf
            <div class="input-group mb-3">
            <input type="text" name="id" id="id" style="display:none" value="{{$categoria[0]->id}}">
            <input type="text" name="nombre" class="form-control" placeholder="Nombre" value="{{$categoria[0]->nombre}}">
            <span class="input-group-text" id="basic-addon2">Nombre Categoría</span>
            </div>
            <div class="input-group mb-3">
            <input type="text" name="descripcion" class="form-control" placeholder="Descripción de la categoría" value="{{$categoria[0]->descripcion}}">
            <span class="input-group-text" id="basic-addon2">Descripción</span>
            </div>
            <input class="btn btn-primary" type="submit" value="Guardar Cambios">
        </form>   
    </div>
    
</div>
@endsection