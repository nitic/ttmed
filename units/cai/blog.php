<?php
 require_once("document.php");
?>
<!doctype html>
<html lang="th-TH">
<head>
<meta charset="UTF-8" />
<title>งานวิจัยและบัณฑิตศึกษา :: คณะการเเพทย์แผนไทย มหาวิทยาลัยสงขลานครินทร์</title>
 <link href="../style.css" rel="stylesheet" type="text/css" />
 <!--[if IE]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<!--[if IE 6]>
<script src="../js/belatedPNG.js"></script>
<script>
	DD_belatedPNG.fix('*');
</script>
<![endif]--></head>

<body class="normalpage">
<section id="page">
<div id="bodywrap">
<section id="top">
<nav>
<h1 id="sitename">
  งานวิจัยและบัณฑิตศึกษา </h1>
  
</nav>
<header id="normalheader"></header>
</section>
<section id="contentwrap">
<div id="contents" class="normalcontents"><section id="normalpage">

 <!-- //////////////////////////////////////////////////////////  left content  /////////////////////////////////////////////////////////////////////////  --->
<section id="left">

<h2>ข่าวประชาสัมพันธ์</h2>
<article>
<p>- ดาว์โหลดโลโก้ 45 ปี <a href="/attachment/logo-psu-45.png" target="_blank">ไฟล์ PNG (คลิกขวา Save as...)</a>  / <a href="/attachment/psu45.psd" target="_blank">ไฟล์ Photoshop แบบแก้ไขได้ </a><img src="images/new.gif" alt="" />
</p>
<p>-ประชาสัมพันธ์ทุนวิจัยจากเงินรายได้มหาวิทยาลัยสงขลานครินทร์  ประจำปีงบประมาณ 2556 จำนวน 12 ประเภททุน ผู้สนใจสามารถดูรายละเอียดได้ที่  <a href="http://rdo.psu.ac.th/index.php/funding/internal/revenues" target="_blank">http://rdo.psu.ac.th/index.php/funding/internal/revenues</a>
</p>

<?php

 $e = new document();
                $data = $e->get_section_by_categoryID(1);
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
<p><a href="http://www.ttmed.psu.ac.th/research/" target="_blank">ระบบค้นหางานวิจัย</a></p>
<cite>ฐานข้อมูลโครงงานและงานวิจัย</cite>
</blockquote>

<blockquote>
<p><a href="http://rdo.psu.ac.th/" target="_blank">สำนักวิจัยและพัฒนา</a></p>
<cite>สำนักวิจัยและพัฒนา ม.สงขลานครินทร์</cite>
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
<h2>เจ้าหน้าที่ผู้รับผิดชอบ</h2>

<div class="teamimg">


<div class="imgthmb">
  <img src="/images/staff/support/arinee-s.jpg" width="65" height="65" alt="team"></div>
</div>
</div>
<div class="block2">
<h2>แผนที่</h2>
<div class="projectthmb"> <a href="portfolio"><img src="../images/latstproject.jpg" width="240" height="150" alt="project"></a></div>

</div>
<div class="block3">

<h2>ติดต่อ</h2>
<p>นางสาวอารินี กิตติบุญญาทิวากร</p>
<p>อีเมล์: arinee.k@psu.ac.th</p>
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
