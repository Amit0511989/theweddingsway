@extends('layouts.admin.master')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5 class="title">Payment Settings</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('save_register_payment') }}" method="POST">
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Price</label>
                                <input class="form-control" name="price" value="{{$payment_info->price ?? ''}}" type="number" min="1" step="any" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Reffral type</label>
                                <select class="form-control" name="reffral_type">
                                    <option value="percent" @selected("percent" == $payment_info->reffral_type )>Percent</option>
                                    <option value="Fixed" @selected("Fixed" == $payment_info->reffral_type )>Fixed</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Reffral Amount</label>
                                <input class="form-control" name="reffral_amount" value="{{$payment_info->reffral_amount ?? ''}}" type="text" min="1" step="any" />
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                @if($payment_info)
                                    <button type="submit" class="btn btn-primary">Update</button>
                                @else
                                    <button type="submit" class="btn btn-primary">Save</button>
                                @endif
                            </div>
                        </div>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
