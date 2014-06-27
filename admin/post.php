<?php

include(dirname(dirname(__FILE__))."/model/news_model.php");
 
// Upload and Rename File
$allowed_types=array('.doc','.docx','.ppt','.pptx','.xls','.xlsx','.pdf','.txt','.bmp','.gif','.jpeg','.jpg','.jpe','.png','.zip','.rar');
$allowed_limit_size = 10240000; // ไฟล์ที่อับโหลดได้ 10 MB

if (isset($_POST['execute'])) {



$Detail = $_POST["detail"];
$TypeNews = $_POST["newsType"];
$Pubdate = date("Y-m-d");

if($_POST["linkrdo"] == 2){
	$Link = $_POST["linkURL"];
}
else{ 
$filename = $_FILES["file"]["name"];
$file_basename = substr($filename, 0, strripos($filename, '.')); // strip extention
$file_ext = strtolower(substr($filename, strripos($filename, '.'))); // strip name
$filesize = $_FILES["file"]["size"];
 
	if (in_array($file_ext,$allowed_types) &&  ($filesize < $allowed_limit_size)) {
		// rename file
		$newfilename = md5($file_basename) . $file_ext;
		  $Link = "../attachment/" . $newfilename;
		
		if (file_exists("../attachment/" . $newfilename)) {
			// file already exists error
			$error = "You have already submitted this file.";
		} else {
			move_uploaded_file($_FILES["file"]["tmp_name"], "../attachment/" . $newfilename);
			echo "File uploaded successfully.";
		}

	} elseif (empty($file_basename)) {
		// file type error
		$error = "Please select a file to upload.";
	} else {
		// file selection error
		$error = "Only doc, docx, rtf, pdf, txt, and all picture files can be submitted online.";
		unlink($_FILES["file"]["tmp_name"]);
	}
echo $error; 
}

$e = new News_model();
if($e->insert_news("'".$Detail."',".$TypeNews.",'".$Link."','".$Pubdate."'")){
  		 print '<META HTTP-EQUIV="Refresh" CONTENT="1;URL=form.php">';
}
else{
       print "Can't Insert";
	   exit;
}

}

?>