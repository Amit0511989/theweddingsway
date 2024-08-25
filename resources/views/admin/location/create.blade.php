@extends('layouts.admin.master')

@section('content')
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <p class="alert alert-danger">{{$error}}</p>
                        @endforeach
                    @endif
                    <form id="" action="{{ route('save.location') }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="card ">
                            <div class="card-header ">
                                <h4 class="card-title">Add New Location</h4>
                            </div>
                            <div class="card-body ">
                                <div class="col-md-8">
                                    <div class="form-group has-label">
                                        <label>
                                            City
                                            *
                                        </label>
                                        <input class="form-control" name="city" type="text" required="true" />
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="form-group has-label">
                                    <label for="state" >Select State *</label>
                                    <select class="form-control" id="state" name="state">
                                        <option value="" disabled selected>Select your state</option>
                                        <option value="Andhra Pradesh">Andhra Pradesh</option>
                                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                        <option value="Assam">Assam</option>
                                        <option value="Bihar">Bihar</option>
                                        <option value="Chhattisgarh">Chhattisgarh</option>
                                        <option value="Goa">Goa</option>
                                        <option value="Gujarat">Gujarat</option>
                                        <option value="Haryana">Haryana</option>
                                        <option value="Himachal Pradesh">Himachal Pradesh</option>
                                        <option value="Jharkhand">Jharkhand</option>
                                        <option value="Karnataka">Karnataka</option>
                                        <option value="Kerala">Kerala</option>
                                        <option value="Madhya Pradesh">Madhya Pradesh</option>
                                        <option value="Maharashtra">Maharashtra</option>
                                        <option value="Manipur">Manipur</option>
                                        <option value="Meghalaya">Meghalaya</option>
                                        <option value="Mizoram">Mizoram</option>
                                        <option value="Nagaland">Nagaland</option>
                                        <option value="Odisha">Odisha</option>
                                        <option value="Punjab">Punjab</option>
                                        <option value="Rajasthan">Rajasthan</option>
                                        <option value="Sikkim">Sikkim</option>
                                        <option value="Tamil Nadu">Tamil Nadu</option>
                                        <option value="Telangana">Telangana</option>
                                        <option value="Tripura">Tripura</option>
                                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                                        <option value="Uttarakhand">Uttarakhand</option>
                                        <option value="West Bengal">West Bengal</option>
                                        <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                        <option value="Chandigarh">Chandigarh</option>
                                        <option value="Dadra and Nagar Haveli and Daman and Diu">Dadra and Nagar Haveli and Daman and Diu</option>
                                        <option value="Lakshadweep">Lakshadweep</option>
                                        <option value="Delhi">Delhi</option>
                                        <option value="Puducherry">Puducherry</option>
                                        <option value="Ladakh">Ladakh</option>
                                        <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                    </select>
                                        
                                    </div>
                                </div>
                                <!-- <div class="col-md-8">
                                    <div class="form-group has-label">
                                        <label>
                                            Status
                                        </label>&nbsp;&nbsp;&nbsp;
                                        <input type="checkbox" name="status" class="bootstrap-switch" data-on-label="ON" data-off-label="OFF">
                                    </div>
                                </div> -->
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
