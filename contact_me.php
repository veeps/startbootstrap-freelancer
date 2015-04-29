<?php
  $email = $_REQUEST['email'] ;
  $message = $_REQUEST['message'] ;

  mail( "hi@vivianpeng.com", "Story",
    $message, "From: $email" );
?>
