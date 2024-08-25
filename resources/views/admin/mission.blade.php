@extends('layouts.admin.master')
<style>
    #mission_setting textarea {
        border: 1px solid #e3e3e3 !important;
    }
</style>
@section('content')
<div class="row" id="mission_setting">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5 class="title">Mission Settings</h5>
            </div>
            <div class="card-body">
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <p class="alert alert-danger">{{$error}}</p>
                    @endforeach
                @endif
                <form action="{{ route('save_mission_info') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control" name="mission_description" id="mission_description" rows="3">{{$mission_info->description ?? ''}}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Description (In Hindi)</label>
                                <textarea class="form-control" name="description_in" id="description_in" rows="3">{{$mission_info->description_in ?? ''}}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                @if($mission_info)
                                    <button type="submit" class="btn btn-primary">Update</button>
                                @else
                                    <button type="submit" class="btn btn-primary">Save</button>
                                @endif
                            </div>
                        </div>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
