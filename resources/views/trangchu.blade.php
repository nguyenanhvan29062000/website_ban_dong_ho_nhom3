@extends('struct')
@section('title', 'Trang chủ: website bán đồng hồ chất lượng cao donghoso.xyz')
@section('addcss')
  <link rel="stylesheet" href="{!! asset('/css/trangchu.css') !!}">
@endsection
@section('content')
  <div class="pages-body container">
    <div id="nav-bar-slides container-item" class="pl-0 pr-0 shadow-lg">
      <div id="carousel1" class="carousel slide" data-ride="carousel" data-interval="4000" data-touch="true">
          <div class="carousel-inner">
            @if(!empty($carousel))
              @foreach($carousel as $value)
                <div class="carousel-item">
                    <div class="item-slides" style="background-image: url({{asset('/images/carosel/$value->image')}})">
                  
                    </div>
                </div>
              @endforeach
            @else
            <div class="carousel-item active">
              <div id="slide1" class="item-slides">
                <div class="bg-transparent card-carousel">
                    <h1 class="card-title text-white">Đồng hồ  Casio N2</h1>
                    <span class="card-text text-white">Cùng với sự phát triển không ngừng của thời trang thế giới, đồng hồ casio phiên bản 2 được chào đón tại sự kiện Wath Time of World...</span>
                    <hr><button id="btn_xemthem_carousel" type="button" class="btn btn-outline-light  text-white">XEM SẢN PHẨM</button>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <div id="slide2" class="item-slides"></div>
            </div>
            @endif
          </div>
  
          <a class="carousel-control-prev ml-n5" href="#carousel1"  role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </a>
            <a class="carousel-control-next mr-n5" href="#carousel1" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </a>
        </div>
  </div>
  <div class="container-item card shadow-lg">
    <div class="card-header bg-transparent"><h1 class="sp_title">SẢN PHẨM HOT NHẤT</h1></div>
    <div class="card-body pl-1">
      <div class="card shadow-sm float-left ml-4" style="width: 200px">
        <img class="card-body" src="{{asset('/images/hot1.png')}}" width="100%" alt="hot1">
        <div class="card-footer text-center">
          <h6 class="card-title font-weight-bold">Casio S1</h6>
          <p class="sp_gia font-weight-normal text-dark"><span >1,000,000</span> ₫</p>
          <button class="sp_btn_buy btn-primary">MUA NGAY</button>
        </div>
      </div>
      <div class="card shadow-sm float-left ml-4" style="width: 200px">
        <img class="card-body" src="{{asset('/images/hot2.png')}}" width="100%" alt="hot1">
        <div class="card-footer text-center">
          <h6 class="card-title font-weight-bold">Casio S2</h6>
          <p class="sp_gia font-weight-normal text-dark"><span >1,200,000</span> ₫</p>
          <button class="sp_btn_buy btn-primary">MUA NGAY</button>
        </div>
      </div>
    </div>
  </div>
  </div>
    {{-- Write code in here! --}}
    

@endsection