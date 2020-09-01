<?php
require_once('Database.php');
$del=new Database;
if(isset($_GET['id'])){
  $userid=$_GET['id'];
  $q=$del->delete($userid);
  if($q){
    echo "<script>alert('delete successfull');</script>";
    echo "<script>window.location.href='record.php'</script>";
  }
}



?>
