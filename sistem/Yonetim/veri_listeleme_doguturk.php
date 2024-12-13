<?php
session_start();
include("ayar.php");

if ($_SESSION["giris"] != password_verify("sifre",$hash_sifre) ){
    header("location:cikis.php");
}

$sql="SELECT * FROM doguturkistan;";
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
        $paragraf1 = $_POST["paragraf1"];
        $paragraf2 = $_POST["paragraf2"];
        $paragraf3 = $_POST["paragraf3"];
        $paragraf4 = $_POST["paragraf4"];
        $id = $_POST["id"];
        $sorgu = $baglan->query("insert into doguturkistan (baslik,paragraf1,paragraf2,paragraf3,paragraf4) values ('$baslik','$paragraf1','$paragraf2','$paragraf3','$paragraf4')");      
        echo "<script> window.location.href='veri_listeleme_doguturk.php'; </script>";
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

        <form action="veri_listeleme_doguturk.php?islem=ekle" enctype="multipart/form-data" method="post">
     <b>baslik:</b><input type="text" size="20" name="baslik"> 
     <b>paragraf1:</b><input type="text" size="50" name="paragraf1"> 
     <b>paragraf2:</b><input type="text" size="50" name="paragraf2">
     <hr>
     <b>paragraf3:</b><input type="text" size="50" name="paragraf3">
     <b>paragraf4:</b><input type="text" size="50" name="paragraf4">
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
                <th>paragraf1</th>
                <th>paragraf2</th>
                <th>paragraf3</th>
                <th>paragraf4</th>
                <th>İşlem</th>
            </tr>
            <?php
            while($satir = $sonuc->fetch_assoc())
            {
                echo '<tr>';
                echo '<td>'.$satir['id'].'</td>'; 
                echo '<td>'.$satir['baslik'].'</td>';
                echo '<td>'.$satir['paragraf1'].'</td>';
                echo '<td>'.$satir['paragraf2'].'</td>';
                echo '<td>'.$satir['paragraf3'].'</td>';
                echo '<td>'.$satir['paragraf4'].'</td>';
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