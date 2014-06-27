<?php

function masscol_widget() 
{
       
        $data[1] = array('พ.ผ.ท. : พัฒนาวิชาการ - ผลิตงานมาตรฐาน - ทำงานอย่างมืออาชีพ','ค่านิยมคณะ');
	//$data[2] = array('','ฝ่ายสนันนุนวิชาการ');
       
        
        $html = '<div class="t3-module module -testimonial">';
	$html .= '<div class="module-inner">';
	$html .= '<div class="module-ct">';
	$html .= '<div class="nspMain autoanim -testimonial" id="nsp-nsp-206" data-config="{';
	$html .= "'animation_speed': 400,'animation_interval': 5000,'animation_function': 'Fx.Transitions.Expo.easeIn','news_column': 1,'news_rows': 1,'links_columns_amount': 1,'links_amount': 3";
	$html .= '}">';
	$html .= '<div class="nspArts bottom" style="width:100%;">';
	$html .= '<div class="nspArtScroll1">';
	$html .= '<div class="nspArtScroll2 nspPages3">';
  
      foreach($data as $key => $title ){
           
          if($key == 1) $html .= ' <div class="nspArtPage active nspCol3">';
          else $html .= '<div class="nspArtPage nspCol3">';
            
               $html .= '<div class="nspArt nspCol1" style="padding:0 0 0 0;">';
           foreach($title as $key2 => $item){  

               if($key2 == 0)
                   $html .= '<p class="nspText tleft fnull">'.$item.'</p>';
               else
                   $html .= '<h4 class="nspHeader tright fnull" title="Hugh Hufner">'.$item.'</h4>';
            }
               $html .= '</div></div>';
       }
    
      $html .= '</div></div></div></div></div></div></div>';
      return $html;
}

?>

			 
                
               
               
             
           



          
          	
         
           
          
          
          










	
			

