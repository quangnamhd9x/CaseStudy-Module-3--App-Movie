@extends('admin.layout.master')

@section('content')
    <div id="content-page" class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h4 class="card-title">Add Movie</h4>
                            </div>

                        </div>
                        <div class="iq-card-body">
                            <form action="{{route('movie.showDetail', $movie->id)}}" method="post"
                                  enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-7">
                                        <div class="row">
                                            <div class="col-12 form-group">
                                                <input type="text" name="title" class="form-control"
                                                       placeholder="Title" value="{{$movie->title}}">
                                                @error('title')
                                                <div style="color: red">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div style="height: auto" class="col-12 form_gallery form-group">
                                                <label id="gallery2" for="form_gallery-upload">Upload Image</label>
                                                <input data-name="#gallery2" name="image" id="form_gallery-upload"
                                                       class="form_gallery-upload"
                                                       type="file" accept=".png, .jpg, .jpeg" value="">
                                                @error('image')
                                                <div style="color: red">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div style="height: auto" class="col-md-6 form-group">
                                                <select name="category_id" class="form-control">
                                                    @foreach($categories as $key => $category)
                                                        <option
                                                            @if($category->id == $movie->category_id)
                                                            selected
                                                            @endif
                                                            value="{{$category->id}}">{{$category->name}}</option>
                                                    @endforeach
                                                </select>
                                                @error('category_id')
                                                <div style="color: red">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div style="height: auto" class="col-sm-6 form-group">
                                                <select name="quality_id" class="form-control"
                                                        id="exampleFormControlSelect2">
                                                    @foreach($qualities as $key =>$quality)
                                                        <option
                                                            @if($quality->id == $movie->quality_id)
                                                            selected
                                                            @endif
                                                            value="{{$quality->id}}">{{$quality->name}}</option>
                                                    @endforeach
                                                </select>
                                                @error('quality_id')
                                                <div style="color: red">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-12 form-group">
                                       <textarea id="text" name="description" rows="5" class="form-control"
                                                 placeholder="Description">{{$movie->description}}</textarea>
                                                @error('description')
                                                <div style="color: red">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="d-block position-relative">
                                            <div class="form_video-upload">
                                                <input value="{{$movie->video}}" name="video" type="file"
                                                       accept="video/mp4,video/x-m4v,video/*"
                                                       multiple>
                                                <p>Upload video</p>
                                                @error('video')
                                                <div style="color: red">{{ $message }}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-6 form-group">
                                        <input type="text" class="form-control" value="{{$movie->release_year}}"
                                               name="release_year"
                                               placeholder="Release year">
                                        @error('release_year')
                                        <div style="color: red">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-sm-6 form-group">
                                        <select name="language_id" class="form-control" id="exampleFormControlSelect3">
                                            @foreach($languages as $key => $language)
                                                <option
                                                    @if($language->id == $movie->language_id)
                                                    selected
                                                    @endif
                                                    value="{{$language->id}}">{{$language->name}}</option>
                                            @endforeach
                                        </select>
                                        @error('language_id')
                                        <div style="color: red">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="col-12 form-group ">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                        <a href="{{route('movie.list')}}" class="btn btn-danger">cancel</a>
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
