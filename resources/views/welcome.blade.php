{{--darkblue 14508f--}}
{{--lightblue 48abdf--}}
    <!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,700,900" rel="stylesheet">
    <link rel="icon"
          type="image/png"
          href="{{asset('images/favicon.ico')}}">
    <title>Ternary Solution Sdn Bhd</title>
    <!--
    SOFTY PINKO
    https://templatemo.com/tm-535-softy-pinko
    -->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/pinko/bootstrap.min.css')}}">

    <link rel="stylesheet" type="text/css" href="{{asset('css/pinko/font-awesome.css')}}">

    <link rel="stylesheet" href="{{asset('css/pinko/templatemo-softy-pinko.css')}}">
    <link rel="stylesheet" href="{{asset('js/splide/css/splide.min.css')}}">

</head>

<body>

<!-- ***** Preloader Start ***** -->
<div id="preloader">
    <div class="jumper">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>
<!-- ***** Preloader End ***** -->


<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="#" class="logo">
                        <img src="{{asset('images/ternary-logo-small.png')}}" alt="Ternary Solution"/>
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="#welcome" class="active">Home</a></li>
                        <li><a href="#features">About</a></li>
                        <li><a href="#work-process">Services</a></li>
                        <li><a href="#contact-us">Contact Us</a></li>
                        <li><a href="{{route('login')}}">EMS</a></li>
                    </ul>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
                <br>
                @if(session()->has('success-form'))
                    <div class="alert alert-success alert-dismissible fade show border-success" role="alert">
                        <strong>Success!</strong> {{ session()->get('success-form') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                @if(session()->has('captcha-form'))
                    <div class="alert alert-danger alert-dismissible fade show border-danger" role="alert">
                        <strong>Error!</strong> {{ session()->get('captcha-form') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif

            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->

<!-- ***** Welcome Area Start ***** -->
<div class="welcome-area" id="welcome" style="background-image: url({{asset('images/banner-landing.png')}})">

    <!-- ***** Header Text Start ***** -->
    <div class="header-text">
        <div class="container">
            <div class="row">
                <div class="offset-xl-3 col-xl-8 offset-lg-2 col-lg-8 col-md-12 col-sm-12">
                    <h1>We Provide The Best <strong style="	color: #48abdf;
    font-size: 40px;
	text-shadow: -1px 1px 2px #14508f,
				  1px 1px 2px #14508f,
				  1px -1px 0 #14508f,
				  -1px -1px 0 #14508f;">SOLUTION</strong><br>To Grow Up Your <strong style="color: #48abdf;
    font-size: 40px;
	text-shadow: -1px 1px 2px #14508f,
				  1px 1px 2px #14508f,
				  1px -1px 0 #14508f,
				  -1px -1px 0 #14508f;">COMPANY</strong></h1>
                    <p>We are an IT-based companies that hold the six-point action plan that chart the journey for advancement in 4IR Malaysian IT-Industry</p>
                    <a href="#features" class="main-button-slider">About Us</a>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Header Text End ***** -->
</div>
<!-- ***** Welcome Area End ***** -->

<!-- ***** Features Small Start ***** -->
<section class="section home-feature">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <!-- ***** Features Small Item Start ***** -->
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.2s">
                        <div class="features-small-item">
                            <div class="icon">
                                <i><img src="{{asset('images/analysis.png')}}" alt=""></i>
                            </div>
                            <h5 class="features-title">FUTURE</h5>
                            <p>Company’s vision towards the future <br> &nbsp;</p>
                        </div>
                    </div>
                    <!-- ***** Features Small Item End ***** -->

                    <!-- ***** Features Small Item Start ***** -->
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.4s">
                        <div class="features-small-item">
                            <div class="icon">
                                <i><img src="{{asset('images/target.png')}}" alt=""></i>
                            </div>
                            <h5 class="features-title">ASSURED</h5>
                            <p>Consuetude to our client’s <br>requirement & specification</p>
                        </div>
                    </div>
                    <!-- ***** Features Small Item End ***** -->

                    <!-- ***** Features Small Item Start ***** -->
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.6s">
                        <div class="features-small-item">
                            <div class="icon">
                                <i><img src="{{asset('images/handshake.png')}}" alt=""></i>
                            </div>
                            <h5 class="features-title">SOLUTION</h5>
                            <p>Let us do our part for you <br> &nbsp;</p>
                        </div>
                    </div>
                    <!-- ***** Features Small Item End ***** -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Features Small End ***** -->

<!-- ***** Features Big Item Start ***** -->
<section class="section padding-top-100 padding-bottom-0" id="features">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-12 col-sm-12 align-self-center" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                <img src="{{asset('images/vision.png')}}" class="rounded img-fluid d-block mx-auto" alt="App">
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-6 col-md-12 col-sm-12 align-self-center mobile-top-fix">
                <div class="left-heading">
                    <h2 class="section-title">OUR <span style="color: #14508f">VISION</span></h2>
                </div>
                <div class="left-text">
                    <p>To be the acclaimed modern solution within IT industry.</p>
                    <p>Focusing on local talent development to help, grow and succeed in the IT field.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Features Big Item End ***** -->
<!-- ***** Features Big Item Start ***** -->
<section class="section padding-bottom-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 align-self-center mobile-bottom-fix">
                <div class="left-heading">
                    <h2 class="section-title">OUR <span style="color: #14508f">MISSION</span></h2>
                </div>
                <div class="left-text">
                    <p>Tailor made client’s needs accordingly to the current market’s demand and proactively adapt & move forward with upcoming future solutions.</p>
                    <p>To cultivate & equipped local talents with the expertise required in order to be competitively marketable within the industry.</p>
                </div>
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-5 col-md-12 col-sm-12 align-self-center mobile-bottom-fix-big" data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                <img src="{{asset('images/statistics.png')}}" class="rounded img-fluid d-block mx-auto" alt="App">
            </div>
        </div>
    </div>
</section>
<!-- ***** Features Big Item End ***** -->
<!-- ***** Features Big Item Start ***** -->
<section class="section padding-top-20 padding-bottom-0" id="features">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-12 col-sm-12 align-self-center" data-scroll-reveal="enter left move 30px over 0.6s after 0.4s">
                <img src="{{asset('images/certificate.png')}}" class="rounded img-fluid d-block mx-auto" alt="App">
            </div>
            <div class="col-lg-1"></div>
            <div class="col-lg-6 col-md-12 col-sm-12 align-self-center mobile-top-fix">
                <div class="left-heading">
                    <h2 class="section-title">OUR <span style="color: #14508f">VALUES</span></h2>
                </div>
                <div class="left-text">
                    <p>Commited through Team Orientation for Innovation.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="hr"></div>
            </div>
        </div>
    </div>
</section>
<!-- ***** Features Big Item End ***** -->






<!-- ***** Home Parallax Start ***** -->
<section class="mini" id="work-process" style="background-color: #222222">
    <div class="mini-content">
        <div class="container">
            <div class="row">
                <div class="offset-lg-3 col-lg-6">
                    <div class="info">
                        <h1>SERVICES</h1>
                        <p>We provide wide range of Flexible & Useful IT Services.</p>
                    </div>
                </div>
            </div>

            <!-- ***** Mini Box Start ***** -->
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-6" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.2s">
                    <a href="#" class="mini-box">
                        <i><img src="{{asset('images/hdd.png')}}" alt=""></i>
                        <strong>HARDWARE LOW END</strong>
                        <span><p>Supply all types of computer hardware Including PC, notebook, printer, document scanner, peripherals and maintenance, leasing and renting.</p></span>
                    </a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-6" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.4s">
                    <a href="#" class="mini-box">
                        <i><img src="{{asset('images/server.png')}}" alt=""></i>
                        <strong>HARDWARE HIGH END</strong>
                        <span>All types of server, mainframe, high end Printers, storage area network (SAN, NAS) including maintenance, leasing and renting. <br> &nbsp;</span>
                    </a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-6" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.6s">
                    <a href="#" class="mini-box">
                        <i><img src="{{asset('images/sync.png')}}" alt=""></i>
                        <strong>SOFTWARE</strong>
                        <span>Supply all computer software, operating system, database, off-the-Shelf packages including maintenance, leasing and renting. <br> &nbsp;</span>
                    </a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-6" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.8s">
                    <a href="#" class="mini-box">
                        <i><img src="{{asset('images/http.png')}}" alt=""></i>
                        <strong>SECURITY</strong>
                        <span>ICT security and firewall, Encryption, PKI, Anti Virus. <br> &nbsp; <br> &nbsp; <br> &nbsp; <br> &nbsp;</span>
                    </a>
                </div>
            </div>
            <!-- ***** Mini Box End ***** -->
            <!-- ***** Mini Box Start ***** -->
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-6" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.8s">
                    <a href="#" class="mini-box">
                        <i><img src="{{asset('images/laptop.png')}}" alt=""></i>
                        <strong>SYSTEM DEVELOPMENT</strong>
                        <span><p>Software/System development/Customization and maintenance including data entry, data processing. <br> &nbsp; <br> &nbsp; <br> &nbsp;</p></span>
                    </a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-6" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.6s">
                    <a href="#" class="mini-box">
                        <i><img src="{{asset('images/wifi.png')}}" alt=""></i>
                        <strong>NETWORKING</strong>
                        <span>Telecommunication/networking-supply product, infrastructure, services including maintenance. <br> &nbsp; <br> &nbsp; <br> &nbsp;</span>
                    </a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-6" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.4s">
                    <a href="#" class="mini-box">
                        <i><img src="{{asset('images/streaming.png')}}" alt=""></i>
                        <strong>MULTIMEDIA</strong>
                        <span>Multimedia-products, services and maintenance (video conferencing, web cast, Graphic design, animation).<br> &nbsp; <br> &nbsp;</span>
                    </a>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-6" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.2s">
                    <a href="#" class="mini-box">
                        <i><img src="{{asset('images/cloud-computing.png')}}" alt=""></i>
                        <strong>CLOUD SOLUTION</strong>
                        <span>Manage your IT ecosystems effectively with public cloud, security, and on-premise control. Move faster and achieve better outcomes with a secure cloud experience with us.</span>
                    </a>
                </div>
            </div>
            <!-- ***** Mini Box End ***** -->
        </div>
    </div>
</section>
<!-- ***** Home Parallax End ***** -->


<!-- ***** Features Big Item Start ***** -->
<section class="section padding-top-70 padding-bottom-70" id="">
    <div class="mini-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="center-heading">
                        <h2 class="section-title">OUR <span style="color: #14508f">CLIENTS</span></h2>
                    </div>
                </div>
                <div class="offset-lg-3 col-lg-6">
                    <div class="center-text">
                        <p>Meet our happy clients</p>
                    </div>
                </div>


                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="splide">
                        <div class="splide__track">
                            <ul class="splide__list">
                                <li class="splide__slide">
                                    <div class="card border-0" style="width: 23rem;">
                                        <img class="card-img-top" src="{{asset('images/slider/perkeso.png')}}" alt="perkeso">
                                    </div>
{{--                                    <img style="" src="{{asset('images/slider/perkeso.png')}}" alt="">--}}
                                </li>
                                <li class="splide__slide">
                                    <div class="card border-0" style="width: 23rem;">
                                        <img class="card-img-top" src="{{asset('images/slider/csm.png')}}" alt="cybersecurity malaysia">
                                    </div>
                                </li>
                                <li class="splide__slide">
                                    <div class="card border-0" style="width: 23rem;">
                                        <img class="card-img-top" src="{{asset('images/slider/punb.png')}}" alt="perbadanan usahawan nasional berhad">
                                    </div>
                                </li>
                                <li class="splide__slide">
                                    <div class="card border-0" style="width: 23rem;">
                                        <img class="card-img-top" src="{{asset('images/slider/unikl.png')}}" alt="universiti kuala lumpur">
                                    </div>
                                </li>
                                <li class="splide__slide">
                                    <div class="card border-0" style="width: 23rem;">
                                        <img class="card-img-top" src="{{asset('images/slider/fas.png')}}" alt="fa selangor">
                                    </div>
                                </li>
                                <li class="splide__slide">
                                    <div class="card border-0" style="width: 23rem;">
                                        <img class="card-img-top" src="{{asset('images/slider/kkmm.png')}}" alt="kementerian komunikasi dan multimedia">
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </div>
</section>
<!-- ***** Features Big Item End ***** -->




<!-- ***** Contact Us Start ***** -->
<section class="section colored" id="contact-us">
    <div class="container">
        <!-- ***** Section Title Start ***** -->
        <div class="row">
            <div class="col-lg-12">
                <div class="center-heading">
                    <h2 class="section-title">GET IN <span style="color: #14508f">TOUCH</span></h2>
                </div>
            </div>
            <div class="offset-lg-3 col-lg-6">
                <div class="center-text">
                    <p>We are eager to discuss your business needs, and answer any questions you may have. Fill up contact form below and we`ll get back to you.</p>
                </div>
            </div>
        </div>
        <!-- ***** Section Title End ***** -->

        <div class="row">
            <!-- ***** Contact Text Start ***** -->
            <div class="col-lg-4 col-md-6 col-sm-12" data-scroll-reveal="enter left move 90px over 0.6s after 0.4s">
                <div class="contact-text">
                    <ul>
                        <li>
                            <b>Phone:</b> <br>
                            +603 2164 6288<br>
                        </li>
                        <li>
                            <b>Email:</b> <br>
                            info@ternarysolution.com<br>
                        </li>
                        <li>
                            <b>Office:</b> <br>
                            Box 19, Lot 4.26, Wisma Central,<br>
                            Jalan Ampang, 50440, Kuala Lumpur.<br>
                        </li>
                        <li>
                            <br>
                        </li>
                        <li>
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3983.756605034317!2d101.71232971529919!3d3.1587396977000224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31cc37d0e3aaaaab%3A0xfb7c847f591c2d6c!2sWisma%20Central!5e0!3m2!1sen!2smy!4v1606490878685!5m2!1sen!2smy" width="300" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- ***** Contact Text End ***** -->

            <!-- ***** Contact Form Start ***** -->
            <div class="col-lg-8 col-md-6 col-sm-12 mt-4" data-scroll-reveal="enter right move 90px over 0.6s after 0.4s">
                <div class="contact-form">
                    <form id="contact" action="{{route('contact-mail')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <fieldset>
                                    <input name="name" type="text" class="form-control" id="name" placeholder="Full Name" required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-6 col-md-12 col-sm-12">
                                <fieldset>
                                    <input name="email" type="email" class="form-control" id="email" placeholder="E-Mail Address" required="">
                                </fieldset>
                            </div>
                            <div class="col-lg-12">
                                <fieldset>
                                    <textarea name="message_body" rows="6" class="form-control" id="message" placeholder="Your Message" required=""></textarea>
                                </fieldset>
                            </div>
                            <input type="hidden" name="recaptcha" id="recaptcha">
                            <div class="col-lg-12">
                                <fieldset>
                                    <button type="submit" id="form-submit" class="main-button">Send Message</button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- ***** Contact Form End ***** -->
        </div>
    </div>
</section>
<!-- ***** Contact Us End ***** -->

<!-- ***** Footer Start ***** -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <p class="copyright">Copyright &copy; {{ now()->year }} Ternary Solution Sdn Bhd <br>202001009953 (1366273-A)</p>
            </div>
        </div>
    </div>
</footer>

<!-- jQuery -->
{{--<script src="{{asset('js/pinko/jquery-2.1.0.min.js')}}"></script>--}}
<script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
<!-- Bootstrap -->
<script src="{{asset('js/pinko/popper.js')}}"></script>
<script src="{{asset('js/pinko/bootstrap.min.js')}}"></script>

<!-- Plugins -->
<script src="{{asset('js/pinko/scrollreveal.min.js')}}"></script>
<script src="{{asset('js/pinko/waypoints.min.js')}}"></script>
<script src="{{asset('js/pinko/jquery.counterup.min.js')}}"></script>
<script src="{{asset('js/pinko/imgfix.min.js')}}"></script>

<!-- Global Init -->
<script src="{{asset('js/pinko/custom.js')}}"></script>
<script src="{{asset('js/splide/js/splide.js')}}"></script>
<script src="{{asset('js/splide/js/auto-scroll/splide-extension-auto-scroll.js')}}"></script>

<script src="https://www.google.com/recaptcha/api.js?render={{ config('services.recaptcha.sitekey') }}"></script>
<script>
    @if(session()->has('captcha-form') || session()->has('success-form'))
    $(".alert").fadeTo(3000, 500).slideUp(500, function(){
        $(".alert").slideUp(500);
    });
    @endif

    grecaptcha.ready(function() {
        grecaptcha.execute('{{ config('services.recaptcha.sitekey') }}', {action: 'contact'}).then(function(token) {
            if (token) {
                document.getElementById('recaptcha').value = token;
            }
        });
    });

    $(document).ready(function(){
        if(window.matchMedia("(max-width: 767px)").matches){
            // The viewport is less than 768 pixels wide
            const splide = new Splide( '.splide', {
                type   : 'loop',
                drag   : 'free',
                focus  : 'center',
                autoStart : true,
                perPage: 1,
                autoplay: true,
                autoScroll: {
                    speed: 2,
                },
            } );

            splide.mount();
        } else{
            // The viewport is at least 768 pixels wide
            const splide = new Splide( '.splide', {
                type   : 'loop',
                drag   : 'free',
                focus  : 'center',
                autoStart : true,
                perPage: 3,
                autoplay: true,
                autoScroll: {
                    speed: 2,
                },
            } );

            splide.mount();
        }
    });


</script>

</body>
</html>
