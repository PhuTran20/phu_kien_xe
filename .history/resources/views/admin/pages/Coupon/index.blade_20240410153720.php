@extends('admin.app')
@section('title', 'Admin Category')
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
        font-size: 22px;
        font-weight: 800;
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
                        <p class="card-title">LIST CATEGORY</p>
                        @if ($position->position==1||$position->position==2)
                            
                        <a href="{{route("admin-create-category")}}">
                            <button class="btn btn-success" style="margin-bottom: 15px;"><i class="fa fa-star"></i>Add Category</button>
                        </a>
                        @endif
                        <table class="table table-striped table-bordered"> 
                            <?php   $n = ($category->currentPage() - 1) * $category->perPage(); ?>                                                                   
                        
                            <thead>
                                
                                <tr>
                                    <th class="seri">Serial</th>
                                    <th class="name">Name Category</th>
                                    <th class="action">ACTION</th>
                                </tr>
                            </thead>
                            <tbody>        
                                {{-- @foreach ($category as $item)         
                                <?php $n++ ?>            
                                <tr>
                                    <td class="seri">{{$n}}</td>
                                    <td class="name">{{$item->name_category}}</td>
                                    <td colspan="2" class="action">
                                        @if ($position->position==1||$position->position==2)
                                            
                                        <a href="/admin/category/edit/{{$item->id_category}}"  class="btn btn-warning">Sửa</a>
                                        <!-- Ô Xóa -->
                                        <form action="/admin/category/delete/{{$item->id_category}}" method="post">
                                            @csrf
                                            <input type="hidden" name="_method" value="delete">
                                            <button href="" class="btn btn-danger">Xóa</button>
                                        </form>
                                        @endif
                                
                                    </td>
                            
                                </tr>
                                @endforeach --}}
                            </tbody>
                        </table>
                        <div class="paginate">
                            {{$category->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection