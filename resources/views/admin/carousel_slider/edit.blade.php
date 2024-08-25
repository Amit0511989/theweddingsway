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
                        <p class="alert alert-danger">{{$error}}</p>
                    @endforeach
                @endif
                <form id="" action="{{ url('admin/carousel_slider_update', $slider->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="card ">
                        <div class="card-header ">
                            <h4 class="card-title">Edit Carousel Slider</h4>
                        </div>
                        <div class="card-body ">
                            <div class="col-md-8">
                                <div class="form-group has-label">
                                    <label>
                                        Title
                                        *
                                    </label>
                                    <input class="form-control" name="title" type="text" value="{{ $slider->title ?? '' }}" required="true" />
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group has-label">
                                    <label>
                                        Description
                                        *
                                    </label>
                                    <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3">{{ $slider->description ?? '' }}</textarea>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group has-label">
                                    <label>
                                        Description (In Hindi)
                                    </label>
                                    <textarea class="form-control" name="description_in" id="exampleFormControlTextarea1" rows="3">{{ $slider->description_in ?? '' }}</textarea>
                                </div>
                            </div>
                            <br>
                            <div class="form-group has-label">
                                <label>
                                    Image
                                    *
                                </label>
                                <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail">
                                        @if ($slider)
                                            <img src="{{asset('/uploads/slider/'.$slider->image ?? '')}}"
                                                alt="slider_image">
                                        @else
                                            <img src="../assets/img/image_placeholder.jpg" alt="placeholder">
                                        @endif
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                    <div>
                                        <span class="btn btn-rose btn-round btn-file">
                                            @if ($slider)
                                                <span class="fileinput-new">Change image</span>
                                            @else
                                                <span class="fileinput-new">Add Slide</span>
                                            @endif
                                            <span class="fileinput-exists">Change</span>
                                            <input type="file" name="image" />
                                        </span>
                                        <a href="#pablo" class="btn btn-danger btn-round fileinput-exists"
                                            data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group has-label">
                                    <label>
                                        Status
                                    </label>&nbsp;&nbsp;&nbsp;
                                    <input type="checkbox" name="status" class="bootstrap-switch" data-on-label="ON" data-off-label="OFF" {{ ($slider->status == 1) ? ' checked' : '' }} >
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <button type="submit" class="pull-right btn btn-primary">Update</button>
                            <br><br><br>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
