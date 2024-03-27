@extends('admin.app')
@section('title', 'Admin Add Category Product')
@section('content')
<style>
    .card-body .card-title{
        font-size: 40px;
    text-align: center;
    padding: 15px 0px;
    }
    .form-main{
        padding: 0px 70px;

    }
    .form-main .form-group label{
        font-size: 20px;
        font-weight: 700;
    }
    .panel-body{
        margin-bottom: 50px
    }
</style>
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <p class="card-title">Add Category Product</p>           
                    </div>
                    <div class="panel-body">
                        <form method="post" class="form-main" action="{{route("admin-store-categoryProd")}}" enctype="multipart/form-data" autocomplete="off" >
                           @csrf
                            <div class="form-group">
                                <label  for="name">Name Category Product:</label>              
                                <input   placeholder="E.g: Nhớt "  name="name_Product_Cate" type="text" class="form-control input" id="name"   >
                                   
                                
                                    
                            </div>
                            <div class="form-group">
                                <label for="name">Category:</label>
                                <select name="id_t"  class="form-control">
                                    <option value=" ">Select Category</option>
                                    @foreach ( $category as $item)
                                    <option value="{{ $item->id_category }}">{{ $item->name_category}}</option>
                                    @endforeach
                                    
                                  
            
                                </select>
                            </div>
                     
                   
                         
            
                            <button class="btn btn-success">Add</button>
                            
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection