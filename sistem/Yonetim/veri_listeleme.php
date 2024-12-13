<?php
session_start();
include("ayar.php");

if ($_SESSION["giris"] != password_verify("sifre",$hash_sifre) ){
    header("location:cikis.php");
}

$sql="SELECT * FROM baliklar;";
$sonuc = $baglan->query($sql);
if (!$sonuc)
{
    $hata=$baglan->error;
}
else
{
    $toplam_miktar=$sonuc->num_rows;
}

$islem = $_GET["islem"];

    if ($islem== "ekle") {
        $balik_adi = $_POST["balik_adi"];
        $balik_bilgi = $_POST["balik_bilgi"];
        $sorgu = $baglan->query("insert into baliklar (balik_adi,balik_bilgi) values ('$balik_adi','$balik_bilgi')");      
        echo "<script> window.location.href='veri_listeleme.php'; </script>";
    }




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="text-align:center;">

<div style="text-align:center;">
        <a href="yonetanasayfa.php">ANASAYFA</a> -<a href="veri_listeleme.php">VERİ EKLEME/DÜZENLEME</a>-
        <a href="hakkimizda.php">HAKKIMIZDA</a>-<a href="cikis.php" onclick="if(!confirm('çıkış yapmak istediğinize emin misiniz'))return false;">ÇIKIŞ</a>
        <br><hr><br><br>
</div>

        <form action="veri_listeleme.php?islem=ekle" enctype="multipart/form-data" method="post">
     <b>Balık Adı:</b><input type="text" size="20" name="balik_adi"> 
     <b>Balık Bilgisi:</b><input type="text" size="50" name="balik_bilgi"> 
        <input type="submit" value="Kaydet">
    </form>

        <?php
if(!isset($hata) && $toplam_miktar>0)
{
    echo "Toplam veri miktarı: ".$toplam_miktar;
}
    ?>

    <div style="margin-bottom:20px;  padding: 20px; border: 2px solid red;">
        <table>
            <tr>
                <th>id</th>
                <th>Balık Türü</th>
                <th>Balık Özellikleri</th>
                <th>İşlem</th>
            </tr>
            <?php
            while($satir = $sonuc->fetch_assoc())
            {
                echo '<tr>';
                echo '<td>'.$satir['id'].'</td>';
                echo '<td>'.$satir['balik_adi'].'</td>';
                echo '<td>'.$satir['balik_bilgi'].'</td>';
                echo '<td>';
                echo '<a href="duzenle.php?id='.$satir['id'].'" onclick="closeCurrentTab()">Düzenle</a>&nbsp;&nbsp; ';    
                echo ' <a href="sil.php?id='.$satir['id'].'" onclick="closeCurrentTab()">Sil</a>';
                echo '</td>';
                echo '</tr>';
            }
            ?>
 
        </table>
    </div>
        

    
</body>
</html>