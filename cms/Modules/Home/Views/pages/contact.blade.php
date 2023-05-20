@extends('Home::master')
@section('title', __('Devapollo | Contact US'))
@section('main')

    <div class="hero-content">
        <h1>LET’S HAVE A <span class="gold">CALL!</span></h1>
        <p>If you have any questions, don’t hesitate and <span class="gold">schedule a free call</span>, so we can discuss
            the details of your project.</p>
    </div>

    </div><!-- END CONTAINER -->

    </section> <!-- End Hero Section -->

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
                <p class="text-light">We will carefully study your project and during a short call we will align on your
                    individual brand's strategy and discuss the next move together.</p>
                <p class="text-light">Finally, we will figure out solutions that best meet your business goals and target
                    audiences from all corners of the web.</p>
                <div class="contact-info">
                    <p class="text-light"><img src="{{ cxl_asset('assets/images/message.png') }}" alt="message image">
                        devapollo@gmail.com</p>
                    <p class="text-light"><img src="{{ cxl_asset('assets/images/phone.png') }}" alt="message image">
                        +888-88-88-88</p>
                    <p class="text-light"><img src="{{ cxl_asset('assets/images/location.png') }}" alt="message image"> Str.
                        45</p>
                </div>
                <div class="follow-us">
                    <h3>FOLLOW US</h3>
                    <div class="follow-us__links">
                        <a href="#"><img src="{{ cxl_asset('assets/images/facebook.png') }}" alt="Facebook Icon"></a>
                        <a href="#"><img src="{{ cxl_asset('assets/images/instagram.png') }}"
                                alt="Instagram Icon"></a>
                        <a href="#"><img src="{{ cxl_asset('assets/images/twitter.png') }}" alt="Twitter Icon"></a>
                    </div>

                </div>
            </div> <!-- end connect left -->

            <div class="connect-right">
                <form action="{{ route('web.contactSubmit') }}" method="POST">
                    @csrf
                    <div class="form-row">
                        <input type="text" name="fullname" class="fullname form-input" id="fullname"
                            placeholder="FULL NAME">
                        <input type="text" name="company_name" class="companyname form-input" id="company_name"
                            placeholder="COMPANY NAME">
                    </div>

                    <div class="form-row">
                        <input type="email" name="email" class="email form-input" id="email" placeholder="EMAIL">
                        <input type="phone" name="phone" class="phone form-input" id="phone"
                            placeholder="PHONE NUMBER">
                    </div>

                    <textarea name="description" class="form-input" id="description" cols="30" rows="10"
                        placeholder="TELL US ABOUT YOUR PROJECT (SCOPE, TIMEFRAMES, BUSINESS GOALS)"></textarea>
                    <p class="text-light">CHOOSE THE BEST TIME FOR YOU</p>

                    <!-- CALENDAR AND SPOT -->
                    <div class="calendar-spot">
                        <div class="calendar">
                            <div class="calendar-header">
                                <a href="#" id="back-btn"><img
                                        src="{{ cxl_asset('assets/images/calendar_arrow_left.png') }}" alt="arrow left"></a>
                                <p class="month" id="month-year">AUGUST 2022</p>
                                <a href="#" id="next-btn"><img
                                        src="{{ cxl_asset('assets/images/calendar_arrow_right.png') }}"
                                        alt="arrow right"></a>
                            </div>

                            <div class="calendar-body" id="calendar-body">
                                {{-- Date will be insert with JS below --}}
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
                            <p><input type="checkbox" name="checkbox" id="checkbox"><label for="checkbox">I accept <span
                                        class="gold"> Privacy Policy</span></label></p>
                        </div>
                        <div class="book-btn">
                            <button style="border: none;" type="submit" class="btn bookCall">BOOK A CALL</button>
                        </div>
                    </div>
                </form>

                {{-- JS generate calendar above --}}
                <script>
                    const calendarBody = document.getElementById("calendar-body");
                    const monthYear = document.getElementById("month-year");
                    const backBtn = document.getElementById("back-btn");
                    const nextBtn = document.getElementById("next-btn");

                    let currentDate = new Date();

                    function generateCalendar(date) {
                        calendarBody.innerHTML = `<div class="week">
                                <div class="day unhover" disable>MON</div>
                                <div class="day unhover">TUE</div>
                                <div class="day unhover">WED</div>
                                <div class="day unhover">THU</div>
                                <div class="day unhover">FRI</div>
                                <div class="day gold unhover">SAT</div>
                                <div class="gold unhover">SUN</div>
                              </div>`;
                        const month = date.getMonth();
                        const year = date.getFullYear();
                        const firstDay = new Date(year, month, 1).getDay();
                        const daysInMonth = new Date(year, month + 1, 0).getDate();

                        let dayCounter = 1;
                        let weekHTML = '';

                        for (let i = 0; i < 6; i++) {
                            weekHTML = '<div class="week">';

                            for (let j = 0; j < 7; j++) {
                                if (i === 0 && j < firstDay - 1) {
                                    weekHTML += '<div class="day"></div>';
                                } else if (dayCounter <= daysInMonth) {
                                    weekHTML += '<div class="day">' + dayCounter + '</div>';
                                    dayCounter++;
                                } else {
                                    weekHTML += '<div class="day"></div>';
                                }
                            }
                            weekHTML += '</div>';
                            calendarBody.innerHTML += weekHTML;
                        }

                        monthYear.textContent = date.toLocaleDateString('default', {
                            month: 'long',
                            year: 'numeric'
                        });
                    }

                    //Calendar button
                    backBtn.addEventListener("click", function(event) {
                        event.preventDefault();
                        currentDate.setMonth(currentDate.getMonth() - 1);
                        generateCalendar(currentDate);
                    });

                    nextBtn.addEventListener("click", function(event) {
                        event.preventDefault();
                        currentDate.setMonth(currentDate.getMonth() + 1);
                        generateCalendar(currentDate);
                    });

                    // Initial calendar generation
                    generateCalendar(currentDate);
                </script>
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


    <section class="customer-journey">
        <div class="container">
            <h2>Today, every customer journey begins with questions. Answer them with <span
                    class="text-dark">Dev</span>apollo.</h2>
            <div class="follow-us">
                <h3>FOLLOW US</h3>
                <div class="follow-us__links">
                    <a href="#"><img src="{{ cxl_asset('assets/images/facebook-dark.png') }}"
                            alt="Facebook Icon"></a>
                    <a href="#"><img src="{{ cxl_asset('assets/images/instagram-dark.png') }}"
                            alt="Instagram Icon"></a>
                    <a href="#"><img src="{{ cxl_asset('assets/images/twitter-dark.png') }}"
                            alt="Twitter Icon"></a>
                </div>

            </div>
        </div>

    </section>


@endsection
@section('script')
    <script src="{{ cxl_asset('assets/js/mobilemenu.js') }}"></script>
    <script src="{{ cxl_asset('assets/js/app.js') }}"></script>
@endsection
