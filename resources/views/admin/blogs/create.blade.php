@extends('layouts.admin.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    {{-- @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                    @endif --}}
                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <p class="alert alert-danger">{{$error}}</p>
                        @endforeach
                    @endif
                    <form id="add_user" action="{{ route('save_blog') }}" method="POST">
                        @csrf
                        <div class="card ">
                            <div class="card-header ">
                                <h4 class="card-title">Add New Blogs</h4>
                            </div>
                            <div class="card-body ">
                                <div class="row">
                                    <label class="col-md-3 col-form-label">Title</label>
                                    <div class="col-md-9">
                                        <div class="form-group">
                                            <input type="text" name="title" class="form-control">
                                        </div>
                                    

                                    <div class="form-group">
        <label for="editor">Content</label>
        <textarea id="editor" name="content" rows="10">{{ old('content') }}</textarea>
        
        @if ($errors->has('content'))
            <div class="text-danger">
                {{ $errors->first('content') }}
            </div>
        @endif
    </div>


    <div class="form-group has-label">
                                    <label for="state">Select User *</label>
                                    <select class="form-control" id="state" name="user_id" fdprocessedid="kpfjrf">
                                    <option value="" disabled="" selected="">Select your User</option> 
                                    @foreach($users as $value)   
                                    <option value="{{$value->id}}">{{$value->name}}</option>
                                     @endforeach
                                    </select>
                                        
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
