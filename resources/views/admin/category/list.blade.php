@extends('admin.layout.master')

@section('content')
    <div id="content-page" class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h4 class="card-title">Category Lists</h4>
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
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($categories as $key => $categories)
                                        <tr>
                                            <td>{{++$key}}</td>
                                            <td>{{$categories->name}}</td>
                                            <td>
                                                <div>
                                                    <a class="iq-bg-success" data-placement="top" href="{{route('category.edit', $categories->id)}}">Edit</a>
                                                    <a class="iq-bg-primary" onclick="return confirm('Are you sure?')" data-placement="top" href="{{route('category.destroy', $categories->id)}}">Delete</a>
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
