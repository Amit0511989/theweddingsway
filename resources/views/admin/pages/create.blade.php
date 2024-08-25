@extends('layouts.admin.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <p class="alert alert-danger">{{$error}}</p>
                        @endforeach
                    @endif
                    <form id="add_page" action="{{ route('admin.save_page') }}" method="POST">
                        @csrf
                        <div class="card ">
                            <div class="card-header ">
                                <h4 class="card-title">Add New Page</h4>
                            </div>
                            <div class="card-body ">
                                <div class="row">
                                    <label class="col-md-3 col-form-label">Title</label>
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <input type="text" name="title" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-3 col-form-label">Hindi Title</label>
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <input type="text" name="title_in" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-3 col-form-label">Slug</label>
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <input type="text" name="slug" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-3 col-form-label">Content</label>
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <textarea name="body" id="body" class="textarea"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-3 col-form-label">Hindi Content</label>
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <textarea name="body_in" id="body" class="textarea_in"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <label class="col-md-3 col-form-label">Status</label>
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <input type="checkbox" name="status" class="bootstrap-switch" data-on-label="ON" data-off-label="OFF" checked>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-right">
                                <button type="submit" class="pull-right btn btn-primary">Add</button>
                                <br><br><br>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
