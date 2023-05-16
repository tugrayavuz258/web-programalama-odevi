<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hobilerim</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="iletilensayfa.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
<?php 
session_start();
if ((isset($_POST['emaililetisim']) && isset($_POST['passwordiletisim']) && isset($_POST['baslikiletisim']) && isset($_POST['cinsiyet']) && isset($_POST['Sorun']) && isset($_POST['egitmen']) && isset($_POST['mesaj'])) && (isset($_POST['subeA']) || isset($_POST['subeB'])))
{
    
    $kullaniciEmail = $_POST["emaililetisim"];
    $kullaniciSifre = $_POST["passwordiletisim"];
    $kullaniciAdi = "";
    $baslik = $_POST['baslikiletisim'];
    $kullaniciCinsiyet = $_POST['cinsiyet'];
    $kullaniciSorun = $_POST['Sorun'];
    $kullaniciEgitmen = $_POST['egitmen'];
    $kullaniciMesaj = $_POST['mesaj'];
    $_SESSION["kullaniciEmail"] = $_POST["emaililetisim"];
    $_SESSION["passwordiletisim"] = $_POST["passwordiletisim"];
    $_SESSION["baslik"] = $_POST["baslikiletisim"];
    $_SESSION["kullaniciCinsiyet"] = $_POST["cinsiyet"];
    $_SESSION["kullaniciSorun"] = $_POST["Sorun"];
    $_SESSION["kullaniciEgitmen"] = $_POST["egitmen"];
    $_SESSION["kullaniciMesaj"] = $_POST["mesaj"];
   
    $kontrolStringi = substr( $_POST["emaililetisim"], 0, strpos( $_POST["emaililetisim"], "@"));
    if ($kontrolStringi == $kullaniciSifre && trim($kullaniciSifre) !== '')
    {
     $_SESSION["kullaniciAdi"]  = $kullaniciSifre;
    echo '<script>';
    echo 'var emailscript = "' . $_POST['emaililetisim'] . '";';
    echo 'var sifrescript = "' . $_POST['passwordiletisim'] . '";';
    echo 'var baslikscript = "' . $_POST['baslikiletisim'] . '";';
    echo 'var cinsiyetscript = "' . $_POST['cinsiyet'] . '";';
    echo 'var Sorunscript = "' . $_POST['Sorun'] . '";';
    echo 'var egitmenscript = "' . $_POST['egitmen'] . '";';
    echo 'var kullanicimesajscript = "' . $_POST['mesaj'] . '";';
    
    if (isset($_POST['subeA'])) {
        $kullaniciSube = $_POST['subeA'];
        $_SESSION["kullaniciSube"] = $_POST["subeA"];
        echo 'var subescript = "' . $_POST['subeA'] . '";';
    } else if (isset($_POST['subeB'])) {
        $kullaniciSube = $_POST['subeB'];
        $_SESSION["kullaniciSube"] = $_POST["subeB"];
        echo 'var subescript = "' . $_POST['subeB'] . '";';
    }
    
   
    
    echo 'if (sifrescript=== sifrescript && sifrescript.trim() !== "") {';
    echo '    window.alert("Sifreniz dogru  " + sifrescript);';
    
    echo '    if (baslikscript !== "" && baslikscript !== " ") {';
    echo '        window.alert("Başarıyla başlığınızı oluşturdunuz");';
    
    echo '        if (cinsiyetscript !== "" && cinsiyetscript !== " ") {';
    echo '            window.alert("Başarıyla cinsiyet girişi yaptınız");';
    
    echo '            if (Sorunscript !== "" && Sorunscript !== " ") {';
    echo '                window.alert("Başarıyla sorun girişi yaptınız");';
    
    echo '                if (egitmenscript !== "" && egitmenscript !== " ") {';
    echo '                    window.alert("Başarıyla egitmen girişi yaptınız");';
    
    echo '                    if (kullanicimesajscript !== "" && kullanicimesajscript !== " ") {';
    echo '                        window.alert("Başarıyla mesaj girişi yaptınız");';
    
    echo '                        if (subescript !== "" && subescript !== " ") {';
    echo '                            window.alert("Başarıyla sube girişi yaptınız");';
    echo '                        } else {';
    echo '                            window.alert("Sube girişi yapınız");';
    echo '                            window.location.href = "iletisimloginsiz.html";';
    echo '                        }';
    echo '                    } else {';
        echo '                        window.alert("Mesaj girişi yapınız");';
        echo '                    window.location.href = "iletisimloginsiz.html";';
    echo '                } else {';
    echo '                    window.alert("egitmen girişi yapınız");';
    echo '                    window.location.href = "iletisimloginsiz.html";';
    echo '                }';
   echo '            } else {';
   echo '                window.alert("Sorun girişi yapınız");';
   echo '                window.location.href = "iletisimloginsiz.html";';
   echo '            }';
   echo '        } else {';
   echo '            window.alert("Cinsiyet girişi yapınız");';
 echo '            window.location.href = "iletisimloginsiz.html";';
    echo '        }';
    echo '    } else {';
   echo '        window.alert("Başlık girişi yapınız");';
    echo '        window.location.href = "iletisimloginsiz.html";';
    echo '    }';
    echo '} else {';
    echo '    window.alert("Lütfen şifrenizi doğru giriniz (şifre ile mailinizin @ işaretinden önceki bölümü aynı olmalıdır)");';
    echo '    window.location.href = "iletisimloginsiz.html";';
    echo '}';
    echo '</script>';     

    }
    else
    {
        $hataMesaji = "Lütfen şifrenizi doğru giriniz (şifre ile mailinizin @ işaretinden önceki bölümü aynı olmalıdır)";
        echo '<script>';
        echo 'window.alert("' . $hataMesaji . '");';
        echo 'window.location.href = "iletisimloginsiz.html";';
        echo '</script>';
    }

    
   





}

else{
    $hataMesaji = "Lütfen girişinizi tam yapınız";
    echo '<script>';
    echo 'window.alert("' . $hataMesaji . '");';
    echo 'window.location.href = "iletisimloginsiz.html";';
    echo '</script>';

}



?>









    <div class="container"> 

        <div calss="row">
            <div class="header col-lg-12 col-md-12">
   
                <div class="headerlinktablolarigeneldiv1">
                    <div class="tabloicerigidiv">
                        <tr>
                            <td>
                                <a class="headerlinkler" href="hakkindaloginsiz.html"> HAKKINDA </a>
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
                        <a class="headerlinkler" href="hakkindaloginsiz.html">  (tikla cikis yap) <br> <?php echo  $_SESSION["kullaniciAdi"]  ?> </a>
                        </td>
        
                    </tr>
                </div>
                </div>
        
        
        <div class="sifirla"> </div>
        </div>
        <div  class="headerileyazilararasiboyunabosluk col-12 col-md-6"> &nbsp;</div>





        <div class= "logindiv col-lg-12 col-md-12"> 
        <div class ="basliklar">   <b> email:</b></div>
        <div class ="yazilar">   <b>   <?php  echo $_SESSION["kullaniciEmail"]  ?>   </b></div>

        <div class ="basliklar">   <b> sifre:</b></div>
        <div class ="yazilar">   <b>   <?php echo $_SESSION["passwordiletisim"]  ?>   </b></div>

       

        <div class ="basliklar">   <b> kullanıcı cinsiyet</b></div>
        <div class ="yazilar">   <b>   <?php echo $_SESSION["kullaniciCinsiyet"]  ?>   </b></div>

        <div class ="basliklar">   <b> Sorun:</b></div>
        <div class ="yazilar">   <b>   <?php echo $_SESSION["kullaniciSorun"]  ?>   </b></div>

        <div class ="basliklar">   <b> egitmen:</b></div>
        <div class ="yazilar">   <b>    <?php echo $_SESSION["kullaniciEgitmen"]  ?>   </b></div>

        <div class ="basliklar">   <b> baslik:</b></div>
        <div class ="yazilar">   <b>   <?php echo $_SESSION["baslik"]  ?>   </b></div>

        <div class ="basliklar">   <b> mesaj: </b></div>
        <div class ="yazilar">   <b>   <?php echo $_SESSION["kullaniciMesaj"]   ?>   </b></div>











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