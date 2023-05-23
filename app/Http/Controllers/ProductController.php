<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::where('customer_id', Session('user')->customer_id)->get();

        return view('customer.product.index',[
            'products' => $products
        ]);
    }

    public function create()
    {
        return view('customer.product.create');
    }

    public function store(StoreProductRequest $request)
    {
        $product = new Product();
        $product->name = $request->name;
        $product->customer_id = Session("user")->customer_id;
        $product->save();

        return redirect()->route("products")->withStatus(__("Produto cadastrado com sucesso."));
    }

    public function show(Product $products)
    {
        //
    }

    public function edit(Product $product)
    {
        return view('customer.product.create', [
            'product' => $product
        ]);
    }

    public function update(Request $request, Product $product)
    {
        $product->name = $request->name;
        $product->update();

        return redirect()->route("products")->withStatus(__("Produto alterado com sucesso."));
    }

    public function destroy(Request $request)
    {
        $product = Product::find($request->id);
        $product->delete();

        return redirect()->route("products")->withStatus(__("Produto excluído com sucesso."));
    }
}
