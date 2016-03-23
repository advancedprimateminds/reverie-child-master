<html>
	<body>

<?php wp_footer(); ?>

<script src="js/foundation/foundation.js"></script>
<script src="js/foundation/foundation.offcanvas.js"></script>
<script src="/js/vendor/jquery.js"></script>
<script src="/js/vendor/fastclick.js"></script>	
<script src="/js/foundation.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/p5.js/0.4.10/p5.js"></script>

<script>
   $(document).foundation();

      $(function() {
        $(".right-off-canvas-toggle, .exit-off-canvas").click(function() {
            $(".top-bar").toggleClass("top-bar-close");
          $(".middle-bar").toggleClass("middle-bar-close");
          $(".bottom-bar").toggleClass("bottom-bar-close")
          });
      });
</script>

<script>
		$(document).foundation({
		  offcanvas : {
		    // Sets method in which offcanvas opens.
		    // [ move | overlap_single | overlap ]
		    open_method: 'overlap', 
		    // Should the menu close when a menu link is clicked?
		    // [ true | false ]
		    close_on_click : false
		  }
		});
</script>



	</body>
</html>