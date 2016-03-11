<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Ordering form</title>
<?php include("css.php"); ?>
</head>
<br />
	<?php include("header_mtr_SE.php"); ?>

     <table width="810" border="1" cellspacing="4" cellpadding="0" bgcolor="#FFFFFF">
 <?php 
    include 'exkl_moms_inkl_frakt.php';
    include 'dec_punkt.php';
    include 'f414_mtr_sek.php';

	?>
 </table>
 <?php include("add_button.php"); ?>
