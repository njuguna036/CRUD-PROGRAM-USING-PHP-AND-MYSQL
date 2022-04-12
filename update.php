<?php    

include 'connect.php';
$id=$_GET['updateid'];
if(isset($_POST['submit'])){
    
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['mobile'];
    $password=$_POST['password'];
   


    $sql="UPDATE `added` SET `name` = '$name', `email` = '$email', `mobile` = '$phone', `password` = '$password'
     WHERE `added`.`id` =$id";
   
    $result=mysqli_query($con,$sql);
    if ($result) 
    {
       header('location:display.php');
    }else{
        die(mysqli_error($con));
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>addt</title>
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <div class="container my-5">
        <<form method = "post" action = "<?php $_PHP_SELF ?>">
            <div class=""form-group>
            <label >name</label>
            <br>
            <input type="text" name="name" class="form-control" placeholder="Enter you name">
            <br>

           </div>
           <div class="form-group">
           <label >Email</label>
           <br>
           <input type="email" name="email" class="form-control" placeholder="Enter your email">    
           <br>

           </div>
           <div class="form-group">
           <label >phone number</label>
           <br>
           <input type="text" name="mobile"  class="form-control" placeholder="Enter you phone number">
           <br>

           </div>
           <div class="form-group">
           <label >password</label>
           <br>
           <input type="password"  name="password" class="form-control" placeholder="Enter your password">
           <br>

           </div>
           <br>
           <button type="submit" name="submit">update</button>
    </form>
</div>     
</body>
</html>