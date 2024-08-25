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
                <form id="add_user" action="{{ route('admin.menu_update', $menu->id) }}" method="POST">
                    @csrf
                    <div class="card ">
                        <div class="card-header ">
                            <h4 class="card-title">Edit User</h4>
                        </div>
                        <div class="card-body ">
                            <div class="row">
                                <label class="col-md-3 col-form-label">Name</label>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" value="{{$menu->name}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-md-3 col-form-label">Route</label>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <input type="text" name="route" class="form-control" value="{{$menu->route}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <label class="col-md-3 col-form-label">Ordering</label>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <input type="number" name="order" class="form-control" value="{{$menu->ordering}}">
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
