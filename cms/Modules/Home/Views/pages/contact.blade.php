@extends('Home::master')
@section('title', __('Devapollo | Contact US'))
@section('main')

      <div class="hero-content">
        <h1>LET’S HAVE A <span class="gold">CALL!</span></h1>
        <p>If you have any questions, don’t hesitate and <span class="gold">schedule a free call</span>, so we can discuss the details of your project.</p>
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
            <p class="text-light">We will carefully study your project and during a short call we will align on your individual brand's strategy and discuss the next move together.</p>
            <p class="text-light">Finally, we will figure out solutions that best meet your business goals and target audiences from all corners of the web.</p>
            <div class="contact-info">
              <p class="text-light"><img src="{{ cxl_asset('assets/images/message.png') }}" alt="message image"> devapollo@gmail.com</p>
              <p class="text-light"><img src="{{ cxl_asset('assets/images/phone.png') }}" alt="message image"> +888-88-88-88</p>
              <p class="text-light"><img src="{{ cxl_asset('assets/images/location.png') }}" alt="message image"> Str. 45</p>
            </div>
            <div class="follow-us">
              <h3>FOLLOW US</h3>
              <div class="follow-us__links">
                <a href="#"><img src="{{ cxl_asset('assets/images/facebook.png') }}" alt="Facebook Icon"></a>
                <a href="#"><img src="{{ cxl_asset('assets/images/instagram.png') }}" alt="Instagram Icon"></a>
                <a href="#"><img src="{{ cxl_asset('assets/images/twitter.png') }}" alt="Twitter Icon"></a>
              </div>

            </div>
          </div> <!-- end connect left -->

        <div class="connect-right">
          <form action="">
            <div class="form-row">
              <input type="text" name="fullname" class="fullname form-input" id="fullname" placeholder="FULL NAME">
              <input type="text" name="companyname" class="companyname form-input" id="companyname" placeholder="COMPANY NAME">
            </div>

            <div class="form-row">
              <input type="email" name="email" class="email form-input" id="email" placeholder="EMAIL">
              <input type="phone" name="phone" class="phone form-input" id="phone" placeholder="PHONE NUMBER">
            </div>

            <textarea name="message" class="form-input" id="message" cols="30" rows="10" placeholder="TELL US ABOUT YOUR PROJECT (SCOPE, TIMEFRAMES, BUSINESS GOALS)"></textarea>
          </form>
          <p class="text-light">CHOOSE THE BEST TIME FOR YOU</p>

          <!-- CALENDAR AND SPOT -->
          <div class="calendar-spot">
            <div class="calendar">
              <div class="calendar-header">
                <a href="#"><img src="{{ cxl_asset('assets/images/calendar_arrow_left.png') }}" alt="arrow left"></a>
                <p class="month">AUGUST 2022</p>
                <a href="#"><img src="{{ cxl_asset('assets/images/calendar_arrow_right.png') }}" alt="arrow right"></a>
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
              <p><input type="checkbox" name="checkbox" id="checkbox"><label for="checkbox">I accept <span class="gold"> Privacy Policy</span></label></p>
            </div>
            <div class="book-btn">
              <a href="" class="btn bookCall">BOOK A CALL</a>
            </div>
          </div>

          <!-- WHAT HAPPENS NEXT MOBILE -->
          <div class="whathappens-mobile">
            <h3 class="gold">WHAT HAPPENS NEXT?</h3>
            <p class="text-light">We will carefully study your project and during a short call we will align on your individual brand's strategy and discuss the next move together.</p>
            <p class="text-light">Finally, we will figure out solutions that best meet your business goals and target audiences from all corners of the web.</p>
            <div class="contact-info">
              <p class="text-light"><img src="{{ cxl_asset('assets/images/message-lg.png') }}" alt="message image"> devapollo@gmail.com</p>
              <p class="text-light"><img src="{{ cxl_asset('assets/images/phone-lg.png') }}" alt="message image"> +888-88-88-88</p>
              <p class="text-light"><img src="{{ cxl_asset('assets/images/map-lg.png') }}" alt="message image"> Str. 45</p>
            </div>
            <div class="follow-us">
              <h3>FOLLOW US</h3>
              <div class="follow-us__links">
                <a href="#"><img src="{{ cxl_asset('assets/images/facebook-lg.png') }}" alt="Facebook Icon"></a>
                <a href="#"><img src="{{ cxl_asset('assets/images/instagram-lg.png') }}" alt="Instagram Icon"></a>
                <a href="#"><img src="{{ cxl_asset('assets/images/twitter-lg.png') }}" alt="Twitter Icon"></a>
              </div>

            </div>
          </div>
        </div> <!-- end connect-right -->
      </div> <!-- end container -->
    </section> <!-- END CONNECT WITH US SECTION -->


    <section class="customer-journey">
      <div class="container">
        <h2>Today, every customer journey begins with questions. Answer them with <span class="text-dark">Dev</span>apollo.</h2>
        <div class="follow-us">
          <h3>FOLLOW US</h3>
          <div class="follow-us__links">
            <a href="#"><img src="{{ cxl_asset('assets/images/facebook-dark.png') }}" alt="Facebook Icon"></a>
            <a href="#"><img src="{{ cxl_asset('assets/images/instagram-dark.png') }}" alt="Instagram Icon"></a>
            <a href="#"><img src="{{ cxl_asset('assets/images/twitter-dark.png') }}" alt="Twitter Icon"></a>
          </div>

        </div>
      </div>

    </section>


@endsection
@section('script')
    <script src="{{ cxl_asset('assets/js/mobilemenu.js') }}"></script>
    <script src="{{ cxl_asset('assets/js/app.js') }}"></script>
@endsection
