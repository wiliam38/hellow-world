/*
* Venta - Landing Page
* Version: 1.0
* Copyright 2014
* Created by: AgileUI
* URL: http://agileui.com/
* Designed and built based on Twitter Bootstrap 3. 
*/
/*******************************************
IMPORTANT: To modify the code of the subscription form, edit the file php/mcapi-subscribe/js/mailing-list.js
********************************************/
/*******************************************
Local Scroll
********************************************/
jQuery('#topnav').localScroll(500);

/*******************************************
CSS animations
********************************************/
(function (jQuery) {
    "use strict";
    jQuery('.feature-1').bind('inview', function (event, visible) {
        if (visible === true) {
            jQuery(this).addClass('animated fadeInLeftBig');
        }
    });
   jQuery('.feature-3').bind('inview', function (event, visible) {
        if (visible === true) {
            jQuery(this).addClass('animated fadeInRightBig');
        }
    }); 
    jQuery('.plan-1').bind('inview', function (event, visible) {
        if (visible === true) {
            jQuery(this).addClass('animated fadeInLeftBig');
        }
    });
   jQuery('.plan-3').bind('inview', function (event, visible) {
        if (visible === true) {
            jQuery(this).addClass('animated fadeInRightBig');
        }
    });
})(jQuery);

/*******************************************
Contact form
********************************************/

//Validations
var name, email, subject, message;
jQuery("#send-contact").click(function () {
    jQuery(".error").hide();
    var form = jQuery(this).closest('#ajax-contacts');
    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
    var emailaddressVal = jQuery(form).find("[name=email]").val();
    var nameVal = jQuery(form).find("[name=name]").val();
    var subjectVal = jQuery(form).find("[name=subject]").val();
    var messageVal = jQuery(form).find("[name=message]").val();

    if (nameVal == '' || subjectVal == '' || messageVal == '') {
        jQuery("#message-contact").html("<div class='alert alert-danger'>All fields are required</div>");
        return false;
    }

    if (emailaddressVal == '') {
        jQuery("#message-contact").html('<div class="alert alert-danger">Enter your email address before submitting.</div>');
        return false;
    } else if (!emailReg.test(emailaddressVal)) {
        jQuery("#message-contact").html("<div class='alert alert-danger'>That is not an email address.&nbsp;  Typo?</div>");
        return false;
    } else {
        email = escape(emailaddressVal);
    }

    name = escape(nameVal);
    subject = escape(subjectVal);
    message = escape(messageVal);

});

//Sending...
jQuery('#ajax-contacts').submit(function () {
    jQuery("#message-contact").html("<div class='alert alert-danger'>Sending message...</div>");
    jQuery.ajax({
        type: 'POST',
        url: 'php/contact/contact.php',
        data: 'email=' + email + '&name=' + name + '&subject=' + subject + '&message=' + message,
        success: function (msg) {
            jQuery('#message-contact').html(msg);
        },
        error: function () {
            jQuery("#message-contact").html("<div class='alert alert-danger'>Error while sending the message</div>");
        }
    });
    return false;
});

/*******************************************
prettyPhoto Initialization
********************************************/

jQuery("a.prettyPhoto").prettyPhoto();

/*******************************************
Placeholder
********************************************/

jQuery('input, textarea').placeholder();

//Navbar automatic collapse on click item
jQuery('.navbar-collapse').on('click','a',function(){
    if($('.navbar-toggle').css('display')!='none')
    {
        jQuery('.navbar-toggle').trigger('click');
    }   
})