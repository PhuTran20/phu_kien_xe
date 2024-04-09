@extends('user.app')
 @section('title', 'Home')
 @section('content')
 <section class="section-slide">
    <div class="wrap-slick1">
        <div class="slick1">
            {{-- <div class="item-slick1" style="background-image: url({{url('frontend')}}/images/ex.jpg);">
                <div class="container h-full">
                    <div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
                        <div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">
                            <span class="ltext-101 cl2 respon2">
                                Women Collection 2018
                            </span>
                        </div>
                            
                        <div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800">
                            <h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
                                NEW SEASON
                            </h2>
                        </div>
                            
                        <div class="layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="1600">
                            <a href="product.html" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
                                Shop Now
                            </a>
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="item-slick1" style="background-image: url({{url('frontend')}}/images/aaa.png);">
                {{-- <div class="container h-full">
                    <div class="flex-col-l-m h-full p-t-100 p-b-30 respon5">
                        <div class="layer-slick1 animated visible-false" data-appear="fadeInDown" data-delay="0">
                            <span class="ltext-101 cl2 respon2">
                                Women Collection 2018
                            </span>
                        </div>
                            
                        <div class="layer-slick1 animated visible-false" data-appear="fadeInUp" data-delay="800">
                            <h2 class="ltext-201 cl2 p-t-19 p-b-43 respon1">
                                NEW SEASON
                            </h2>
                        </div>
                            
                        <div class="layer-slick1 animated visible-false" data-appear="zoomIn" data-delay="1600">
                            <a href="product.html" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04">
                                Shop Now
                            </a>
                        </div>
                    </div>
                </div> --}}
            </div>
 
     

   
 
        </div>
    </div>
</section>
 
        <!-- Product -->
        <section class="bg0 p-t-23 p-b-140">
            <div class="container">
           
        
                <div class="flex-w flex-sb-m p-b-52">
                    <div class="flex-w flex-l-m filter-tope-group m-tb-10">
                        <a href="{{route("All-Product")}}" class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5 how-active1" data-filter="*">
                            
                           All Product
                        </a>
                        @foreach ($category as $item)
                            
                        <a href="/category/{{$item->id_category}}" class="stext-106 cl6 hov1 bor3 trans-04 m-r-32 m-tb-5  " data-filter="*">
                            
                            {{$item->name_category}}
                        </a>
                        @endforeach
         
             
                    </div>
        
                    <div class="flex-w flex-c-m m-tb-10">              
                        <div class="flex-c-m stext-106 cl6 size-105 bor4 pointer hov-btn3 trans-04 m-tb-12 js-show-search">
                            <i class="icon-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-search"></i>
                            <i class="icon-close-search cl2 m-r-6 fs-15 trans-04 zmdi zmdi-close dis-none"></i>
                            Search
                        </div>
                    </div>
                    
                    <!-- Search product -->
                    <div class="dis-none panel-search w-full p-t-10 p-b-15">
                        <div class="bor8 dis-flex p-l-15">
                            <button class="size-113 flex-c-m fs-16 cl2 hov-cl1 trans-04">
                                <i class="zmdi zmdi-search"></i>
                            </button>
        
                            <input class="mtext-107 cl2 size-114 plh2 p-r-15" type="text" name="search-product" placeholder="Search">
                        </div>	
                    </div>
        
             
                </div>
        
                <div class="row isotope-grid">
                    @foreach ($product as $item)
                    <div class="col-sm-6 col-md-4 col-lg-3 p-b-35 isotope-item women">
                        <!-- Block2 -->
                    
                        <div class="block2">
                            <div class="block2-pic hov-img0">
                                <img src="{{ URL::to('/frontend/images/'.$item->image)}}" alt="IMG-PRODUCT">
        
                                <a href="#" class="block2-btn flex-c-m stext-103 cl2 size-102 bg0 bor2 hov-btn1 p-lr-15 trans-04 js-show-modal1">
                                    Quick View
                                </a>
                            </div>
        
                            <div class="block2-txt flex-w flex-t p-t-14">
                                <div class="block2-txt-child1 flex-col-l ">
                                    <a style="height: 70px" href="/product/{{$item->id_product}}" class="stext-104 cl4 hov-cl1 trans-04 js-name-b2 p-b-6">
                                        {{$item->name_product}}
                                    </a>
        
                                    <span class="price-wrapper">
                                        <span class="price">{{$item->price}}</span>
                                        {{-- <button type="button" class="flex-c-m stext-101 cl0 size-101 bg1 bor1 hov-btn1 p-lr-15 trans-04 js-addcart-detail add-to-cart" name="add-to-cart">Add to cart</button> --}}
                                    </span>
                                </div>
        
                                <div class="block2-txt-child2 flex-r p-t-3">
                                    <a href="#" class="btn-addwish-b2 dis-block pos-relative js-addwish-b2">
                                        <img class="icon-heart1 dis-block trans-04" src="{{url('frontend')}}/images/icons/icon-heart-01.png" alt="ICON">
                                        <img class="icon-heart2 dis-block trans-04 ab-t-l" src="{{url('frontend')}}/images/icons/icon-heart-02.png" alt="ICON">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
        
                     
                </div>
        
                <!-- Load more -->
                <div class="flex-c-m flex-w w-full p-t-45">
         
                        {{$product->links()}}
                
                </div>
            </div>
        </section>
 @endsection
