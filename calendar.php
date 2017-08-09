<?php

$pageTitle = 'ปฎิทินกิจกรรมคณะ';
 $title = 'ปฎิทินกิจกรรมคณะ';

$pathway = '<li><span>เกี่ยวกับคณะ</span><span class="divider">/</span></li>
             <li><span>ปฎิทินกิจกรรม</span></li>';
$tags = array('ปฎิทินกิจกรรม', 'คณะการแพทย์แผนไทย');


include("header.php");
include("controller/article.php");

?>
  
 <!-- NAV HELPER -->
<nav class="wrap t3-navhelper">
  <div class="container">
    <div class="row">
      <div class="span12">
          <ul class="breadcrumb ">
	       <li class="active"><span class="divider hasTooltip">
               <i class="icon-map-marker" data-toggle="tooltip" title="You are here: "></i></span></li>
               <?php echo $pathway; ?>
               </ul>
      </div>
    </div>
  </div>
</nav>
<!-- //NAV HELPER -->  


<section id="t3-mainbody" class="t3-mainbody main-left wrap">
     <div class="container">
     <div class="row">
			
<!-- MAIN CONTENT -->
<div id="t3-content" class="t3-content span9"  data-default="span9" data-xtablet="span8" data-tablet="span12">
<div class="main-content">
<div class="t3-component">
						

<!-- Start K2 Item Layout -->
<span id="startOfPageId73"></span>
<div id="k2Container" class="itemView">
	<!-- Plugins: BeforeDisplay -->
	<!-- K2 Plugins: K2BeforeDisplay -->
        <!-- Date created -->
	<div class="k2InfoWrap">
           <div class="k2DateInfo">
	   <span class="itemDateCreated">Calendar</span>		
	   <span class="itemDayCreated"><i class="icon-calendar"></i></span> 	
        </div>        	
</div> 
<!--End K2 Info Wrapper -->
	
<div class="k2ContentWrap">
    <div class="itemHeader">
<!-- Item title -->
 <h2 class="itemTitle"><?php echo $title; ?></h2>	  
</div>

<div class="itemToolbar">
   <ul>
    <!-- Item Author -->
   <li>
    <span class="itemAuthor">Written by&nbsp;<a rel="author" href="#">Super User</a></span></li>
    
    <!-- Item category -->
   <li>
    <span class="itemCategory">Published in <a href="#">เกี่ยวกับคณะ</a></span></li>    
    
   <!-- Font Resizer -->
    <li>
       <span class="itemTextResizerTitle">font size</span>
       <a href="#" id="fontDecrease">
       <span>decrease font size</span>
       <img src="images/blank.gif" alt="decrease font size" /></a>
       <a href="#" id="fontIncrease">
       <span>increase font size</span>
       <img src="images/blank.gif" alt="increase font size" /></a></li>
     
     <!-- Add Button -->
     <li>
     <a class="itemPrintLink" rel="nofollow" href="https://calendar.google.com" target="_blank">
       <span><input type="button" value="เพิ่มกิจกรรมใหม่" /></span></a>
     </li>
			

     </ul>
<div class="clr"></div>
</div>
	
<div class="itemBody">


	  
<!-- Item Content  -->
<div class="itemIntroText googleCalendar">
    <!-- Google Calendar -->

	<iframe src="https://calendar.google.com/calendar/embed?showTitle=0&amp;height=600&amp;wkst=1&amp;hl=th&amp;bgcolor=%23FFFFFF&amp;src=ttmed.psu%40gmail.com&amp;color=%232952A3&amp;src=480d3qlliohg6gc00jtc13tudo%40group.calendar.google.com&amp;color=%23711616&amp;ctz=Asia%2FBangkok" style="border-width:0" width="800" height="600" frameborder="0" scrolling="no"></iframe>

<!--
   <iframe src="https://calendar.google.com/calendar/embed?title=%20&amp;height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=ttmed.psu%40gmail.com&amp;color=%2329527A&amp;src=th.th%23holiday%40group.v.calendar.google.com&amp;color=%23A32929&amp;ctz=Asia%2FBangkok" style="border-width:0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
-->
</div>

<!-- //End Item Content -->

<div class="clr"></div>
</div>

<div>
	<p>
		<h3>- ขั้นตอนการเพิ่มกิจกรรมลงในปฏินทิน</h3>
		<ol>
			<li>คลิกปุ่ม <strong style="color:red">"เพิ่มกิจกรรมใหม่"</strong> (หากเริ่มใช้งานปฎิทินเป็นครั้งแรก ให้คลิกปุ่ม <img src="./images/add-calendar.png" style="border: 1px solid #000" alt="">   ซึ่งอยู่ตรงบริเวณขวาล่างของปฎิทิน)</li>
			<li>ล๊อคอินเข้าสู่ระบบโดยใช้อีเมล์ <strong style="color:red">@psu.ac.th <b>ที่สมัครเป็น PSU-GAFE</b> แล้วเท่านั้น</strong> (<a href="http://gafe.psu.ac.th/support/1/1" target="_blank">ขั้นตอนการสมัคร</a>)</li>
			<li>คลิกที่ปฏินทินตรงบริเวณวันที่ที่ที่ต้องการเพิ่มกิจกรรม โดยมีรายละเอียดวิธีการใช้งานดังนี้ (<a href="https://docs.google.com/document/d/1BVtIPgZMo9Q83jIz8YLhT38IIpEBLhfjg2gy-KffPSA/edit?usp=sharing" target="_blank">สรุปย่อการใช้งาน</a> / <a href="https://drive.google.com/open?id=0B5WWizgbgU2udGlFRENIMy1aOEE" target="_blank">สอนวิธีการใช้งานอย่างละเอียด PDF</a>  / <a href="https://www.youtube.com/watch?v=b994yloHtiI" target="_blank">วิดีโอสอนการใช้งาน</a> )</li>
		</ol>
		<p>
			<span style="color:red">(*หมายเหตุ <i>ผู้ที่สามารถเพิ่มกิจกรรมลงในปฏินทินได้ จะต้องขอสิทธ์การเพิ่มข้อมูลกับงานเทคโนโลยีสารสนเทศก่อน โดยแจ้งอีเมล์ผู้ใช้งานมาที่ niti.c(at)psu.ac.th</i>)</span>
		</p>
			
	</p>
	<p>
		<h3>- การใช้งาน Google Calendar บท Smart Phone</h3>
		<div>ท่านสามารถเพิ่มกิจกรรมลงในปฏิทินผ่านแอพพิเคชั่นบนมือถือได้เช่นเดียวกับบนเว็บไซต์ โดยทำการติดตั้งแอพ Google Calendar ลงในมือถือทั้งระบบปฏิบัติการ Andorid และ IOS</div>
		
      <div style="width: 500px; height: 100px"><br>
		<div style="width: 160px; float:left;">
			<a href='https://play.google.com/store/apps/details?id=com.google.android.calendar&pcampaignid=MKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1' target="_blank"><img alt='ดาวน์โหลดได้จาก Google Play' src='./images/play.jpg'/></a>
		</div>
		<div style="width: 150px; float:left; margin-left: 20px">
			<a href="https://itunes.apple.com/us/app/google-calendar-make-the-most-of-every-day/id909319292?mt=8" target="_blank"><img src="./images/app.png" alt=""></a>
		</div>
		</div>
	</p>
</div>

<div class="itemContentFooter">
   <!-- Item Hits -->
  <span class="itemHits">Read <b>999</b> times</span>
  <div class="clr"></div>
</div>
		    
 <div class="itemLinks">
     <!-- Item tags -->
  <div class="itemTagsBlock">
	  <span>Tagged under</span>
	  <ul class="itemTags">
             <?php
                 foreach($tags as $tag){
                    echo '<li><a href="tags.php?p='.$tag.'">'.$tag.'</a></li>'; 
                 }
             ?>
      </ul>
	  <div class="clr"></div>
</div>
	  
    <!-- Item Rating -->
<div class="itemRatingBlock">
       <span>Rate this item</span>
       <div class="itemRatingForm">
       <ul class="itemRatingList">
	    <li class="itemCurrentRating" id="itemCurrentRating73" style="width:0%;"></li>
	    <li><a href="#" rel="73" title="1 star out of 5" class="one-star">1</a></li>
	    <li><a href="#" rel="73" title="2 stars out of 5" class="two-stars">2</a></li>
	    <li><a href="#" rel="73" title="3 stars out of 5" class="three-stars">3</a></li>
	    <li><a href="#" rel="73" title="4 stars out of 5" class="four-stars">4</a></li>
	     <li><a href="#" rel="73" title="5 stars out of 5" class="five-stars">5</a></li>
	 </ul>
	<div id="itemRatingLog73" class="itemRatingLog">(0 votes)</div>
	<div class="clr"></div>
	</div>
	<div class="clr"></div>
	</div>
        <div class="clr"></div>
 </div>
  

<!-- Social sharing -->
<div class="itemSocialSharing">
    
	<!-- Google +1 Button -->
	<div class="itemGooglePlusOneButton">
		<g:plusone annotation="inline" width="120"></g:plusone>
		<script type="text/javascript">
		  (function() {
		  	window.___gcfg = {lang: 'en'}; // Define button default language here
		    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
		    po.src = 'https://apis.google.com/js/plusone.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
		  })();
		</script>
	</div>

	<!-- Facebook Button -->
	<div class="itemFacebookButton">
		<div id="fb-root"></div>
		<script type="text/javascript">
			(function(d, s, id) {
			  var js, fjs = d.getElementsByTagName(s)[0];
			  if (d.getElementById(id)) return;
			  js = d.createElement(s); js.id = id;
			  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
			  fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));
		</script>
		<div class="fb-like" data-send="false" data-width="200" data-show-faces="true"></div>
	</div>
        <div class="clr"></div>
</div>
  <!-- Plugins: AfterDisplay -->
  <!-- K2 Plugins: K2AfterDisplay -->
 </div>
</div>
<!-- End K2 Item Layout -->

</div>  
</div>
</div>
<!-- //MAIN CONTENT -->


			
	</div>
   </div>
</section>    


 
<!-- FOOTER -->
<?php
include("footer.php");
?>
<!-- //FOOTER -->  
</body>

</html>

