@extends('layouts.app')

@section('content')
<section class="breadcrumbs-page">
    <div class="container">
        <h1>Register Vendor</h1>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href=""><i class="fa fa-home"></i></a></li>
                <li class="breadcrumb-item active" aria-current="page">Register Vendor</li>
            </ol>
        </nav>
    </div>
</section>

<main id="body-content">

    <!-- login Style Main Start -->

    <section class="wide-tb-60">
        <div class="container">
            <div class="row login-section">
                <div class="offset-lg-3 p-0" id="login-image">
                    <!--<img src="https://wedjio.com/front/images/bg_vendor_login.jpeg" class="" alt="">                    -->
                </div>
                <div class="col-md-12 col-lg-6 ">
                    <div class="p-4">
                        <div class="section-title my-4 text-center">
                                                        <h3>Sign up with your email</h3>
                            <p>Already have an account? <a href="#">Login</a></p>                       
                        </div> 
                        
                        <div class="login-form mb-5">

                            <form class="my-5" method="post" action="{{ route('register') }}" id="register-form" data-gtm-form-interact-id="0">
                            <div class="form-group"> @csrf    <input class="form-control" placeholder="Full Name" type="text" name="name" id="name" value="">
                                                                    </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Email ID" type="email" name="email" id="email" value="" data-gtm-form-interact-field-id="0">
                                                                    </div>
                                <div class="form-group">

                                    <div class="password-eye">
                                        <input class="form-control" placeholder="Password" type="password" name="password" id="password" value="" data-gtm-form-interact-field-id="1">
                                        <span data-toggle="#password" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                    </div>
                                                                    </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Mobile" type="number" name="mobile" id="mobile" value="">
                                                                    </div>

                                <div class="form-group">
                                    
                                    <select name="role" id="category" class="form-light-select form-control ">
                                        <option value="0" >Select Category</option>
                                        @foreach($roles as $role)
                                            <option value="{{$role['id']}}">{{$role['name']}}</option>
                                        @endforeach                               
                                                                            </select> </div>
                                <div class="form-group">
                                                                        <select class="form-light-select form-control" name="location_id" >
                                        <option value="0" >Choose Location</option>
                                        @foreach($locations as $location)
                                            <option value="{{$location['id']}}">{{$location['city']}}( {{$location['state']}} )</option>
                                        @endforeach
                                                                        </select>
                                           
                                    
                                                                    </div>

                                <div class="form-group">
                                    <p>By clicking 'Sign up', I agree to wedjio’s Privacy Policy and Terms of Use</p>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-default btn-block btn-rounded">Sign Up</button>
                                </div>
                            </form>
                        </div>

                        <!-- <div class="mt-4 text-center">
                            <h3>Are you a Bride/Groom</h3>
                            <a href="https://wedjio.com/login" class="btn btn-success btn-rounded ">User Login</a>                     
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- login Style Main End -->

</main>
@endsection
