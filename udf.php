<?php
        function myfunc($a,$b)
        {
                $c=$a+$b;
                return $c;
        }
        if(isset($_POST['no1']))
        {
                $a=$_POST['no1'];
                $b=$_POST['no2'];
                echo myfunc($a,$b);
        }
?>
<form action="udf.php" method="POST">
<input type="text" name="no1" placeholder="Enter no 1" required></br>
<input type="text" name="no2" placeholder="Enter no 2" required></br>
<input type="submit" value="calculate">
</form>