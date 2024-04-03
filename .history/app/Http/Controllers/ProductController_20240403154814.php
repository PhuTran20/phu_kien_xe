<?php

namespace App\Http\Controllers;

use App\Models\Bike;
use App\Models\Category;
use App\Models\Category_Prod;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\CheckboxModel;

class ProductController extends Controller
{
   
    public function viewIndex(Product $product)
    {
  
    
        $product = Product::join("category_product","category_product.id_cate_product","=","product.id_cate_product")
         ->join("category","category.id_category","=","category_product.id_category")
        ->select("product.*","category_product.*","category.*")->paginate(4);
     

        return view("admin.pages.Product.index")->with(compact("product"));
    }
    public function viewCreate()
    {
        $bike = Bike::all();
        $category = Category::all();
        $category_product = Category_Prod::all();
        return view("admin.pages.Product.create")->with(compact("bike","category_product","category"));
    }
    public function getProductsByCategory(Request $request)
    {
        $id_category = $request->id_category;
        $products = Category_Prod::where('id_category', $id_category)->pluck('name_Product_Cate', 'id_cate_product')->toArray();
        return response()->json($products);
    }
    public function viewEdit($id_product)
    {
        $product = Product::where("product.id_product",$id_product)
        ->join("category","category.id_category","=","product.id_category")
        ->join("category_product","category_product.id_cate_product","=","product.id_cate_product")
        ->select("product.*","category.*","category_product.*")->first();
        // dd($product);
        $bike = Bike::all();
        $category = Category::all();
        $category_product = Category_Prod::all();
        return view("admin.pages.Product.edit")->with(compact("product","bike","category","category_product"));
    }
    public function storeProduct (Request $request){
        // $request->validate([
        //     "name_product" =>"required|min"
        // ]);
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
       $name_bikes = isset($data["name_bike"]) ? $data["name_bike"] : [];
       $product->name_bike = implode(',', $name_bikes); 
       $product->quantity = $data["quantity"];
       $product->id_category=$data["id_category"];
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
    public function showProductUser(Request $request){
        $product = Product::orderby("id_product","ASC")->paginate(8);
        $category =Category::all();

        return view("user.pages.home")->with(compact("product","category"));
    }
    public function showProductDetail($id_product){
        $product_detail = Product::find($id_product);
        $category = Product::where("category","category.id_category","=","p")
        // dd($product_detail);
        return view("user.pages.product-detail")->with(compact("product_detail"));
    }
   
}
