<?php
session_start();

if (!isset($_SESSION['$kullanici_adi'])) {
   $_SESSION['msg'] = "Önce oturum açmalısınız";
   header('location: login.php');
}
if (isset($_GET['oturumu kapat'])) {
   session_destroy();
   unset($_SESSION['kullanici_adi']);
   header("location: ./login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
   <title></title>
   <link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>


   <h2>Anasayfa</h2>
 <!-- bildiri mesajı -->
   <?php if (isset($_SESSION['başarılı'])) : ?>
<h3>
<?php
   echo $_SESSION['başarılı'];
   unset($_SESSION['başarılı']);
?>
   </h3>

   <?php endif ?>

<!-- oturum açma kullanıcı bilgileri -->
<?php if (isset($_SESSION['kullanıcı adı'])) : ?>
   <p>Hoşgeldiniz<strong><?php echo $_SESSION['kullanıcı adı']; ?></strong></p>
   <p> <a href="index2.php?logout='1'" style="color: red;">oturumu kapat</a> </p>
<?php endif ?>
</div>

</body>
</html>
