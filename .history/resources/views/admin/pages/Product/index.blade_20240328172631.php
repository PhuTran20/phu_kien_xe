@extends('admin.app')
@section('title', 'Admin Product')
@section('content')
<style>
    .seri{
        width: 80px;
    }
    .action{
        width: 180px;
        
    }
    .table{
        text-align: center
    }
    .card .card-title {
    text-align: center;
    padding: 20px 0px;
    font-size: 40px;
    }
    .action a{
        margin-bottom: 15px
    }
    .table thead th{
        font-size: 18px;
        font-weight: 800;
    }
    .table tbody td{
        font-size: 16px;
    }
    .paginate{
        display: flex;
    justify-content: center;
    margin-top: 20px

    }

 
</style>
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <p class="card-title">LIST PRODUCT</p>
      
                        <a href="{{route("admin-create-product")}}">
                            <button class="btn btn-success" style="margin-bottom: 15px;"><i class="fa fa-star"></i>Add Product</button>
                        </a>
                        <div  style="overflow-x: auto;"> 
                        <table  class="table table-striped table-bordered"> 
                            <?php   $n = ($product->currentPage() - 1) * $product->perPage(); ?>                                                                   
                        
                            <thead>
                                
                                <tr>
                                    <th class="seri">Serial</th>
                                    <th class="name">Name Product</th>
                                    <th class="name">Price</th>
                                    <th class="name">Descriptions</th>
                                    <th class="name image-prod">Image</th>
                                    <th class="name">Quantity</th>
                                    <th class="name">Suitable car model</th>
                                    <th class="name">Category Product</th>
                                    <th class="action">ACTION</th>
                                </tr>
                            </thead>
                            <tbody>        
                                @foreach ($product as $item)         
                                <?php $n++ ?>            
                                <tr>
                                    <td class="seri">{{$n}}</td>
                                    <td class="name">{{$item->name_product}}</td>
                                    <td class="name">{{$item->price}}</td>
                                    <td class="name">{{$item->descriptions}}</td>
                                    <td class="image-prod" ><img   style=" border-radius: 0;" src="{{ URL::to('/frontend/images/'.$item->image)}}" alt=""></td>
                                    <td class="name">{{$item->quantity}}</td>
                             
                                    <td class="name">
                                     
                                           {{ $item->name_bike}}
                                      
                                    </td>
                                    <td class="name">{{$item->name_Product_Cate}}</td>
                                    <td colspan="2" class="action">
                                        <a href="/admin/product/edit/{{$item->id_product}}"  class="btn btn-warning">Sửa</a>
                                        <!-- Ô Xóa -->
                                        <form action="/admin/product/delete/{{$item->id_product}}" method="post">
                                            @csrf
                                            <input type="hidden" name="_method" value="delete">
                                            <button href="" class="btn btn-danger">Xóa</button>
                                        </form>
                                
                                    </td>
                            
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                        <div class="paginate">
                            {{$product->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection