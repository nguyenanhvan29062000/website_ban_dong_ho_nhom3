@inject('Pages', 'App\Http\Controllers\PagesController')
@extends('struct')
@section('title', 'Giới thiệu: website bán đồng hồ chất lượng cao abc.xyz')
@section('content')
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
@endsection