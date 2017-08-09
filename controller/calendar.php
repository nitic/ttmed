<?php

//$html .= ' <iframe src="https://calendar.google.com/calendar/embed?title=%20&amp;height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=ttmed.psu%40gmail.com&amp;color=%2329527A&amp;src=th.th%23holiday%40group.v.calendar.google.com&amp;color=%23A32929&amp;ctz=Asia%2FBangkok" style="border-width:0" width="560" height="500" frameborder="0" scrolling="no"></iframe>';

function calendar_widget() 
{
      
    $html = '<div class="t3-module module portfolio">';
	$html .= '<div class="module-inner"><h3 class="module-title "><span>Event</span></h3>';
	$html .= '<div class="module-ct">';

	$html .= '<div class="nspArtPage active nspCol1">';
	$html .= '<div class="googleCalendar">';
	$html .= ' <iframe src="https://calendar.google.com/calendar/embed?showTitle=0&amp;height=600&amp;wkst=1&amp;hl=th&amp;bgcolor=%23FFFFFF&amp;src=ttmed.psu%40gmail.com&amp;color=%232952A3&amp;src=480d3qlliohg6gc00jtc13tudo%40group.calendar.google.com&amp;color=%23711616&amp;ctz=Asia%2FBangkok" style="border-width:0" width="560" height="500" frameborder="0" scrolling="no"></iframe>';
    $html .= '</div>';  	 
    $html .= '<h4 style="text-align: center;"><a href="calendar.php" target="_blank">ดูกิจกรรมทั้งหมด</a></h4>';
    $html .= '</div></div></div></div>';
	   
	   
       return $html;
}

?>


 
               
               
               
             
           



          
          	
         
           
          
          
          










	
			

