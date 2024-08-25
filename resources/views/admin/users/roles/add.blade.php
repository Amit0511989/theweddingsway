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
                    <form id="add_role" action="{{ route('save_role') }}" method="POST">
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
                                    <label class="col-md-3 col-form-label">Status</label>
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <select name="status" class="form-control">
                                                <option value="1">Active</option>
                                                <option value="0">Deactive</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
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
