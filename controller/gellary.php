<?php

require(dirname(dirname(__FILE__))."/model/gellary_model.php");
require_once(dirname(dirname(__FILE__))."/config/function.php");
 

function gellary_widget() 
{
        $e = new Gellary_Model();
	$data = $e->get_gellery();
        $i = 1;       
     
        $html = '<div class="t3-module module portfolio">';
	$html .= '<div class="module-inner"><h3 class="module-title "><span>Lastest Gellary</span></h3>';
	$html .= '<div class="module-ct">';
	$html .= '<div class="nspMain  portfolio" id="nsp-nsp-207" data-config="{';
	$html .= "'animation_speed': 400,'animation_interval': 5000,'animation_function': 'Fx.Transitions.Expo.easeIn','news_column': 3,'news_rows': 2,'links_columns_amount': 1,'links_amount': 3";
	$html .= '}">';
	$html .= '<div class="nspArts bottom" style="width:100%;">';
	$html .= '<div class="nspArtScroll1">';
	$html .= '<div class="nspArtScroll2 nspPages1">';
	$html .= '<div class="nspArtPage active nspCol1">';

     while($row = mysql_fetch_array($data)) {
         if($i == 1 || $i == 4) $html .= '<div class="nspArt nspCol3" style="padding:0;clear:both;">';
         else $html .= '<div class="nspArt nspCol3" style="padding:0;">';
	
 	 $html .= '<h4 class="nspHeader tleft fnull">';
	 $html .= '<a href="'.$row["link"].'" title="'.$row["title"].'" target="_blank">'.substr_utf8($row["title"],0,30).'&hellip;</a></h4>';
         $html .= '<a href="'.$row["link"].'"  target="_blank" class="nspImageWrapper tleft fleft gkResponsive" style="margin:0 0 1px 1px ;">';
         $html .= '<img class="nspImage tleft fleft gkResponsive" src="images/gallery/'.$row["photo"].'"/></a>';
         $html .= '</div>';
        
	 $i++; 
      }

       $html .= '</div></div></div></div> </div></div></div></div>';
       return $html;
}

?>


 
               
               
               
             
           



          
          	
         
           
          
          
          










	
			

