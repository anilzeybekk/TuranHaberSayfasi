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
    $baslik1=$_POST['baslik1'];
    $baslik2=$_POST['baslik2'];
    $metin1=$_POST['metin1'];
    $metin2=$_POST['metin2'];

    $baslik1 =$baglan->real_escape_string($baslik1);
    $metin1 = $baglan->real_escape_string($metin1);
    $metin2 = $baglan->real_escape_string($metin2);
    $baslik2 = $baglan->real_escape_string($baslik2);

    $guncelle = "UPDATE turannedir SET baslik1 = '$baslik1', baslik2 = '$baslik2'
    , metin1 = '$metin1', metin2 = '$metin2'WHERE id = $duzenlenecek_id;";
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
    header("Location: veri_listeleme_turannedir.php");
}

$sql="SELECT * FROM turannedir WHERE `id`=$id;";
$sonuc = $baglan->query($sql);
if (!$sonuc) { exit($baglan->error); }
else { $veri = $sonuc->fetch_assoc(); }

?>


<form method="post" action="<?=$_SERVER['PHP_SELF']; ?>">
    <b>başlık1:<b> <input type="text" size="50" width="50px" name="baslik1" value="<?=$veri['baslik1']; ?>">
    <b>başlık2:<b> <input type="text" size="50" width="50px" name="baslik2" value="<?=$veri['baslik2']; ?>"><br><br>
    <b>metin1:<b>
    <textarea style="width:30%;height:150px;" name="metin1"><?php echo $veri['metin1']; ?></textarea>
    <b>metin2:<b>
    <textarea style="width:30%;height:150px;" name="metin2"><?php echo $veri['metin2']; ?></textarea><br><br>
    <input type="hidden" name="id" value="<?=$id; ?>">
    <input type="submit" name="form_gonder" value="Düzenle">
    <input type="submit" name="veri" value="Panele Dön">
</form>