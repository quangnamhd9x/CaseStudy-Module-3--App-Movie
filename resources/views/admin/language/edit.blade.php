@extends('admin.layout.master')

@section('content')
    <div id="content-page" class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h4 class="card-title">Update Language</h4>
                            </div>
                        </div>
                        <div class="iq-card-body">
                            <form action="{{route('language.edit', $language->id)}}" method="post"
                                  enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-7">
                                        <div class="row">
                                            <div class="col-12 form-group">
                                                <input type="text" name="name" class="form-control"
                                                       placeholder="Name" value="{{$language->name}}">
                                                @error('title')
                                                <div style="color: red">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        <button type="submit" class="btn btn-primary">Update</button>
                                        <a href="{{route('language.index')}}" class="btn btn-danger">cancel</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
