@extends('layouts.app')

@section('content')

    <!-- page content start -->

        <section class="slider-wrap style-second">
        <div class="slider-content">
            <div class="container">
                <div class="row">
                    <div class="col-xl-10 col-lg-12 mx-auto">
                        <h1>TheweddingWay</h1>
                        <h1>"Turning dreams into reality the perfect wedding starts here"</h1>
                        <p class="lead txt-white text-center">Search over 100,000 wedding vendors with reviews, pricing, availability and more</p>
                        <form action="#" method="post">
                            <input type="hidden" name="_token" value="LcmpVcemsevEoUiXkV3M0hILqzCAaelnfmL3POP2">                            <div class="form-bg row no-gutters align-items-center">
                                <div class="col-12 col-md-5">
                                    <select class="form-light-select form-control theme-combo select2" name="category" >
                                        <option value="0" >Choose Vendor Type</option>
                                        <option value="all">All Categories</option>                                                                                                                    <option value="makeup-artist">Makeup Artist</option>
                                        @foreach($roles as $role)
                                            <option value="{{$role['id']}}">{{$role['name']}}</option>
                                        @endforeach  
                                    </select>
                                </div>
                                <div class="col-12 col-md-5">
                                    <div class="px-2 w-100">
                                        <select class="form-light-select theme-combo form-control" name="city" >
                                            <option value="0">Choose Location</option> 
                                            <option value="all">All Cities</option>                                               
                                            @foreach($locations as $location)
                                                <option value="{{$location['id']}}">{{$location['city']}}( {{$location['state']}} )</option>
                                            @endforeach
                                        </select>
                                        </div>
                                </div>
                                <div class="col-12 col-md-2">
                                    <input type="submit" value="Search Now" class="btn btn-default text-nowrap btn-block  btn-rounded" name="search">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>           
            </div>
            
        </div>
    </section>

<main id="body-content">  

    <!-- Top Wedding Vendors Start -->
    <section class="wide-tb-50 ">
        <div class="container">
            <div class="section-title text-center">
                <h3>Top Category</h3>
            </div>
            <div class="row">
                <div class="owl-carousel owl-theme dots-black owl-loaded owl-drag" id="home-slider-listing-category">    
                <div class="owl-stage-outer">
                    <div class="owl-stage" >
                    @foreach($roles as $role)
                    <div class="owl-item " >
                        <div class="col">
                        <div class="item">
                            <div class="vendor-listing-wrap">                                    
                                <div class="vendor-img">
                                    <div class="overlay-box">
                                        <a href="{{ route('venderBySlug', ['slug' => $role['slug']]) }}" class="btn btn-default btn-rounded btn-sm">View Details</a> 
                                    </div>
                                    <div class="vendor-icon"><i class="fa fa-paint-brush" aria-hidden="true"></i>  </div>
                                    <a href="#"><img src="{{ asset('storage/images//category/henna-mehndi-hindu.jpg') }} " class="round-img" alt=""></a>
                                </div>
                                <div class="content">
                                    <h3><a href="{{ route('venderBySlug', ['slug' => $role['slug']]) }}">{{$role['name']}}</a></h3>
                                </div>                               
                            </div>
                        </div>
                        </div>
                    </div>
                    @endforeach
                    </div></div><div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><i class="fa fa-angle-left"></i></button><button type="button" role="presentation" class="owl-next"><i class="fa fa-angle-right"></i></button></div><div class="owl-dots disabled"></div></div>
                     </div>
        </div>
    </section>
    <!-- Top Wedding Vendors End -->

    
    <!-- Top Wedding Vendors Start -->
    <section class="wide-tb-30 ">
        <div class="container">
            <div class="section-title text-center">
                <h1>Top Vendors</h1>
            </div>
            <div class="row row-cols-2 row-cols-lg-4 row-cols-md-3 row-cols-sm-1">
            @foreach($top_vendors as $vendor)
                <div class="col ">
                    <div class="vendor-wrap-alt">
                        <div class="img">
                            <img src="{{ asset('public/storage/images/woman-traditional-dress.jpg') }} ">
                            <div class="img-content-top">
                                <div class="top">
                                    <span class="is_top">
                                        <i class="fa fa-arrow-up"></i>
                                        <span>Top</span>
                                    </span>
                                </div>
                            </div>
                            <div class="img-content">
                                <span class="rating">0</span>
                            </div>
                        </div>
                        <div class="content">
                            <div class="vendor-heading">
                                <h3> <i class="fa fa-paint-brush" aria-hidden="true"></i> 
                                 <a href="#">{{$vendor['name']}}</a>
                                </h3>
                                </div>
                            <div class="mb-2">
                                <i class="fa fa-list" aria-hidden="true"></i> 
                                {{$vendor['role_detail']['name']}} by {{$vendor['name']}} <span class="verified"><i class="fa fa-check-circle"></i></span>
                            </div>
                            <div class="mb-2">
                                <i class="fa fa-map-marker" aria-hidden="true"></i> 
                                {{$vendor['location']['city']}}
                            </div>                            
                        </div>                        
                    </div>
                </div>
                @endforeach                  
            </div>
        </div>
    </section>
    <!-- Top Wedding Vendors End --> 

    <!-- Latest News & Updates Start -->
    <section class="wide-tb-50 ">
        <div class="container">
            <div class="section-title text-center">
                <h1>Latest Articles</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <!-- Post Blog -->
                    <div class="blog-wrap-home">                            
                        <div class="post-content">
                            <!-- Post Blog Image -->
                            <div class="post-img blog-image">
                                <img src="https://wedjio.com/storage/upload/blog/LGQfeNwnjVP2P5TRnf5eLqisuE3NZO3sYl0UxGuX.jpg" alt="">
                            </div>
                            <!-- Post Blog Image -->
                            <!-- Post Blog Content -->
                            <div class="home-content">
                                <div class="mt-auto">
                                    <span class="post-category">
                                        <a href="#">Wedding Planner</a>
                                    </span>
                                    <h3 class="blog-title"><a href="#" class="post-title">How to Plan Your Wedding?</a></h3>
                                    <div class="entry-content">
                                        <!-- <p>Quis autem vel eum prehenderit qui in ea voluptate velit esse quam nihil mole.</p> -->
                                    </div>
                                    <div class="read-more">
                                        <a href="#" class="btn btn-link btn-link-default">Read More</a>
                                    </div>               
                                </div>                     
                            </div>                   
                            <!-- Post Blog Content -->
                        </div>                            
                    </div>
                    <!-- Post Blog -->
                </div>
                                                <div class="col-lg-4 col-md-6">
                    <!-- Post Blog -->
                    <div class="blog-wrap-home">                            
                        <div class="post-content">
                            <!-- Post Blog Image -->
                            <div class="post-img blog-image">
                                <img src="https://wedjio.com/storage/upload/blog/DsveJUEUuyQkv8uMeTQhbgw4i0heR1Lhk3d5Al55.jpg" alt="">
                            </div>
                            <!-- Post Blog Image -->
                            <!-- Post Blog Content -->
                            <div class="home-content">                                    
                                <!-- <span class="meta-date">Jul 24, 2024</span> -->

                                <div class="mt-auto">
                                    <span class="post-category">
                                        <a href="#">Mehndi Artist</a>
                                    </span>
                                    <h3 class="blog-title"><a href="#" class="post-title">Best 3 Mehndi Artists in Bangalore</a></h3>
                                    <div class="entry-content">
                                        <!-- <p>Quis autem vel eum prehenderit qui in ea voluptate velit esse quam nihil mole.</p> -->
                                    </div>
                                    <div class="read-more">
                                        <a href="#" class="btn btn-link btn-link-default">Read More</a>
                                    </div>               
                                </div>                     
                            </div>                   
                            <!-- Post Blog Content -->
                        </div>                            
                    </div>
                    <!-- Post Blog -->
                </div>
                <div class="col-lg-4 col-md-6">
                    <!-- Post Blog -->
                    <div class="blog-wrap-home">                            
                        <div class="post-content">
                            <!-- Post Blog Image -->
                            <div class="post-img blog-image">
                                <img src="https://wedjio.com/storage/upload/blog/7xKqOXCmGahrx7jaPKIRC4f0KZouaYdYkGytesQO.jpg" alt="">
                            </div>
                            <!-- Post Blog Image -->
                            <!-- Post Blog Content -->
                            <div class="home-content">                                    
                                <!-- <span class="meta-date">Jul 10, 2024</span> -->

                                <div class="mt-auto">
                                    <span class="post-category">
                                        <a href="#">Mehndi Artist</a>
                                    </span>
                                    <h3 class="blog-title"><a href="#" class="post-title">The Masters of Mehndi: Jaipur's Top 3 Henna Artists</a></h3>
                                    <div class="entry-content">
                                        <!-- <p>Quis autem vel eum prehenderit qui in ea voluptate velit esse quam nihil mole.</p> -->
                                    </div>
                                    <div class="read-more">
                                        <a href="#" class="btn btn-link btn-link-default">Read More</a>
                                    </div>               
                                </div>                     
                            </div>                   
                            <!-- Post Blog Content -->
                        </div>                            
                    </div>
                    <!-- Post Blog -->
                </div>
                
            </div>

            <div class="text-center mt-3">
                <a href="#" class="btn btn-default btn-rounded btn-lg">More Articles</a>
            </div>
                    </div>
    </section>
    <!-- Latest News & Updates End -->

    <!-- Celebraty Wedding Start -->
    <section class="wide-tb-50 ">
        <div class="container">
            <div class="section-title text-center">
                <h1>Celebrity wedding</h1>
            </div>           
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="team-style-default">
                        <div class="social-wrap">
                            <img src="https://wedjio.com/storage/upload/blog/NFOWF2Zq3NwZzoidmq4LUHVGZHf57G7hKBDDmwsK.jpg" alt="">
                            
                        </div>
                        <div class="content">
                            <h3 class="fw-7"><a href="#">Sonakshi Sinha and Zaheer Iqbal: A Wedding to Remember</a></h3>
                        </div>
                        
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="team-style-default">
                        <div class="social-wrap">
                            <img src="https://wedjio.com/storage/upload/blog/FiHrNty3XFl3kMEhd4AiTiVS2fhKNm7NLLA3EImp.jpg" alt="">
                        </div>
                        <div class="content">
                            <h3 class="fw-7"><a href="#">Kiara Advani Weds Sidharth Malhotra</a></h3>
                        </div>
                        
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="team-style-default">
                        <div class="social-wrap">
                            <img src="https://wedjio.com/storage/upload/blog/ftkHGhcoLUOzxIJJZrWGxn7Lnp7BKq0ZKFcOM20o.jpg" alt="">
                        </div>
                        <div class="content">
                            <h3 class="fw-7"><a href="#">Parineeti Chopra Weds Raghav Chadha</a></h3>
                        </div>                        
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="team-style-default">
                        <div class="social-wrap">
                            <img src="https://wedjio.com/storage/upload/blog/e3zJZYsxG9HCmgyFOhRg8VGbfMRRLx9e7AD7DkSP.jpg" alt="">
                            
                        </div>
                        <div class="content">
                            <h3 class="fw-7"><a href="#">Athiya Shetty Weds KL Rahul</a></h3>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="text-center mt-3">
                <a href="#" class="btn btn-default btn-rounded btn-lg">More Celebrity Weddings</a>
            </div>
        </div>
    </section>
    <!-- Celebraty Wedding End -->
    <!-- Callout Style Main Start -->
    <section class="callout-main bg-light-gray">
        <div class="container-fluid pl-0">
            <div class="row">
                <div class="col-lg-6" style="background: url(https://wedjio.com/front/images/callout_img.jpg) center center no-repeat; background-size: cover;">
                    <img src="https://wedjio.com/front/images/callout_img.jpg" class="d-lg-none invisible" alt="">                    
                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="callout-text">
                        <div class="section-title">
                            <h1>The Best Wedding Vendor Service</h1>                        
                        </div> 
                        <p class="lead">Tell us more about your requirements</p>
                        <p class="lead">We connect with right service provider</p>
                        <p class="lead">Happy with our service</p>
                        <a href="#" class="btn btn-default btn-rounded btn-lg">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Callout Style Main End -->
    
    <!-- Top Wedding Listings Start -->
    <section class="wide-tb-50 floral-bg bg-light-gray">
        <div class="container">
            <div class="section-title text-center">
                <h1>Celebrity Vendors</h1>
            </div>
            <div class="owl-carousel owl-theme dots-black owl-loaded owl-drag" id="home-slider-listing">                        
                <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-2260px, 0px, 0px); transition: all 1s ease 0s; width: 8758px;"><div class="owl-item cloned" style="width: 262.5px; margin-right: 20px;"><div class="item">
                    <div class="wedding-listing">
                        <div class="img">
                            <a href="#">
                                <img src="https://wedjio.com/storage/upload/vendor/featured/PTdfu9wnpkKAY38GS6ecB1KMLtZC0q0I3PSTanf1.jpg" alt="PTdfu9wnpkKAY38GS6ecB1KMLtZC0q0I3PSTanf1.jpg">
                            </a>
                            <div class="img-content">
                                <div class="top">  
                                    <span class="featured">
                                        <i class="fa fa-star"></i>
                                        <span>Celebrity</span>
                                    </span>
                                </div>
                                <div class="bottom">
                                    <a class="tags" href="#">
                                        Mehndi Artist
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="content">
                            <div class="gap">
                                <h3><a href="#">Neh@Heena <span class="verified"><i class="fa fa-check-circle"></i></span> </a></h3>
                                <div><i class="fa fa-map-marker"></i> Pune</div>
                            </div>
                        </div>
                    </div>
                </div></div><div class="owl-item cloned" style="width: 262.5px; margin-right: 20px;"><div class="item">
                    <div class="wedding-listing">
                        <div class="img">
                            <a href="#">
                                <img src="https://wedjio.com/storage/upload/vendor/featured/GyGrm16dIaGs6l3QceIfJgCCrNsgFEPehDM3yxLx.jpg" alt="GyGrm16dIaGs6l3QceIfJgCCrNsgFEPehDM3yxLx.jpg">
                            </a>
                            <div class="img-content">
                                <div class="top">  
                                    <span class="featured">
                                        <i class="fa fa-star"></i>
                                        <span>Celebrity</span>
                                    </span>
                                </div>
                                <div class="bottom">
                                    <a class="tags" href="#">
                                        Makeup Artist
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="content">
                            <div class="gap">
                                <h3><a href="#">Malti Singh makeover <span class="verified"><i class="fa fa-check-circle"></i></span> </a></h3>
                                <div><i class="fa fa-map-marker"></i> Delhi</div>
                            </div>
                        </div>
                    </div>
                </div></div><div class="owl-item cloned" style="width: 262.5px; margin-right: 20px;"><div class="item">
                    <div class="wedding-listing">
                        <div class="img">
                            <a href="#">
                                <img src="https://wedjio.com/storage/upload/vendor/featured/NGqAm3Rh1588tApxEloz80LKmzBRQUObpUkm8PRg.jpg" alt="NGqAm3Rh1588tApxEloz80LKmzBRQUObpUkm8PRg.jpg">
                            </a>
                            <div class="img-content">
                                <div class="top">  
                                    <span class="featured">
                                        <i class="fa fa-star"></i>
                                        <span>Celebrity</span>
                                    </span>
                                </div>
                                <div class="bottom">
                                    <a class="tags" href="#">
                                        Makeup Artist
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="content">
                            <div class="gap">
                                <h3><a href="#">NEW LOOK'S <span class="verified"><i class="fa fa-check-circle"></i></span> </a></h3>
                                <div><i class="fa fa-map-marker"></i> Mumbai</div>
                            </div>
                        </div>
                    </div>
                </div></div><div class="owl-item cloned" style="width: 262.5px; margin-right: 20px;"><div class="item">
                    <div class="wedding-listing">
                        <div class="img">
                            <a href="#">
                                <img src="https://wedjio.com/storage/upload/vendor/featured/NDn9sEnYuGvIjBP473X1EbrAVXjHN3cSSbODFQXI.jpg" alt="NDn9sEnYuGvIjBP473X1EbrAVXjHN3cSSbODFQXI.jpg">
                            </a>
                            <div class="img-content">
                                <div class="top">  
                                    <span class="featured">
                                        <i class="fa fa-star"></i>
                                        <span>Celebrity</span>
                                    </span>
                                </div>
                                <div class="bottom">
                                    <a class="tags" href="#">
                                        Makeup Artist
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="content">
                            <div class="gap">
                                <h3><a href="#">Annuaroramua <span class="verified"><i class="fa fa-check-circle"></i></span> </a></h3>
                                <div><i class="fa fa-map-marker"></i> Chandigarh</div>
                            </div>
                        </div>
                    </div>
                </div></div><div class="owl-item cloned" style="width: 262.5px; margin-right: 20px;"><div class="item">
                    <div class="wedding-listing">
                        <div class="img">
                            <a href="#">
                                <img src="https://wedjio.com/storage/upload/vendor/featured/2WY8DGNTykX7GjZrd9MP00Yf9kXVDkiAYfDaqt55.jpg" alt="2WY8DGNTykX7GjZrd9MP00Yf9kXVDkiAYfDaqt55.jpg">
                            </a>
                            <div class="img-content">
                                <div class="top">  
                                    <span class="featured">
                                        <i class="fa fa-star"></i>
                                        <span>Celebrity</span>
                                    </span>
                                </div>
                                <div class="bottom">
                                    <a class="tags" href="#">
                                        Makeup Artist
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="content">
                            <div class="gap">
                                <h3><a href="#">PriyankaBiganiyamakeovers <span class="verified"><i class="fa fa-check-circle"></i></span> </a></h3>
                                <div><i class="fa fa-map-marker"></i> Mumbai</div>
                            </div>
                        </div>
                    </div>
                </div></div><div class="owl-item cloned" style="width: 262.5px; margin-right: 20px;"><div class="item">
                    <div class="wedding-listing">
                        <div class="img">
                            <a href="#">
                                <img src="https://wedjio.com/storage/upload/vendor/featured/HGLZMTchZCWItLz1wU3nKIMXCvB31Re7hASvpJnl.jpg" alt="HGLZMTchZCWItLz1wU3nKIMXCvB31Re7hASvpJnl.jpg">
                            </a>
                            <div class="img-content">
                                <div class="top">  
                                    <span class="featured">
                                        <i class="fa fa-star"></i>
                                        <span>Celebrity</span>
                                    </span>
                                </div>
                                <div class="bottom">
                                    <a class="tags" href="#">
                                        Makeup Artist
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="content">
                            <div class="gap">
                                <h3><a href="#">Afnanmakeupartist <span class="verified"><i class="fa fa-check-circle"></i></span> </a></h3>
                                <div><i class="fa fa-map-marker"></i> Mumbai</div>
                            </div>
                        </div>
                    </div>
                </div></div><div class="owl-item cloned" style="width: 262.5px; margin-right: 20px;"><div class="item">
                    <div class="wedding-listing">
                        <div class="img">
                            <a href="#">
                                <img src="https://wedjio.com/storage/upload/vendor/featured/MKv9acULwrDy30G2RqTdX8OKGwfsj8gpwGVHP5KG.jpg" alt="MKv9acULwrDy30G2RqTdX8OKGwfsj8gpwGVHP5KG.jpg">
                            </a>
                            <div class="img-content">
                                <div class="top">  
                                    <span class="featured">
                                        <i class="fa fa-star"></i>
                                        <span>Celebrity</span>
                                    </span>
                                </div>
                                <div class="bottom">
                                    <a class="tags" href="#">
                                        Makeup Artist
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="content">
                            <div class="gap">
                                <h3><a href="#">Yasmeen beauty artist <span class="verified"><i class="fa fa-check-circle"></i></span> </a></h3>
                                <div><i class="fa fa-map-marker"></i> Mumbai</div>
                            </div>
                        </div>
                    </div>
                </div></div><div class="owl-item cloned" style="width: 262.5px; margin-right: 20px;"><div class="item">
                    <div class="wedding-listing">
                        <div class="img">
                            <a href="#">
                                <img src="https://wedjio.com/storage/upload/vendor/featured/bLbn2ghe7QLcuAs6zC5WsFyevAQrmVnshZKv3C8x.jpg" alt="bLbn2ghe7QLcuAs6zC5WsFyevAQrmVnshZKv3C8x.jpg">
                            </a>
                            <div class="img-content">
                                <div class="top">  
                                    <span class="featured">
                                        <i class="fa fa-star"></i>
                                        <span>Celebrity</span>
                                    </span>
                                </div>
                                <div class="bottom">
                                    <a class="tags" href="#">
                                        Makeup Artist
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="content">
                            <div class="gap">
                                <h3><a href="#">SHAISTA ARIF MAKEOVERS <span class="verified"><i class="fa fa-check-circle"></i></span> </a></h3>
                                <div><i class="fa fa-map-marker"></i> Delhi</div>
                            </div>
                        </div>
                    </div>
                </div></div><div class="owl-item active" style="width: 262.5px; margin-right: 20px;"><div class="item">
                    <div class="wedding-listing">
                        <div class="img">
                            <a href="#">
                                <img src="https://wedjio.com/storage/upload/vendor/featured/9eBFvbl7Rkf85yrhFBmlzdcKz7MGo9X9DIhB7ZkA.jpg" alt="9eBFvbl7Rkf85yrhFBmlzdcKz7MGo9X9DIhB7ZkA.jpg">
                            </a>
                            <div class="img-content">
                                <div class="top">  
                                    <span class="featured">
                                        <i class="fa fa-star"></i>
                                        <span>Celebrity</span>
                                    </span>
                                </div>
                                <div class="bottom">
                                    <a class="tags" href="#">
                                        Makeup Artist
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="content">
                            <div class="gap">
                                <h3><a href="#">Vaishnavi makeup artist <span class="verified"><i class="fa fa-check-circle"></i></span> </a></h3>
                                <div><i class="fa fa-map-marker"></i> Pune</div>
                            </div>
                        </div>
                    </div>
                </div></div><div class="owl-item active" style="width: 262.5px; margin-right: 20px;"><div class="item">
                    <div class="wedding-listing">
                        <div class="img">
                            <a href="#">
                                <img src="https://wedjio.com/storage/upload/vendor/featured/SrgYFI6N65Iisksa4TJH3hPG5TQy2Q2b8Qqu3VRx.jpg" alt="SrgYFI6N65Iisksa4TJH3hPG5TQy2Q2b8Qqu3VRx.jpg">
                            </a>
                            <div class="img-content">
                                <div class="top">  
                                    <span class="featured">
                                        <i class="fa fa-star"></i>
                                        <span>Celebrity</span>
                                    </span>
                                </div>
                                <div class="bottom">
                                    <a class="tags" href="#">
                                        Makeup Artist
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="content">
                            <div class="gap">
                                <h3><a href="#">Makeup by Himanshi Babbar <span class="verified"><i class="fa fa-check-circle"></i></span> </a></h3>
                                <div><i class="fa fa-map-marker"></i> Delhi</div>
                            </div>
                        </div>
                    </div>
                </div></div><div class="owl-item active" style="width: 262.5px; margin-right: 20px;"><div class="item">
                    <div class="wedding-listing">
                        <div class="img">
                            <a href="#">
                                <img src="https://wedjio.com/storage/upload/vendor/featured/lSwoyBnfukB8pt7yP7EvZ8zGRJf5vbuaKfe6N6Tn.jpg" alt="lSwoyBnfukB8pt7yP7EvZ8zGRJf5vbuaKfe6N6Tn.jpg">
                            </a>
                            <div class="img-content">
                                <div class="top">  
                                    <span class="featured">
                                        <i class="fa fa-star"></i>
                                        <span>Celebrity</span>
                                    </span>
                                </div>
                                <div class="bottom">
                                    <a class="tags" href="#">
                                        Makeup Artist
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="content">
                            <div class="gap">
                                <h3><a href="#">Akshitaz Glam Makeup <span class="verified"><i class="fa fa-check-circle"></i></span> </a></h3>
                                <div><i class="fa fa-map-marker"></i> Pune</div>
                            </div>
                        </div>
                    </div>
                </div></div><div class="owl-item active" style="width: 262.5px; margin-right: 20px;"><div class="item">
                    <div class="wedding-listing">
                        <div class="img">
                            <a href="#">
                                <img src="https://wedjio.com/storage/upload/vendor/featured/fVkRKSoPzuhlXYJ6jLiHuADhIGVEX0LUhS3F1joM.jpg" alt="fVkRKSoPzuhlXYJ6jLiHuADhIGVEX0LUhS3F1joM.jpg">
                            </a>
                            <div class="img-content">
                                <div class="top">  
                                    <span class="featured">
                                        <i class="fa fa-star"></i>
                                        <span>Celebrity</span>
                                    </span>
                                    <!-- <span class="price">
                                        <i class="fa fa-tag"></i>
                                        <span>$500-$800</span>
                                    </span> -->
                                </div>
                                <div class="bottom">
                                    <a class="tags" href="#">
                                        Makeup Artist
                                    </a>

                                                                    </div>
                            </div>
                        </div>
                        <div class="content">
                            <div class="gap">
                                <h3><a href="#">Jyoti singodia makeup over <span class="verified"><i class="fa fa-check-circle"></i></span> </a></h3>
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
                </div></div><div class="owl-item" style="width: 262.5px; margin-right: 20px;"><div class="item">
                    <div class="wedding-listing">
                        <div class="img">
                            <a href="https://wedjio.com/profile/makeup-artist-shubhada-kudale-4418">
                                <img src="https://wedjio.com/storage/upload/vendor/featured/ZpVnoicPhaUnjTu9jExYEaPEr9TwJ5k754wvXrPK.jpg" alt="ZpVnoicPhaUnjTu9jExYEaPEr9TwJ5k754wvXrPK.jpg">
                            </a>
                            <div class="img-content">
                                <div class="top">  
                                    <span class="featured">
                                        <i class="fa fa-star"></i>
                                        <span>Celebrity</span>
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

                                                                    </div>
                            </div>
                        </div>
                        <div class="content">
                            <div class="gap">
                                <h3><a href="https://wedjio.com/profile/makeup-artist-shubhada-kudale-4418">makeup artist shubhada kudale <span class="verified"><i class="fa fa-check-circle"></i></span> </a></h3>
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
                </div></div><div class="owl-item" style="width: 262.5px; margin-right: 20px;"><div class="item">
                    <div class="wedding-listing">
                        <div class="img">
                            <a href="#">
                                <img src="https://wedjio.com/storage/upload/vendor/featured/rB2bjOubKaOEqGBf3UknjyOQMY2Fqt591qAMke8A.jpg" alt="rB2bjOubKaOEqGBf3UknjyOQMY2Fqt591qAMke8A.jpg">
                            </a>
                            <div class="img-content">
                                <div class="top">  
                                    <span class="featured">
                                        <i class="fa fa-star"></i>
                                        <span>Celebrity</span>
                                    </span>
                                </div>
                                <div class="bottom">
                                    <a class="tags" href="#">
                                        Makeup Artist
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="content">
                            <div class="gap">
                                <h3><a href="#">BV makeup artist <span class="verified"><i class="fa fa-check-circle"></i></span> </a></h3>
                                <div><i class="fa fa-map-marker"></i> Mumbai</div>
                            </div>
                        </div>
                    </div>
                </div></div><div class="owl-item" style="width: 262.5px; margin-right: 20px;"><div class="item">
                    <div class="wedding-listing">
                        <div class="img">
                            <a href="#">
                                <img src="https://wedjio.com/storage/upload/vendor/featured/vzoh8kYyId63vUuUhVoK38MoWc2ZcMihixijYiRh.jpg" alt="vzoh8kYyId63vUuUhVoK38MoWc2ZcMihixijYiRh.jpg">
                            </a>
                            <div class="img-content">
                                <div class="top">  
                                    <span class="featured">
                                        <i class="fa fa-star"></i>
                                        <span>Celebrity</span>
                                    </span>
                                </div>
                                <div class="bottom">
                                    <a class="tags" href="#">
                                        Makeup Artist
                                    </a>
                                 </div>
                            </div>
                        </div>
                        <div class="content">
                            <div class="gap">
                                <h3><a href="#">makeover by monika <span class="verified"><i class="fa fa-check-circle"></i></span> </a></h3>
                                <div><i class="fa fa-map-marker"></i> Dehradun</div>
                            </div>
                        </div>
                    </div>
                </div></div><div class="owl-item" style="width: 262.5px; margin-right: 20px;"><div class="item">
                    <div class="wedding-listing">
                        <div class="img">
                            <a href="#">
                                <img src="https://wedjio.com/storage/upload/vendor/featured/PTdfu9wnpkKAY38GS6ecB1KMLtZC0q0I3PSTanf1.jpg" alt="PTdfu9wnpkKAY38GS6ecB1KMLtZC0q0I3PSTanf1.jpg">
                            </a>
                            <div class="img-content">
                                <div class="top">  
                                    <span class="featured">
                                        <i class="fa fa-star"></i>
                                        <span>Celebrity</span>
                                    </span>
                                </div>
                                <div class="bottom">
                                    <a class="tags" href="#">
                                        Mehndi Artist
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="content">
                            <div class="gap">
                                <h3><a href="#">Neh@Heena <span class="verified"><i class="fa fa-check-circle"></i></span> </a></h3>
                                <div><i class="fa fa-map-marker"></i> Pune</div>
                            </div>
                        </div>
                    </div>
                </div></div><div class="owl-item" style="width: 262.5px; margin-right: 20px;"><div class="item">
                    <div class="wedding-listing">
                        <div class="img">
                            <a href="#">
                                <img src="https://wedjio.com/storage/upload/vendor/featured/GyGrm16dIaGs6l3QceIfJgCCrNsgFEPehDM3yxLx.jpg" alt="GyGrm16dIaGs6l3QceIfJgCCrNsgFEPehDM3yxLx.jpg">
                            </a>
                            <div class="img-content">
                                <div class="top">  
                                    <span class="featured">
                                        <i class="fa fa-star"></i>
                                        <span>Celebrity</span>
                                    </span>
                                </div>
                                <div class="bottom">
                                    <a class="tags" href="#">
                                        Makeup Artist
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="content">
                            <div class="gap">
                                <h3><a href="#">Malti Singh makeover <span class="verified"><i class="fa fa-check-circle"></i></span> </a></h3>
                                <div><i class="fa fa-map-marker"></i> Delhi</div>
                            </div>
                        </div>
                    </div>
                </div></div><div class="owl-item" style="width: 262.5px; margin-right: 20px;"><div class="item">
                    <div class="wedding-listing">
                        <div class="img">
                            <a href="#">
                                <img src="https://wedjio.com/storage/upload/vendor/featured/NGqAm3Rh1588tApxEloz80LKmzBRQUObpUkm8PRg.jpg" alt="NGqAm3Rh1588tApxEloz80LKmzBRQUObpUkm8PRg.jpg">
                            </a>
                            <div class="img-content">
                                <div class="top">  
                                    <span class="featured">
                                        <i class="fa fa-star"></i>
                                        <span>Celebrity</span>
                                    </span>
                                </div>
                                <div class="bottom">
                                    <a class="tags" href="#">
                                        Makeup Artist
                                    </a>
                                 </div>
                            </div>
                        </div>
                        <div class="content">
                            <div class="gap">
                                <h3><a href="#">NEW LOOK'S <span class="verified"><i class="fa fa-check-circle"></i></span> </a></h3>
                                <div><i class="fa fa-map-marker"></i> Mumbai</div>
                            </div>
                        </div>
                    </div>
                </div></div><div class="owl-item" style="width: 262.5px; margin-right: 20px;"><div class="item">
                    <div class="wedding-listing">
                        <div class="img">
                            <a href="#">
                                <img src="https://wedjio.com/storage/upload/vendor/featured/NDn9sEnYuGvIjBP473X1EbrAVXjHN3cSSbODFQXI.jpg" alt="NDn9sEnYuGvIjBP473X1EbrAVXjHN3cSSbODFQXI.jpg">
                            </a>
                            <div class="img-content">
                                <div class="top">  
                                    <span class="featured">
                                        <i class="fa fa-star"></i>
                                        <span>Celebrity</span>
                                    </span>
                                </div>
                                <div class="bottom">
                                    <a class="tags" href="#">
                                        Makeup Artist
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="content">
                            <div class="gap">
                                <h3><a href="#">Annuaroramua <span class="verified"><i class="fa fa-check-circle"></i></span> </a></h3>
                                <div><i class="fa fa-map-marker"></i> Chandigarh</div>
                            </div>
                        </div>
                    </div>
                </div></div><div class="owl-item" style="width: 262.5px; margin-right: 20px;"><div class="item">
                    <div class="wedding-listing">
                        <div class="img">
                            <a href="#">
                                <img src="https://wedjio.com/storage/upload/vendor/featured/2WY8DGNTykX7GjZrd9MP00Yf9kXVDkiAYfDaqt55.jpg" alt="2WY8DGNTykX7GjZrd9MP00Yf9kXVDkiAYfDaqt55.jpg">
                            </a>
                            <div class="img-content">
                                <div class="top">  
                                    <span class="featured">
                                        <i class="fa fa-star"></i>
                                        <span>Celebrity</span>
                                    </span>
                                </div>
                                <div class="bottom">
                                    <a class="tags" href="#">
                                        Makeup Artist
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="content">
                            <div class="gap">
                                <h3><a href="#">PriyankaBiganiyamakeovers <span class="verified"><i class="fa fa-check-circle"></i></span> </a></h3>
                                <div><i class="fa fa-map-marker"></i> Mumbai</div>
                            </div>
                        </div>
                    </div>
                </div></div><div class="owl-item" style="width: 262.5px; margin-right: 20px;"><div class="item">
                    <div class="wedding-listing">
                        <div class="img">
                            <a href="#">
                                <img src="https://wedjio.com/storage/upload/vendor/featured/HGLZMTchZCWItLz1wU3nKIMXCvB31Re7hASvpJnl.jpg" alt="HGLZMTchZCWItLz1wU3nKIMXCvB31Re7hASvpJnl.jpg">
                            </a>
                            <div class="img-content">
                                <div class="top">  
                                    <span class="featured">
                                        <i class="fa fa-star"></i>
                                        <span>Celebrity</span>
                                    </span>
                                </div>
                                <div class="bottom">
                                    <a class="tags" href="#">
                                        Makeup Artist
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="content">
                            <div class="gap">
                                <h3><a href="#">Afnanmakeupartist <span class="verified"><i class="fa fa-check-circle"></i></span> </a></h3>
                                <div><i class="fa fa-map-marker"></i> Mumbai</div>
                            </div>
                        </div>
                    </div>
                </div></div><div class="owl-item" style="width: 262.5px; margin-right: 20px;"><div class="item">
                    <div class="wedding-listing">
                        <div class="img">
                            <a href="#">
                                <img src="https://wedjio.com/storage/upload/vendor/featured/MKv9acULwrDy30G2RqTdX8OKGwfsj8gpwGVHP5KG.jpg" alt="MKv9acULwrDy30G2RqTdX8OKGwfsj8gpwGVHP5KG.jpg">
                            </a>
                            <div class="img-content">
                                <div class="top">  
                                    <span class="featured">
                                        <i class="fa fa-star"></i>
                                        <span>Celebrity</span>
                                    </span>
                                </div>
                                <div class="bottom">
                                    <a class="tags" href="#">
                                        Makeup Artist
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="content">
                            <div class="gap">
                                <h3><a href="#">Yasmeen beauty artist <span class="verified"><i class="fa fa-check-circle"></i></span> </a></h3>
                                <div><i class="fa fa-map-marker"></i> Mumbai</div>
                            </div>
                        </div>
                    </div>
                </div></div><div class="owl-item" style="width: 262.5px; margin-right: 20px;"><div class="item">
                    <div class="wedding-listing">
                        <div class="img">
                            <a href="#">
                                <img src="https://wedjio.com/storage/upload/vendor/featured/bLbn2ghe7QLcuAs6zC5WsFyevAQrmVnshZKv3C8x.jpg" alt="bLbn2ghe7QLcuAs6zC5WsFyevAQrmVnshZKv3C8x.jpg">
                            </a>
                            <div class="img-content">
                                <div class="top">  
                                    <span class="featured">
                                        <i class="fa fa-star"></i>
                                        <span>Celebrity</span>
                                    </span>
                                </div>
                                <div class="bottom">
                                    <a class="tags" href="#">
                                        Makeup Artist
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="content">
                            <div class="gap">
                                <h3><a href="#">SHAISTA ARIF MAKEOVERS <span class="verified"><i class="fa fa-check-circle"></i></span> </a></h3>
                                <div><i class="fa fa-map-marker"></i> Delhi</div>
                            </div>
                        </div>
                    </div>
                </div></div><div class="owl-item cloned" style="width: 262.5px; margin-right: 20px;"><div class="item">
                    <div class="wedding-listing">
                        <div class="img">
                            <a href="#">
                                <img src="https://wedjio.com/storage/upload/vendor/featured/9eBFvbl7Rkf85yrhFBmlzdcKz7MGo9X9DIhB7ZkA.jpg" alt="9eBFvbl7Rkf85yrhFBmlzdcKz7MGo9X9DIhB7ZkA.jpg">
                            </a>
                            <div class="img-content">
                                <div class="top">  
                                    <span class="featured">
                                        <i class="fa fa-star"></i>
                                        <span>Celebrity</span>
                                    </span>
                                </div>
                                <div class="bottom">
                                    <a class="tags" href=#">
                                        Makeup Artist
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="content">
                            <div class="gap">
                                <h3><a href=#">Vaishnavi makeup artist <span class="verified"><i class="fa fa-check-circle"></i></span> </a></h3>
                                <div><i class="fa fa-map-marker"></i> Pune</div>
                            </div>
                        </div>
                    </div>
                </div></div><div class="owl-item cloned" style="width: 262.5px; margin-right: 20px;"><div class="item">
                    <div class="wedding-listing">
                        <div class="img">
                            <a href="#">
                                <img src="https://wedjio.com/storage/upload/vendor/featured/SrgYFI6N65Iisksa4TJH3hPG5TQy2Q2b8Qqu3VRx.jpg" alt="SrgYFI6N65Iisksa4TJH3hPG5TQy2Q2b8Qqu3VRx.jpg">
                            </a>
                            <div class="img-content">
                                <div class="top">  
                                    <span class="featured">
                                        <i class="fa fa-star"></i>
                                        <span>Celebrity</span>
                                    </span>
                                </div>
                                <div class="bottom">
                                    <a class="tags" href="#">
                                        Makeup Artist
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="content">
                            <div class="gap">
                                <h3><a href="#">Makeup by Himanshi Babbar <span class="verified"><i class="fa fa-check-circle"></i></span> </a></h3>
                                <div><i class="fa fa-map-marker"></i> Delhi</div>
                            </div>
                        </div>
                    </div>
                </div></div><div class="owl-item cloned" style="width: 262.5px; margin-right: 20px;"><div class="item">
                    <div class="wedding-listing">
                        <div class="img">
                            <a href="#">
                                <img src="https://wedjio.com/storage/upload/vendor/featured/lSwoyBnfukB8pt7yP7EvZ8zGRJf5vbuaKfe6N6Tn.jpg" alt="lSwoyBnfukB8pt7yP7EvZ8zGRJf5vbuaKfe6N6Tn.jpg">
                            </a>
                            <div class="img-content">
                                <div class="top">  
                                    <span class="featured">
                                        <i class="fa fa-star"></i>
                                        <span>Celebrity</span>
                                    </span>
                                </div>
                                <div class="bottom">
                                    <a class="tags" href="#">
                                        Makeup Artist
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="content">
                            <div class="gap">
                                <h3><a href="#">Akshitaz Glam Makeup <span class="verified"><i class="fa fa-check-circle"></i></span> </a></h3>
                                <div><i class="fa fa-map-marker"></i> Pune</div>
                            </div>
                        </div>
                    </div>
                </div></div><div class="owl-item cloned" style="width: 262.5px; margin-right: 20px;"><div class="item">
                    <div class="wedding-listing">
                        <div class="img">
                            <a href="#">
                                <img src="https://wedjio.com/storage/upload/vendor/featured/fVkRKSoPzuhlXYJ6jLiHuADhIGVEX0LUhS3F1joM.jpg" alt="fVkRKSoPzuhlXYJ6jLiHuADhIGVEX0LUhS3F1joM.jpg">
                            </a>
                            <div class="img-content">
                                <div class="top">  
                                    <span class="featured">
                                        <i class="fa fa-star"></i>
                                        <span>Celebrity</span>
                                    </span>
                                </div>
                                <div class="bottom">
                                    <a class="tags" href="#">
                                        Makeup Artist
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="content">
                            <div class="gap">
                                <h3><a href="#">Jyoti singodia makeup over <span class="verified"><i class="fa fa-check-circle"></i></span> </a></h3>
                                <div><i class="fa fa-map-marker"></i> Mumbai</div>
                            </div>
                        </div>
                    </div>
                </div></div><div class="owl-item cloned" style="width: 262.5px; margin-right: 20px;"><div class="item">
                    <div class="wedding-listing">
                        <div class="img">
                            <a href="#">
                                <img src="https://wedjio.com/storage/upload/vendor/featured/ZpVnoicPhaUnjTu9jExYEaPEr9TwJ5k754wvXrPK.jpg" alt="ZpVnoicPhaUnjTu9jExYEaPEr9TwJ5k754wvXrPK.jpg">
                            </a>
                            <div class="img-content">
                                <div class="top">  
                                    <span class="featured">
                                        <i class="fa fa-star"></i>
                                        <span>Celebrity</span>
                                    </span>
                                </div>
                                <div class="bottom">
                                    <a class="tags" href="#">
                                        Makeup Artist
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="content">
                            <div class="gap">
                                <h3><a href="#">makeup artist shubhada kudale <span class="verified"><i class="fa fa-check-circle"></i></span> </a></h3>
                                <div><i class="fa fa-map-marker"></i> Pune</div>
                            </div>
                        </div>
                    </div>
                </div></div><div class="owl-item cloned" style="width: 262.5px; margin-right: 20px;"><div class="item">
                    <div class="wedding-listing">
                        <div class="img">
                            <a href="#">
                                <img src="https://wedjio.com/storage/upload/vendor/featured/rB2bjOubKaOEqGBf3UknjyOQMY2Fqt591qAMke8A.jpg" alt="rB2bjOubKaOEqGBf3UknjyOQMY2Fqt591qAMke8A.jpg">
                            </a>
                            <div class="img-content">
                                <div class="top">  
                                    <span class="featured">
                                        <i class="fa fa-star"></i>
                                        <span>Celebrity</span>
                                    </span>
                                </div>
                                <div class="bottom">
                                    <a class="tags" href="#">
                                        Makeup Artist
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="content">
                            <div class="gap">
                                <h3><a href="#">BV makeup artist <span class="verified"><i class="fa fa-check-circle"></i></span> </a></h3>
                                <div><i class="fa fa-map-marker"></i> Mumbai</div>
                            </div>
                        </div>
                    </div>
                </div></div><div class="owl-item cloned" style="width: 262.5px; margin-right: 20px;"><div class="item">
                    <div class="wedding-listing">
                        <div class="img">
                            <a href="#">
                                <img src="https://wedjio.com/storage/upload/vendor/featured/vzoh8kYyId63vUuUhVoK38MoWc2ZcMihixijYiRh.jpg" alt="vzoh8kYyId63vUuUhVoK38MoWc2ZcMihixijYiRh.jpg">
                            </a>
                            <div class="img-content">
                                <div class="top">  
                                    <span class="featured">
                                        <i class="fa fa-star"></i>
                                        <span>Celebrity</span>
                                    </span>
                                </div>
                                <div class="bottom">
                                    <a class="tags" href="#">
                                        Makeup Artist
                                    </a>
                                 </div>
                            </div>
                        </div>
                        <div class="content">
                            <div class="gap">
                                <h3><a href="#">makeover by monika <span class="verified"><i class="fa fa-check-circle"></i></span> </a></h3>
                                <div><i class="fa fa-map-marker"></i> Dehradun</div>
                            </div>
                        </div>
                    </div>
                </div></div><div class="owl-item cloned" style="width: 262.5px; margin-right: 20px;"><div class="item">
                    <div class="wedding-listing">
                        <div class="img">
                            <a href="#">
                                <img src="https://wedjio.com/storage/upload/vendor/featured/PTdfu9wnpkKAY38GS6ecB1KMLtZC0q0I3PSTanf1.jpg" alt="PTdfu9wnpkKAY38GS6ecB1KMLtZC0q0I3PSTanf1.jpg">
                            </a>
                            <div class="img-content">
                                <div class="top">  
                                    <span class="featured">
                                        <i class="fa fa-star"></i>
                                        <span>Celebrity</span>
                                    </span>
                                </div>
                                <div class="bottom">
                                    <a class="tags" href="#">
                                        Mehndi Artist
                                    </a>
                                 </div>
                            </div>
                        </div>
                        <div class="content">
                            <div class="gap">
                                <h3><a href="#">Neh@Heena <span class="verified"><i class="fa fa-check-circle"></i></span> </a></h3>
                                <div><i class="fa fa-map-marker"></i> Pune</div>
                            </div>
                        </div>
                    </div>
                </div></div></div></div><div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><i class="fa fa-angle-left"></i></button><button type="button" role="presentation" class="owl-next"><i class="fa fa-angle-right"></i></button></div><div class="owl-dots disabled"></div></div>
        </div>
    </section>
    <!-- Wedding Dir Features End -->

    <!-- Popular locations Start -->
    <section class="wide-tb-50 bg-light-gray ">
        <div class="container">
            <div class="section-title text-center">
                <h1>Popular City</h1>
            </div>
            <div class="row">
                <!-- Popular Locations Alternate -->
                <div class="col-md-6 col-lg-3 col-xl-4">
                    <div class="popular-locations-alternate">                            
                        <div class="overlay-box">
                            <div class="mt-auto">
                                <h3>
                                    <a href="#">Bangalore</a> 
                                    <!-- <span>12 Listings</span> -->
                                </h3>
                            </div>
                        </div>
                        <img src="https://wedjio.com/front/images/locations/location_img_1.jpg" alt="">
                    </div>                        
                </div>
                <!-- Popular Locations Alternate -->

                <!-- Popular Locations Alternate -->
                <div class="col-md-6 col-lg-3 col-xl-4">
                    <div class="popular-locations-alternate">
                        <div class="overlay-box">
                            <div class="mt-auto">
                                <h3><a href="#">Delhi/NCR</a></h3>
                            </div>
                        </div>
                        <img src="https://wedjio.com/front/images/locations/location_img_2.jpg" alt="">
                    </div>                        
                </div>
                <!-- Popular Locations Alternate -->
                
                <!-- Popular Locations Alternate -->
                <div class="col-md-6 col-lg-3 col-xl-4">
                    <div class="popular-locations-alternate">
                        <div class="overlay-box">
                            <div class="mt-auto">
                                <h3><a href="#">Pune</a> </h3>
                            </div>
                        </div>
                        <img src="https://wedjio.com/front/images/locations/location_img_3.jpg" alt="">
                    </div>                        
                </div>
                <!-- Popular Locations Alternate -->

                <!-- Popular Locations Alternate -->
                <div class="col-md-6 col-lg-3 col-xl-4">
                    <div class="popular-locations-alternate">
                        <div class="overlay-box">
                            <div class="mt-auto">
                                <h3><a href="#">Jaipur</a> </h3>
                            </div>
                        </div>
                        <img src="https://wedjio.com/front/images/locations/location_img_4.jpg" alt="">
                    </div>                        
                </div>
                <!-- Popular Locations Alternate -->

                <!-- Popular Locations Alternate -->
                <div class="col-md-6 col-lg-3 col-xl-4">
                    <div class="popular-locations-alternate">
                        <div class="overlay-box">
                            <div class="mt-auto">
                                <h3><a href="#">Mumbai</a> </h3>
                            </div>
                        </div>
                        <img src="https://wedjio.com/front/images/locations/location_img_5.jpg" alt="">
                    </div>                        
                </div>
                <!-- Popular Locations Alternate -->

                <!-- Popular Locations Alternate -->
                <div class="col-md-6 col-lg-3 col-xl-4">
                    <div class="popular-locations-alternate">
                        <div class="overlay-box">
                            <div class="mt-auto">
                                <h3><a href="#">Panchkula</a> </h3>
                            </div>
                        </div>
                        <img src="https://wedjio.com/front/images/locations/location_img_6.jpg" alt="">
                    </div>                        
                </div>
                <!-- Popular Locations Alternate -->
            </div>
        </div>
    </section>
    <!-- Popular locations End -->


    <!-- Real Wedding Start -->
    <section class="wide-tb-50 ">
        <div class="container">
            <div class="section-title text-center">
                <h1>Real Wedding</h1>
            </div>
             <div class="row">
                <!-- Real Wedding Stories -->
                <div class="col-lg-4 col-md-6">
                    <div class="real-wedding-wrap top-heading">                        
                        <div class="real-wedding">
                            <div class="text-center">
                                <h3><a href="#">Jyoti Weds Dheeraj Sharma</a></h3>
                                <p><i class="fa fa-map-marker"></i> Delhi</p>
                            </div>
                            <div class="img real-wedd-long-img">
                                <div class="overlay">
                                    <i class="weddingdir_heart_double_alt"></i>
                                    Our Story
                                </div>
                                <a href="#">
                                    <img src="https://wedjio.com/storage/upload/realwedding/profile/g06nhaRyh122unAqM57dfp8gtYmx1yLkSGDc6pT5.jpg" alt="">
                                </a>
                                <div class="date">
                                    Sep 28, 2023 
                                </div>
                            </div>
                            <ul class="list-unstyled gallery">
                                <li>
                                    <a href="#">
                                        <div class="real-wedd-short-img">
                                            <img src="https://wedjio.com/storage/upload/realwedding/gallery/YxJeZ23ob3LBm3c0soYsO1PwuNFAQIQvl5iUDJsK.jpg" alt="">
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="real-wedd-short-img">
                                            <img src="https://wedjio.com/storage/upload/realwedding/gallery/qM0oxsvROCAcccSWkJJ6n0O5f9oTTqzuXaZXtyMS.jpg" alt="">
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="load-more">
                                                Load <br>More
                                         </div>
                                        <div class="real-wedd-short-img">
                                            <img src="https://wedjio.com/storage/upload/realwedding/gallery/cl5Qv4gIxJ2H9B7uG2Yg8vE8TRVBmDTopaevCIld.jpg" alt="">
                                        </div>
                                    </a>
                                </li>                                                               
                            </ul>
                        </div>                            
                    </div>
                </div>
                <!-- Real Wedding Stories -->                    
                <!-- Real Wedding Stories -->
                <div class="col-lg-4 col-md-6">
                    <div class="real-wedding-wrap top-heading">                        
                        <div class="real-wedding">
                            <div class="text-center">
                                <h3><a href="#">Komal Weds Jatin</a></h3>
                                <p><i class="fa fa-map-marker"></i> Chandigarh</p>
                            </div>
                            <div class="img real-wedd-long-img">
                                <div class="overlay">
                                    <i class="weddingdir_heart_double_alt"></i>
                                    Our Story
                                </div>
                                <a href="#">
                                    <img src="https://wedjio.com/storage/upload/realwedding/profile/tuVICFqcIn0TqzqorqX70daCqA8mucpwKtRQXais.jpg" alt="">
                                </a>
                                <div class="date">
                                    Dec 09, 2023 
                                </div>
                            </div>
                            <ul class="list-unstyled gallery">
                                <li>
                                    <a href="#">
                                        <div class="real-wedd-short-img">
                                            <img src="https://wedjio.com/storage/upload/realwedding/gallery/zDJUtM8hSb9KVmJGJyaDlwBUqSqKaH6HZY3MkFxo.jpg" alt="">
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="real-wedd-short-img">
                                            <img src="https://wedjio.com/storage/upload/realwedding/gallery/V6nCQP6fmsN83eO8aAfwB7WQFGRClbJIedGkIl6t.jpg" alt="">
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="load-more">
                                                Load <br>More
                                        </div>
                                        <div class="real-wedd-short-img">
                                            <img src="https://wedjio.com/storage/upload/realwedding/gallery/RJTxFjifsUgivu2ghbDqCrldTtsCdLh10KXmfxVb.jpg" alt="">
                                        </div>
                                    </a>
                                </li>
                                                               
                            </ul>
                        </div>                            
                    </div>
                </div>
                <!-- Real Wedding Stories -->                    
                                                <!-- Real Wedding Stories -->
                <div class="col-lg-4 col-md-6">
                    <div class="real-wedding-wrap top-heading">                        
                        <div class="real-wedding">
                            <div class="text-center">
                                <h3><a href="#">Shaveta Weds Anand</a></h3>
                                <p><i class="fa fa-map-marker"></i> Pune</p>
                            </div>
                            <div class="img real-wedd-long-img">
                                <div class="overlay">
                                    <i class="weddingdir_heart_double_alt"></i>
                                    Our Story
                                </div>
                                <a href="#">
                                    <img src="https://wedjio.com/storage/upload/realwedding/profile/EtV0TrsvdZKJTdQoxkwLaYaSlvwdAuEEhd1GzKWU.jpg" alt="">
                                </a>
                                <div class="date">
                                    Aug 28, 2023 
                                </div>
                            </div>
                            <ul class="list-unstyled gallery">
                                <li>
                                    <a href="#">
                                        <div class="real-wedd-short-img">
                                            <img src="https://wedjio.com/storage/upload/realwedding/gallery/EIP9Dmq3YSN9WOPrsdAq8m3d93iBbt5B03bA3Doc.jpg" alt="">
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="real-wedd-short-img">
                                            <img src="https://wedjio.com/storage/upload/realwedding/gallery/nurzQVy4j802I2XHioU86ZTmFLWdBJFkLWUhhOLf.jpg" alt="">
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <div class="load-more">
                                            Load <br>More
                                        </div>
                                        <div class="real-wedd-short-img">
                                            <img src="https://wedjio.com/storage/upload/realwedding/gallery/d0A8KVPq6MEfcfOYSROcknvWUv192wvRzbsE6DqT.jpg" alt="">
                                        </div>
                                    </a>
                                </li>
                                                               
                            </ul>
                        </div>                            
                    </div>
                </div>
                <!-- Real Wedding Stories -->                    
            </div>
            
            <div class="text-center">
                <a href="#" class="btn btn-default btn-rounded btn-lg">More Real Weddings</a>
            </div>
                    </div>
    </section>
    <!-- Real Wedding End -->

    <!-- Customer Feedback Start -->
    <section class="wide-tb-50 ">
        <div class="container">
            <div class="section-title text-center">
                <h1>Testimonials</h1>
            </div>            
            <div class="owl-carousel owl-theme dots-black owl-loaded owl-drag" id="slider-feedback">                        
                              
            <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-1140px, 0px, 0px); transition: all 0s ease 0s; width: 4560px;"><div class="owl-item cloned" style="width: 540px; margin-right: 30px;"><div class="item">
                    <div class="customer-feedback-alternate">                            
                        <div class="content">
                            <div class="name-wrap">
                                <img src="https://wedjio.com/front/images/feedback_2.jpg" alt="">
                                <div class="head">
                                    <h3>Devika Gupta</h3>
                                    <div>New Delhi, India</div>
                                </div>
                                <div class="icon"><i class="weddingdir_chat"></i></div>
                            </div>
                            <div class="text">TheweddingWay made our special day truly unforgettable! From seamless coordination to exquisite decor, every detail was handled with care. As a bride, I was amazed at how they transformed our vision into a stunning reality. Our guests are still raving about the magical atmosphere and impeccable service. Thank you, TheweddingWay, for making our dreams come true!</div>
                        </div>
                    </div>
                </div></div><div class="owl-item cloned" style="width: 540px; margin-right: 30px;"><div class="item">
                    <div class="customer-feedback-alternate">                            
                        <div class="content">
                            <div class="name-wrap">
                                <img src="https://wedjio.com/front/images/feedback_3.jpg" alt="">
                                <div class="head">
                                    <h3>Diksha Sharma</h3>
                                    <div>Jaipur, India</div>
                                </div>
                                <div class="icon"><i class="weddingdir_chat"></i></div>
                            </div>
                            <div class="text">Our wedding day was a fairytale come true, and TheweddingWay played a crucial role in making it happen. They took our ideas and turned them into a reality, creating an atmosphere that was truly magical. As the bride, I was amazed at how seamlessly everything flowed, thanks to their meticulous planning and coordination. Our guests were in awe of the beautiful decorations and flawless execution. TheweddingWay truly exceeded our expectations, and we can't thank them enough for making our day unforgettable!</div>
                        </div>
                    </div>
                </div></div><div class="owl-item active" style="width: 540px; margin-right: 30px;"><div class="item">
                    <div class="customer-feedback-alternate">                            
                        <div class="content">
                            <div class="name-wrap">
                                <img src="https://wedjio.com/front/images/feedback_1.jpg" alt="">
                                <div class="head">
                                    <h3>Sumit Dhiman</h3>
                                    <div>Chandigarh, India</div>
                                </div>
                                <div class="icon"><i class="weddingdir_chat"></i></div>
                            </div>
                            <div class="text">Choosing TheweddingWay was one of the best decisions we made for our wedding. As the groom, I appreciated their attention to detail and ability to bring our vision to life. They took care of every aspect of the planning process, allowing us to relax and enjoy the day with our loved ones. Our wedding was a reflection of us as a couple, and we couldn't be happier with how everything turned out. Thank you, TheweddingWay, for making our day perfect!</div>
                        </div>
                    </div>
                </div></div><div class="owl-item active" style="width: 540px; margin-right: 30px;"><div class="item">
                    <div class="customer-feedback-alternate">                            
                        <div class="content">
                            <div class="name-wrap">
                                <img src="https://wedjio.com/front/images/feedback_3.jpg" alt="">
                                <div class="head">
                                    <h3>Monika Verma</h3>
                                    <div>Mohali, India</div>
                                </div>
                                <div class="icon"><i class="weddingdir_chat"></i></div>
                            </div>
                            <div class="text">We are so grateful to TheweddingWay for their exceptional service and support throughout our wedding planning journey. From the initial consultation to the final moments of our reception, they were there to ensure everything ran smoothly. As a couple, we felt heard and understood, and TheweddingWay delivered beyond our expectations. Our wedding day was magical, and we have TheweddingWay to thank for making it all possible!</div>
                        </div>
                    </div>
                </div></div><div class="owl-item" style="width: 540px; margin-right: 30px;"><div class="item">
                    <div class="customer-feedback-alternate">                            
                        <div class="content">
                            <div class="name-wrap">
                                <img src="https://wedjio.com/front/images/feedback_2.jpg" alt="">
                                <div class="head">
                                    <h3>Devika Gupta</h3>
                                    <div>New Delhi, India</div>
                                </div>
                                <div class="icon"><i class="weddingdir_chat"></i></div>
                            </div>
                            <div class="text">TheweddingWay made our special day truly unforgettable! From seamless coordination to exquisite decor, every detail was handled with care. As a bride, I was amazed at how they transformed our vision into a stunning reality. Our guests are still raving about the magical atmosphere and impeccable service. Thank you, TheweddingWay, for making our dreams come true!</div>
                        </div>
                    </div>
                </div></div><div class="owl-item" style="width: 540px; margin-right: 30px;"><div class="item">
                    <div class="customer-feedback-alternate">                            
                        <div class="content">
                            <div class="name-wrap">
                                <img src="https://wedjio.com/front/images/feedback_3.jpg" alt="">
                                <div class="head">
                                    <h3>Diksha Sharma</h3>
                                    <div>Jaipur, India</div>
                                </div>
                                <div class="icon"><i class="weddingdir_chat"></i></div>
                            </div>
                            <div class="text">Our wedding day was a fairytale come true, and TheweddingWay played a crucial role in making it happen. They took our ideas and turned them into a reality, creating an atmosphere that was truly magical. As the bride, I was amazed at how seamlessly everything flowed, thanks to their meticulous planning and coordination. Our guests were in awe of the beautiful decorations and flawless execution. TheweddingWay truly exceeded our expectations, and we can't thank them enough for making our day unforgettable!</div>
                        </div>
                    </div>
                </div></div><div class="owl-item cloned" style="width: 540px; margin-right: 30px;"><div class="item">
                    <div class="customer-feedback-alternate">                            
                        <div class="content">
                            <div class="name-wrap">
                                <img src="https://wedjio.com/front/images/feedback_1.jpg" alt="">
                                <div class="head">
                                    <h3>Sumit Dhiman</h3>
                                    <div>Chandigarh, India</div>
                                </div>
                                <div class="icon"><i class="weddingdir_chat"></i></div>
                            </div>
                            <div class="text">Choosing TheweddingWay was one of the best decisions we made for our wedding. As the groom, I appreciated their attention to detail and ability to bring our vision to life. They took care of every aspect of the planning process, allowing us to relax and enjoy the day with our loved ones. Our wedding was a reflection of us as a couple, and we couldn't be happier with how everything turned out. Thank you, TheweddingWay, for making our day perfect!</div>
                        </div>
                    </div>
                </div></div><div class="owl-item cloned" style="width: 540px; margin-right: 30px;"><div class="item">
                    <div class="customer-feedback-alternate">                            
                        <div class="content">
                            <div class="name-wrap">
                                <img src="https://wedjio.com/front/images/feedback_3.jpg" alt="">
                                <div class="head">
                                    <h3>Monika Verma</h3>
                                    <div>Mohali, India</div>
                                </div>
                                <div class="icon"><i class="weddingdir_chat"></i></div>
                            </div>
                            <div class="text">We are so grateful to TheweddingWay for their exceptional service and support throughout our wedding planning journey. From the initial consultation to the final moments of our reception, they were there to ensure everything ran smoothly. As a couple, we felt heard and understood, and TheweddingWay delivered beyond our expectations. Our wedding day was magical, and we have theweddingsway to thank for making it all possible!</div>
                        </div>
                    </div>
                </div></div></div></div><div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><i class="fa fa-angle-left"></i></button><button type="button" role="presentation" class="owl-next"><i class="fa fa-angle-right"></i></button></div><div class="owl-dots"><button role="button" class="owl-dot active"><span></span></button><button role="button" class="owl-dot"><span></span></button></div></div>
        </div>
    </section>
    <!-- Customer Feedback End -->

    
    <!-- Callout Style Main Start -->
    <section class="call-out-bg">
        <div class="overlay"></div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h1 class="mb-md-0 txt-white">Are You Looking For Vendor For Your Wedding</h1>
                </div>
                <div class="col-lg-6 text-lg-right mt-lg-0 mt-md-4">
                    <a href="#" class="btn btn-default btn-rounded btn-lg mr-3 mb-3">Get Started Now</a>
                    <a href="#" class="btn btn-outline-default btn-rounded btn-lg mb-3">Our Services</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Callout Style Main End -->

</main>
    <!-- page content end -->
    
    
    <!-- All The JS Files
      ================================================== -->    


@endsection