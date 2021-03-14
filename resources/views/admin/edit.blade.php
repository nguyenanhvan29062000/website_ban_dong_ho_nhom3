@extends('admin_layout')
@section('morehead')
<!-- Add more head tags in this space -->
@endsection
@section('admin_content') 
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Cập nhật  danh mục sản phảm
                </header>
                <div class="panel-body">
                    <div class="position-center">
                        <form role="form" method="POST" action="{{URL :: to('/update_sp/'.$info->id_danhmucsanpham)}}">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên danh mục</label>
                            <input type="text"  value ="{{$info->Ten_danh_muc}}"name="tendanhmuc" class="form-control" id="exampleInputEmail1" placeholder="nhap ten san pham">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Mô tả</label>
                            <textarea name="mota" class="form-control" id="exampleInputPassword1" placeholder="nhap gia san pham">{{$info->Mo_ta}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Hiển thị</label>
                       <select name="tinhtrang" class="form-control input-sm m-bot15">
                            @if ($info->An_hien == 0)
                            <option value="0">Ẩn </option>
                            <option value="1">Hiển thị</option>
                            @endif   
                            @if ($info->An_hien == 1)
                            <option value="1">Hiển thị</option>
                            <option value="0">Ẩn </option>
                            @endif   
                       </select>
                        </div>
                        <button type="submit"  name="cập nhật"class="btn btn-info">Cập nhật</button>
                    </form>
                    </div>
                </div>
            </section>
    </div>
@endsection