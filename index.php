<?
if($_GET['ajax']==1){
if($_GET['pid']=='glowna'){include('glowna.php');}
else if($_GET['pid']=='kontakt'){include('kontakt.php');}
else if($_GET['pid']=='galeria'){include('galeria.php');}
else if($_GET['pid']=='fronty'){include('fronty.php');}
exit;
}
if(($_GET['pid']!='kontakt')&&($_GET['pid']!='gallery1')&&($_GET['pid']!='gallery2')&&($_GET['pid']!='')){
header('Location: http://backup.expertup.usermd.net/meblech.pl');
exit;
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MEBLECH Leszek Żukowski Hajnówka - meble kuchenne, pokojowe, biurowe, szafy</title>
<link rel='shortcut icon' href='images/favicon.ico' />
<meta name="Description" content="opis strony" />
<meta name="keywords" content="meblech leszek zukowski hajnowka meble kuchenne pokojowe biurowe szafy" />
<meta name="Author" content="Leszek Żukowski" />
<meta name="Robots" content="ALL" />
<meta name="revisit-after" content="14" />

<link rel="stylesheet" type="text/css" href="style.css" />
<link rel="stylesheet" href="fancybox/jquery.fancybox.css" type="text/css" media="screen" />
<script src="http://code.jquery.com/jquery.js"></script>
<script src="http://jquery.thewikies.com/browser/jquery.browser.min.js" type="text/javascript"></script>
<script type="text/javascript" src="script.js"></script>
<script type="text/javascript" src="fancybox/jquery.fancybox.pack.js"></script>
<script type="text/javascript" src="fancybox/jquery.easing.pack.js"></script>
<script type="text/javascript" src="fancybox/jquery.mousewheel.pack.js"></script>
</head>

<body>
<?

	include('header.php');
	
	include('tresc.php');
	
	include('footer.php');

?>
<div class="linked"><a href="mailto:strony.piotr.siekierzynski@gmail.com" target="_blank">Wykonanie Piotr Siekierzyński</a></div>
</body>
</html>