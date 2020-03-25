
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>@yield('title')</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords" content="Electro Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"
    />
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <!-- //Meta tag Keywords -->

    <!-- Custom-Files -->
    <link href="{{asset('/')}}/front-end/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!-- Bootstrap css -->
    <link href="{{asset('/')}}/front-end/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!-- Main css -->
    <link rel="stylesheet" href="{{asset('/')}}/front-end/css/fontawesome-all.css">
    <!-- Font-Awesome-Icons-CSS -->
    <link href="{{asset('/')}}/front-end/css/popuo-box.css" rel="stylesheet" type="text/css" media="all" />
    <!-- pop-up-box -->
    <link href="{{asset('/')}}/front-end/css/menu.css" rel="stylesheet" type="text/css" media="all" />
    <!-- menu style -->
    <!-- //Custom-Files -->

    <!-- web fonts -->
    <link href="//fonts.googleapis.com/css?family=Lato:100,100i,300,300i,400,400i,700,700i,900,900i&amp;subset=latin-ext" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
          rel="stylesheet">
    <!-- //web fonts -->

</head>

<body>
<!-- top-header -->
<div class="agile-main-top">
    <div class="container-fluid">
        <div class="row main-top-w3l py-2">
            <div class="col-lg-4 header-most-top">

            </div>
            <div class="col-lg-8 header-right mt-lg-0 mt-2">
                <!-- header lists -->
                <ul>


                    <li class="text-center border-right text-white">
                        <i class="fas fa-phone mr-2"></i> +880-1686313821
                    </li>
                    <li class="text-center border-right text-white">
                        <a href="#" data-toggle="modal" data-target="#exampleModal" class="text-white">
                            <i class="fas fa-sign-in-alt mr-2"></i> Admin Log In </a>
                    </li>
                    <li class="text-center text-white">
                        <a href="#" data-toggle="modal" data-target="#exampleModal2" class="text-white">
                            <i class="fas fa-sign-out-alt mr-2"></i>Admin Register </a>
                    </li>
                </ul>
                <!-- //header lists -->
            </div>
        </div>
    </div>
</div>

<!-- Button trigger modal(select-location) -->

<!-- //shop locator (popup) -->

<!-- modals -->
<!-- log in -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-center">Log In</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="#" method="post">
                    <div class="form-group">
                        <label class="col-form-label">Username</label>
                        <input type="text" class="form-control" placeholder=" " name="Name" required="">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Password</label>
                        <input type="password" class="form-control" placeholder=" " name="Password" required="">
                    </div>
                    <div class="right-w3l">
                        <input type="submit" class="form-control" value="Log in">
                    </div>
                    <div class="sub-w3l">
                        <div class="custom-control custom-checkbox mr-sm-2">
                            <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                            <label class="custom-control-label" for="customControlAutosizing">Remember me?</label>
                        </div>
                    </div>
                    <p class="text-center dont-do mt-3">Don't have an account?
                        <a href="#" data-toggle="modal" data-target="#exampleModal2">
                            Register Now</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- register -->
<div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Register</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="#" method="post">
                    <div class="form-group">
                        <label class="col-form-label">Your Name</label>
                        <input type="text" class="form-control" placeholder=" " name="Name" required="">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Email</label>
                        <input type="email" class="form-control" placeholder=" " name="Email" required="">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Password</label>
                        <input type="password" class="form-control" placeholder=" " name="Password" id="password1" required="">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Confirm Password</label>
                        <input type="password" class="form-control" placeholder=" " name="Confirm Password" id="password2" required="">
                    </div>
                    <div class="right-w3l">
                        <input type="submit" class="form-control" value="Register">
                    </div>
                    <div class="sub-w3l">
                        <div class="custom-control custom-checkbox mr-sm-2">
                            <input type="checkbox" class="custom-control-input" id="customControlAutosizing2">
                            <label class="custom-control-label" for="customControlAutosizing2">I Accept to the Terms & Conditions</label>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- //modal -->
<!-- //top-header -->

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
                            Electronics
                        </a>
                        <div class="dropdown-menu">
                            <div class="agile_inner_drop_nav_info p-4">
                                <h5 class="mb-3">Mobiles, Computers</h5>
                                <div class="row">
                                    <div class="col-sm-6 multi-gd-img">
                                        <ul class="multi-column-dropdown">
                                            <li>
                                                <a href="product.html">All Mobile Phones</a>
                                            </li>
                                            <li>
                                                <a href="product.html">All Mobile Accessories</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-sm-6 multi-gd-img">
                                        <ul class="multi-column-dropdown">
                                            <li>
                                                <a href="product.html">Laptops</a>
                                            </li>
                                            <li>
                                                <a href="product.html">Drives & Storage</a>
                                            </li>
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
<!-- //navigation -->

<!-- banner -->
{{--<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <!-- Indicators-->
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item item1 active">
            <div class="container">
                <div class="w3l-space-banner">
                    <div class="carousel-caption p-lg-5 p-sm-4 p-3">
                        <p>Get flat
                            <span>10%</span> Cashback</p>
                        <h3 class="font-weight-bold pt-2 pb-lg-5 pb-4">The
                            <span>Big</span>
                            Sale
                        </h3>
                        <a class="button2" href="product.html">Shop Now </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item item2">
            <div class="container">
                <div class="w3l-space-banner">
                    <div class="carousel-caption p-lg-5 p-sm-4 p-3">
                        <p>advanced
                            <span>Wireless</span> earbuds</p>
                        <h3 class="font-weight-bold pt-2 pb-lg-5 pb-4">Best
                            <span>Headphone</span>
                        </h3>
                        <a class="button2" href="product.html">Shop Now </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item item3">
            <div class="container">
                <div class="w3l-space-banner">
                    <div class="carousel-caption p-lg-5 p-sm-4 p-3">
                        <p>Get flat
                            <span>10%</span> Cashback</p>
                        <h3 class="font-weight-bold pt-2 pb-lg-5 pb-4">New
                            <span>Standard</span>
                        </h3>
                        <a class="button2" href="product.html">Shop Now </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item item4">
            <div class="container">
                <div class="w3l-space-banner">
                    <div class="carousel-caption p-lg-5 p-sm-4 p-3">
                        <p>Get Now
                            <span>40%</span> Discount</p>
                        <h3 class="font-weight-bold pt-2 pb-lg-5 pb-4">Today
                            <span>Discount</span>
                        </h3>
                        <a class="button2" href="product.html">Shop Now </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>--}}
<!-- //banner -->




<!-- top Products -->
@yield('body')





<footer>

</footer>
<div class="copy-right py-3">
    <div class="container">
        <p class="text-center text-white">© 2020 Mobile Review. All rights reserved | Design by
            <a href="http://w3layouts.com"> MobileReviewTeam.</a>
        </p>
    </div>
</div>

<script src="{{asset('/')}}/front-end/js/jquery-2.2.3.min.js"></script>

<script>
    $(document).ready(function () {
        $(".dropdown").hover(
            function () {
                $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                $(this).toggleClass('open');
            },
            function () {
                $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                $(this).toggleClass('open');
            }
        );
    });
</script>
<!-- //nav smooth scroll -->

<!-- popup modal (for location)-->
<script src="{{asset('/')}}/front-end/js/jquery.magnific-popup.js"></script>
<script>
    $(document).ready(function () {
        $('.popup-with-zoom-anim').magnificPopup({
            type: 'inline',
            fixedContentPos: false,
            fixedBgPos: true,
            overflowY: 'auto',
            closeBtnInside: true,
            preloader: false,
            midClick: true,
            removalDelay: 300,
            mainClass: 'my-mfp-zoom-in'
        });

    });
</script>
<!-- //popup modal (for location)-->

<!-- cart-js -->
<script src="{{asset('/')}}/front-end/js/minicart.js"></script>
<script>
    paypals.minicarts.render(); //use only unique class names other than paypals.minicarts.Also Replace same class name in css and minicart.min.js

    paypals.minicarts.cart.on('checkout', function (evt) {
        var items = this.items(),
            len = items.length,
            total = 0,
            i;

        // Count the number of each item in the cart
        for (i = 0; i < len; i++) {
            total += items[i].get('quantity');
        }

        if (total < 3) {
            alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
            evt.preventDefault();
        }
    });
</script>
<!-- //cart-js -->

<!-- password-script -->





<!-- imagezoom -->
<script src="{{asset('/')}}/front-end/js/imagezoom.js"></script>
<!-- //imagezoom -->

<!-- flexslider -->
<link rel="stylesheet" href="{{asset('/')}}/front-end/css/flexslider.css" type="text/css" media="screen" />

<script src="{{asset('/')}}/front-end/js/jquery.flexslider.js"></script>
<script>
    // Can also be used with $(document).ready()
    $(window).load(function () {
        $('.flexslider').flexslider({
            animation: "slide",
            controlNav: "thumbnails"
        });
    });
</script>
<!-- //FlexSlider-->





<script>
    window.onload = function () {
        document.getElementById("password1").onchange = validatePassword;
        document.getElementById("password2").onchange = validatePassword;
    }

    function validatePassword() {
        var pass2 = document.getElementById("password2").value;
        var pass1 = document.getElementById("password1").value;
        if (pass1 != pass2)
            document.getElementById("password2").setCustomValidity("Passwords Don't Match");
        else
            document.getElementById("password2").setCustomValidity('');
        //empty string means no validation error
    }
</script>
<!-- //password-script -->

<!-- scroll seller -->
<script src="{{asset('/')}}/front-end/js/scroll.js"></script>
<!-- //scroll seller -->

<!-- smoothscroll -->
<script src="{{asset('/')}}/front-end/js/SmoothScroll.min.js"></script>
<!-- //smoothscroll -->

<!-- start-smooth-scrolling -->
<script src="{{asset('/')}}/front-end/js/move-top.js"></script>
<script src="{{asset('/')}}/front-end/js/easing.js"></script>
<script>
    jQuery(document).ready(function ($) {
        $(".scroll").click(function (event) {
            event.preventDefault();

            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 1000);
        });
    });
</script>
<!-- //end-smooth-scrolling -->

<!-- smooth-scrolling-of-move-up -->
<script>
    $(document).ready(function () {
        /*
        var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
        };
        */
        $().UItoTop({
            easingType: 'easeOutQuart'
        });

    });
</script>
<!-- //smooth-scrolling-of-move-up -->

<!-- for bootstrap working -->
<script src="{{asset('/')}}/front-end/js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- //js-files -->
</body>

</html>

