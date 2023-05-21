<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IletilenSayfa</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="iletilensayfa.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">



<script>
  var emailscript = "<?php echo $_POST['emaililetisim']; ?>";
  var sifrescript = "<?php echo $_POST['passwordiletisim']; ?>";
  var  baslikscript = "<?php echo $_POST['baslikiletisim']; ?>";
  var  baslikscript = "<?php echo $_POST['baslikiletisim']; ?>";
  
  var kontrolString = "<?php echo substr($_POST['emaililetisim'], 0, strpos($_POST['emaililetisim'], '@')); ?>";
if(emailscript!== "" && emailscript !== " ")
{
    <?php
$emailphp = $_POST["emaililetisim"];
$_SESSION["emailphp"] = $_POST["emaililetisim"];
?>
         if (kontrolString == sifrescript && sifrescript.trim() !== '') {
         <?php
         $sifrephp = $_POST['passwordiletisim'];
         $_SESSION["sifrephp"] = $_POST["passwordiletisim"];
         ?>
                if(baslikscript!== "" && baslikscript !== " "){
                    <?php
                         $baslikphp = $_POST['baslikiletisim'];
                         $_SESSION["baslikphp"] = $_POST['baslikiletisim'];
                        ?>
                     
                }
                else{
                    window.alert("Lütfen baslik girisi yapiniz giriniz");
                     window.location.href = "iletisimloginsiz.html";
                }

         } else {
          window.alert("Lütfen şifrenizi doğru giriniz (şifre ile mailinizin @ işaretinden önceki bölümü aynı olmalıdır)");
          window.location.href = "iletisimloginsiz.html";
           }
}
  else {
    window.alert("Lütfen emailinizi doğru giriniz");
    window.location.href = "iletisimloginsiz.html";

  }

  <?php

$emailphp = $_POST["emaililetisim"];
                                        $sifrephp = $_POST["passwordiletisim"];
                                        $kullaniciadiphp= "";
                                        $baslikphp = $_POST['baslikiletisim'];
                                        $cinsiyetphp = $_POST['cinsiyet'];
                                        $sorunphp= $_POST['Sorun'];
                                        $egitmenphp = $_POST['egitmen'];
                                        $mesajphp= $_POST['mesaj'];
                                        $subephp= $_POST['sube'];
						 $_SESSION["emailphp "]= $_POST["emaililetisim"];
                                       $_POST["emaililetisim"];
                                       $_SESSION["subephp"] = $_POST["sube"];
                                          $_SESSION["sifrephp"] = $_POST["passwordiletisim"];
                                           $_SESSION["baslikphp"] = $_POST["baslikiletisim"];
                                            $_SESSION["cinsiyetphp"] = $_POST["cinsiyet"];
                                              $_SESSION["sorunphp"] = $_POST["Sorun"];
                                                 $_SESSION["egitmenphp"] = $_POST["egitmen"];
                                                     $_SESSION["mesajphp"] = $_POST["mesaj"];



?>




</script>
</head>
<body>






   




    <div class="container"> 

        <div calss="row">
            <div class="header col-lg-12 col-md-12">
   
                <div class="headerlinktablolarigeneldiv1">
                    <div class="tabloicerigidiv">
                        <tr>
                            <td>
                                <a class="headerlinkler" href="index.html"> HAKKINDA </a>
                            </td>
        
                            <td>
                                <a  class="headerlinkler" href="ozgecmisloginsiz.html"> ÖZGEÇMİŞ</a>
                            </td>
        
                            <td>
                                <a class="headerlinkler" href="sehrimloginsiz.html"> SEHRİM</a>
                            </td>
        
                        </tr>
        
                        <tr>
                            <td>
                                <a class="headerlinkler" href="mirasimizloginsiz.html"> MİRASIMIZ </a>
                            </td>
            
                            <td>
                                <a class="headerlinkler" href="hobilerimloginsiz.html"> HOBİLERİM</a>
                            </td>
                            <td>
                            <a class="headerlinkler" href="iletisimloginsiz.html"> ILETISIM </a>
                        </td>
        
                        </tr>
        
        
                    </div>
        
                </div>
                
                <div class="headerbaslik "> 
                    TUGRA.com
                </div>
        
        
                <div class="headerlinktablolarigeneldiv2">
                <div class="tabloicerigidiv2 ">
                    <tr>
                       
                        <td>
                        <a class="headerlinkler" href="login.html">  (tikla cikis yap) <br> <?php echo   $_SESSION["sifrephp"]  ?> </a>
                        </td>
        
                    </tr>
                </div>
                </div>
        
        
        <div class="sifirla"> </div>
        </div>
        <div  class="headerileyazilararasiboyunabosluk col-12 col-md-6"> &nbsp;</div>




 
        <div class= "logindiv col-lg-12 col-md-12"> 
        <div class ="basliklar">   <b> email:</b></div>
        <div class ="yazilar">   <b>   <?php  echo  $_SESSION["emailphp "]  ?>   </b></div>

        <div class ="basliklar">   <b> sifre:</b></div>
        <div class ="yazilar">   <b>   <?php echo $_SESSION["sifrephp"]  ?>   </b></div>
        <div class ="basliklar">   <b> sube:</b></div>
        <div class ="yazilar">   <b>   <?php echo $_SESSION["subephp"]  ?>   </b></div>

       

        <div class ="basliklar">   <b> kullanıcı cinsiyet</b></div>
        <div class ="yazilar">   <b>   <?php echo  $_SESSION["cinsiyetphp"]  ?>   </b></div>

        <div class ="basliklar">   <b> Sorun:</b></div>
        <div class ="yazilar">   <b>   <?php echo $_SESSION["sorunphp"]   ?>   </b></div>

        <div class ="basliklar">   <b> egitmen:</b></div>
        <div class ="yazilar">   <b>    <?php echo  $_SESSION["egitmenphp"]  ?>   </b></div>

        <div class ="basliklar">   <b> baslik:</b></div>
        <div class ="yazilar">   <b>   <?php echo $_SESSION["baslikphp"] ?>   </b></div>

        <div class ="basliklar">   <b> mesaj: </b></div>
        <div class ="yazilar">   <b>   <?php echo  $_SESSION["mesajphp"]  ?>   </b></div>











</div>
















        

        <div  class="headerileyazilararasiboyunabosluk col-12 col-md-6"> &nbsp;</div>





<div class="footer col-lg-12 col-md-12">
    <div class="footerkimlik "> Tugra YAVUZ B221210064  1-B</div>
     
   
     <div class="footersosyallinkler ">
        <a  href="https://www.instagram.com/tugra_yavuz/?hl=tr"> 
            <img src="instagram.png" width="50" height="50"> 
        </a>
            <a  href="https://twitter.com/tugra_yavuz258"> 
                <img src="twitter.png" width="50" height="50"> 
            </a>
            <a  href="https://github.com/tugrayavuz258"> 
                <img src="github.png" width="50" height="50"> 


     </div>
     </div>








        </div>
</div>
</body>
</html>