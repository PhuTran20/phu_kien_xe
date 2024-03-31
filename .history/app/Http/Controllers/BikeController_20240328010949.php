<?php

namespace App\Http\Controllers;

use App\Models\Bike;
use Illuminate\Http\Request;

class BikeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function viewIndex(Bike $bike)
    {
        $bike = Bike::orderby("id_bike",'ASC')->paginate(4);
        return view("admin.pages..index")->with(compact("bike"));
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
    public function destroyCategory($id_category){
        $category = Category::find($id_category);
        $category -> delete();
        return redirect("/admin/category");
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
     * @param  \App\Models\Bike  $bike
     * @return \Illuminate\Http\Response
     */
    public function show(Bike $bike)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bike  $bike
     * @return \Illuminate\Http\Response
     */
    public function edit(Bike $bike)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bike  $bike
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bike $bike)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bike  $bike
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bike $bike)
    {
        //
    }
}
