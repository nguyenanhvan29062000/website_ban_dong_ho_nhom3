@inject('Pages', 'App\Http\Controllers\PagesController')
@extends('struct')
@section('title', 'Giới thiệu: website bán đồng hồ chất lượng cao abc.xyz')
@section('addcss')
    <link rel="stylesheet" href="{!!asset('/css/dongho.css')!!}">
@endsection
@section('content')
<div class="pages-body main-container">
    <div class="card shadow-lg">
        <div class="card-body bg-light pt-2 pb-2">
            <form action="" method="POST">
                @csrf
                <input style="display: none" type="text" name="keywords" value="@if(!empty($key)){{$key}}@endif" id="">
                <input style="display: none" type="text" name="gender" value="@if(!empty($gender)){{$gender}}@endif" id="">
                <div class="float-left">
                    <span class="float-left btn" style="font-weight: bold">Giá:</span> 
                    <input min="0" class="form-control float-left w-25 ml-3" type="number" name="from" id="" value="@if(!empty($from)){{$from}}@endif" placeholder="Từ">
                    <input min="0" class="form-control float-left w-25 ml-3" type="number" name="to" value="@if(!empty($to)){{$to}}@endif" id="" placeholder="Đến">
                </div>
                <select class="float-left btn sp_btn_buy" name="hangsx">
                    @if(!empty($hangsx) && $hangsx != 'all')
                        <option value="{{$hangsx}}"></option>
                        <script>
                            $(document).ready(function(){
                                $('option[value="{{$hangsx}}"]').text($('option[value="{{$hangsx}}"]').text());
                                $('option[value="{{$hangsx}}"]')[1].remove();
                            });
                        </script>
                    @endif
                    <option value="all">Hãng sản xuất</option>
                    <option value="Casio">Casio</option>
                    <option value="Rolex">Rolex</option>
                </select>
                <select class="float-left btn sp_btn_buy ml-3" name="year">
                    @if(!empty($year) && $year != 'all')
                        <option value="{{$year}}"></option>
                        <script>
                            $(document).ready(function(){
                                $('option[value="{{$year}}"]').text($('option[value="{{$year}}"]').text());
                                $('option[value="{{$year}}"]')[1].remove();
                            });
                        </script>
                    @endif
                    <option value="all">Năm sản xuất</option>
                    <option value="2020">2020</option>
                 </select>
                <input class="float-right btn btn-secondary" type="submit" value="Lọc sản phẩm">
            </form>
        </div>
        <div class="shadow-sm card-body bg-white">
            @if(!empty($listsanpham))
                @foreach($listsanpham as $value)
                    <div  class="card shadow-sm float-left sp_card position-relative sanpham">
                        <img class="card-body" src="{{asset('/images/'.$value->image)}}" width="100%" alt="">
                        @if ($value->gia_sau_sale != NULL)
                        <div class="position-absolute font-weight-bold" style="top: 10px; left: 10px;">
                            <span>-{{round(100 - 100*($value->gia_sau_sale/$value->gia_sp), 1)}}%</span>
                        </div>
                        @endif
                        <div class="card-footer text-center">
                        <h6 class="card-title font-weight-bold">{{$value->ten_sp}}</h6>
                        @if ($value->gia_sau_sale != NULL)
                            <p class="sp_gia font-weight-normal text-dark">
                            <del>
                                {{$Pages->maskmonney($value->gia_sp)}}₫
                            </del>
                            <span>
                                &emsp;{{$Pages->maskmonney($value->gia_sau_sale)}}₫
                            </span>
                            </p>
                        @else
                            <p class="sp_gia font-weight-normal text-dark">
                            <span>
                                {{$Pages->maskmonney($value->gia_sp)}}₫
                            </span>
                            </p>
                        @endif
                            <button class="sp_btn_buy" id="{{$value->id_sp}}">MUA NGAY</button>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
            @if(!empty($numpage) && $numpage <= 5)
            <ul class="pagination d-flex justify-content-center pt-3">
                @for($i = 1; $i <= $numpage; $i++)
                    @if($i == $page)
                        <li class="page-item active"><a style="background-color: #b78a62; border-color: #b78a62" class="page-link" href="{{url('/home/dongho/'.$gender.'/'.$i)}}">{{$i}}</a></li> 
                    @else
                        <li class="page-item"><a style="color: #b78a62" class="page-link" href="{{url('/home/dongho/'.$gender.'/'.$i)}}">{{$i}}</a></li> 
                    @endif
                @endfor
            @else
                @if(!empty($numpage) && $numpage > 5)
                    @if($page > 1)
                        <li class="page-item"><a class="page-link" href="{{url('/home/dongho/'.$gender.'/'.$page--)}}">{{$page-1}}</a></li>
                    @endif
                    <li class="page-item active"><a style="background-color: #b78a62; border-color: #b78a62"  class="page-link" href="{{url('/home/dongho/'.$gender.'/'.$page)}}">{{$page}}</a></li>
                    <li class="page-item"><a style="color: #b78a62" class="page-link" href="{{url('/home/dongho/'.$gender.'/'.$page++)}}">{{$page+1}}</a></li>
                    ...
                    <li class="page-item"><a style="color: #b78a62" class="page-link" href="{{url('/home/dongho/'.$gender.'/'.$numpage)}}">{{$numpage}}</a></li>
                @endif
            </ul>
            @endif

    </div>
</div>
    {{-- Write code in here! --}}

    
@endsection