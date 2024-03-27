@extends('admin.app')
@section('title', 'Admin Edit Category')
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
    .form-main .form-group input{
        
    }
    .form-main .form-group .btn{
        display: flex;
         justify-content: center;
         align-items: center;

    }
</style>
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <p class="card-title">Add Category</p>           
                    </div>
                    <div class="panel-body">
                        <form method="post" class="form-main" action="/admin/category/update/{{$category->id_category}}" enctype="multipart/form-data" autocomplete="off" >
                           @csrf
                           <input type="hidden" name="_method" value="put">
                            <div class="form-group">
                                <label  for="name">Name Category:</label>              
                                <input   placeholder="E.g: Nhớt "  name="name_category" type="text" class="form-control input" id="name"  value="{{$category->name_category}}"  >
                                   
                                
                                    
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