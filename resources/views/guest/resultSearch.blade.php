@extends('guest.master')

@section('content')
{{--    <div class="main-content movi">--}}
{{--        <section id="iq-favorites" class="s-margin">--}}
{{--            <div class="container-fluid">--}}
{{--                <div class="row">--}}
{{--                    <div class="col-sm-12 overflow-hidden">--}}
{{--                        <div class="iq-main-header d-flex align-items-center justify-content-between">--}}
{{--                            <h4 class="main-title">Result Movie</h4>--}}
{{--                            <a href="movie-category.html" class="text-primary">View all</a>--}}
{{--                        </div>--}}
{{--                        <div class="favorites-contens">--}}
{{--                            <ul class="favorites-slider list-inline  row p-0 mb-0">--}}

{{--                                @if($movies)--}}
{{--                                    @foreach($movies as $movie)--}}
{{--                                        <li class="slide-item">--}}
{{--                                            <a href="{{route('view.detail',$movie->id)}}">--}}
{{--                                                <div class="block-images position-relative">--}}
{{--                                                    <div class="img-box">--}}
{{--                                                        <img src="{{'/storage/videos/' . ltrim($movie->image, '/public/videos/')}}" class="img-fluid" alt="">--}}
{{--                                                    </div>--}}
{{--                                                    <div class="block-description">--}}
{{--                                                        <h6>{{$movie->title}}</h6>--}}
{{--                                                        <div class="hover-buttons">--}}
{{--                                          <span class="btn btn-hover">--}}
{{--                                          <i class="fa fa-play mr-1" aria-hidden="true"></i>--}}
{{--                                          Play Now--}}
{{--                                          </span>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="block-social-info">--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </a>--}}
{{--                                        </li>--}}
{{--                                    @endforeach--}}
{{--                                @endif--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}
{{--    </div>--}}
    <div class="main-content">
        <section id="iq-favorites">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 overflow-hidden">
                        <div class="iq-main-header d-flex align-items-center justify-content-between">
                            <h4 class="main-title">All Movie</h4>
                            <a href="movie-category.html" class="text-primary">View all</a>
                        </div>
                        <div class="favorites-contens">
{{--                    @dd($movies)--}}
                            <ul class="favorites-slider list-inline  row p-0 mb-0">
                                @foreach($movies as $key => $movie)
                                    <li class="slide-item">
                                        <a href="{{route('view.detail',$movie->id)}}">
                                            <div class="block-images position-relative">
                                                <div class="img-box">
                                                    <img src="{{asset('storage/images/'. ltrim($movie->image, '/public/images/'))}}" class="img-fluid" alt="">
                                                </div>
                                                <div class="block-description">
                                                    <h6>{{$movie->title}}</h6>
                                                    <div class="hover-buttons">
                                          <span class="btn btn-hover">
                                          <i class="fa fa-play mr-1" aria-hidden="true"></i>
                                          Play Now
                                          </span>
                                                    </div>
                                                </div>
                                                <div class="block-social-info">
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
@endsection
