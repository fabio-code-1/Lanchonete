<?php

namespace App\Http\Controllers;

use App\Models\Carrinho;
use Illuminate\Http\Request;

class CarrinhoController extends Controller
{
    public function index(){
      
        
        return view('carrinho', [
            
        ]);
    }
}
