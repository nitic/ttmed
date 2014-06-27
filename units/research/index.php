<?php
 require_once("../document.php");
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
<![endif]-->


<style type="text/css" >
body.normalpage #page {background:url(images/normalheader.jpg) center top no-repeat; height:255px;}
body.normalpage {background:url(images/normalhtml.jpg) left top repeat-x;}
#pagefooter {background:url(images/footerbg.jpg) repeat-x; height:351px; width:100%; padding-top:11px;}
</style>

</head>
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
<p>
- ทุนโครงการพัฒนาอาจารย์เพื่อการรับอาจารย์วุฒิปริญญาเอก (Ready Made) <a href="https://drive.google.com/file/d/0B5WWizgbgU2ubnEwWTk5VHF4d0k/edit?usp=sharing" target="_blank">คลิก</a> <img src="/units/images/new.gif"  >
</p>
<p>
-ประชาสัมพันธ์ทุนวิจัยจากเงินรายได้มหาวิทยาลัยสงขลานครินทร์  ประจำปีงบประมาณ 2556 จำนวน 12 ประเภททุน ผู้สนใจสามารถดูรายละเอียดได้ที่  <a href="http://rdo.psu.ac.th/index.php/funding/internal/revenues" target="_blank">http://rdo.psu.ac.th/index.php/funding/internal/revenues</a>
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

<blockquote>
<p><a href="https://drive.google.com/folderview?id=0B5WWizgbgU2ua0VQTUZTODhrZVE&usp=sharing" target="_blank">Journal Club</a></p>
<cite>TTMed's Journal Club</cite>
</blockquote>

<blockquote>
<p><a href="https://drive.google.com/folderview?id=0B5WWizgbgU2uR0RiNENDam9ZQk0&usp=sharing" target="_blank">แบบฟอร์มบัณฑิตศึกษา</a></p>
<cite>ดาว์โหลดแบบฟอร์มต่างๆ สำหรับบัณฑิต</cite>
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
  <img src="/images/staff/support/arinee-s.jpg" width="65" height="65" alt="team">
  </div>
  <div class="imgthmb">
  <img src="/images/staff/support/santi-s.jpg" width="65" height="65" alt="team">
  </div>
  
</div>
</div>
<div class="block2">
<h2>ที่ตั้ง</h2>
<p>งานวิจัยและบัณฑิตศึกษา คณะการแพทย์แผนไทย</p>
<p>อาคารคณะการจัดการสิ่งแวดล้อม ชั้น 8 </p>
<p>มหาวิทยาลัยสงขลานครินทร์ </p>
<p>15 ถ.กาญจนวณิชย์ </p>
<p>อ.หาดใหญ่ จ.สงขลา 90110</p>

</div>
<div class="block3">

<h2>ติดต่อ</h2>
<p>นางสาวอารินี กิตติบุญญาทิวากร</p>
<p>อีเมล์: arinee.k@psu.ac.th</p>
<p>โทรศัพท์: 0 7428 2702</p>
<p>โทรสาร: 0 7428 2709</p>
<p>&nbsp;</p>
<p>นายสันติ แซ่เต็ง</p>
<p>อีเมล์: santi.sa@psu.ac.th</p>
<p>โทรศัพท์: 0 7428 2707</p>
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
