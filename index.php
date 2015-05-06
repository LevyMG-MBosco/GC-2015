<?php include_once('includes/header.php'); ?>
<div id="nav-anchor"></div>
<div class="grey-background">
    <div id="hero" class="container">
        <div class="row">
            <section class="news">
              <section id="shop-demo">

                <article title="Grade Selector">
                  <div class="image-content">
                    <img src="assets/imgs/Slider5.jpg" alt="Grade Selector" class="product-image">
                  </div>
                  <div class="text-content">
                    <h1><span class="thin-text">REDEFINING</span><br /> POSSIBLE</h1>
                    <p>Download our Toolbox Mobile App and discover the industry’s only Grade Selector — a proprietary tool that easily allows you to choose the best grade for your application. It also includes conversion calculators and <i>The Designer’s Guide to Tungsten Carbide</i>.</p>
                  </div>
                </article>

                <article title="Oil & Gas">
                  <div class="image-content">
                    <img src="assets/imgs/Slider2.jpg" alt="Oil & Gas" class="product-image">
                  </div>
                  <div class="text-content">
                    <h1><span class="thin-text">REDEFINING</span><br /> POSSIBLE</h1>
                    <p>At General Carbide, we partner with our customers to develop new grades that yield superior wear resistance, toughness and tool life in the harshest environments. Let our technical know-how help you increase productivity.</p>
                  </div>
                </article>

                <article title="Ammunition">
                  <div class="image-content">
                    <img src="assets/imgs/Slider3.jpg" alt="Ammunition" class="product-image">
                  </div>
                  <div class="text-content">
                    <h1><span class="thin-text">REDEFINING</span><br /> POSSIBLE</h1>
                    <p>We’re your “one-stop-shop” for premium ammunition tooling and firearms components. With ISO and Type 10 FFL certifications, and in-house finishing capabilities, we have the expertise to formulate the best grade for your application.</p>
                  </div>
                </article>

                <article title="Offshore">
                  <div class="image-content">
                    <img src="assets/imgs/Slider4.jpg" alt="Offshore" class="product-image">
                  </div>
                  <div class="text-content">
                    <h1><span class="thin-text">REDEFINING</span><br /> POSSIBLE</h1>
                    <p>See the latest valve assemblies and finished components at Offshore Europe. This world-class conference and exhibition showcases the innovations required to compete in an increasingly complex business.</p>
                  </div>
                </article>

              </section>
              <h2 class="product-name"></h2>
            </section>
        </div>
    </div>
</div>

<div id="white_content" class="container">
    <div class="row">
        <h1 class="col-sm-12">Tungsten Carbide Preforms, Wear Parts and Specialty Components</h1>
        <p class="col-sm-12">General Carbide manufactures more than 50 grades of tungsten carbide for a variety of industrial wear and metal forming applications. We offer the industry’s tightest material specifications in producing everything from highly complex preforms to stress-free EDM blanks. Our unbeatable combination of high-quality materials, metallurgical expertise, and engineering excellence make us the market leader.</p>
    </div>
    <div class="row">
        <div class="col-sm-4">
          <a href="industries.php">
            <h2 class="overlay-header">INDUSTRIES</h2>
            <div class="overlay">
              <img class="img-overlaid img-responsive" src="assets/imgs/sub1.jpg" />

              <div class="overlay-opacity">
                <p>Our tungsten carbide tooling is ideal for industrial wear and metalforming applications, including ammunition, concrete wear parts, and rotary cutting dies.</p>
              </div>
            </a>
          </div>
        </div>
        <div class="col-sm-4">
          <a href="grades.php">
            <h2 class="overlay-header">GRADES</h2>
            <div class="overlay">
              <img class="img-overlaid img-responsive" src="assets/imgs/sub2.jpg" />

              <div class="overlay-opacity">
                <p>We produce more than 50 carbide grades in a wide range of binder concentrations and particle sizes, with the tightest overall material specifications.</p>
              </div>
            </div>
          </a>
        </div>
        <div class="col-sm-4">
          <a href="quality.php">
            <h2 class="overlay-header">QUALITY</h2>
            <div class="overlay">
              <img class="img-overlaid img-responsive" src="assets/imgs/sub3.jpg" />

              <div class="overlay-opacity">
                <p>We’re ISO-Certified to meet your quality requirements and committed to meeting the highest standards in everything we do.</p>
              </div>
            </div>
          </a>
        </div>
    </div>
</div>


<div class="red-background">
    <div id="red_splash" class="container">
        <div class="row">
            <h2 class="col-sm-12 col-md-7">For more than 40 years,<br /> General Carbide has provided<br /> unparalleled carbide grades,<br /> wear parts and components.</h2>
            <div class="col-sm-12 col-md-5 hidden-xs hidden-sm visible-md-*">
                <img class="img-responsive" src="assets/imgs/Tools.png" />
            </div>
        </div>
    </div>
</div>

<div id="white_content2" class="container">
    <div class="row">
        <div class="col-xs-6">
            <div class="row">
                <div class="col-sm-4">
                    <img class="img-responsive" src="assets/imgs/parts.jpg" />
                </div>
                <div class="col-sm-8">
                    <h3>Grade Specifications</h3>
                    <p>We produce more than <b>50 carbide grades</b> in a wide range of binder concentrations and particle sizes</p>
                    <a class="learnmore" href="assets/pdf/GCGradeSpecs.pdf">Learn More</a>
                </div>
            </div>
        </div>

        <div class="col-xs-6">
            <div class="row">
                <div class="col-sm-4">
                    <img class="img-responsive" src="assets/imgs/Download_Our_App.png" />
                </div>
                <div class="col-sm-8">
                    <h3>Download our Mobile App!</h3>
                    <p>Find the best grade for our application, quickly convert Rockwell Hardness scales, and much more!</p>
                    <a class="learnmore" href="#">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
  $(document).ready(function(){
      $('.news').slippry({
        // general elements & wrapper
        slippryWrapper: '<div class="sy-box news-slider" />', // wrapper to wrap everything, including pager
        elements: 'article', // elments cointaining slide content

        // options
        adaptiveHeight: false, // height of the sliders adapts to current
        captions: false,

        // pager
        pager: false,

        // transitions
        transition: 'horizontal', // fade, horizontal, kenburns, false
        speed: 1200,
        pause: 8000,

        // slideshow
        autoDirection: 'prev'
      });
  })
</script>
<?php include_once('includes/footer.php'); ?>
