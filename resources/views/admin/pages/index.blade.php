@extends('layouts.admin.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Pages <a class="btn btn-success pull-right" href="{{ url('/admin/add_page') }}"><i class="fa fa-plus" aria-hidden="true"></i> Add Page</a></h4> 
                </div>
                <div class="card-body">
                    <div class="toolbar">

                    </div>
                    <table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>Slug</th>
                                <th class="disabled-sorting text-right">Actions</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Title</th>
                                <th>Slug</th>
                                <th class="disabled-sorting text-right">Actions</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @if ($pages)
                                @foreach ($pages as $page)
                                <tr>
                                    <td>{{ $page->title ?? '' }}</td>
                                    <td>{{ $page->slug ?? '' }} </td>
                                    <td class="text-right">
                                        <a href="{{ url('/admin/page_edit', $page->id) }}" class="btn btn-round btn-warning btn-icon btn-sm edit"><i class="fas fa-edit"></i></a>
                                        {{-- <form method="GET" action="{{ route('page_delete', $page->id) }}">
                                            @csrf
                                            <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove show_confirm"><i class="fas fa-times"></i></a>
                                        </form> --}}
                                    </td>
                                </tr>
                                @endforeach
                            @endif  
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
