@extends('layouts.admin.master')
<style>
    #carouse_setting textarea {
        border: 1px solid #e3e3e3 !important;
    }
</style>
@section('content')
    <div class="row" id="carouse_setting">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <p class="alert alert-danger">{{ $error }}</p>
                        @endforeach
                    @endif
                    <form id="" action="{{ route('admin.carousel_slider_store') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="card ">
                            <div class="card-header ">
                                <h4 class="card-title">Add Slide</h4>
                            </div>
                            <div class="card-body ">
                                <div class="col-md-8">
                                    <div class="form-group has-label">
                                        <label>
                                            Title
                                        </label>
                                        <input class="form-control" name="title" type="text" required="true" />
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group has-label">
                                        <label>
                                            Description
                                        </label>
                                        <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group has-label">
                                        <label>
                                            Description (In Hindi)
                                        </label>
                                        <textarea class="form-control" name="description_in" id="description_in" rows="3"></textarea>
                                    </div>
                                </div>
                                <br>
                                <div class="col-md-8">
                                    <div class="form-group has-label">
                                        <label>
                                            Image
                                        </label>
                                        <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                            <div class="fileinput-new thumbnail">
                                                <img src="{{ url('/assets/img/image_placeholder.jpg') }}" alt="placeholder">
                                            </div>
                                            <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                            <div>
                                                <span class="btn btn-rose btn-round btn-file">
                                                    <span class="fileinput-new">Select image</span>
                                                    <span class="fileinput-exists">Change</span>
                                                    <input type="file" name="image" />
                                                </span>
                                                <a href="#pablo" class="btn btn-danger btn-round fileinput-exists"
                                                    data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group has-label">
                                        <label>
                                            Status
                                        </label>&nbsp;&nbsp;&nbsp;
                                        <input type="checkbox" name="status" class="bootstrap-switch" data-on-label="ON" data-off-label="OFF">
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
