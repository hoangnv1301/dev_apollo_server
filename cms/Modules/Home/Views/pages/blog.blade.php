@extends('Home::master')
@section('title', __('Devapollo | Blog'))
@section('main')

      <div class="hero-content">
        <h1>OUR <span class="gold">BLOG</span></h1>
      </div>

    </div><!-- END CONTAINER -->

  </section> <!-- End Hero Section -->

  <!-- BLOGS SECTION -->
  <section class="blogs">
    <div class="container">
      <h2 class="heading-secondary">
        CHECKOUT OUR <span class="gold">LATEST</span><br> NEWS & ARTICLES
      </h2>

      <div class="blogs-1">
        <div class="blog">
          <div class="blog-image">
            <img src="{{ cxl_asset('assets/images/blog-1.png') }}" alt="Blog 1">
          </div>
          <div class="blog-body">
            <div>
              <p class="date">JULY 22, 2022</p>
              <p class="description">Pre and post launch mobile app marketing pifalls to avoid</p>
            </div>
            <div class="read-more">
              <a href="blogpost.html" class="btn-extra">READ MORE <img src="{{ cxl_asset('assets/images/arrow_right.png') }}" alt="Right arrow"></a>
            </div>
          </div>
        </div>
        <div class="blog">
          <div class="blog-image">
            <img src="{{ cxl_asset('assets/images/blog-2.png') }}" alt="Blog 2">
          </div>
          <div class="blog-body">
            <div>
              <p class="date">JULY 22, 2022</p>
              <p class="description">Pre and post launch mobile app marketing pifalls to avoid</p>
            </div>
            <div class="read-more">
              <a href="blogpost.html" class="btn-extra">READ MORE <img src="{{ cxl_asset('assets/images/arrow_right.png') }}" alt="Right arrow"></a>
            </div>
          </div>
        </div>
        <div class="blog">
          <div class="blog-image">
            <img src="{{ cxl_asset('assets/images/blog-3.png') }}" alt="Blog 3">
          </div>
          <div class="blog-body">
            <div>
              <p class="date">JULY 22, 2022</p>
              <p class="description">Pre and post launch mobile app marketing pifalls to avoid</p>
            </div>
            <div class="read-more">
              <a href="blogpost.html" class="btn-extra">READ MORE <img src="{{ cxl_asset('assets/images/arrow_right.png') }}" alt="Right arrow"></a>
            </div>
          </div>
        </div>
      </div>
      <div class="blogs-2">
        <div class="blog">
          <div class="blog-image">
            <img src="{{ cxl_asset('assets/images/blog-4.png') }}" alt="Blog 4">
          </div>
          <div class="blog-body">
            <div>
              <p class="date">JULY 22, 2022</p>
              <p class="description">Pre and post launch mobile app marketing pifalls to avoid</p>
            </div>
            <div class="read-more">
              <a href="blogpost.html" class="btn-extra">READ MORE <img src="{{ cxl_asset('assets/images/arrow_right.png') }}" alt="Right arrow"></a>
            </div>
          </div>
        </div>
        <div class="blog">
          <div class="blog-image">
            <img src="{{ cxl_asset('assets/images/blog-5.png') }}" alt="Blog 5">
          </div>
          <div class="blog-body">
            <div>
              <p class="date">JULY 22, 2022</p>
              <p class="description">Pre and post launch mobile app marketing pifalls to avoid</p>
            </div>
            <div class="read-more">
              <a href="blogpost.html" class="btn-extra">READ MORE <img src="{{ cxl_asset('assets/images/arrow_right.png') }}" alt="Right arrow"></a>
            </div>
          </div>
        </div>
        <div class="blog">
          <div class="blog-image">
            <img src="{{ cxl_asset('assets/images/blog-6.png') }}" alt="Blog 6">
          </div>
          <div class="blog-body">
            <div>
              <p class="date">JULY 22, 2022</p>
              <p class="description">Pre and post launch mobile app marketing pifalls to avoid</p>
            </div>
            <div class="read-more">
              <a href="blogpost.html" class="btn-extra">READ MORE <img src="{{ cxl_asset('assets/images/arrow_right.png') }}" alt="Right arrow"></a>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section> <!-- END BLOGS SECTION -->

@endsection
@section('script')
    <script src="{{ cxl_asset('assets/js/mobilemenu.js') }}"></script>
@endsection
