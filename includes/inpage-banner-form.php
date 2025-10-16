<form action="includes/sendmail/sendmail.php" method="post" class="row">
    <input type="hidden" name="ip_address" value="<?php echo  $ip; ?>" />
    <input type="hidden" name="city" value="<?php echo  $locationData->city; ?>" />
    <input type="hidden" name="country" value="<?php echo  $locationData->country; ?>" />
    <input type="hidden" name="internet_connection" value="<?php echo  $locationData->isp; ?>" />
    <input type="hidden" name="zipcode" value="<?php echo  $locationData->zip; ?>" />
    <input type="hidden" name="region" value="<?php echo  $locationData->regionName; ?>" />
    <input type="hidden" name="url" value="<?php echo  $currentFullURL; ?>" />
    <input type="hidden" name="form" value="Banner Form">

    <div class="form-group mb-3 col-lg col-md-4">
        <input class="form-control" type="text" name="name" placeholder="Your Name" required="" value="">
    </div>
    <div class="form-group mb-3 col-lg col-md-4">
        <input class="form-control" type="email" name="email" placeholder="Your Email" value="" required="required">
    </div>
    <div class="form-group mb-3 col-lg col-md-4">
        <input class="form-control" type="text" name="phone" minlength="10" maxlength="12" placeholder="Your Phone"
            value="" required="required">
    </div>
    <div class="form-group mb-3 col-lg col-md-8">
        <input class="form-control" autocomplete="nope" name="message" placeholder="Enter Brief" rows="4">
    </div>
    <div class="form-group col-lg col-md-4">
        <button class="btn w-100" cite="Submit" data-hover="Submit" type="submit" name="cta1" value="Submit Now">
            Submit
        </button>
    </div>
    <p>By submitting this form, you agree to our <a href="privacy-policy" style="color:#e1b791">Privacy Policy</a>
        and consent to receive SMS messages.</p>
</form>