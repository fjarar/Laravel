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

    public function editar(Request $request){
        $id=$request->id;
        $producto=Producto::where('productos.id',$id)->get();
        $categorias=Categoria::get();
        return view('productoeditar',['producto'=>$producto, 'categorias'=>$categorias]);
    }

    public function actualizar(Request $request){
        $producto=Producto::findOrFail($request->id);
        $producto->codigo=$request->codigo;
        $producto->nombre=$request->nombre;
        $producto->descripcion=$request->descripcion;
        $producto->idcategoria=$request->categoria;
        $producto->save();
        return redirect('/productonuevo');
    }

    public function eliminar(Request $request){
        Producto::where('productos.id',$request->id)->delete();
        return redirect('/productonuevo');
    }
}
