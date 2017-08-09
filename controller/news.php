<?php

require(dirname( dirname( __FILE__ ) ) ."/model/news_model.php");
require( dirname( dirname( __FILE__ ) )."/config/function.php");
 
function latest_news_post() 
{
    $e = new News_model();
	$data = $e->get_latest_news();
	$i = 1;
	$type = array("None","ข่าวประชาสัมพันธ์","ข่าวสำหรับนักศึกษา","ข่าวรับสมัครงาน","ข่าวจัดซื้อจัดจ้าง");
	$icons = array("None","icon-comments-alt","icon-group","icon-signin","icon-briefcase");
	while($row = mysql_fetch_array($data)) {
		if(DateDiff($row["pubdate"]) < 7)
			   $icon = ' <img src="images/icon-new.gif" border="0" />';
		else $icon = "";
		
		if($i == 1)  $html  .=  '<div class="nspArtPage active nspCol3">';
		elseif($i == 4 || $i == 7)  $html  .=  '<div class="nspArtPage nspCol3">';
		
		$html  .=  '<div class="nspArt nspCol1" style="padding:18px 25px;">';
		$html  .=  '<a href="#" class="nspImageWrapper tleft fleft" style="margin:3px 15px 0 0;">';
		//$html  .=  '<img class="nspImage tleft fleft" src="images/system/'.$row["type"].'.png" alt="" style="width:90px;height:70px"/></a>';
		$html  .=  '<div style="width:90px;height:90px; font-size: 80px; text-align: center"><i class="'.$icons[$row["type"]].'"></i></div>';
		$html  .=  '<h4 class="nspHeader tleft fnull">';
		$html  .=  '<a  href="'.$row["link"].'" target="_blank">'.$row["detail"].'&hellip;</a>'.$icon.'</h4>';
		$html  .=  '<div class="gkArtContentWrap">';
		$html  .=  '<p class="nspInfo nspInfo1 tleft fnone">ประเภทข่าว:';
		$html  .=  ' <a href="#" >'.$type[$row["type"]].'</a>'.date("d-m-Y", strtotime($row["pubdate"])).'</p>';
		$html  .=  '</div></div>';
		
		if($i == 3 || $i == 6 || $i == 9)  $html  .=  '</div>';
		
		$i++;
	}
	return $html;
}


function annuosments($type) 
{
    $e = new News_model();
	$data = $e->get_news_by_type($type);
	while($row = mysql_fetch_array($data)) {
		if(DateDiff($row["pubdate"]) < 7)
			   $icon = ' <img src="images/icon-new.gif" border="0" />';
		else $icon = "";
		
       $html  .=  '<li>[ '.date("d-m-Y", strtotime($row["pubdate"])).' ] ';
	   $html  .=  '<a  href="'.$row["link"].'" target="_blank">'.$row["detail"].'&hellip;</a>'.$icon.'</h4></li>';
       
	}
	return $html;
}

?>


        
	    
          
    