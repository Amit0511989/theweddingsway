@extends('layouts.admin.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-12 text-left">
                            <h6 class="card-title">Users</h6>
                        </div>
                        <div class="col-12 text-right">
                            <a class="btn btn-success pull-right" href="{{ url('/admin/add_user') }}"><i class="fa fa-plus" aria-hidden="true"></i> Add User</a>
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
                    <table id="users-table" class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Email</th>                                
                               <!--  <th>Category</th> -->                                
                                <th class="disabled-sorting text-right">Actions</th>
                            </tr>
                        </thead>

                       
                        
                    </table>
                </div>
            </div>
        </div>
    </div>
 

@endsection

