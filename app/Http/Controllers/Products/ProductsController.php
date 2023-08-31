<?php

namespace App\Http\Controllers\Products;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use App\Jobs\Products\ProductCreate;
use Illuminate\Support\Facades\Validator;
use App\Services\Transformers\ProductsDataTransformers;

class ProductsController extends Controller
{
    public function list() {
        return view('products.list');
    }

    public function index() {
        return view('products.index');
    }

    public function create(Request $request){
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'status' => 'required',
            'product_price' => 'numeric'
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput()->with('error','Please fill the role name and one permission select');
        }
        try {
            // create product and other related data in DB.
            $productData = (new ProductsDataTransformers($request->all()))->transform();
            if ($request->has('avatar')) {
                $imagePath = storeImageFile($request->file('avatar'));
                $productData['default_image_url'] = $imagePath;
            }
            ProductCreate::dispatchSync($productData);
        } catch (Exception $th) {
            Log::error('ProductsController@create error | '.$th->getMessage() . ' line | ' .$th->getLine());
        }
        return redirect()->route('products.list');
    }

    public function edit() {
        return view('products.edit');
    }

}
