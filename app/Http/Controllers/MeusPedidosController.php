<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class MeusPedidosController extends Controller{
    public function index() {
        return view('/meus-pedidos');
    }
}