<?php
require_once(dirname(dirname(__FILE__))."/model/article_model.php");
require_once(dirname(dirname(__FILE__))."/config/function.php");

 
function show_article($blogid) 
{
	$e = new Article_Model();
	$data = $e->get_article_by_id($blogid);
	 while($row = mysql_fetch_array($data)) {
            $result["title"] = $row["title"];
	        $result["content"] = $row["content"];
	        $result["pubtime"] = $row["pubtime"];
			$result["tags"] = $row["tags"];
			$result["picture"] = $row["picture"];
			$result["typeID"] = $row["typeID"];
			$result["category"] = $row["name"];
         }
       return $result;
}

function article_table($limit, $type) 
{
	$html = '';
	$e = new Article_Model();
	$data = $e->get_lists_pagination($limit, $type);
	 while($row = mysql_fetch_array($data)) {
		 
		 
            $html .= '<tr>';
			$html .= '<td>'.date("d/m/Y", strtotime($row["pubtime"])).'</td><td>';

			if ($row["category"] != 99) {
					$html .= '<img src="images/blog/'.$row["picture"].'" style="width:225px;height:125px;" ><br/>';
			}

			$html .= '<a style="color:#000" href="blog.php?p='.$row["blogid"].'">'.$row["title"].'</a> <i class="icon-external-link"></i></td>';
			
			switch($row["category"]){
				case 1 : $html .= '<td>ทั่วไป</td>'; 
						 break;
				case 2 : $html .= '<td>งานวิจัย</td>'; 
						 break;
				case 3 : $html .= '<td>เวชกรรมไทย</td>'; 
						 break;
				case 4 : $html .= '<td>เภสัชกรรมไทย</td>'; 
						 break;
				case 5 : $html .= '<td>ผดุงครรภ์ไทย</td>'; 
						 break;
				case 6 : $html .= '<td>นวดไทย</td>'; 
						 break;
				case 99 : $html .= '<td>ประชาสัมพันธ์</td>'; 
						 break;
				
			} 
			
			$html .= '</tr>';
         }
     return $html;
}

function count_article($type) 
{
	$result = 0;
	$e = new Article_Model();
	$data = $e->count_article($type);
	 while($row = mysql_fetch_array($data)) {
            $result = $row[0];
         }
     return $result;
}

function article_footer_list() 
{
	$html = "";
	$e = new Article_Model();
	$data = $e->get_lists_article();
	 while($row = mysql_fetch_array($data)) {
			 $html .= '<li><a href="blog.php?p='. $row["blogid"].'">'. $row["title"].'</a></li>';
         }
       return $html;
}

function article_widget() 
{
        $e = new Article_Model();
	$data = $e->get_relate_article();
        $i = 1;       
     
        $html = '<div class="t3-module module no-padding color">';
	$html .= '<div class="module-inner">';
	$html .= '<h3 class="module-title"><span>บทความล่าสุด</span></h3>';
	$html .= '<div class="module-ct">';
	$html .= '<div class="nspMain  no-padding color" id="nsp-nsp-212" data-config="{';
	$html .= "'animation_speed': 400,'animation_interval': 5000,'animation_function': 'Fx.Transitions.Expo.easeIn','news_column': 1,'news_rows': 3,'links_columns_amount': 1,'links_amount': 3";
	$html .= '}">';
	$html .= '<div class="nspArts bottom" style="width:100%;">';
	$html .= '<div class="nspTopInterface">';
	$html .= '<span class="nspPrev">Prev</span><span class="nspNext">Next</span></div>';
	$html .= '<div class="nspArtScroll1">';
	$html .= '<div class="nspArtScroll2 nspPages3">';

     while($row = mysql_fetch_array($data)) {
         if($i == 1) $html .= '<div class="nspArtPage active nspCol3">';
         elseif($i == 4 || $i == 7) $html .= '<div class="nspArtPage nspCol3">';
	
 	 $html .= '<div class="nspArt nspCol1" style="padding:18px 25px;">';
	 $html .= '<a href="blog.php?p='.$row["blogid"].'" class="nspImageWrapper tleft fleft" style="margin:3px 12px 0 0;">';
         $html .= '<img class="nspImage tleft fleft" src="images/blog/thumb'.$row["picture"].'" style="width:70px;height:65px;"/></a>';
         $html .= '<h4 class="nspHeader tleft fnull">';
         $html .= '<a href="blog.php?p='.$row["blogid"].'" title="'.$row["title"].'">'.substr_utf8($row["title"],0,30).'&hellip;</a></h4>';
         $html .= '<div class="gkArtContentWrap"><p class="nspInfo nspInfo1 tleft fnone">'.date("d-m-Y", strtotime($row["pubtime"]));
         $html .= '<a href="../../printing.html" >'.$row["name"].'</a></p></div></div>';

	 if($i == 3 || $i == 6 || $i == 9) $html .= '</div>';

	 $i++; 
      }

       $html .= '</div></div></div></div></div></div></div>';
       return $html;
}


?>