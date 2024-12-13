<?php


include("../Yonetim/ayar.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style type="text/css">

body{   
margin:0 auto; 
}

body{   
margin-top:0; 
}

body{   
margin:0; 
}


#logo{
    height:150px;
    width:150px;
    float:left;         
}

#banner{
    height:150px;
    width:1190px;
    float:left;
    background-color:#05A8A0;
}

#yanMenu {padding:0px; }

#yanMenu ul {
        margin: 0px;
        padding: 0px;
        list-style: none;
        margin-bottom: 50px;
        float: left;
        margin-left:300px;
    }

    #yanMenu li {
        float: left; /* li etiketlerinin yan yana yerleşmesini sağlıyoruz */
        position: relative; /* İçteki ul'lerin buraya bağlı konumlandırılmasını sağlıyoruz */
        width: 140px;
    }

#yanMenu li ul {
display:none; /* içteki listelerin başlangıçta görünmemesini sağlıyoruz */
position:absolute; /* Konumu ayarlayabilmek için */
left:0px; /* soldan uzaklığı kendi menümüze göre ayarlıyoruz*/
top:29px; } /* üstten uzaklığı kendi menümüze göre ayarlıyoruz */

#yanMenu ul li a {
background-color:#19A6B0;
border:1px solid white;
color:white;
font-weight:bold;
display:block;
margin:0px;
padding:2px;
text-decoration:none;
line-height:24px;
text-align:center; }

#yanMenu ul li a:hover {
background-color:white;
color:gray;}

#yanMenu li:hover ul {
display:block;} 

#yazı{
    height:925px;
    width:1000px;
    background-color:#19A6B0;
    margin-left:180px;
    border-radius: 10px;
    border-style: solid;
    border-width: 3px;
    border-color:white;
    float:left;
    padding:5px;
}

#resim{
    float:left;
    margin-top:50px;
    margin-left:35px;
}

#resim2{
    float:left;
    margin-top:50px;
    margin-left:25px;
}
</style>

</head>
<body bgcolor="#D3DED4">

    <div id="logo"><a href="index.php"><img src="./index/logo.png"><img></A></div>
    <div id="banner"><img src="./index/banner.png"></div>

    <div id="yanMenu">
<ul>
    <li><a href="index.php">Turan Nedir ?</a></li>
    <li><a href="turanulkeleri.php">Turan Ülkeleri</a></li>
    <li><a href="nedenbozkurt.php">Neden Bozkurt ? </a></li>
    <li><a href="tatbikatlar.php">Tatbikatlar</a></li>
    <li><a href="kerkukonemi.php">Kerkük Önemi</a></li>
    <li><a href="doguturkistan.php">Doğu Türkistan</a></li>


<div style="clear:both"></div> 

</ul>
</div>

<div id="yazı"><font color="white"><h2><?php
      $sorgu = $baglan->query("SELECT baslik FROM kerkukonemi");
      while($satir = $sorgu->fetch_object()){
        echo "<h2 style='color: white;'>" . $satir->baslik . "</h2>";
    }
    ?></h2>
        <h3>  <?php
      $sorgu = $baglan->query("SELECT metin1 FROM kerkukonemi");
      while($satir = $sorgu->fetch_object()){
        echo "<h3 style='color: white;'>" . $satir->metin1 . "</h3>";
    }
    ?>

            <div id="resim"><img src="./kerkukonemi/kerkuk.jpg"></div>
              <div id="resim2"><img src="./kerkukonemi/kerkuk1.jpg"></div>
            
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            <?php
      $sorgu = $baglan->query("SELECT metin2 FROM kerkukonemi");
      while($satir = $sorgu->fetch_object()){
        echo "<h3 style='color: white;'>" . $satir->metin2 . "</h3>";
    }
    ?>
        </h3>
        </font></div>



</body>
</html>