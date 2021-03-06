@extends('guest.master')

@section('content')
    <section class="m-profile manage-p">
        <div class="container h-100">
            <div class="row align-items-center justify-content-center h-100">
                <div class="col-lg-10">
                    <div class="sign-user_card">
                        <div class="row">
                            <div class="col-lg-2">
                                <div class="upload_profile d-inline-block">
                                    <img src="{{asset('/index_resource/images/user/user.png')}}" class="profile-pic rounded-circle img-fluid" alt="user">
                                </div>
                            </div>
                            <div class="col-lg-10 device-margin">
                                <div class="profile-from">
                                    <h4 class="mb-3">Edit Profile</h4>
                                    <form class="mt-4" action="{{route('user.editProfile', $user->id)}}" method="post">
                                        @csrf
                                        <div class="form-group">
                                            <table>
                                                <tr>
                                                    <td>Name: </td>
                                                    <td>
                                                        <input type="text" name="name" class="form-control"
                                                               placeholder="Name" value="{{$user->name}}">
                                                        @error('title')
                                                        <div style="color: red">{{ $message }}</div>
                                                        @enderror
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Email: </td>
                                                    <td>
                                                        <input type="text" name="email" class="form-control"
                                                               placeholder="Email" value="{{$user->email}}">
                                                        @error('title')
                                                        <div style="color: red">{{ $message }}</div>
                                                        @enderror
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                        <div class="form-group d-flex flex-md-row flex-column">
                                        </div>
                                        <div class="d-flex">
                                            <button type="submit" class="btn btn-warning">OK</button>
                                            <a href="{{route('view.index')}}" class="btn ">Cancel</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
