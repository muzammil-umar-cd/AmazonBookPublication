<?php include 'includes/inner-head.php'; ?>
<?php include 'includes/audio-book-body.php'; ?>
<?php include 'includes/header.php'; ?>
<style>
  body {
    height: auto !important;
  }

  div#smooth-wrapper {
    position: inherit !important;
  }
</style>
<section class="banner lozad bg" data-background-image="assets/img/book-editing-banner.webp">
  <div class="overlay py-5 position-relative">
    <img class="lozad sub-ban-left" alt="Audio Book servcies by <?php echo WEBSITE_NAME; ?>"
      data-src="assets/img/editing-before.webp"><img class="lozad sub-ban-right"
      alt="Audio Book servcies by <?php echo WEBSITE_NAME; ?>" data-src="assets/img/editing-after.webp">
    <div class="container-xl py-5 mt-5">
      <div class="row justify-content-center text-center">
        <div class="col-xl-8 col-lg-9 col-md-11 col-12">
          <h1 class="f-55 clr-1 fw-700 mt-4">
            Professional
            <span class="d-block mt-3"><span class="bg-1 clr-l px-2">Book Formatting Services</span></span>
            For Print and E-Books
          </h1>
          <p class="">
            Transform your manuscript into a visually appealing and professional book with our expert book
            formatting services. Whether you're preparing for print or e-book publication, our team ensures
            your book's layout is clean, consistent, and reader-friendly. From margins to typography and
            page design, we make sure your book meets industry standards and looks polished for readers
            across all platforms.
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
            High-quality book Formatting for E-books and Print Editions
          </h3>
          <p>
            Our book formatting services are designed to meet the specific needs of both e-book and print
            book formats. We understand the nuances of each medium and ensure that your book is properly
            formatted for Kindle, Apple Books, and other e-book platforms, as well as physical printing. We
            handle the technical aspects so you can focus on sharing your work with the world.
          <div class="row">
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
              data-src="assets/img/BE-right-side.webp">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>