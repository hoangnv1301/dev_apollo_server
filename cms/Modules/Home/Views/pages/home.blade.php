@extends('Home::master')
@section('title', __('Devapollo'))
@section('main')
                <div class="hero-content">
                    <div class="hero-content__left">
                        <p><span>COMMITT</span>ED TO A BETTER FUTURE</p>
                        <h1>GROW YOUR BUSINESS WITH <span class="gold">DEV</span>APOLLO</h1>
                        <a href="{{ route('web.contact') }}" class="btn"> GET IN TOUCH</a>
                    </div>

                    <!-- SLIDER -->
                    <div class="slider">
                        <img class="slider-image" src="{{ cxl_asset('assets/images/main-image-1.png') }}"
                            alt="Main Slider Image 1">
                        <img class="slider-image" src="{{ cxl_asset('assets/images/main-image-2.png') }}"
                            alt="Main Slider Image 2">
                        <img class="slider-image" src="{{ cxl_asset('assets/images/main-image-3.png') }}"
                            alt="Main Slider Image 3">
                    </div> <!-- END SLIDER -->
                </div>

            </div><!-- END CONTAINER -->

        </section> <!-- End Hero Section -->

        <!-- COST CALCULATOR -->
        <section class="cost-calculator">
            <div class="container">
                <p>USE OUR <span>COSTS CALCULATOR</span> TO FIND OUT HOW MUCH, AND HOW LONG IT WOULD TAKE US TO BUILD AN APP
                    THAT WILL MEET YOUR BUSINESS NEEDS</p>
                <a href="./costscalculation.html" class="btn-small-secondary">GET STARTED</a>
            </div>
        </section> <!-- END COST CALCULATOR -->

        <!-- WHY CHOOSE SECTION -->
        <section class="why-choose">
            <div class="container">
                <h2 class="secondary-heading">
                    <span class="text">WHY CHOOSE</span>
                    <span class="text">
                        <span class="line"></span>
                        <span class="gold">DEV</span>APOLLO<span class="gold">.</span></span>
                </h2>
                <div class="cards">
                    <div class="card">
                        <div class="card-bgbox"></div>
                        <img src="{{ cxl_asset('assets/images/concept-sharing.png') }}" alt="Icon">
                        <h3>INNOVATIVE.</h3>
                        <p>Devapollo is flexible and keeps up to date with modern trends. We are willing to adapt to outside
                            market pressures quickly.</p>
                    </div>
                    <div class="card">
                        <img src="{{ cxl_asset('assets/images/star.png') }}" alt="Icon">
                        <h3>UNIQUE.</h3>
                        <p>We will build a unique strategy that will meet your business needs. We agile best practices for
                            maximum results.</p>
                    </div>
                    <div class="card">
                        <img src="{{ cxl_asset('assets/images/family.png') }}" alt="Icon">
                        <h3>DEDICATED TEAM.</h3>
                        <p>Our team’s mission is helping to transform your business into smarter, sharper and better
                            versions of themselves.</p>
                    </div>
                    <div class="card">
                        <img src="{{ cxl_asset('assets/images/hold-seeds.png') }}" alt="Icon">
                        <h3>TRANSPARENT.</h3>
                        <p>Devapollo opens the doors and lets customers in. You will be the part of the process, therefore
                            we can achieve your business goals together.</p>
                    </div>
                </div>
            </div>


        </section><!-- END WHY CHOOSE SECTION -->

        <!-- CLIENTS SECTION -->
        <section class="clients">
            <div class="container">
                <h2 class="secondary-heading">
                    <span class="text">OUR</span>
                    <span class="text">
                        <span class="line"></span>
                        CLIENTS<span class="gold">.</span></span>
                </h2>

                <div class="clients-1">
                    <div class="client">
                        <img src="{{ cxl_asset('assets/images/segment.png') }}" alt="Segment Logo">
                    </div>
                    <div class="client">
                        <img src="{{ cxl_asset('assets/images/cloudcannon.png') }}" alt="Cloudcannon Logo">
                    </div>
                    <div class="client">
                        <img src="{{ cxl_asset('assets/images/rocketmq.png') }}" alt="Rocketmq Logo">
                    </div>
                    <div class="client">
                        <img src="{{ cxl_asset('assets/images/plotly.png') }}" alt="Plotly Logo">
                    </div>
                </div>
                <div class="clients-2">
                    <div class="client">
                        <img src="{{ cxl_asset('assets/images/zeit.png') }}" alt="Zeit Logo">
                    </div>
                    <div class="client">
                        <img src="{{ cxl_asset('assets/images/snowflake.png') }}" alt="Cloudcannon Logo">
                    </div>
                    <div class="client">
                        <img src="{{ cxl_asset('assets/images/clearvision.png') }}" alt="Clearvision Logo">
                    </div>
                    <div class="client">
                        <img src="{{ cxl_asset('assets/images/circle.png') }}" alt="Circle Logo">
                    </div>
                </div>
            </div>

            <a href="#" class="btn-small-secondary">READ MORE</a>

        </section> <!-- END CLIENTS SECTION -->

        <!-- CLIENTS REVIEW SECTION  -->
        <section class="clients-review">

            <div class="container">
                <h2 class="secondary-heading">
                    <span class="text">WHAT OUR</span>
                    <span class="text">
                        <span class="line"></span>
                        <span class="gold">CLENTS</span>&nbsp;SAY<span class="gold">.</span></span>
                </h2>

                <div class="client-blocks">
                    <div class="client-block">
                        <img src="{{ cxl_asset('assets/images/our_clients_3.png') }}" alt="Client image">
                        <p class="quote">‘Working with Devapollo is always an absolute joy, both personally and
                            professionally”</p>
                        <h4 class="gold">BILL THOMPSON</h4>
                        <p>client of company</p>
                    </div>
                    <div class="client-block">
                        <img src="{{ cxl_asset('assets/images/our_clients_2.png') }}" alt="Client image">
                        <p class="quote">‘Working with Devapollo is always an absolute joy, both personally and
                            professionally”</p>
                        <h4 class="gold">BILL THOMPSON</h4>
                        <p>client of company</p>
                    </div>
                    <div class="client-block">
                        <img src="{{ cxl_asset('assets/images/our_clients_1 (1).png') }}" alt="Client image">
                        <p class="quote">‘Working with Devapollo is always an absolute joy, both personally and
                            professionally”</p>
                        <h4 class="gold">BILL THOMPSON</h4>
                        <p>client of company</p>
                    </div>
                </div>
            </div>

            <div class="card-nav">
                <div class="arrow_left"><img src="{{ cxl_asset('assets/images/arrow_left.png') }}" alt="Arrow left">
                </div>
                <div class="cad-nav__link"><img src="{{ cxl_asset('assets/images/rectangle1.png') }}" alt="">
                </div>
                <div class="cad-nav__link"><img src="{{ cxl_asset('assets/images/rectangle2.png') }}" alt="">
                </div>
                <div class="cad-nav__link"><img src="{{ cxl_asset('assets/images/rectangle3.png') }}" alt="">
                </div>
                <div class="arrow_right"><img src="{{ cxl_asset('assets/images/arrow_right.png') }}" alt="Arrow right">
                </div>
            </div>
        </section> <!-- END CLIENTS REVIEW SECTION  -->

        <!-- CONNECT WITH US SECTION  -->
        <section class="connect">
            <div class="container">
                <div class="connect-left">
                    <h2 class="secondary-heading">
                        <span class="text">CONNECT</span>
                        <span class="text">
                            <span class="line"></span>
                            WITH <span class="gold">&nbsp; US.</span></span>
                    </h2>
                    <p>Fill the form to have a free call with our experts.</p>
                    <h3 class="gold">WHAT HAPPENS NEXT?</h3>
                    <p class="text-light">We will carefully study your project and during a short call we will align on
                        your individual brand's strategy and discuss the next move together.</p>
                    <p class="text-light">Finally, we will figure out solutions that best meet your business goals and
                        target audiences from all corners of the web.</p>
                    <div class="contact-info">
                        <p class="text-light"><img src="{{ cxl_asset('assets/images/message.png') }}"
                                alt="message image"> devapollo@gmail.com</p>
                        <p class="text-light"><img src="{{ cxl_asset('assets/images/phone.png') }}" alt="message image">
                            +888-88-88-88</p>
                        <p class="text-light"><img src="{{ cxl_asset('assets/images/location.png') }}"
                                alt="message image"> Str. 45</p>
                    </div>
                    <div class="follow-us">
                        <h3>FOLLOW US</h3>
                        <div class="follow-us__links">
                            <a href="#"><img src="{{ cxl_asset('assets/images/facebook.png') }}"
                                    alt="Facebook Icon"></a>
                            <a href="#"><img src="{{ cxl_asset('assets/images/instagram.png') }}"
                                    alt="Instagram Icon"></a>
                            <a href="#"><img src="{{ cxl_asset('assets/images/twitter.png') }}"
                                    alt="Twitter Icon"></a>
                        </div>

                    </div>
                </div> <!-- end connect left -->

                <div class="connect-right">
                    <form action="">
                        <div class="form-row">
                            <input type="text" name="fullname" class="fullname form-input" id="fullname"
                                placeholder="FULL NAME">
                            <input type="text" name="companyname" class="companyname form-input" id="companyname"
                                placeholder="COMPANY NAME">
                        </div>

                        <div class="form-row">
                            <input type="email" name="email" class="email form-input" id="email"
                                placeholder="EMAIL">
                            <input type="phone" name="phone" class="phone form-input" id="phone"
                                placeholder="PHONE NUMBER">
                        </div>

                        <textarea name="message" class="form-input" id="message" cols="30" rows="10"
                            placeholder="TELL US ABOUT YOUR PROJECT (SCOPE, TIMEFRAMES, BUSINESS GOALS)"></textarea>
                    </form>
                    <p class="text-light">CHOOSE THE BEST TIME FOR YOU</p>

                    <!-- CALENDAR AND SPOT -->
                    <div class="calendar-spot">
                        <div class="calendar">
                            <div class="calendar-header">
                                <a href="#"><img src="{{ cxl_asset('assets/images/calendar_arrow_left.png') }}"
                                        alt="arrow left"></a>
                                <p class="month">AUGUST 2022</p>
                                <a href="#"><img src="{{ cxl_asset('assets/images/calendar_arrow_right.png') }}"
                                        alt="arrow right"></a>
                            </div>

                            <div class="calendar-body">
                                <div class="week">
                                    <div class="day">MON</div>
                                    <div class="day">TUE</div>
                                    <div class="day">WED</div>
                                    <div class="day">THU</div>
                                    <div class="day">FRI</div>
                                    <div class="day gold">SAT</div>
                                    <div class=" gold">SUN</div>
                                </div>
                                <div class="week">
                                    <div class="day">1</div>
                                    <div class="day">2</div>
                                    <div class="day">3</div>
                                    <div class="day">4</div>
                                    <div class="day">5</div>
                                    <div class="day">6</div>
                                    <div class="day">7</div>
                                </div>
                                <div class="week">
                                    <div class="day">8</div>
                                    <div class="day">9</div>
                                    <div class="day">10</div>
                                    <div class="day">11</div>
                                    <div class="day">12</div>
                                    <div class="day">13</div>
                                    <div class="day">14</div>
                                </div>
                                <div class="week">
                                    <div class="day">15</div>
                                    <div class="day">16</div>
                                    <div class="day">17</div>
                                    <div class="day">18</div>
                                    <div class="day">19</div>
                                    <div class="day">20</div>
                                    <div class="day">21</div>
                                </div>
                                <div class="week">
                                    <div class="day">22</div>
                                    <div class="day">23</div>
                                    <div class="day">24</div>
                                    <div class="day">25</div>
                                    <div class="day">26</div>
                                    <div class="day">27</div>
                                    <div class="day">28</div>
                                </div>
                                <div class="week">
                                    <div class="day">29</div>
                                    <div class="day">30</div>
                                    <div class="day">31</div>
                                    <div class="day"></div>
                                    <div class="day"></div>
                                    <div class="day"></div>
                                    <div class="day"></div>
                                </div>
                            </div>
                        </div>
                        <div class="spot">
                            <div class="spot-header">
                                <h4>AVAILABLE SPOTS</h4>
                                <h5>AUGUST 3, 2022</h5>
                            </div>
                            <div class="spot-body">

                                <div class="time-box">
                                    <div>09:05</div>
                                    <div>09:45</div>
                                </div>
                                <div class="time-box">
                                    <div>10:05</div>
                                    <div>10:45</div>
                                </div>
                                <div class="time-box">
                                    <div>11:05</div>
                                    <div>11:45</div>
                                </div>
                                <div class="time-box">
                                    <div>12:05</div>
                                    <div>12:45</div>
                                </div>


                            </div>

                        </div>
                    </div>

                    <div class="privacy-policy">
                        <div>
                            <p><input type="checkbox" name="checkbox" id="checkbox"><label for="checkbox">I accept
                                    <span class="gold"> Privacy Policy</span></label></p>
                        </div>
                        <div class="book-btn">
                            <a href="" class="btn bookCall">BOOK A CALL</a>
                        </div>
                    </div>

                    <!-- WHAT HAPPENS NEXT MOBILE -->
                    <div class="whathappens-mobile">
                        <h3 class="gold">WHAT HAPPENS NEXT?</h3>
                        <p class="text-light">We will carefully study your project and during a short call we will align on
                            your individual brand's strategy and discuss the next move together.</p>
                        <p class="text-light">Finally, we will figure out solutions that best meet your business goals and
                            target audiences from all corners of the web.</p>
                        <div class="contact-info">
                            <p class="text-light"><img src="{{ cxl_asset('assets/images/message-lg.png') }}"
                                    alt="message image"> devapollo@gmail.com</p>
                            <p class="text-light"><img src="{{ cxl_asset('assets/images/phone-lg.png') }}"
                                    alt="message image"> +888-88-88-88</p>
                            <p class="text-light"><img src="{{ cxl_asset('assets/images/map-lg.png') }}"
                                    alt="message image"> Str. 45</p>
                        </div>
                        <div class="follow-us">
                            <h3>FOLLOW US</h3>
                            <div class="follow-us__links">
                                <a href="#"><img src="{{ cxl_asset('assets/images/facebook-lg.png') }}"
                                        alt="Facebook Icon"></a>
                                <a href="#"><img src="{{ cxl_asset('assets/images/instagram-lg.png') }}"
                                        alt="Instagram Icon"></a>
                                <a href="#"><img src="{{ cxl_asset('assets/images/twitter-lg.png') }}"
                                        alt="Twitter Icon"></a>
                            </div>

                        </div>
                    </div>
                </div> <!-- end connect-right -->
            </div> <!-- end container -->
        </section> <!-- END CONNECT WITH US SECTION -->
    @endsection
    @section('script')
        <script src="{{ cxl_asset('assets/js/app.js') }}"></script>
        <script src="{{ cxl_asset('assets/js/mobilemenu.js') }}"></script>
    @endsection
