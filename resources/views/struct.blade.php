<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link id='struct' rel="stylesheet" href="{{ asset('/css/struct.css') }}">
    @yield('addcss')
</head>
<body style="background-color:#EAEAEA;">
<div class="nav-bar" style="box-shadow: 0 2px 0 #b78a62; background-color: #222222">
  <div class="container">
    <div class="row"><div class="col-4 pl-0"><div id="locate" class="nav-link disabled"><i class="fas fa-map-marker-alt"></i><span class="font-italic">92A - Lê Thanh Nghị, Hai Bà Trưng, Hà Nội</span></div></div>
    <div class="d-flex justify-content-end col-8 pr-0">
      <ul class="nav">
        @if(!empty(Cookie::get('name')))
        <li class="nav-item">
          <a class="nav-link disabled" href="#">{{Cookie::get('name')}}</a>
        </li>
        <li class="nav-item">
          <a href="{{url('logout')}}" class="nav-link btn_hover">Đăng xuất</a>
        </li>
        @else
        <li class="nav-item">
          <a class="nav-link btn_hover" href="#" data-toggle="modal" data-target="#signin">Đăng nhập</a>
        </li>
        <li class="nav-item" data-toggle="modal" data-target="#signup">
          <a class="nav-link btn_hover" href="#">Đăng ký</a>
        </li>
        @endif
      </ul>
    </div>
    </div>
  </div>
  <hr style="width: 100%; margin: 0px; box-shadow: 0 0.2px 0 lightgrey;" />
  <div class="container" style="position: relative">
    
      <a style="position: absolute; top: 30px; right: 30px; z-index: 999 ; " @if(!empty(Cookie::get('name'))) href="{{url('/'.Cookie::get('name').'/giohang')}}" @else href="#" @endif title="Giỏ hàng">
        <i style="position: relative" id="carticon" class="fas fa-cart-plus">
          @if(!empty(Cookie::get('sumcart')))
          <span style="font-size: 16px;width: 20px; height: 20px; text-align: center; line-height: 16px; background-color: #b78a62; border: white solid 1px ;border-radius: 32px;position: absolute; top: -1px; right: -4px;: 0;" id="cartbuy">{{Cookie::get('sumcart')}}</span>
          @endif
        </i>
        
        <script>
          $(document).ready(function(){
            $('#carticon').on({
              mouseenter: function() {
                $('#carticon').removeClass('fa-cart-plus');
                $('#carticon').addClass('fa-shopping-cart');
                $('#carticon').css('border-bottom', 'solid 2px white');
              },
              mouseleave: function() {
                $('#carticon').removeClass('fa-shopping-cart');
                $('#carticon').addClass('fa-cart-plus');
                $('#carticon').css('border-bottom', '');
              }
            });
          });
        </script>
      </a>

    <ul class="nav">
      <li class="nav-item align-self-lg-center btn-block">
        <div class="s002">
          <img src="{!! asset('/images/logo-mona-2.png') !!}" alt="" height="150px">
        </div>
      </li>
      <li class="nav-item btn-block">
        <div class="s002">
          <form>
            <div class="inner-form">
              <div class="input-field first-wrap">
                <input id="search" type="text" placeholder="Tìm kiếm sản phẩm?" />
              </div>
              <div class="input-field fifth-wrap">
                <button class="btn-search" type="button">Tìm kiếm</button>
              </div>
            </div>
          </form>
        </div>
      </li>
    </ul>
  </div>

  <div class="container p-0">
      <hr style="width:100%; margin: 0px; box-shadow: 0 0.2px 0 #b78a62;"/>
        <div class="d-flex justify-content-center">
          <nav class="navbar navbar-expand-xl">
          <script>
            $(document).ready(function(){
              $('#btnNavColl').click(function(){
                $('#btnNavColl').hide();
              });
              $('#btnNavCollup').click(function(){
                $('#btnNavColl').show();
              });
            });
          </script>
          
          <ul class="pl-2 m-0">
              <li class="nav-item navbar-brand d-flex justify-content-center">
                <button id="btnNavColl" class="navbar-toggler" data-toggle="collapse" data-target="#collapnavbar">
                  <i class="fas fa-chevron-down text-white"></i>
                </button>
              </li>
              <div class="collapse navbar-collapse" id="collapnavbar">
                  <ul class="navbar-nav">
                  <li class="nav-item navbar-brand d-flex justify-content-center">
                    <a id="homepage" class="nav-link" href="{{url('/home')}}">TRANG CHỦ</a>
                  </li>
                  <li class="nav-item navbar-brand d-flex justify-content-center">
                      <a id="gioithieupage" class="nav-link" href="{{url('/home/gioithieu')}}">GIỚI THIỆU</a>
                  </li>
                  <li class="nav-item navbar-brand d-flex justify-content-center">
                      <a id="dhnampage" class="nav-link" href="{{url('/home/dongho/nam')}}">ĐỒNG HỒ NAM</a>
                  </li>
                  <li class="nav-item navbar-brand d-flex justify-content-center">
                      <a id="dhnupage" class="nav-link" href="{{url('/home/dongho/nu')}}">ĐỒNG HỒ NỮ</a>
                  </li>
                  <li class="nav-item navbar-brand d-flex justify-content-center">
                    <a id="lienhepage" class="nav-link" href="{{url('/home/lienhe')}}">LIÊN HỆ</a>
                  </li>
                  <li class="nav-item navbar-brand d-flex justify-content-center">
                    <button id="btnNavCollup" class="navbar-toggler" data-toggle="collapse" data-target="#collapnavbar">
                      <i class="fas fa-chevron-up text-white"></i>
                    </button>
                  </li>
                  <script>
                    $(document).ready(function(){
                      var pathname = window.location.pathname;
                      if(pathname=="/home") {$('#homepage').css("color","#b78a62"); $('#homepage').css("border-bottom", "solid 1px #b78a62");}
                      else if(pathname=="/home/gioithieu") {$('#gioithieupage').css("color","#b78a62"); $('#gioithieupage').css("border-bottom", "solid 1px #b78a62");}
                      else if(pathname=="/home/dongho/nam") {$('#dhnampage').css("color","#b78a62");$('#dhnampage').css("border-bottom", "solid 1px #b78a62");}
                      else if(pathname=="/home/dongho/nu") {$('#dhnupage').css("color","#b78a62");$('#dhnupage').css("border-bottom", "solid 1px #b78a62");}
                      else if(pathname=="/home/lienhe") {$('#lienhepage').css("color","#b78a62");$('#lienhepage').css("border-bottom", "solid 1px #b78a62");}
                    })
                  </script>
                  </ul>
            </ul>
        </div>
      </nav>
      </div>  
  </div>
  <div class="modal fade" id="signin" role="dialog">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content text-light bg-dark">
          <div class="modal-header">
          
          <h4 class="modal-title">Đăng nhập tài khoản</h4>
          <button type="button" class="close text-light" data-dismiss="modal">&times;</button>
          </div>
          <div class="modal-body">
              <form method="POST" action="{{url('login')}}">
                  @csrf
                  <img class="mb-4 rounded mx-auto d-block" src="{!! asset('/images/logo-mona-2.png') !!}" alt="" height="72px">
                  <input name="email" type="email" id="inputEmail" class="form-control mb-4" placeholder="Email" required="" autofocus="">
                  <input name="password" type="password" id="inputPassword" class="form-control mb-4" placeholder="Mật khẩu" required="">
                  <div class="checkbox mb-3">
                  <label>
                      <input name="savepass" type="checkbox" value="remember-me"> Nhớ mật khẩu
                  </label>
                  </div>
                  <button class="btn btn-lg btn-secondary btn-block" type="submit">Đăng nhập</button>
                  <div class="d-flex justify-content-center">
                      <a class="mt-2 underlineHover" href="#quen">Quên mật khẩu?</a>
                  </div>
              </form>
          </div>
          <div class="modal-footer">
              <p class="mb-2 text-muted rounded mx-auto">© 2020-2021</p>
          </div>
        </div>
      </div>
  </div>
  <div class="modal fade" id="signup" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content text-light bg-dark">
        <div class="modal-header">
        
        <h4 class="modal-title">Đăng ký tài khoản</h4>
        <button type="button" class="close text-light" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
            <form method="POST" action="{{url('signup')}}" oninput='repass.setCustomValidity(repass.value != password.value ? "Nhập lại mật khẩu chưa khớp." : "")'>
                @csrf
                <img class="mb-4 rounded mx-auto d-block" src="{!! asset('/images/logo-mona-2.png') !!}" alt="" height="72px">
                <input class="form-control mb-4" type="text" maxlength="16" pattern="[A-za-z0-9]+" name="name" id="" placeholder="Tên hiển thị" required="" autofocus="">
                <input name="email" type="email" class="form-control mb-4" placeholder="Email" required="">
                <input name="password" type="password" class="form-control mb-4" placeholder="Mật khẩu" required="">
                <input class="form-control mb-4" type="text" name="repass" id="" placeholder="Nhập lại mật khẩu">
                <button class="btn btn-lg btn-secondary btn-block" type="submit">Đăng ký</button>
                <div class="d-flex justify-content-center">
                    <a class="mt-2 underlineHover" href="#quen">Quên mật khẩu?</a>
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <p class="mb-2 text-muted rounded mx-auto">© 2020-2021</p>
        </div>
      </div>
    </div>
</div>
@yield('content')
<hr style="box-shadow: 0 2px 0 #b78a62; width: 100%"">
<div class="footer">
  <div class="container" style="padding-top: 50px">
    <div class="row">
      <div class="col-sm-3 m-0 p-0">
        <ul class="ulfooter">
          <li class=""><h5>THÔNG TIN LIÊN HỆ</h5></li>
          <li><span>92A - Lê Thanh Nghị, Hai Bà Trưng, Hà Nội</span></li>
          <li><span>0926716223</span></li>
          <li><span>laptrinhmaytinh3@gmail.com</span></li>
          <li><span>donghoso3</span></li>
        </ul>
      </div>
      <div class="col-sm-3 m-0 p-0">
        <ul class="ulfooter">
          <li class=""><h5>LIÊN KẾT</h5></li>
          <li><span>GIỚI THIỆU</span></li>
          <li><span>ĐỒNG HỒ NAM</span></li>
          <li><span>ĐỒNG HỒ NỮ</span></li>
          <li><span>LIÊN HỆ</span></li>
        </ul>
      </div>
      <div class="col-sm-3 m-0 p-0">
        <ul class="ulfooter">
          <li class=""><h5>HỖ TRỢ</h5></li>
          <li><span>Hướng dẫn mua hàng</span></li>
          <li><span>Hướng dẫn thanh toán</span></li>
          <li><span>Chính sách bảo hành</span></li>
          <li><span>Chính sách đổi trả</span></li>
        </ul>
      </div>
      <div class="col-sm-3 m-0 p-0">
        <ul class="ulfooter">
          <li class=""><h5>TẢI ỨNG DỤNG TRÊN</h5></li>
          <li><span>Ứng dụng donghosoDOTga hiện có sẵn trên Google Play & App Store. Tải nó ngay.</span></li>
          <li><span>Hướng dẫn thanh toán</span></li>
          <li><span>Chính sách bảo hành</span></li>
          <li><span>Chính sách đổi trả</span></li>
        </ul>
      </div>
    </div>
    <hr style="width:100%; margin: 0;"/>
    <span class="d-flex justify-content-center text-muted p-3">©2021 - 2022</span>
  </div>
  
</div>

</body>
</html>