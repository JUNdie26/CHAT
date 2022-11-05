
<?php
echo $_POST['id'];
echo $_POST['password'];
$id =$_POST['id'];
$password = $_POST['password'];
$conn=mysqli_connect('localhost','root','wkdguswhd0626!!','chat');
$sql="SELECT * FROM users";
$result = mysqli_query($conn,$sql);

while($row = mysqli_fetch_array($result)){
//    echo '반복';
    if($id == $row['id'] && $password == $row['password']) { ?>
      
      <form id='my_frm' action='index.php' method='POST'>    
        <input type='hidden' name='id' value="<?php $_POST['id']?>"> //아이디 정보 index.php로 이동 id=my_frm은 밑에 자스 코드에 필요한거라 나도 잘 모름
       
      </form>
      <script> // 아이디 비번 일치하면 index.php 페이지로 이동 자스코드
          window.onload=function(){
            let frm=document.querySelector('form#my_frm');
            frm.submit();
          }
      </script>
  <?php  } else {
    ?>
            <meta http-equiv="refresh" content="0;URL='login.php?ch=0'">
    <?php
  }

}
 ?>
