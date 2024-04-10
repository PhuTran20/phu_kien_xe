@extends('admin.app')
@section('title', 'Admin Product')
@section('content')
 <style>
    table td{
        padding: 0;
    }
 </style>
<?php
$position = Session::get("data");
?>
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <p class="card-title">LIST COUPON</p>
      
                        @if ($position->position==1||$position->position==2)
                        <a href="{{route("admin-create-Coupon")}}">
                            <button class="btn btn-success" style="margin-bottom: 15px;"> </i>Add Coupon</button>
                        </a>
                        @endif
                        <div  style="overflow-x: auto;"> 
                        <table  class="table table-striped table-bordered"> 
                            {{-- <?php   $n = ($product->currentPage() - 1) * $product->perPage(); ?>                                                                    --}}
                        
                            <thead>
                                
                                <tr>
                                    <th class="seri">Serial</th>
                                    <th class=" ">Name Coupon</th>
                                    <th class=" ">Code Coupon</th>
                                    <th class=" ">Quantity</th>
                                    <th class=" ">Condition</th>
                              
                                    <th class="quanti"></th>
                                    <th class="suitable">Suitable car model</th>
                                    <th class="category">Category</th>
                                    <th class="cate_prod">Category Product</th>
                                    <th class="action">ACTION</th>
                                </tr>
                            </thead>
                            <tbody>        
                                {{-- @foreach ($product as $item)         
                                <?php 
                                $n++;
                   
                            ?>            
                                <tr>
                                    <td class="seri">{{$n}}</td>
                                    <td class="">{{$item->name_product}}</td>
                                    <td class="">{{$item->price}}</td>
                                    <td class="  descrip">{{$item->descriptions}}</td>
                                    <td class="image-prod" style="padding-left: 10px; padding-right: 10px" >
                                    <img   style=" " 
                                    src="{{ URL::to('/frontend/images/'.$item->image)}}" alt="">
                                    </td>
                               
                                    <td class="">{{$item->quantity}}</td>
                         
                                    <td>
                                       {{$item["name_bike"]}}
                                    </td>
                             
                                    
                                    <td class="">{{$item->name_category}}</td>
                                    <td class="">{{$item->name_Product_Cate}}</td>
                                    <td colspan="2" class="action">
                                        @if ($position->position==1||$position->position==2)
                                        <a href="/admin/product/edit/{{$item->id_product}}"  class="btn   btn-warning button">
                                            <i class="fa fa-pencil"></i></a>
                               
                                        <form action="/admin/product/delete/{{$item->id_product}}" method="post">
                                            @csrf
                                            <input type="hidden" name="_method" value="delete">
                                            <button href="" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                        </form>
                                        @endif
                                    </td>
                            
                                </tr>
                                @endforeach --}}
                            </tbody>
                        </table>
                    </div>
                        {{-- <div class="paginate">
                            {{$product->links()}}
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection