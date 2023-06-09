<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<?php
  if(isset($_POST['txtno1']))
  {
    $no1 = $_REQUEST['txtno1'];
    $no2 = $_REQUEST['txtno2'];
    $total = $no1+$no2;
  }
?>
<div class="container">
    <form action="variable.php" method="POST">
        <input type="text" name="txtno1" class="form-control mt-2 mb-2" placeholder="Enter No. 1" required>
        <input type="text" name="txtno2" class="form-control mb-2" placeholder="Enter No. 2" required>
        <input type="submit" class="btn btn-primary w-100" value="Calculate">
    </form>
</div>
<div class="container">
    <div class="card text-center">
        <div class="h3 text-primary">Total is:<?php if(isset($total)){ echo $total;} ?></div>
    </div>
</div>