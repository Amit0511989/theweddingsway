@extends('layouts.app')

@section('content')

<div class="vendor-profile-wrap">            
        <div class="container">
            <div class="row">
                                <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                    <div class="vendor-profile-banner ">
                        <img src="https://wedjio.com/storage/upload/vendor/featured/Screenshot 1.png" class="img-responsive" alt="imag">
                    </div>
                    <div class="vendor-profile-info">
                        <div class="vendor-profile-content profile-single">
                            <div class="title">
                                <h2>{{ $user->name }}</h2>
                                <h4 class="tags">{{ $user->role_detail->name }}</h4>
                            </div>
                            <div class="content">
                                <p><i class="fa fa-map-marker"></i>  {{ $user->location->city}}({{ $user->location->state}}) India</p>
                            <!--    <div class="reviews">-->
                            <!--    <span class="badge"><i class="fa fa-star-half-full"></i> 0</span> Ratings-->
                            <!--</div>-->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                    <div class="send-message">
                        <div class="card-shadow pos-rel">
                                                        <div class="card-shadow-body">
                                <ul class="nav nav-pills theme-tabbing nav-fill" id="bpills-ta" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-send-tab" data-toggle="pill" href="#pills-send" role="tab" aria-controls="pills-send" aria-selected="false"><i class="fa fa-mobile"></i> Send Message</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-view-tab" data-toggle="pill" href="#pills-view" role="tab" aria-controls="pills-view" aria-selected="true"><i class="fa fa-list"></i> View Contact</a>
                                    </li>
                                </ul>
                                <div class="tab-content theme-tabbing" id="pills-tabContent">
                                    <div class="tab-pane fade" id="pills-send" role="tabpanel" aria-labelledby="pills-send-tab">
                                        <div class="send-message-message"></div>
                                    
                                        <div class="send-message-form">
                                            <form data-action="https://wedjio.com/query/send-message" method="post" class="query">
                                                <div class="form-group row">
                                                    <div class="col-md-6">
                                                        <input type="text" name="name" id="name" placeholder="Full Name" value="" class="form-control">
                                                        <span class="text-danger error" id="name_error"></span>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="number" name="number" id="number" placeholder="Phone Number" value="" class="form-control">
                                                        <span class="text-danger error" id="number_error"></span>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div class="col-md-6">
                                                        <select name="budget" id="budget" class="form-light-select theme-combo select2-hidden-accessible" data-select2-id="select2-data-budget" tabindex="-1" aria-hidden="true">
                                                            <option value="0" data-select2-id="select2-data-2-n4vj">Select Budget</option>
                                                            <option value="0-5000">0 - 5000</option>
                                                            <option value="5000-10000">5000 - 10000</option>
                                                            <option value="10000-20000">10000 - 20000</option>
                                                            <option value="20000-50000">20000 - 50000</option>
                                                            <option value="50000-100000">50000 - 100000</option>
                                                            <option value="100000-200000">100000 - 200000</option>
                                                        </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-1-0tnu" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-budget-container"><span class="select2-selection__rendered" id="select2-budget-container" role="textbox" aria-readonly="true" title="Select Budget">Select Budget</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                                        <span class="text-danger error" id="budget_error"></span>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="text" placeholder="Event Date" class="form-control" name="event" id="event" data-toggle="datepicker" value="">
                                                        <span class="text-danger error" id="event_error"></span>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <textarea rows="6" placeholder="Details About Your Wedding" name="details" class="form-control" cols="1"></textarea>
                                                </div>
                                                
                                                                                                <input type="hidden" name="is_logged_in" value="">
                                                <input type="hidden" name="vendor_id" value="12">
                                                <button type="submit" name="send-message" class="btn btn-primary btn-block btn-rounded" id="send-message-button">Send Message</button>
                                            </form>
                                        </div>
                                        <div class="send-message-otp-div d-none mt-4">
                                            <form data-action="https://wedjio.com/query/otp" class="verify_otp">
                                                <div class="row">
                                                    <div class="col-md-12 print-error-msg"></div>
                                                    <div class="col-md-12 text-center">
                                                        <h4>An OTP has been sent to <span id="mobile"></span></h4>
                                                    </div>
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                        <div class="form-group">
                                                            <input id="send_message_otp" name="send_message_otp" type="number" placeholder="Enter OTP" class="form-control">
                                                            <span class="text-danger error" id="send_message_otp_error"></span>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <input type="hidden" name="otp_id" id="otp_id" value="">
                                                            <input type="hidden" name="query_id" id="query_id" value="">
                                                            <input type="hidden" name="type" id="type" value="">
                                                            <input type="hidden" name="vendor_id" value="12">
                                                            <button type="submit" class="btn btn-default">Verify OTP</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        
                                    </div>

                                    <div class="tab-pane fade" id="pills-view" role="tabpanel" aria-labelledby="pills-view-tab">
                                        <div class="view-contact-message"></div>

                                        <div class="view-contact-form">
                                            <form action="" method="post" data-action="https://wedjio.com/query/view-contact" class="query">
                                                <div class="form-group row">
                                                    <div class="col-md-6">
                                                        <input type="text" name="full_name" id="full_name" placeholder="Full Name" value="" class="form-control">
                                                        <span class="text-danger error" id="full_name_error"></span>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <input type="number" name="mobile" id="mobile" placeholder="Phone Number" value="" class="form-control">
                                                        <span class="text-danger error" id="mobile_error"></span>
                                                    </div>
                                                </div>
                                                                                                <input type="hidden" name="is_logged_in" value="">
                                                <input type="hidden" name="type" value="view_contact">
                                                <input type="hidden" name="vendor_id" value="12">
                                                <button type="submit" class="btn btn-primary btn-block btn-rounded">View Contact</button>
                                            </form>
                                        </div>
                                        <div class="view-contact-otp-div d-none mt-4 ">
                                            <form data-action="https://wedjio.com/query/otp" class="verify_otp">
                                                <div class="row">
                                                    <div class="col-md-12 text-center">
                                                        <h4>An OTP has been sent to <span id="mobile_1"></span></h4>
                                                    </div>
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                        <div class="form-group">
                                                            <input id="view_contact_otp" name="view_contact_otp" type="number" placeholder="Enter OTP" class="form-control">
                                                            <span class="text-danger error" id="view_contact_otp_error"></span>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                                        <div class="form-group">
                                                            <input type="hidden" name="otp_id" id="otp_id_1" value="">
                                                            <input type="hidden" name="query_id" id="query_id_1" value="">
                                                            <input type="hidden" name="type" id="type_1" value="">
                                                            <input type="hidden" name="vendor_id" value="12">
                                                            <button type="submit" class="btn btn-default">Verify OTP</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="view-contact-vendor"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="widget mt-5">
                        <div class="text-center">
                            <a href="#review-form" class="btn btn-primary btn-sm btn-rounded" id="write-review-form">Write A Review</a>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

    <div class="container vendor-nav-sticky">
        <div class="vendor-nav text-center">
            <a href="#description"><i class="fa fa-file-text"></i> Description</a>
            <a href="#service_offered"><i class="fa fa-list"></i> Service Offered</a>
            <a href="#gallery"><i class="fa fa-image"></i> Gallery</a>
            <a href="#videos"><i class="fa fa-video-camera"></i> Videos</a>
            <a href="#reviews"><i class="fa fa-star-half-full"></i> Reviews</a>
            <a href="#location"><i class="fa fa-map-marker"></i> Location</a>
        </div>
    </div>

    <section class="wide-tb-90 pt-0">
        <div class="container">
            <div class="row">

                <!-- Vendor Single Content -->
                <div class="col-lg-8 col-md-12">

                    <!-- Description -->
                    <div class="card-shadow pos-rel">
                        <a id="description" class="anchor-fake"></a>
                        <div class="card-shadow-header">
                            <h3><i class="fa fa-file-text"></i> Description</h3>
                        </div>
                                                <div class="card-shadow-body">
                            In the realm of wedding preparations, one element stands out as the pinnacle of bridal beauty: makeup. The bridal makeup transforms not just the appearance but also the confidence of the bride, enhancing her natural beauty for the most special day of her life. This is where the expertise of a professional makeup artist shines the brightest.
Bridal makeup isn’t just about looking good; it’s about feeling extraordinary. Every bride dreams of a flawless bridal look that reflects her personality and enhances her features.

Meet Our renowned MUA, the epitome of elegance and expertise in the world of makeup artistry. With years of experience and a keen eye for detail, she has established herself as a renowned makeup artist. Specializing in bridal makeup, Our renowned MUA crafts stunning looks that blend tradition with contemporary flair, leaving brides feeling confident and radiant on their special day. Her personalized approach and dedication to perfection have earned her a loyal clientele who trust her to enhance their natural beauty and create unforgettable transformations. Our renowned MUA's passion for her craft shines through in every stroke of her brush, making her a sought-after name in the industry.

                        </div>
                                            </div>
                    <!-- Description -->

                    <!-- Service Offered -->
                    <div class="card-shadow pos-rel">
                        <a id="service_offered" class="anchor-fake"></a>
                        <div class="card-shadow-header">
                            <h3><i class="fa fa-list"></i> Service Offered</h3>
                        </div>
                                                <div class="card-shadow-body">
                            The bouquet of services offered by the makeup artist Bridal Makeup , Pre Bridal Makeup, Airbrush Makeup, HD Makeup, Hairstyling, Party Makeup, Destination Wedding Services, Makeup for Pre-Wedding Events
                        </div>
                                            </div>
                    <!-- Service Offered -->

                    <!-- Gallery -->
                    <div class="card-shadow pos-rel">
                        <a id="gallery" class="anchor-fake"></a>
                        <div class="card-shadow-header">
                            <h3><i class="fa fa-image"></i> Gallery</h3>
                        </div>
                                                <div class="card-shadow-body">
                            <div class="row vendor-img-gallery">
                                                                                                        <div class="col-md-3">
                                        <div class="vendor-gallery">
                                            <a href="https://wedjio.com/storage/upload/vendor/gallery/Screenshot.png">
                                                <img src="https://wedjio.com/storage/upload/vendor/gallery/Screenshot.png" class="rounded" alt="">
                                            </a>
                                        </div>
                                    </div>
                                 
                            </div>
                        </div>
                                            </div>
                    <!-- Gallery -->

                    <!-- Videos -->
                    <div class="card-shadow pos-rel">
                        <a id="videos" class="anchor-fake"></a>
                        <div class="card-shadow-header">
                            <h3><i class="fa fa-video-camera"></i> Videos</h3>
                        </div>
                                            </div>
                    <!-- Videos -->

                    <!-- Location -->
                    <div class="card-shadow pos-rel">
                        <a id="location" class="anchor-fake"></a>
                        <div class="card-shadow-header">
                            <h3><i class="fa fa-map-marker"></i> Location</h3>
                        </div>
                                            </div>
                    <!-- Location -->

                    <!-- Reviews -->
                    <div class="card-shadow pos-rel">
                        <a id="reviews" class="anchor-fake"></a>
                        <div class="card-shadow-header d-md-flex justify-content-between align-items-center">
                            <h3><i class="fa fa-star-o"></i> Reviews &amp; Ratings </h3>
                            <a href="#review-form" class="btn btn-sm btn-dark mt-3 mt-md-0">Write A Review</a>
                        </div>
                        <div class="card-shadow-body border-bottom">
                            <div class="row no-gutters">
                                <div class="col-md-3 col">
                                    <div class="review-count">

                                        <span>0</span>
                                        <small>out of 5.0</small>
                                        <div class="stars">
                                            
                                             <i class="fa fa-star-o"></i>  <i class="fa fa-star-o"></i>  <i class="fa fa-star-o"></i>  <i class="fa fa-star-o"></i>  <i class="fa fa-star-o"></i>                                    
                                        </div>
                                        <small>0 Reviews</small>
                                    </div>
                                </div>
                                <div class="col-md-9 col">
                                    <div class="row">
                                        <!-- review-option -->
                                        <div class="col-md-4">
                                            <div class="review-option">
                                                <div class="icon">
                                                    <i class="fa fa-smile-o"></i>
                                                </div>
                                                <div class="count">
                                                                                                        <span>5</span>
                                                    <span class="stars">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>                                    
                                                    </span>
                                                    <span class="right">0</span>
                                                    <div>
                                                        <div class="bar-base">
                                                            <div class="bar-filled bg-success" style="width: 0%;">&nbsp;</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- review-option -->

                                        <!-- review-option -->
                                        <div class="col-md-4">
                                            <div class="review-option">
                                                <div class="icon">
                                                    <i class="fa fa-smile-o"></i>
                                                </div>
                                                <div class="count">
                                                                                                        <span>4</span>
                                                    <span class="stars">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>                                  
                                                    </span>
                                                    <span class="right">0</span>
                                                    <div>
                                                        <div class="bar-base">
                                                            <div class="bar-filled bg-success" style="width: 0%;">&nbsp;</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- review-option -->

                                        <!-- review-option -->
                                        <div class="col-md-4">
                                            <div class="review-option">
                                                <div class="icon">
                                                    <i class="fa fa-meh-o" aria-hidden="true"></i>
                                                </div>
                                                <div class="count">
                                                                                                        <span>3</span>
                                                    <span class="stars">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>                                   
                                                    </span>
                                                    <span class="right">0</span>
                                                    <div>
                                                        <div class="bar-base">
                                                            <div class="bar-filled bg-info" style="width: 0%;">&nbsp;</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- review-option -->

                                        <!-- review-option -->
                                        <div class="col-md-4">
                                            <div class="review-option">
                                                <div class="icon">
                                                    <i class="fa fa-frown-o" aria-hidden="true"></i>
                                                </div>
                                                <div class="count">
                                                                                                        <span>2 </span>
                                                    <span class="stars">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>                                    
                                                    </span>
                                                    <span class="right">0</span>
                                                    <div>
                                                        <div class="bar-base">
                                                            <div class="bar-filled bg-warning" style="width: 0%;">&nbsp;</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- review-option -->

                                        <!-- review-option -->
                                        <div class="col-md-4">
                                            <div class="review-option">
                                                <div class="icon">
                                                    <i class="fa fa-frown-o" aria-hidden="true"></i>
                                                </div>
                                                <div class="count">
                                                                                                        <span>1</span>
                                                    <span class="stars">
                                                        <i class="fa fa-star"></i>                                  
                                                    </span>
                                                    <span class="right">0</span>
                                                    <div>
                                                        <div class="bar-base">
                                                            <div class="bar-filled bg-danger" style="width: 0%;">&nbsp;</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- review-option -->
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="card-shadow-body border-top">
                                                        <!-- Review Media -->
                                                        <!-- Review Media -->
                                                        <!-- <div class="text-center">
                                <a href="javascript:" class="btn btn-default btn-rounded">See more reviews</a>
                            </div> -->
                        </div>
                    </div>
                    <!-- Reviews -->
                    
                    <!-- Write A Review -->
                                        <div class="card-shadow pos-rel">
                        <a id="review-form" class="anchor-fake" tabindex="-1"></a>
                        <div class="card-shadow-header">
                            <h3><i class="fa fa-pencil"></i> Write A Review</h3>
                        </div>
                        <div class="card-shadow-body">
                            
                                                        <form action="https://wedjio.com/write-review" method="post">
                                <input type="hidden" name="_token" value="XjdaNZZe7w3UV85sleDPLAjIFyFgrJo3PHOI0d6K">                                <div class="row rating-stars-wrap">
                                    <div class="from-group ml-2">
                                        <input class="star star-5" id="star-5" type="radio" name="star" value="5">
                                        <label class="star star-5" for="star-5"></label>
                                        <input class="star star-4" id="star-4" type="radio" name="star" value="4">
                                        <label class="star star-4" for="star-4"></label>
                                        <input class="star star-3" id="star-3" type="radio" name="star" value="3">
                                        <label class="star star-3" for="star-3"></label>
                                        <input class="star star-2" id="star-2" type="radio" name="star" value="2">
                                        <label class="star star-2" for="star-2"></label>
                                        <input class="star star-1" id="star-1" type="radio" name="star" value="1">
                                        <label class="star star-1" for="star-1"></label>
                                                                            </div>
                                </div>

                                <!-- Leave a Reply -->
                                <div class="row">
                                    <div class="col-md-12 mb-0">
                                        <div class="form-group">
                                            <textarea class="form-control" rows="5" name="comment" placeholder="Your Comments"></textarea>
                                                                                    </div>
                                    </div>
                                    

                                    <div class="col-md-6 mb-0">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name" id="name" value="" placeholder="Your Name">
                                                                                    </div>
                                    </div>
                                    <div class="col-md-6 mb-0">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" value="" id="email" placeholder="Your Email">
                                                                                    </div>
                                    </div>                                  
                                </div>

                                <div class="mt-3">
                                    <input type="hidden" name="user_id" value="">
                                    <input type="hidden" name="vendor_id" value="12">
                                    <button type="submit" class="btn btn-primary">Add Your Review</button> 
                                </div>
                            </form>
                                                        <!-- Leave a Reply -->
                        </div>
                    </div>
                    <!-- Write A Review -->

                    

                </div>
                <!-- Vendor Single Content -->

                <!-- Vendor Sidebar -->
                <div class="col-lg-4 col-md-12">
                    <aside class="row sidebar-widgets">
                        <!-- Sidebar Primary Start -->
                        <div class="sidebar-primary col-lg-12 col-md-6">

                            <!-- Widget Wrap -->
                            <div class="widget">
                                <h3 class="widget-title">Categories</h3>
                                
                                <div class="icon-box-style-3 sided">
                                                                            <i class="weddingdir_heart_envelope"></i> 
                                                                        <span> Wedding Invitation </span>
                                </div>
                            </div>
                            <!-- Widget Wrap -->

                            <!-- Widget Wrap -->
                            <div class="widget">
                                <h3 class="widget-title">Travel to Client Venue</h3>
                                
                                <div class="icon-box-style-3 sided">
                                    <i class="fa fa-map-marker"></i>
                                    <span> Yes </span>
                                </div>
                            </div>
                            <!-- Widget Wrap -->

                            <!-- Widget Wrap -->
                            <div class="widget">
                                <h3 class="widget-title">Cancel Policy</h3>
                                
                                <div class="icon-box-style-3 sided">
                                    <i class="fa fa-ban" aria-hidden="true"></i>
                                    <span> Booking Amount Non Refundable. </span>
                                </div>
                            </div>
                            <!-- Widget Wrap -->

                            <!-- Widget Wrap -->
                            <div class="widget">
                                <h3 class="widget-title">Advance Payment</h3>
                                
                                <div class="icon-box-style-3 sided">
                                    <i class="fa fa-inr"></i>
                                    <span> 30% </span>
                                </div>
                            </div>
                            <!-- Widget Wrap -->

                            
                            <!-- Widget Wrap -->
                                                        <!-- Widget Wrap -->

                            <!-- Widget Wrap -->
                            <div class="widget">
                                <h3 class="widget-title">Statistics</h3>
                                
                                <div class="row">
                                    
                                    <div class="col-6 mb-0">
                                        <div class="icon-box-style-3 sided">
                                            <i class="fa fa-star-o"></i>
                                            <span> 0 Rating</span>
                                        </div>
                                    </div>
                                    <div class="col-6 mb-0">
                                        <div class="icon-box-style-3 sided">
                                            <i class="fa fa-heart-o"></i>
                                            <span> 0 Favorite</span>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <!-- Widget Wrap -->

                            <div></div>
                        </div>
                        <!-- Sidebar Primary End -->

                        <!-- Sidebar Secondary Start -->
                        <div class="sidebar-secondary col-lg-12 col-md-6">

                            <!-- Widget Wrap -->
                            <div class="widget">
                                <h3 class="widget-title">Vendor Profile</h3>
                                                                <div class="profile-avatar">
                                    <img src="https://wedjio.com/storage/upload/vendor/featured/Screenshot 1.png" alt="">
                                    <div class="content">
                                        <small>Added By</small>
                                        Milan
                                    </div>
                                </div>
                                
                                <!-- <p>Proin viverra tincidunt lectus at sodales. Nam vitae dolor ipsum. Aenean at molestie nisl, id rhoncus orci.</p> -->

                                <div class="icon-box-style-3 sided mt-3 mb-0">
                                    <i class="fa fa-phone"></i>
                                    <span id="mobile"> **********</span>
                                </div>

                                <!--                                <div class="icon-box-style-3 sided mt-3 mb-0">
                                    <i class="fa fa-envelope-o"></i>
                                    <span> <a href="javascript:" class="btn-link btn-link-secondary">  </a> </span>
                                </div>
                                
                                 <div class="social-sharing sidebar-social border-top">
                                    <a href="javascript:" class="share-btn-facebook"><i class="fa fa-facebook"></i></a>
                                    <a href="javascript:" class="share-btn-twitter"><i class="fa fa-twitter"></i></a>
                                    <a href="javascript:" class="share-btn-instagram"><i class="fa fa-instagram"></i></a>
                                    <a href="javascript:" class="share-btn-linkedin"><i class="fa fa-linkedin"></i></a>
                                </div> -->
                            </div>
                            <!-- Widget Wrap -->

                            <!-- Widget Wrap -->
                                                        <div class="widget">
                                <h3 class="widget-title">Celebrity Vendors</h3>
                                <div class="owl-carousel owl-theme owl-loaded owl-drag" id="wedding-listing-single">                        
                                    <!-- Wedding Lisiting Single -->
                                                                                                            
                                                                                                            
                                                                                                            
                                                                                                            
                                                                                                            
                                                                                                            
                                                                                                            
                                                                                                            
                                                                                                            
                                                                                                            
                                                                                                            
                                                                                                            
                                                                                                            
                                                                                                            
                                                                                                            
                                                                        <!-- Wedding Lisiting Single -->

                                    
                                <div class="owl-stage-outer owl-height" style="height: 437px;"><div class="owl-stage" style="transform: translate3d(-6972px, 0px, 0px); transition: 2s; width: 10292px;"><div class="owl-item cloned" style="width: 302px; margin-right: 30px;"><div class="item">
                                        <div class="wedding-listing">
                                            <div class="img">
                                                <a href="https://wedjio.com/profile/Neh@Heena-4408">
                                                    <img src="https://wedjio.com/storage/upload/vendor/featured/PTdfu9wnpkKAY38GS6ecB1KMLtZC0q0I3PSTanf1.jpg" alt="PTdfu9wnpkKAY38GS6ecB1KMLtZC0q0I3PSTanf1.jpg">
                                                </a>
                                                <div class="img-content">
                                                    <div class="top">  
                                                        <span class="featured">
                                                            <i class="fa fa-star"></i>
                                                            <span>Featured</span>
                                                        </span>
                                                        <!-- <span class="price">
                                                            <i class="fa fa-tag"></i>
                                                            <span>$500-$800</span>
                                                        </span> -->
                                                    </div>
                                                    <div class="bottom">
                                                        <a class="tags" href="https://wedjio.com/profile/Neh@Heena-4408">
                                                            Mehndi Artist
                                                        </a>
                                                        <a class="favorite" href="javascript:">
                                                            <i class="fa fa-heart-o"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="gap">
                                                    <h3><a href="https://wedjio.com/profile/Neh@Heena-4408">Neha Naik ( Neh@Heena ) <span class="verified"><i class="fa fa-check-circle"></i></span> </a></h3>
                                                    <div><i class="fa fa-map-marker"></i> Pune</div>
                                                </div>
                                                <!--<div class="reviews">-->
                                                <!--    <span class="stars">-->
                                                <!--        -->
                                                <!--        <span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span>                                    -->
                                                <!--    </span>-->
                                                <!--    (0 review)-->
                                                <!--</div>-->
                                            </div>
                                        </div>
                                    </div></div><div class="owl-item cloned" style="width: 302px; margin-right: 30px;"><div class="item">
                                        <div class="wedding-listing">
                                            <div class="img">
                                                <a href="https://wedjio.com/profile/Malti-Singh-makeover-4407">
                                                    <img src="https://wedjio.com/storage/upload/vendor/featured/GyGrm16dIaGs6l3QceIfJgCCrNsgFEPehDM3yxLx.jpg" alt="GyGrm16dIaGs6l3QceIfJgCCrNsgFEPehDM3yxLx.jpg">
                                                </a>
                                                <div class="img-content">
                                                    <div class="top">  
                                                        <span class="featured">
                                                            <i class="fa fa-star"></i>
                                                            <span>Featured</span>
                                                        </span>
                                                        <!-- <span class="price">
                                                            <i class="fa fa-tag"></i>
                                                            <span>$500-$800</span>
                                                        </span> -->
                                                    </div>
                                                    <div class="bottom">
                                                        <a class="tags" href="https://wedjio.com/profile/Malti-Singh-makeover-4407">
                                                            Makeup Artist
                                                        </a>
                                                        <a class="favorite" href="javascript:">
                                                            <i class="fa fa-heart-o"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="gap">
                                                    <h3><a href="https://wedjio.com/profile/Malti-Singh-makeover-4407">Malti Singh ( Malti Singh makeover ) <span class="verified"><i class="fa fa-check-circle"></i></span> </a></h3>
                                                    <div><i class="fa fa-map-marker"></i> Delhi</div>
                                                </div>
                                                <!--<div class="reviews">-->
                                                <!--    <span class="stars">-->
                                                <!--        -->
                                                <!--        <span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span>                                    -->
                                                <!--    </span>-->
                                                <!--    (0 review)-->
                                                <!--</div>-->
                                            </div>
                                        </div>
                                    </div></div><div class="owl-item cloned" style="width: 302px; margin-right: 30px;"><div class="item">
                                        <div class="wedding-listing">
                                            <div class="img">
                                                <a href="https://wedjio.com/profile/NEW-LOOK'S-4406">
                                                    <img src="https://wedjio.com/storage/upload/vendor/featured/NGqAm3Rh1588tApxEloz80LKmzBRQUObpUkm8PRg.jpg" alt="NGqAm3Rh1588tApxEloz80LKmzBRQUObpUkm8PRg.jpg">
                                                </a>
                                                <div class="img-content">
                                                    <div class="top">  
                                                        <span class="featured">
                                                            <i class="fa fa-star"></i>
                                                            <span>Featured</span>
                                                        </span>
                                                        <!-- <span class="price">
                                                            <i class="fa fa-tag"></i>
                                                            <span>$500-$800</span>
                                                        </span> -->
                                                    </div>
                                                    <div class="bottom">
                                                        <a class="tags" href="https://wedjio.com/profile/NEW-LOOK'S-4406">
                                                            Makeup Artist
                                                        </a>
                                                        <a class="favorite" href="javascript:">
                                                            <i class="fa fa-heart-o"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="gap">
                                                    <h3><a href="https://wedjio.com/profile/NEW-LOOK'S-4406">Sumita ( NEW LOOK'S ) <span class="verified"><i class="fa fa-check-circle"></i></span> </a></h3>
                                                    <div><i class="fa fa-map-marker"></i> Mumbai</div>
                                                </div>
                                                <!--<div class="reviews">-->
                                                <!--    <span class="stars">-->
                                                <!--        -->
                                                <!--        <span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span>                                    -->
                                                <!--    </span>-->
                                                <!--    (0 review)-->
                                                <!--</div>-->
                                            </div>
                                        </div>
                                    </div></div><div class="owl-item cloned" style="width: 302px; margin-right: 30px;"><div class="item">
                                        <div class="wedding-listing">
                                            <div class="img">
                                                <a href="https://wedjio.com/profile/Annuaroramua-4401">
                                                    <img src="https://wedjio.com/storage/upload/vendor/featured/NDn9sEnYuGvIjBP473X1EbrAVXjHN3cSSbODFQXI.jpg" alt="NDn9sEnYuGvIjBP473X1EbrAVXjHN3cSSbODFQXI.jpg">
                                                </a>
                                                <div class="img-content">
                                                    <div class="top">  
                                                        <span class="featured">
                                                            <i class="fa fa-star"></i>
                                                            <span>Featured</span>
                                                        </span>
                                                        <!-- <span class="price">
                                                            <i class="fa fa-tag"></i>
                                                            <span>$500-$800</span>
                                                        </span> -->
                                                    </div>
                                                    <div class="bottom">
                                                        <a class="tags" href="https://wedjio.com/profile/Annuaroramua-4401">
                                                            Makeup Artist
                                                        </a>
                                                        <a class="favorite" href="javascript:">
                                                            <i class="fa fa-heart-o"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="gap">
                                                    <h3><a href="https://wedjio.com/profile/Annuaroramua-4401">Anu Bala ( Annuaroramua ) <span class="verified"><i class="fa fa-check-circle"></i></span> </a></h3>
                                                    <div><i class="fa fa-map-marker"></i> Chandigarh</div>
                                                </div>
                                                <!--<div class="reviews">-->
                                                <!--    <span class="stars">-->
                                                <!--        -->
                                                <!--        <span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span>                                    -->
                                                <!--    </span>-->
                                                <!--    (0 review)-->
                                                <!--</div>-->
                                            </div>
                                        </div>
                                    </div></div><div class="owl-item cloned" style="width: 302px; margin-right: 30px;"><div class="item">
                                        <div class="wedding-listing">
                                            <div class="img">
                                                <a href="https://wedjio.com/profile/PriyankaBiganiyamakeovers-4397">
                                                    <img src="https://wedjio.com/storage/upload/vendor/featured/2WY8DGNTykX7GjZrd9MP00Yf9kXVDkiAYfDaqt55.jpg" alt="2WY8DGNTykX7GjZrd9MP00Yf9kXVDkiAYfDaqt55.jpg">
                                                </a>
                                                <div class="img-content">
                                                    <div class="top">  
                                                        <span class="featured">
                                                            <i class="fa fa-star"></i>
                                                            <span>Featured</span>
                                                        </span>
                                                        <!-- <span class="price">
                                                            <i class="fa fa-tag"></i>
                                                            <span>$500-$800</span>
                                                        </span> -->
                                                    </div>
                                                    <div class="bottom">
                                                        <a class="tags" href="https://wedjio.com/profile/PriyankaBiganiyamakeovers-4397">
                                                            Makeup Artist
                                                        </a>
                                                        <a class="favorite" href="javascript:">
                                                            <i class="fa fa-heart-o"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="gap">
                                                    <h3><a href="https://wedjio.com/profile/PriyankaBiganiyamakeovers-4397">Priyanka Biganiya ( PriyankaBiganiyamakeovers ) <span class="verified"><i class="fa fa-check-circle"></i></span> </a></h3>
                                                    <div><i class="fa fa-map-marker"></i> Mumbai</div>
                                                </div>
                                                <!--<div class="reviews">-->
                                                <!--    <span class="stars">-->
                                                <!--        -->
                                                <!--        <span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span>                                    -->
                                                <!--    </span>-->
                                                <!--    (0 review)-->
                                                <!--</div>-->
                                            </div>
                                        </div>
                                    </div></div><div class="owl-item cloned" style="width: 302px; margin-right: 30px;"><div class="item">
                                        <div class="wedding-listing">
                                            <div class="img">
                                                <a href="https://wedjio.com/profile/Afnanmakeupartist-4394">
                                                    <img src="https://wedjio.com/storage/upload/vendor/featured/HGLZMTchZCWItLz1wU3nKIMXCvB31Re7hASvpJnl.jpg" alt="HGLZMTchZCWItLz1wU3nKIMXCvB31Re7hASvpJnl.jpg">
                                                </a>
                                                <div class="img-content">
                                                    <div class="top">  
                                                        <span class="featured">
                                                            <i class="fa fa-star"></i>
                                                            <span>Featured</span>
                                                        </span>
                                                        <!-- <span class="price">
                                                            <i class="fa fa-tag"></i>
                                                            <span>$500-$800</span>
                                                        </span> -->
                                                    </div>
                                                    <div class="bottom">
                                                        <a class="tags" href="https://wedjio.com/profile/Afnanmakeupartist-4394">
                                                            Makeup Artist
                                                        </a>
                                                        <a class="favorite" href="javascript:">
                                                            <i class="fa fa-heart-o"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="gap">
                                                    <h3><a href="https://wedjio.com/profile/Afnanmakeupartist-4394">Shaikh Afnan MD Usman ( Afnanmakeupartist ) <span class="verified"><i class="fa fa-check-circle"></i></span> </a></h3>
                                                    <div><i class="fa fa-map-marker"></i> Mumbai</div>
                                                </div>
                                                <!--<div class="reviews">-->
                                                <!--    <span class="stars">-->
                                                <!--        -->
                                                <!--        <span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span>                                    -->
                                                <!--    </span>-->
                                                <!--    (0 review)-->
                                                <!--</div>-->
                                            </div>
                                        </div>
                                    </div></div><div class="owl-item cloned" style="width: 302px; margin-right: 30px;"><div class="item">
                                        <div class="wedding-listing">
                                            <div class="img">
                                                <a href="https://wedjio.com/profile/Yasmeen-beauty-artist-4387">
                                                    <img src="https://wedjio.com/storage/upload/vendor/featured/MKv9acULwrDy30G2RqTdX8OKGwfsj8gpwGVHP5KG.jpg" alt="MKv9acULwrDy30G2RqTdX8OKGwfsj8gpwGVHP5KG.jpg">
                                                </a>
                                                <div class="img-content">
                                                    <div class="top">  
                                                        <span class="featured">
                                                            <i class="fa fa-star"></i>
                                                            <span>Featured</span>
                                                        </span>
                                                        <!-- <span class="price">
                                                            <i class="fa fa-tag"></i>
                                                            <span>$500-$800</span>
                                                        </span> -->
                                                    </div>
                                                    <div class="bottom">
                                                        <a class="tags" href="https://wedjio.com/profile/Yasmeen-beauty-artist-4387">
                                                            Makeup Artist
                                                        </a>
                                                        <a class="favorite" href="javascript:">
                                                            <i class="fa fa-heart-o"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="gap">
                                                    <h3><a href="https://wedjio.com/profile/Yasmeen-beauty-artist-4387">Yasmeen Shaikh ( Yasmeen beauty artist ) <span class="verified"><i class="fa fa-check-circle"></i></span> </a></h3>
                                                    <div><i class="fa fa-map-marker"></i> Mumbai</div>
                                                </div>
                                                <!--<div class="reviews">-->
                                                <!--    <span class="stars">-->
                                                <!--        -->
                                                <!--        <span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span>                                    -->
                                                <!--    </span>-->
                                                <!--    (0 review)-->
                                                <!--</div>-->
                                            </div>
                                        </div>
                                    </div></div><div class="owl-item cloned" style="width: 302px; margin-right: 30px;"><div class="item">
                                        <div class="wedding-listing">
                                            <div class="img">
                                                <a href="https://wedjio.com/profile/SHAISTA-ARIF-MAKEOVERS-4385">
                                                    <img src="https://wedjio.com/storage/upload/vendor/featured/bLbn2ghe7QLcuAs6zC5WsFyevAQrmVnshZKv3C8x.jpg" alt="bLbn2ghe7QLcuAs6zC5WsFyevAQrmVnshZKv3C8x.jpg">
                                                </a>
                                                <div class="img-content">
                                                    <div class="top">  
                                                        <span class="featured">
                                                            <i class="fa fa-star"></i>
                                                            <span>Featured</span>
                                                        </span>
                                                        <!-- <span class="price">
                                                            <i class="fa fa-tag"></i>
                                                            <span>$500-$800</span>
                                                        </span> -->
                                                    </div>
                                                    <div class="bottom">
                                                        <a class="tags" href="https://wedjio.com/profile/SHAISTA-ARIF-MAKEOVERS-4385">
                                                            Makeup Artist
                                                        </a>
                                                        <a class="favorite" href="javascript:">
                                                            <i class="fa fa-heart-o"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="gap">
                                                    <h3><a href="https://wedjio.com/profile/SHAISTA-ARIF-MAKEOVERS-4385">SHAISTA ARIF ( SHAISTA ARIF MAKEOVERS ) <span class="verified"><i class="fa fa-check-circle"></i></span> </a></h3>
                                                    <div><i class="fa fa-map-marker"></i> Delhi</div>
                                                </div>
                                                <!--<div class="reviews">-->
                                                <!--    <span class="stars">-->
                                                <!--        -->
                                                <!--        <span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span>                                    -->
                                                <!--    </span>-->
                                                <!--    (0 review)-->
                                                <!--</div>-->
                                            </div>
                                        </div>
                                    </div></div><div class="owl-item" style="width: 302px; margin-right: 30px;"><div class="item">
                                        <div class="wedding-listing">
                                            <div class="img">
                                                <a href="https://wedjio.com/profile/Vaishnavi-makeup-artist-4444">
                                                    <img src="https://wedjio.com/storage/upload/vendor/featured/9eBFvbl7Rkf85yrhFBmlzdcKz7MGo9X9DIhB7ZkA.jpg" alt="9eBFvbl7Rkf85yrhFBmlzdcKz7MGo9X9DIhB7ZkA.jpg">
                                                </a>
                                                <div class="img-content">
                                                    <div class="top">  
                                                        <span class="featured">
                                                            <i class="fa fa-star"></i>
                                                            <span>Featured</span>
                                                        </span>
                                                        <!-- <span class="price">
                                                            <i class="fa fa-tag"></i>
                                                            <span>$500-$800</span>
                                                        </span> -->
                                                    </div>
                                                    <div class="bottom">
                                                        <a class="tags" href="https://wedjio.com/profile/Vaishnavi-makeup-artist-4444">
                                                            Makeup Artist
                                                        </a>
                                                        <a class="favorite" href="javascript:">
                                                            <i class="fa fa-heart-o"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="gap">
                                                    <h3><a href="https://wedjio.com/profile/Vaishnavi-makeup-artist-4444">Vaishnavi kanchan ( Vaishnavi makeup artist ) <span class="verified"><i class="fa fa-check-circle"></i></span> </a></h3>
                                                    <div><i class="fa fa-map-marker"></i> Pune</div>
                                                </div>
                                                <!--<div class="reviews">-->
                                                <!--    <span class="stars">-->
                                                <!--        -->
                                                <!--        <span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span>                                    -->
                                                <!--    </span>-->
                                                <!--    (0 review)-->
                                                <!--</div>-->
                                            </div>
                                        </div>
                                    </div></div><div class="owl-item" style="width: 302px; margin-right: 30px;"><div class="item">
                                        <div class="wedding-listing">
                                            <div class="img">
                                                <a href="https://wedjio.com/profile/Makeup-by-Himanshi-Babbar-4443">
                                                    <img src="https://wedjio.com/storage/upload/vendor/featured/SrgYFI6N65Iisksa4TJH3hPG5TQy2Q2b8Qqu3VRx.jpg" alt="SrgYFI6N65Iisksa4TJH3hPG5TQy2Q2b8Qqu3VRx.jpg">
                                                </a>
                                                <div class="img-content">
                                                    <div class="top">  
                                                        <span class="featured">
                                                            <i class="fa fa-star"></i>
                                                            <span>Featured</span>
                                                        </span>
                                                        <!-- <span class="price">
                                                            <i class="fa fa-tag"></i>
                                                            <span>$500-$800</span>
                                                        </span> -->
                                                    </div>
                                                    <div class="bottom">
                                                        <a class="tags" href="https://wedjio.com/profile/Makeup-by-Himanshi-Babbar-4443">
                                                            Makeup Artist
                                                        </a>
                                                        <a class="favorite" href="javascript:">
                                                            <i class="fa fa-heart-o"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="gap">
                                                    <h3><a href="https://wedjio.com/profile/Makeup-by-Himanshi-Babbar-4443">Himanshi babbar ( Makeup by Himanshi Babbar ) <span class="verified"><i class="fa fa-check-circle"></i></span> </a></h3>
                                                    <div><i class="fa fa-map-marker"></i> Delhi</div>
                                                </div>
                                                <!--<div class="reviews">-->
                                                <!--    <span class="stars">-->
                                                <!--        -->
                                                <!--        <span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span>                                    -->
                                                <!--    </span>-->
                                                <!--    (0 review)-->
                                                <!--</div>-->
                                            </div>
                                        </div>
                                    </div></div><div class="owl-item" style="width: 302px; margin-right: 30px;"><div class="item">
                                        <div class="wedding-listing">
                                            <div class="img">
                                                <a href="https://wedjio.com/profile/Akshitaz-Glam-Makeup-4436">
                                                    <img src="https://wedjio.com/storage/upload/vendor/featured/lSwoyBnfukB8pt7yP7EvZ8zGRJf5vbuaKfe6N6Tn.jpg" alt="lSwoyBnfukB8pt7yP7EvZ8zGRJf5vbuaKfe6N6Tn.jpg">
                                                </a>
                                                <div class="img-content">
                                                    <div class="top">  
                                                        <span class="featured">
                                                            <i class="fa fa-star"></i>
                                                            <span>Featured</span>
                                                        </span>
                                                        <!-- <span class="price">
                                                            <i class="fa fa-tag"></i>
                                                            <span>$500-$800</span>
                                                        </span> -->
                                                    </div>
                                                    <div class="bottom">
                                                        <a class="tags" href="https://wedjio.com/profile/Akshitaz-Glam-Makeup-4436">
                                                            Makeup Artist
                                                        </a>
                                                        <a class="favorite" href="javascript:">
                                                            <i class="fa fa-heart-o"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="gap">
                                                    <h3><a href="https://wedjio.com/profile/Akshitaz-Glam-Makeup-4436">Ankita ( Akshitaz Glam Makeup ) <span class="verified"><i class="fa fa-check-circle"></i></span> </a></h3>
                                                    <div><i class="fa fa-map-marker"></i> Pune</div>
                                                </div>
                                                <!--<div class="reviews">-->
                                                <!--    <span class="stars">-->
                                                <!--        -->
                                                <!--        <span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span>                                    -->
                                                <!--    </span>-->
                                                <!--    (0 review)-->
                                                <!--</div>-->
                                            </div>
                                        </div>
                                    </div></div><div class="owl-item" style="width: 302px; margin-right: 30px;"><div class="item">
                                        <div class="wedding-listing">
                                            <div class="img">
                                                <a href="https://wedjio.com/profile/Jyoti-singodia-makeup-over-4429">
                                                    <img src="https://wedjio.com/storage/upload/vendor/featured/fVkRKSoPzuhlXYJ6jLiHuADhIGVEX0LUhS3F1joM.jpg" alt="fVkRKSoPzuhlXYJ6jLiHuADhIGVEX0LUhS3F1joM.jpg">
                                                </a>
                                                <div class="img-content">
                                                    <div class="top">  
                                                        <span class="featured">
                                                            <i class="fa fa-star"></i>
                                                            <span>Featured</span>
                                                        </span>
                                                        <!-- <span class="price">
                                                            <i class="fa fa-tag"></i>
                                                            <span>$500-$800</span>
                                                        </span> -->
                                                    </div>
                                                    <div class="bottom">
                                                        <a class="tags" href="https://wedjio.com/profile/Jyoti-singodia-makeup-over-4429">
                                                            Makeup Artist
                                                        </a>
                                                        <a class="favorite" href="javascript:">
                                                            <i class="fa fa-heart-o"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="gap">
                                                    <h3><a href="https://wedjio.com/profile/Jyoti-singodia-makeup-over-4429">Jyoti singodia ( Jyoti singodia makeup over ) <span class="verified"><i class="fa fa-check-circle"></i></span> </a></h3>
                                                    <div><i class="fa fa-map-marker"></i> Mumbai</div>
                                                </div>
                                                <!--<div class="reviews">-->
                                                <!--    <span class="stars">-->
                                                <!--        -->
                                                <!--        <span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span>                                    -->
                                                <!--    </span>-->
                                                <!--    (0 review)-->
                                                <!--</div>-->
                                            </div>
                                        </div>
                                    </div></div><div class="owl-item" style="width: 302px; margin-right: 30px;"><div class="item">
                                        <div class="wedding-listing">
                                            <div class="img">
                                                <a href="https://wedjio.com/profile/makeup-artist-shubhada-kudale-4418">
                                                    <img src="https://wedjio.com/storage/upload/vendor/featured/ZpVnoicPhaUnjTu9jExYEaPEr9TwJ5k754wvXrPK.jpg" alt="ZpVnoicPhaUnjTu9jExYEaPEr9TwJ5k754wvXrPK.jpg">
                                                </a>
                                                <div class="img-content">
                                                    <div class="top">  
                                                        <span class="featured">
                                                            <i class="fa fa-star"></i>
                                                            <span>Featured</span>
                                                        </span>
                                                        <!-- <span class="price">
                                                            <i class="fa fa-tag"></i>
                                                            <span>$500-$800</span>
                                                        </span> -->
                                                    </div>
                                                    <div class="bottom">
                                                        <a class="tags" href="https://wedjio.com/profile/makeup-artist-shubhada-kudale-4418">
                                                            Makeup Artist
                                                        </a>
                                                        <a class="favorite" href="javascript:">
                                                            <i class="fa fa-heart-o"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="gap">
                                                    <h3><a href="https://wedjio.com/profile/makeup-artist-shubhada-kudale-4418">Shubhada kudale ( makeup artist shubhada kudale ) <span class="verified"><i class="fa fa-check-circle"></i></span> </a></h3>
                                                    <div><i class="fa fa-map-marker"></i> Pune</div>
                                                </div>
                                                <!--<div class="reviews">-->
                                                <!--    <span class="stars">-->
                                                <!--        -->
                                                <!--        <span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span>                                    -->
                                                <!--    </span>-->
                                                <!--    (0 review)-->
                                                <!--</div>-->
                                            </div>
                                        </div>
                                    </div></div><div class="owl-item" style="width: 302px; margin-right: 30px;"><div class="item">
                                        <div class="wedding-listing">
                                            <div class="img">
                                                <a href="https://wedjio.com/profile/BV-makeup-artist-4414">
                                                    <img src="https://wedjio.com/storage/upload/vendor/featured/rB2bjOubKaOEqGBf3UknjyOQMY2Fqt591qAMke8A.jpg" alt="rB2bjOubKaOEqGBf3UknjyOQMY2Fqt591qAMke8A.jpg">
                                                </a>
                                                <div class="img-content">
                                                    <div class="top">  
                                                        <span class="featured">
                                                            <i class="fa fa-star"></i>
                                                            <span>Featured</span>
                                                        </span>
                                                        <!-- <span class="price">
                                                            <i class="fa fa-tag"></i>
                                                            <span>$500-$800</span>
                                                        </span> -->
                                                    </div>
                                                    <div class="bottom">
                                                        <a class="tags" href="https://wedjio.com/profile/BV-makeup-artist-4414">
                                                            Makeup Artist
                                                        </a>
                                                        <a class="favorite" href="javascript:">
                                                            <i class="fa fa-heart-o"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="gap">
                                                    <h3><a href="https://wedjio.com/profile/BV-makeup-artist-4414">Bhavanavadhia ( BV makeup artist ) <span class="verified"><i class="fa fa-check-circle"></i></span> </a></h3>
                                                    <div><i class="fa fa-map-marker"></i> Mumbai</div>
                                                </div>
                                                <!--<div class="reviews">-->
                                                <!--    <span class="stars">-->
                                                <!--        -->
                                                <!--        <span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span>                                    -->
                                                <!--    </span>-->
                                                <!--    (0 review)-->
                                                <!--</div>-->
                                            </div>
                                        </div>
                                    </div></div><div class="owl-item" style="width: 302px; margin-right: 30px;"><div class="item">
                                        <div class="wedding-listing">
                                            <div class="img">
                                                <a href="https://wedjio.com/profile/makeover-by-monika-4410">
                                                    <img src="https://wedjio.com/storage/upload/vendor/featured/vzoh8kYyId63vUuUhVoK38MoWc2ZcMihixijYiRh.jpg" alt="vzoh8kYyId63vUuUhVoK38MoWc2ZcMihixijYiRh.jpg">
                                                </a>
                                                <div class="img-content">
                                                    <div class="top">  
                                                        <span class="featured">
                                                            <i class="fa fa-star"></i>
                                                            <span>Featured</span>
                                                        </span>
                                                        <!-- <span class="price">
                                                            <i class="fa fa-tag"></i>
                                                            <span>$500-$800</span>
                                                        </span> -->
                                                    </div>
                                                    <div class="bottom">
                                                        <a class="tags" href="https://wedjio.com/profile/makeover-by-monika-4410">
                                                            Makeup Artist
                                                        </a>
                                                        <a class="favorite" href="javascript:">
                                                            <i class="fa fa-heart-o"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="gap">
                                                    <h3><a href="https://wedjio.com/profile/makeover-by-monika-4410">monika joshi ( makeover by monika ) <span class="verified"><i class="fa fa-check-circle"></i></span> </a></h3>
                                                    <div><i class="fa fa-map-marker"></i> Dehradun</div>
                                                </div>
                                                <!--<div class="reviews">-->
                                                <!--    <span class="stars">-->
                                                <!--        -->
                                                <!--        <span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span>                                    -->
                                                <!--    </span>-->
                                                <!--    (0 review)-->
                                                <!--</div>-->
                                            </div>
                                        </div>
                                    </div></div><div class="owl-item" style="width: 302px; margin-right: 30px;"><div class="item">
                                        <div class="wedding-listing">
                                            <div class="img">
                                                <a href="https://wedjio.com/profile/Neh@Heena-4408">
                                                    <img src="https://wedjio.com/storage/upload/vendor/featured/PTdfu9wnpkKAY38GS6ecB1KMLtZC0q0I3PSTanf1.jpg" alt="PTdfu9wnpkKAY38GS6ecB1KMLtZC0q0I3PSTanf1.jpg">
                                                </a>
                                                <div class="img-content">
                                                    <div class="top">  
                                                        <span class="featured">
                                                            <i class="fa fa-star"></i>
                                                            <span>Featured</span>
                                                        </span>
                                                        <!-- <span class="price">
                                                            <i class="fa fa-tag"></i>
                                                            <span>$500-$800</span>
                                                        </span> -->
                                                    </div>
                                                    <div class="bottom">
                                                        <a class="tags" href="https://wedjio.com/profile/Neh@Heena-4408">
                                                            Mehndi Artist
                                                        </a>
                                                        <a class="favorite" href="javascript:">
                                                            <i class="fa fa-heart-o"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="gap">
                                                    <h3><a href="https://wedjio.com/profile/Neh@Heena-4408">Neha Naik ( Neh@Heena ) <span class="verified"><i class="fa fa-check-circle"></i></span> </a></h3>
                                                    <div><i class="fa fa-map-marker"></i> Pune</div>
                                                </div>
                                                <!--<div class="reviews">-->
                                                <!--    <span class="stars">-->
                                                <!--        -->
                                                <!--        <span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span>                                    -->
                                                <!--    </span>-->
                                                <!--    (0 review)-->
                                                <!--</div>-->
                                            </div>
                                        </div>
                                    </div></div><div class="owl-item" style="width: 302px; margin-right: 30px;"><div class="item">
                                        <div class="wedding-listing">
                                            <div class="img">
                                                <a href="https://wedjio.com/profile/Malti-Singh-makeover-4407">
                                                    <img src="https://wedjio.com/storage/upload/vendor/featured/GyGrm16dIaGs6l3QceIfJgCCrNsgFEPehDM3yxLx.jpg" alt="GyGrm16dIaGs6l3QceIfJgCCrNsgFEPehDM3yxLx.jpg">
                                                </a>
                                                <div class="img-content">
                                                    <div class="top">  
                                                        <span class="featured">
                                                            <i class="fa fa-star"></i>
                                                            <span>Featured</span>
                                                        </span>
                                                        <!-- <span class="price">
                                                            <i class="fa fa-tag"></i>
                                                            <span>$500-$800</span>
                                                        </span> -->
                                                    </div>
                                                    <div class="bottom">
                                                        <a class="tags" href="https://wedjio.com/profile/Malti-Singh-makeover-4407">
                                                            Makeup Artist
                                                        </a>
                                                        <a class="favorite" href="javascript:">
                                                            <i class="fa fa-heart-o"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="gap">
                                                    <h3><a href="https://wedjio.com/profile/Malti-Singh-makeover-4407">Malti Singh ( Malti Singh makeover ) <span class="verified"><i class="fa fa-check-circle"></i></span> </a></h3>
                                                    <div><i class="fa fa-map-marker"></i> Delhi</div>
                                                </div>
                                                <!--<div class="reviews">-->
                                                <!--    <span class="stars">-->
                                                <!--        -->
                                                <!--        <span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span>                                    -->
                                                <!--    </span>-->
                                                <!--    (0 review)-->
                                                <!--</div>-->
                                            </div>
                                        </div>
                                    </div></div><div class="owl-item" style="width: 302px; margin-right: 30px;"><div class="item">
                                        <div class="wedding-listing">
                                            <div class="img">
                                                <a href="https://wedjio.com/profile/NEW-LOOK'S-4406">
                                                    <img src="https://wedjio.com/storage/upload/vendor/featured/NGqAm3Rh1588tApxEloz80LKmzBRQUObpUkm8PRg.jpg" alt="NGqAm3Rh1588tApxEloz80LKmzBRQUObpUkm8PRg.jpg">
                                                </a>
                                                <div class="img-content">
                                                    <div class="top">  
                                                        <span class="featured">
                                                            <i class="fa fa-star"></i>
                                                            <span>Featured</span>
                                                        </span>
                                                        <!-- <span class="price">
                                                            <i class="fa fa-tag"></i>
                                                            <span>$500-$800</span>
                                                        </span> -->
                                                    </div>
                                                    <div class="bottom">
                                                        <a class="tags" href="https://wedjio.com/profile/NEW-LOOK'S-4406">
                                                            Makeup Artist
                                                        </a>
                                                        <a class="favorite" href="javascript:">
                                                            <i class="fa fa-heart-o"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="gap">
                                                    <h3><a href="https://wedjio.com/profile/NEW-LOOK'S-4406">Sumita ( NEW LOOK'S ) <span class="verified"><i class="fa fa-check-circle"></i></span> </a></h3>
                                                    <div><i class="fa fa-map-marker"></i> Mumbai</div>
                                                </div>
                                                <!--<div class="reviews">-->
                                                <!--    <span class="stars">-->
                                                <!--        -->
                                                <!--        <span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span>                                    -->
                                                <!--    </span>-->
                                                <!--    (0 review)-->
                                                <!--</div>-->
                                            </div>
                                        </div>
                                    </div></div><div class="owl-item" style="width: 302px; margin-right: 30px;"><div class="item">
                                        <div class="wedding-listing">
                                            <div class="img">
                                                <a href="https://wedjio.com/profile/Annuaroramua-4401">
                                                    <img src="https://wedjio.com/storage/upload/vendor/featured/NDn9sEnYuGvIjBP473X1EbrAVXjHN3cSSbODFQXI.jpg" alt="NDn9sEnYuGvIjBP473X1EbrAVXjHN3cSSbODFQXI.jpg">
                                                </a>
                                                <div class="img-content">
                                                    <div class="top">  
                                                        <span class="featured">
                                                            <i class="fa fa-star"></i>
                                                            <span>Featured</span>
                                                        </span>
                                                        <!-- <span class="price">
                                                            <i class="fa fa-tag"></i>
                                                            <span>$500-$800</span>
                                                        </span> -->
                                                    </div>
                                                    <div class="bottom">
                                                        <a class="tags" href="https://wedjio.com/profile/Annuaroramua-4401">
                                                            Makeup Artist
                                                        </a>
                                                        <a class="favorite" href="javascript:">
                                                            <i class="fa fa-heart-o"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="gap">
                                                    <h3><a href="https://wedjio.com/profile/Annuaroramua-4401">Anu Bala ( Annuaroramua ) <span class="verified"><i class="fa fa-check-circle"></i></span> </a></h3>
                                                    <div><i class="fa fa-map-marker"></i> Chandigarh</div>
                                                </div>
                                                <!--<div class="reviews">-->
                                                <!--    <span class="stars">-->
                                                <!--        -->
                                                <!--        <span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span>                                    -->
                                                <!--    </span>-->
                                                <!--    (0 review)-->
                                                <!--</div>-->
                                            </div>
                                        </div>
                                    </div></div><div class="owl-item" style="width: 302px; margin-right: 30px;"><div class="item">
                                        <div class="wedding-listing">
                                            <div class="img">
                                                <a href="https://wedjio.com/profile/PriyankaBiganiyamakeovers-4397">
                                                    <img src="https://wedjio.com/storage/upload/vendor/featured/2WY8DGNTykX7GjZrd9MP00Yf9kXVDkiAYfDaqt55.jpg" alt="2WY8DGNTykX7GjZrd9MP00Yf9kXVDkiAYfDaqt55.jpg">
                                                </a>
                                                <div class="img-content">
                                                    <div class="top">  
                                                        <span class="featured">
                                                            <i class="fa fa-star"></i>
                                                            <span>Featured</span>
                                                        </span>
                                                        <!-- <span class="price">
                                                            <i class="fa fa-tag"></i>
                                                            <span>$500-$800</span>
                                                        </span> -->
                                                    </div>
                                                    <div class="bottom">
                                                        <a class="tags" href="https://wedjio.com/profile/PriyankaBiganiyamakeovers-4397">
                                                            Makeup Artist
                                                        </a>
                                                        <a class="favorite" href="javascript:">
                                                            <i class="fa fa-heart-o"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="gap">
                                                    <h3><a href="https://wedjio.com/profile/PriyankaBiganiyamakeovers-4397">Priyanka Biganiya ( PriyankaBiganiyamakeovers ) <span class="verified"><i class="fa fa-check-circle"></i></span> </a></h3>
                                                    <div><i class="fa fa-map-marker"></i> Mumbai</div>
                                                </div>
                                                <!--<div class="reviews">-->
                                                <!--    <span class="stars">-->
                                                <!--        -->
                                                <!--        <span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span>                                    -->
                                                <!--    </span>-->
                                                <!--    (0 review)-->
                                                <!--</div>-->
                                            </div>
                                        </div>
                                    </div></div><div class="owl-item" style="width: 302px; margin-right: 30px;"><div class="item">
                                        <div class="wedding-listing">
                                            <div class="img">
                                                <a href="https://wedjio.com/profile/Afnanmakeupartist-4394">
                                                    <img src="https://wedjio.com/storage/upload/vendor/featured/HGLZMTchZCWItLz1wU3nKIMXCvB31Re7hASvpJnl.jpg" alt="HGLZMTchZCWItLz1wU3nKIMXCvB31Re7hASvpJnl.jpg">
                                                </a>
                                                <div class="img-content">
                                                    <div class="top">  
                                                        <span class="featured">
                                                            <i class="fa fa-star"></i>
                                                            <span>Featured</span>
                                                        </span>
                                                        <!-- <span class="price">
                                                            <i class="fa fa-tag"></i>
                                                            <span>$500-$800</span>
                                                        </span> -->
                                                    </div>
                                                    <div class="bottom">
                                                        <a class="tags" href="https://wedjio.com/profile/Afnanmakeupartist-4394">
                                                            Makeup Artist
                                                        </a>
                                                        <a class="favorite" href="javascript:">
                                                            <i class="fa fa-heart-o"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="gap">
                                                    <h3><a href="https://wedjio.com/profile/Afnanmakeupartist-4394">Shaikh Afnan MD Usman ( Afnanmakeupartist ) <span class="verified"><i class="fa fa-check-circle"></i></span> </a></h3>
                                                    <div><i class="fa fa-map-marker"></i> Mumbai</div>
                                                </div>
                                                <!--<div class="reviews">-->
                                                <!--    <span class="stars">-->
                                                <!--        -->
                                                <!--        <span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span>                                    -->
                                                <!--    </span>-->
                                                <!--    (0 review)-->
                                                <!--</div>-->
                                            </div>
                                        </div>
                                    </div></div><div class="owl-item active" style="width: 302px; margin-right: 30px;"><div class="item">
                                        <div class="wedding-listing">
                                            <div class="img">
                                                <a href="https://wedjio.com/profile/Yasmeen-beauty-artist-4387">
                                                    <img src="https://wedjio.com/storage/upload/vendor/featured/MKv9acULwrDy30G2RqTdX8OKGwfsj8gpwGVHP5KG.jpg" alt="MKv9acULwrDy30G2RqTdX8OKGwfsj8gpwGVHP5KG.jpg">
                                                </a>
                                                <div class="img-content">
                                                    <div class="top">  
                                                        <span class="featured">
                                                            <i class="fa fa-star"></i>
                                                            <span>Featured</span>
                                                        </span>
                                                        <!-- <span class="price">
                                                            <i class="fa fa-tag"></i>
                                                            <span>$500-$800</span>
                                                        </span> -->
                                                    </div>
                                                    <div class="bottom">
                                                        <a class="tags" href="https://wedjio.com/profile/Yasmeen-beauty-artist-4387">
                                                            Makeup Artist
                                                        </a>
                                                        <a class="favorite" href="javascript:">
                                                            <i class="fa fa-heart-o"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="gap">
                                                    <h3><a href="https://wedjio.com/profile/Yasmeen-beauty-artist-4387">Yasmeen Shaikh ( Yasmeen beauty artist ) <span class="verified"><i class="fa fa-check-circle"></i></span> </a></h3>
                                                    <div><i class="fa fa-map-marker"></i> Mumbai</div>
                                                </div>
                                                <!--<div class="reviews">-->
                                                <!--    <span class="stars">-->
                                                <!--        -->
                                                <!--        <span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span>                                    -->
                                                <!--    </span>-->
                                                <!--    (0 review)-->
                                                <!--</div>-->
                                            </div>
                                        </div>
                                    </div></div><div class="owl-item" style="width: 302px; margin-right: 30px;"><div class="item">
                                        <div class="wedding-listing">
                                            <div class="img">
                                                <a href="https://wedjio.com/profile/SHAISTA-ARIF-MAKEOVERS-4385">
                                                    <img src="https://wedjio.com/storage/upload/vendor/featured/bLbn2ghe7QLcuAs6zC5WsFyevAQrmVnshZKv3C8x.jpg" alt="bLbn2ghe7QLcuAs6zC5WsFyevAQrmVnshZKv3C8x.jpg">
                                                </a>
                                                <div class="img-content">
                                                    <div class="top">  
                                                        <span class="featured">
                                                            <i class="fa fa-star"></i>
                                                            <span>Featured</span>
                                                        </span>
                                                        <!-- <span class="price">
                                                            <i class="fa fa-tag"></i>
                                                            <span>$500-$800</span>
                                                        </span> -->
                                                    </div>
                                                    <div class="bottom">
                                                        <a class="tags" href="https://wedjio.com/profile/SHAISTA-ARIF-MAKEOVERS-4385">
                                                            Makeup Artist
                                                        </a>
                                                        <a class="favorite" href="javascript:">
                                                            <i class="fa fa-heart-o"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="gap">
                                                    <h3><a href="https://wedjio.com/profile/SHAISTA-ARIF-MAKEOVERS-4385">SHAISTA ARIF ( SHAISTA ARIF MAKEOVERS ) <span class="verified"><i class="fa fa-check-circle"></i></span> </a></h3>
                                                    <div><i class="fa fa-map-marker"></i> Delhi</div>
                                                </div>
                                                <!--<div class="reviews">-->
                                                <!--    <span class="stars">-->
                                                <!--        -->
                                                <!--        <span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span>                                    -->
                                                <!--    </span>-->
                                                <!--    (0 review)-->
                                                <!--</div>-->
                                            </div>
                                        </div>
                                    </div></div><div class="owl-item cloned" style="width: 302px; margin-right: 30px;"><div class="item">
                                        <div class="wedding-listing">
                                            <div class="img">
                                                <a href="https://wedjio.com/profile/Vaishnavi-makeup-artist-4444">
                                                    <img src="https://wedjio.com/storage/upload/vendor/featured/9eBFvbl7Rkf85yrhFBmlzdcKz7MGo9X9DIhB7ZkA.jpg" alt="9eBFvbl7Rkf85yrhFBmlzdcKz7MGo9X9DIhB7ZkA.jpg">
                                                </a>
                                                <div class="img-content">
                                                    <div class="top">  
                                                        <span class="featured">
                                                            <i class="fa fa-star"></i>
                                                            <span>Featured</span>
                                                        </span>
                                                        <!-- <span class="price">
                                                            <i class="fa fa-tag"></i>
                                                            <span>$500-$800</span>
                                                        </span> -->
                                                    </div>
                                                    <div class="bottom">
                                                        <a class="tags" href="https://wedjio.com/profile/Vaishnavi-makeup-artist-4444">
                                                            Makeup Artist
                                                        </a>
                                                        <a class="favorite" href="javascript:">
                                                            <i class="fa fa-heart-o"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="gap">
                                                    <h3><a href="https://wedjio.com/profile/Vaishnavi-makeup-artist-4444">Vaishnavi kanchan ( Vaishnavi makeup artist ) <span class="verified"><i class="fa fa-check-circle"></i></span> </a></h3>
                                                    <div><i class="fa fa-map-marker"></i> Pune</div>
                                                </div>
                                                <!--<div class="reviews">-->
                                                <!--    <span class="stars">-->
                                                <!--        -->
                                                <!--        <span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span>                                    -->
                                                <!--    </span>-->
                                                <!--    (0 review)-->
                                                <!--</div>-->
                                            </div>
                                        </div>
                                    </div></div><div class="owl-item cloned" style="width: 302px; margin-right: 30px;"><div class="item">
                                        <div class="wedding-listing">
                                            <div class="img">
                                                <a href="https://wedjio.com/profile/Makeup-by-Himanshi-Babbar-4443">
                                                    <img src="https://wedjio.com/storage/upload/vendor/featured/SrgYFI6N65Iisksa4TJH3hPG5TQy2Q2b8Qqu3VRx.jpg" alt="SrgYFI6N65Iisksa4TJH3hPG5TQy2Q2b8Qqu3VRx.jpg">
                                                </a>
                                                <div class="img-content">
                                                    <div class="top">  
                                                        <span class="featured">
                                                            <i class="fa fa-star"></i>
                                                            <span>Featured</span>
                                                        </span>
                                                        <!-- <span class="price">
                                                            <i class="fa fa-tag"></i>
                                                            <span>$500-$800</span>
                                                        </span> -->
                                                    </div>
                                                    <div class="bottom">
                                                        <a class="tags" href="https://wedjio.com/profile/Makeup-by-Himanshi-Babbar-4443">
                                                            Makeup Artist
                                                        </a>
                                                        <a class="favorite" href="javascript:">
                                                            <i class="fa fa-heart-o"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="gap">
                                                    <h3><a href="https://wedjio.com/profile/Makeup-by-Himanshi-Babbar-4443">Himanshi babbar ( Makeup by Himanshi Babbar ) <span class="verified"><i class="fa fa-check-circle"></i></span> </a></h3>
                                                    <div><i class="fa fa-map-marker"></i> Delhi</div>
                                                </div>
                                                <!--<div class="reviews">-->
                                                <!--    <span class="stars">-->
                                                <!--        -->
                                                <!--        <span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span>                                    -->
                                                <!--    </span>-->
                                                <!--    (0 review)-->
                                                <!--</div>-->
                                            </div>
                                        </div>
                                    </div></div><div class="owl-item cloned" style="width: 302px; margin-right: 30px;"><div class="item">
                                        <div class="wedding-listing">
                                            <div class="img">
                                                <a href="https://wedjio.com/profile/Akshitaz-Glam-Makeup-4436">
                                                    <img src="https://wedjio.com/storage/upload/vendor/featured/lSwoyBnfukB8pt7yP7EvZ8zGRJf5vbuaKfe6N6Tn.jpg" alt="lSwoyBnfukB8pt7yP7EvZ8zGRJf5vbuaKfe6N6Tn.jpg">
                                                </a>
                                                <div class="img-content">
                                                    <div class="top">  
                                                        <span class="featured">
                                                            <i class="fa fa-star"></i>
                                                            <span>Featured</span>
                                                        </span>
                                                        <!-- <span class="price">
                                                            <i class="fa fa-tag"></i>
                                                            <span>$500-$800</span>
                                                        </span> -->
                                                    </div>
                                                    <div class="bottom">
                                                        <a class="tags" href="https://wedjio.com/profile/Akshitaz-Glam-Makeup-4436">
                                                            Makeup Artist
                                                        </a>
                                                        <a class="favorite" href="javascript:">
                                                            <i class="fa fa-heart-o"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="gap">
                                                    <h3><a href="https://wedjio.com/profile/Akshitaz-Glam-Makeup-4436">Ankita ( Akshitaz Glam Makeup ) <span class="verified"><i class="fa fa-check-circle"></i></span> </a></h3>
                                                    <div><i class="fa fa-map-marker"></i> Pune</div>
                                                </div>
                                                <!--<div class="reviews">-->
                                                <!--    <span class="stars">-->
                                                <!--        -->
                                                <!--        <span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span>                                    -->
                                                <!--    </span>-->
                                                <!--    (0 review)-->
                                                <!--</div>-->
                                            </div>
                                        </div>
                                    </div></div><div class="owl-item cloned" style="width: 302px; margin-right: 30px;"><div class="item">
                                        <div class="wedding-listing">
                                            <div class="img">
                                                <a href="https://wedjio.com/profile/Jyoti-singodia-makeup-over-4429">
                                                    <img src="https://wedjio.com/storage/upload/vendor/featured/fVkRKSoPzuhlXYJ6jLiHuADhIGVEX0LUhS3F1joM.jpg" alt="fVkRKSoPzuhlXYJ6jLiHuADhIGVEX0LUhS3F1joM.jpg">
                                                </a>
                                                <div class="img-content">
                                                    <div class="top">  
                                                        <span class="featured">
                                                            <i class="fa fa-star"></i>
                                                            <span>Featured</span>
                                                        </span>
                                                        <!-- <span class="price">
                                                            <i class="fa fa-tag"></i>
                                                            <span>$500-$800</span>
                                                        </span> -->
                                                    </div>
                                                    <div class="bottom">
                                                        <a class="tags" href="https://wedjio.com/profile/Jyoti-singodia-makeup-over-4429">
                                                            Makeup Artist
                                                        </a>
                                                        <a class="favorite" href="javascript:">
                                                            <i class="fa fa-heart-o"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="gap">
                                                    <h3><a href="https://wedjio.com/profile/Jyoti-singodia-makeup-over-4429">Jyoti singodia ( Jyoti singodia makeup over ) <span class="verified"><i class="fa fa-check-circle"></i></span> </a></h3>
                                                    <div><i class="fa fa-map-marker"></i> Mumbai</div>
                                                </div>
                                                <!--<div class="reviews">-->
                                                <!--    <span class="stars">-->
                                                <!--        -->
                                                <!--        <span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span>                                    -->
                                                <!--    </span>-->
                                                <!--    (0 review)-->
                                                <!--</div>-->
                                            </div>
                                        </div>
                                    </div></div><div class="owl-item cloned" style="width: 302px; margin-right: 30px;"><div class="item">
                                        <div class="wedding-listing">
                                            <div class="img">
                                                <a href="https://wedjio.com/profile/makeup-artist-shubhada-kudale-4418">
                                                    <img src="https://wedjio.com/storage/upload/vendor/featured/ZpVnoicPhaUnjTu9jExYEaPEr9TwJ5k754wvXrPK.jpg" alt="ZpVnoicPhaUnjTu9jExYEaPEr9TwJ5k754wvXrPK.jpg">
                                                </a>
                                                <div class="img-content">
                                                    <div class="top">  
                                                        <span class="featured">
                                                            <i class="fa fa-star"></i>
                                                            <span>Featured</span>
                                                        </span>
                                                        <!-- <span class="price">
                                                            <i class="fa fa-tag"></i>
                                                            <span>$500-$800</span>
                                                        </span> -->
                                                    </div>
                                                    <div class="bottom">
                                                        <a class="tags" href="https://wedjio.com/profile/makeup-artist-shubhada-kudale-4418">
                                                            Makeup Artist
                                                        </a>
                                                        <a class="favorite" href="javascript:">
                                                            <i class="fa fa-heart-o"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="gap">
                                                    <h3><a href="https://wedjio.com/profile/makeup-artist-shubhada-kudale-4418">Shubhada kudale ( makeup artist shubhada kudale ) <span class="verified"><i class="fa fa-check-circle"></i></span> </a></h3>
                                                    <div><i class="fa fa-map-marker"></i> Pune</div>
                                                </div>
                                                <!--<div class="reviews">-->
                                                <!--    <span class="stars">-->
                                                <!--        -->
                                                <!--        <span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span>                                    -->
                                                <!--    </span>-->
                                                <!--    (0 review)-->
                                                <!--</div>-->
                                            </div>
                                        </div>
                                    </div></div><div class="owl-item cloned" style="width: 302px; margin-right: 30px;"><div class="item">
                                        <div class="wedding-listing">
                                            <div class="img">
                                                <a href="https://wedjio.com/profile/BV-makeup-artist-4414">
                                                    <img src="https://wedjio.com/storage/upload/vendor/featured/rB2bjOubKaOEqGBf3UknjyOQMY2Fqt591qAMke8A.jpg" alt="rB2bjOubKaOEqGBf3UknjyOQMY2Fqt591qAMke8A.jpg">
                                                </a>
                                                <div class="img-content">
                                                    <div class="top">  
                                                        <span class="featured">
                                                            <i class="fa fa-star"></i>
                                                            <span>Featured</span>
                                                        </span>
                                                        <!-- <span class="price">
                                                            <i class="fa fa-tag"></i>
                                                            <span>$500-$800</span>
                                                        </span> -->
                                                    </div>
                                                    <div class="bottom">
                                                        <a class="tags" href="https://wedjio.com/profile/BV-makeup-artist-4414">
                                                            Makeup Artist
                                                        </a>
                                                        <a class="favorite" href="javascript:">
                                                            <i class="fa fa-heart-o"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="gap">
                                                    <h3><a href="https://wedjio.com/profile/BV-makeup-artist-4414">Bhavanavadhia ( BV makeup artist ) <span class="verified"><i class="fa fa-check-circle"></i></span> </a></h3>
                                                    <div><i class="fa fa-map-marker"></i> Mumbai</div>
                                                </div>
                                                <!--<div class="reviews">-->
                                                <!--    <span class="stars">-->
                                                <!--        -->
                                                <!--        <span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span>                                    -->
                                                <!--    </span>-->
                                                <!--    (0 review)-->
                                                <!--</div>-->
                                            </div>
                                        </div>
                                    </div></div><div class="owl-item cloned" style="width: 302px; margin-right: 30px;"><div class="item">
                                        <div class="wedding-listing">
                                            <div class="img">
                                                <a href="https://wedjio.com/profile/makeover-by-monika-4410">
                                                    <img src="https://wedjio.com/storage/upload/vendor/featured/vzoh8kYyId63vUuUhVoK38MoWc2ZcMihixijYiRh.jpg" alt="vzoh8kYyId63vUuUhVoK38MoWc2ZcMihixijYiRh.jpg">
                                                </a>
                                                <div class="img-content">
                                                    <div class="top">  
                                                        <span class="featured">
                                                            <i class="fa fa-star"></i>
                                                            <span>Featured</span>
                                                        </span>
                                                        <!-- <span class="price">
                                                            <i class="fa fa-tag"></i>
                                                            <span>$500-$800</span>
                                                        </span> -->
                                                    </div>
                                                    <div class="bottom">
                                                        <a class="tags" href="https://wedjio.com/profile/makeover-by-monika-4410">
                                                            Makeup Artist
                                                        </a>
                                                        <a class="favorite" href="javascript:">
                                                            <i class="fa fa-heart-o"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="gap">
                                                    <h3><a href="https://wedjio.com/profile/makeover-by-monika-4410">monika joshi ( makeover by monika ) <span class="verified"><i class="fa fa-check-circle"></i></span> </a></h3>
                                                    <div><i class="fa fa-map-marker"></i> Dehradun</div>
                                                </div>
                                                <!--<div class="reviews">-->
                                                <!--    <span class="stars">-->
                                                <!--        -->
                                                <!--        <span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span>                                    -->
                                                <!--    </span>-->
                                                <!--    (0 review)-->
                                                <!--</div>-->
                                            </div>
                                        </div>
                                    </div></div><div class="owl-item cloned" style="width: 302px; margin-right: 30px;"><div class="item">
                                        <div class="wedding-listing">
                                            <div class="img">
                                                <a href="https://wedjio.com/profile/Neh@Heena-4408">
                                                    <img src="https://wedjio.com/storage/upload/vendor/featured/PTdfu9wnpkKAY38GS6ecB1KMLtZC0q0I3PSTanf1.jpg" alt="PTdfu9wnpkKAY38GS6ecB1KMLtZC0q0I3PSTanf1.jpg">
                                                </a>
                                                <div class="img-content">
                                                    <div class="top">  
                                                        <span class="featured">
                                                            <i class="fa fa-star"></i>
                                                            <span>Featured</span>
                                                        </span>
                                                        <!-- <span class="price">
                                                            <i class="fa fa-tag"></i>
                                                            <span>$500-$800</span>
                                                        </span> -->
                                                    </div>
                                                    <div class="bottom">
                                                        <a class="tags" href="https://wedjio.com/profile/Neh@Heena-4408">
                                                            Mehndi Artist
                                                        </a>
                                                        <a class="favorite" href="javascript:">
                                                            <i class="fa fa-heart-o"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="content">
                                                <div class="gap">
                                                    <h3><a href="https://wedjio.com/profile/Neh@Heena-4408">Neha Naik ( Neh@Heena ) <span class="verified"><i class="fa fa-check-circle"></i></span> </a></h3>
                                                    <div><i class="fa fa-map-marker"></i> Pune</div>
                                                </div>
                                                <!--<div class="reviews">-->
                                                <!--    <span class="stars">-->
                                                <!--        -->
                                                <!--        <span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span><span><i class="fa fa-star-o"></i></span>                                    -->
                                                <!--    </span>-->
                                                <!--    (0 review)-->
                                                <!--</div>-->
                                            </div>
                                        </div>
                                    </div></div></div></div><div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><i class="fa fa-angle-left"></i></button><button type="button" role="presentation" class="owl-next"><i class="fa fa-angle-right"></i></button></div><div class="owl-dots disabled"></div></div>
                            </div>
                                                        <!-- Widget Wrap -->
                        </div>
                        <!-- Sidebar Secondary End -->

                        
                    </aside>
                </div>
                <!-- Vendor Sidebar -->
            </div>
        </div>
    </section>

@endsection