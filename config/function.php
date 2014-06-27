<?php
$thai_day_arr=array("อาทิตย์","จันทร์","อังคาร","พุธ","พฤหัสบดี","ศุกร์","เสาร์");
$thai_month_arr=array(
	"0"=>"",
	"1"=>"มกราคม",
	"2"=>"กุมภาพันธ์",
	"3"=>"มีนาคม",
	"4"=>"เมษายน",
	"5"=>"พฤษภาคม",
	"6"=>"มิถุนายน",	
	"7"=>"กรกฎาคม",
	"8"=>"สิงหาคม",
	"9"=>"กันยายน",
	"10"=>"ตุลาคม",
	"11"=>"พฤศจิกายน",
	"12"=>"ธันวาคม"					
);

$thai_month2_arr=array(
	"0"=>"",
	"1"=>"ม.ค.",
	"2"=>"ก.พ.",
	"3"=>"มี.ค.",
	"4"=>"เม.ย.",
	"5"=>"พ.ค.",
	"6"=>"มิ.ย.",	
	"7"=>"ก.ค.",
	"8"=>"ส.ค.",
	"9"=>"ก.ย.",
	"10"=>"ต.ค.",
	"11"=>"พ.ย.",
	"12"=>"ธ.ค."					
);

 function birthday($birthday)
  {
    list($year,$month,$day) = explode("-",$birthday);
    $year_diff  = date("Y") - $year;
    $month_diff = date("m") - $month;
    $day_diff   = date("d") - $day;
    if ($month_diff < 0) $year_diff--;
    elseif (($month_diff==0) && ($day_diff < 0)) $year_diff--;
    return $year_diff;
  }
  

// วันอังคารที่ 21 เดือนตุลาคม พ.ศ.2551 11:07 น.
function thai_date_full($time){
	global $thai_day_arr,$thai_month_arr;
	$thai_date_return="วัน".$thai_day_arr[date("w",$time)];
	$thai_date_return.=	"ที่ ".date("j",$time);
	$thai_date_return.=" เดือน".$thai_month_arr[date("n",$time)];
	$thai_date_return.=	" พ.ศ.".(date("Yํ",$time)+543);
	$thai_date_return.=	"  ".date("H:i",$time)." น.";
	return $thai_date_return;
}

// 21 ตุลาคม 2551 
function thai_date_normal($time){
	global $thai_month_arr;
	$thai_date_return.=	date("j",$time)." ";
	$thai_date_return.= $thai_month_arr[date("n",$time)];
	$thai_date_return.=	"  ".(date("Yํ",$time)+543);
	return $thai_date_return;
}

// 21 ต.ค 2551 
function thai_date_mini($time){
	global $thai_month2_arr;
	$thai_date_return.=	date("j",$time)." ";
	$thai_date_return.= $thai_month2_arr[date("n",$time)];
	$thai_date_return.=	" ".(date("Yํ",$time)+543);
	return $thai_date_return;
}

// 1/01/2013
function iso_date($date){
 $eng_date = date("d/m/Y", strtotime($date));
 return $eng_date;
}

// กำหนด $location เป็นตำแหน่งไฟล์หรือโฟลเดอร์  
function fulldelete($location) {   
    if (is_dir($location)) {   
        $currdir = opendir($location);   
        while ($file = readdir($currdir)) {   
            if ($file  <> ".." && $file  <> ".") {   
                $fullfile = $location."/".$file;   
                if (is_dir($fullfile)) {   
                    if (!fulldelete($fullfile)) {   
                        return false;   
                    }   
                } else {   
                    if (!unlink($fullfile)) {   
                        return false;   
                    }   
                }   
            }   
        }   
        closedir($currdir);   
        if (! rmdir($location)) {   
            return false;   
        }   
    } else {   
        if (!unlink($location)) {   
            return false;   
        }   
    }   
    return true;   
} 

//แก้ไขการตัดข้อความด้วย substrใน php แล้วมีรูปสี่เหลี่ยม
function substr_utf8( $str, $start_p , $len_p){
 return preg_replace( '#^(?:[\x00-\x7F]|[\xC0-\xFF][\x80-\xBF]+){0,'.$start_p.'}'.
  '((?:[\x00-\x7F]|[\xC0-\xFF][\x80-\xBF]+){0,'.$len_p.'}).*#s',
  '$1' , $str );
};

//////////////////////////////////////////////////////////
 function DateDiff($strDate)
	 {
		  return (strtotime(date("Y-m-d")) - strtotime($strDate))/  ( 60 * 60 * 24 );  // 1 day = 60*60*24
	 }
	
/////////////////////////////////////////////////////////////////////////////
	 
function chkBrowser($nameBroser){
	return preg_match("/".$nameBroser."/",$_SERVER['HTTP_USER_AGENT']);
}	 
?>