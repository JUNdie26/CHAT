<?php
$id =$_POST['id'];
$name=$_post['name'];
$password = $_POST['password'];
$conn=mysqli_connect('localhost','root','wkdguswhd0626!!','chat');
$sql=$sql = "
  INSERT INTO users (id,name,password)
    VALUES('{$_POST['id']}','{$_POST['name']},'{$_POST['password']}')
";

mysqli_query($conn,$sql);
?>
        <meta http-equiv="refresh" content="0;URL='login.php?ch'"> 
<?php
 ?>
