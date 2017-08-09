<?php
include("header.php");
include("controller/article.php");
include("controller/tag.php");
?>
  
 
<!-- NAV HELPER -->
<nav class="wrap t3-navhelper">
  <div class="container">
    <div class="row">
      <div class="span12">
          <ul class="breadcrumb ">
	       <li class="active"><span class="divider hasTooltip">
               <i class="icon-map-marker" data-toggle="tooltip" title="You are here: "></i></span></li>
               <li><a href="../../../../../index.html" class="pathway">system</a><span class="divider">/</span></li>
               <li><a href="../../../../blog.html" class="pathway">บริการออนไลน์</a><span class="divider"></span></li>
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
  <div id="system-message-container"></div>
  <div class="t3-component">
						

<!-- Start K2 Item Layout -->
<span id="startOfPageId73"></span>
<div id="k2Container" class="itemView">

	<!-- Plugins: BeforeDisplay -->
	
	<!-- K2 Plugins: K2BeforeDisplay -->
	
	
	
   <div class="k2ContentWrap">
    <div class="itemHeader">

<!-- Item title -->
    <h2 class="itemTitle">
	  <i class="icon-star"></i> แบบฟอร์มขอใช้บริการออนไลน์
	</h2>  
  </div>

  <!-- Plugins: AfterDisplayTitle -->
  
  <!-- K2 Plugins: K2AfterDisplayTitle -->
  
	  <div class="itemToolbar">
		<ul>
                  <!-- Item Author -->
		
			            
		  <!-- Item category -->
		<li><span class="itemCategory">Published in <a href="../../printing.html">Printing</a></span></li>    
			        	
		   <!-- Font Resizer -->
		<li><span class="itemTextResizerTitle">font size</span>
		    <a href="73-so-whoever-does-an-atom-s-weight-of-good-will-see-it.html#" id="fontDecrease">
                    <span>decrease font size</span><img src="images/blank.gif" alt="decrease font size" /></a>
		    <a href="73-so-whoever-does-an-atom-s-weight-of-good-will-see-it.html#" id="fontIncrease">
		    <span>increase font size</span><img src="images/blank.gif" alt="increase font size" /></a>
		 </li>
			
		     <!-- Print Button -->
		 <li><a class="itemPrintLink" rel="nofollow" href="73-so-whoever-does-an-atom-s-weight-of-good-will-see-it%3Ftmpl=component&amp;print=1.html" onclick="window.open(this.href,'printWindow','width=900,height=600,location=no,menubar=no,resizable=yes,scrollbars=yes'); return false;">
			<span>Print</span></a>
		 </li>

                        <!-- Email Button -->
		  <li><a class="itemEmailLink" rel="nofollow" href="../../../../component/mailto/index.html%3Ftmpl=component&amp;template=nyirok&amp;link=c5a030da7853701dbac3892e4d7a83bd0c001cb2.html" onclick="window.open(this.href,'emailWindow','width=400,height=350,location=no,menubar=no,resizable=no,scrollbars=no'); return false;">
			  <span>Email</span></a>
		   </li>
               </ul>
		<div class="clr"></div>
  </div>
	
  <div class="itemBody span8">

	  <!-- Plugins: BeforeDisplayContent -->
	  
	  <!-- K2 Plugins: K2BeforeDisplayContent -->
	  
	  	  <!-- Item Image -->
	  <div class="itemImageBlock">
	 

		  <!-- Image caption
		  <span class="itemImageCaption">All rights reserved by Parka81</span>
		  
		   <!-- Image credits
		  <span class="itemImageCredits">http://www.flickr.com/photos/teohyc/5770272170/in/set-72157606735030296</span>
		   -->
		  <div class="clr"></div>
	  </div>
	  
	  	  	  <!-- Item fulltext -->
	  <div class="itemFullText">
        <p>

          <h4>งานเทคโนโลยีสารสนเทศ</h4>
		   <ol>
		   	  <li><a href="http://192.168.80.5/helpdesk/" target="_blank">แจ้งซ่อมอุปกรณ์คอมพิวเตอร์และเครื่อข่ายอินเตอร์</a></li>
		   	  <li><a href="https://goo.gl/7UZUEJ" target="_blank">แบบฟอร์มแจ้งลงทะเบียนขอใช้ TTMED-WIFI</a></li>
		   </ol>
                  
          <h4>งานโสตทัศนูปกรณ์</h4>
		   <ol>
		   	  <li><a href="https://goo.gl/Gctwl9" target="_blank">แบบฟอร์มแจ้งขอใช้งานบริการโสตทัศนูปกรณ์</a></li>
		   </ol>
		               
		</p>

		<p>* หมายเหตุ ทุกระบบเมื่อแจ้งแล้วจะมีอีเมล์แจ้งให้กับเจ้าหน้าที่ผู้รับผิดชอบรับทราบโดยอัตโนมัติ</p>
     </div>
	  	  
		<div class="clr"></div>

	  
  <!-- Plugins: AfterDisplayContent -->	  
 <!-- K2 Plugins: K2AfterDisplayContent -->
</div>
    
 
	
   </div>
</div>
<!-- End K2 Item Layout -->

</div>  
</div>
</div>
<!-- //MAIN CONTENT -->

<!-- SIDEBAR 1 -->
<div class="t3-sidebar t3-sidebar-1 span3 t3respon" data-default="span3" data-xtablet="span4" data-tablet="span12">

<!-- Article Relate  -->
<?php
echo article_widget();
?>
<!--//End Article Relate -->

<!-- Tags Widget -->
<?php
echo tags_widget();
?>	
<!-- //End Tags Widget -->		

                 </div>
			<!-- //SIDEBAR 1 -->
			
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
