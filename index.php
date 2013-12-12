<?php 
  $page = rand(1,3);
  $title = 'Wahai para traveller, tunggu tantangan berhadiah dari kami. Siapkan hati yang besar dan dada bidang. -brochallenges, 2014-';
 ?>

 <?php include('template/include/html_header.php') ?>
  <?php include('template/page/'. $page .'.php') ?>
 <?php include('template/include/html_footer.php') ?>