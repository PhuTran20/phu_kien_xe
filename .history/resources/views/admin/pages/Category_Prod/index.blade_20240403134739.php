@extends('admin.app')
@section('title', 'Admin Category Product')
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
        font-size: 20px;
        font-weight: 700;
    }
    .table tbody td{
        font-size: 18px;
    }
    .paginate{
        display: flex;
    justify-content: center;
    margin-top: 20px

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
                        <p class="card-title">LIST CATEGORY PRODUCT</p>
                        @if ($position->position==1||$position->position==2)
                            
                        <a href="{{route("admin-create-categoryProd")}}">
                            <button class="btn btn-success" style="margin-bottom: 15px;"><i class="fa fa-star"></i>Add Category Product</button>
                        </a>
                        @endif
                        <table class="table table-striped table-bordered"> 
                            <?php   $n = ($category_Prod->currentPage() - 1) * $category_Prod->perPage(); ?>                                                                   
                        
                            <thead>
                                
                                <tr>
                                    <th class="seri">Serial</th>
                                    <th class=" ">Name Category Product</th>
                                    <th class=" ">Name Category</th>
                                    <th class="action">ACTION</th>
                                </tr>
                            </thead>
                            <tbody>        
                                @foreach ($category_Prod as $item)         
                                <?php $n++ ?>            
                                <tr>
                                    <td class="seri">{{$n}}</td>
                                    <td class=" ">{{$item->name_Product_Cate}}</td>
                                    <td class=" ">
                                        {{$item->name_category}}
                                    </td>
                                    <td colspan="2" class="action">
                                        <a href="/admin/category_Prod/edit/{{$item->id_cate_product}}"  class="btn btn-warning">Sửa</a>
                                        <!-- Ô Xóa -->
                                        <form action="/admin/category_Prod/delete/{{$item->id_cate_product}}" method="post">
                                            @csrf
                                            <input type="hidden" name="_method" value="delete">
                                            <button href="" class="btn btn-danger">Xóa</button>
                                        </form>
                                
                                    </td>
                            
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="paginate">
                            {{$category_Prod->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection