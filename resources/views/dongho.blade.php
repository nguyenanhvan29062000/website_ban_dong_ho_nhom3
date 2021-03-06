@extends('struct')
@section('title', 'Giới thiệu: website bán đồng hồ chất lượng cao abc.xyz')
@section('content')
    {{-- Write code in here! --}}
    <button type="button" class="btn btn-primary" id="myBtn">Show Toast</button>
    
    <script>
        $(document).ready(function(){
          $("#myBtn").click(function(){
            $('.toast').toast('show');
          });
        });
        </script>
        
@endsection