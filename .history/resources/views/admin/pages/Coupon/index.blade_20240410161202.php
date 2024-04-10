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
                            <?php   $n = ($coupon->currentPage() - 1) * $coupon->perPage(); ?>                                                                   
                        
                            <thead>
                                
                                <tr>
                                    <th class="seri">Serial</th>
                                    <th class=" ">Name Coupon</th>
                                    <th class=" ">Code Coupon</th>
                                    <th class=" ">Quantity</th>
                                    <th class=" ">Condition</th>
                              
                                    <th class="">Discount</th>
                          
                                    <th class="action">ACTION</th>
                                </tr>
                            </thead>
                            <tbody>        
                                @foreach ($coupon as $item)         
                                <?php 
                                $n++;
                   
                            ?>            
                                <tr>
                                    <td class="seri">{{$n}}</td>
                                    <td class="">{{$item->name_coupon}}</td>
                                    <td class="">{{$item->code_coupon}}</td>
                                    <td class="">{{$item->coupon_time}}</td>
                      
                          
                               
                                    <td class="">{{$item->coupon_condition}}</td>
                     
                             
                                    
                                    <td class="">{{$item->coupon_number}}</td>
                                    <td class="">{{$item->name_Product_Cate}}</td>
                                    <td colspan="2" class="action">
                                        @if ($position->position==1||$position->position==2)
                                        <a href="/admin/coupon/edit/{{$item->id_coupon}}"  class="btn   btn-warning button">
                                            <i class="fa fa-pencil"></i></a>
                               
                                        <form action="/admin/coupon/delete/{{$item->id_coupon}}" method="post">
                                            @csrf
                                            <input type="hidden" name="_method" value="delete">
                                            <button href="" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                        </form>
                                        @endif
                                    </td>
                            
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                        <div class="paginate">
                            {{$coupon->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection