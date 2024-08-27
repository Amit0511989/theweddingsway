@extends('layouts.app')

@section('content')
<section class="search-result-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 mx-auto">
                <h1>Find the Perfect Wedding Vendor</h1>
                                <form action="https://wedjio.com/search-keyword" method="post">
                    <input type="hidden" name="_token" value="JOwZLyOD1cXc2bNjlxFSQBn6hQK9iAt1CEXLPz6g">                    <div class="form-bg row no-gutters align-items-center">
                        <div class="col-12 col-md-3">
                        <select class="form-light-select form-control theme-combo select2" name="category" >
                            <option value="0" >Choose Vendor Type</option>
                            <option value="all">All Categories</option>                                                                                                                    <option value="makeup-artist">Makeup Artist</option>
                            @foreach($roles as $role)
                                <option value="{{$role['id']}}" <?php if($category->id == $role['id']){ echo "selected"; } ?>>{{$role['name']}}</option>
                            @endforeach  
                        </select>
                    </div>
                        <div class="col-12 col-md-3">
                        <select class="form-light-select theme-combo form-control" name="city" >
                                            <option value="0">Choose Location</option> 
                                            <option value="all">All Cities</option>                                               
                                            @foreach($locations as $location)
                                                <option value="{{$location['id']}}">{{$location['city']}}( {{$location['state']}} )</option>
                                            @endforeach
                                        </select>
                                    </div>
                        <div class="col-12 col-md-3">
                            <input type="text" class="form-control" name="keyword" placeholder="Keyword" value="">
                        </div>
                        <div class="col-12 col-md-3">
                            <input type="submit" value="Search Now" class="btn btn-default text-nowrap btn-block" name="search">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="view-by">
            <strong>View By</strong> 
                            <a href="javascript:void(0)" class="selected-tags btn-link-primary">All</a>
                            <a href="javascript:void(0)" class="selected-tags btn-link-primary">{{$category->name}}</a>
                        &nbsp; &nbsp;
                    </div>            
    </div>
</section>
<main id="body-content">
 
    <section class="wide-tb-40">
        <div class="container">
            <div class="row">
            @if(empty($vendors))
                    <p>No vendors available.</p>
            @else
            @foreach($vendors as $vendor)
                <div class="col-lg-4 col-md-6 my-4">
                    <div class="wedding-listing">
                        <div class="img">
                            <a href="javascript:">
                                <img src="https://wedjio.com/storage/upload/vendor/featured/PTdfu9wnpkKAY38GS6ecB1KMLtZC0q0I3PSTanf1.jpg" alt="">                                                    
                            </a>
                            <div class="img-content">
                                <div class="top">
                                    <span class="is_verified thumbs">
                                        <i class="fa fa-thumbs-up thumb-icon"></i>
                                    </span>
                                </div>
                                <div class="bottom">
                                    <a class="tags" href="{{ route('vendorprofile', ['id' => $vendor['id']]) }}">
                                        Mehndi Artist
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="content">
                            <div class="gap">
                                <h3><a href="{{ route('vendorprofile', ['id' => $vendor['id']]) }}"> Neh@Heena <span class="verified"><i class="fa fa-check-circle"></i></span> </a></h3>
                                <div><i class="fa fa-map-marker"></i> Pune</div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif
             </div>
            <!-- all other vendors end -->
        </div>

        
        <div class="mt-4">
            <div class="theme-pagination">
                <nav>
        <ul class="pagination">
            <!-- 
                            <li class="page-item disabled" aria-disabled="true" aria-label="« Previous">
                    <span class="page-link" aria-hidden="true">‹</span>
                </li>
            
            
                            
                
                
                                                                                        <li class="page-item active" aria-current="page"><span class="page-link">1</span></li>
                                                                                                <li class="page-item"><a class="page-link" href="https://wedjio.com/vendors/all/mehndi-artist?page=2">2</a></li>
                                                                                                <li class="page-item"><a class="page-link" href="https://wedjio.com/vendors/all/mehndi-artist?page=3">3</a></li>
                                                                        
            
                            <li class="page-item">
                    <a class="page-link" href="https://wedjio.com/vendors/all/mehndi-artist?page=2" rel="next" aria-label="Next »">›</a>
                </li> -->
                    </ul>
    </nav>

            </div>
        </div>
    </section>
    
</main>


@endsection