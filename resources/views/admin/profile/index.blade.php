@extends('layouts.admin.master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="title">Edit Profile</h5>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('profile_save', $admin->id) }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row justify-content-center">
                            <div class="col-sm-4">
                                <div class="author">
                                    <div class="fileinput text-center fileinput-new" data-provides="fileinput">
                                        <div class="fileinput-new thumbnail img-circle " id="profile_pic">
                                            @if ($admin)
                                            <i class="fa fa-times"></i>
                                            <img src="{{asset('/uploads/profile/'.$admin->photo ?? '')}}"
                                                alt="profile_photo">
                                            @else
                                                <img src="{{asset('assets/img/placeholder.jpg')}}" alt="placeholder">
                                            @endif
                                        </div>
                                        <div class="fileinput-preview fileinput-exists thumbnail img-circle" style="">
                                        </div>
                                        <div>
                                            <span class="btn btn-round btn-rose btn-file">
                                                <span class="fileinput-new">Add Photo</span>
                                                <span class="fileinput-exists">Change</span>
                                                <input type="hidden" value="0" name="remove_pic" class="remove">
                                                {{-- <input type="hidden" value="" name="..."> --}}
                                                <input type="file" name="photo" class="profile_pic"></span>
                                            <br>
                                            <a href="#pablo" class="btn btn-danger btn-round fileinput-exists"
                                                data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                        </div>
                                    </div>
                                    <a href="#">
                                        <h5 class="title">{{ $admin->name }}</h5>
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="input-group form-control-lg has-danger">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="now-ui-icons text_caps-small"></i>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control" name="first_name" placeholder="First Name"
                                        value="{{$admin->first_name ?? ''}}"><label id="email-error" class="error" for="first_name"
                                        style="display: inline-block;">First Name</label>
                                </div>
                                <div class="input-group form-control-lg has-danger">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="now-ui-icons text_caps-small"></i>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control" name="last_name" placeholder="Last Name"
                                        value="{{$admin->last_name ?? ''}}"><label id="email-error" class="error" for="last_name"
                                        style="display: inline-block;">Last Name</label>
                                </div>

                            </div>
                            <div class="col-lg-10 mt-3">
                                <div class="input-group form-control-lg has-danger">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="now-ui-icons text_caps-small"></i>
                                        </div>
                                    </div>
                                    <input type="text" placeholder="City" class="form-control"
                                        name="city" value="{{$admin->city ?? ''}}"><label id="email-error" class="error" for="city"
                                        style="display: inline-block;">City</label>
                                </div>
                                <div class="input-group form-control-lg has-danger">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="now-ui-icons text_caps-small"></i>
                                        </div>
                                    </div>
                                    <input type="text" placeholder="Country" class="form-control"
                                        name="country" value="{{$admin->country ?? ''}}"><label id="email-error" class="error" for="country"
                                        style="display: inline-block;">Country</label>
                                </div>
                                <div class="input-group form-control-lg has-danger">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i class="now-ui-icons text_caps-small"></i>
                                        </div>
                                    </div>
                                    <input type="text" placeholder="Postal Code" class="form-control"
                                        name="postal_code" value="{{$admin->postal_code ?? ''}}"><label id="email-error" class="error" for="postal_code"
                                        style="display: inline-block;">Postal Code</label>
                                </div>
                            </div>
                            <div class="col-lg-10 text-left">
                                <br>
                                <button type="submit" class="pull-left btn btn-primary">Update</button>
                                <br><br><br>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
