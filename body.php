<!-- init load -->
<?php
include("controller/news.php");
include("controller/article.php");
include("controller/masscol.php");
include("controller/gellary.php");
?>

<!-- SLIDESHOW -->
<?php
include("slideshow.php");
?>
<!-- //SLIDESHOW -->
  
  
<section id="t3-mainbody" class="wrap t3-mainbody home-page">
  <div class="container">
  <div class="row">
		
<!-- MAIN CONTENT -->
<div id="t3-content" class="t3-content span6 offset4"  data-default="span6 offset4" data-xtablet="span8 offset4" data-tablet="span12" data-mobile="span12">

		<!-- MASSCOL 1 -->		
	    <div class="t3-mastcol t3-mastcol-1">
                    <!-- Message masscol -->
					  <?php
						echo masscol_widget(); 
					  ?>
					 <!-- //End Mesage -->	 
							 
					  <!-- Gellary Laster -->
					  <?php
						echo gellary_widget(); 
					  ?>
					  <!-- //End Gellary -->
        </div>
	<!-- //MASSCOL 1 -->
</div>
<!-- //MAIN CONTENT -->

<!-- SIDEBAR 1 (Latest News post) -->
<div class="t3-sidebar t3-sidebar-1 span4 offset-10 t3respon" data-default="span4 offset-10" data-xtablet="span4 offset-12" data-tablet="span12" data-mobile="span12">

          <div class="t3-module module  no-padding NSPnews " id="Mod205">
          <div class="module-inner"><h3 class="module-title "><span>Latest News Post</span></h3>
          <div class="module-ct">
          <div class="nspMain  no-padding NSPnews" id="nsp-nsp-205" data-config="{
		      'animation_speed': 400,
		      'animation_interval': 5000,
		      'animation_function': 'Fx.Transitions.Expo.easeIn',
		      'news_column': 1,
		      'news_rows': 3,
		      'links_columns_amount': 1,
		      'links_amount': 3
			}">
           <div class="nspArts bottom" style="width:100%;">
           <div class="nspTopInterface"><span class="nspPrev">Prev</span><span class="nspNext">Next</span></div>
	   <div class="nspArtScroll1">
	   <div class="nspArtScroll2 nspPages3">   
        <!--section 1 -->   
         <?php
            echo latest_news_post();		   
         ?>		 
     
        </div>
        </div>
        </div>
        </div>

     </div>
     </div>
     </div>

<!--Our Service -->
<div class="t3-module module  no-padding accordion color" id="Mod208">
<div class="module-inner"><h3 class="module-title"><span>Annuosments</span></h3>
<div class="module-ct">
<div class="custom no-padding accordion color">
<div id="accordion2" class="accordion">

  <div class="accordion-group">
  <div class="accordion-heading">
     <a class="accordion-toggle" href="index.html#collapseOne" data-parent="#accordion2" data-toggle="collapse">
     <i class="icon-volume-up"></i>ข่าวประชาสัมพันธ์ <!--&nbsp;<span class="label label-warning">1</span>--></a></div>
   <div id="collapseOne" class="accordion-body collapse">
   <div class="accordion-inner itemAuthorLatest">
          <ul>
            <?php echo annuosments(1); ?>
		  </ul>	
  </div>
  </div>
  </div>

  <div class="accordion-group">
  <div class="accordion-heading">
  <a class="accordion-toggle" href="index.html#collapseTwo" data-parent="#accordion2" data-toggle="collapse">
  <i class="icon-comments"></i>ข่าวสำหรับนักศึกษา</a></div>
  <div id="collapseTwo" class="accordion-body collapse">
  <div class="accordion-inner itemAuthorLatest">
         <ul>
            <?php echo annuosments(2); ?>
		  </ul>	
  </div>
  </div>
  </div>

  <div class="accordion-group">
  <div class="accordion-heading">
  <a class="accordion-toggle" href="index.html#collapseThree" data-parent="#accordion2" data-toggle="collapse">
  <i class="icon-group"></i>ข่าวรับสมัครงาน</a></div>
  <div id="collapseThree" class="accordion-body collapse">
  <div class="accordion-inner itemAuthorLatest">
          <ul>
            <?php echo annuosments(3); ?>
		  </ul>	
  </div>
  </div>
  </div>

  <div class="accordion-group">
  <div class="accordion-heading">
  <a class="accordion-toggle" href="index.html#collapseFour" data-parent="#accordion2" data-toggle="collapse">
  <i class="icon-briefcase"></i>ข่าวจัดซื้อจัดจ้าง</a></div>
  <div id="collapseFour" class="accordion-body collapse">
  <div class="accordion-inner itemAuthorLatest">
         <ul>
            <?php echo annuosments(4); ?>
		  </ul>	
  </div>
  </div>
  </div>

</div>
</div>
</div>
</div>
</div>
</div>
<!-- //SIDEBAR 1 -->
				
<!-- SIDEBAR 2 link ด้านขวา -->
<div class="t3-sidebar t3-sidebar-2 span2 t3respon" data-default="span2" data-xtablet="hidden" data-tablet="hidden" data-mobile="span12">
<div class="t3-module module  no-padding " id="Mod190">
<div class="module-inner">
<h3 class="module-title "><span>สาส์นจากคณบดี</span></h3>
<div class="module-ct">
   <div class="custom no-padding" style="text-align:center">
      <p><a href="blog.php?p=8"><img src="images/links/dean.jpg" border="0" alt="Dean Talk" /></a></p>
   </div>
</div>   
<h3 class="module-title "><span>Quick Links</span></h3>
<div class="module-ct">
   <div class="custom no-padding">
	<ul class="styled1">
	   <li><a href="http://webmail2.psu.ac.th/" target="_blank"><img src="images/links/client1.png" border="0" alt="PSU-Webmail" /></a></li>
	   <li><a href="https://edoc.psu.ac.th/" target="_blank"><img src="images/links/client2.png" border="0" alt="Edoc PSU" /></a></li>
	   <li><a href="https://dss.psu.ac.th" target="_blank"><img src="images/links/client3.png" border="0" alt="MIS-DSS" /></a></li>
	   <li><a href="http://lms.psu.ac.th/" target="_blank"><img src="images/links/client4.png" border="0" alt="LMS@PSU" /></a></li>
	   <li><a href="https://sis.psu.ac.th/" target="_blank"><img src="images/links/client5.png" border="0" alt="SIS" /></a></li>
     <li><a href="http://tellmemore.psu.ac.th/TMMCAMPUS/portalCOR/modportalCOR.axrq" target="_blank"><img src="images/links/client6.png" border="0" alt="TMM" /></a></li>
	   
	</ul>
     </div>
</div>
</div>
</div>
</div>
<!-- //SIDEBAR 2 -->

</div>
</div>
</section>    
 
<!-- FOOTER -->
<?php
include("footer.php");
?>
<!-- //FOOTER -->  

		
<div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">ข่าวประกาศ</h3>
  </div>
  <div class="modal-body">
    <p>
	      หลักฐานใบรับรองแพทย์ที่ต้องนำไปในวันสอบสัมภาษณ์ในการสอบคัดเลือกบุคคลเข้าศึกษาในคณะการแพทย์แผนไทย
          มหาวิทยาลัยสงขลานครินทร์ (โดยใช้คะแนนสอบ GET/PAT ครั้งที่ 1/2557 และวิชาสามัญฯ"
		   <a href="https://drive.google.com/file/d/0B5WWizgbgU2uTDNCLUdHQ2Y0WnM/edit?usp=sharing" target="_blank"> คลิกอ่านรายละเอียด</a>
    </p>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
  </div>
</div>


</body>
</html>
