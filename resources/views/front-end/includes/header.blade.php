<div class="navbar-inner">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                {{--for logo starts here--}}
                <div class="col-md-3 logo_agile">
                    <h1 class="text-center">
                        <a href="{{route('/')}}" class="font-weight-bold font-italic">
                            <img src="{{asset('/')}}/front-end/images/logo2.png" alt=" " class="img-fluid">Mobile Review
                        </a>
                    </h1>
                </div>
                {{--for logo ends here--}}
                <ul class="navbar-nav ml-auto text-center mr-xl-5">
                    <li class="nav-item active mr-lg-2 mb-lg-0 mb-2">
                        <a class="nav-link" href="{{route('/')}}">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown mr-lg-2 mb-lg-0 mb-2">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Brand
                        </a>
                        <div class="dropdown-menu">
                            <div class="agile_inner_drop_nav_info p-4">
                                <h5 class="mb-3">All Brands</h5>
                                <div class="row">
                                    <div class="col-sm-6 multi-gd-img">
                                        <ul class="multi-column-dropdown">
                                            @foreach($brands as $brand)
                                            <li>
                                                <a href="{{ route('brands-mobile',['id'=>$brand->id])}}">{{ $brand->brand_name }}</a>
                                            </li>
                                            {{-- @endforeach --}}

                                        </ul>
                                    </div>
                                    <div class="col-sm-6 multi-gd-img">
                                        <ul class="multi-column-dropdown">
                                            <li>

                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown mr-lg-2 mb-lg-0 mb-2">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Appliances
                        </a>
                        <div class="dropdown-menu">
                            <div class="agile_inner_drop_nav_info p-4">
                                <h5 class="mb-3">TV, Appliances, Electronics</h5>
                                <div class="row">
                                    <div class="col-sm-6 multi-gd-img">
                                        <ul class="multi-column-dropdown">
                                            <li>
                                                <a href="product2.html">Televisions</a>
                                            </li>
                                            <li>
                                                <a href="product2.html">Home Entertainment Systems</a>
                                            </li>
                                            <li>
                                                <a href="product2.html">Headphones</a>
                                            </li>
                                            <li>
                                                <a href="product2.html">Speakers</a>
                                            </li>
                                            <li>
                                                <a href="product2.html">MP3, Media Players & Accessories</a>
                                            </li>
                                            <li>
                                                <a href="product2.html">Audio & Video Accessories</a>
                                            </li>
                                            <li>
                                                <a href="product2.html">Cameras</a>
                                            </li>
                                            <li>
                                                <a href="product2.html">DSLR Cameras</a>
                                            </li>
                                            <li>
                                                <a href="product2.html">Camera Accessories</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-6 multi-gd-img">
                                        <ul class="multi-column-dropdown">
                                            <li>
                                                <a href="product2.html">Musical Instruments</a>
                                            </li>
                                            <li>
                                                <a href="product2.html">Gaming Consoles</a>
                                            </li>
                                            <li>
                                                <a href="product2.html">All Electronics</a>
                                            </li>
                                            <li>
                                                <a href="product2.html">Air Conditioners</a>
                                            </li>
                                            <li>
                                                <a href="product2.html">Refrigerators</a>
                                            </li>
                                            <li>
                                                <a href="product2.html">Washing Machines</a>
                                            </li>
                                            <li>
                                                <a href="product2.html">Kitchen & Home Appliances</a>
                                            </li>
                                            <li>
                                                <a href="product2.html">Heating & Cooling Appliances</a>
                                            </li>
                                            <li>
                                                <a href="product2.html">All Appliances</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item mr-lg-2 mb-lg-0 mb-2">
                        <a class="nav-link" href="about.html">About Us</a>
                    </li>
                    <li class="nav-item mr-lg-2 mb-lg-0 mb-2">
                        <a class="nav-link" href="{{route('newArrivals')}}">New Arrivals</a>
                    </li>
                    <li class="nav-item dropdown mr-lg-2 mb-lg-0 mb-2">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Pages
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="product.html">Product 1</a>
                            <a class="dropdown-item" href="product2.html">Product 2</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="single.html">Single Product 1</a>
                            <a class="dropdown-item" href="single2.html">Single Product 2</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="checkout.html">Checkout Page</a>
                            <a class="dropdown-item" href="payment.html">Payment Page</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('contactUs')}}">Contact Us</a>
                    </li>

                </ul>
            </div>
        </nav>
    </div>
</div>
