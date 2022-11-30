<!DOCTYPE html>
<?php
ini_set('display_errors', '0');
?>

<head>
  <meta charset="utf-8">
  <title>CHATTING</title>
</head>

<body>
  <script>
    function NotReload() {
      if ((event.ctrlKey == true && (event.keyCode == 78 || event.keyCode == 82)) || (event.keyCode == 116)) {
        event.keyCode = 0;
        event.cancelBubble = true;
        event.returnValue = false;
      }
    }
    document.onkeydown = NotReload;
  </script>
  <?php
  $id = $_POST['id'];
  $name = $_POST['name'];
  ?>
  <div>
    <h1>
      <b>
        <?php
        echo "[" . $name . "](으)로 접속 됨"
        ?>
      </b>
    </h1>
  </div>

  <div>
    <h5>
      ※전 내용과 중복될 시 도배로 간주하여 메시지 전송이 불가합니다※
    </h5>
  </div>

  <div>
    <form method="POST" id="input">
      <input type="text" , name="chats" , placeholder="내용">
      <input type='hidden' name='id' value="<?php echo $_POST['id']; ?>">
      <input type='hidden' name='name' value="<?php echo $_POST['name']; ?>">
      <input id="sub" type="submit" , value="입력">
      <a href="login.php?ch=">로그아웃</a>
    </form>
  </div>

  <div>
    <h4>
      <?php

      $conn = mysqli_connect('localhost', 'root', 'wkdguswhd0626!!', 'chat');

      $chat = $_POST['chats'];

      $name = $_POST['name'];

      $sql = "SELECT description FROM chatrecord";

      $input_code = "
  INSERT INTO chatrecord (id,name,description)
    VALUES('{$_POST['id']}','{$_POST['name']}','{$_POST['chats']}')
  ";



      $output_code = "SELECT * FROM chatrecord ";

      $output = mysqli_query($conn, $output_code);


      $row = mysqli_fetch_array($output);

      if ($chat != NULL && $overLap != $chat) {
        $input = mysqli_query($conn, $input_code);
      }

      while ($row = mysqli_fetch_array($output)) {

        echo $row["name"] . ':' . $row["description"] . '<br />';

        $overLap = $row["description"];
      }
      if ($chat != NULL && $chat != $overLap) {
        echo $name . ':' . $chat . '<br />';
      }



      mysqli_close($conn);
      ?>
    </h4>
  </div>

</body>

</html>