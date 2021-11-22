<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;

class ProductoController extends Controller
{
    public function nuevo(){
        $productos=Producto::paginate(10);

        return view('productonuevo',['productos'=>$productos]);
    }
}
