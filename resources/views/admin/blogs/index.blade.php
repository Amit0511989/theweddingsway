@extends('layouts.admin.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-12 text-left">
                            <h6 class="card-title">Blogs</h6>
                        </div>
                        <div class="col-12 text-right">
                            <a class="btn btn-success pull-right" href="{{ url('/admin/add_blog') }}"><i class="fa fa-plus" aria-hidden="true"></i> Add Blogs</a>
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
                    <table id="blogs-table" class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Title</th>
                                <th>Contant</th>                                
                               <!--  <th>Category</th> -->                                
                                <th class="disabled-sorting text-right">Actions</th>
                            </tr>
                        </thead>

                       
                        
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script>
      

    </script>

@endsection

