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
                                <form action="{{route('movie.showDetail', $movie->id)}}" method="post" enctype="multipart/form-data">
                                <table class="data-tables table movie_table " style="width:100%" >
                                    <thead>
                                    <tr>
                                        <th>Information</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="media align-items-center">
                                                    <div class="iq-movie">
                                                        <a href="javascript:void(0);"><img
                                                                src="{{'/storage/images/' .ltrim($movie->image, '/public/images/')}}"
                                                                class="img-border-radius avatar-40 img-fluid" style="width: auto; height: auto"></a>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>{{$movie->description}}</td>
                                        </tr>
                                    </tbody>
                                </table>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
