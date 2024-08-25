@extends('layouts.admin.master')

@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    {{-- @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                    @endif --}}
                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <p class="alert alert-danger">{{$error}}</p>
                        @endforeach
                    @endif
                    <form id="add_user" action="{{ route('save_user') }}" method="POST">
                        @csrf
                        <div class="card ">
                            <div class="card-header ">
                                <h4 class="card-title">Add New User</h4>
                            </div>
                            <div class="card-body ">
                                <div class="row">
                                    <label class="col-md-3 col-form-label">Name</label>
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-3 col-form-label">Email</label>
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-3 col-form-label">Password</label>
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <input type="password" name="password" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-3 col-form-label">Mobile No.</label>
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <input type="text" name="mobile" class="form-control">
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
                                            <option value="{{$role['id']}}">{{$role['name']}}</option>
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
                                            <option value="{{$location['id']}}">{{$location['city']}}( {{$location['state']}} )</option>
                                        @endforeach
                                                                        </select>
                                        </div>
                                </div>
                                </div>
                                <!-- <div class="row">
                                    <label class="col-md-3 col-form-label">Address</label>
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <input type="text" name="address" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-3 col-form-label">Pin Code</label>
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <input type="text" name="pincode" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-3 col-form-label">State</label>
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <input type="text" name="state" class="form-control">
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                            <div class="card-footer text-right">
                                <button type="submit" class="pull-left btn btn-primary">Add</button>
                                <br><br><br>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
