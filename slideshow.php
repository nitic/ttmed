<?php
require("controller/slide.php");
?>
<!-- SLIDESHOW -->
<section class="wrap slider">
<div class="container">

          
<div id="gkIs-gk-is-209" class="gkIsWrapper-gk_partyfreak" style="width: 100%;">
   <div class="gkIsPreloader"></div>
   <?php
       echo slideshow_big_picture();

   ?>	

     <div class="gkIsThumbs" style="height:auto; width:362px;">
	<div class="gkIsThumbsSlider1 gkClear" style="height:403px;margin:0 0 1px 0;">
		<?php
                  echo slideshow_detail();
                ?>	
         </div>
		
             <div class="gkIsBtnUp"><i class="icon-chevron-up"></i></div><div class="gkIsBtnDown"><i class="icon-chevron-down"></i></div>
     </div>
</div>
    
  </div>
</section>
<!-- //SLIDESHOW -->
