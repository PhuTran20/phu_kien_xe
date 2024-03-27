@extends('admin.app')
@section('title', 'Admin Category')
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h3>DANH SÁCH THƯƠNG HIỆU</h3>
                        <p style="color: green"  >{{session('mess')}}</p>
                        <a href="/admin/thuonghieu/create_thuonghieu">
                            <button class="btn btn-outline-primary" style="margin-bottom: 15px;"><i class="fa fa-star"></i>Thêm Thương Hiệu</button>
                        </a>
                        <table class="table table-striped table-bordered"> 
                            <thead>
                                <tr>
                                    <th class="action-column">STT</th>
                                    <th>Tên thương hiệu</th>
                                    <th>ACTIO</th>
                                </tr>
                            </thead>
                   
                            <tbody>                             
                          
                                 
                                    <td class="action-column"> 
                                        <a href="">
                                        <button  class="btn btn-outline-secondary">
                                        <i class="fa fa-edit"></i>Sửa</button>
                                        </a>
                                    </td>
                                    <td class="action-column">
                                        <form action="" method="post">
                                            @csrf
                                            <input type="hidden" name="_method" value="delete">
                                            <button  class="btn btn-outline-danger" style="margin-bottom: 15px;"><i class="ti-trash"></i> Xóa</button>
                                        </form>
                                    </td>
                                </tbody>
                           
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection