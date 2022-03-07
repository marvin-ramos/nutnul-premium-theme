<?php
/*
    @package nutnull-premium-theme
*/
?>

<form id="nutnullContactForm" action="#" method="POST" data-url="<?php echo admin_url('admin-ajax.php'); ?>">
    <div class="form-row">
        <div class="col-md-6 form-group">
            <input type="text" name="nutnull-contact-fullname" class="form-control" id="nutnull-contact-fullname" placeholder="Your Name"/>
            <small class="text-danger form-control-msg" id="form-control-fullname"></small>
        </div>
        <div class="col-md-6 form-group">
            <input type="email" class="form-control" name="nutnull-contact-email" id="nutnull-contact-email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
            <small class="text-danger form-control-msg" id="form-control-email"></small>
        </div>
    </div>
    <div class="form-group">
        <input type="text" class="form-control" name="nutnull-contact-subject" id="nutnull-contact-subject" placeholder="Subject"/>
        <small class="text-danger form-control-msg" id="form-control-subject"></small>
    </div>
    <div class="form-group">
        <textarea class="form-control" id="nutnull-contact-message" name="nutnull-contact-message" rows="5" placeholder="Message"></textarea>
        <small class="text-danger form-control-msg" id="form-control-message"></small>
    </div>
    <div class="mb-3">
        <small class="text-info form-control-msg js-form-submission" id="submission-form">Loading, please wait...</small>
        <small class="text-success form-control-msg js-form-success">Your message has been sent. Thank you!</small>
        <small class="text-danger form-control-msg js-form-error">Opps please try again.</small>
    </div>
    <div class="text-center">
        <button type="submit">Send Message</button>
    </div>
</form>