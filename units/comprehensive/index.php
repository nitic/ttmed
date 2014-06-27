<?php
 require_once("../document.php");
?>
<!doctype html>
<html lang="th-TH">
<head>
<meta charset="UTF-8" />
<title>งานการสอบประมวลความรอบรู้  :: คณะการเเพทย์แผนไทย มหาวิทยาลัยสงขลานครินทร์</title>
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
  งานการสอบประมวลความรอบรู้  </h1>
  
</nav>
<header id="normalheader"></header>
</section>
<section id="contentwrap">
<div id="contents" class="normalcontents"><section id="normalpage">

 <!-- //////////////////////////////////////////////////////////  left content  /////////////////////////////////////////////////////////////////////////  --->
<section id="left">

<h2>ข่าวประชาสัมพันธ์</h2>
<article>
<p>
   - <a href = "https://docs.google.com/file/d/0B5WWizgbgU2uNGc2a3JhSHBvTFE/edit?usp=sharing" target="_blank">รายชื่อสอบวันที่ 9 มี.ค. 56.pdf</> <img src="../images/new.gif" border="0" />
</p>
<p>
   - <a href = "https://docs.google.com/file/d/0B5WWizgbgU2uY0tDTnF4MUVLamM/edit?usp=sharing" target="_blank">รายชื่อสอบวันที่ 10 มี.ค. 56.pdf</> <img src="../images/new.gif" border="0" />
</p>

<?php

 $e = new document();
                $data = $e->get_section_by_categoryID(7);
			    while($row = mysql_fetch_array($data)) {
					
				    echo '<h3>'.$row["sec_name"].'</h3>';
					echo '<ul>';
					
					$data2 = $e->get_files_by_sectionID($row["id"]);
			        while($row2 = mysql_fetch_array($data2)) {
					  if($e->DateDiff($row2["pubdate"]) < 7)
						   $new = '&nbsp;&nbsp;<img src="../images/new.gif" border="0" />';
					  else $new = "";
					
					  echo '<li><a href="'.$row2["link_google_doc"].'" target="_blank" >'.$row2["title"].'</a>'.$new.'</li>';
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

 <!--
<blockquote>
<p><a href="http://www.ttmed.psu.ac.th/research/" target="_blank">ระบบค้นหางานวิจัย</a></p>
<cite>ฐานข้อมูลโครงงานและงานวิจัย</cite>
</blockquote>
 --->


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
  <img src="/images/staff/support/sujittra-s.jpg" width="65" height="65" alt="team"></div>
</div>
</div>
<div class="block2">
<h2>ที่ตั้ง</h2>
<p>งานสอบประมวลความรอบรู้  คณะการแพทย์แผนไทย</p>
<p>อาคารคณะการจัดการสิ่งแวดล้อม ชั้น 8 </p>
<p>มหาวิทยาลัยสงขลานครินทร์ </p>
<p>15 ถ.กาญจนวณิชย์ </p>
<p>อ.หาดใหญ่ จ.สงขลา 90110</p>

</div>
<div class="block3">

<h2>ติดต่อ</h2>
<p>นางสาวสุจิตรา หนูอุไร</p>
<p>อีเมล์: sujittra.n@psu.ac.th</p>
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
