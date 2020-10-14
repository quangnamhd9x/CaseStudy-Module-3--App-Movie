@extends('admin.layout.master')

@section('content')
    <div id="content-page" class="content-page">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                            <div class="iq-header-title">
                                <h4 class="card-title">Add User</h4>
                            </div>

                        </div>
                        <div class="iq-card-body">
                            <form action="{{route('user.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-7">
                                        <div class="row">
                                            <div class="col-12 form-group">
                                                <input type="text" name="name" class="form-control"
                                                       placeholder="Name" value="{{ old('name') }}">
                                                @error('title')
                                                <div style="color: red">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-12 form-group">
                                                <input type="text" name="email" class="form-control"
                                                       placeholder="Email" value="{{ old('email') }}">
                                                @error('title')
                                                <div style="color: red">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-12 form-group">
                                                <input type="text" name="password" class="form-control"
                                                       placeholder="Password" value="{{ old('name') }}">
                                                @error('title')
                                                <div style="color: red">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="col-12 form-group">
                                                <select name="role_id" class="form-control" id="exampleFormControlSelect3">
                                                    @foreach($roles as $key => $role)
                                                        <option value="{{$role->id}}">{{$role->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                    <div class="col-12 form-group ">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <button type="reset" class="btn btn-danger">cancel</button>
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
