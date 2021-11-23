<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Categoria;

class ProductoController extends Controller
{
    public function nuevo(){
        $productos=Producto::paginate(10);

        return view('productonuevo',['productos'=>$productos]);
    }

    public function lista_categorias(){
        $categorias=Categoria::get();

        return view('productonuevo',['categorias'=>$categorias]);
    }
}
