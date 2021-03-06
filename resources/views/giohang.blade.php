@inject('Databases', 'App\Http\Controllers\DatabasesController')
@inject('Pages', 'App\Http\Controllers\PagesController')
@extends('struct')
@section('title', 'Giới thiệu: website bán đồng hồ chất lượng cao abc.xyz')
@section('addcss')
    <link rel="stylesheet" href="{!! asset('/css/giohang.css') !!}">
    <style>
        #gh-cart-header{
            font-size: 24px;
            font-weight: bold;
        }
        .fa-caret-left, .fa-caret-right, #ghsoluong{
            cursor: pointer;
            font-size: 30px;
        }
        .fa-caret-left:hover, .fa-caret-right:hover{
            color: #b78a62;
        }
    </style>
@endsection
@section('content')
    <div class="pages-body main-container shadow-lg">
        @if (!empty($giohang)&&!empty($sanpham))
            
                <div class="card" style="background-color: transparent; min-height: 40vh;" >
                    <div class="card-body" style="padding: 0 20px">
                        @for ($i=0; $i < count($giohang); $i++)
                        <div class="row shadow-lg bg-white" style="height: 200px; margin: 15px 0; border-radius: 10px">
                            <div class="col-lg-4 d-flex justify-content-center pl-0 pr-0 ml-0 mr-0">
                                <img style="border-top-left-radius: 10px; border-bottom-left-radius: 10px" height="200px" src="{{asset('/images/'.$sanpham[$i][0]->image)}}" alt="">
                            </div>
                            <div class="col-lg-7 pr-0 pl-0 border-left">
                                <div id="gh-cart-header" class="card-header">{{$sanpham[$i][0]->ten_sp}}</div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-8">Đơn giá: {{$Pages->maskmonney($sanpham[$i][0]->gia_sp)}}₫</div>
                                        <div class="col-sm-4">
                                            <i class="fas fa-caret-left" id={{$giohang[$i]->id_sp}}></i>
                                            &emsp;<span id="ghsoluong" masp={{$giohang[$i]->id_sp}}>{{$giohang[$i]->so_luong}}</span>&emsp;
                                            <i class="fas fa-caret-right" id={{$giohang[$i]->id_sp}}></i>
                                        </div>
                                        <div class="w-100"></div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="button" class="btn btn-outline-warning btn-sm pt-0">Chỉ mua sản phẩm này!</button>
                                </div>
                            </div>
                            <div id={{$giohang[$i]->id_sp}} class="delbtn col-sm-1 d-flex justify-content-center btn-danger" style="border-top-right-radius: 10px; border-bottom-right-radius: 10px; cursor: pointer"><span style="line-height: 200px; font-size: 24px; font-weight: bold">X</span></div>
                        </div>
                        @endfor
                    </div>
                </div>
                <script>
                    $(document).ready(function(){
                        $('.delbtn').click(function(){
                            $.post(
                                "{{url('/home/delgiohang')}}",
                                {
                                    "id": $(this).attr('id'),
                                    "_token": "{{ csrf_token() }}"
                                }
                            );
                            $(this).parent().remove();
                        });
                        $('.fa-caret-left').click(function(){
                            var id = $(this).attr('id');
                            if($('#ghsoluong[masp="'+id+'"]').text() > 1)
                            {
                                $.post(
                                    "{{url('/home/giohang/btnleft')}}",
                                    {
                                        "_token": "{{ csrf_token() }}",
                                        "id": id,
                                        "soluong": parseInt($('#ghsoluong[masp="'+id+'"]').text())
                                    }
                                );
                                $('#ghsoluong[masp="'+id+'"]').text(parseInt($('#ghsoluong[masp="'+id+'"]').text())-1);
                            }
                        });
                        $('.fa-caret-right').click(function(){
                            var id = $(this).attr('id');
                            $.post(
                                "{{url('/home/giohang/btnright')}}",
                                {
                                    "_token": "{{ csrf_token() }}",
                                    "id": id,
                                    "soluong": parseInt($('#ghsoluong[masp="'+id+'"]').text())
                                }
                            );
                            $('#ghsoluong[masp="'+id+'"]').text(parseInt($('#ghsoluong[masp="'+id+'"]').text())+1);
                        });
                    });
                </script>
                <div class="card-footer" style="padding-left: 20px; padding-right: 20px">
                    <button type="button" class="btn btn-warning btn-lg btn-block">MUA NGAY</button>
                </div>
        @else
                <div style="width: 100%; height: 100vh;" class="d-flex justify-content-center">
                    <span>Chưa có sản phẩm nào!</span>
                </div>
        @endif
    </div>
@endsection