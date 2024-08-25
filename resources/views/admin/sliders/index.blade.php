@extends('layouts.admin.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-12 text-left">
                            <h6 class="card-title">Sliders</h6>
                        </div>
                        <div class="col-12 text-right">
                            <a class="btn btn-success pull-right" href="{{ url('/admin/slide_create') }}"><i class="fa fa-plus" aria-hidden="true"></i> Add Slide</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="col-md-12">
            <div class="row">
                @foreach ($sliders as $slider)
                <div class="col-md-4">
                    <img src="{{ asset('/uploads/slider/' . $slider->photo ?? '') }}" alt="{{ $slider->title }}"
                        width="350" height="150">
                    <a href="{{ url('/admin/slide_edit', $slider->id) }}" class="btn btn-block btn-info">Edit</a>
                    <form id="SlideDelete" action="{{ url('admin/slide_delete', $slider->id) }}" method="GET">
                        @csrf
                        <button type="submit" class="btn btn-block btn-danger show_confirm">Delete</button>
                    </form>
                </div>
                @endforeach
            </div>   
        </div>
    </div>
@endsection
