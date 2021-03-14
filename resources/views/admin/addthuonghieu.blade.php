@extends('admin_layout')
@section('morehead')
<!-- Add more head tags in this space -->
@endsection
@section('admin_content') 
    <div class="col-lg-12">
            <section class="panel">
                <header class="panel-heading">
                    Thêm danh mục thương hiệu
                </header>
                <div class="panel-body">
                    <div class="position-center">
                        <form role="form" method="POST" action="{{URL :: to('/save-trademark')}}">
                            @csrf
                            @if (!empty($error))
                                <div class="alert alert-danger" role="alert">
                                    {{$error}}
                                </div>
                                @endif
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên thương hiệu</label>
                            <input type="text" name="tenthuonghieu" class="form-control" id="exampleInputEmail1" placeholder="nhap ten thương hieu">
                        </div>
                        
                        <button type="submit"  name="ok"class="btn btn-info">Thêm</button>
                    </form>
                    </div>
                </div>
            </section>
    </div>
@endsection