<?php
/*
    @package nutnull-premium-theme
*/
?>

<form id="nutnullContactForm" action="#" method="POST" data-url="<?php echo admin_url('admin-ajax.php'); ?>">
    <div class="form-row">
        <div class="col-md-6 form-group">
            <input type="text" name="nutnull-contact-name" class="form-control" id="nutnull-contact-name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
            <div class="validate"></div>
        </div>
        <div class="col-md-6 form-group">
            <input type="email" class="form-control" name="nutnull-contact-email" id="nutnull-contact-email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
            <div class="validate"></div>
        </div>
    </div>
    <div class="form-group">
        <input type="text" class="form-control" name="nutnull-contact-subject" id="nutnull-contact-subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
        <div class="validate"></div>
    </div>
    <div class="form-group">
        <textarea class="form-control" id="nutnull-contact-message" name="nutnull-contact-message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
        <div class="validate"></div>
    </div>
    <div class="mb-3">
        <div class="loading">Loading</div>
        <div class="error-message"></div>
        <div class="sent-message">Your message has been sent. Thank you!</div>
    </div>
    <div class="text-center">
        <button type="submit">Send Message</button>
    </div>
</form>