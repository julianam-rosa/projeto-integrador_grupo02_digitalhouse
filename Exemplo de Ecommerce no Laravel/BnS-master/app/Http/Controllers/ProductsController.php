<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\ProductImage;
use Auth;

class ProductsController extends Controller
{

  /**
    * Instantiate a new controller instance.
    *
    * @return void
    */
   public function __construct()
   {
      // $this->middleware('auth');
       $this->middleware('auth')->except('index','show');
   }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products=Product::all();
        return view('product.index')->with('products',$products);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $product=new Product();
        $product->title=$request->input("title");
        $product->description=$request->input("desc");
        $product->price=$request->input("price");
        $product->seller_id=Auth::user()->id;

        //
        $image = $request->file('image');
        $fileName=time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/image');
        $image->move($destinationPath, $fileName);

        $product->image=$fileName;

        $id=$product->save();

        $products=Product::all();
        return view('product.index')->with("products",$products);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
          $product=Product::find($id);
          return view('product.show')->with("product",$product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $product=Product::find($id);
        return view('product.edit')->with("product",$product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        //
        $product=Product::find($id);
        $product->title=$request->input("title");
        $product->description=$request->input("desc");
        $product->price=$request->input("price");
    //    $product->seller_id=Auth::user()->id;

        $image = $request->file('image');
        $fileName=time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/image');
        $image->move($destinationPath, $fileName);

        $product->image=$fileName;


        $id=$product->save();
        //

        //
        // $images=array();
        // if($files=$request->file('images')){
        //
        //     foreach($files as $file){
        //         $name=$file->getClientOriginalName();
        //         $file->move('image',$name);
        //
        //         $productImage=new ProductImage();
        //         $productImage->product_id=$id;
        //         $productImage->image=$name;
        //
        //         $images[]=$productImage;
        //     }
        // }
        //
        // $product->images()->saveMany($images);

        $products=Product::all();
        return view('product.index')->with("products",$products);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
