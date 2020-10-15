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
                                    <h4 class="mb-3">Manage Profile</h4>
                                    <form class="mt-4" action="{{route('guest.profile', $user->id)}}" method="post">
                                        <div class="form-group">
                                            <table>
                                                <tr>
                                                    <td>Name: </td>
                                                    <td>{{$user->name}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Email: </td>
                                                    <td>{{$user->email}}</td>
                                                </tr>
                                            </table>
{{--                                            <label>Name</label>--}}
{{--                                            <input type="text" value="{{$user->name}}" class="form-control mb-0" id="exampleInputl2"--}}
{{--                                                   placeholder="Enter Your Name" autocomplete="off" required>--}}
{{--                                        </div>--}}
{{--                                        <div class="form-group">--}}
{{--                                            <label>Date of Birth</label>--}}
{{--                                            <input type="text" class="form-control date-input basicFlatpickr mb-0" placeholder="Select Date" id="exampleInputPassword2"--}}
{{--                                                   required>--}}
                                        </div>
                                        <div class="form-group d-flex flex-md-row flex-column">
                                        </div>
                                        <div class="d-flex">
                                            <a href="{{route('user.editProfile', $user->id)}}" class="btn btn-warning">Edit</a>

                                            <a href="#" class="btn ">Cancel</a>
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
