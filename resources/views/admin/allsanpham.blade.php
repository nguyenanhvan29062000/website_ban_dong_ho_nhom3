@extends('admin_layout')
@section('admin_content') 
<div class="panel panel-default">
    <div class="panel-heading">
      Liệt kệ sản phảm
    </div>
    <div class="row w3-res-tb">
      <div class="col-sm-5 m-b-xs">
      </div>
      <div class="col-sm-4">
      </div>
      <div class="col-sm-3">
      </div>
    </div>
    <div class="table-responsive">
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th style="width:20px;">
              
            </th>
            <th>Tên sản phẩm</th>
            <th>Giá</th>
            <th>Hình ảnh</th>
            <th>Giới tính</th>
            <th>Hãng SX</th>
            <th>Năm SX</th>
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
      @foreach($all_hh as $key => $pro)
          <tr>
            <td><label class="i-checks m-b-none"><i></i></label></td>
            <td>{{$pro->ten_sp}}</td>
            <td>{{$pro->gia_sp}}</td>
            <td><img src="{{asset('images'.$pro->image)}}"</td>
            <td>{{$pro->gioi_tinh}}</td>
            <td>{{$pro->hang_sx}}</td>
            <td>{{$pro->nam_sx}}</td>
            <td>
              <a href="{{URL :: to('/edit_hh/'.$pro->id_sp)}}" class="active" ui-toggle-class="">
                <i class="fa fa-pencil-square-o text-success text-active"></i></a>
              <a id="del_button" href="{{URL :: to('/delete_hh/'.$pro->id_sp)}}" class="active" ui-toggle-class="">
                <i class="fa fa-times text-danger text"></i></a>
              <script>
                $(document).ready(function(){
                  var del_btn =  $('#del_button');
                  del_btn.click(function(){
                    if(confirm("Bạn có muốn xóa không?"))
                    {
                      window.location(del_btn.getAttribute('href'));
                    }
                    else
                    {

                    }
                  });
                });
              </script>
            </td>
          </tr>
       @endforeach
        </tbody>
      </table>
    </div>
    <footer class="panel-footer">
      <div class="row">
        
        <div class="col-sm-5 text-center">
        </div>
        <div class="col-sm-7 text-right text-center-xs">                
          <ul class="pagination pagination-sm m-t-none m-b-none">
            <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
            <li><a href="">1</a></li>
            <li><a href="">2</a></li>
            <li><a href="">3</a></li>
            <li><a href="">4</a></li>
            <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
          </ul>
        </div>
      </div>
    </footer>
  </div>
</div>
@endsection