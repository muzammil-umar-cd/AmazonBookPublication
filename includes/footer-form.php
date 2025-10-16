<form action="includes/sendmail/sendmail.php" method="post">
    <input type="hidden" name="ip_address" value="<?php echo  $ip; ?>" />
    <input type="hidden" name="city" value="<?php echo  $locationData->city; ?>" />
    <input type="hidden" name="country" value="<?php echo  $locationData->country; ?>" />
    <input type="hidden" name="internet_connection" value="<?php echo  $locationData->isp; ?>" />
    <input type="hidden" name="zipcode" value="<?php echo  $locationData->zip; ?>" />
    <input type="hidden" name="region" value="<?php echo  $locationData->regionName; ?>" />
    <input type="hidden" name="url" value="<?php echo  $currentFullURL; ?>" />
    <input type="hidden" name="form" value="Footer Form">

    <div class="form-group mb-3">
        <input class="form-control" type="text" name="name" placeholder="Your Name" required="" value="" />
    </div>
    <div class="form-group mb-3">
        <input class="form-control" type="email" name="email" placeholder="Your Email" value="" required="required" />
    </div>
    <div class="form-group mb-3">
        <input class="form-control" type="text" name="phone" minlength="10" maxlength="12" placeholder="Your Phone"
            value="" required="required" />
    </div>
    <div class="form-group mb-3">
        <textarea class="form-control" autocomplete="nope" name="message" placeholder="Enter Brief"></textarea>
    </div>
    <div class="form-group">
        <button class="btn w-100" cite="Submit" data-hover="Submit" type="submit" name="cta1" value="Submit Now">
            Submit
        </button>
    </div>
    <p style="font-size:10px;">
        By providing a telephone number and submitting this form you are consenting to
        be contacted by SMS text message. Message & data rates may apply. Message
        frequency may vary. Reply Help for more information. You can reply STOP to
        opt-out of further messaging. You may review our <a href="privacy-policy" style="color:#e1b791">Privacy
            Policy</a> for complete details.
    </p>
</form> 