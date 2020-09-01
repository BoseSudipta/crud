<?php
require_once('Database.php');
$update=new Database;
if(isset($_POST['update']))
{
  $userid=intval($_GET['id']);
  $f_name=$_POST['f_name'];
  $l_name=$_POST['l_name'];
  $phn=$_POST['phone'];
  $pass=$_POST['pass'];
  $dob=$_POST['dob'];

  $sql=$update->update($userid,$f_name,$l_name,$phn,$pass,$dob);
  echo "<script>alert('Record Updated successfully');</script>";
}
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Update</title>
  </head>
  <body>
<?php
require_once('Database.php');
$userid=intval($_GET['id']);
$upd=new Database;
$data=$upd->one_record($userid);
while($row=mysqli_fetch_array($data)){
 ?>
<form class="" name="insertrecord" method="post">
  <div class="container">
    <div class="">
   <input type="text" name="f_name" value="<?php echo $row['first_name']  ?>">
  </div>
  <div class="">
   <input type="text" name="l_name" value="<?php echo $row['last_name']  ?>">
  </div>
  <div class="container">
   <input type="text" name="phone" value="<?php echo $row['phone']  ?>">
  </div>
  <div class="container">
   <input type="password" name="pass" value="<?php echo $row['password']  ?>">
  </div>
  <div class="container">
   <input type="date" name="dob" value="<?php echo $row['dob']  ?>">
  </div>
  <?php }  ?>
  <div class="">
    <input type="submit" name="update" value="submit">
  </div>

  </div>
  <a href="<?php echo BASE_URL;?>/record.php">Back to records</a>





</form>
</body>
</html>
