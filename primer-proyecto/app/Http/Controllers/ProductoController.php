<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Categoria;

class ProductoController extends Controller
{
    public function nuevo(){
        $productos=Producto::get();
        $categorias=Categoria::get();

        return view('productonuevo',['productos'=>$productos, 'categorias'=>$categorias]);
    }

    public function crear(Request $request){
        $producto=new Producto();
        $producto->codigo=$request->codigo;
        $producto->nombre=$request->nombre;
        $producto->descripcion=$request->descripcion;
        $producto->idcategoria=$request->categoria;
        $producto->save();
        return redirect('/productonuevo');
    }
}
