<!-- header section start -->
<div class="header_section">
    <div class="header_main">
        <div class="mobile_menu">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="logo_mobile"><a href="index.html"><img src="images/logo.png"></a></div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="about.html">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="services.html">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="blog.html">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="contact.html">Contact</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="container-fluid">
            <div class="logo"><a href="index.html"><img src="images/logo.png"></a></div>
            <div class="menu_main">
                <ul>
                    <li class="active"><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="about.html">About</a></li>
                    <li><a href="blog.html">Blog</a></li>
                    @if (Route::has('login'))
                        @auth
                            <li class="active"><a href="{{ route('home') }}">Home</a></li>
                        @else
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Sign-Up</a></li>
                        @endauth
                    @endif
                </ul>
            </div>
        </div>
    </div>
    <!-- banner section start -->
    <div class="banner_section layout_padding">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container">
                        <h1 class="banner_taital">Adventure</h1>
                        <p class="banner_text">There are many variations of passages of Lorem Ipsum available, but
                            the majority have sufferedThere are ma available, but the majority have suffered</p>
                        <div class="read_bt"><a href="#">Get A Quote</a></div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <h1 class="banner_taital">Adventure</h1>
                        <p class="banner_text">There are many variations of passages of Lorem Ipsum available, but
                            the majority have sufferedThere are ma available, but the majority have suffered</p>
                        <div class="read_bt"><a href="#">Get A Quote</a></div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container">
                        <h1 class="banner_taital">Adventure</h1>
                        <p class="banner_text">There are many variations of passages of Lorem Ipsum available, but
                            the majority have sufferedThere are ma available, but the majority have suffered</p>
                        <div class="read_bt"><a href="#">Get A Quote</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner section end -->
</div>
