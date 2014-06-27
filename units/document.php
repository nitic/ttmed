<?php
include_once("../../DbAcess.php");
class document {
	function document(){
		$this->dba = new DbAcess();
	}
	////////////////////////////////////////////////////////
	function get_all_files(){
		$Field = " `id`, `title`, `link_google_doc`, `type`, `categories`, `section`, `pubdate`";
		$Table = "document_files";
		return $this->dba->Selected($Field,$Table);
	}
	////////////////////////////////////////////////////////
	function get_section_by_categoryID($cat_id){
		$Field = "`id`, `sec_name`";
		$Table = "document_section";
		$Condition = "fk_category_id = ".$cat_id ." ORDER BY id";
		return $this->dba->SelectRecords($Field,$Table,$Condition);
	}
	
	///////////////////////////////////////////////////////////
	function get_files_by_sectionID($section_id){
		$Field = "document_files.id, document_files.title, document_files.link_google_doc, document_files.type, document_files.pubdate";
		$Table = "document_files LEFT JOIN document_section ON document_files.section = document_section.id";
		$Condition = "document_section.id = ".$section_id ." AND document_files.visible = '1' ORDER BY document_files.title";
		return $this->dba->SelectRecords($Field,$Table,$Condition);
	}
	
	////////////////////////////////////////////////////////
	function get_child_by_folderID($folder_id){
		$Field = "id, title, link_google_doc, type, pubdate";
		$Table = "document_files";
		$Condition = "section = ".$folder_id ." ORDER BY title";
		return $this->dba->SelectRecords($Field,$Table,$Condition);
	}
	
	
	////////////////////////////////////////////////////////
	 function make_folder($id,$title){
        $html = '<li class="closed"><span class="folder">'.$title.'</span>';
		$html .= '<ul id="'.$id.'">';
		$data = $this->get_child_by_folderID($id);
				 while($row = mysql_fetch_array($data)) {
				        if($row["type"] == 'Folder'){
						       $html .= $this->make_folder($row["id"],$row["title"]);
						}
						else{
						   $html .= '<li><span class="file '.substr($row["type"], 5).'"><a href="'.$row["link_google_doc"].'" target="_blank">'.$row["title"].'</a></span></li>';
						}
				  }
		$html .= '</ul></li>';
       return $html;
 }
	
	
//////////////////////////////////////////////////////////
 function DateDiff($strDate)
	 {
		  return (strtotime(date("Y-m-d")) - strtotime($strDate))/  ( 60 * 60 * 24 );  // 1 day = 60*60*24
	 }
	///////////////////////////////////////////////////////////
	
	function insert_point($Value){
		$Table = "point";
		$Field = "stampdate,form_fk,sex,status,pointSerialize,pointTotal,comment";
		if($this->dba->InsertRecord($Table,$Field,$Value)){
			return true;
		}else{
			return false;
		}
	}
	
///////////////////////////////////////////////////////////////////////////
	function __destruct() {
		unset($this->dba);
	}
}

?>
