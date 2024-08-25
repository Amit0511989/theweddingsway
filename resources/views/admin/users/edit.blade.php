@extends('layouts.admin.master')

@section('content')
<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <p class="alert alert-danger">{{$error}}</p>
                    @endforeach
                @endif
                <form id="add_user" action="{{ route('user_update', $user->id) }}" method="POST">
                    @csrf
                    <div class="card ">
                        <div class="card-header ">
                            <h4 class="card-title">Edit User</h4>
                        </div>
                        <div class="card-body ">
                            <div class="row">
                                <label class="col-md-3 col-form-label">Username</label>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" value="{{$user->name}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-md-3 col-form-label">Email</label>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" value="{{$user->email}}">
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="row">
                                <label class="col-md-3 col-form-label">Current Password</label>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <input type="password" name="password" class="form-control" value="">
                                    </div>
                                </div>
                            </div> -->
                            <div class="row">
                                <label class="col-md-3 col-form-label">New Password</label>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <input type="password" name="new_password" class="form-control" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-md-3 col-form-label">Confirm New Password</label>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <input type="password" name="confirm_new_password" class="form-control" value="">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-md-3 col-form-label">Category</label>
                                <div class="col-md-9">
                                        <div class="form-group">
                                <select name="role" id="category" class="form-light-select form-control ">
                                        <option value="0" >Select Category</option>
                                        @foreach($roles as $role)
                                            <option value="{{$role['id']}}" <?php if($role['id'] == $user->role){ echo 'selected';} ?>>{{$role['name']}}</option>
                                        @endforeach                               
                                                                            </select>
                                        </div>
                                </div>
                                </div>
                                <div class="row">
                                <label class="col-md-3 col-form-label">Location</label>
                                <div class="col-md-9">
                                        <div class="form-group">
                                        <select class="form-light-select form-control" name="location_id" >
                                        <option value="0" >Choose Location</option>
                                        @foreach($locations as $location)
                                            <option value="{{$location['id']}}" <?php if($location['id'] == $user->location_id){ echo 'selected';} ?>>{{$location['city']}}( {{$location['state']}} )</option>
                                        @endforeach
                                                                        </select>
                                        </div>
                                </div>
                                </div>
                            
                            
                        </div>
                        <div class="card-footer text-right">
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
