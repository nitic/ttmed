<?php
include("header.php");
include("controller/article.php");
include("controller/tag.php");
require_once("plugin/pagination/Pagination.class.php");




    // determine page (based on <_GET>)
    $page = isset($_GET['page']) ? ((int) $_GET['page']) : 1;
	$type = isset($_GET['type']) ? ((int) $_GET['type']) : '"" or 1=1';

$records_per_page = 20;
$records_total = count_article($type); 

	
$limit = ($page - 1) * $records_per_page;
	
    // instantiate; set current page; set number of records
    $pagination = (new Pagination());
    $pagination->setCurrent($page);
	
	//Sets the number of records per page
	$pagination->setRPP($records_per_page);
	//Sets the total number of records available for pagination.
	$pagination->setTotal($records_total);

    // grab rendered/parsed pagination markup
    $markup = $pagination->parse();

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
               <li><a href="../../../../blog.html" class="pathway">article</a><span class="divider">/</span></li>
               <li><span>Article Page</span></li></ul>
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
	<?php 
		switch($type){
			case 1 : echo "บทความทั่วไป"; break;
			case 2 : echo "บทความงานวิจัย"; break;
			case 3 : echo "บทความทางเวชกรรมไทย"; break;
			case 4 : echo "บทความทางเภสัชกรรมไทย"; break;
			case 5 : echo "บทความทางผดุงครรภ์ไทย"; break;
			case 6 : echo "บทความทางนวดไทย"; break;
			case 99 : echo "บทความประชาสัมพันธ์"; break;
			default : echo "บทความทั้งหมด"; break;
		}
	
	?>
	</h2>  
  </div>

  <!-- Plugins: AfterDisplayTitle -->
  
  <!-- K2 Plugins: K2AfterDisplayTitle -->
  
	  <div class="itemToolbar">
		<ul>
                  <!-- Item Author -->
		<li><span class="itemAuthor">จำนวน&nbsp;<a rel="author" href="#"><?php echo $records_total;?></a> เรื่อง</span></li>
			            
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
		   
                                <table class="table table-bordered table-responsive">
                                    <thead>
                                        <tr>
                                            <th style="width:80px;background-color:#eee;color:#000">วันที่</th>
                                            <th style="background-color:#eee;color:#000">ชื่อบทความ</th>
                                            <th style="width:95px;background-color:#eee;color:#000">ประเภท</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       <?php echo article_table($limit, $type); ?>
                                    </tbody>
                                </table>
				<div class="pagination">				
				 <?php echo $markup; ?>
			    </div>
				
		</p>
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
<div class="t3-module module  no-padding " id="Mod45">
<div class="module-inner">
<h3 class="module-title "><span>ประเภทบทความ</span></h3><div class="module-ct">
<ul class="nav ">
<li class="item-435"><a href="articles.php" >บทความทั้งหมด</a></li>
<li class="item-435"><a href="articles.php?type=1" >บทความทั่วไป</a></li>
<li class="item-233 active parent"><a href="articles.php?type=2" >บทความงานวิจัย</a></li>
<li class="item-238 parent"><a href="articles.php?type=3" >บทความทางเวชกรรมไทย</a></li>
<li class="item-489"><a href="articles.php?type=4" >บทความทางเภสัชกรรมไทย</a></li>
<li class="item-532"><a href="articles.php?type=5" >บทความทางผดุงครรภ์ไทย</a></li>
<li class="item-491"><a href="articles.php?type=6" >บทความทางนวดไทย</a></li>
<li class="item-491"><a href="articles.php?type=99" >บทความประชาสัมพันธ์</a></li>
</ul>
</div></div></div>

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
