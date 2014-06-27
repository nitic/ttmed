<?php
 require_once("../document.php");
?>
<!doctype html>
<html lang="th-TH">
<head>
<meta charset="UTF-8" />
<title>งานการสอบใบประกอบโรคศิลปะ :: คณะการเเพทย์แผนไทย มหาวิทยาลัยสงขลานครินทร์</title>
 <link href="../style.css" rel="stylesheet" type="text/css" />
 <!--[if IE]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<!--[if IE 6]>
<script src="../js/belatedPNG.js"></script>
<script>
	DD_belatedPNG.fix('*');
</script>
<![endif]-->


<style type="text/css" >
body.normalpage #page {background:url(images/normalheader.jpg) center top no-repeat; height:255px;}
body.normalpage {background:url(images/normalhtml.jpg) left top repeat-x;}
#pagefooter {background:url(images/footerbg.jpg) repeat-x; height:351px; width:100%; padding-top:11px;}
#bottom .block2 p{font-size:12px; color:#fff; }
#bottom .block3 p{font-size:13px; color:#fff; }
</style>

</head>
<body class="normalpage">
<section id="page">
<div id="bodywrap">
<section id="top">
<nav>
<h1 id="sitename">
  งานการสอบใบประกอบโรคศิลปะ </h1>
  
</nav>
<header id="normalheader"></header>
</section>
<section id="contentwrap">
<div id="contents" class="normalcontents"><section id="normalpage">

 <!-- //////////////////////////////////////////////////////////  left content  /////////////////////////////////////////////////////////////////////////  --->
<section id="left">

<article>

<?php

 $e = new document();
                $data = $e->get_section_by_categoryID(4);
			    while($row = mysql_fetch_array($data)) {
					
				    echo '<h3>'.$row["sec_name"].'</h3>';
					echo '<ul>';
					
					$data2 = $e->get_files_by_sectionID($row["id"]);
			        while($row2 = mysql_fetch_array($data2)) {
					  echo '<li><a href="'.$row2["link_google_doc"].'" target="_blank" >'.$row2["title"].'</a></li>';
					}
					echo '</ul>';
					
				} 
?>

</article>


</section>

 <!-- //////////////////////////////////////////////////////////  sidebar  /////////////////////////////////////////////////////////////////////////  --->
<section id="sidebar">
<h2>ลิงค์ที่เกี่ยวข้อง</h2>
<article class="testimonials">

<blockquote>
<p><a href="http://mrd.hss.moph.go.th/home.jsp" target="_blank">สพรศ.</a></p>
<cite>สำนักสถานพยาบาลและการประกอบโรคศิลปะ  กรมสนับสนุนบริการสุขภาพ</cite>
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
  <img src="/images/staff/support/piyaporn-s.jpg" width="65" height="65" alt="team"></div>
</div>
</div>
<div class="block2">
<h2>ที่ตั้ง</h2>
<p>งานสอบใบประกอบโรคศิลปะ คณะการแพทย์แผนไทย</p>
<p>อาคารคณะการจัดการสิ่งแวดล้อม ชั้น 8 </p>
<p>มหาวิทยาลัยสงขลานครินทร์ </p>
<p>15 ถ.กาญจนวณิชย์ </p>
<p>อ.หาดใหญ่ จ.สงขลา 90110</p>

</div>
<div class="block3">

<h2>ติดต่อ</h2>
<p>นางสาวปิยะพร สิงห์มหาศักดิ์</p>
<p>อีเมล์: piyaporn.si@psu.ac.th</p>
<p>โทรศัพท์: 0 7428 2702</p>
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
