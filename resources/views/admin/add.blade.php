@extends('admin_layout')
@section('morehead')
<!-- Add more head tags in this space -->
@endsection
@section('admin_content') 
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Thêm danh mục sản phảm
                </header>
                <div class="panel-body">
                    <div class="position-center">
                        <form role="form" method="POST" action="{{URL :: to('/save-category-product')}}">
                            @csrf
                            @if (!empty($error))
                                <div class="alert alert-danger" role="alert">
                                    {{$error}}
                                </div>
                                @endif
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên danh mục</label>
                            <input type="text" name="tendanhmuc" class="form-control" id="exampleInputEmail1" placeholder="nhap ten san pham">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Mô tả</label>
                            <textarea name="mota" class="form-control" id="exampleInputPassword1" placeholder="nhap gia san pham"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Hiển thị</label>
                       <select name="tinhtrang" class="form-control input-sm m-bot15">
                           <option value="0">Ẩn </option>
                           <option value="1">Hiển thị</option>
                       </select>
                        </div>

                        <button type="submit"  name="ok"class="btn btn-info">Thêm</button>
                    </form>
                    </div>
                </div>
            </section>
    </div>
@endsection