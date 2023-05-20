<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ cxl_asset('assets/css/main.css') }}">
</head>

<body>
    <!-- Hero Section -->
    <section class="hero @if(!Route::is('web.index')) hero-dark @endif @if(Route::is('web.costCalculation')) costs-hero @endif">
        <div class="container">
            <!-- NAVIGATION -->
            <nav class="navbar">
                <!-- Phone -->
                <div class="call-us">
                    <a href="#" class="phone">
                        <img src="{{ cxl_asset('assets/images/phone-large.png') }}" alt="Phone Icon">
                    </a>
                </div>
                <!-- Logo -->
                <div class="logo">
                    <a href="{{ route('web.index') }}">
                        <img src="{{ cxl_asset('assets/images/logo-icon.png') }}" alt="Logo Icon">
                        <span class="gradiend-text">DEV</span>APOLLO</a>
                </div><!-- End Logo -->

                <!-- MENU -->
                <ul class="menu">
                    <li class="menu-item">
                        <a href="{{ route('web.index') }}" class="menu-link  @if (Route::is('web.index')) active  @endif">Home</a>
                    </li>
                    <li>
                        <a href="{{ route('web.ourWork') }}" class="menu-link @if (Route::is('web.ourWork')) active  @endif">Our Work</a>
                    </li>
                    <li>
                        <a href="{{ route('web.aboutUs') }}" class="menu-link @if (Route::is('web.aboutUs')) active  @endif">About Us</a>
                    </li>
                    <li>
                        <a href="{{ route('web.ourTeam') }}" class="menu-link @if (Route::is('web.ourTeam')) active  @endif">OUR TEAM</a>
                    </li>
                    <li>
                        <a href="{{ route('web.clients') }}" class="menu-link @if (Route::is('web.clients')) active  @endif">CLIENTS</a>
                    </li>
                    <li>
                        <a href="{{ route('web.blog') }}" class="menu-link @if (Route::is('web.blog')) active  @endif">BLOG</a>
                    </li>
                    <li>
                        <a href="{{ route('web.index') }}" class="menu-link @if (Route::is('web.index')) active  @endif">SIGN IN</a>
                    </li>
                    <li class="socials">
                        <a href="#" class=""><img
                                src="{{ cxl_asset('assets/images/mobile-menu-twitter.png') }}" alt="Twitter"></a>
                        <a href="#" class=""><img
                                src="{{ cxl_asset('assets/images/mobile-menu-facebook.png') }}" alt="Facebook"></a>
                        <a href="#" class=""><img
                                src="{{ cxl_asset('assets/images/mobile-menu-instagram.png') }}" alt="Instagram"></a>
                    </li>
                    <li class="intouch">
                        <a href="{{ route('web.contact') }}" class="btn">Get in touch</a>
                    </li>
                </ul><!-- End Menu  -->

                <!-- Menu Burger -->
                <div class="menu-burger">
                    <a href="#"><img src="{{ cxl_asset('assets/images/burger-menu.png') }}"
                            alt="Burger Menu"></a>
                </div><!-- End Menu Burger -->

                <!-- MOBILE -->
                <div class="close-nav">
                    <a href="#" class="close-default"><img
                            src="{{ cxl_asset('assets/images/close-default.png') }}" alt="Close Default"></a>
                </div>

            </nav><!-- End NAVIGATION -->

            @yield('main')

            @if (!Route::is('web.contact'))
                @if (!Route::is('web.index'))
                    @if (!Route::is('web.aboutUs'))
                        <!-- CTA SECTION -->
                        <section class="cta-fluid">
                            <div class="container">
                                @if (Route::is('web.ourTeam'))
                                <h3 class="heading-secondary">EVERY QUESTION NEEDS AN ANSWER. <br>
                                    EVERY ANSWER STARTS WITH <span class="text-dark">DEV</span> APOLLO.</h3>
                                @else
                                <h3 class="heading-secondary">START YOUR JOURNEY TO BETTER <br> BUSINESS WITH <span
                                    class="text-dark">DEV</span> APOLLO.</h3>
                                @endif
                                <a href="contact.html" class="btn btn-dark">GET IN TOUCH</a>
                            </div>
                        </section>
                        <!--END CTA SECTION -->
                    @endif
                @endif
            @endif

            <footer>
                <div class="container">
                    <div class="footer-content">
                        <div class="footer-left">
                            <div class="footer-logo">
                                <img src="{{ cxl_asset('assets/images/logo-icon.png') }}" alt="Logo">
                                <h3><span class="gold">DEV</span>APOLLO</h3>
                            </div>
                            <p>OUR MISSION IS TO GROW YOUR BUSINESS ONLINE AND MAKE IT PROSPER</p>
                            <div class="contact-info">
                                <a><img src="{{ cxl_asset('assets/images/footer-message-icon.png') }}"
                                        alt="message image">
                                    devapollo@gmail.com</a>
                                <a><img src="{{ cxl_asset('assets/images/footer-phone-icon.png') }}"
                                        alt="message image">
                                    +888-88-88-88</a>
                                <a><img src="{{ cxl_asset('assets/images/footer-location-icon.png') }}"
                                        alt="message image"> Str.
                                    45</a>
                            </div>
                        </div>
                        <div class="footer-right">
                            <div class="explore">
                                <h3>EXPLORE</h3>
                                <div class="explore-links">
                                    <div>
                                        <a>ABOUT US</a>
                                        <a>COSTS CALCULATOR</a>
                                    </div>

                                    <div>
                                        <a>OUR WORK</a>
                                        <a>OUR TEAM</a>
                                    </div>

                                    <div>
                                        <a>CLIENTS</a>
                                        <a>CONTACTS</a>
                                    </div>

                                    <div>
                                        <a>BLOG</a>
                                    </div>



                                </div>

                            </div>
                            <div class="socials">
                                <div class="follow-us">
                                    <h3>OUR SOCIAL MEDIAS</h3>
                                    <div class="follow-us__links">
                                        <a href="#"><img src="{{ cxl_asset('assets/images/facebook.png') }}"
                                                alt="Facebook Icon"></a>
                                        <a href="#"><img src="{{ cxl_asset('assets/images/instagram.png') }}"
                                                alt="Instagram Icon"></a>
                                        <a href="#"><img src="{{ cxl_asset('assets/images/twitter.png') }}"
                                                alt="Twitter Icon"></a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="copyright">Copyright © 2022 <span class="gold">Devapollo</span>. All rights reserved.
                    </div>
                </div>
            </footer>

            <!-- MODAL -->
            <div class="modal">
                <div class="modal-content">
                    <div class="modal-header">
                        <a href="#" class="closeModal"><img src="{{ cxl_asset('assets/images/cross.png') }}"
                                alt="Close modal Icon"></a>
                    </div>
                    <div class="modal-body">
                        <h1>CONGRATULATIONS!</h1>
                        <p>You have scheduled a call with us.<br>
                            Let’s meet on <span class="gold">August 23, 11:45</span>!</p>
                        <img src="{{ cxl_asset('assets/images/modal-icon.png') }}" alt="Icon Modal">
                        <a href="#" class="btn">BACK HOME</a>
                    </div>
                    <div class="modal-footer"></div>
                </div>

            </div>

            @yield('script')
</body>

</html>
