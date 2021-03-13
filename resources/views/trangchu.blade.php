@inject('Pages', 'App\Http\Controllers\PagesController')

@extends('struct')
@section('title', 'Trang chủ: website bán đồng hồ chất lượng cao donghoso.xyz')
@section('addcss')
  <link rel="stylesheet" href="{!! asset('/css/trangchu.css') !!}">
  <!-- import flickity (Thanh trượt giống Carousel nhưng pro hơn!) -->
  <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
  <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
@endsection

@section('content')

<div class="pages-body main-container position-relative">
  
  
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
          <div id="slide2" class="item-slides">
            <div class="bg-transparent card-carousel">
              <h1 class="card-title text-white">Đồng hồ  thông minh A Watch</h1>
              <span class="card-text text-white">Đồng hồ thông minh sử dụng công nghệ 3na1no lần đầu tiên ra mắt thị trường, với thiết kế sang chảnh phù hợp với mọi lứa tuổi, mọi giới tính, và đặc biệt là những tính năng thông minh mà nó mang lại...</span>
              <br><br><button id="btn_xemthem_carousel" type="button" class="btn btn-outline-light  text-white">XEM SẢN PHẨM</button>
            </div>  
          </div>
        </div>
        @endif
    </div>
  </div>
  <div class="container-item card shadow-lg">
    <div class="card-header bg-transparent">
      <h1 class="sp_title">SẢN PHẨM HOT</h1>
    </div>
    <div class="card-body pl-0 pr-0 parent-sp"  style="position: relative;">
      <div id="carousel-hot" style="position: relative" class="carousel slide" data-flickity='{"contain": true, "freeScroll": false, "prevNextButtons": false, "pageDots": false}'>
        @if (!empty($sanphamhot))
          @for ($i = 0; $i < 8 && $i < count($sanphamhot); $i++)
            @if ($i%4==0)
              <div class="carousel-cell">
                @for ($j = $i; $j < $i + 4 && $j < count($sanphamhot); $j++)
                  <div class="card shadow-sm float-left sp_card position-relative">
                    <img class="card-body" src="{{asset('/images/'.$sanphamhot[$j]->image)}}" width="100%" alt="">
                    @if ($sanphamhot[$j]->gia_sau_sale != NULL)
                      <div class="position-absolute font-weight-bold" style="top: 10px; left: 10px;">
                        <span>-{{round(100 - 100*($sanphamhot[$j]->gia_sau_sale/$sanphamhot[$j]->gia_sp), 1)}}%</span>
                      </div>
                    @endif
                    <div class="card-footer text-center">
                      <h6 class="card-title font-weight-bold">{{$sanphamhot[$j]->ten_sp}}</h6>
                      @if ($sanphamhot[$j]->gia_sau_sale != NULL)
                        <p class="sp_gia font-weight-normal text-dark">
                          <del>
                              {{$Pages->maskmonney($sanphamhot[$j]->gia_sp)}}₫
                          </del>
                          <span>
                            &emsp;{{$Pages->maskmonney($sanphamhot[$j]->gia_sau_sale)}}₫
                          </span>
                        </p>
                      @else
                        <p class="sp_gia font-weight-normal text-dark">
                          <span>
                            {{$Pages->maskmonney($sanphamhot[$j]->gia_sp)}}₫
                          </span>
                        </p>
                      @endif
                        <button class="sp_btn_buy" id="{{$sanphamhot[$j]->id_sp}}">MUA NGAY</button>
                    </div>
                  </div>
                @endfor
              </div>
            @endif
          @endfor
        @endif
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
        <div id="xutheright" class="item-slides shadow-lg">
          <div class="bg-transparent card-carousel-col2">
            <h1 class="card-title text-white">XU THẾ 2021</h1>
            <span class="card-text text-white">Đồng hồ thông minh sử dụng công nghệ 3na1no lần đầu tiên ra mắt thị trường, với thiết kế sang chảnh phù hợp với mọi lứa tuổi, mọi giới tính, và đặc biệt là những tính năng thông minh mà nó mang lại...</span>
            <br><br><button id="btn_xemthem_carousel" type="button" class="btn btn-outline-light  text-white">XEM NGAY</button>
          </div>
        </div>
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
    <div class="card-header bg-transparent">
      <h1 class="sp_title">HÀNG MỚI VỀ</h1>
    </div>
    <div class="card-body pl-0 pr-0 parent-sp"  style="position: relative;">
      <div id="carousel-new" style="position: relative" class="carousel slide" data-flickity='{"contain": true, "freeScroll": false, "prevNextButtons": false, "pageDots": false}'>
        @if (!empty($sanphamnew))
          @for ($i = 0; $i < 8 && $i < count($sanphamnew); $i++)
            @if ($i%4==0)
              <div class="carousel-cell">
                @for ($j = $i; $j < $i + 4 && $j < count($sanphamnew); $j++)
                  <div class="card shadow-sm float-left sp_card position-relative">
                    <img class="card-body" src="{{asset('/images/'.$sanphamnew[$j]->image)}}" width="100%" alt="">
                    @if ($sanphamnew[$j]->gia_sau_sale != NULL)
                      <div class="position-absolute font-weight-bold" style="top: 10px; left: 10px;">-<span>{{round(100 - 100*($sanphamnew[$j]->gia_sau_sale/$sanphamnew[$j]->gia_sp), 1)}}</span>%</div>
                    @endif
                    <div class="card-footer text-center">
                      <h6 class="card-title font-weight-bold">{{$sanphamnew[$j]->ten_sp}}</h6>
                      @if ($sanphamnew[$j]->gia_sau_sale != NULL)
                        <p class="sp_gia font-weight-normal text-dark">
                          <del>
                              {{$Pages->maskmonney($sanphamnew[$j]->gia_sp)}}₫
                          </del>
                          <span>
                            &emsp;{{$Pages->maskmonney($sanphamnew[$j]->gia_sau_sale)}}₫
                          </span>
                        </p>
                      @else
                        <p class="sp_gia font-weight-normal text-dark">
                          <span>
                            {{$Pages->maskmonney($sanphamnew[$j]->gia_sp)}}₫
                          </span>
                        </p>
                      @endif
                      <button class="sp_btn_buy" id="{{$sanphamhot[$j]->id_sp}}">MUA NGAY</button>
                    </div>
                  </div>
                @endfor
              </div>
            @endif
          @endfor
        @endif
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
        @if (!empty($sanphamsale))
          @for ($i = 0; $i < 8 && $i < count($sanphamsale); $i++)
            @if ($i%4==0)
              <div class="carousel-cell">
                @for ($j = $i; $j < $i + 4 && $j < count($sanphamsale); $j++)
                  <div class="card shadow-sm float-left sp_card position-relative">
                    <img class="card-body" src="{{asset('/images/'.$sanphamsale[$j]->image)}}" width="100%" alt="">
                    @if ($sanphamsale[$j]->gia_sau_sale != NULL)
                      <div class="position-absolute font-weight-bold" style="top: 10px; left: 10px;">-<span>{{round(100 - 100*($sanphamsale[$j]->gia_sau_sale/$sanphamsale[$j]->gia_sp), 1)}}</span>%</div>
                    @endif
                    <div class="card-footer text-center">
                      <h6 class="card-title font-weight-bold">{{$sanphamsale[$j]->ten_sp}}</h6>
                      @if ($sanphamsale[$j]->gia_sau_sale != NULL)
                        <p class="sp_gia font-weight-normal text-dark">
                          <del>
                              {{$Pages->maskmonney($sanphamsale[$j]->gia_sp)}}₫
                          </del>
                          <span>
                            &emsp;{{$Pages->maskmonney($sanphamsale[$j]->gia_sau_sale)}}₫
                          </span>
                        </p>
                      @else
                        <span>
                          &emsp;{{$Pages->maskmonney($sanphamsale[$j]->gia_sau_sale)}}₫
                        </span>
                      </p>
                      @endif
                      <button class="sp_btn_buy" id="{{$sanphamhot[$j]->id_sp}}">MUA NGAY</button>
                    </div>
                  </div>
                @endfor
              </div>
            @endif
          @endfor
        @endif
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
  @if (!empty($baiviet))
    <div class="container-item card bg-transparent border-0" style="width: 102%; margin-left: -1%">
      <div id="baiviet_div" class="position-relative">
        @for ($j = 0; $j < 3 && $j < count($baiviet); $j++)
        @if($j!=2)
          <div id="baiviet_cell" class="position-relative float-left shadow" style="border-radius: 10px ;background-image: url({!!asset('/images/'.$baiviet[$j]->hinhanh_demo)!!})">
            <div id="baiviet_cell_text">
              <span style="font-size: 20px; font-weight: bold">{{$baiviet[$j]->tieude}}</span>
              <br><br><button type="button" class="btn btn-danger  text-white position-absolute" style="bottom: 10%; left: 10%">Đọc bài viết...</button>
            </div>
          </div>
        @else
        <div id="baiviet_cell_last" class="position-relative float-left shadow" style="border-radius: 10px ;background-image: url({!!asset('/images/'.$baiviet[$j]->hinhanh_demo)!!})">
          <div id="baiviet_cell_text">
            <span style="font-size: 20px; font-weight: bold">{{$baiviet[$j]->tieude}}</span>
            <br><br><button  type="button" class="btn btn-danger  text-white position-absolute" style="bottom: 10%; left: 10%">Đọc bài viết...</button>
          </div>
        </div>
        @endif
        @endfor
      </div>
    </div>
  @endif
</div>


    {{-- Write code in here! --}}
@endsection



