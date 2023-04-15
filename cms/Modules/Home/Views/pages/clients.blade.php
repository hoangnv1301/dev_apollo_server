@extends('Home::master')
@section('title', __('Devapollo | Clients'))
@section('main')

      <div class="hero-content">
        <h1>OUR <span class="gold">CLIENTS</span></h1>
      </div>

    </div><!-- END CONTAINER -->

  </section> <!-- End Hero Section -->

  <!-- CLIENTS SECTION -->
  <section class="clients">
    <div class="container">
      <h2 class="heading-secondary">
        THESE COMPANIES <span class="gold">TRUSTED</span> US<br> AND SO CAN YOU.</h2>
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
            <p class="quote">‘Working with Devapollo is always an absolute joy, both personally and professionally”</p>
            <h4 class="gold">BILL THOMPSON</h4>
            <p>client of company</p>
          </div>
          <div class="client-block">
            <img src="{{ cxl_asset('assets/images/our_clients_2.png') }}" alt="Client image">
            <p class="quote">‘Working with Devapollo is always an absolute joy, both personally and professionally”</p>
            <h4 class="gold">BILL THOMPSON</h4>
            <p>client of company</p>
          </div>
          <div class="client-block">
            <img src="{{ cxl_asset('assets/images/our_clients_1 (1).png') }}" alt="Client image">
            <p class="quote">‘Working with Devapollo is always an absolute joy, both personally and professionally”</p>
            <h4 class="gold">BILL THOMPSON</h4>
            <p>client of company</p>
          </div>
        </div>
    </div>

    <div class="card-nav">
      <div class="arrow_left"><img src="{{ cxl_asset('assets/images/arrow_left.png') }}" alt="Arrow left"></div>
      <div class="cad-nav__link"><img src="{{ cxl_asset('assets/images/rectangle1.png') }}" alt=""></div>
      <div class="cad-nav__link"><img src="{{ cxl_asset('assets/images/rectangle2.png') }}" alt=""></div>
      <div class="cad-nav__link"><img src="{{ cxl_asset('assets/images/rectangle3.png') }}" alt=""></div>
      <div class="arrow_right"><img src="{{ cxl_asset('assets/images/arrow_right.png') }}" alt="Arrow right"></div>
    </div>
  </section>    <!-- END CLIENTS REVIEW SECTION  -->

  <!-- WHY THRUST US SECTION -->
  <section class="services">
    <div class="container">
      <h2 class="secondary-heading">
        <span class="text">WHY COMPANIES</span>
        <span class="text">
          <span class="line"></span>
          <span class="gold">TRUST</span> &nbsp; US<span class="gold">.</span></span>
        </h2>
      <div class="cards">
        <div class="card">
          <img src="{{ cxl_asset('assets/images/lightning.png') }}" alt="Icon">
          <h3>INTEGRATED <br>
            INNOVATIONS.</h3>
          <p class="secondary-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis habitasse tempus, faucibus quisque risus tortor. </p>
        </div>
        <div class="card">
          <img src="{{ cxl_asset('assets/images/success.png') }}" alt="Icon">
          <h3>BRILLIANT <br>
            CLIENT SERVICE.</h3>
          <p class="secondary-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis habitasse tempus, faucibus quisque risus tortor. </p>
        </div>
        <div class="card">
          <img src="{{ cxl_asset('assets/images/gold-medal.png') }}" alt="Icon">
          <h3>TEAM <br>
            PROFESSIONALISM.</h3>
            <p class="secondary-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis habitasse tempus, faucibus quisque risus tortor. </p>
        </div>
        <div class="card">
          <img src="{{ cxl_asset('assets/images/gold-medal.png') }}" alt="Icon">
          <h3>FLEXIBILITY <br>
            & aDAPTABILITY.</h3>
            <p class="secondary-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis habitasse tempus, faucibus quisque risus tortor. </p>
        </div>
      </div>
    </div>

  </section> <!-- END WHY THRUST US SECTION -->
@endsection
@section('script')
    <script src="{{ cxl_asset('assets/js/mobilemenu.js') }}"></script>
@endsection
