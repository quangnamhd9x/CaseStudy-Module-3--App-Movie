@extends('guest.master')

@section('content')
    <div id="content-page" class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h4 class="card-title">Movie Lists</h4>
                            </div>>
                        </div>
                        <div class="iq-card-body">
                            <div class="table-view">
                                <table class="data-tables table movie_table " style="width:100%" >
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Movie</th>
                                        <th>Quality</th>
                                        <th>Category</th>
                                        <th>Release Year</th>
                                        <th>Language</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($movies as $key => $movie)
                                        <tr>
                                            <td>{{++$key}}</td>
                                            <td style="width: 350px">
                                                <div class="media align-items-center">
                                                    <div class="iq-movie">
                                                        <a href="{{route('view.detail',$movie->id)}}"><img
                                                                src="{{'/storage/images/' .ltrim($movie->image, '/public/images/')}}"
                                                                class="img-border-radius avatar-40 img-fluid">
                                                    </div>
                                                    <div class="media-body text-white text-left ml-3">
                                                        <p class="mb-0">{{$movie->title}}</p></a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>{{$movie->quality->name}}</td>
                                            <td>{{$movie->category->name}}</td>
                                            <td>{{$movie->release_year}}</td>
                                            <td>{{$movie->language->name}}</td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="7">No Data</td>
                                        </tr>
                                    @endforelse

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
