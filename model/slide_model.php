<?php
include_once(dirname(dirname(__FILE__))."/config/database.php");

class Slide_Model{
	
        function __construct() {
		$this->dba = new Database();
	}
	
	function get_all_slide(){
		$Field = "id, blog_id, ordering";
		$Table = "slideshow";
		return $this->dba->Selected($Field,$Table);
	}

	function get_slideshow(){
		$Field = "blogs.blogid, blogs.title, blogs.pubtime, blogs.picture";
		$Table = "slideshow join blogs on blogs.blogid = slideshow.blog_id ORDER BY slideshow.ordering LIMIT 0, 5";
		return $this->dba->Selected($Field,$Table);
	}
	
	function __destruct() {
		unset($this->dba);
	}
}

?>
