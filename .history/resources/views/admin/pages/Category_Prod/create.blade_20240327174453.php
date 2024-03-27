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
                                <label for="name">:</label>
                                <select name="id_thuonghieu"  class="form-control">
                                    <option value=" ">Chọn thương hiệu </option>
                                    @foreach ( $ThuongHieu as $data_thuonghieu)
                                    <option value="{{ $data_thuonghieu->idthuonghieu }}">{{ $data_thuonghieu->tenthuonghieu }}</option>
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