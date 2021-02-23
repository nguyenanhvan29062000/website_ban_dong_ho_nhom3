<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<div class="nav-bar">
  <nav class="navbar navbar-dark bg-dark">
    <ul class="nav justify-content-center">
      <li class="nav-item">
        <a class="nav-link active" href="#">Active</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#signup">Dang ky</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#signin" data-toggle="modal" data-target="#signin">Dang nhap</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
  </nav>
  @if(!empty($tokken))
    {{$tokken}}
  @endif
  <div class="modal fade" id="signin" role="dialog">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bg-dark text-light">
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
                      <input type="checkbox" value="remember-me"> Nhớ mật khẩu
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
</div>
@yield('content')
<div class="footer">
</div>

</body>
</html>