@extends('struct')
@section('title', 'Trang chủ: website bán đồng hồ chất lượng cao donghoso.xyz')
@section('addcss')
  <link rel="stylesheet" href="{!! asset('/css/trangchu.css') !!}">
  <!-- import flickity (Thanh trượt giống Carousel nhưng pro hơn!) -->
  <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
  <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
@endsection

@section('content')
<div>
  <div class="pages-body main-container">
    <div id="nav-bar-slides container-item" class="pl-0 pr-0 shadow-lg">
      <div id="carousel1" class="carousel" data-flickity='{"autoPlay": 4000, "pageDots": false, "contain": true, "draggable":true, "wrapAround": true, "pauseAutoPlayOnHover" : true}'>
          @if(!empty($carousel))
            @foreach($carousel as $value)
              <div class="carousel-item">
                  <div class="item-slides" style="background-image: url({{asset('/images/carosel/$value->image')}})">
                
                  </div>
              </div>
            @endforeach
          @else
          <div class="carousel-cell">
            <div id="slide1" class="item-slides">
              <div class="bg-transparent card-carousel">
                  <h1 class="card-title text-white">Đồng hồ  Casio N2</h1>
                  <span class="card-text text-white">Cùng với sự phát triển không ngừng của thời trang thế giới, đồng hồ casio phiên bản 2 được chào đón tại sự kiện Wath Time of World...</span>
                  <br><br><button id="btn_xemthem_carousel" type="button" class="btn btn-outline-light  text-white">XEM SẢN PHẨM</button>
              </div>
            </div>
          </div>
          <div class="carousel-cell">
            <div id="slide2" class="item-slides"></div>
          </div>
          @endif
      </div>
    </div>
    <div class="container-item card shadow-lg">
      <div class="card-header bg-transparent"><h1 class="sp_title">SẢN PHẨM HOT</h1></div>
      <div class="card-body pl-0 pr-0 parent-sp"  style="position: relative;">
        <div id="carousel-hot" style="position: relative" class="carousel slide" data-flickity='{"contain": true, "freeScroll": false, "prevNextButtons": false, "pageDots": false}'>
          <div class="carousel-cell">
            <div class="card shadow-sm float-left sp_card">
              <img class="card-body" src="{{asset('/images/hot1.png')}}" width="100%" alt="hot1">
              <div class="card-footer text-center">
                <h6 class="card-title font-weight-bold">Casio S1</h6>
                <p class="sp_gia font-weight-normal text-dark"><span >1,000,000</span> ₫</p>
                <button class="sp_btn_buy ">MUA NGAY</button>
              </div>
            </div>
            <div class="card shadow-sm float-left sp_card">
              <img class="card-body" src="{{asset('/images/hot2.png')}}" width="100%" alt="hot1">
              <div class="card-footer text-center">
                <h6 class="card-title font-weight-bold">Casio S2</h6>
                <p class="sp_gia font-weight-normal text-dark"><span >1,200,000</span> ₫</p>
                <button class="sp_btn_buy ">MUA NGAY</button>
              </div>
            </div>
            <div class="card shadow-sm float-left sp_card">
              <img class="card-body" src="{{asset('/images/hot2.png')}}" width="100%" alt="hot1">
              <div class="card-footer text-center">
                <h6 class="card-title font-weight-bold">Casio S2</h6>
                <p class="sp_gia font-weight-normal text-dark"><span >1,200,000</span> ₫</p>
                <button class="sp_btn_buy">MUA NGAY</button>
              </div>
            </div>
            <div class="card shadow-sm float-left sp_card">
              <img class="card-body" src="{{asset('/images/hot2.png')}}" width="100%" alt="hot1">
              <div class="card-footer text-center">
                <h6 class="card-title font-weight-bold">Casio S2</h6>
                <p class="sp_gia font-weight-normal text-dark"><span >1,200,000</span> ₫</p>
                <button class="sp_btn_buy">MUA NGAY</button>
              </div>
            </div>
          </div>
          <div class="carousel-cell">
            <div class="card shadow-sm float-left sp_card">
              <img class="card-body" src="{{asset('/images/hot2.png')}}" width="100%" alt="hot1">
              <div class="card-footer text-center">
                <h6 class="card-title font-weight-bold">Casio S2</h6>
                <p class="sp_gia font-weight-normal text-dark"><span >1,200,000</span> ₫</p>
                <button class="sp_btn_buy">MUA NGAY</button>
              </div>
            </div>
          </div>
        </div>
        <a id="hotleft" href="#prev" style="position: absolute; top: 30%">
          <i class="fas fa-chevron-circle-left next-btn shadow"></i>
        </a>
        <a id="hotright" href="#prev" style="position: absolute; top: 30%; right: 2%">
          <i class="fas fa-chevron-circle-right next-btn-r shadow"></i>
        </a>
        <script>
          $(document).ready(function(){
            var carosel_hot = $('#carousel-hot').flickity();
            $('#hotleft').click(function(){
              carosel_hot.flickity('previous');
            });
            $('#hotright').click(function(){
              carosel_hot.flickity('next');
            });
          });
        </script>
      </div>
    </div>
<!-- Xu thế -->
    <div class="container-item">
      <div class="row pl-3 pr-3">
        <div class="col-sm-6 p-0">
          <div id="xutheleft" class="item-slides shadow-lg">
            <div class="bg-transparent card-carousel-col2">
              <h1 class="card-title text-white">XU THẾ 2020</h1>
              <span class="card-text text-white">Cùng với sự phát triển không ngừng của thời trang thế giới, đồng hồ casio phiên bản 2 được chào đón tại sự kiện Wath Time of World...</span>
              <br><br><button id="btn_xemthem_carousel" type="button" class="btn btn-outline-light  text-white">XEM NGAY</button>
            </div>
          </div>
        </div>
        <div class="col-sm-6 p-0">
          <div id="xutheright" class="item-slides shadow-lg"></div>
        </div>
      </div>
      <script>
        $(document).ready(function(){
          $('#xutheleft').on({
            mouseenter: function() {
              $('#xutheright').css('margin-left', '8%');
            },
            mouseleave: function() {
              $('#xutheright').css('margin-left', '');
            }
          });
          $('#xutheright').on({
            mouseenter: function() {
              $('#xutheleft').css('margin-left', '-8%');
            },
            mouseleave: function() {
              $('#xutheleft').css('margin-left', '');
            }
          });
        });
      </script>
    </div>
    <div class="container-item card shadow-lg">
      <div class="card-header bg-transparent"><h1 class="sp_title">HÀNG MỚI VỀ</h1></div>
        <div class="card-body pl-0 pr-0 parent-sp"  style="position: relative;">
          <div id="carousel-new" style="position: relative" class="carousel slide" data-flickity='{"contain": true, "freeScroll": false, "prevNextButtons": false, "pageDots": false}'>
            <div class="carousel-cell">
              <div class="card shadow-sm float-left sp_card">
                <img class="card-body" src="{{asset('/images/hot1.png')}}" width="100%" alt="hot1">
                <div class="card-footer text-center">
                  <h6 class="card-title font-weight-bold">Casio S1</h6>
                  <p class="sp_gia font-weight-normal text-dark"><span >1,000,000</span> ₫</p>
                  <button class="sp_btn_buy ">MUA NGAY</button>
                </div>
              </div>
            <div class="card shadow-sm float-left sp_card">
              <img class="card-body" src="{{asset('/images/hot2.png')}}" width="100%" alt="hot1">
              <div class="card-footer text-center">
                <h6 class="card-title font-weight-bold">Casio S2</h6>
                <p class="sp_gia font-weight-normal text-dark"><span >1,200,000</span> ₫</p>
                <button class="sp_btn_buy ">MUA NGAY</button>
              </div>
            </div>
            <div class="card shadow-sm float-left sp_card">
              <img class="card-body" src="{{asset('/images/hot2.png')}}" width="100%" alt="hot1">
              <div class="card-footer text-center">
                <h6 class="card-title font-weight-bold">Casio S2</h6>
                <p class="sp_gia font-weight-normal text-dark"><span >1,200,000</span> ₫</p>
                <button class="sp_btn_buy">MUA NGAY</button>
              </div>
            </div>
            <div class="card shadow-sm float-left sp_card">
              <img class="card-body" src="{{asset('/images/hot2.png')}}" width="100%" alt="hot1">
              <div class="card-footer text-center">
                <h6 class="card-title font-weight-bold">Casio S2</h6>
                <p class="sp_gia font-weight-normal text-dark"><span >1,200,000</span> ₫</p>
                <button class="sp_btn_buy">MUA NGAY</button>
              </div>
            </div>
          </div>
          <div class="carousel-cell">
            <div class="card shadow-sm float-left sp_card">
              <img class="card-body" src="{{asset('/images/hot2.png')}}" width="100%" alt="hot1">
              <div class="card-footer text-center">
                <h6 class="card-title font-weight-bold">Casio S2</h6>
                <p class="sp_gia font-weight-normal text-dark"><span >1,200,000</span> ₫</p>
                <button class="sp_btn_buy">MUA NGAY</button>
              </div>
            </div>
          </div>
        </div>
        <a id="newleft" href="#prev" style="position: absolute; top: 30%">
          <i class="fas fa-chevron-circle-left next-btn shadow"></i>
        </a>
        <a id="newright" href="#prev" style="position: absolute; top: 30%; right: 2%">
          <i class="fas fa-chevron-circle-right next-btn-r shadow"></i>
        </a>
        <script>
          $(document).ready(function(){
            var carosel_new = $('#carousel-new').flickity();
            $('#newleft').click(function(){
              carosel_new.flickity('previous');
            });
            $('#newright').click(function(){
              carosel_new.flickity('next');
            });
          });
        </script>
      </div>
    </div>
  <div class="container-item card shadow-lg">
    <div class="card-header bg-transparent"><h1 class="sp_title">ĐANG GIẢM GIÁ</h1></div>
    <div class="card-body pl-0 pr-0 parent-sp"  style="position: relative;">
      <div id="carousel-sale" style="position: relative" class="carousel slide" data-flickity='{"contain": true, "freeScroll": false, "prevNextButtons": false, "pageDots": false}'>
        <div class="carousel-cell">
          <div class="card shadow-sm float-left sp_card">
            <img class="card-body" src="{{asset('/images/hot1.png')}}" width="100%" alt="hot1">
            <div class="card-footer text-center">
              <h6 class="card-title font-weight-bold">Casio S1</h6>
              <p class="sp_gia font-weight-normal text-dark"><span >1,000,000</span> ₫</p>
              <button class="sp_btn_buy ">MUA NGAY</button>
            </div>
          </div>
          <div class="card shadow-sm float-left sp_card">
            <img class="card-body" src="{{asset('/images/hot2.png')}}" width="100%" alt="hot1">
            <div class="card-footer text-center">
              <h6 class="card-title font-weight-bold">Casio S2</h6>
              <p class="sp_gia font-weight-normal text-dark"><span >1,200,000</span> ₫</p>
              <button class="sp_btn_buy ">MUA NGAY</button>
            </div>
          </div>
          <div class="card shadow-sm float-left sp_card">
            <img class="card-body" src="{{asset('/images/hot2.png')}}" width="100%" alt="hot1">
            <div class="card-footer text-center">
              <h6 class="card-title font-weight-bold">Casio S2</h6>
              <p class="sp_gia font-weight-normal text-dark"><span >1,200,000</span> ₫</p>
              <button class="sp_btn_buy">MUA NGAY</button>
            </div>
          </div>
          <div class="card shadow-sm float-left sp_card">
            <img class="card-body" src="{{asset('/images/hot2.png')}}" width="100%" alt="hot1">
            <div class="card-footer text-center">
              <h6 class="card-title font-weight-bold">Casio S2</h6>
              <p class="sp_gia font-weight-normal text-dark"><span >1,200,000</span> ₫</p>
              <button class="sp_btn_buy">MUA NGAY</button>
            </div>
          </div>
        </div>
        <div class="carousel-cell">
          <div class="card shadow-sm float-left sp_card">
            <img class="card-body" src="{{asset('/images/hot2.png')}}" width="100%" alt="hot1">
            <div class="card-footer text-center">
              <h6 class="card-title font-weight-bold">Casio S2</h6>
              <p class="sp_gia font-weight-normal text-dark"><span >1,200,000</span> ₫</p>
              <button class="sp_btn_buy">MUA NGAY</button>
            </div>
          </div>
        </div>
      </div>
      <a id="saleleft" href="#prev" style="position: absolute; top: 30%">
        <i class="fas fa-chevron-circle-left next-btn shadow"></i>
      </a>
      <a id="saleright" href="#prev" style="position: absolute; top: 30%; right: 2%">
        <i class="fas fa-chevron-circle-right next-btn-r shadow"></i>
      </a>
      <script>
        $(document).ready(function(){
          var carosel = $('#carousel-sale').flickity();
          $('#saleleft').click(function(){
            carosel.flickity('previous');
          });
          $('#saleright').click(function(){
            carosel.flickity('next');
          });
        });
      </script>
    </div>
  </div>
</div>

    {{-- Write code in here! --}}
@endsection



