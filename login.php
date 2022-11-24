<!DOCTYPE html>
<html lang="ko" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Login</title>
</head>

<body>
  <h1>Login</h1>
  <form action="login_process.php" method="POST">
    <h2><input type='text' name='id' placeholder="id"></h2>
    <h2><input type='password' name='password' placeholder="password"></h2>
    <?php
    if (isset($_GET['ch'])) {
      if ($_GET['ch'] === '0') {
    ?>
        <h6>로그인에 실패하였습니다</h6>
    <?php
      }
    }
    ?>
    <input type='submit' value='로그인'>
  </form>

  <h6><a href="signup.php">회원가입</a></h6>
</body>

</html>