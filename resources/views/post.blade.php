@extends('layout')
@section('main_content')
    <div id="second" >
        <div class="container">
            <div class="row">
                <div class="col">
                    <img src="{{ $post["user"]["profile_image"]["small"] }}">
                </div>
                <div class="col">
                    <a href="{{ route('addToFavourite', ["id" => $post["id"], "url" => $post["urls"]["regular"]]) }}">
                    <img src="{{asset('img/like.png')}}">
                    </a>
                    <i class="fa-regular fa-arrow-down-to-line"></i><button style="background: #FFF200; color: black" class="btn"><i class="fa-solid fa-download"></i>&nbsp;Dowload</button>
                </div>
            </div>
        </div>
        <div class="container container-lg">
            <img class=" container-sm" src="{{ $post["urls"]["full"] }}">
        </div>
        <div class="product-device shadow-sm d-none d-md-block"></div>
        <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
    </div>
    </div>
@endsection
