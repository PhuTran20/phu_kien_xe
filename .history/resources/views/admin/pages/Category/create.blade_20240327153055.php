@extends('admin.app')
@section('title', 'Admin Add Category')
@section('content')
<style>
    .card-
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
                        <form method="post" action="" enctype="multipart/form-data" autocomplete="off" >
                           @csrf
                            <div class="form-group">
                                <label for="name">Name Category:</label>              
                                <input required="true" name="name_category" type="text" class="form-control" id="title"  
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