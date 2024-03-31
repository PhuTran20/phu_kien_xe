<?php

namespace App\Http\Controllers;

use App\Models\Bike;
use App\Models\Category_Prod;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function viewIndex(Product $product)
    {
        $bike = Bike::all();
        // $category_Prod = Category_Prod::orderby("id_cate_product",'ASC')->paginate(4);
        $product = Product::join("category_product","category_product.id_cate_product","=","product.id_cate_product")
        ->join("bike","bike.id_bike","=","product.id_bike")
        ->select("product.*","category_product.*","bike.*")->paginate(4);

        return view("admin.pages.Product.index")->with(compact("product","bike"));
    }
    public function viewCreate()
    {
        $bike = Bike::all();
        $category_product = Category_Prod::all();
        return view("admin.pages.Product.create")->with(compact("bike","category_product"));
    }
    public function viewEdit($id_cate_product)
    {
        $category = Category::all();
        $category_Prod = Category_Prod::where("id_cate_product",$id_cate_product)
        ->join("category","category.id_category","=","category_product.id_category")
        ->select("category.*","category_product.*")->first();
        dd
        return view("admin.pages.Category_Prod.edit")->with(compact("category_Prod","category"));
    }
    public function storeProduct (Request $request){
      

        $data = $request->all();
        $product = new Product();
        if ($request->has("image")) {
            $file = $request->image;
            $file_name = $file->getClientOriginalName();
            $file->move(base_path('/public/frontend/images'), $file_name);
    
            // Gán đường dẫn hoặc tên tệp cho thuộc tính 'image'
            // $product->image = $file_name; // hoặc 
            $product->image = $file_name;
        }

       $product->name_product = $data["name_product"];
       $product->price = $data["price"];
       $product->descriptions = $data["descriptions"];
      
       $product->id_cate_product = $data["id_cate_product"];
     
   // Xử lý mảng id_bike
   $id_bikes = isset($data["id_bike"]) ? $data["id_bike"] : [];
   $product->id_bike = implode(',', $id_bikes); 
       $product->quantity = $data["quantity"];
       $product->save();
        return Redirect("/admin/product");
    }
    public function updateProduct(Request $request){
      $update = array();
      $update["name_Product_Cate"] =$request->name_Product_Cate;
      $update["id_category"] = $request->id_category;
      DB::table("category_product")->where("id_cate_product",$request->id_cate_product)->update($update);
      return Redirect("/admin/category_Prod");
    }
    public function destroyProduct($id_product){
        $product = Product::find($id_product);
        $product -> delete();
        return redirect("/admin/product");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
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
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
}
