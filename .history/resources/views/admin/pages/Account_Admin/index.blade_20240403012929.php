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
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <p class="card-title">LIST CATEGORY</p>
      
                        <a href="{{route("admin-create-admin")}}">
                            <button class="btn btn-success" style="margin-bottom: 15px;"><i class="fa fa-star"></i>Add Admin</button>
                        </a>
                        <table class="table table-striped table-bordered"> 
                            <?php   $n = ($account_admin->currentPage() - 1) * $account_admin->perPage(); ?>                                                                   
                        
                            <thead>
                                
                                <tr>
                                    <th class="seri">Serial</th>
                                    <th >Name Admin</th>
                                    <th >Account Admin</th>
                                    <th >Password</th>
                                    <th >Position</th>
                                    <th class="action">ACTION</th>
                                </tr>
                            </thead>
                            <tbody>        
                                @foreach ($account_admin as $item)         
                                <?php $n++ ?>            
                                <tr>
                                    <td class="seri">{{$n}}</td>
                                    <td >{{$item->name_admin}}</td>
                                    <td >{{$item->account_admin}}</td>
                                    <td >{{$item->password_admin}}</td>
                                     @if ({{$item->positon}}==1)
                                     <td ></td>
                                     @else
                                         
                                     @endif
                                    <td colspan="2" class="action">
                                        <a href="/admin/account/edit/{{$item->id_admin}}"  class="btn   btn-warning button">
                                            <i class="fa fa-pencil"></i></a>
                               
                                        <form action="/admin/account/delete/{{$item->id_admin}}" method="post">
                                            @csrf
                                            <input type="hidden" name="_method" value="delete">
                                            <button href="" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                        </form>
                                
                                    </td>
                            
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <div class="paginate">
                            {{$account_admin->links()}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection