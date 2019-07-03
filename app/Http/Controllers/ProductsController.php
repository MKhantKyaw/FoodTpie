<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        dd($products);
    }

    public function menu()
    {
        $products = Product::all();
        return view('pages.menu',compact('products'));
    }

    public function cart()
    {
        $products = Product::all();
        return view('pages.cart',compact('products'));
    }

    public function order(){
        $request = (object) [
            'pids' => json_decode(request('pids')),
            'quantities' => json_decode(request('quantities')),
            'totalPrice' => json_decode(request('totalPrice')),
        ];
        $products = array();
        for ($i=0; $i < count($request->pids) ; $i++) { 
            array_push($products, Product::where('id',$request->pids[$i])->get());
        }
        $prodCnt = count($request->pids);
        $products = (object) $products;
        $data = (object) [
            'quantities' => $request->quantities,
            'totalPrice' => $request->totalPrice
        ];
        // dd($products);
        return view('pages.fillOrderInfo',compact('data','products','prodCnt'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.productCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Product::create(request(['product_name','category','price']));

        return redirect('/products');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('pages.productShow',compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
