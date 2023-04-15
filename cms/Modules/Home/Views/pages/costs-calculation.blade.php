@extends('Home::master')
@section('title', __('Devapollo | Costs Calculation'))
@section('main')

      <div class="hero-content">
        <h1 class="gold">COSTS CALCULATOR</h1>
        <p>Our interactive costs  calculator provides a great starting point to estimate how much, and how long it would take us to build an app that will meet your business needs.</p>
        <p>It would take <span class="gold">5-7 minutes</span></p>
        <a href="" class="btn">GET STARTED</a>
      </div>

    </div><!-- END CONTAINER -->

  </section> <!-- End Hero Section -->



  <!-- QUESTIONS SECTION -->
  <section class="questions">
    <form action="question.php" method="POST">
      <!-- QUESTION 1 -->
      <div class="question current" data-id="1">
        <h3>What’s the status of your project?</h3>

        <div class="choice container-lg">
            <input type="radio" name="radio1" id="radio" class="radio" value="answer1">
            <label>It doesn’t exist yet</label>
        </div>
        <div class="choice container-lg">
          <input type="radio" name="radio1" class="radio" value="answer2">
          <label>In the process of development but not live yet</label>
        </div>
        <div class="choice container-lg">
          <input type="radio" name="radio1" class="radio" value="answer3">
          <label>At an early stage with first users</label>
        </div>
        <div class="choice container-lg">
          <input type="radio" name="radio1" class="radio" value="answer4">
          <label>It is a mature project</label>
        </div>
      </div>

      <!-- QUESTION 2 -->
      <div class="question" data-id="2">
        <h3>What is your time to market expectations?</h3>
        <div class="choice container-lg">
            <input type="radio" name="radio2" class="radio" value="answer1">
            <label>
            As soon as possible
          </label>
        </div>
        <div class="choice container-lg">
          <input type="radio" name="radio2" class="radio" value="answer2">
          <label>2-3 months</label>
        </div>
        <div class="choice container-lg">
          <input type="radio" name="radio2" class="radio" value="answer3">
          <label>4-6 months</label>
        </div>
        <div class="choice container-lg">
          <input type="radio" name="radio2" class="radio" value="answer4">
          <label>I am looking for a long-term partner</label>
        </div>
      </div>

      <!-- QUESTION 3 -->
      <div class="question" data-id="3">
        <h3>What is your budget?</h3>
        <div class="choice container-lg">
            <input type="radio" name="radio3" class="radio" value="answer1">
            <label>10 000 - 20 000 EUR</label>
        </div>
        <div class="choice container-lg">
          <input type="radio" name="radio3" class="radio" value="answer2">
          <label>20 000 - 60 000 EUR</label>
        </div>
        <div class="choice container-lg">
          <input type="radio" name="radio3" class="radio" value="answer3">
          <label>60 000 - 100 000 EUR</label>
        </div>
        <div class="choice container-lg">
          <input type="radio" name="radio3" class="radio" value="answer4">
          <label>>100 000 EUR</label>
        </div>
      </div>

      <!-- QUESTION 4 -->
      <div class="question" data-id="4">
        <h3>What is your business goal? Choose the closest one.</h3>
        <div class="choice container-lg">
            <input type="radio" name="radio4" class="radio" value="answer1">
             <label>To deliver the first version of the product as soon as possible and
            get feedback from users
          </label>
        </div>
        <div class="choice container-lg">
          <input type="radio" name="radio4" class="radio" value="answer2">
          <label>To obtain funds, pitch a concept ot validate the idea</label>
        </div>
        <div class="choice container-lg">

          <input type="radio" name="radio4" class="radio" value="answer3">
          <label>To adjust the product to users’ needs, provide users with new
          functionalities or improve the user experience</label>
        </div>
        <div class="choice container-lg">

          <input type="radio" name="radio4" class="radio" value="answer4">
           <label>To prepare the product for rapid growth; improving product
reliability; optimize the product’s use and value</label>
        </div>
      </div>

      <!-- QUESTION 5 -->
      <div class="question" data-id="5">
        <h3>What is the current biggest challenge? Choose the closest one.</h3>
        <div class="choice container-lg">

            <input type="radio" name="radio5" class="radio" value="answer1">
             <label>Lack of time - a close deadline, big market pressure</label>
        </div>
        <div class="choice container-lg">

          <input type="radio" name="radio5" class="radio" value="answer2">
          <label>Missing funcionalities - the need to meet target audience expectations</label>
        </div>
        <div class="choice container-lg">

          <input type="radio" name="radio5" class="radio" value="answer3">
            <label>Improving product reliability, expanding product without affecting current
performance</label>
        </div>
        <div class="choice container-lg">
          <input type="radio" name="radio5" class="radio" value="answer4">
          <label>Uncertainty - i.e. regarding scope, necessary budget, team, business model</label>
        </div>
      </div>
      <!-- NAVIGATION -->
      <div class="navigation">
        <div class="navigation-back">
          <a href="#" class="btn disabled">BACK</a>
        </div>

        <div class="navigation-body">
          <div class="currentNav">1</div>
          <div class="dash">/</div>
          <div class="total">5</div>
        </div>

        <div class="navigation-next">
          <a href="#" class="btn">NEXT</a>
        </div>
      </div>
    </form>


  </section> <!-- END QUESTIONS SECTION-->



  <!-- WHAT THE DEVELOPMENT COSTS -->
  <section class="services costs-development">
    <div class="container">
      <h2 class="secondary-heading">
        <span class="text">WHAT INFLUENCES</span>
        <span class="text">
          <span class="line"></span>
          THE &nbsp; <span class="gold">DEVELOPMENT</span> &nbsp; COSTS.
        </h2>
      <div class="cards">
        <div class="card">
          <img src="{{ cxl_asset('assets/images/speed-one.png') }}" alt="Icon">
          <h3>TIME TO MARKET.</h3>
          <p class="secondary-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis habitasse tempus, faucibus quisque risus tortor.</p>
        </div>
        <div class="card">
          <img src="{{ cxl_asset('assets/images/optimize.png') }}" alt="Icon">
          <h3>INITIAL BUDGET.</h3>
          <p class="secondary-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis habitasse tempus, faucibus quisque risus tortor. </p>
        </div>
        <div class="card">
          <img src="{{ cxl_asset('assets/images/creative.png') }}" alt="Icon">
          <h3>BUSINESS GOALS.</h3>
            <p class="secondary-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis habitasse tempus, faucibus quisque risus tortor. </p>
        </div>
        <div class="card">
          <img src="{{ cxl_asset('assets/images/rocket-one.png') }}" alt="Icon">
          <h3>CHALLENGES.</h3>
            <p class="secondary-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis habitasse tempus, faucibus quisque risus tortor. </p>
        </div>
      </div>
    </div>

  </section> <!-- END WHY THRUST US SECTION -->


@endsection
@section('script')
    <script src="{{ cxl_asset('assets/js/questions.js') }}"></script>
@endsection
