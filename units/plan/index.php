<?php
 require_once("../document.php");
 
?>
<!doctype html>
<html lang="th-TH">
<head>
<meta charset="UTF-8" />
<title>งานนโยบายและแผน :: คณะการเเพทย์แผนไทย มหาวิทยาลัยสงขลานครินทร์</title>

<link href="../style.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="../jquery.treeview.css" />
<style type="text/css" >
body.normalpage #page {background:url(images/normalheader.jpg) center top no-repeat; height:255px;}
body.normalpage {background:url(images/normalhtml.jpg) left top repeat-x;}
#pagefooter {background:url(images/footerbg.jpg) repeat-x; height:351px; width:100%; padding-top:11px;}
#bottom .block2 p{font-size:12px; color:#fff; }
#bottom .block3 p{font-size:13px; color:#fff; }
</style>

<script src="../js/jquery-1.4.min.js" type="text/javascript"></script>
<script src="../js/jquery.cookie.js" type="text/javascript"></script>
<script src="../js/jquery.treeview.js" type="text/javascript"></script>
	
<script type="text/javascript" src="../js/pre-load-treeview.js"></script>

 <!--[if IE]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<!--[if IE 6]>
<script src="../js/belatedPNG.js"></script>
<script>
	DD_belatedPNG.fix('*');
</script>
<![endif]-->


</head>

<body class="normalpage">
<section id="page">
<div id="bodywrap">
<section id="top">
<nav>
<h1 id="sitename">งานนโยบายและแผน </h1>
  
</nav>
<header id="normalheader"></header>
</section>
<section id="contentwrap">
<div id="contents" class="normalcontents"><section id="normalpage">

 <!-- //////////////////////////////////////////////////////////  left content  /////////////////////////////////////////////////////////////////////////  --->
 
 
 
<section id="left-tree">

<h2>แผนยุทธศาสตร์และแผนปฏิบัติการ</h2>
<article>

<div id="tree">
<ul id="browser" class="filetree">
<?php

 $e = new document();
                $data = $e->get_section_by_categoryID(3);
			    while($row = mysql_fetch_array($data)) {
					
				    echo '<li><span class="folder">'.$row["sec_name"].'</span>';
					echo '<ul>';
					
					$data2 = $e->get_files_by_sectionID($row["id"]);
			        while($row2 = mysql_fetch_array($data2)) {
					   if($row2["type"] == 'Folder'){
					        echo $e->make_folder($row2["id"],$row2["title"]);
					   }
					   else{
					          echo '<li><span class="file '.substr($row2["type"], 5).'"><a href="'.$row2["link_google_doc"].'" target="_blank">'.$row2["title"].'</a></span></li>';
					   }
					}
					echo '</ul></li>';
					
				} 
?>
</ul>
</div>
</article>
</section>

 <!-- //////////////////////////////////////////////////////////  sidebar  /////////////////////////////////////////////////////////////////////////  --->
<section id="sidebar">
<h2>ลิงค์ที่เกี่ยวข้อง</h2>
<article class="testimonials">

<blockquote>
<p><a href="http://www.planning.psu.ac.th/" target="_blank">กองแผนงาน</a></p>
<cite>กองแผนงาน สำนักงานอธิการบดี มหาวิทยาลัยสงขลานครินทร์</cite>
</blockquote>


</article>
</section>
<div class="clear"></div>
</section>
</div>
</section>
</div>

 <!-- //////////////////////////////////////////////////////////  footer  /////////////////////////////////////////////////////////////////////////  --->
<footer id="pagefooter">
<div id="bottom">
<div class="block1">
<h2>เจ้าหน้าที่ฝ่ายงาน</h2>

<div class="teamimg">


<div class="imgthmb">
  <img src="/images/staff/support/ussanee-s.jpg" width="65" height="65" alt="team"></div>
</div>
</div>
<div class="block2">
<h2>ที่ตั้ง</h2>
<p>งานนโยบายและแผน คณะการแพทย์แผนไทย</p>
<p>อาคารคณะการจัดการสิ่งแวดล้อม ชั้น 8 </p>
<p>มหาวิทยาลัยสงขลานครินทร์ </p>
<p>15 ถ.กาญจนวณิชย์ </p>
<p>อ.หาดใหญ่ จ.สงขลา 90110</p>
</div>
<div class="block3">

<h2>ติดต่อ</h2>
<p>นางสาวอุษณีย์ ชนะวรรโณ</p>
<p>อีเมล์: ussanee.c@psu.ac.th</p>
<p>โทรศัพท์: 0 7428 2701</p>
<p>โทรสาร: 0 7428 2709</p>

</div>
<div class="clear"></div>
</div>
<div id="credits">
<p>
<span class="copyright">
&copy; 2013 |  All Rights Reserved | คณะการแพทย์แผนไทย มหาวิทยาลัยสงขลานครินทร์</span>
<span id="designcredit">
<!--Creative Common Non-Commercial, Attribution License
Designed by : Roshan Ravi
Author URI : cssheaven.org
Do Not Remove this Credits and Link back to CSSHeaven from the template-->
<a href="http://cssheaven.org" title="Free CSS Website Template by CSSHeaven">Website Template</a>
<!--Design Credits--> by CSSHeaven.org </span>
</p>
</div>
</footer>

</section>
</body>
</html>
