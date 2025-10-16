<?php include 'includes/inner-head.php'; ?>
<?php include 'includes/audio-book-body.php'; ?>

<body class="service marketing book-marketing"
  style="overscroll-behavior: none; scroll-behavior: auto; height: 8504px;">
  <?php include 'includes/header.php'; ?>
  <style>
    body {
      height: auto !important;
    }

    div#smooth-wrapper {
      position: inherit !important;
    }
  </style>


  <section class="banner lozad bg" data-background-image="assets/img/audio-book.webp">
    <div class="overlay py-5 position-relative">
      <img class="lozad sub-ban-left" alt="Audio Book servcies by <?php echo WEBSITE_NAME; ?>"
        data-src="assets/img/writing-before.webp"><img class="lozad sub-ban-right"
        alt="Audio Book servcies by <?php echo WEBSITE_NAME; ?>" data-src="assets/img/writing-after.webp">
      <div class="container-xl py-5 mt-5">
        <div class="row justify-content-center text-center">
          <div class="col-xl-8 col-lg-9 col-md-11 col-12">
            <h1 class="f-55 clr-1 fw-700 mt-4">
              E-Book
              <span class="d-block mt-3"><span class="bg-1 clr-l px-2">Writing Services</span></span>
              to Share Your Expertise
            </h1>
            <p class="">
              At <?php echo WEBSITE_NAME; ?>, we create professional e-books that are informative, engaging, and
              targeted to your audience. Whether you’re sharing expertise, telling a story, or offering
              tips, our e-book writers turn your ideas into digital content ready to publish.
            </p>
          </div>
          <!--Contact form start-->
          <div class="col-lg-11 col-xl-10 col-12 mt-4">
            <?php include 'includes/inpage-banner-form.php'; ?>
          </div>
          <!--Contact form end-->
        </div>
      </div>
    </div>
  </section>

  <section class="left-logo lozad" data-background-image="assets/img/logo/left-logo.webp">
    <!--platform start-->
    <div class="platforms py-5">
      <div class="container">
        <div class="slider">
          <div class="item px-4">
            <div class="platform">
              <img data-lazy="assets/img/platforms/1.webp">
            </div>
          </div>
          <div class="item px-4">
            <div class="platform">
              <img data-lazy="assets/img/platforms/2.webp">
            </div>
          </div>
          <div class="item px-4">
            <div class="platform">
              <img data-lazy="assets/img/platforms/3.webp">
            </div>
          </div>
          <div class="item px-4">
            <div class="platform">
              <img data-lazy="assets/img/platforms/4.webp">
            </div>
          </div>
          <div class="item px-4">
            <div class="platform">
              <img data-lazy="assets/img/platforms/5.webp">
            </div>
          </div>
          <div class="item px-4">
            <div class="platform">
              <img data-lazy="assets/img/platforms/6.webp">
            </div>
          </div>
          <div class="item px-4">
            <div class="platform">
              <img data-lazy="assets/img/platforms/7.webp">
            </div>
          </div>
          <div class="item px-4">
            <div class="platform">
              <img data-lazy="assets/img/platforms/8.webp">
            </div>
          </div>
          <div class="item px-4">
            <div class="platform">
              <img data-lazy="assets/img/platforms/9.webp">
            </div>
          </div>
          <div class="item px-4">
            <div class="platform">
              <img data-lazy="assets/img/platforms/10.webp">
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--platform end-->

    <div class="py-5">
      <div class="container">
        <div class="row justify-content-between align-items-center">
          <div class="col-md-7 mt-4 mt-md-0 text-center text-md-start">
            <h3 class="f-40 clr-1 fw-700 mb-3">
              Impactful E-Book Writing for Authors and Businesses!
            </h3>
            <p>
              Our e-book writing services create content that resonates with readers and drives results.
              From self-help guides to industry specific e-books we ensure your digital publication is
              well researched, engaging and optimized for success in the e-book market.
            </p>
            <div class="row">
              <!-- <div class="col-md-4 col-6">
                      <button
                        class="w-100 mb-3"
                        data-bs-toggle="modal"
                        data-bs-target="#quote"
                      >
                        Get Started
                      </button>
                    </div> -->
              <div class="col-md-4 col-3">
                <a href="<?php echo PHONE_HREF; ?>" aria-label="Call Us now to discuss you project"
                  class="icona d-flex align-items-center justify-content-start"><span
                    class="icon-phone me-2 icon"></span><span class="d-none d-md-block"><span
                      class="clr-2 fw-700">Call Now</span><br><span class="fw-700"><?php echo PHONE; ?></span></span></a>
              </div>
            </div>
          </div>
          <div class="col-xl-5 col-md-5">
            <div class="service-image">
              <img class="lozad" alt="Audio Book Service by <?php echo WEBSITE_NAME; ?>"
                data-src="assets/img/book-writing-side-1.webp">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  <?php include 'includes/footer.php'; ?>