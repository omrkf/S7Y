<?php





require 'headHtml.php';

?>
  <!-- end navbar -->
  <section>
  <div>
      <div class="Titles">
        <b3 name="TextSlide"></b3>
      </div>
      <img name="slide" width="1920" height="900">
    </div>
  </section>
  <script>
    var i = 0; // Start point
    var images = [];
    var time = 4000;

    // Image List
    images[0] = 'img/image1.png';
    images[1] = 'img/image2.png';
    images[2] = 'img/image3.png';
    images[3] = 'img/image4.png';

    // Change Image
    function changeImg() {
      document.slide.src = images[i];

      if (i < images.length - 1) {
        i++;
      } else {
        i = 0;
      }

      setTimeout("changeImg()", time);
    }

    window.onload = changeImg;






  </script>
 <?php 
  
  require 'footer.php';
  ?>