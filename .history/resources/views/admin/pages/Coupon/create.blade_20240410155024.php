@extends('admin.app')
@section('title', 'Admin Add Product')
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
    .form-group p{
        font-size: 20px;
        font-weight: 700;
    }
    .form-group .bike-checkbox{
        transform: scale(1.5); /* Điều chỉnh kích thước ở đây */
        
        margin: 0px 10px
    }
    .form-group .name-bike,.bike-checkbox{
        cursor: pointer;
    }
    .back{
         margin-left: 70px;
         margin-bottom: 20px;
         
    }
    .back a{
        text-decoration: none;
        padding: 10px;
         
        
        
    }
</style>
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <p class="card-title">Add Product</p>           
                    </div>
                    <div  class="back" >
                        <a  class="btn-back" href="{{route("admin-product")}}" class=""><i class="fa fa-chevron-left"></i> back</a>
                    </div>
                    <div class="panel-body">
                        <form method="post" class="form-main" action="{{route("admin-store-product")}}" enctype="multipart/form-data" autocomplete="off" >
                           @csrf
                           
                            <div class="form-group">
                                <label  for="name">Name Product:</label>              
                                <input   placeholder="E.g: Sale Event "  name="name_product" type="text" value="{{old("name_product")}}" class="form-control input" id="name"   >                                                                                                     
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