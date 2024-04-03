@extends('admin.app')
@section('title', 'Admin Product')
@section('content')
 

<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <p class="card-title">LIST PRODUCT</p>
      
                        <a href="{{route("admin-create-product")}}">
                            <button class="btn btn-success" style="margin-bottom: 15px;"> </i>Add Product</button>
                        </a>
                        <div  style="overflow-x: auto;"> 
                        <table  class="table table-striped table-bordered"> 
                            <?php   $n = ($product->currentPage() - 1) * $product->perPage(); ?>                                                                   
                        
                            <thead>
                                
                                <tr>
                                    <th class="seri">Serial</th>
                                    <th class="name_product">Name Product</th>
                                    <th class="name">Price</th>
                                    <th class="name">Descriptions</th>
                                    <th class="name ">Image</th>
                                    <th class="name">Detail</th>
                                    <th class="name">Quantity</th>
                                    <th class="name">Suitable car model</th>
                                    <th class="name">Category</th>
                                    <th class="name">Category Product</th>
                                    <th class="action">ACTION</th>
                                </tr>
                            </thead>
                            <tbody>        
                                @foreach ($product as $item)         
                                <?php 
                                $n++;
                   
                            ?>            
                                <tr>
                                    <td class="seri">{{$n}}</td>
                                    <td class="name">{{$item->name_product}}</td>
                                    <td class="name">{{$item->price}}</td>
                                    <td class="name">{{$item->descriptions}}</td>
                                    <td class="image-prod" style="width: 200px;height: 200px;" >
                                    <img   style=" border-radius: 0;width: 100%;height: 100%;" 
                                    src="{{ URL::to('/frontend/images/'.$item->image)}}" alt="">
                                    </td>
                               
                                    <td class="name">{{$item->quantity}}</td>
                         
                                    <td>
                                       {{$item["name_bike"]}}
                                    </td>
                             
                                    
                                    <td class="name">{{$item->name_category}}</td>
                                    <td class="name">{{$item->name_Product_Cate}}</td>
                                    <td colspan="2" class="action">
                                        <a href="/admin/product/edit/{{$item->id_product}}"  class="btn   btn-warning button">
                                            <i class="fa fa-pencil"></i></a>
                               
                                        <form action="/admin/product/delete/{{$item->id_product}}" method="post">
                                            @csrf
                                            <input type="hidden" name="_method" value="delete">
                                            <button href="" class="btn btn-danger"><i class="fa fa-trash"></i></button>
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