<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);
$id = $_POST['id'];
$name = $_POST['name'];
$password = $_POST['password'];
$conn = mysqli_connect('localhost','root','wkdguswhd0626!!','chat');
$sql="
  INSERT INTO users (id,name,password)
    VALUES('{$_POST['id']}','{$_POST['name']}','{$_POST['password']}')
";
echo $sql;
mysqli_query($conn,$sql);

?>
  <meta http-equiv="refresh" content="0;URL='login.php?ch'">
<?php
    error_reporting(E_ALL);
    ini_set("display_errors", 1);
?>
