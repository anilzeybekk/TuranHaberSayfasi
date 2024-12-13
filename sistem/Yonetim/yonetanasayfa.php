<?php
session_start();
include("ayar.php");
if ($_SESSION["giris"] != password_verify("sifre",$hash_sifre) ){
    header("location:cikis.php");
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yönetim Paneli AnaSayfa</title>
</head>
<body>
<div style="text-align:center;">
<a href="yonetanasayfa.php">ANASAYFA</a> -<a href="veri_listeleme_turannedir.php">TURAN NEDİR?</a>--<a href="veri_listeleme_nedenboz.php">NEDEN BOZKURT?</a>--<a href="veri_listeleme_doguturk.php">DOĞU TÜRKİSTAN</a>
--<a href="veri_listeleme_kerkuk.php">KERKÜK ÖNEMİ</a>-<a href="cikis.php" onclick="if(!confirm('çıkış yapmak istediğinize emin misiniz'))return false;">ÇIKIŞ</a>
        <br><hr><br><br>
</div>
            <h2 style="text-align:center;"> Menüden Seçim Yapınız </h2>



</body>
</html>