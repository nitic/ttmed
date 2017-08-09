<?php

require(dirname(dirname(__FILE__))."/model/gellary_model.php");
require_once(dirname(dirname(__FILE__))."/config/function.php");
 

function gellary_widget() 
{
    $e = new Gellary_Model();
	$data = $e->get_picture();
    $i = 1;       
    
    $html = '<div class="t3-module module portfolio">';
	$html .= '<div class="module-inner"><h3 class="module-title "><span>Lastest Gellary </span></h3>';
	$html .= '<div class="module-ct">';
	$html .= '<div class="nspMain  portfolio" id="nsp-nsp-207" data-config="{';
	$html .= "'animation_speed': 400,'animation_interval': 5000,'animation_function': 'Fx.Transitions.Expo.easeIn','news_column': 3,'news_rows': 2,'links_columns_amount': 1,'links_amount': 2";
	$html .= '}">';
	$html .= '<div class="nspArts bottom" style="width:100%;">';
	$html .= '<div class="nspArtScroll1">';
	$html .= '<div class="nspArtScroll2 nspPages1">';
	
	$html .= '<div class="nspArtPage active nspCol1">';
    $html .= '<h4>Pictures <a style="font-size:10pt; font-weight:100; text-decoration: underline;" href="https://picasaweb.google.com/117052859763469616076" target="_blank">(ดูทั้งหมด)</a></h4>';
     while($row = mysql_fetch_array($data)) {
         if($i == 1 || $i == 5) $html .= '<div class="nspArt nspCol21" style="padding:0;clear:both; padding-left:0">';
         else $html .= '<div class="nspArt nspCol21" style="padding:0;">';
	
 	 $html .= '<h4 class="nspHeader tleft fnull">';
	 $html .= '<a href="'.$row["link"].'" title="'.$row["title"].'" target="_blank">'.substr_utf8($row["title"],0,30).'&hellip;</a></h4>';
         $html .= '<a href="'.$row["link"].'"  target="_blank" class="nspImageWrapper tleft fleft gkResponsive" >';
         $html .= '<img class="nspImage tleft fleft gkResponsive" src="images/gallery/'.$row["photo"].'"/></a>';
         $html .= '</div>';
        
	 $i++;
      } 
	 $html .= '</div>';
	 
	 
	$data = $e->get_video();
    $i = 1;
	 $html .= '<div class="nspArtPage active nspCol1">';
     $html .= '<h4 style="margin-top:40px">Video <a style="font-size:10pt; font-weight:100; text-decoration: underline;" href="https://sites.google.com/a/psu.ac.th/ttmed-av/video/learning-video" target="_blank">(ดูทั้งหมด)</a></h4>';
		 while($row = mysql_fetch_array($data)) {
			 if($i == 1 || $i == 5) $html .= '<div class="nspArt nspCol21" style="padding:0;clear:both; padding-left:0">';
			 else $html .= '<div class="nspArt nspCol21" style="padding:0;">';
		
		 $html .= '<h4 class="nspHeader tleft fnull">';
		 $html .= '<a href="'.$row["link"].'" title="'.$row["title"].'" target="_blank">'.substr_utf8($row["title"],0,30).'&hellip;</a></h4>';
			 $html .= '<a href="'.$row["link"].'"  target="_blank" class="nspImageWrapper tleft fleft gkResponsive" >';
			 $html .= '<img class="nspImage tleft fleft gkResponsive" src="images/gallery/'.$row["photo"].'"/></a>';
			 $html .= '</div>';
			
		 $i++;
		  } 
	 $html .= '</div>';
	 
	 
     $html .= '</div></div></div> </div></div></div></div>';
	   
	   
       return $html;
}

?>


 
               
               
               
             
           



          
          	
         
           
          
          
          










	
			

