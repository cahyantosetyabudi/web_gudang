<?php
date_default_timezone_set('Asia/Jakarta');
if(!ISSET($_POST['filter'])){
 ?>
 <?php
 require 'config.php';
 $query = mysqli_query($conn, "SELECT * FROM `thesis` ORDER BY `date` ASC") or die(mysqli_error());
 while($fetch = mysqli_fetch_array($query)){
  ?>
>



  <?php
if(ISSET($_POST['filter'])){
 require 'config.php';
 $date = $_POST['date'];
 $query = mysqli_query($conn, "SELECT * FROM `thesis` WHERE MONTH(date) = '$date' ORDER BY `date` ASC") or die(mysqli_error());
 while($fetch = mysqli_fetch_array($query)){
 	?>