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
                            <a class="btn btn-success pull-right" href="{{ route('add_location') }}"><i class="fa fa-plus" aria-hidden="true"></i> Add Location</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="col-md-12">
            <div class="row">
                
            </div>   
        </div>
    </div>
@endsection
