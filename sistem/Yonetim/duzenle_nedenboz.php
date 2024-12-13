<?php

session_start();
include("ayar.php");

if ($_SESSION["giris"] != password_verify("sifre",$hash_sifre) ){
    header("location:cikis.php");
}

if ($baglan->connect_error) { exit($baglan->connect_error); }
else { echo "Bağlantı kuruldu.<br>"; }

if(isset($_POST['form_gonder']))
{
    $duzenlenecek_id=$_POST['id'];
    $baslik=$_POST['baslik'];
    $metin1=$_POST['metin1'];
    $metin2=$_POST['metin2'];

    $baslik =$baglan->real_escape_string($baslik);
    $metin1 = $baglan->real_escape_string($metin1);
    $metin2 = $baglan->real_escape_string($metin2);

    $guncelle = "UPDATE nedenbozkurt SET baslik = '$baslik', metin1 = '$metin1', metin2 = '$metin2'WHERE id = $duzenlenecek_id;";
    $sonuc = $baglan->query($guncelle);
    if (!$sonuc) { echo $baglan->error; }
    else { echo "Güncellendi"; }

    $id=$duzenlenecek_id;
}
else
{
    $id=$_GET['id'];
}
if(isset($_POST['veri'])){
    header("Location: veri_listeleme_nedenboz.php");
}

$sql="SELECT * FROM nedenbozkurt WHERE `id`=$id;";
$sonuc = $baglan->query($sql);
if (!$sonuc) { exit($baglan->error); }
else { $veri = $sonuc->fetch_assoc(); }

?>


<form method="post" action="<?=$_SERVER['PHP_SELF']; ?>">
    <b>başlık:<b> <input type="text" size="50" width="50px" name="baslik" value="<?=$veri['baslik']; ?>"><br><br>
    <b>metin1:<b><br>
    <textarea style="width:30%;height:150px;" name="metin1"><?php echo $veri['metin1']; ?></textarea><br><br>
    <b>metin2:<b><br>
    <textarea style="width:30%;height:150px;" name="metin2"><?php echo $veri['metin2']; ?></textarea><br><br>
    <input type="hidden" name="id" value="<?=$id; ?>">
    <input type="submit" name="form_gonder" value="Düzenle">
    <input type="submit" name="veri" value="Panele Dön">
</form>