<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta charset="utf-8">
    <meta name="keywords"content="israf etme, paylaş,gıda,hayvan barınakları,geri dönüşüm,fazla,gelecegini koru,dünya ">
    <meta name="description"content="bu web sitesi ihtiyaç sahiplerine ulaşarak geri dönüşüme katkı saglayacaktır">
    <meta name="author"content="Sultan SARIZEYBEK">
    <meta name="viewport"content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="stylemain2.css">      <link rel="icon" href="images/logo.png"/>

    <title></title>
  </head>
  <body>
    <style>
    .buton{
      text-decoration: none;
      font-size: 18px;
      margin-left: 15px;
      display: inline-block;
      padding: 13px 26px;
    }
    .bir{
      background-color: white;
      color: green;
      border:1px solid green;
      border-radius: 12px;
      transition: color 1s , backgraund-color 1s;
    }
     .bir:hover{
        color: white;
        background-color: green;
    }
    .right {
      background-color:#e5e5e5;
      float: right;
      width: 20%;
      height: 100%;
      padding: 15px;
      margin-top: 7px;
      text-align: center;
    }
    </style>
    <header>
        <ul class="menu">
          <li>
        <img src="images/logo.png"alt="images/logo.png"width="120px"height="120px">
            </li>
          <li>
          <a class="" href="index.php">ANASAYFA</a>
            </li>
          </ul>
</<header>
<section><table>
  <tr>
        <th><div style="text-align:center"><img src="images/süpermarket.jpg"alt="images/süpermarket.jpg"width="600px"height="450px"></div></th>
      </tr><tr>
            <th><h1>Süpermarket:</h1><p>Süpermarketlerde Gıda israfı
    En çok gıda israfı yapılan yerlerden biri de süpermarketlerdir. Günümüzde artık çoğu insan alışverişini marketler de yapmaktadır. Alışverişe gelen insanların market arabalarında birçok sebze, meyve, yiyecek, içecek olduğu görülüyor. Bu durumda market sahipleri de mağazalarına daha fazla mal, ürün getirmektedir. Süpermarketlerin sebze ve meyve reyonlarına tonlarca gelen meyve ve sebzenin bir kısmı satılamayıp çöpe atılmaktadır </p></th>
          </tr><tr><th>
            <h2 style="text-align:center">Adres:</h2><p>Kurtuluş, Fevzi Paşa Cd. 89/B,  İzmir</p>  </th> </tr>
            <tr>
              <tr><th>
                <a href="https://www.google.com/maps/@40.3247493,36.545628,686m/data=!3m1!1e3?hl=tr-TR" class="buton bir">
                Adresi Bul</a></th> </tr>
          </section>
        <!-- burada şunu yapıcaksın sayfan db gelen veriler ile dolmalı. bunu için sql sorgusu yaz.  -->
        <?php
        $db = mysqli_connect('localhost', 'root', 'Sultan1234');
        $restauran_sorgu = "SELECT * FROM deneme.ilan WHERE ilan_type=2";
        $sonuc = mysqli_query($db, $restauran_sorgu);
      //  $restauranlar = mysqli_fetch_assoc($sonuc);
      foreach ($sonuc as $satir) {
        $ilan_type = $satir['ilan_type'];
          $id = $satir['id'];
      $ilan_aciklama =  $satir['ilan_aciklama'];
        $ilan_baslik =   $satir['ilan_baslik'];
          $yayinda =      $satir['yayinda'];
          $ilan_yayin_tarihi =  $satir['ilan_yayin_tarihi'];
  ?><div class="right">
    <p><?php echo $ilan_baslik ;
    ?><br><?php echo $ilan_aciklama; ?>
  </p><?php
  if ($yayinda) {
    ?>

    <a href="buy3.php?click= <?php
    print $id ?>" class="buton"><input type="button" name="buton" id="buton" value="Al" style="background-color: black; color: white;"></a>
    <?php
      if($_GET['click']){
        $sorguid=$_GET['click'];
            $aktif_sorgu = "UPDATE deneme.ilan set yayinda=0 WHERE id = $sorguid";
            $sonuc = mysqli_query($db, $aktif_sorgu);
      }
    ?>
    <?php
  }
   ?>

  </div>
  <?php
  }
   ?>
  </body>
</html>
