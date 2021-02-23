@extends('struct')
@section('title', 'Trang chủ: website bán đồng hồ chất lượng cao abc.xyz')
@section('content')
    {{-- Write code in here! --}}
    <div id="nav-bar-slides">
        <div id="carousel1" class="carousel slide" data-ride="carousel" data-interval="4000" data-touch="true">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div style="position: relative;"><img class="d-block w-100" src="{!! asset('/images/bg-slide1.jpeg') !!}" alt="First slide"><div style="position: absolute; top:0%; "><span style="color: white">aa</span></div></div>
                
                
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="{!! asset('/images/bg-slide2.jpg') !!}" alt="Second slide">
              </div>
            </div>
    
            <a class="carousel-control-prev" href="#carousel1"  role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              </a>
              <a class="carousel-control-next" href="#carousel1" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
              </a>
          </div>
    </div>
@endsection