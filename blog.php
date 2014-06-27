<?php
include_once("controller/article.php");
if(isset($_GET["p"]))
$data = show_article($_GET["p"]) ;

$pageTitle = $data["title"];
include("header.php");
include_once("controller/tag.php");
?>
  
 
<!-- NAV HELPER -->
<nav class="wrap t3-navhelper">
  <div class="container">
    <div class="row">
      <div class="span12">
          <ul class="breadcrumb ">
	       <li class="active"><span class="divider hasTooltip">
               <i class="icon-map-marker" data-toggle="tooltip" title="You are here: "></i></span></li>
               <li><a href="#" class="pathway">บทความ</a><span class="divider">/</span></li>
               <li><a href="article.php" class="pathway"><?php echo $data["category"]; ?></a><span class="divider">/</span></li>
               <li><span><?php echo $data["title"]; ?></span></li></ul>
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
	
		<!-- Date created -->
	<div class="k2InfoWrap">
   	    <div class="k2DateInfo">
		<?php 
		      list($day,$month,$year) = explode("-",date("d-M-Y",strtotime($data["pubtime"]))); 
		      echo '<span class="itemDateCreated">'.$month.'</span>';
			  echo '<span class="itemDayCreated">'.$day.'</span>';
			  echo '<span class="itemDateCreated">'.$year.'</span>'
		  ?>
           </div>	        	
        </div> <!--End K2 Info Wrapper -->
	
   <div class="k2ContentWrap">
    <div class="itemHeader">

<!-- Item title -->
    <h2 class="itemTitle"><?php echo $data["title"]; ?></h2>  
  </div>

  <!-- Plugins: AfterDisplayTitle -->
  
  <!-- K2 Plugins: K2AfterDisplayTitle -->
  
	  <div class="itemToolbar">
		<ul>
                  <!-- Item Author -->
		<li><span class="itemAuthor">Written by&nbsp;<a rel="author" href="#l">Super User</a></span></li>
			            
		  <!-- Item category -->
		<li><span class="itemCategory">Published in &nbsp;<a href="#"><?php echo $data["category"]; ?></a></span></li>    
			        	
		   <!-- Font Resizer -->
		<li><span class="itemTextResizerTitle">font size</span>
		    <a href="#" id="fontDecrease">
                    <span>decrease font size</span><img src="images/blank.gif" alt="decrease font size" /></a>
		    <a href="#" id="fontIncrease">
		    <span>increase font size</span><img src="images/blank.gif" alt="increase font size" /></a>
		 </li>
			
		     <!-- Print Button -->
		 <li><a class="itemPrintLink" rel="nofollow" href="#" onclick="window.open(this.href,'printWindow','width=900,height=600,location=no,menubar=no,resizable=yes,scrollbars=yes'); return false;">
			<span>Print</span></a>
		 </li>

                        <!-- Email Button -->
		  <li><a class="itemEmailLink" rel="nofollow" href="#" onclick="window.open(this.href,'emailWindow','width=400,height=350,location=no,menubar=no,resizable=no,scrollbars=no'); return false;">
			  <span>Email</span></a>
		   </li>
               </ul>
		<div class="clr"></div>
  </div>
	
  <div class="itemBody">

	  <!-- Plugins: BeforeDisplayContent -->
	  
	  <!-- K2 Plugins: K2BeforeDisplayContent -->
	  
	  	  <!-- Item Image -->
	 <?php 
         if($data['typeID'] != '99' ||  $data['picture'] != ''):
     ?>	 
	  <div class="itemImageBlock">
	    <span class="itemImage">
		<img src="images/blog/<?php echo $data['picture']; ?>" alt="All rights reserved by TTME-PSU" style="width:800px; height:auto;" />
	     </span>
		  <div class="clr"></div>
	  </div>
	  <?php  endif; ?>
	  
	  	  	  <!-- Item fulltext -->
	  <div class="itemFullText">
	  	
      <?php echo $data["content"]; ?>

      </div>
	  	  
		<div class="clr"></div>

	  
  <!-- Plugins: AfterDisplayContent -->	  
 <!-- K2 Plugins: K2AfterDisplayContent -->
</div>
      <div class="itemContentFooter">
		<!-- Item Hits -->
		<span class="itemHits">Read <b>999</b> times</span>
			
		<!-- Item date modified -->
		<span class="itemDateModified">Last modified on Thursday, 06 June 2013 07:18</span>
			
		<div class="clr"></div>
      </div>
      <div class="itemLinks">

<!-- Item tags -->
	  <div class="itemTagsBlock">
		  <span>Tagged under</span>
		 
		  <ul class="itemTags">
		       <?php
		          $tags =  explode(">",$data["tags"]);
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
		<div class="itemGooglePlusOneButton" >
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
				  js.src = "//connect.facebook.net/th_TH/all.js#xfbml=1";
				  fjs.parentNode.insertBefore(js, fjs);
				}(document, 'script', 'facebook-jssdk'));
			</script>
			    <div class="fb-like" data-href="http://www.ttmed.psu.ac.th/blog.php?p=<?php echo $_GET["p"];?>" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
		</div>
		
		<div class="clr"></div>
	</div>
	
<a name="itemCommentsAnchor" id="itemCommentsAnchor"></a>
<div class="itemComments">
<!-- Item comments form -->
<div class="itemCommentsForm">	  	
<h3>Leave a comment</h3>
<p class="itemCommentsFormNotes">
		*ร่วมแสดงความคิดเห็นอย่างสร้างสรรค์	</p>          
     <!-- Facebook Comment -->
	</div>
	<div class="fb-comments" data-href="http://www.ttmed.psu.ac.th/blog.php?p=<?php echo $_GET["p"];?>" data-width="470"></div>
	
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

<!-- SIDEBAR 1 -->
<div class="t3-sidebar t3-sidebar-1 span3 t3respon" data-default="span3" data-xtablet="span4" data-tablet="span12">
<div class="t3-module module  no-padding " id="Mod45">
<div class="module-inner">
<h3 class="module-title "><span>ประเภทบทความ</span></h3><div class="module-ct">
<ul class="nav ">
<li class="item-435"><a href="articles.php" >บทความทั่วไป</a></li>
<li class="item-233 active parent"><a href="articles.php" >บทความงานวิจัย</a></li>
<li class="item-238 parent"><a href="articles.php" >บทความทางเวชกรรมไทย</a></li>
<li class="item-489"><a href="articles.php" >บทความทางเภสัชกรรมไทย</a></li>
<li class="item-532"><a href="articles.php" >บทความทางผดุงครรภ์ไทย</a></li>
<li class="item-491"><a href="articles.php" >บทความทางนวดไทย</a></li>
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
