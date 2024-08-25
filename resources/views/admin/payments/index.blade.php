@extends('layouts.admin.master')

@section('content')
<div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Payments</h4> 
                </div>
                <div class="card-body">
                    <div class="toolbar">

                    </div>
                    <table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Payment By</th>
                                <th>Amount</th>
                                <th>Status</th>
                               <!--  <th class="disabled-sorting text-right">Actions</th> -->
                            </tr>
                        </thead>
                        <tbody>
                            @forelse  ($payments as $payment)
                                <tr>
                                    <td>{{ $payment->name ?? '' }}</td>
                                    <td>{{ $payment->fee ?? '' }} </td>
                                    <td>@if ( $payment->status == 0 )
                                             Not Paid
                                        @else
                                            Paid   
                                        @endif 
                                    </td>
                                   <!--  <td class="text-right">                                        
                                    </td> -->
                                </tr>
                            @empty    
                            <tr><td colspan="4"> No matching records found </td></tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


@endsection