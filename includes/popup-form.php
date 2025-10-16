<div class="modal fade" id="quote" tabindex="-1" aria-labelledby="quoteLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
        <div class="modal-content lozad bg-1 clr-l">
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                ×
            </button>
            <div class="modal-body py-0">
                <div class="row">
                    <div class="col-md-6 d-lg-block d-none align-self-end">
                        <img class="lozad" data-src="assets/img/cta-left.webp" alt="<?php echo WEBSITE_NAME; ?>" />
                    </div>
                    <div class="col-md-6 align-self-center p-3">
                        <h4 class="f-24">Start Your Writing Journey</h4>
                        <form action="includes/sendmail/sendmail.php" method="post">

                            <input type="hidden" name="ip_address" value="<?php echo  $ip; ?>" />
                            <input type="hidden" name="city" value="<?php echo  $locationData->city; ?>" />
                            <input type="hidden" name="country" value="<?php echo  $locationData->country; ?>" />
                            <input type="hidden" name="internet_connection" value="<?php echo  $locationData->isp; ?>" />
                            <input type="hidden" name="zipcode" value="<?php echo  $locationData->zip; ?>" />
                            <input type="hidden" name="region" value="<?php echo  $locationData->regionName; ?>" />
                            <input type="hidden" name="url" value="<?php echo  $currentFullURL; ?>" />
                            <input type="hidden" name="form" value="POPUP Form">


                            <div class="form-group mb-3">
                                <input class="form-control" type="text" name="name" placeholder="Your Name" required=""
                                    value="" />
                            </div>
                            <div class="form-group mb-3">
                                <input class="form-control" type="email" name="email" placeholder="Your Email" value=""
                                    required="required" />
                            </div>
                            <div class="form-group mb-3">
                                <input class="form-control" type="text" name="phone" minlength="10" maxlength="12"
                                    placeholder="Your Phone" value="" required="required" />
                            </div>
                            <div class="form-group mb-3">
                                <textarea class="form-control" autocomplete="nope" name="message"
                                    placeholder="Enter Brief"></textarea>
                            </div>
                            <div class="form-group">
                                <button class="btn w-100" data-hover="Submit" type="submit" name="cta1"
                                    value="Submit Now">
                                    Submit
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>