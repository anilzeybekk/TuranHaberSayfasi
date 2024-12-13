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
        float: left;
        position: relative;
        width: 140px;
    }

#yanMenu li ul {
display:none; 
position:absolute; 
left:0px;
top:29px; } 

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
height:650px;
width:500px;
background-color:#19A6B0;
margin-left:150px;
border-radius: 10px;
border-style: solid;
border-width: 3px;
border-color:white;
float:left;
}

#yazı2{
height:650px;
width:500px;
background-color:#19A6B0;
margin-left:50px;
border-radius: 10px;
border-style: solid;
border-width: 3px;
border-color:white;
float:left;
}

#iç{
float:left;
margin-left:5px;
margin-top:10px;
}

#içresim{
float:left;
margin-left:25px;
margin-top:90px;
}

#iç2{
float:left;
margin-left:5px;
margin-top:10px;
}

#içresim2{
float:left;
margin-left:25px;
margin-top:15px;
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

<div id="yazı">

<div id="iç"><font color="white"><b>  <?php
    $sorgu = $baglan->query("SELECT baslik1 FROM turannedir");
    while($satir = $sorgu->fetch_object()){
        echo "<h3 style='color: white;'>" . $satir->baslik1 . "</h3>";
    }
    ?>   
           
    <h3>
    <?php
    $sorgu = $baglan->query("SELECT metin1 FROM turannedir");
    while($satir = $sorgu->fetch_object()){
        echo "<h3 style='color: white;'>" . $satir->metin1 . "</h3>";
    }
    ?>
    </h3>   </b></font></div>
           <div id="içresim">  <img src="./index/harita1.jpg"></div>

        </div>
        <div id="yazı2">
         <div id="iç2">   <font color="white"><b><?php
    $sorgu = $baglan->query("SELECT baslik2 FROM turannedir");
    while($satir = $sorgu->fetch_object()){
        echo "<h3 style='color: white;'>" . $satir->baslik2 . "</h3>";
    }
    ?> 
            <?php
    $sorgu = $baglan->query("SELECT metin2 FROM turannedir");
    while($satir = $sorgu->fetch_object()){
        echo "<h3 style='color: white;'>" . $satir->metin2 . "</h3>";
    }
    ?>
                                              </b></font></div>
            <div id="içresim2"><img src="./index/turanduvar.jpg"></div>


        </div>

</div>

</body>
</html>

