<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Product;
use App\Http\Resources\ProductResource;
class AdminProductController extends Controller
{
    //
     public function index(){

        $products = Product::paginate(10);
         
        return ProductResource::collection($products);
        
        // $products = Product::all();
        //  return response()->json($products);
    }

    public function show($id){
        
        $product = Product::findOrFail($id);

        return new ProductResource($product);
    }

   public function store(Request $request)
   {
        
        // $request->image->move(public_path('images'), $imageName);
        // Storage::disk('public')->put('filename', $file_content);
        // $imageName = time().'.'.$request->imageFile->getClientOriginalExtension();
        
       $product = new Product;
       $product->product_name = $request->input('name');
       $product->category = $request->input('category');
       $product->price = $request->input('price');
       $product->show = $request->input('show');
       $product->image_url = 'images/products/';

       if($product->category == "main dish")
       {
        $product->image_url .='mainDishes/';
       }
       else if($product->category == "side dish"){
        $product->image_url .='sideDishes/';
       }else if($product->category == "dessert")
       {
        $product->image_url .='desserts/';
       }else{
        $product->image_url .='drinks/';
       }
       $product->image_url .=$request->input('image');

       $product->save();

       return new ProductResource($product);
   }
    
       //    $imageFile = $request->input('imageFile');
    //     $imageFile->move_uploaded_file($product->image,public_path('images'));

     

   public function storeImage(Request $request)
   {
    //    Original image Name
       $imageName = $request->imageFile->getClientOriginalName();

       $image = substr($imageName, strrpos($imageName,'/')+1);

       $category = $request->input('category');
        $path = 'images/products/';

       if($category == "main dish")
       {
        $path .='mainDishes/';
       }
       else if($category == "side dish"){
        $path .='sideDishes/';
       }else if($category == "dessert")
       {
        $path .='desserts/';
       }else{
         $path .='drinks/';
       }

       $request->imageFile->move(public_path($path), $image);

        return;
   }

   public function update(Request $request)
   {
       $product = Product::findOrFail($request->input('id'));
       $product->product_name = $request->input('name');
       $product->category = $request->input('category');

       $imagePath = $request->input('image');
       $image = substr($imagePath, strrpos($imagePath,'/')+1);

       $product->image_url = 'images/products/';

       if($product->category == "main dish")
       {
        $product->image_url .='mainDishes/';
       }
       else if($product->category == "side dish"){
        $product->image_url .='sideDishes/';
       }else if($product->category == "dessert")
       {
        $product->image_url .='desserts/';
       }else{
        $product->image_url .='drinks/';
       }

       $product->image_url .=$image;
       
       $product->price = $request->input('price');
       $product->show = $request->input('show');
       if( $product->save() ){
        return new ProductResource($product);
       }
   }


    public function destroy($id){

        $product = Product::findOrFail($id);

        if($product->delete()){
            return new ProductResource($product);
        }

    }

    // public function store(Request $request){
    //     $product = $request->isMethod('put') ? Product::findOrFail
    //     ($request->product_id) : new Product;

    //     $product->product_id = $request['id'];
    //     $product->product_category = $request['category'];
    //     $product->price = $request ['price'];

    //     if($product->save())
    //     {
    //         return new ProductResource($product);
    //     }

    // }

}
