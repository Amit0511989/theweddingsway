@extends('layouts.admin.master')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5 class="title">Edit Logo Details</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('save_logo_details') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Logo title</label>
                                <input type="text" name="logo_title" class="form-control" placeholder="Title of logo.." value="{{$logo_detail->title ?? ''}}">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Logo</label>
                                <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                    <div class="fileinput-new thumbnail">
                                        @if($logo_detail)
                                            <img src="{{asset('/uploads/logo/'.$logo_detail->logo ?? '')}}" alt="profile_image">
                                        @else
                                            {{-- <img src="../assets/img/image_placeholder.jpg" alt="..."> --}}
                                            <img src="{{asset('images/no_image.png')}}" alt="...">
                                        @endif
                                        
                                    </div>
                                    <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                    <div>
                                        <span class="btn btn-rose btn-round btn-file">
                                            @if($logo_detail)
                                                <span class="fileinput-new">Change image</span>
                                            @else
                                                <span class="fileinput-new">Add Logo</span>
                                            @endif
                                            <span class="fileinput-exists">Change</span>
                                            <input type="file" name="logo" />
                                        </span>
                                        <a href="#pablo" class="btn btn-danger btn-round fileinput-exists"
                                            data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                @if($logo_detail)
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
