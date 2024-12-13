<?php

session_start();
include("ayar.php");

if ($_SESSION["giris"] != password_verify("sifre",$hash_sifre) ){
    header("location:cikis.php");
}

if ($baglan->connect_error)
{
    exit($baglan->connect_error);
}
else
{
    echo "Bağlantı kuruldu.<br>";
}

$id=$_GET['id'];
$sql="DELETE FROM nedenbozkurt WHERE `id`=$id;";
$sonuc = $baglan->query($sql);
if (!$sonuc)
{
    echo $baglan->error;
}
else
{
    echo"
        <script> alert('VERİ SİLİNDİ');window.location.href='veri_listeleme_nedenboz.php';
        </script>";}



?>