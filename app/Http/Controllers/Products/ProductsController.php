<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function list() {
        return view('products.list');
    }

    public function index() {
        return view('products.index');
    }

    public function edit() {
        return view('products.edit');
    }

}
