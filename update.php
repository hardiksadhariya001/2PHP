<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css">
<?php
        include 'config.php';
        if(isset($_POST['submit']))
        {
                $uname=$_POST['uname'];
                $pass=$_POST['pass'];
                $sql="update `user` set id='$id',uname='$uname',pass='$pass'";
                $result=mysqli_query($con,$sql);
                if($result)
                {
                        echo "successfull";
                        header('location:show.php');
                }
                else
                {
                        die("error".mysqli_connect_error($result));
                }
        }
?>
<div class="container">
    <h1><center><i>instagram</i></center></h1>
<form action="insta.php" method="POST">
    <input type="text" class="form-control"name="uname" placeholder="User Name" required></br>
    <input type="password" class="form-control" name="pass" placeholder="Password" required></br>
    <input type="submit" class="btn btn-primary w-100" name="submit" value="Update">
</form>
 </div>