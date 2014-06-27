<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en" dir="ltr">

<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title><?php echo  $pageTitle != '' ?  $pageTitle : 'หน้าหลัก'  ; ?> : คณะการแพทย์แผนไทย มหาวิทยาลัยสงขลานครินทร์</title>
  <link href="images/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
  
  <link rel="stylesheet" href="css/css-585ba.css" type="text/css" /> 
  <link rel="stylesheet" href="css/css-17550.css" type="text/css" /> 
 
  <script src="js/mootools-core.js" type="text/javascript"></script>
  <script src="js/core.js" type="text/javascript"></script>
  
  <script src="js/jquery-1.10.2.min.js" type="text/javascript"></script>
  <script src="js/k2.js" type="text/javascript"></script> 
   
  <script src="js/caption.js" type="text/javascript"></script>
  <script src="js/bootstrap.js" type="text/javascript"></script>
  <script src="js/off-canvas.js" type="text/javascript"></script>
  <script src="js/script.js" type="text/javascript"></script>
  <script src="js/menu.js" type="text/javascript"></script>
  <script src="js/responsive.js" type="text/javascript"></script>
  <script src="js/jquery.easing.1.3.js" type="text/javascript"></script>
  
  <script src="js/script2.js" type="text/javascript"></script> 
  <script src="js/jquery.equalheight.js" type="text/javascript"></script>
  <script src="js/mootools-more.js" type="text/javascript"></script>
  
  <script src="js/engine.jquery.js" type="text/javascript"></script>
  <script src="js/engine.js" type="text/javascript"></script>
  
  <script src="js/jquery.cookie.js" type="text/javascript"></script>
  <script src="js/myscript.js" type="text/javascript"></script>
  
  <script type="text/javascript">
      window.addEvent('load', function() {
	            new JCaption('img.caption');
      });
      try {$Gavick;}
      catch(e){$Gavick = {};};
      
	  $Gavick["gkIs-gk-is-209"] = { 
	  "width": 825, 
	  "height": 425, 
	  "anim_speed": 500, 
	  "anim_interval": 5000, 
	  "autoanim": 1, 
	  "anim_type": 
	  "opacity", 
	  "slide_links": 1, 
	  "thumbs_amount": 3, 
	  "thumbs_space": 1 
	  };
  </script>
  

  
<!-- META FOR IOS & HANDHELD -->
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<meta name="HandheldFriendly" content="true" />
<meta name="apple-mobile-web-app-capable" content="YES" />
<!-- //META FOR IOS & HANDHELD -->


<!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
<script src="js/html5.js"></script>
<![endif]-->

<!-- For IE6-8 support of media query -->
<!--[if lt IE 9]>
<script type="text/javascript" src="js/respond.min.js"></script>
<![endif]-->

<!-- You can add Google Analytics here-->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-12894451-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>

<body>
<!-- HEADER -->
<header id="t3-header" class="wrap t3-header">
  <div class="container">
  	<div class="row">

      <!-- LOGO -->
      <div class="span6 logo">
        <div class="logo-image">
          <h1>
            <a href="http://www.ttmed.psu.ac.th" title="คณะการแพทย์แผนไทย">
              <span> คณะการแพทย์แผนไทย มอ.</span>
            </a>
            <small class="site-slogan hidden-phone"></small>
          </h1>
        </div>
      </div>
      <!-- //LOGO -->

<!-- HEAD SEARCH -->
 <div class="span6 top-header pull-right">     
    <div class="custom">
	<ul>
	    <li><i class="icon-signin"> </i>ผู้สนใจศึกษาต่อ</li>
	    <li><i class="icon-pencil"></i>อาจารย์</li>
            <li><i class="icon-book"></i>นักศึกษา</li>
            <li><i class="icon-cogs"></i>บุคลากร</li>
       </ul>
    </div>
 <form class="form-search" action="index.php" method="post">
     <div class="search">
	<label for="mod-search-searchword">Search...</label>
        <input name="searchword" id="mod-search-searchword" maxlength="20"  class="input" type="text" size="20" placeholder="Type Your Keywords" />       <button class="button btn btn-primary" onclick="this.form.searchword.focus();">Search</button>	
        <input type="hidden" name="task" value="search" />
	<input type="hidden" name="option" value="com_search" />
	<input type="hidden" name="Itemid" value="435" />
      </div>
 </form>
</div>
<!-- //HEAD SEARCH -->
      
    </div>
  </div>
</header>
<!-- //HEADER -->

<!-- MAIN NAVIGATION -->
<?php
include("menu.php");
?>
<!-- //MAIN NAVIGATION -->  


