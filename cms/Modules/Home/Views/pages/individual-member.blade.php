@extends('Home::master')
@section('title', __('Devapollo | Individual Member'))
@section('main')

      <div class="hero-content">
        <h1>MEET OUR <span class="gold">TEAM</span></h1>
      </div>

    </div><!-- END CONTAINER -->

  </section> <!-- End Hero Section -->

  <!-- INDIVIDUAL TEAM MEMEBER SECTION -->
  <section class="individual-member">
    <div class="container">

      <div class="back">
        <a href="./ourteam.html">
          <img src="{{ cxl_asset('assets/images/arrow-back.png') }}" alt="Arrow Back">
          BACK
        </a>
      </div>

      <div class="team-member">
        <div class="image">
          <img src="{{ cxl_asset('assets/images/jane-large.png') }}" alt="Jane">
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

      <div class="member-details">
        <div>
          <h2 class="gold">JANE HENDERSON</h2>
          <h3>PRODUCT MANAGER</h3>
        </div>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Odio euismod auctor ipsum, leo purus aliquet commodo blandit. Erat vitae eget natoque massa vestibulum sit neque tempor, eleifend. Nam in risus sed amet, donec nisl ut nunc. Mattis ut nisi, dui tristique dolor. In id senectus nam tincidunt mi morbi iaculis viverra nec. Eu mi nibh facilisi.</p>

        <div class="projects">
          <p class="main-text"><span class="underline-top-gold">PROJE</span>CTS</p>
          <div class="project">
            <a href="#">
              <img src="{{ cxl_asset('assets/images/projects-1.png') }}" alt="Project Image">
            </a>
          </div>
          <div class="project">
            <a href="#">
              <img src="{{ cxl_asset('assets/images/projects-1.png') }}" alt="Project Image">
            </a>
          </div>
          <div class="project">
            <a href="#">
              <img src="{{ cxl_asset('assets/images/projects-1.png') }}" alt="Project Image">
            </a>
          </div>
          <div class="navigation">
            <a href="#" class="arrow-left">
              <img src="{{ cxl_asset('assets/images/arrow_left.png') }}" alt="Arrow Left">
            </a>
            <a href="#" class="arrow-right">
              <img src="{{ cxl_asset('assets/images/arrow_right.png') }}" alt="Arrow Right">
            </a>
          </div>
        </div>
      </div>

      </div>

  </section> <!-- END INDIVIDUAL TEAM MEMEBER SECTION -->


@endsection
@section('script')
    <script src="{{ cxl_asset('assets/js/accordion.js') }}"></script>
@endsection
