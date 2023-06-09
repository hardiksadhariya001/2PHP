<?php
        include 'insta.php';
?>
<style>    
body{
    background-image: url('https://scx1.b-cdn.net/csz/news/800/2017/theoreticala.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
    color: #FFFFFF;
}
</style>
<div class="container">
    <button class="btn btn-primary my-3"><a href="insta.php" class="text-light">Add User</a></button>
</div>
<div class="container">
<table class="table table-striped">
    <thead>
        <tr class="table-dark">
            <th scope="row">#</th>
            <th scope="row">User Name</th>
            <th scope="row">Password</th>
            <th scope="row">Action</th>
</tr>
</thead>
<tbody>
    <?php
            $sql="select *from `user`";
            $result=mysqli_query($con,$sql);
            if($result)
            {
                    while($row=mysqli_fetch_assoc($result))
                    {
                            $id=$row['id'];
                            $uname=$row['uname'];
                            $pass=$row['pass'];
                            echo '<tr>
                            <th scope="row" class="text-light">'.$id.'</th>
                            <th scope="row" class="text-light">'.$uname.'</th>
                            <th sope="row" class="text-light">'.$pass.'</th>
                            <th scope"row">
                            <button class="btn btn-primary"><a href="update.php? updateid='.$id.'" class="text-light">Update</a></button>
                            <button class="btn btn-danger"><a href="delete.php? deleteid='.$id.'" class="text-light">Delete</a></button>
                            </th>
                            </tr>';
                    }
            }
   ?>
 </tbody>
</table>
</body>  
</div>