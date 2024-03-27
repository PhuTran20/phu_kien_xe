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
        font-size: 25px;
        font-weight: 800;
    }
</style>
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <p class="card-title">LIST CATEGORY</p>
      
                        <a href="{{route("admin-create-category")}}">
                            <button class="btn btn-outline-primary" style="margin-bottom: 15px;"><i class="fa fa-star"></i>Add Category</button>
                        </a>
                        <table class="table table-striped table-bordered"> 
                            <?php $n=0 ?>                                                                        
                            <thead>
                                
                                <tr>
                                    <th class="seri">Serial</th>
                                    <th class="name">Name Category</th>
                                    <th class="action">ACTION</th>
                                </tr>
                            </thead>
                            <tbody>        
                                @foreach ($category as $item)         
                                <?php $n++ ?>            
                                <tr>
                                    <td class="seri">{{$n}}</td>
                                    <td class="name">{{$item->name_category}}</td>
                                    <td colspan="2" class="action">
                                        <a href="/admin/category/edit/{{$item->id_category}}"  class="btn btn-primary">Sửa</a>
                                        <!-- Ô Xóa -->
                                        <form action="/admin/category/delete/{{$item->id_category}}" method="post">
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
                </div>
            </div>
        </div>
    </div>
</div>
@endsection