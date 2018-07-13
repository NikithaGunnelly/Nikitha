<?
global $name;
global $password;
include_once('data.php');
if(isset($_POST['name'])) {
	$name = $_POST['name'];
}
if (isset($_POST['password'])) {
    $age = $_POST['password'];
}
//$Createsql = "INSERT INTO `aishu` (name, password) VALUES ('$name','$password')";
$query = "SELECT * FROM `aishu`";

$res = mysqli_query($connect, $query);
if($res)
{
	while ($row = $res->fetch_assoc()) {
		echo $row["name"].$row["password"];
	}
	echo "done";
} else {
    echo "data insertion failed";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>relax</title>
</head>
<body>
	name:<input type="text" name="name"> <br>
	password:<input type="password" name="password"> <br>
	submit:<input type="submit" name="submit">

</body>
</html>