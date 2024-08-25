@extends('layouts.admin.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-12 text-left">
                            <h6 class="card-title">Roles</h6>
                        </div>
                        <div class="col-12 text-right">
                            <a class="btn btn-success pull-right" href="{{ route('add_role') }}"><i class="fa fa-plus" aria-hidden="true"></i> Add Role</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <table id="role-table" class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>                              
                                <th class="disabled-sorting text-right">Actions</th>
                            </tr>
                        </thead>

                       
                        
                    </table>
                </div>
            </div>
        </div>
    </div>
    

@endsection

