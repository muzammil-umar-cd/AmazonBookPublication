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

<section class="banner lozad bg" data-background-image="assets/img/book-publishing-banner.webp">
  <div class="overlay py-5 position-relative">
    <img class="lozad sub-ban-left" alt="Audio Book servcies by <?php echo WEBSITE_NAME; ?>"
      data-src="assets/img/publishing-before.webp"><img class="lozad sub-ban-right"
      alt="Audio Book servcies by <?php echo WEBSITE_NAME; ?>" data-src="assets/img/publishing-after.webp">
    <div class="container-xl py-5 mt-5">
      <div class="row justify-content-center text-center">
        <div class="col-xl-8 col-lg-9 col-md-11 col-12">
          <h1 class="f-55 clr-1 fw-700 mt-4">
            Transform Your Book into a
            <span class="d-block mt-3"><span class="bg-1 clr-l px-2">Captivating Audiobook</span></span>
            with Professional Services
          </h1>
          <p class="">
            Unlock new opportunities for your book by turning it into a professionally narrated audiobook.
            At <?php echo WEBSITE_NAME; ?>, we offer high-quality audiobook production services that include voiceover
            narration, editing, and distribution. Whether you want to expand your audience or provide an
            alternative format for your readers, our team ensures your audiobook captures the essence of
            your story while delivering an engaging listening experience. Let us help you bring your book to
            life in audio form and reach listeners on popular platforms like Audible, iTunes, and more. </p>
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
            The Rise of Audiobooks in the Digital Age
          </h3>
          <p>
            The popularity of audiobooks has skyrocketed in recent years, fueled by advances in technology,
            the rise of smartphones, and platforms like Audible and Google Play Books. Audiobooks have
            become a preferred choice for many readers, especially for multitaskers or individuals with
            visual impairments. They offer an alternative way of consuming content, often with the added
            benefit of professional narration that enhances the storytelling experience. As the demand for
            audiobooks grows, it’s essential for authors and publishers to consider including an audiobook
            version of their work. </p>
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
              data-src="assets/img/BP-right-side.webp">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php include 'includes/footer.php'; ?>