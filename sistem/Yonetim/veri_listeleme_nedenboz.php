<?php
session_start();
include("ayar.php");

if ($_SESSION["giris"] != password_verify("sifre",$hash_sifre) ){
    header("location:cikis.php");
}

$sql="SELECT * FROM nedenbozkurt;";
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
        $baslik = $_POST["baslik"];
        $metin1 = $_POST["metin1"];
        $metin2 = $_POST["metin2"];
        $id = $_POST["id"];
        $sorgu = $baglan->query("INSERT INTO nedenbozkurt (baslik, metin1, metin2) VALUES ('$baslik', '$metin1', '$metin2')");      
        echo "<script> window.location.href='veri_listeleme_nedenboz.php'; </script>";
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
<a href="yonetanasayfa.php">ANASAYFA</a> -<a href="veri_listeleme_turannedir.php">TURAN NEDİR?</a>--<a href="veri_listeleme_nedenboz.php">NEDEN BOZKURT?</a>--<a href="veri_listeleme_doguturk.php">DOĞU TÜRKİSTAN</a>
--<a href="veri_listeleme_kerkuk.php">KERKÜK ÖNEMİ</a>-<a href="cikis.php" onclick="if(!confirm('çıkış yapmak istediğinize emin misiniz'))return false;">ÇIKIŞ</a>
        <br><hr><br><br>
</div>

        <form action="veri_listeleme_nedenboz.php?islem=ekle" enctype="multipart/form-data" method="post">
     <b>baslik:</b><input type="text" size="20" name="baslik"> 
     <b>metin1:</b><input type="text" size="50" name="metin1">
     <b>metin2:</b><input type="text" size="50" name="metin2">
     
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
                <th>baslik</th>
                <th>metin1</th>
                <th>metin2</th>
                <th>İşlem</th>
            </tr>
            <?php
            while($satir = $sonuc->fetch_assoc())
            {
                echo '<tr>';
                echo '<td>'.$satir['id'].'</td>'; 
                echo '<td>'.$satir['baslik'].'</td>';
                echo '<td>'.$satir['metin1'].'</td>';
                echo '<td>'.$satir['metin2'].'</td>';
                echo '<td>';
                echo '<a href="duzenle_nedenboz.php?id='.$satir['id'].'" onclick="closeCurrentTab()">Düzenle</a>&nbsp;&nbsp; ';    
                echo ' <a href="sil_nedenboz.php?id='.$satir['id'].'" onclick="closeCurrentTab()">Sil</a>';
                echo '</td>';
                echo '</tr>';
            }
            ?>
 
        </table>
    </div>
        

    
</body>
</html>