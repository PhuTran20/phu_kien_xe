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
                                    <th class="action-column">Serial</th>
                                    <th>Name Category</th>
                                    <th>ACTION</th>
                                </tr>
                            </thead>
                            
Để ngăn cách ô "Sửa" và "Xóa" thành hai ô riêng biệt thay vì hiển thị chúng trong cùng một ô, bạn có thể sử dụng hai ô <td> riêng biệt cho mỗi nút "Sửa" và "Xóa". Dưới đây là cách bạn có thể sửa mã HTML của bạn:

html
Copy code
<tbody>                             
    <tr>
        <td>sa</td>
        <td>sf</td>
        <td>
            <!-- Ô Sửa -->
            <button class="btn btn-primary">Sửa</button>
        </td>
        <td>
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