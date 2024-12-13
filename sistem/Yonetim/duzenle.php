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
    $paragraf1=$_POST['paragraf1'];
    $paragraf2=$_POST['paragraf2'];
    $paragraf3=$_POST['paragraf3'];
    $paragraf4=$_POST['paragraf4'];

    $baslik =$baglan->real_escape_string($baslik);
    $paragraf1 = $baglan->real_escape_string($paragraf1);
    $paragraf2 = $baglan->real_escape_string($paragraf2);
    $paragraf3 = $baglan->real_escape_string($paragraf3);
    $paragraf4 = $baglan->real_escape_string($paragraf4);

    $guncelle = "UPDATE doguturkistan SET baslik = '$baslik', paragraf1 = '$paragraf1', paragraf2 = '$paragraf2', paragraf3 = '$paragraf3', paragraf4 = '$paragraf4' WHERE id = $duzenlenecek_id;";
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
    header("Location: veri_listeleme_doguturk.php");
}

$sql="SELECT * FROM doguturkistan WHERE `id`=$id;";
$sonuc = $baglan->query($sql);
if (!$sonuc) { exit($baglan->error); }
else { $veri = $sonuc->fetch_assoc(); }

?>


<form method="post" action="<?=$_SERVER['PHP_SELF']; ?>">
    <b>başlık:<b> <input type="text" size="50" width="50px" name="baslik" value="<?=$veri['baslik']; ?>"><br><br>
    <b>paragraf1:</br>
    <textarea style="width:35%;height:150px;" name="paragraf1"><?php echo $veri['paragraf1']; ?></textarea><br><br>
    <b>paragraf2:</br>
    <textarea style="width:35%;height:150px;" name="paragraf2"><?php echo $veri['paragraf2']; ?></textarea><br><br>
    <b>paragraf3:</br>
    <textarea style="width:35%;height:150px;" name="paragraf3"><?php echo $veri['paragraf3']; ?></textarea><br><br>
    <b>paragraf4:</br>
    <textarea style="width:35%;height:150px;" name="paragraf4"><?php echo $veri['paragraf4']; ?></textarea><br><br>
    <input type="hidden" name="id" value="<?=$id; ?>">
    <input type="submit" name="form_gonder" value="Düzenle">
    <input type="submit" name="veri" value="Panele Dön">
</form>