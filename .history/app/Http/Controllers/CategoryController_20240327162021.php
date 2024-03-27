<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function viewIndex(Category $category)
    {
        $category = Category::all();
        return view("admin.pages.Category.index")->with(compact("category"));
    }
    public function viewCreate()
    {
        return view("admin.pages.Category.create");
    }
    public function viewEdit($id_category)
    {
        $category = Category::find($id_category);
        return view("admin.pages.Category.edit")->with(compact("category"));
    }
    public function storeCategory (Request $request){
        $data = $request->all();
        $category = new Category();
        $category->name_category = $data["name_category"];
        $category->save();
        return Redirect("/admin/category");
    }
    public function updateCategory(Request $request){
      $update = array();
      $update["name_category"] = $request->name_category;
      DB::table("category")->where("id_category",$request->id_category)->update($update);
      return Redirect("/admin/category");
    }
    public function destroyCategory($id_category)

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     //
    // }

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
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    // public function edit(Category $category)
    // {
    //     //
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, Category $category)
    // {
    //     //
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }
}
