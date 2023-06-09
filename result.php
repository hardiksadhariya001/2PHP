<html>
      <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>
<?php
	$m1 = $m2 = $m3 = $m4= $total = $per = 0;
	$result = $grade = "----";
	if(isset($_POST['txtm1']))
	{
		$m1 = $_POST['txtm1'];
		$m2 = $_POST['txtm2'];
		$m3 = $_POST['txtm3'];
		$m4 = $_POST['txtm4'];
		$total = $m1 + $m2 + $m3 +$m4;
		if($m1>=40 && $m2 >=40 && $m3 >=40 && $m4 >=40)
		{
			$per = $total / 4;
			$result = "PASS";
			if($per >=70)
			{
				$grade = "A+";
			}
			else if($per >=60)
			{
				$grade = "A";
			}
			else if($per >=50)
			{
				$grade = "B";
			}
			else
			{
				$grade = "C";
			}
		}
		else
		{
			$per = 0;
			$result = "FAIL";
			$grade = "ATKT";
		}
	}
?>
  <div class="container-fluid mt-1">
     <div class="card">
        <div class="card-header bg-primary text-center">
         <h4>BSC.IT Sem-2 Result</h4>
</div>
        <div class="card-body bg-warning">
<form action="result.php" method="POST">
	<input type="number" class="form-control mt-2 mb-2" name="txtm1" placeholder="Enter PHP marks" required>
	<input type="number" class="form-control mt-2 mb-2" name="txtm2" placeholder="Enter COA marks" required>
	<input type="number" class="form-control mt-2 mb-2" name="txtm3" placeholder="Enter Data structure marks" required>
	<input type="number" class="form-control mt-2 mb-2" name="txtm4" placeholder="Enter SAD marks" required>
	<input type="submit" class="btn btn-primary w-100" value="Result">
</form>
<table width="100%">
	<tr>
		<td>PHP
		<td>COA
		<td>DS
		<td>SAD
		<td>Total
		<td>Per
		<td>Grade
		<td>Result
	<tr>
		<td><?php echo $m1; ?>
		<td><?php echo $m2; ?>
		<td><?php echo $m3; ?>
		<td><?php echo $m4; ?>
		<td><?php echo $total; ?>
		<td><?php echo $per; ?>
		<td><?php echo $grade; ?>
		<td><?php echo $result; ?>
</table>