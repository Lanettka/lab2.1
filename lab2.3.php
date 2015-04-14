<?php
$_GET;
if (isset($_GET['x1'])) {
   $x1 = $_GET['x1'];
} else {
   $x1 = '';
}
if (isset($_GET['x2'])) {
   $x2 = $_GET['x2'];
} else {
   $x2 = '';
}
if (isset($_GET['y1'])) {
   $y1 = $_GET['y1'];
} else {
   $y1 = '';
}
if (isset($_GET['y2'])) {
   $y2 = $_GET['y2'];
} else {
   $y2 = '';
}

?>
<html>
<head>
   <meta charset="UTF-8">
</head>
<body>
   <form action="test.php" method="get">
       x1<input type="text" name="x1" value="<?php echo $x1 ?>">
       	<select name="operation">
			<option <?php echo $selectedMinus ?> value="-">-</option>
      	</select>
       x2<input type="text" name="x2" value="<?php echo $x2 ?>">
       =
       <br><br>
        y1<input type="text" name="y1" value="<?php echo $y1 ?>">
       	<select name="operation">
			<option <?php echo $selectedMinus ?> value="-">-</option>
      	</select>
       y2<input type="text" name="y2" value="<?php echo $y2 ?>">
       =
       <?php 
	echo "$vidstanX=" . $x1-$x2;
	echo "$vidstanY=" . $y1-$y2;
		?>
       <br><br>
       <button type="submit" name="submit" value="submit">Calculate</button>
   </form>
</body>
</html>
