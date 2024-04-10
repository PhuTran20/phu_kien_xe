@extends('user.app')
@section('title', 'Shopping Cart')
@section('content')

    <!-- breadcrumb -->
	<div class="container">
        <nav aria-label="breadcrumb" >
            <ol class="breadcrumb"  style="background-color: #F2F2F2">
                <li class="breadcrumb-item"><a href="{{route("All-Product")}}">Home</a></li>
           
              <li class="breadcrumb-item active" aria-current="page">Cart</li>
            </ol>
          </nav>
	</div>
		

	<!-- Shoping Cart -->
	{{-- <form class="bg0 p-t-75 p-b-85"> --}}
		<div class="container">
			<div class="row">
				<div class="col-lg-10 col-xl-7 m-lr-auto m-b-50">
					<div class="m-l-25 m-r--38 m-lr-0-xl"> 
						<div class="wrap-table-shopping-cart">
                            <form action="{{route("update-Cart")}}" method="POST"> 
                                @csrf
                                    <table class="table-shopping-cart">
                                        <tr class="table_head">
                                            <th class="column-1">Product</th>
                                            <th class="column-2"></th>
                                            <th class="column-3">Price</th>
                                            <th class="column-4">Quantity</th>
                                            <th class="column-5">Total</th>
                                            <th class="column-1"> </th>
                                        </tr>
                                        <?php 
                                            $cart =Session::get("cart"); 
                                            $subtotal = 0;
                                        ?>
                                        @if ($cart=="")
                                            <p>khong co sp trong gio</p>
                                        @else
                                            
                                
                                        @foreach ($cart as $item)

                                            
                                            @php
                                                $sub = $item["product_price"] * $item["product_qty"];
                                                $subtotal+=$sub;
                                            @endphp
                                        <tr class="table_row">
                                            <td class="column-1">
                                                <div class="how-itemcart1">
                                                    <img src="{{url("/frontend")}}/images/{{$item["product_image"]}}" alt="IMG">
                                                </div>
                                            </td>
                                            <td class="column-2">{{$item["product_name"]}}</td>
                                            <td class="column-3">{{$item["product_price"]}}</td>
                                            <td class="column-4">
                                                <div class="wrap-num-product flex-w m-l-auto m-r-0">
                                                    <div class="btn-num-product-down cl8 hov-btn3 trans-04 flex-c-m">
                                                        <i class="fs-16 zmdi zmdi-minus"></i>
                                                    </div>

                                                    <input class="mtext-104 cl3 txt-center num-product cart_quantity" type="number" name="cart_qty[{{$item["session_id"]}}]" value="{{$item["product_qty"]}}">

                                                    <div class="btn-num-product-up cl8 hov-btn3 trans-04 flex-c-m">
                                                        <i class="fs-16 zmdi zmdi-plus"></i>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="column-5">{{$sub}}</td>
                                            <td class="column-1"><a href="{{url("/deleteProductCart/".$item["session_id"] )}}"><i class="fa fa-trash"></i></a> </td>
                                        </tr>
                                        @endforeach
                                        @endif
                                        
                                        @if ($cart ==true)
                                        <tr class="table_head"> <td  >     <input   class="  flex-c-m stext-101 cl2 size-90 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-10" type="submit"  value="Update Cart"  ></td></tr>
                                     
                                        @endif
                                    </table>                                    
                                </form>
                                @if ($cart ==true)
                                <div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">      
                                    @if(session('message'))
                                    <span  style="color:green; width: 250px;">{{ session('message') }}</span>
                                    @endif
                                    @if(session('error'))
                                    <span style="color:red;width: 250px;">{{ session('error') }}</span>
                                    @endif
                                    <form action="{{route("check-coupon")}}" method="post">                 
                                        @csrf        
                                        <div class="flex-w flex-m m-r-20 m-tb-5">
                                            <input class="stext-104 cl2 plh4 size-117 bor13 p-lr-20 m-r-10 m-tb-5" type="text" name="coupon" placeholder="Coupon Code">
                                                    
                                            <input type="submit" class="flex-c-m stext-101 cl2 size-118 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-5" value="Apply coupon">
                                                    
                                            
                                        </div>
                                     </form> 
                                </div>
                                   @endif
						</div>

						{{-- <div class="flex-w flex-sb-m bor15 p-t-18 p-b-15 p-lr-40 p-lr-15-sm">
							<div class="flex-w flex-m m-r-20 m-tb-5">
								<input class="stext-104 cl2 plh4 size-117 bor13 p-lr-20 m-r-10 m-tb-5" type="text" name="coupon" placeholder="Coupon Code">
									
								<div class="flex-c-m stext-101 cl2 size-118 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-5">
									Apply coupon
								</div>
							</div>

							<div class="flex-c-m stext-101 cl2 size-119 bg8 bor13 hov-btn3 p-lr-15 trans-04 pointer m-tb-10">
								Update Cart
							</div>
						</div> --}}
					</div>
				</div>
             
				<div class="col-sm-10 col-lg-7 col-xl-5 m-lr-auto m-b-50">
					<div class="bor10 p-lr-40 p-t-30 p-b-40 m-l-63 m-r-40 m-lr-0-xl p-lr-15-sm">
						<h4 class="mtext-109 cl2 p-b-30">
							Cart Totals
						</h4>
                        @if ($cart ==true)
						<div class="flex-w flex-t bor12 p-b-13">
							<div class="size-208">
								<span class="stext-110 cl2">
									Subtotal:
								</span>
							</div>

							<div class="size-209">
								<span class="mtext-110 cl2">
									{{$subtotal}}
								</span>
							</div>
						</div>
                        @if (Session::get("coupon"))
						<div class="flex-w flex-t bor12 p-b-13">
							<div class="size-208">
								<span class="stext-110 cl2">
									Discount
								</span>
							</div>

							<div class="size-209">
								<span class="mtext-110 cl2">
								 
                                        @foreach (Session::get("coupon") as $key =>$cou)
                                            @if ($cou["coupon_condition"]==1)
                                                {{$cou["coupon_number"]}} %
                                            @elseif($cou["coupon_condition"]==2)
                                            {{$cou["coupon_number"]}}
                                            @else
                                            Do Not Use
                                            @endif
                                        @endforeach
                                  

                                 
								</span>
							</div>
						</div>
                
						<div class="flex-w flex-t bor12 p-b-13">
							<div class="size-208">
								<span class="stext-110 cl2">
									The amount is reduced:
								</span>
							</div>

                           
							<div class="size-209">
								<span class="mtext-110 cl2">
                                        @foreach (Session::get("coupon") as $key =>$cou)
                                            @if ($cou["coupon_condition"]==1)
                                                @php
                                                $total_coupon = ($subtotal*$cou["coupon_number"])/100;

                                                @endphp
                                                 {{(number_format( {{$total_coupon}}  , 0, '.', '.') . ' VNĐ')}}
                                            @elseif($cou["coupon_condition"]==2)                                    
                                                   {{(number_format(    {{ $cou["coupon_number"]}}  , 0, '.', '.') . ' VNĐ')}}
                                            @else
                                            {{(number_format(   0 , 0, '.', '.') . ' VNĐ')}}
                                            @endif
                                      
                                        @endforeach
                                  
								</span>
							</div>
						</div>                     
						<div class="flex-w flex-t p-t-27 p-b-33">
							<div class="size-208">
								<span class="mtext-101 cl2">
									Total:
								</span>
							</div>

							<div class="size-209 p-t-1">
								<span class="mtext-110 cl2">
                                    @foreach (Session::get("coupon") as $key =>$cou)
                                    @if ($cou["coupon_condition"]==1)
                                        @php
                                        $total_coupon = ($subtotal*$cou["coupon_number"])/100;
                                        $total = $subtotal - $total_coupon;
                                        @endphp
                                       {{(number_format(  {{$total}}, 0, '.', '.') . ' VNĐ')}}
                                    @elseif($cou["coupon_condition"]==2)                                    
                                            @php
                                                $total = $subtotal - $cou["coupon_number"];
                                            @endphp
                                           {{(number_format(  {{$total}}, 0, '.', '.') . ' VNĐ')}}
                                    @else
                                        @php
                                        $total = $subtotal;
                                        @endphp
                                     {{(number_format(  {{$total}}, 0, '.', '.') . ' VNĐ')}}
                                    @endif
                              
                                @endforeach
								</span>
							</div>
						</div>     
                        @endif
						<button class="flex-c-m stext-101 cl0 size-116 bg3 bor14 hov-btn3 p-lr-15 trans-04 pointer">
							Proceed to Checkout
						</button>
                        @endif
					</div>
				</div>
              
			</div>
		</div>
	{{-- </form> --}}
    @endsection