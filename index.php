<!DOCTYPE html>

<head>
  <meta charset="utf-8">
  <title>CHATTING</title>
</head>

<body>
  <div>
    <form method="POST" id="input">
      <input type="text" , name="chats" , placeholder="내용">
      <input id="sub" type="submit" , value="입력">
    </form>
  </div>

  <?php
  
  $chat = $_POST['chats'];
  echo $name_CK;
  $conn = mysqli_connect("localhost", "root", "wkdguswhd0626!!", "chat");
  $UsId = $_SESSION["id"];
  $UsName = $_SESSION["name"];


  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }


  $sql = "SELECT description FROM chatrecord";


  $input_code = "INSERT INTO chatrecord (id, name, description) VALUES " + $UsId  + $UsName + $chat;

  $output_code = "SELECT * FROM chatrecord";


  $input = mysqli_query($conn, $input_code);

  $output = mysqli_query($conn, $output_code);


  $row = mysqli_fetch_array($output);

  while ($row = mysqli_fetch_array($output)) {

    echo $row[1] . ':' . $row[2] . '<br />';
  }

  mysqli_close($conn);
  ?>


</body>

</html>