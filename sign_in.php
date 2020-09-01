<?php
require_once('Database.php');
$userdata=new Database;
if(isset($_POST['sub'])){
  $phone=$_POST['phn'];
  $pass=md5($_POST['pass']);

  $sql=$userdata->sign_in($phone,$pass);
  $num=mysqli_fetch_array($sql);
  // print_r($num);
  if($num>0){
    $_SESSION['u_id']=$num['id'];
    $_SESSION['u_fname']=$num['first_name'];
    $_SESSION['u_lname']=$num['last_name'];

    echo "<script>window.location.href='record.php'</script>";
  }
  else{
    echo "<script>alert('Invalid details. Please try again');</script>";
    echo "<script>window.location.href='sign_in.php'</script>";
  }
}

 ?>

<!DOCTYPE html>
<html>
<head>
  <title>Sign In</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
  integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <form method="post">
      <div class="Phone">
        <input type="text" name="phn" id="phn" placeholder="Phone number">
      </div>
      <div class="password">
        <input type="password" name="pass" id="pass" placeholder="Password">
      </div>
      <div class="submit">
        <input type="submit" name="sub" value="submit">
      </div>
    </form>

    <span><a href="<?php echo BASE_URL?>index.php">Sign up</a></span>
  </div>
</body>
</html>
