<?php 
session_start();
include ("lib/koneksi.php");

define("INDEX", true);
?>


<?php include 'header.php';?>

<div class="col-md-12"><?php include("konten.php"); ?> </div>

<?php include 'footer.php';?>