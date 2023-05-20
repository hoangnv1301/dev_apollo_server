@extends('Home::master')
@section('title', __('Devapollo | OUR TEAM'))
@section('main')

      <div class="hero-content">
        <h1>MEET OUR <span class="gold">TEAM</span></h1>
      </div>

    </div><!-- END CONTAINER -->

  </section> <!-- End Hero Section -->

  <!-- TEAM MEMEBERS SECTION -->
  <section class="team-members">
    <div class="container">
      <div class="team-member">
        <div class="image">
          <a href="individualmemeber.html">
            <img src="{{ cxl_asset('assets/images/jane.png') }}" alt="Jane">
          </a>
        </div>
        <div class="socials">
          <a href="#"><img src="{{ cxl_asset('assets/images/twitter.png') }}" alt="Twitter"></a>
          <a href="#"><img src="{{ cxl_asset('assets/images/facebook.png') }}" alt="Facebook"></a>
          <a href="#"><img src="{{ cxl_asset('assets/images/instagram.png') }}" alt="Instagram"></a>
        </div>
        <div class="footer">
          <p class="name">JANE HENDERSON</p>
          <p class="position">PRODUCT MANAGER</p>
        </div>
      </div>
      <div class="team-member">
        <div class="image">
          <a href="individualmemeber.html">
            <img src="{{ cxl_asset('assets/images/jack.png') }}" alt="Jack">
          </a>

        </div>
        <div class="socials">
          <a href="#"><img src="{{ cxl_asset('assets/images/twitter.png') }}" alt="Twitter"></a>
          <a href="#"><img src="{{ cxl_asset('assets/images/facebook.png') }}" alt="Facebook"></a>
          <a href="#"><img src="{{ cxl_asset('assets/images/instagram.png') }}" alt="Instagram"></a>
        </div>
        <div class="footer">
          <p class="name">JACK BYERS</p>
          <p class="position">PROJECT MANAGER</p>
        </div>
      </div>
      <div class="team-member">
        <div class="image">
          <a href="individualmemeber.html">
            <img src="{{ cxl_asset('assets/images/steve.png') }}" alt="Steve">
          </a>

        </div>
        <div class="socials">
          <a href="#"><img src="{{ cxl_asset('assets/images/twitter.png') }}" alt="Twitter"></a>
          <a href="#"><img src="{{ cxl_asset('assets/images/facebook.png') }}" alt="Facebook"></a>
          <a href="#"><img src="{{ cxl_asset('assets/images/instagram.png') }}" alt="Instagram"></a>
        </div>
        <div class="footer">
          <p class="name">STEVE ROBINSON</p>
          <p class="position">IT COORDINATOR</p>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="team-member">
        <div class="image">
          <a href="individualmemeber.html">
            <img src="{{ cxl_asset('assets/images/jack.png') }}" alt="Jack">
          </a>

        </div>
        <div class="socials">
          <a href="#"><img src="{{ cxl_asset('assets/images/twitter.png') }}" alt="Twitter"></a>
          <a href="#"><img src="{{ cxl_asset('assets/images/facebook.png') }}" alt="Facebook"></a>
          <a href="#"><img src="{{ cxl_asset('assets/images/instagram.png') }}" alt="Instagram"></a>
        </div>
        <div class="footer">
          <p class="name">JACK BYERS</p>
          <p class="position">PROJECT MANAGER</p>
        </div>
      </div>
      <div class="team-member">
        <div class="image">
          <a href="individualmemeber.html">
            <img src="{{ cxl_asset('assets/images/steve.png') }}" alt="Steve">
          </a>

        </div>
        <div class="socials">
          <a href="#"><img src="{{ cxl_asset('assets/images/twitter.png') }}" alt="Twitter"></a>
          <a href="#"><img src="{{ cxl_asset('assets/images/facebook.png') }}" alt="Facebook"></a>
          <a href="#"><img src="{{ cxl_asset('assets/images/instagram.png') }}" alt="Instagram"></a>
        </div>
        <div class="footer">
          <p class="name">STEVE ROBINSON</p>
          <p class="position">IT COORDINATOR</p>
        </div>
      </div>
      <div class="team-member">
        <div class="image">
          <a href="individualmemeber.html">
            <img src="{{ cxl_asset('assets/images/jane.png') }}" alt="Jane">
          </a>
        </div>
        <div class="socials">
          <a href="#"><img src="{{ cxl_asset('assets/images/twitter.png') }}" alt="Twitter"></a>
          <a href="#"><img src="{{ cxl_asset('assets/images/facebook.png') }}" alt="Facebook"></a>
          <a href="#"><img src="{{ cxl_asset('assets/images/instagram.png') }}" alt="Instagram"></a>
        </div>
        <div class="footer">
          <p class="name">JANE HENDERSON</p>
          <p class="position">PRODUCT MANAGER</p>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="card-nav">
        <div class="arrow_left"><img src="{{ cxl_asset('assets/images/arrow_left.png') }}" alt="Arrow left"></div>
        <div class="cad-nav__link"><img src="{{ cxl_asset('assets/images/rectangle1.png') }}" alt=""></div>
        <div class="cad-nav__link"><img src="{{ cxl_asset('assets/images/rectangle2.png') }}" alt=""></div>
        <div class="cad-nav__link"><img src="{{ cxl_asset('assets/images/rectangle3.png') }}" alt=""></div>
        <div class="arrow_right"><img src="{{ cxl_asset('assets/images/arrow_right.png') }}" alt="Arrow right"></div>
      </div>
    </div>


  </section> <!-- END TEAM MEMEBER SECTION -->

  <section class="getintouch">
    <div class="container">
      <div class="col-1-2">
        <h2 class="heading-secondary">
          OUR TEAM IS COMMITED <br>TO HELP CLIENTS TO<br> <span class="gold">REACH</span> THEIR <span class="gold">GOALS.</span>
        </h2>
        <p class="main-text">
          Our team applies their extensive experience to<br> identify strategies that will best enable our clients to<br> achieve their business goals.
        </p>
        <a href="contact.html" class="btn-small-secondary">GET IN TOUCH</a>
      </div>
      <div class="col-2-2">
        <img src="{{ cxl_asset('assets/images/our-team-section.png') }}" alt="Team Image">
      </div>
    </div>
  </section>


  @endsection
  @section('script')
      <script src="{{ cxl_asset('assets/js/accordion.js') }}"></script>
      <script src="{{ cxl_asset('assets/js/mobilemenu.js') }}"></script>
  @endsection
