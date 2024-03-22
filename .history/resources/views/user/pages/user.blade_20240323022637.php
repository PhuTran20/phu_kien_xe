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
            <div class="col-md-6 form-group">
                <label>Họ tên</label>
                <input class="form-control" required name="fullname" type="text" value="{{$user->fullname}}"
                class="@error('fullname') form-control is-invalid @enderror">
                <span class="focus-input100" data-symbol="&#xf206;"></span>
            </div>
            @error('fullname') 
            <div class="" style="color:red">{{$message}} </div>
             @enderror
            <div class="col-md-6 form-group">
                <label>Tên tài khoản</label>
                <input class="form-control" required readonly name="username" type="text" value="{{$user->username}}">
            </div>
            <div class="col-md-6 form-group">
                <label>Mật khẩu Cũ:</label>
                <input class="form-control" required   name="password_cu" type="password" value="">
                @if(session('error'))
                    <a style="color:red">{{ session('error') }}</a>
                 @endif
            </div>

            <div class="col-md-6 form-group">
                <label>Email</label>
                <input class="form-control" required name="email" type="email" value="{{$user->email}}"
                class="@error('email') form-control is-invalid @enderror">
                <span class="focus-input100" data-symbol="&#xf190;"></span>
                @error('email') 
                <a style="color:red">{{$message}} </a>
            @enderror
            </div>
            <div class="col-md-6 form-group">
                <label>Mật khẩu Mới:</label>
                <input class="form-control" required   name="password" type="password" value=""
                class="@error('password') form-control is-invalid @enderror">
                <span class="focus-input100" data-symbol="&#xf190;"></span>
                @error('password') 
                <a style="color:red">{{$message}} </a>
            @enderror
            </div>
            
            
            <div class="col-md-6 form-group">
                <label>Phone</label>
                <input class="form-control" required name="phone" type="number" value="{{$user->phone}}"
                class="@error('phone') form-control is-invalid @enderror">
                <span class="focus-input100" data-symbol="&#xf206;"></span>
            </div>
            @error('phone') 
            <div class="" style="color:red">{{$message}} </div>
             @enderror
            <div class="col-md-6 form-group">
                <label>Address</label>
                <input class="form-control" required name="address" type="text" value="{{$user->address}}"
                class="@error('address') form-control is-invalid @enderror">
                <span class="focus-input100" data-symbol="&#xf206;"></span>
            </div>
            @error('address') 
            <div class="" style="color:red">{{$message}} </div>
             @enderror
    
            <div class=" d-flex justify-content-center   ">
                <button style="border-radius: 10px;" class="  " type="submit">cập nhật</button>
            </div>
        </form>
    </div>
    
</div>
 @endsection
