<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function listProduct(){
        $data = Products::all();

        return view('product.list',[
            'sanpham' => $data
        ]);
    }

    public function createProduct(){
        return view('product.create');
    }

    public function storeProduct(Request $request){
        $data = $request->except('_token');
        Products::create($data);
        return redirect()->route('list');
    }

    public function deleteProduct($id){
        $data = Products::find($id);
        $data->delete();
        return redirect()->route('list');   
    }
}
