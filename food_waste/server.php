<?php
session_start();

// degişkenleri tanımladım
$kullanıcı_adı = "";
$email = "";
$errors = array();

// veri tabanına baglan
$db = mysqli_connect('localhost', 'root', 'Sultan1234');

//giriş kortrolü


// kullanıcı kaydet
// tüm giriş degerlerini  al
if(isset($_POST['kullanici_adi'])){
$kullanici_adi = mysqli_real_escape_string($db, $_POST['kullanici_adi']);
$email = mysqli_real_escape_string($db, $_POST['email']);
$sifre_1 = mysqli_real_escape_string($db, $_POST['sifre_1']);
$sifre_2 = mysqli_real_escape_string($db, $_POST['sifre_2']);

// form doğrulama: formun doğru şekilde doldurulduğundan emin olun .. ...
// $ error dizisine (array_push ()) karşılık gelen hatayı ekleyerek
if (empty($kullanici_adi)) { array_push($errors, "kullanıcı adı gerekli"); }
if (empty($email)) { array_push($errors, "Email gerekli"); }
if (empty($sifre_1)) { array_push($errors, "Şifre gerekli"); }
if ($sifre_1 != $sifre_2) {
   array_push($errors, "iki parola eşleşmiyor");
}


// emin olmak için önce veritabanını kontrol edin
// aynı kullanıcı adı ve / veya e-postaya sahip bir kullanıcı zaten mevcut değil
$user_check_query = "SELECT * FROM deneme.users WHERE kullanici_adi='$kullanici_adi' and email='$email' LIMIT 1";
$sonuc = mysqli_query($db, $user_check_query);
$kullanici = mysqli_fetch_assoc($sonuc);

if ($kullanici) { // eger kullanıcı varsa
  if ($kullanici['kullanici_adi'] === $kullanici_adi) {
    array_push($errors, "kullanıcı adı zaten mevcut");
  }

  if ($user['email'] === $email) {
    array_push($errors, "email zaten var");
  }
}

// Son olarak formda herhangi bir hata yoksa kullanıcıyı kaydedin
if (count($errors) == 0) {
   $password = md5($sifre_1);//veritabanına kaydetmeden önce parolayı şifreleyin

   $query = "INSERT INTO deneme.users (kullanici_adi, email, sifre)
           VALUES('$kullanici_adi', '$email', '$password')";
   mysqli_query($db, $query);
   $_SESSION['kullanici_adi'] = $kullanici_adi;
   $_SESSION['başarılı'] = " Şİmdi giriş yaptınız";
   header('location: index.php');
}
}
if (isset($_POST['kullanıcı oturum aç'])) {
$kullanici_adi = mysqli_real_escape_string($db, $_POST['kullanıcı adı']);
$sifre = mysqli_real_escape_string($db, $_POST['şifre']);

if (empty(kullanici_adi)) {
array_push($errors, "Kullanıcı adı gerekli");
}
if (empty($sifre)) {
array_push($errors, "şifre gerekli");
}

if (count($errors) == 0) {
$sifre = md5($sifre);
$query = "SELECT * FROM deneme.users WHERE kullanici_adi='$kullanici_adi' AND sifre='$sifre'";
$sonuclar = mysqli_query($db, $query);
if (mysqli_num_rows($sonuclar) == 1) {
$_SESSION['kullanici_adi'] = $kullanici_adi;
$_SESSION['başarılı'] = "şimdi giriş yaptınız";
header('location:index.php');
}else {
array_push($errors, "yanlış kullanıcı adı/şifre kombinasyonu");
}
}
}

?>
