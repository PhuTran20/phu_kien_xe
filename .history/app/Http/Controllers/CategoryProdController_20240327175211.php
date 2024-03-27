<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Category_Prod;
use Illuminate\Http\Request;

class CategoryProdController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
  
     public function viewIndex(Category_Prod $category_Prod)
    {
        // $category_Prod = Category_Prod::orderby("id_cate_product",'ASC')->paginate(4);
        $category_Prod = Category_Prod::join("category","category.id_category","=","category_product.id_category")
        ->select("category.*","category_product.*")->paginate(4);

        return view("admin.pages.Category_Prod.index")->with(compact("category_Prod"));
    }
    public function viewCreate(Category $category)
    {
        $category = Category::all();
        return view("admin.pages.Category_Prod.create")->with(compact("category"));
    }
    public function viewEdit($id_cate_product)
    {
        $category_Prod = Category_Prod::find($id_cate_product);
        return view("admin.pages.Category_Prod.edit")->with(compact("category_Prod"));
    }
    public function storeCategoryProd (Request $request){
        $data = $request->all();
        $category_Prod = new Category_Prod();
       $category_Prod->name_Product_Cate = $data["name_Product_Cate"];
       $category_Prod->id_category = $data["id_category"];
       $category_Prod->save();
        return Redirect("/admin/category_Prod");
    }
    public function updateCategoryProd(Request $request){
      $update = array();
    //   $update["name_category"] = $request->name_category;
    //   DB::table("category")->where("id_category",$request->id_category)->update($update);
      return Redirect("/admin/category_Prod");
    }
    public function destroyCategoryProd($id_cate_product){
        $category_Prod = Category_Prod::find($id_cate_product);
        $category_Prod -> delete();
        return redirect("/admin/category_Prod");
    }
























    public function index()
    {
        //
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
     * @param  \App\Models\Category_Prod  $category_Prod
     * @return \Illuminate\Http\Response
     */
    public function show(Category_Prod $category_Prod)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category_Prod  $category_Prod
     * @return \Illuminate\Http\Response
     */
    public function edit(Category_Prod $category_Prod)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category_Prod  $category_Prod
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category_Prod $category_Prod)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category_Prod  $category_Prod
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category_Prod $category_Prod)
    {
        //
    }
}
