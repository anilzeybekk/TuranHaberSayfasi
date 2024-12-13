<?php



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
                    float:left;
                    margin-left:500px;
                }

.mySlides {
    display:none;
    float:left;
    margin-left:400px;

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

<div id="yazı"><font color="black"><h1> Bazı Tatbikat Görüntüleri  </h1></font> </div>

    <div class="w3-content w3-section" style="max-width:600px">
  <img class="mySlides" src="./tatbikatlar/turanbayrak.jpg" style="width: 100%; display: none;">
  <img class="mySlides" src="./tatbikatlar/tatbikat1.jpg" style="width: 100%; display: none;">
  <img class="mySlides" src="./tatbikatlar/tatbikat2.jpg" style="width: 100%; display: none;">
  <img class="mySlides" src="./tatbikatlar/tatbikat3.jpg" style="width: 100%; display: none;">
  <img class="mySlides" src="./tatbikatlar/tatbikat4.webp" style="width: 100%; display: none;">
  <img class="mySlides" src="./tatbikatlar/tatbikat5.jpg" style="width: 100%; display: none;">
  <img class="mySlides" src="./tatbikatlar/tatbikat6.jpg" style="width: 100%; display: block;">
</div>

<script>
    var myIndex = 0;
    carousel();

    function carousel() {
        var i;
        var x = document.getElementsByClassName("mySlides");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        myIndex++;
        if (myIndex > x.length) { myIndex = 1 }
        x[myIndex - 1].style.display = "block";
        setTimeout(carousel, 2000); // Change image every 2 seconds
    }
</script>

</body>
</html>