@extends('layouts.admin.master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Menus <a class="btn btn-success pull-right" href="{{ url('/admin/add_menu') }}"><i class="fa fa-plus" aria-hidden="true"></i> Add Menu</a></h4> 
                </div>
                <div class="card-body">
                    <div class="toolbar">

                    </div>
                    <table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Route</th>
                                <th>Ordering</th>
                                <th class="disabled-sorting text-right">Actions</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Route</th>
                                <th>Ordering</th>
                                <th class="disabled-sorting text-right">Actions</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($navbars as $navbarItem)
                            <tr>
                                <td>{{ $navbarItem->name ?? '' }}</td>
                                <td>{{ $navbarItem->route ?? '' }} </td>
                                <td>{{ $navbarItem->ordering ?? '' }}</td>
                                <td class="text-right">
                                    <a href="{{ url('/admin/menu_edit', $navbarItem->id) }}" class="btn btn-round btn-warning btn-icon btn-sm edit"><i class="fas fa-edit"></i></a>
                                    <form method="GET" action="{{ route('admin.menu_delete', $navbarItem->id) }}">
                                        @csrf
                                        {{-- <button type="submit" class="btn btn-sm btn-danger show_confirm"><i class="fas fa-times"></i></button> --}}
                                        <a href="#" class="btn btn-round btn-danger btn-icon btn-sm remove show_confirm"><i class="fas fa-times"></i></a>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
