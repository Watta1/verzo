<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package VerzoStudio
 */

?>




<!-- jQuery -->
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery-1.10.2.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/bootstrap.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/wow.min.js"></script>

<!-- Plugin JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

<!-- Theme JavaScript -->
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/new-age.js"></script>
<script src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.fancybox.pack.js?v=2.1.6"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.fancybox-buttons.js?v=1.0.5"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.fancybox-thumbs.js?v=1.0.7"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.fancybox-buttons.js?v=1.0.5"></script>
<script type="text/javascript">
$(document).ready(function() {
$(".fancybox-thumb").fancybox({
	openEffect : 'elastic',
	closeEffect : 'elastic',
	prevEffect	: 'elastic',
	nextEffect	: 'elastic',
	fitToView: false,
	maxWidth: "90%",
	helpers	: {
		title	: {
			type: 'inside',
      position: 'top'
		},
		overlay : {
            css : {
                'background': 'url(<?php bloginfo('stylesheet_directory'); ?>/img/fancybox_overlay.png)'
            }
        }
	}, // helpers
   beforeLoad: function() {
    this.title = $(this.element).attr('caption');}


	});
});
</script>

<script>
    wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100,
        callback:     function(box) {
          console.log("WOW: animating <" + box.tagName.toLowerCase() + ">")
        }
      }
    );
    wow.init();
    document.getElementById('moar').onclick = function() {
      var section = document.createElement('section');
      section.className = 'section--purple wow fadeInDown';
      this.parentNode.insertBefore(section, this);
    };
  </script>
<?php wp_footer(); ?>

</body>
</html>
