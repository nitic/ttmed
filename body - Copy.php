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
          <!-- Banner -->
		 <div class="t3-module module -testimonial" style="padding-top:20px">
     <div class="module-inner"> 
     
             <ul class="thumbnails">
                <li>
                  <a href="program.php?page=bachelor" target="_blank" class="thumbnail" alt="260x80">
                     <div style="width:260px;height:80px">
                        <img src="images/banner-grad.jpg" border="0">
                     </div>
                  </a>
                </li>
                <li  style="margin-left:15px;">
                  <a href="https://sites.google.com/site/gradttmed/" target="_blank" class="thumbnail" alt="260x80">
                     <div style="width:260px;height:80px">
                         <img src="images/banner-undergrad.jpg" border="0">
                     </div>
                  </a>
                </li>
              </ul>
    </div></div>
					 <!-- //End Banner -->	 

					  <!-- Gellary Laster -->
					  <?php
						echo gellary_widget(); 
					  ?>
					  <!-- //End Gellary -->

   <!-- Apps Link Widget --> 
    <div class="t3-module module -testimonial">
     <div class="module-inner"> 
     <div class="module-ct">     
      <div class="tabbable"> <!-- Only required for left/right tabs -->
        <ul class="nav nav-tabs">
          <li class="active"><a href="#tab1" data-toggle="tab">สารสนเทศภายในคณะ</a></li>
          <li><a href="#tab2" data-toggle="tab">สารสนเทศมหาวิทยาลัย</a></li>
        </ul>
        <div class="tab-content">
          <div class="tab-pane active" id="tab1">
                <ul class="thumbnails">
                <li class="span1">
                  <a href="http://192.168.80.7/eva2/" target="_blank" class="thumbnail">
                     <div style="height:80px">
                      <div style="text-align: center;">
                       <div style="font-size: 40px;"><i class="icon-check"></i></div>  
                       <span style="font-size: 14px;">ระบบประเมินรายวิชาคณะ</span>   
                      </div>       
                     </div>
                  </a>
                </li>
                <li class="span1" style="margin-left:5px;">
                  <a href="http://192.168.80.7/eva/" target="_blank" class="thumbnail">
                     <div style="height:80px">
                      <div style="text-align: center;">
                       <div style="font-size: 40px;"><i class="icon-beaker"></i></div>  
                       <span style="font-size: 14px;">ระบบประเมินสิ่งสนับสนุนฯ</span>   
                      </div>       
                     </div>
                  </a>
                </li>
                <li class="span1" style="margin-left:5px;">
                  <a href="http://192.168.80.7/helpdesk/" target="_blank" class="thumbnail">
                     <div style="height:80px">
                      <div style="text-align: center;">
                       <div style="font-size: 40px;"><i class="icon-desktop"></i></div>  
                       <span style="font-size: 14px;">ระบบแจ้งซ่อมคอมพิวเตอร์</span>   
                      </div>       
                     </div>
                  </a>
                </li>
                <li class="span1" style="margin-left:5px;">
                  <a href="http://192.168.80.7/wifi/" target="_blank" class="thumbnail">
                     <div style="height:80px">
                      <div style="text-align: center;">
                       <div style="font-size: 40px;"><i class="icon-signal"></i></div>  
                       <span style="font-size: 14px;">ระบบลงทะเบียน WIFI</span>   
                      </div>       
                     </div>
                  </a>
                </li>
                 <li class="span1" style="margin-left:5px;">
                  <a href="http://192.168.80.7/finance/" target="_blank" class="thumbnail">
                     <div style="height:80px">
                      <div style="text-align: center;">
                       <div style="font-size: 40px;"><i class="icon-money"></i></div>  
                       <span style="font-size: 14px;">ระบบจัดการเงินรายได้คณะ</span>   
                      </div>       
                     </div>
                  </a>
                </li>
                 <li class="span1">
                  <a href="http://www.ttmed.psu.ac.th/research/" target="_blank" class="thumbnail">
                     <div style="height:80px">
                      <div style="text-align: center;">
                       <div style="font-size: 40px;"><i class="icon-beaker"></i></div>  
                       <span style="font-size: 14px;">ระบบฐานข้อมูลงานวิจัย</span>   
                      </div>       
                     </div>
                  </a>
                </li>
                 <li class="span1" style="margin-left:5px;">
                  <a href="http://goo.gl/ii7BbU" target="_blank" class="thumbnail">
                     <div style="height:80px">
                      <div style="text-align: center;">
                       <div style="font-size: 40px;"><i class="icon-copy"></i></div>  
                       <span style="font-size: 14px;">เอกสาร มคอ. รายวิชาคณะ</span>   
                      </div>       
                     </div>
                  </a>
                </li>
                 <li class="span1" style="margin-left:5px;">
                  <a href="http://goo.gl/dNDZy4" target="_blank" class="thumbnail">
                     <div style="height:80px">
                      <div style="text-align: center;">
                       <div style="font-size: 40px;"><i class="icon-trophy"></i></div>  
                       <span style="font-size: 14px;">SAR งานประกันคุณภาพ</span>   
                      </div>       
                     </div>
                  </a>
                </li>
                 <li class="span1" style="margin-left:5px;">
                  <a href="http://goo.gl/tNBhhB" target="_blank" class="thumbnail">
                     <div style="height:80px">
                      <div style="text-align: center;">
                       <div style="font-size: 40px;"><i class="icon-file-alt"></i></div>  
                       <span style="font-size: 14px;">แบบฟอร์มต่างๆ ดาวน์โหลด</span>   
                      </div>       
                     </div>
                  </a>
                </li>

              </ul>
          </div>
          <div class="tab-pane" id="tab2">
              <ul class="thumbnails">
                  <li class="span1">
                    <a href="http://eval.psu.ac.th" target="_blank" class="thumbnail">
                       <div style="height:80px">
                        <div style="text-align: center;">
                         <div style="font-size: 40px;"><i class="icon-user"></i></div>  
                         <span style="font-size: 14px;">ระบบประเมินอาจารย์</span>   
                        </div>       
                       </div>
                    </a>
                  </li>
                  <li class="span1" style="margin-left:5px;">
                    <a href="https://tqf.psu.ac.th/" target="_blank" class="thumbnail">
                       <div style="height:80px">
                        <div style="text-align: center;">
                         <div style="font-size: 40px;"><i class="icon-book"></i></div>  
                         <span style="font-size: 14px;">ระบบ มคอ. TQF-Online</span>   
                        </div>       
                       </div>
                    </a>
                  </li>
                  <li class="span1" style="margin-left:5px;">
                    <a href="http://hrmis.psu.ac.th/" target="_blank" class="thumbnail">
                       <div style="height:80px">
                        <div style="text-align: center;">
                         <div style="font-size: 40px;"><i class="icon-pencil"></i></div>  
                         <span style="font-size: 14px;">ระบบ HR-MIS บันทึกผลงานฯ</span>   
                        </div>       
                       </div>
                    </a>
                  </li>
                   <li class="span1" style="margin-left:5px;">
                    <a href="https://grade.psu.ac.th/" target="_blank" class="thumbnail">
                       <div style="height:80px">
                        <div style="text-align: center;">
                         <div style="font-size: 40px;"><i class="icon-legal"></i></div>  
                         <span style="font-size: 14px;">ระบบส่งเกรดผ่านเว็บ</span>   
                        </div>       
                       </div>
                    </a>
                  </li>
                  <li class="span1" style="margin-left:5px;">
                    <a href="https://research.psu.ac.th/rdo/Login.aspx" target="_blank" class="thumbnail">
                       <div style="height:80px">
                        <div style="text-align: center;">
                         <div style="font-size: 40px;"><i class="icon-time"></i></div>  
                         <span style="font-size: 14px;">ระบบ PRPM บริหารงานวิจัย</span>   
                        </div>       
                       </div>
                    </a>
                  </li>
                  <li class="span1">
                    <a href="http://tor.psu.ac.th/" target="_blank" class="thumbnail">
                       <div style="height:80px">
                        <div style="text-align: center;">
                         <div style="font-size: 40px;"><i class="icon-tasks"></i></div>  
                         <span style="font-size: 14px;">ระบบประเมิน TOR</span>   
                        </div>       
                       </div>
                    </a>
                  </li>
                  <li class="span1" style="margin-left:5px;">
                    <a href="https://competency.psu.ac.th/competency/login.aspx" target="_blank" class="thumbnail">
                       <div style="height:80px">
                        <div style="text-align: center;">
                         <div style="font-size: 40px;"><i class="icon-dashboard"></i></div>  
                         <span style="font-size: 14px;">ระบบประเมิน Competency</span>   
                        </div>       
                       </div>
                    </a>
                  </li>
                  <li class="span1" style="margin-left:5px;">
                    <a href="https://payroll.psu.ac.th/" target="_blank" class="thumbnail">
                       <div style="height:80px">
                        <div style="text-align: center;">
                         <div style="font-size: 40px;"><i class="icon-money"></i></div>  
                         <span style="font-size: 14px;">ระบบสืบค้น เงินเดือน</span>   
                        </div>       
                       </div>
                    </a>
                  </li>
                   <li class="span1" style="margin-left:5px;">
                    <a href="https://opac.psu.ac.th/" target="_blank" class="thumbnail">
                       <div style="height:80px">
                        <div style="text-align: center;">
                         <div style="font-size: 40px;"><i class="icon-search"></i></div>  
                         <span style="font-size: 14px;">ระบบ OPAC ห้องสมุด</span>   
                        </div>       
                       </div>
                    </a>
                  </li>
                   <li class="span1" style="margin-left:5px;">
                    <a href="http://phonebook.psu.ac.th/" target="_blank" class="thumbnail">
                       <div style="height:80px">
                        <div style="text-align: center;">
                         <div style="font-size: 40px;"><i class="icon-mobile-phone"></i></div>  
                         <span style="font-size: 14px;">ระบบค้นหาเบอร์โทรศัพท์</span>   
                        </div>       
                       </div>
                    </a>
                  </li>
                 

              </ul>
          </div>
        </div>
      </div>
      </div></div></div>
    <!-- // End Apps Link Widget --> 


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
   <div id="collapseOne" class="accordion-body collapse in">
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
    <h3 id="myModalLabel">ประกาศ</h3>
  </div>
  <div class="modal-body">
    <p>
	      <h4>หลักฐานใบรับรองแพทย์ที่ต้องนำไปใน <span style="color:red">วันสอบสัมภาษณ์รับตรงฯ ประจำปีการศึกษา 2558 วันที่ 18 ก.พ.2558</span></h4>
		  <a href="https://drive.google.com/file/d/0B5WWizgbgU2uMWVoTjVzQnRQb2M/view?usp=sharing" target="_blank">คลิกอ่านรายละเอียด</a>
    </p>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
  </div>
</div>


</body>
</html>
