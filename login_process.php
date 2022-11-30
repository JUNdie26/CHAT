<?php
$id = $_POST['id'];
$password = $_POST['password'];
$conn = mysqli_connect('localhost','root','wkdguswhd0626!!','chat');
$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);
$name = "SELECT name FROM users where ";


while ($row = mysqli_fetch_array($result)) {

  if ($id == $row['id'] && $password == $row['password']) {

?>

      <form id='my_frm' action='index.php' method='POST'>
        <input type='hidden' name='id' value="<?php echo $_POST['id'];?>">
        <input type='hidden' name='name' value="<?php echo $row['name'];?>">
      </form>

      <script>
     //아이디 비번 일치하면 index.php 페이지로 이동 자스코드
          window.onload = function() {
          let frm = document.querySelector('form#my_frm');
          frm.submit();
        }
      </script>

  <?php  } else{
    ?>
        <meta http-equiv="refresh" content="0;URL='login.php?ch=0'">
    <?php
  }

}
?>
