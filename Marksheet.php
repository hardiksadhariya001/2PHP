<!DOCTYPE html>
<html>
<head>
    <tittle></tittle>
</head>
<body>
    <form method="get">
        <ul>
            <li><input type="text" name"txtphp" placeholder="php"></li>
            <li><input type="text" name"txtds" placeholder="ds"></li>
            <li><input type="text" name"txtcoa" placeholder="coa"></li>
            <li><input type="text" name"txtsad" placeholder="sad"></li>
            <li><input type="submit" name"submit" value="grade"></li>
        </ul>
</form>
<?php
        if(isset($_GET['submit']))
    {
        $php=$_GET['txtphp'];
        $ds=$_GET['txtds'];
        $coa=$_GET['txtcoa'];
        $sad=$_GET['txtsad'];

        $obtmarks=$php+$ds+$coa+$sad;
        $totalmarks=400;
        $grade=obtmarks/totalmarks*100;

        if($grade>=90)
        {
            echo "grade A";
        }
        else if($grade>=75)
        {
            echo "grade B";
        }
        else if($grade>=65)
        {
            echo "grade C";

        }
        else if($grade>=45)
        {
            echo "grade D";
        }
        else
        {
            echo "fail";
        }
    }
    ?>
</body>
</html>
