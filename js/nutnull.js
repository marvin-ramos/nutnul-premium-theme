/**
* Template Name: Day - v2.1.0
* Template URL: https://bootstrapmade.com/day-multipurpose-html-template-for-free/
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/

!(function($) {
    "use strict";
  
    // Preloader
    $(window).on('load', function() {
      if ($('#preloader').length) {
        $('#preloader').delay(100).fadeOut('slow', function() {
          $(this).remove();
        });
      }
    });
  
    // Smooth scroll for the navigation menu and links with .scrollto classes
    var scrolltoOffset = $('#header').outerHeight() - 1;
    $(document).on('click', '.nav-menu a, .mobile-nav a, .scrollto', function(e) {
      if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
        var target = $(this.hash);
        if (target.length) {
          e.preventDefault();
  
          var scrollto = target.offset().top - scrolltoOffset;
  
          if ($(this).attr("href") == '#header') {
            scrollto = 0;
          }
  
          $('html, body').animate({
            scrollTop: scrollto
          }, 1500, 'easeInOutExpo');
  
          if ($(this).parents('.nav-menu, .mobile-nav').length) {
            $('.nav-menu .active, .mobile-nav .active').removeClass('active');
            $(this).closest('li').addClass('active');
          }
  
          if ($('body').hasClass('mobile-nav-active')) {
            $('body').removeClass('mobile-nav-active');
            $('.mobile-nav-toggle i').toggleClass('icofont-navigation-menu icofont-close');
            $('.mobile-nav-overly').fadeOut();
          }
          return false;
        }
      }
    });
  
    // Activate smooth scroll on page load with hash links in the url
    $(document).ready(function() {
      if (window.location.hash) {
        var initial_nav = window.location.hash;
        if ($(initial_nav).length) {
          var scrollto = $(initial_nav).offset().top - scrolltoOffset;
          $('html, body').animate({
            scrollTop: scrollto
          }, 1500, 'easeInOutExpo');
        }
      }
    });
  
    // Mobile Navigation
    if ($('.nav-menu').length) {
      var $mobile_nav = $('.nav-menu').clone().prop({
        class: 'mobile-nav d-lg-none'
      });
      $('body').append($mobile_nav);
      $('body').prepend('<button type="button" class="mobile-nav-toggle d-lg-none"><i class="icofont-navigation-menu"></i></button>');
      $('body').append('<div class="mobile-nav-overly"></div>');
  
      $(document).on('click', '.mobile-nav-toggle', function(e) {
        $('body').toggleClass('mobile-nav-active');
        $('.mobile-nav-toggle i').toggleClass('icofont-navigation-menu icofont-close');
        $('.mobile-nav-overly').toggle();
      });
  
      $(document).on('click', '.mobile-nav .drop-down > a', function(e) {
        e.preventDefault();
        $(this).next().slideToggle(300);
        $(this).parent().toggleClass('active');
      });
  
      $(document).click(function(e) {
        var container = $(".mobile-nav, .mobile-nav-toggle");
        if (!container.is(e.target) && container.has(e.target).length === 0) {
          if ($('body').hasClass('mobile-nav-active')) {
            $('body').removeClass('mobile-nav-active');
            $('.mobile-nav-toggle i').toggleClass('icofont-navigation-menu icofont-close');
            $('.mobile-nav-overly').fadeOut();
          }
        }
      });
    } else if ($(".mobile-nav, .mobile-nav-toggle").length) {
      $(".mobile-nav, .mobile-nav-toggle").hide();
    }
  
    // Navigation active state on scroll
    var nav_sections = $('section');
    var main_nav = $('.nav-menu, #mobile-nav');
  
    $(window).on('scroll', function() {
      var cur_pos = $(this).scrollTop() + 200;
  
      nav_sections.each(function() {
        var top = $(this).offset().top,
          bottom = top + $(this).outerHeight();
  
        if (cur_pos >= top && cur_pos <= bottom) {
          if (cur_pos <= bottom) {
            main_nav.find('li').removeClass('active');
          }
          main_nav.find('a[href="#' + $(this).attr('id') + '"]').parent('li').addClass('active');
        }
        if (cur_pos < 300) {
          $(".nav-menu ul:first li:first").addClass('active');
        }
      });
    });
  
    // Toggle .header-scrolled class to #header when page is scrolled
    $(window).scroll(function() {
      if ($(this).scrollTop() > 100) {
        $('#header').addClass('header-scrolled');
        $('#topbar').addClass('topbar-scrolled');
      } else {
        $('#header').removeClass('header-scrolled');
        $('#topbar').removeClass('topbar-scrolled');
      }
    });
  
    if ($(window).scrollTop() > 100) {
      $('#header').addClass('header-scrolled');
      $('#topbar').addClass('topbar-scrolled');
    }
  
    // Back to top button
    $(window).scroll(function() {
      if ($(this).scrollTop() > 100) {
        $('.back-to-top').fadeIn('slow');
      } else {
        $('.back-to-top').fadeOut('slow');
      }
    });
  
    $('.back-to-top').click(function() {
      $('html, body').animate({
        scrollTop: 0
      }, 1500, 'easeInOutExpo');
      return false;
    });
  
    // Porfolio isotope and filter
    $(window).on('load', function() {
      var portfolioIsotope = $('.portfolio-container').isotope({
        itemSelector: '.portfolio-item'
      });
  
      $('#portfolio-flters li').on('click', function() {
        $("#portfolio-flters li").removeClass('filter-active');
        $(this).addClass('filter-active');
  
        portfolioIsotope.isotope({
          filter: $(this).data('filter')
        });
        aos_init();
      });
  
      // Initiate venobox (lightbox feature used in portofilo)
      $(document).ready(function() {
        $('.venobox').venobox();
      });
    });
  
    // Portfolio details carousel
    $(".portfolio-details-carousel").owlCarousel({
      autoplay: true,
      dots: true,
      loop: true,
      items: 1
    });
  
    // Init AOS
    function aos_init() {
      AOS.init({
        duration: 1000,
        easing: "ease-in-out",
        once: true
      });
    }
    $(window).on('load', function() {
      aos_init();
    });

    //for our contact forms functionality
    $(document).ready(function() {
      $('#nutnullContactForm').on('submit', function(event) {

        // for data validation functionality
        event.preventDefault();
        $('.has-error').removeClass('has-error');
        $('.js-show-feedback').removeClass('js-show-feedback');

        var form = $(this),
          subject = form.find('#nutnull-contact-subject').val(),
          message = form.find('#nutnull-contact-message').val(),
          fullname = form.find('#nutnull-contact-fullname').val(),
          email = form.find('#nutnull-contact-email').val(),
          ajaxurl = form.data('url');

        // for fullname data validation functionality
        var fullnameLenght = fullname.length;
        if( fullname === '' ){
          $('#nutnull-contact-fullname').parent('.form-group').addClass('has-error');
          $("#form-control-fullname").html("Name is Required");
          return;
        } else if ( fullnameLenght < 4 ) {
          $('#nutnull-contact-fullname').parent('.form-group').addClass('has-error');
          $("#form-control-fullname").html("Please Enter atleast 4 Characters");
          return;
        }

        // for email data validation functionality
        if( email === '' ){
          $('#nutnull-contact-email').parent('.form-group').addClass('has-error');
          $("#form-control-email").html("Email is Required");
          return;
        } 

        // for subject data validation functionality
        var subjectLenght = subject.length;
        if( subject === '' ){
          $('#nutnull-contact-subject').parent('.form-group').addClass('has-error');
          $("#form-control-subject").html("Subject is Required");
          return;
        } else if ( subjectLenght < 8 ) {
          $('#nutnull-contact-subject').parent('.form-group').addClass('has-error');
          $("#form-control-subject").html("Please Enter atleast 8 Characters");
          return;
        }         
        
        // for message data validation functionality
        var messageLenght = message.length;
        if( message === '' ){
          $('#nutnull-contact-message').parent('.form-group').addClass('has-error');
          $("#form-control-message").html("Please write something for us");
          return;
        } else if ( messageLenght < 10 ) {
          $('#nutnull-contact-message').parent('.form-group').addClass('has-error');
          $("#form-control-message").html("Please Enter atleast 10 Characters");
          return;
        } 
        
        form.find('input, button, textarea').attr('disabled','disabled');
        $('.js-form-submission').addClass('js-show-feedback');

        $.ajax({
          url: ajaxurl,
          type: 'post',
          data: {
            subject: subject,
            message: message,
            fullname: fullname,
            email: email,
            action: 'nutnull_save_user_contact_form'
          },
          error: function() {

            // console.log(response);
            $('.js-show-submission').removeClass('js-show-feedback');
            document.getElementById("submission-form").style.display = "none";
            $('.js-form-error').addClass('js-show-feedback');
            form.find('input, button, textarea').removeAttr('disabled');

          },
          success: function(response) {

            // console.log(response);

            if( response == 0 ){
              setTimeout(function(){
                $('.js-show-submission').removeClass('js-show-feedback');
                document.getElementById("submission-form").style.display = "none";
                $('.js-form-error').addClass('js-show-feedback');
                form.find('input, button, textarea').removeAttr('disabled');
              }, 1500);
            } else {
              const inputs = document.querySelectorAll('#nutnull-contact-fullname, #nutnull-contact-email, #nutnull-contact-subject ,#nutnull-contact-message');

              setTimeout(function(){

                $('.js-show-submission').removeClass('js-show-feedback');
                document.getElementById("submission-form").style.display = "none";

                inputs.forEach(input => {
                  input.value = '';
                });
                
                $('.js-form-success').addClass('js-show-feedback');
                form.find('input, button, textarea').removeAttr('disabled');

              }, 1500);

            }
          }
        });

      });
    });
    
})(jQuery);