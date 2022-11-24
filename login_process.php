<?php
$id = $_POST['id'];
$password = $_POST['password'];
$conn = mysqli_connect('localhost', 'root', 'wkdguswhd0626!!', 'chat');
$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);

$name = "SELECT name FROM users where ";


while ($row = mysqli_fetch_array($result)) {
  //    echo '반복';
  if ($id == $row['id'] && $password == $row['password']) {
    $name = "my_variable";
    setcookie($name, $id);
?>

    <form id='my_frm' action='index.php' method='POST'>
      <input type='hidden' name='id' value="<?php $_POST['id'] ?>">

    </form>

    <script>
      // 아이디 비번 일치하면 index.php 페이지로 이동 자스코드
      window.onload = function() {
        let frm = document.querySelector('form#my_frm');
        frm.submit();
      }
    </script>
    <?php
    $name = "my_variable";
    
    
    $conn = mysqli_connect('localhost', 'root', 'wkdguswhd0626!!', 'chat');

    $setVar = "SET @id_CK = $_COOKIE[$name]";
    $result1 = mysqli_query($conn, $setVar);
    $sel_name = "SELECT name from users where id = @id_CK"; // id값에 $id있는 컬럼을 찾아 거기의 name을 선택
    $res_name = mysqli_query($conn, $sel_name); // 그것을 실행시켜서 $res_name에 저장

    $name2 = "my_variable2";
    setcookie($name2, $res_name);

    ?>

  <?php  } else {
  ?>
    <meta http-equiv="refresh" content="0;URL='login.php?ch=0'">
<?php
  }
}
?>