@extends('admin.app')
@section('title', 'Admin Add Bike')
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
                        <p class="card-title">Add Bike</p>           
                    </div>
                    <div class="panel-body">
                        <form method="post" class="form-main" action="{{route("admin-store-bike")}}" enctype="multipart/form-data" autocomplete="off" >
                           @csrf
                            <div class="form-group">
                                <label  for="name">Name Bike:</label>              
                                <input   placeholder="E.g: Exciter"  name="name_bike" type="text" class="form-control input" id="name"   >
                                   
                                
                                    
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