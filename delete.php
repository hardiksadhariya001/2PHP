<?php
        include 'insta.php';
        if(isset($_GET['deleteid']))
        {
                $id=$_GET['deleteid'];
                $sql="delete from `user` where id=$id";
                $result=mysqli_query($con,$sql);
                if($result)
                {
                        //echo "successful";
                        header('location:show.php');
                }
                else
                {
                        die("error".mysqli_connect_error($con));
                }
        }
?>