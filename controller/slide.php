<?php

require(dirname(dirname(__FILE__))."/model/slide_model.php");

 
function slideshow_big_picture() 
{
        $e = new Slide_Model();
	$data = $e->get_slideshow();

        $html = '<div class="gkIsImageWrap">';
        $html .= '<div class="gkIsImage" style="width: 825px;height: 425px;">';
        $i = 1;
	while($row = mysql_fetch_array($data)) {
          $html .= '<div class="gkIsSlide" style="z-index: '.$i.';">';
		  $picture = ($row['picture'] != '' ? $row["picture"] : $row["blogid"].".jpg");
          $html .= '<a href="../images/blog/'.$picture.'">src</a>';
          $html .= '<a href="blog.php?p='.$row["blogid"].'">link</a></div>';
        
          $i++;
	}
        $html .= ' </div></div>';
        return $html;
}

function slideshow_detail() 
{
        $e = new Slide_Model();
	$data = $e->get_slideshow();

        $html = '<div class="gkIsThumbsSlider2">';
  
	while($row = mysql_fetch_array($data)) {
          $html .= '<div class="gkIsThumb" style=margin-top:1px;">';
		   $picture = ($row['picture'] != '' ? $row["picture"] : $row["blogid"].".jpg");
          $html .= '<img src="../images/blog/thumb'.$picture.'" class="gkIsThumb" alt="'.$row["title"].'" style="margin:6px 15px 5px 0;border-width:px;" />';
          $html .= '<h4>'.substr_utf8($row["title"],0,30).'&hellip;</h4>';
          $html .= '<p>เผยแพร่เมื่อ '.thai_date_mini(strtotime($row["pubtime"])).'</p>';
          $html .= '<div class="gkClear"></div></div>';
	}
        $html .= ' </div>';
        return $html;
}

?>








	
			

