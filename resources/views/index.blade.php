@extends('layout')
@section('main_content')
{{--    <div id="first" class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">--}}
<div id="first">
    <div class="col-sm-5  container container-lg">
        <form action="{{ route("search") }}" method="get" class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Поиск" aria-label="Поиск" name="search">
            <button class="btn btn-dark" type="submit">Поиск</button>
        </form>
    </div>
    <div class="product-device shadow-sm d-none d-md-block"></div>
    <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
</div>

{{--начало контента--}}

<section class="container">
        <section class="p-4 text-center w-100">
            <!-- Gallery -->
            <div class="row">
                @if(!empty($posts["results"]))
                    @foreach($posts["results"] as $post)
                        <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
                            <a href="{{ route("post", $post["id"]) }}">
                                <img src="{{ $post["urls"]["small"] }}" class="w-100 shadow-1-strong rounded mb-4" alt="Boat on Calm Water">
                            </a>
                        </div>
                    @endforeach
                @else
                    <p>no results</p>
                @endif
            </div>
            <!-- Gallery -->
        </section>
{{--        <div class="p-4 text-center border-top mobile-hidden">--}}
{{--            <a class="btn btn-link px-3" data-mdb-toggle="collapse" href="#example1" role="button" aria-expanded="false" aria-controls="example1" data-ripple-color="hsl(0, 0%, 67%)">--}}
{{--                <i class="fas fa-code me-md-2"></i>--}}
{{--                <span class="d-none d-md-inline-block">--}}
{{--          Show code--}}
{{--        </span>--}}
{{--            </a>--}}


{{--            <a class="btn btn-link px-3 " data-ripple-color="hsl(0, 0%, 67%)">--}}
{{--                <i class="fas fa-file-code me-md-2 pe-none"></i>--}}
{{--                <span class="d-none d-md-inline-block export-to-snippet pe-none">--}}
{{--            Edit in sandbox--}}
{{--          </span>--}}
{{--            </a>--}}

{{--        </div>--}}


    </div>
</section>
</section>
@endsection

