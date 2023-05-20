@extends('Home::master')
@section('title', __('Devapollo | About us'))
@section('main')

      <div class="hero-content">
        <h1>ABOUT <span class="gold">US</span></h1>
      </div>

    </div><!-- END CONTAINER -->

  </section> <!-- End Hero Section -->

  <section class="about-first">
    <div class="container">
      <div class="col-1-2">
        <h2><span class="underline-top-gold">WH</span>O WE ARE, DISCOVER OUR <span class="gold">VISION</span>, <span class="gold">MISSION</span> & <span class="gold">TEAM VALUES.</span></h2>
        <p>Our culture drives our, and more importantly your success. Ridiculus fusce sed proin integer ut sit ultricies pulvinar ac. Tristique tellus elit quisque ipsum leo nisl pellentesque. Senectus malesuada lorem tempor sit nec in nunc cras. Leo diam consequat pulvinar sed dolor.</p>
      </div>
      <div class="col-2-2">
        <img src="{{ cxl_asset('assets/images/about-us-1.png') }}" alt="About Us Image 1">
      </div>

      <p class="paragraph-mobile">Our culture drives our, and more importantly your success. Ridiculus fusce sed proin integer ut sit ultricies pulvinar ac. Tristique tellus elit quisque ipsum leo nisl pellentesque. Senectus malesuada lorem tempor sit nec in nunc cras. Leo diam consequat pulvinar sed dolor.</p>

    </div>

  </section>

  <section class="about-second">
    <div class="container">
      <div class="col-1-2">
        <img src="{{ cxl_asset('assets/images/about-us-2.png') }}" alt="About Us Image 1">
      </div>

      <div class="col-2-2">
        <h2><span class="underline-top-gold">WE</span> ARE READY TO SHARE OUR <span class="gold">ADVICE</span> AND <span class="gold">EXPERIENCE.</span></h2>
        <p>Our culture drives our, and more importantly your success. Ridiculus fusce sed proin integer ut sit ultricies pulvinar ac. Tristique tellus elit quisque ipsum leo nisl pellentesque. Senectus malesuada lorem tempor sit nec in nunc cras. Leo diam consequat pulvinar sed dolor.</p>
      </div>

      <p class="paragraph-mobile">Our culture drives our, and more importantly your success. Ridiculus fusce sed proin integer ut sit ultricies pulvinar ac. Tristique tellus elit quisque ipsum leo nisl pellentesque. Senectus malesuada lorem tempor sit nec in nunc cras. Leo diam consequat pulvinar sed dolor.</p>

    </div>


  </section>


  <!-- CTA SECTION -->
  <section class="cta">
    <div class="container">
      <div class="content">
        <div class="col-1-2">
          <h3>READY TO SPEAK WITH AN EXPERT?</h3>
          <p>SCHEDULE A FREE CALL WITH OUR TEAM MEMBER NOW.</p>
        </div>
        <div class="col-2-2">
          <a href="contact.html" class="btn btn-dark">GET IN TOUCH</a>
        </div>
      </div>
    </div>
  </section>  <!--END CTA SECTION -->
  @endsection
  @section('script')
      <script src="{{ cxl_asset('assets/js/questions.js') }}"></script>
  @endsection
