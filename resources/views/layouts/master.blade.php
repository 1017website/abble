<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <title>abbleSearch</title>
        <link href="{{asset('assets/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{asset('assets/css/fontawesome.css')}}" rel="stylesheet">
        <link href="{{asset('assets/css/templatemo-plot-listing.css')}}" rel="stylesheet" >
        <link href="{{asset('assets/css/animated.css')}}" rel="stylesheet" >
        <link href="{{asset('assets/css/owl.css')}}" rel="stylesheet">
    </head>
    <body>
        <div id="js-preloader" class="js-preloader">
            <div class="preloader-inner">
                <span class="dot"></span>
                <div class="dots">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>

        <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <nav class="main-nav">
                            <a href="/" class="logo">
                                <img src="{{asset('assets/images/logoheader.png')}}">
                            </a>
                            <div class="nav">
                                <div class="nav-item dropdown" style="">
                                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">About</a>
                                    <div class="dropdown-menu m-0">
                                        <a href="/ourvalues" class="dropdown-item">Our Values</a>
                                    </div>
                                </div>          
                                <div class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">People</a>
                                    <div class="dropdown-menu m-0">
                                        <a href="/ourdirectors" class="dropdown-item">Our Directors</a>
                                        <a href="/consultants" class="dropdown-item">Consultants</a>
                                    </div>
                                </div>
                                <div class="nav-item dropdown">
                                    <a href="/specializations" class="nav-link dropdown-toggle" >Specializations</a>
                                </div>
                                <div class="nav-item dropdown">
                                    <a href="/services" class="nav-link dropdown-toggle" >Services</a>
                                </div>
                                <div class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Community</a>
                                    <div class="dropdown-menu m-0">
                                        <a href="/partnership" class="dropdown-item">Partnership</a>
                                        <a href="/volunteering" class="dropdown-item">Volunteering</a>
                                        <a href="/diversityandinclusion" class="dropdown-item">Diversity &amp; Inclusion</a>
                                    </div>
                                </div>
                                <div class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Jobs</a>
                                    <div class="dropdown-menu m-0">
                                        <a href="latestjob.html" class="dropdown-item">Latest Job</a>
                                        <a href="joinabblesearch.html" class="dropdown-item">Join Abblesearch</a>
                                    </div>
                                </div>
                                <div class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Knowledge</a>
                                    <div class="dropdown-menu m-0">
                                        <a href="news.html" class="dropdown-item">News</a>
                                        <a href="thoughtleadership.html" class="dropdown-item">Thought Leadership</a>
                                        <a href="salarysurveys.html" class="dropdown-item">Salary Surveys</a>
                                    </div>
                                </div>
                                <div class="nav-item dropdown">
                                    <a href="contact.html" class="nav-link dropdown-toggle" >Contact</a>
                                </div>

                            </div>  
                            <a class='menu-trigger'>
                                <span>Menu</span>
                            </a>
                        </nav>
                    </div>
                </div>
            </div>
        </header>

        <main class="flex-shrink-0">
            @yield('content')
        </main>

        <footer>
            <div class="container">
                <div class="row">                
                    <div class="col-6">
                        <nav class="main-nav">
                            <a href="index.html" class="logo">
                                <img src="{{asset('assets/images/logo.png')}}">
                            </a>
                        </nav>
                    </div>
                    <div style="align-content: flex-end" class="col-6">
                        <h4>Copyright 2023 | Abblesearch | All Rights Reserved</h4>
                    </div>
                </div>
            </div>
        </footer>

        <script src="{{asset('assets/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('assets/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('assets/js/owl-carousel.js')}}"></script>
        <script src="{{asset('assets/js/animation.js')}}"></script>
        <script src="{{asset('assets/js/imagesloaded.js')}}"></script>
        <script src="{{asset('assets/js/custom.js')}}"></script>
    </body>
</html>