@extends('admin.app')
@section('title', 'Admin Add Category')
@section('content')
<style>

</style>
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <p class="card-title">Add Category</p>           
                    </div>
                    <div class="panel-body">
                        <form method="post" action="" enctype="multipart/form-data" fo>
                           @csrf
                            <div class="form-group">
                                <label for="name">Tên thương hiệu:</label>              
                                <input required="true" name="tenthuonghieu" type="text" class="form-control input_namebike" id="title"  
                                    value=" "
                                  >
                                    
                            </div>
                     
                   
                         
            
                            <button class="btn btn-success">Thêm</button>
                            
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection