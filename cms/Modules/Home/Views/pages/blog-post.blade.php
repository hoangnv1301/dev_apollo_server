@extends('Home::master')
@section('title', __('Devapollo | Blog Post'))
@section('main')

      <div class="hero-content">
        <h1>OUR <span class="gold">BLOG</span></h1>
      </div>

    </div><!-- END CONTAINER -->
{{-- {{ dd($post->toArray()) }} --}}
  </section> <!-- End Hero Section -->

  <!-- BLOG POST DETAILS SECTION -->
  <section class="blog-post">
    <div class="container">
      <!-- IMAGE PART -->
      <div class="blog-post__header">
        <img style="width:100%; object-fit: cover;" src="{{ cxl_asset($post->thumbnail) }}" alt="Blog Post Image">
        <div>
          <h1>{{ $post->title }}</h1>
          <p class="date">{{ date('F j, Y', strtotime($post->publish_date)) }}</p>
        </div>

      </div>
      <!-- CONENTS PART -->
      <div class="blog-post__body">
        <span class="main-text">{!! $post->content !!}</span>
        <div class="back">
          <a href="{{ route('web.blog') }}">
            <img src={{ cxl_asset('assets/images/arrow-back.png') }} alt="Arrow Back">
            BACK
          </a>
        </div>
      </div>
      <!-- BACK BUTTON -->
      <div class="blog-post__footer">

      </div>
    </div>

  </section><!-- END BLOG POST DETAILS SECTION -->

  @endsection
  @section('script')
      <script src="{{ cxl_asset('assets/js/mobilemenu.js') }}"></script>
  @endsection
