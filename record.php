<?php
require_once('Database.php');
?>
<!DOCTYPE html>
<html>
<head>
  <title>Record</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
  integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
  <h1>Records</h1>
  <div class="container">
      <div class="table">
        <table border="2">
          <thead>
            <th>No.</th>
            <th>id</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Phone</th>
            <th>Password</th>
            <th>Date of Birth</th>
            <th>Action</th>
          </thead>
          <tbody>

            <?php
            $rd=new Database;
            $data=$rd->record();
            // print_r($data);
             $count=1;
             while($row=mysqli_fetch_array($data))

           {
            //  print_r($row);
           ?>
           <tr>
            <td><?php echo $count ?></td>
            <td><?php echo $row['id'] ; ?></td>
            <td><?php echo $row['first_name'];?></td>
            <td><?php echo $row['last_name']; ?></td>
            <td><?php echo $row['phone']; ?></td>
            <td><?php echo $row['password']; ?></td>
            <td><?php echo $row['dob']; ?></td>
            <td><a href="update.php?id=<?php echo $row['id'] ;?>">Edit</a>
            <a href="<?php echo BASE_URL?>delete.php?id=<?php echo $row['id'] ;?>">Delete</a></td>
          </tr>
          <?php $count++; }  ?>
          </tbody>
        </table>
<a href="<?php echo BASE_URL ?>sign_in.php">Back to sign_in</a>
      </div>
  </div>
</body>
</html>
