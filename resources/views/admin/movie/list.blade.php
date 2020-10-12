@extends('admin.layout.master')

@section('content')
    <div id="content-page" class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h4 class="card-title">Movie Lists</h4>
                            </div>
                            <div class="iq-card-header-toolbar d-flex align-items-center">
                                <a href="{{route('movie.create')}}" class="btn btn-primary">Add movie</a>
                            </div>
                        </div>
                        <div class="iq-card-body">
                            <div class="table-view">
                                <table class="data-tables table movie_table " style="width:100%" >
                                    <thead>
                                    <tr>
                                        <th>Movie</th>
                                        <th>Quality</th>
                                        <th>Category</th>
                                        <th>Release Year</th>
                                        <th>Language</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($movies as $key => $movie)

                                    <tr>
                                        <td>
                                            <div class="media align-items-center">
                                                <div class="iq-movie">
                                                    <a href="javascript:void(0);"><img
                                                            src="{{'/storage/images/' .ltrim($movie->image, '/public/images/')}}"
                                                            class="img-border-radius avatar-40 img-fluid"></a>
                                                </div>
                                                <div class="media-body text-white text-left ml-3">
                                                    <p class="mb-0">{{$movie->title}}</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>{{$movie->quality->name}}</td>
                                        <td>{{$movie->category->name}}</td>
                                        <td>{{$movie->release_year}}</td>
                                        <td>{{$movie->language->name}}</td>
                                        <td>...</td>
                                        <td>
                                            <div>
                                                <a class="iq-bg-warning" data-placement="top" href="{{route('movie.showDetail', $movie->id)}}">View Detail</a>
                                                <a class="iq-bg-success" data-placement="top" href="{{route('movie.edit', $movie->id)}}">Edit</a>
                                                <a class="iq-bg-primary" onclick="return confirm('Are you sure?')" data-placement="top" href="{{route('movie.destroy', $movie->id)}}">Delete</a>
                                            </div>
                                        </td>
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
