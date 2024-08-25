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
                <form id="" action="{{ url('admin/slide_update', $slider->id) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="card ">
                        <div class="card-header ">
                            <h4 class="card-title">Edit Slider</h4>
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
                            <div class="form-group has-label">
                                <label>
                                    Photo
                                    *
                                </label>
                                <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail">
                                        @if ($slider)
                                            <img src="{{asset('/uploads/slider/'.$slider->photo ?? '')}}"
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
                                            <input type="file" name="photo" />
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
