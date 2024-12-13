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

#yazı {
          margin-right: 90px;
          margin-left:300px;
          

         }

         #resim1{
           width:300px;
           height:200px;
           float:left;
           margin-left:75px;
       }

       #resim2{
           width:300px;
           height:200px;
           float:left;
           margin-left:10px;
       }

       #resim3{
           width:300px;
           height:200px;
           float:left;
           margin-left:10px;
       }

       #resim4{
           width:300px;
           height:200px;
           float:left;
           margin-left:10px;
           margin-bottom:20px;
       }

       #resim5{
           width:300px;
           height:200px;
           float:left;
           margin-left:200px;
       }

       #resim6{
           width:300px;
           height:200px;
           float:left;
           margin-left:10px;
       }

       #resim7{
           width:300px;
           height:200px;
           float:left;
           margin-left:10px;
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
<br><br>
<div id="yazı"><h1><font color="black">TURAN BİRLİĞİ ÜLKELERİ VE NÜFUSLARI</font></h1></div><br>

<font color="black">

      <div class="w3-content" style="max-width:500px;position:relative;margin-left:415px;">

        <div class="w3-display-container mySlides" style="display: block;">
          <img src="./turanulkeleri/türkiye.png" style="width:100%">
          <div class="w3-display-bottomleft w3-large w3-container w3-padding-hor-16 w3-black">
           <h2>TÜRKİYE - Nüfus:85,37 milyon</h2>
          </div>
        </div>
        
        <div class="w3-display-container mySlides" style="display: none;">
          <img src="./turanulkeleri/azer.png" style="width:100%">
          <div class="w3-display-bottomright w3-large w3-container w3-padding-hor-16 w3-black">
            <h2>AZERBAYCAN - Nüfus:10,412 milyon </h2>
          </div>
        </div>
        
        <div class="w3-display-container mySlides" style="display: none;">
          <img src="./turanulkeleri/kktc.png" style="width:100%">
          <div class="w3-display-topleft w3-large w3-container w3-padding-hor-16 w3-black">
            <h2>KUZEY KIBRIS T.C. - Nüfus:382 bin </h2>
          </div>
        </div>
        
        <div class="w3-display-container mySlides" style="display: none;">
          <img src="./turanulkeleri/kazak.png" style="width:100%">
          <div class="w3-display-topright w3-large w3-container w3-padding-hor-16 w3-black">
            <h2>KAZAKİSTAN - Nüfus:20,15 milyon </h2>
          </div>
        </div>
        
        <div class="w3-display-container mySlides" style="display: none;">
          <img src="./turanulkeleri/özbek.png" style="width:100%">
          <div class="w3-display-middle w3-large w3-container w3-padding-hor-16 w3-black">
            <h2>ÖZBEKİSTAN - Nüfus:37 milyon </h2>
          </div>
        </div>
        
                <div class="w3-display-container mySlides" style="display: none;">
          <img src="./turanulkeleri/türkmen.png" style="width:100%">
          <div class="w3-display-middle w3-large w3-container w3-padding-hor-16 w3-black">
             <h2>TÜRKMENİSTAN - Nüfus:7.52 milyon </h2>
          </div>
        </div>
        
                <div class="w3-display-container mySlides" style="display: none;">
          <img src="./turanulkeleri/kırgız.jpg" style="width:100%">
          <div class="w3-display-middle w3-large w3-container w3-padding-hor-16 w3-black">
            <h2> KIRGIZİSTAN - Nüfus:6,86 milyon </h2>
          </div>
        </div>
        
        
        
        <a class="w3-btn-floating w3-hover-dark-grey" style="position:absolute;top:40%;left:-40px" onclick="plusDivs(-1)">❮</a>
        <a class="w3-btn-floating w3-hover-dark-grey" style="position:absolute;top:40%;right:-40px;" onclick="plusDivs(1)">❯</a>
        
        </div>
        
        <script>
            var slideIndex = 1;
            showDivs(slideIndex);
        
            function plusDivs(n) {
                showDivs(slideIndex += n);
            }
        
            function showDivs(n) {
                var i;
                var x = document.getElementsByClassName("mySlides");
                if (n > x.length) { slideIndex = 1 }
                if (n < 1) { slideIndex = x.length };
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";
                }
                x[slideIndex - 1].style.display = "block";
            }
        </script>
        
   




</body>
</html>