@extends('admin.app')
@section('title', 'Admin Add Category')
@section('content')
<style>
    .card-body .card-title{
        font-size: 40px;
    text-align: center;
    padding: 15px 0px;
    }
    .form-main{
        padding: 0px 70px;
        
    }
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
                        <form method="post" class="form-main" action="" enctype="multipart/form-data" autocomplete="off" >
                           @csrf
                            <div class="form-group">
                                <label for="name">Name Category:</label>              
                                <input required="true" name="name_category" type="text" class="form-control input" id="name"  
                                    value=" "
                                  >
                                    
                            </div>
                     
                   
                         
            
                            <button class="btn btn-success">Add</button>
                            
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection