<?php
include 'connect.php';
?>
<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <div class="container">
        <br>
        <button class="btn btn-primary"><a href="main.php">add user</a>
        </button>
        <table>
            <thead>
            <tr>
                <th scope="col">sl</th>
                <th scope="col">name</th>
                <th scope="col">email</th>
                <th scope="col">mobile</th>
                <th scope="col">password</th>
                <th scope="col">operation</th>
            </tr>

            </thead>
            <tbody>

            <?php
            $sql="SELECT * FROM `added` ORDER BY `id` ASC";
            $result=mysqli_query($con,$sql);
            if($result){
              while($row=mysqli_fetch_assoc($result)){
                  $id=$row['id'];
                  $name=$row['name'];
                  $email=$row['email'];
                  $mobile=$row['mobile'];
                  $password=$row['password'];
                  echo '<tr>
                 
                  <td>'.$id.'</td>
                  <td>'.$name.'</td>
                  <td>'.$email.'</td>
                  <td>'.$mobile.'</td>
                  <td>'.$password.'</td>
                  <td>
                  <button><a href="delete.php? deleteid='.$id.'">delete</a></button>
                  <button><a href="update.php?updateid='.$id.'">update</a></button>
                  
                  </td>
                  
                  </tr>';
              }
            }
        
            
            
            ?>
            </tbody>
        </table>
    </div>
</body>
</html>