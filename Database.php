<?php
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS','');
define('DB_NAME','stu');
define('BASE_URL',"http://localhost/sudipta/oops_practice/crud/");
/**
 *
 */
class Database
{

function __construct()
  {
  $conn=mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
  $this->dbh=$conn;//dbh-databasr handler
 
  if(mysqli_connect_errno()){
    echo "Database is unable to connect".mysqli_connect_error();
  }
  }

  public function reg($f_name,$l_name,$phone,$pass,$dob){
    $result=mysqli_query($this->dbh,"INSERT INTO php_crud (first_name,last_name,phone,password,dob)values('$f_name','$l_name','$phone','$pass','$dob')");
    return $result;
  }

  public function sign_in($phone,$pass){
    $user_result=mysqli_query($this->dbh,"select * from php_crud WHERE phone='".$phone."' AND password='".$pass."' ");
    return $user_result;
  }

  public function record(){
    $records=mysqli_query($this->dbh,"select * from php_crud");
    return $records;
  }

  public function one_record($userid){
    $records=mysqli_query($this->dbh,"select * from php_crud where id='".$userid."' ");
    return $records;
  }

  public function update($userid,$f_name,$l_name,$phn,$pass,$dob){
    $result=mysqli_query($this->dbh,"UPDATE php_crud SET first_name='".$f_name."',last_name='".$l_name."',phone='".$phn."',password='".$pass."',dob='".$dob."' where id='".$userid."'  ");
    return $result;
  }

  public function delete($userid){
    $result=mysqli_query($this->dbh,"DELETE from php_crud where id='".$userid."' ");
    return $result;
  }
}

 ?>
