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
    height:1400px;
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

                #ic{
                    width:440px;
                    height:250px;
                    float:left;
                }

#resim{
    float:left;
    margin-left:75px;
}

#resim2{
    float:left;
    margin-left:35px;
}

#resim3{
    float:left;
    margin-left:35px;
}

#resim4{
    float:left;
    margin-left:35px;
}

#resim5{
    float:left;
    margin-left:35px;
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

<script type="application/json" id="__browserLink_initializationData">
    {"appName":"Chrome","requestId":"e01b6fd515874ca99b18c5fe05920f92"}
</script>
<script type="text/javascript" src="./dogut_files/browserLink" async="async"></script>




<div id="yazı">
    <?php
    $sorgu = $baglan->query("SELECT baslik FROM doguTurkistan");
    while($satir = $sorgu->fetch_object()){
        echo "<h2 style='color: white;'>" . $satir->baslik . "</h2>";
    }
    ?>
<div id="ic">
    <h3>
    <?php
    $sorgu = $baglan->query("SELECT paragraf1 FROM doguTurkistan");
    while($satir = $sorgu->fetch_object()){
        echo "<h3 style='color: white;'>" . $satir->paragraf1 . "</h3>";
    }
    ?>
    </h3>
</div>

<div id="resim">
    <img src="./doguturkistan/dtbayrak.png" alt="Doğu Türkistan Bayrağı">
</div>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br>

    

        <h3> <?php
    $sorgu = $baglan->query("SELECT paragraf2 FROM doguTurkistan");
    while($satir = $sorgu->fetch_object()){
        echo "<h3 style='color: white;'>" . $satir->paragraf2 . "</h3>";
    }
    ?></h3>

        <div id="resim2"><img src="./doguturkistan/dt2.jpg"></div>
        <div id="resim3"><img src="./doguturkistan/dt3.jpg"></div>
        <br><br><br><br><br><br><br><br><br><br><br><br><br>
        <h3> <?php
    $sorgu = $baglan->query("SELECT paragraf3 FROM doguTurkistan");
    while($satir = $sorgu->fetch_object()){
        echo "<h3 style='color: white;'>" . $satir->paragraf3 . "</h3>";
    }
    ?></h3>

        <h3><?php
    $sorgu = $baglan->query("SELECT paragraf4 FROM doguTurkistan");
    while($satir = $sorgu->fetch_object()){
        echo "<h3 style='color: white;'>" . $satir->paragraf4 . "</h3>";
    }
    ?>
        </h3>

           <div id="resim4"><img src="./doguturkistan/dt4.jpg"></div>
           <div id="resim5"><img src="./doguturkistan/dt.jpg"></div>



    </font></div>

</body>
</html>