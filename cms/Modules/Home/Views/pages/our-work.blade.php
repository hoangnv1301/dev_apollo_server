@extends('Home::master')
@section('title', __('Devapollo | Blog'))
@section('main')

      <div class="hero-content">
        <h1>OUR <span class="gold">WORK</span></h1>
      </div>

    </div><!-- END CONTAINER -->

  </section> <!-- End Hero Section -->

  <!-- COST CALCULATOR -->
  <section class="cost-calculator cost-calculator-gold">
    <div class="container">
      <p>USE OUR <b>COSTS CALCULATOR</b> TO FIND OUT HOW MUCH, AND HOW LONG IT WOULD TAKE US TO BUILD AN APP THAT WILL MEET YOUR BUSINESS NEEDS</p>
      <a href="./costscalculation.html" class="btn-small-secondary btn-small-secondary-dark">GET STARTED</a>
    </div>
  </section> <!-- END COST CALCULATOR -->

  <!-- PORTFOLIO SECTION -->
  <section class="portfolio">
    <div class="container">
      <h2 class="heading-secondary">REAL <span class="gold">BUSINESSES</span>. REAL <span class="gold">RESULTS</span>.</h2>
      <h3 class="heading-tertiary"> <span class="underline-top-gold">OUR</span> PORTFOLIO</h3>
      <div class="portfolio-items">
        <div class="portfolio-item">
          <a href="#">
            <img src="{{ cxl_asset('assets/images/portfolio-img-1.png') }}" alt="Portfolio Image 1">
          </a>
        </div>
        <div class="portfolio-item">
          <a href="#">
            <img src="{{ cxl_asset('assets/images/portfolio-img-2.png') }}" alt="Portfolio Image 1">
          </a>
        </div>
        <div class="portfolio-item">
          <a href="#">
            <img src="{{ cxl_asset('assets/images/portfolio-img-3.png') }}" alt="Portfolio Image 1">
          </a>
        </div>
      </div>
      <div class="card-nav">
        <div class="arrow_left"><img src="{{ cxl_asset('assets/images/arrow_left.png') }}" alt="Arrow left"></div>
        <div class="cad-nav__link"><img src="{{ cxl_asset('assets/images/rectangle1.png') }}" alt=""></div>
        <div class="cad-nav__link"><img src="{{ cxl_asset('assets/images/rectangle2.png') }}" alt=""></div>
        <div class="cad-nav__link"><img src="{{ cxl_asset('assets/images/rectangle3.png') }}" alt=""></div>
        <div class="arrow_right"><img src="{{ cxl_asset('assets/images/arrow_right.png') }}" alt="Arrow right"></div>
      </div>
    </div>
  </section> <!-- END PORTFOLIO SECTION -->

  <!--SOLUTIONS AND UNIQUE  -->
  <section class="solutions">
    <h2 class="heading-secondary">SOLUTIONS <span class="gold">UNIQUE</span> AS YOUR BUSINESS.</h2>
    <p class="main-text">Devapollo is committed to meet your needs, no matter the size of your business.</p>
  </section>

  <!-- SERVICES SECTION -->
  <section class="services">
    <div class="container">
      <h3 class="heading-tertiary"><span class="underline-top-gold">SERV</span>ICES WE PROVIDE</h3>
      <div class="cards">
        <div class="card">
          <div class="card-bgbox"></div>
          <img src="{{ cxl_asset('assets/images/chart-line-area.png') }}" alt="Icon">
          <h3>STRATEGY <br>
            DEVELOPMENT.</h3>
          <p class="secondary-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sit in consequat ultrices vel condimentum ante sed scelerisque. Praesent amet orci vitae faucibus sed. In vitae id.</p>
        </div>
        <div class="card">
          <img src="{{ cxl_asset('assets/images/data-screen.png') }}" alt="Icon">
          <h3>FINANCIAL <br>
            EXPERTISE.</h3>
          <p class="secondary-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sit in consequat ultrices vel condimentum ante sed scelerisque. Praesent amet orci vitae faucibus sed. In vitae id.</p>
        </div>
        <div class="card">
          <img src="{{ cxl_asset('assets/images/peoples.png') }}" alt="Icon">
          <h3>BUSINESS <br>
            CONSULTING.</h3>
          <p class="secondary-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sit in consequat ultrices vel condimentum ante sed scelerisque. Praesent amet orci vitae faucibus sed. In vitae id.</p>
        </div>
      </div>
      <div class="cards">
        <div class="card">
          <div class="card-bgbox"></div>
          <img src="{{ cxl_asset('assets/images/analysis.png') }}" alt="Icon">
          <h3>PROCESS <br>
            ANALYSIS.</h3>
          <p class="secondary-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sit in consequat ultrices vel condimentum ante sed scelerisque. Praesent amet orci vitae faucibus sed. In vitae id.</p>
        </div>
        <div class="card">
          <img src="{{ cxl_asset('assets/images/puzzle.png') }}" alt="Icon">
          <h3>BRAND <br>
            STRATEGY.</h3>
          <p class="secondary-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sit in consequat ultrices vel condimentum ante sed scelerisque. Praesent amet orci vitae faucibus sed. In vitae id.</p>
        </div>
        <div class="card">
          <img src="{{ cxl_asset('assets/images/database-code.png') }}" alt="Icon">
          <h3>TECH <br>
            IMPLEMENTATION.</h3>
          <p class="secondary-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sit in consequat ultrices vel condimentum ante sed scelerisque. Praesent amet orci vitae faucibus sed. In vitae id.</p>
        </div>
      </div>
    </div>

  </section> <!-- END SERVICES SECTION -->

  <section class="faq">
    <div class="container">
      <div>
        <!-- IMAGE -->
        <img src="{{ cxl_asset('assets/images/faq-image.png') }}" alt="FAQ Image">
      </div>
      <div class="accordions">
        <h3 class="heading-tertiary"><span class="underline-top-gold">FREQ</span>UENTLY ASKED QUESTIONS</h3>
        <!-- ACCORDIONS -->
        <div class="accordion active">
          <div class="accordion-header">
            <p>Can you run marketing online camapigns?</p>
            <a class="accordion-close"><img src="{{ cxl_asset('assets/images/accordion-close.png') }}" alt="Accordion Close Icon"></a>
            <a class="accordion-open"><img src="{{ cxl_asset('assets/images/accordion-open.png') }}" alt="Accordion Close Icon"></a>
          </div>
          <div class="accordion-body">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc pellentesque ultrices nibh eu dolor ut. Scelerisque sed felis ultrices nisl tincidunt suspendisse aliquam, arcu sed. Ultrices risus malesuada tristique habitant cursus risus id. Ut in neque ipsum nunc, mi in sit. Pharetra facilisi aenean sagittis at facilisi cursus arcu porta sed nunc a in.</p>
          </div>
        </div>
        <div class="accordion">
          <div class="accordion-header">
            <p>Can you run marketing online camapigns?</p>
            <a class="accordion-close"><img src="{{ cxl_asset('assets/images/accordion-close.png') }}" alt="Accordion Close Icon"></a>
            <a class="accordion-open"><img src="{{ cxl_asset('assets/images/accordion-open.png') }}" alt="Accordion Close Icon"></a>
          </div>
          <div class="accordion-body">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc pellentesque ultrices nibh eu dolor ut. Scelerisque sed felis ultrices nisl tincidunt suspendisse aliquam, arcu sed. Ultrices risus malesuada tristique habitant cursus risus id. Ut in neque ipsum nunc, mi in sit. Pharetra facilisi aenean sagittis at facilisi cursus arcu porta sed nunc a in.</p>
          </div>
        </div>
        <div class="accordion">
          <div class="accordion-header">
            <p>Can you run marketing online camapigns?</p>
            <a class="accordion-close"><img src="{{ cxl_asset('assets/images/accordion-close.png') }}" alt="Accordion Close Icon"></a>
            <a class="accordion-open"><img src="{{ cxl_asset('assets/images/accordion-open.png') }}" alt="Accordion Close Icon"></a>
          </div>
          <div class="accordion-body">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc pellentesque ultrices nibh eu dolor ut. Scelerisque sed felis ultrices nisl tincidunt suspendisse aliquam, arcu sed. Ultrices risus malesuada tristique habitant cursus risus id. Ut in neque ipsum nunc, mi in sit. Pharetra facilisi aenean sagittis at facilisi cursus arcu porta sed nunc a in.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  @endsection
  @section('script')
      <script src="{{ cxl_asset('assets/js/mobilemenu.js') }}"></script>
      <script src="{{ cxl_asset('assets/js/accordion.js') }}"></script>
  @endsection

