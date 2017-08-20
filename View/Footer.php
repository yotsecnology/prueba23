<?php

?>
<div id="seccion2" class="parallax">
<footer class="container-fluid text-center">
  <a href="#myPage" title="To Top">
      <span class="glyphicon glyphicon-chevron-up" style="color: #85e596;"></span>
  </a>
    <p style="">Plantilla creada por <a style="color: #85e596;" href="https://www.w3schools.com" title="Visit w3schools">w3schools</a>, Página diseñada y desarrollada por <br><img src="source/logo.PNG"><br> Derechos Reservados 2017 &copy;</p>
</footer>
</div>
<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
  
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

</body>
</html>