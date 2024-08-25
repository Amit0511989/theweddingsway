@extends('layouts.admin.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-12 text-left">
                            <h6 class="card-title">Carousel Slider Settings</h6>
                        </div>
                        <div class="col-12 text-right">
                            <a class="btn btn-success pull-right" href="{{ url('/admin/carousel_slider_create') }}"><i class="fa fa-plus" aria-hidden="true"></i> Add Slide</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="col-md-12">
            <div class="row">
                @if ($carousel_slider)
                    @foreach ($carousel_slider as $slider)
                    <div class="col-md-4">
                        <p>{{$slider->title}}</p>
                        <img src="{{ asset('/uploads/slider/' . $slider->image ?? '') }}" alt="{{ $slider->image ?? '' }}"
                            width="350" height="150">
                        <p>{{$slider->description}}</p>
                        <a href="{{ url('/admin/carousel_slider_edit', $slider->id) }}" class="btn btn-block btn-info">Edit</a>
                        <form id="SlideDelete" action="{{ url('admin/carousel_slider_delete', $slider->id) }}" method="GET">
                            @csrf
                            <button type="submit" class="btn btn-block btn-danger show_confirm">Delete</button>
                        </form>
                    </div>
                    @endforeach
                @endif
            </div>   
        </div>
    </div>
@endsection
