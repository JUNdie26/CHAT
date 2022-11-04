<?php
echo $_POST['id'];
echo $_POST['password'];
$id =$_POST['id'];
$password = $_POST['password'];
$conn=mysqli_connect('127.0.0.1','root','111111','chat');
$sql=$sql = "
  INSERT INTO users (name,password)
    VALUES('{$_POST['id']}','{$_POST['password']}')
";

mysqli_query($conn,$sql);
?>
        <meta http-equiv="refresh" content="0;URL='login.php?ch'"> //login.php로 이동시키는 코드
<?php
 ?>
