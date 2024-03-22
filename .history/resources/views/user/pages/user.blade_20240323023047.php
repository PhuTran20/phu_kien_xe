@extends('user.app')
 @section('title', 'Home')
 @section('content')

 <div class="justify-content-center">
    <?php
    $user=Session::get('data_user');
    ?>
    <h2 class="" style="text-align: center">Thông tin tài khoản </h2>
    <div class="row">
        <form action=" " method="POST" class="row px-xl-2" >
            @csrf
            <input type="hidden" name="_method" value="put">
            <input type="text" name="id" value="{{$user->id_user}}" hidden>
        
                <label>Họ tên</label>
                <input class="form-control" required name="fullname" type="text" value="{{$user->user_name}}"
                class="">
                <span class="focus-input100" data-symbol="&#xf206;"></span>
        
 
        
                <label>Tên tài khoản</label>
                <input class="form-control" required readonly name="username" type="text" value="{{$user->acccount}}">
        
            {{-- <div class="col-md-6 form-group">
                <label>Mật khẩu Cũ:</label>
                <input class="form-control" required   name="password_cu" type="password" value="">
 
            </div> --}}

            {{-- <div class="col-md-6 form-group">
                <label>Email</label>
                <input class="form-control" required name="email" type="email" value="{{$user->email}}"
                class=" ">
                <span class="focus-input100" data-symbol="&#xf190;"></span>
     
            </div> --}}
            {{-- <div class="col-md-6 form-group">
                <label>Mật khẩu Mới:</label>
                <input class="form-control" required   name="password" type="password" value=""
                class="">
                <span class="focus-input100" data-symbol="&#xf190;"></span>
   
            </div>
             --}}
            
        
                <label>Phone</label>
                <input class="form-control" required name="phone" type="number" value="{{$user->phone}}"
                class=" ">
                <span class="focus-input100" data-symbol="&#xf206;"></span>
        
  
            {{-- <div class="col-md-6 form-group">
                <label>Address</label>
                <input class="form-control" required name="address" type="text" value="{{$user->address}}"
                class=" ">
                <span class="focus-input100" data-symbol="&#xf206;"></span>
            </div> --}}
 
    
            <div class=" d-flex justify-content-center   ">
                <button style="border-radius: 10px;" class="  " type="submit">cập nhật</button>
            </div>
        </form>
    </div>
    
</div>
 @endsection
