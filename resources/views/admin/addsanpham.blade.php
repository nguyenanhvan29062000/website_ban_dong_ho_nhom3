@extends('admin_layout')
@section('morehead')
<!-- Add more head tags in this space -->
@endsection
@section('admin_content') 
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Thêm sản phảm
                </header>
                <div class="panel-body">
                    <div class="position-center">
                        <form role="form" method="POST" action="{{URL :: to('/save-product')}}" enctype="multipart/form-data">
                            @csrf
                          {{-- @if (!empty($error))
                                <div class="alert alert-danger" role="alert">
                                    {{$error}}
                                </div>
                                @endif--}}
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên sản phẩm</label>
                            <input type="text" name="tensanpham" class="form-control" id="exampleInputEmail1" placeholder="nhap ten san pham">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Icon</label>
                            <input type="file" name="hinhanh" class="form-control" id="exampleInputEmail1">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Kho hàng</label>
                            <textarea name="khohang" class="form-control" id="exampleInputPassword1" placeholder="nhap gia san pham"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Giá sản phảm</label>
                            <input type="text" name="giasanpham" class="form-control" id="exampleInputEmail1" placeholder="nhap ten san pham">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Năm sản xuất</label>
                            <textarea name="namsx" class="form-control" id="exampleInputPassword1" placeholder="nhap gia san pham"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Tiêu đề</label>
                            <textarea name="mota" class="form-control" id="exampleInputPassword1" placeholder="nhap gia san pham"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Nôi dung sản phẩm</label>
                            <textarea name="noidung" class="form-control" id="exampleInputPassword1" placeholder="nhap gia san pham"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Giới tính</label>
                        <select name="product_cate" class="form-control input-sm m-bot15">
                        
                                <option value="nam">Nam</option>
                                <option value="nu">Nữ</option>
                        
                        </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Thương hiệu</label>
                       <select name="product_trade" class="form-control input-sm m-bot15">
                        @foreach ($trade_product as $key =>$trade)
                        <option value="{{$trade->Ten_thuong_hieu}}">{{$trade->Ten_thuong_hieu}}</option>
                        @endforeach
                       </select>
                        </div>
                        <button type="submit"  name="themsanpham"class="btn btn-info">Thêm sản phẩm </button>
                    </form>
                    </div>
                </div>
            </section>
    </div>
@endsection