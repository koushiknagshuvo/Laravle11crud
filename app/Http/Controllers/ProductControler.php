<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductControler extends Controller
{
 
    public function create(){
        return view("product.create");
    }
    public function store(Request $request){}
}
