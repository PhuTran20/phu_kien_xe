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
    .form-main .form-group label{
        font-size: 20px;
        font-weight: 700;
    }
    .panel-body{
        margin-bottom: 50px
    }
</style>
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <p class="card-title">Add Account Admin</p>           
                    </div>
                    <div class="panel-body">
                        <form method="post" class="form-main" action="{{route("admin-store-account")}}" enctype="multipart/form-data" autocomplete="off" >
                           @csrf
                            <div class="form-group">
                                <label  for="name">Name Admin:</label>              
                                <input   placeholder="E.g: Phu Tran "  name="name_admin" type="text" class="form-control input" id="name"   >                                   
                            </div>
                            <div class="form-group">
                                <label  for="name">Account Admin:</label>              
                                <input   placeholder="E.g: admin1 "  name="account_admin" type="text" class="form-control input" id="name"   >                                   
                            </div>
                            <div class="form-group">
                                <label  for="name">Password:</label>              
                                <input     name="name_category" type="text" class="form-control input" id="name"   >                                   
                            </div>
                            <div class="form-group">
                                <label for="position">Position</label>
                                <select name="position"  id="position" class="form-control">
                                    <option value="0">Select Position</option>
                                    <option value="1">ADMIN</option>
                                    <option value="2">MANAGER</option>
                                    <option value="3">STAFF</option>
                                </select>
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