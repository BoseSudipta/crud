<?php
require_once('Database.php');//Try to use Autoload instead of Database.php
$obj=new Database;
if(isset($_POST['sub'])){
$f_name=$_POST['f_name'];
$l_name=$_POST['l_name'];
$phone=$_POST['phn'];
$pass=md5($_POST['pass']);
$dob=$_POST['dob'];

$sql=$obj->reg($f_name,$l_name,$phone,$pass,$dob);
if($sql){
  // print_r($sql);
  echo "<script>alert('Regestration successfull');</script>";
  echo "<script>window.location.href='sign_in.php'</script>";
}
else{
    echo "<script>alert('Regestration unsuccessfull,something is wrong.TRY AGAIN');</script>";
    echo "<script>window.location.href='index.php'</script>";
}
}

 ?>


<!DOCTYPE html>
<htmL>
  <head>
    <title>Registration</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
    integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
    <form  method="post">
      <div class="f_name">
        <input type="text" name="f_name" id="f_name" placeholder="First Name">
      </div>
      <div class="l_name">
        <input type="text" name="l_name" id="l_name" placeholder="Last Name">
      </div>
      <div class="phone">
        <input type="text" name="phn" id="phn" placeholder="Phone Number">
      </div>
      <div class="pass">
        <input type="password" name="pass" id="pass" placeholder="Password">
      </div>
      <div class="DOB">
        <label>DOB</label>
        <input type="date" name="dob" id="dob">
      </div>
      <div>
        <input type="submit" name="sub" value="Submit">
      </div>
    </div>
    </form>
    <div class="container">
      <a href="<?php echo BASE_URL?>/sign_in.php">Sign In</a>
    </div>
  </body>
</html>
