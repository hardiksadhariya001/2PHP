<?php
  if(isset($_POST['txtno1']))
  {
    $no1 = $_REQUEST['txtno1'];
    $no2 = $_REQUEST['txtno2'];
    echo $no1+$no2;
  }
?>
<form action="Addtion.php" method="POST">
    <input type="text" name="txtno1" placeholder="Enter No. 1" required>
    <input type="text" name="txtno2" placeholder="Enter No. 2" required>
    <input type="submit" value="Calculate">
</form>