<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php  require_once 'process.php';
$mysqli = new mysqli('localhost', 'root', '', 'myweb') or die(mysqli_error($mysqli));
$result = $mysqli->query("SELECT * FROM `date`") or die($mysqli->error);
?>
<div>	
<table>
	<thead>
		<tr>
			<th>ID</th>
			<th>Adress</th>
			
		</tr>
	</thead>

	<?php

while ($row = $result->fetch_assoc()):?>

	<tr>
		<td><a href="anketa.php?edit=<?php echo $row['id'];?>" ><?php echo  $row['id']," ", $row['city']," ", $row['street']," ", $row['house']," ", $row['text']?> </a></td>
		
		<td>
	<a href="anketa.php?delete=<?php echo $row['id'];?>" >Delete</a>
			
		</td>
	</tr>
<?php endwhile; ?>

        

<?php
function pre_r($array){
	echo '<pre>';
	print_r($array);
	echo '</pre>';
}
?>


<form action="process.php" method="POST" >
	<input type="hidden" name="id" value="<?php echo  $_SESSION['id']?>">
<h3>Adress</h3>
<input type="text" name="city" value="<?php echo $_SESSION['city']; ?>" placeholder="city">
<input type="text" name="street" value="<?php echo $_SESSION['street']; ?>" placeholder="street">
<input type="text" name="hnum" value="<?php echo $_SESSION['hnum']; ?>" placeholder="nomer doma">
<?php
if ($update==true):
?>
	<button type="submit" name="update" >Update</button>
	<?php
else: 
	?>
	<button type="submit" name="apply" >Apply</button>

<button type="submit" name="clean" >clean</button>
	<?php endif;

	?>
</form>
<button type="submit"><a href="hakaton.php"> MAP</a></button>
<button type="submit"><a href="./eco/main.php"> Back</a></button>
</body>
</html>