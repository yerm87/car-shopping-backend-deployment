@extends('index')

@section('page_styles')
    <link href="{{secure_asset('css/sell_car_page.css')}}" rel="stylesheet" type="text/css">
@endsection

@section('initialRendering')
    <!--  ******HEADER********   -->
    <div class="mainWrapper">
        <div class="toolbar">
            <div class="logoWrapper">
                <h2 class="logoText">CarShopping</h2>
            </div>
            <div class="navigationItems">
                <a class="link" href="/">
                    <div class="wrapperNavigationItem">
                        <div class="navigationItem">Cars for sale</div>
                    </div>
                </a>
                <a class="link" href="/sell_car">
                    <div class="wrapperNavigationItem">
                        <div class="navigationItem">Sell your car</div>
                    </div>
                </a>
                <a class="link" href="/reviews">
                    <div class="wrapperNavigationItem">
                        <div class="navigationItem">Reviews</div>
                    </div>
                </a>
                <a class="link" href="/about_us">
                    <div class="wrapperNavigationItem">
                        <div class="navigationItem">About Us</div>
                    </div>
                </a>
                <a href="/signup">
                    <button class="button menuButton">Sign Up</button>
                </a>
                <a href="/login">
                    <button class="button menuButton">Log In</button>
                </a>
            </div>
        </div>
    </div>
    <!--  ********** CONTENT ********* -->
    <div>
        <div class="heroImage">
            <div class="listings">
                <h1>My Listings</h1>
                <p>You are not currently logged in. Log in to view and edit your listings</p>
                <a href="/login">
                    <button class="button loginInListings">Log In</button>
                </a>
            </div>
        </div>
        <div class="advicesContainer">
            <div class="content">
                <h2>Latest Buying Advices</h2>
                <div class="items">
                    @foreach($advicesToRender as $advice)
                        <a href="/buying_advices/{{$advice->_id}}"><div class="itemElement">
                            <div class="adviceImage"
                                 style="background: url('{{$advice->image !== 'no image' ? $advice->image : '/assets/no_photo.jpg'}}') no-repeat center center;
                                    background-size: cover"></div>
                            <p>{{$advice->title}}</p>
                        </div></a>
                    @endforeach
                </div>
                <div class="viewAllButton">
                    <a href="/buying_advices">
                        <button class="button viewAllAdvices">View All Advices</Button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!--  ******* FOOTER *******  -->
    <footer>@ 2020 CarShopping. All rights reserved</footer>
@endsection

@section('content')
    <script src="{{secure_asset('js/bundle.js')}}"></script>
    <script src="{{secure_asset('js/0.js')}}"></script>
    <script src="{{secure_asset('js/1.js')}}"></script>
    <script src="{{secure_asset('js/2.js')}}"></script>
    <script src="{{secure_asset('js/3.js')}}"></script>
    <script src="{{secure_asset('js/4.js')}}"></script>
    <script src="{{secure_asset('js/5.js')}}"></script>
    <script src="{{secure_asset('js/6.js')}}"></script>
    <script src="{{secure_asset('js/7.js')}}"></script>
    <script src="{{secure_asset('js/8.js')}}"></script>
    <script src="{{secure_asset('js/9.js')}}"></script>
    <script src="{{secure_asset('js/10.js')}}"></script>
    <script src="{{secure_asset('js/11.js')}}"></script>
    <script src="{{secure_asset('js/12.js')}}"></script>
    <script src="{{secure_asset('js/13.js')}}"></script>
    <script src="{{secure_asset('js/14.js')}}"></script>
    <script src="{{secure_asset('js/15.js')}}"></script>
    <script src="{{secure_asset('js/16.js')}}"></script>
    <script src="{{secure_asset('js/17.js')}}"></script>
    <script src="{{secure_asset('js/18.js')}}"></script>
    <script src="{{secure_asset('js/19.js')}}"></script>
@endsection