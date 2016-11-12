<script type="text/javascript">

$(window).bind(' load resize orientationChange ', function () {
   var footer = $("#footer-container");
   var pos = footer.position();
   var height = $(window).height();
   height = height - pos.top;
   height = height - footer.height() -1;

   function stickyFooter() {
     footer.css({
         'margin-top': height + 'px'
     });
   }

   if (height > 0) {
     stickyFooter();
   }
});


$(document).ready(function() {
smoothScroll.init();
});

$(document).ready(function() {
$("#owl-demo").owlCarousel({
        autoPlay: 3000, //Set AutoPlay to 3 seconds
        items : 4,
        lazyLoad : true,
        itemsDesktop : [1199,3],
        itemsDesktopSmall : [979,2],
        itemsTablet: [768,2],
        itemsMobile : [479,1]
});

$("#owl-post").owlCarousel({
  items : 3,
  lazyLoad : true,
  navigation : false
});

});

//Parallax
$(document).ready(function () {
if ($(window).width() > 991) {
  $('.parallax-window-fr, .next-section, .portfolio, .finally-section, .parallax-window-page, .parallax-window-header').parallax({
  speed : 0.15
  });
}
});

  //Youtobe Lazy Load
$(document).ready(function () {
  $('.lazyYT').lazyYT();
});

//Img Lazy Load
$(document).ready(function () {
$("img.lazy").lazyload({
  effect : "fadeIn"
});
});

//Google Map
$(document).ready(function () {
  $("iframe").each(function() {
      $(this).attr("data-src",$(this).attr("src"));
      $(this).removeAttr("src");
  });
});


$(document).ready(function () {
$(window).lazyLoadXT();
});


$(document).ready(function() {
AOS.init({
  duration: 1200
});
});

jQuery(document).ready(function() {

    var session_var = pirateFormsObject.errors;

    if( (typeof session_var != 'undefined') && (session_var != '') && (typeof jQuery('#contact') != 'undefined') && (typeof jQuery('#contact').offset() != 'undefined') ) {

        jQuery('html, body').animate({
            scrollTop: jQuery('#contact').offset().top
        }, 'slow');
    }

	if( typeof jQuery('.pirate_forms_three_inputs').val() != 'undefined' ) {
		 jQuery('.pirate_forms ').each(function(){
			  jQuery(this).find('.pirate_forms_three_inputs').wrapAll('<div class="pirate_forms_three_inputs_wrap">');
		  })
	}
});

jQuery(document).ready(function() {

    /* show/hide reCaptcha */

    var thisOpen = false;
    jQuery('.pirate_forms .form-control').each(function(){
        if ( jQuery(this).val().length > 0 ){
            thisOpen = true;
            jQuery('.zerif-g-recaptcha').css('display','block').delay(1000).css('opacity','1');
            return false;
        }
    });
    if ( thisOpen == false && (typeof jQuery('.pirate_forms textarea').val() != 'undefined') && (jQuery('.pirate_forms textarea').val().length > 0) ) {
        thisOpen = true;
        jQuery('.pirate-forms-g-recaptcha').css('display','block').delay(1000).css('opacity','1');
    }
    jQuery('.pirate_forms input, .pirate_forms textarea').focus(function(){
        if ( !jQuery('.pirate-forms-g-recaptcha').hasClass('recaptcha-display') ) {
            jQuery('.pirate-forms-g-recaptcha').css('display','block').delay(1000).css('opacity','1');
        }
    });

});
</script>

<?php if ( true == get_theme_mod( '1_foot_cookie', true ) ) :
   $cookie_pag = get_theme_mod('6_foot_cookie', '42');
   $cook_perm = get_permalink( $post = $cookie_pag, $leavename = false );

   $cookie_url = get_theme_mod('7_foot_cookie', '');
  ?>
<script type="text/javascript">
$(document).ready(function(){
  $.cookieBar({
    message: '<?= get_theme_mod('2_foot_cookie', esc_attr__('We use cookies to track usage and preferences', 'xtra-starter')); ?>',
    acceptButton: true,
    acceptText: '<?= get_theme_mod('3_foot_cookie', esc_attr__('I Understand', 'xtra-starter')); ?>',
    acceptFunction: null,
    declineButton: false,
    declineText: '<?= get_theme_mod('4_foot_cookie', esc_attr__('Disable Cookies', 'xtra-starter')); ?>',
    declineFunction: null,
    policyButton: true,
    policyText: '<?= get_theme_mod('5_foot_cookie', esc_attr__('Privacy Policy', 'xtra-starter')); ?>',
    policyURL: '<?= $cookie_url != '' ? esc_url($cookie_url) : esc_url($cook_perm); ?>',
    autoEnable: true,
    acceptOnContinue: false,
    acceptOnScroll: false,
    acceptAnyClick: false,
    expireDays: 365,
    renewOnVisit: false,
    forceShow: false,
    effect: 'slide',
    element: '.info-cookies',
    append: false,
    fixed: false,
    bottom: true,
    zindex: '',
    domain: '<?php echo site_url(); ?>/',
    referrer: '<?php echo site_url(); ?>/'
  });
});
</script>
<?php endif; ?>
