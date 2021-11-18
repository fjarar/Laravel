<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categoria;

class CategoriaController extends Controller
{
    public function nueva(){
        $categorias=Categoria::paginate(10);

        return view('categorianueva',['categorias'=>$categorias]);
    }

    public function crear(Request $request){
        $categoria=new Categoria();
        $categoria->nombre=$request->nombre;
        $categoria->descripcion=$request->descripcion;
        $categoria->save();
        return redirect('/categorianueva');
    }
}