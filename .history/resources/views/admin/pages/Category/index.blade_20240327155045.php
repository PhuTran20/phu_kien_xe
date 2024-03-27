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
                            <?php  ?>
                            <thead>
                                <tr>
                                    <th class="seri">Serial</th>
                                    <th class="name">Name Category</th>
                                    <th class="action">ACTION</th>
                                </tr>
                            </thead>
                            <tbody>                             
                                <tr>
                                    <td class="seri"></td>
                                    <td class="name"></td>
                                    <td colspan="2" class="action">
                                
                                            <button class="btn btn-primary">Sửa</button>
                                            <!-- Ô Xóa -->
                                            <button class="btn btn-danger">Xóa</button>
                                
                                    </td>
                            
                                </tr>
                            </tbody>
                        </table>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection