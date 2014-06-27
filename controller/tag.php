<?php

require(dirname(dirname(__FILE__))."/model/tag_model.php");
 
function tags_widget() 
{
        $e = new Tag_Model();
	$data = $e->get_tag();

        $html = '<div class="t3-module module">';
	$html .= '<div class="module-inner">';
	$html .= '<h3 class="module-title">';
	$html .= '<span>TTMed Tags</span></h3>';
	$html .= '<div class="module-ct">';
	$html .= '<div id="k2ModuleBox118" class="k2TagCloudBlock">';
	while($row = mysql_fetch_array($data)) {
          $html .= '<a href="tags.php?p='.$row["tagname"].'" style="font-size:85%" title="'.$row["tagcounter"].' items">'.$row["tagname"].'</a>';
	}
        $html .= '<div class="clr"></div>';
	$html .= '</div></div></div></div>';
        return $html;
}

?>








	
			

