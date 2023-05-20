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
            @foreach ($posts->chunk(3) as $key => $chunk)
                <div class="blogs-{{ $key + 1 }}">
                    @foreach ($chunk as $post)
                        <a href="{{ route('web.blogPost', ['id' => $post->id]) }}" style="text-decoration: none;">
                            <div class="blog">
                                <div class="blog-image">
                                    <img src="{{ cxl_asset($post->thumbnail) }}" alt="Blog 1">
                                </div>
                                <div class="blog-body">
                                    <div>
                                        <p class="date">{{ date('F j, Y', strtotime($post->publish_date)) }}</p>
                                        <p class="description">{{ $post->title }}</p>
                                    </div>
                                    <div class="read-more">
                                        <a href="{{ route('web.blogPost', ['id' => $post->id]) }}" class="btn-extra">READ MORE
                                            <img src="{{ cxl_asset('assets/images/arrow_right.png') }}"
                                                alt="Right arrow"></a>
                                    </div>
                                </div>
                            </div>
                        </a>
                    @endforeach
                    {{-- Fill full 3 columns --}}
                    @if (sizeof($chunk)==1)
                        <div style="visibility: hidden" class="blog"></div>
                        <div style="visibility: hidden" class="blog"></div>
                    @endif
                    @if (sizeof($chunk)==2)
                        <div style="visibility: hidden" class="blog"></div>
                    @endif
                </div>
            @endforeach
        </div>
    </section> <!-- END BLOGS SECTION -->

@endsection
@section('script')
    <script src="{{ cxl_asset('assets/js/mobilemenu.js') }}"></script>
@endsection
