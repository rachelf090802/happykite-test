<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package hpy
 */

get_header(); ?>

<section id="welcome">
  <h1 class="pinkheading">Welcome to Happykite</h1>
  <p class="bluetext">We're an agency, a good agency - soon to be an even better agency once we've hired our new web
    developer</p>
  <button class="pinkbutton" type="button" onclick="alert('Hello world!')">Work with us</button>
</section>

<section id="services">
  <h1 class="whiteheading">How can we help?</h1>

  <div class="row">
    <div class="col-lg-3 col-md-6 col-sm-12">
      <img class="servicesicons" src="<?php echo IMAGES; ?>ico-design.png" alt="">
      <h5 class="whitesubheading">Design & UX</h5>
      <p class="offwhitetext">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus a erat sit amet est
        varius vestibulum id sed odio. Aenean eget enim eu urna consectetur cursus.</p>
      <a class="learnmorewhite" href="#">Learn More</a>
    </div>

    <div class="col-lg-3 col-md-6 col-sm-12">
      <img class="servicesicons" src="<?php echo IMAGES; ?>ico-dev.png" alt="">
      <h5 class="whitesubheading">WordPress Development</h5>
      <p class="offwhitetext">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus a erat sit amet est
        varius vestibulum id sed odio. Aenean eget enim eu urna consectetur cursus.</p>
      <a class="learnmorewhite" href="#">Learn More</a>
    </div>

    <div class="col-lg-3 col-md-6 col-sm-12">
      <img class="servicesicons" src="<?php echo IMAGES; ?>ico-marketing.png" alt="">
      <h5 class="whitesubheading">Digital MArketing</h5>
      <p class="offwhitetext">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus a erat sit amet est
        varius vestibulum id sed odio. Aenean eget enim eu urna consectetur cursus.</p>
      <a class="learnmorewhite" href="#">Learn More</a>
    </div>

    <div class="col-lg-3 col-md-6 col-sm-12">
      <img class="servicesicons" src="<?php echo IMAGES; ?>ico-support.png" alt="">
      <h5 class="whitesubheading">SUPPORT & MAINTENANCE</h5>
      <p class="offwhitetext">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus a erat sit amet est
        varius vestibulum id sed odio. Aenean eget enim eu urna consectetur cursus.</p>
      <a class="learnmorewhite" href="#">Learn More</a>
    </div>

  </div>
</section>

<section id="work">
  <h1 class="pinkheading" id="workheading">Some of Our Work...</h1>
  <div class=".container-sm|md|lg|xl card-group">

    <div class="card">
      <img class="card-img-top" src="<?php echo IMAGES; ?>asset-1.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Exterior Solutions</h5>
        <p class="bluetext">Nunc lacinia mi neque, in egestas turpis rutrum sed. Vivamus id nisl eget tellus rutrum
          scelerisque. Praesent a leo consequat, fermentum diam ac, aliquam magna vivamus.</p>
      </div>
      <div class="card-footer">
        <a class="learnmorepurple" href="#">Learn More</a>
      </div>
    </div>

    <div class="card">
      <img class="card-img-top" src="<?php echo IMAGES; ?>asset-2.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Owatrol Direct</h5>
        <p class="bluetext">Nunc lacinia mi neque, in egestas turpis rutrum sed. Vivamus id nisl eget tellus rutrum
          scelerisque. Praesent a leo consequat, fermentum diam ac, aliquam magna vivamus.</p>
      </div>
      <div class="card-footer">
        <a class="learnmorepurple" href="#">Learn More</a>
      </div>
    </div>

    <div class="card">
      <img class="card-img-top" src="<?php echo IMAGES; ?>asset-3.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">IN THE BOOK</h5>
        <p class="bluetext">Nunc lacinia mi neque, in egestas turpis rutrum sed. Vivamus id nisl eget tellus rutrum
          scelerisque. Praesent a leo consequat, fermentum diam ac, aliquam magna vivamus.</p>
      </div>
      <div class="card-footer">
        <a class="learnmorepurple" href="#">Learn More</a>
      </div>
    </div>

  </div>
</section>

<section id="about">
  <div class="container about">
    <h1 id="aboutheading">WHO ARE WE ANYWAY?</h1>
    <p class="whitetext">
      <b>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce at mollis ligula. Maecenas molestie rhoncus nisl
        in euismod. Etiam ut condimentum erat. </b> <br><br>
      Duis eu eleifend erat. In at eros non purus venenatis eleifend a vitae libero. Etiam eros quam, malesuada at
      convallis id, pretium a mauris. Fusce non cursus sem. Fusce suscipit elit vel nisi porttitor vehicula in nec
      magna. Nulla sit amet tincidunt justo. Nulla ac bibendum dolor.

    </p>
  </div>
</section>

<section id="darkbg">

</section>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
  integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
  integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
  integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<?php get_footer(); ?>