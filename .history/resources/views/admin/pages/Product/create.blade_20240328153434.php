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
                    <div class="panel-body">
                        <form method="post" class="form-main" action="{{route("admin-store-product")}}" enctype="multipart/form-data" autocomplete="off" >
                           @csrf
                            <div class="form-group">
                                <label  for="name">Name Product:</label>              
                                <input   placeholder="E.g: Dầu nhớt xe máy MOTUL 7100 4T 10W50 1L "  name="name_product" type="text" class="form-control input" id="name"   >                                                                                                     
                            </div>
                            <div class="form-group">
                                <label for="Price">Price</label>
                                <input name="price" type="text" class="form-control input" id="Price" onkeyup="formatCurrency(this);">
                            </div>
                            
                            <div class="form-group">
                                <label  for="Descriptions">Descriptions</label>              
                                <input     name="descriptions" type="text" class="form-control input" id="Descriptions"   >                                                                                                     
                            </div>
                            <div class="form-group">
                                <label  for="Image">Image</label>              
                                <input    name="image" type="file" class="form-control input" id="Image"   >                                                                                                     
                            </div>
                            <div class="form-group">
                                <label  for="Quantity">Quantity</label>              
                                <input   placeholder="E.g: 10"  name="quantity" type="text" class="form-control input" id="Quantity"   >                                                                                                     
                            </div>
                            <div class="form-group">
                                <p>Suitable car model</p> 
                               @foreach ($bike as $item)
                                   <input class="bike-checkbox" type="checkbox" name="id_bike" id="" value="{{$item->id_bike}}"> {{$item->name_bike}} 
                               @endforeach                                                                                                 
                            </div>
                            <div class="form-group">
                                <label  for="CategoryProduct">Category Product</label>              
                                <select name="id_category"  class="form-control">
                                    <option value=" ">Select Category Product</option>
                                    @foreach ( $category_product as $item)
                                    <option value="{{ $item->id_cate_product }}">{{ $item->name_Product_Cate}}</option>
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
<script>
    function formatCurrency(input) {
        // Lấy giá trị nhập vào
        var value = input.value;
    
        // Xóa các ký tự không phải số khỏi giá trị
        value = value.replace(/[^0-9]/g, '');
    
        // Định dạng lại giá trị với số ngăn cách hàng nghìn và thêm đơn vị
        var formattedValue = new Intl.NumberFormat('vi-VN', { style: 'currency', currency: 'VND' }).format(value);
    
        // Hiển thị giá trị đã định dạng vào input
        input.value = formattedValue;
    }
    </script>
@endsection