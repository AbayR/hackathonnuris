<?php 
session_start();
$mysqli = new mysqli('localhost', 'root','','myweb') or die(mysqli_error($mysqli));

$update = false;
$id='';
	$city = '';
	$street = '';
	$hnum = '';
	$text = '';






if(isset($_POST['applymap'])){

	$city = $_POST['city'];
	$street = $_POST['street'];
	$hnum = $_POST['hnum'];
	$address = $city." , ".$street." , ".$hnum;

$_SESSION['city'] = $city;
$_SESSION['street'] = $street;
	$ch = curl_init('https://geocode-maps.yandex.ru/1.x/?apikey=c05c8b0a-98e8-4c59-8224-8fe3d45f94a7&format=json&geocode=' . urlencode($address));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_HEADER, false);
$res = curl_exec($ch);
curl_close($ch);
 
$res = json_decode($res, true);
$coordinates = $res['response']['GeoObjectCollection']['featureMember'][0]['GeoObject']['Point']['pos'];
$coordinates = explode(' ', $coordinates);
$point=$coordinates[1].",".$coordinates[0];
$_SESSION['point'] = $point;

$mysqli->query("INSERT INTO `date` (`id`,`city`, `street`, `house`, `coord`) VALUES (NULL, '$city', '$street', '$hnum','$point')") or die($mysqli->error);
 header("Location: anketa.php ");
}





if(isset($_POST['cleanmap'])){
	$city = '';
	$street = '';
	$hnum = '';
	$text = '';
	$_SESSION['city'] = $city;
$_SESSION['street'] = $street;
$_SESSION['hnum'] = $hnum;
 header("Location: anketa.php ");
}






if(isset($_POST['apply'])){
$id = $_POST['id'];
	$city = $_POST['city'];
	$street = $_POST['street'];
	$hnum = $_POST['hnum'];
	$address = $city." , ".$street." , ".$hnum;
 
$_SESSION['city'] = $city;
$_SESSION['street'] = $street;
$_SESSION['hnum'] = $hnum;
$_SESSION['nkv'] = $nkv;
$ch = curl_init('https://geocode-maps.yandex.ru/1.x/?apikey=c05c8b0a-98e8-4c59-8224-8fe3d45f94a7&format=json&geocode=' . urlencode($address));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_HEADER, false);
$res = curl_exec($ch);
curl_close($ch);
 
$res = json_decode($res, true);
$coordinates = $res['response']['GeoObjectCollection']['featureMember'][0]['GeoObject']['Point']['pos'];
$coordinates = explode(' ', $coordinates);
$point=$coordinates[1].",".$coordinates[0];
$_SESSION['point'] = $point;

	$mysqli->query("INSERT INTO `date` (`id`,  `city`, `street`, `house`, `coord`) VALUES (NULL, '$city', '$street', '$hnum', '$point')") or die($mysqli->error);
 header("Location: anketa.php ");
	
}






if(isset($_POST['clean'])){
	$city = '';
	$street = '';
	$hnum = '';
$_SESSION['city'] = $city;
$_SESSION['street'] = $street;
$_SESSION['hnum'] = $hnum;

 header("Location: hakaton.php ");
}




if(isset($_GET['edit'])){
    $id = $_GET['edit'];	
    $_SESSION['id'] = $id;
    $result=$mysqli->query("SELECT * FROM `date` WHERE `id`=$id") or die($mysqli->error());

   	
    	$row = $result->fetch_array();
    	
	$city = $row['city'];
	$street = $row['street'];
	$hnum = $row['house'];

	$text = $row['text'];
   $update=true;

$point=$row['coord'];
$_SESSION['city'] = $city;
$_SESSION['street'] = $street;
$_SESSION['hnum'] = $hnum;
$_SESSION['point'] = $point;
$_SESSION['text'] = $text;
}

if(isset($_POST['update'])){
    $id = $_POST['id'];
    	
	$city = $_POST['city'];
	$street = $_POST['street'];
	$hnum = $_POST['hnum'];
	$text = $_POST['text'];
		$address = $city." , ".$street." , ".$hnum;
 $point=$row['coord'];
$_SESSION['city'] = $city;
$_SESSION['street'] = $street;
$_SESSION['hnum'] = $hnum;
$_SESSION['point'] = $point;
$_SESSION['text'] = $text;
$ch = curl_init('https://geocode-maps.yandex.ru/1.x/?apikey=c05c8b0a-98e8-4c59-8224-8fe3d45f94a7&format=json&geocode=' . urlencode($address));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_HEADER, false);
$res = curl_exec($ch);
curl_close($ch);
 
$res = json_decode($res, true);
$coordinates = $res['response']['GeoObjectCollection']['featureMember'][0]['GeoObject']['Point']['pos'];
$coordinates = explode(' ', $coordinates);
$point=$coordinates[1].",".$coordinates[0];
$_SESSION['point'] = $point;

$mysqli->query("UPDATE `date` SET city='$city', street='$street', house='$hnum', coord='$point' WHERE `date`.`id`=$id") or die($mysqli->error);

 header("Location: anketa.php ");
}

if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    $result=$mysqli->query("SELECT * FROM `date` WHERE `id`=$id") ;

   	
    	$row = $result->fetch_array();
	$city = $row['city'];
	$street = $row['street'];
	$hnum = $row['house'];
	$point = $row['coord'];
	$mysqli->query("DELETE FROM date WHERE id=$id") or die($mysqli->error());
	$city = '';
	$street = '';
$_SESSION['city'] = $city;
$_SESSION['street'] = $street;
$_SESSION['hnum'] = $hnum;

 header("Location: anketa.php ");
}




?>


