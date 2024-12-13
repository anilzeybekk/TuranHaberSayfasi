<?php
session_start();
include("ayar.php");
if($_POST){
    $kullanici= $_POST["kullanici"];
    $sifre=$_POST["sifre"];
    $hash_sifre=password_hash($sifre, PASSWORD_DEFAULT);

    $sorgu=$baglan->query("SELECT * FROM kullanici WHERE (kullanici='$kullanici' && sifre='$sifre')");
    $kayitsay=$sorgu->num_rows;
   
    if($kayitsay>0){
        $sorgu = $baglan->query("UPDATE kullanici SET `hash_sifre`='$hash_sifre' WHERE (sifre='$sifre')");
        $_SESSION["giris"]= password_verify("sifre",$hash_sifre);
        setcookie(session_name(), $_COOKIE[session_name()],time()+300, '/');
        echo "<script> window.location.href='yonetanasayfa.php';
        </script>";

    }else{
        echo"
        <script> alert('HATALI KULLANICI GİRİŞİ!');window.location.href='giris.php';
        </script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yönetim Paneli Giriş</title>
</head>
<body>
    <form action ="" method="post">
        <b>Kullanıcı Adı:</b><br>
        <input type="text" name="kullanici" required><br>
        <b>Parola:</b><br>
        <input type="password" name="sifre" required><br><br>
        <input type="submit" value="Giriş Yap">
</form>
</body>
</html>