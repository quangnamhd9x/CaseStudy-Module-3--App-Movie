@extends('guest.master')

@section('content')
    <div class="video-container iq-main-slider">
        <form action="{{route('movie.showDetail', $movie->id)}}" method="post" enctype="multipart/form-data">
        <video class="video d-block" controls loop>
            <source src="{{$movie->getNameVideo()}}" type="video/mp4">
        </video>
        </form>
    </div>

    <div class="main-content movi">
        <section class="movie-detail container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="trending-info g-border">
                        <form action="{{route('movie.showDetail', $movie->id)}}" method="post" enctype="multipart/form-data">
                        <h1 class="trending-text big-title text-uppercase mt-0">{{$movie->title}}</h1>
                        <ul class="p-0 list-inline d-flex align-items-center movie-content">
                            <li class="text-white"></li>
                        </ul>
                        <div class="d-flex align-items-center series mb-4">
                            <a href="javascript:void();"><img src="images/trending/trending-label.png" class="img-fluid"
                                                              alt=""></a>
                        </div>
                        <p class="trending-dec w-100 mb-0">{{$movie->description}}</p>
                        <ul class="list-inline p-0 mt-4 share-icons music-play-lists">
                            <li><span><i class="ri-add-line"></i></span></li>
                            <li><span><i class="ri-heart-fill"></i></span></li>
                            <li class="share">
                                <span><i class="ri-share-fill"></i></span>
                                <div class="share-box">
                                    <div class="d-flex align-items-center">
                                        <a href="#" class="share-ico"><i class="ri-facebook-fill"></i></a>
                                        <a href="#" class="share-ico"><i class="ri-twitter-fill"></i></a>
                                        <a href="#" class="share-ico"><i class="ri-links-fill"></i></a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <section id="iq-favorites" class="s-margin">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 overflow-hidden">
                        <div class="iq-main-header d-flex align-items-center justify-content-between">
                            <h4 class="main-title">Comments</h4>
                        </div>
                        <div class="favorites-contens">
                            <table class="table" style="border-radius: 15px; width: 500px">
                                <thead class="thead-dark">
                                <tr>
                                    <th style="width: 200px" scope="col">Name</th>
                                    <th scope="col">Comment</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($comments as $comment)
                                <tr>
                                    <td>
                                        <label for="">{{\Illuminate\Support\Facades\Auth::user()->name}}</label>
                                    </td>
                                    <td>
                                        <i style="color: wheat">comment:</i> <b>{{$comment->desc}}</b>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="iq-favorites" class="s-margin">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 overflow-hidden">
                        <div class="iq-main-header d-flex align-items-center justify-content-between">
                            <h4 class="main-title">Add Comment</h4>
                        </div>
                        <div class="favorites-contens">
                            <form method="post" action="{{route('store.comment')}}">
                                @csrf
                            <table class="table" style="border-radius: 15px; width: 600px">
                                <tr>
                                    <td><input name="desc" type="text" style="width: 600px; height: 70px; border-radius: 10px; font-size: 20px">
                                        <button style="border-radius: 10px" class="btn btn-info" type="submit">Submit</button>
                                        <input name="movie_id" value="{{$movies[0]->id}}" hidden>
                                    </td>
                                </tr>
                            </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="iq-favorites" class="s-margin">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 overflow-hidden">
                        <div class="iq-main-header d-flex align-items-center justify-content-between">
                            <h4 class="main-title">More Like This</h4>
                        </div>
                        <div class="favorites-contens">
                            <ul class="favorites-slider list-inline  row p-0 mb-0">
                                @foreach($movies as $key => $movie)
                                    <li class="slide-item">
                                        <a href="{{route('view.detail',$movie->id)}}">
                                            <div class="block-images position-relative">
                                                <div class="img-box">
                                                    <img src="{{$movie->getNameImage()}}" class="img-fluid" alt="">
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
        <section id="iq-upcoming-movie">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 overflow-hidden">
                        <div class="iq-main-header d-flex align-items-center justify-content-between">
                            <h4 class="main-title">Upcoming Movies</h4>
                        </div>
                        <div class="upcoming-contens">
                            <ul class="favorites-slider list-inline row p-0 mb-0">
                                @foreach($movies as $key => $movie)
                                    @if($movie->status == 2)
                                        <li class="slide-item 11111">
                                            <a href="{{route('view.detail',$movie->id)}}">
                                                <div class="block-images position-relative">
                                                    <div class="img-box">
                                                        <img src="{{$movie->getNameImage()}}" class="img-fluid" alt="">
                                                    </div>
                                                    <div class="block-description">
                                                        <h6>{{$movie->title}}</h6>
                                                        <div class="hover-buttons">
                                          <span class="btn btn-hover"><i class="fa fa-play mr-1" aria-hidden="true"></i>
                                          Play Now
                                          </span>
                                                        </div>
                                                    </div>
                                                    <div class="block-social-info">
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection
