<!DOCTYPE html>

<head>
  <meta charset="utf-8">
  <title>CHATTING</title>
  <?php

  $id = $_POST['name'];
  $chat = $_POST['chats'];

  $conn = mysqli_connect("localhost", "root", "12341234", "chat");


  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }


  $sql = "SELECT name, description FROM chatrecord";



  $input_code = "INSERT INTO chatrecord (name, description) VALUES ('$id', '$chat')"; // HTML로부터 받은 값 입력

  $output_code = "SELECT * FROM chatrecord"; // DB 내용 전체 선택

  $input = mysqli_query($conn, $input_code); // 받은 값 DB에 추가 쿼리

  $output = mysqli_query($conn, $output_code); // 내용 전체 선택 쿼리

  $row = mysqli_fetch_array($output);

  ?>
</head>

<body>

  <div>
    <form method="POST" , action="/main.php" id="sub_form">
      <input type="text" , id="name" , placeholder="닉네임"> <br>
      <input type="text" , id="chats" , placeholder="내용">
      <input id="sub" type="submit" , value="입력">
    </form>
  </div>

  <?php
  while ($row = mysqli_fetch_array($output)) {

    echo $row[1] . ':' . $row[2] . '<br />';
  }
  ?>
  <script>
    $("#sub").click(function() {
      if ($.trim($("#name").val()) == '' && $.trim($("#chats").val())) {
        alert("입력해주세요.");
        s
        return false;
      }
      $("#sub_form").submit();
    });
  </script>
</body>

</html>