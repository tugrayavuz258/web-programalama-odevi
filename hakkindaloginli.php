


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hakkinda</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="hakkindaloginli.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">







</head>
<body>

<?php
session_start();
if (isset($_POST['emailname']) && isset($_POST['passwordname'])) {
    $kullaniciEmail = $_POST["emailname"];
    $kullaniciSifre = $_POST["passwordname"];
    $kullaniciAdi = "";

    $kontrolStringi = substr($kullaniciEmail, 0, strpos($kullaniciEmail, "@"));

    if ($kontrolStringi == $kullaniciSifre && trim($kullaniciSifre) !== '') {
        $_SESSION["kullaniciAdi"] = $_POST["passwordname"];
        $alertmesaji = "Sifreniz dogru hos geldiniz  " . $_POST["passwordname"] ;
        echo '<script>';
        echo 'window.alert("' . $alertmesaji . '");';
        echo '</script>';
        
    } else {
        $hataMesaji = "Lütfen şifrenizi doğru giriniz (şifre ile mailinizin @ işaretinden önceki bölümü aynı olmalıdır)";
        echo '<script>';
        echo 'window.alert("' . $hataMesaji . '");';
        echo 'window.location.href = "login.html";';
        echo '</script>';
        
        
    }
} else {
    $hataMesaji = "Lütfen girişinizi tam yapınız";
    echo '<script>';
    echo 'window.alert("' . $hataMesaji . '");';
    echo 'window.location.href = "login.html";';
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
                        <a  class="headerlinkler" href="ozgecmisloginli.php"> ÖZGEÇMİŞ</a>
                    </td>

                    <td>
                        <a class="headerlinkler" href="sehrimloginli.php"> SEHRİM</a>
                    </td>

                </tr>

                <tr>
                    <td>
                        <a class="headerlinkler" href="mirasimizloginli.php"> MİRASIMIZ </a>
                    </td>
    
                    <td>
                        <a class="headerlinkler" href="hobilerimloginli.php"> HOBİLERİM</a>
                    </td>
                    <td>
                                <a class="headerlinkler" href="iletisimloginli.php"> ILETISIM </a>
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
    
     

    <div  class="headerileyazilararasiboyunabosluk col-lg-12 col-md-6"> &nbsp;</div>





<div class="kisacakendim col-lg-12 col-md-6">
    <h1 class="kendim2"> <b> HAKKIMDA</b></h1>
    <p class="kendim1"> 2004 yılında izmirde doğdum. Kendimi bildim bileli her zaman teknolojiye karşı inanılmaz ilgili biriydim.</p>
    <p class="kendim1"> Zamanla kodlama dikkatimi çekti bu yüzden bu konuya yoğunlaşabilmek için bilgisayar mühendiliği bölümünü tercih ettim. </p>
    <p class="kendim1">  Bunun yanında hobi olarak elektronik oyunlar ve fitness sporu ile ilgileniyorum. Ayrıyetten futbola büyük ilgi duyuyor, oynamaya çalışıyorum. Büyük bir beşiktaş taraftarıyım.</p>
    <p class="kendim1"> Beni daha yakından tanıyabileceğiniz siteme hoşgeldiniz :] instagram sayfama aşşağıdan ulaşabilirsiniz.</p>

    <a  href="https://www.instagram.com/tugra_yavuz/?hl=tr"> 
        <img src="instagram.png" width="50" height="50"> 
        </a>

</div>

<div class="fitness col-lg-12 col-md-6">
    <h1 class="kendim2"> <b> FITNESS</b></h1>
    <p class="kendim1"> oncelikle her sey ortaokulun sonunda lgs sınavı hakkında aşırı streslenmem ile başladı dolayısıyla bu da yemek bozukluguna yol açtı. </p>
    <p class="kendim1"> liseye gittikten sonra da bu durum devam etti ve aşırı kilolu bir insanaa dönüştüm </p>
    <p class="kendim1"> ardından bu yeme bozukluğum yerini başka bir yeme bozukluğu olan anoreksiyaya bıraktı ve aşırı zayıfladım </p>
    <p class="kendim1">  üniversite sınavı biter bitmez. anoreksik etkileri psikolog desteği ile geri bıraktıktan sonra bu spordabaşladım ve bu spor artık benim her şeyim  </p>
    <p class="kendim1"> önüzümdeki yıllarda profesyonel vücut geliştiricilere yakın bir vücuda sahip olmak istiyor ve bunun için çalışıyorum. aşağıdaki logo aracılığı ile salon önerime erişebilirsin.</p>
    
    <a  href="https://nossfitclub.com/"> 
    <img src="gym.png " width="50" height="50"> 
    </a>
    
    <div class="sifirla"> </div>
</div>

<div class="sifirla"></div>




<div  class="headerileyazilararasiboyunabosluk col-12 col-md-6"> &nbsp;</div>



   
    <div class="slider col-lg-12 col-md-6">
    <div id="carouselExampleControls" class="carousel slide " data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="vodafone.jpg" class="d-block w-100" >
          </div>
          <div class="carousel-item">
            <img src="aboubakar.jpg" class="d-block w-100" >
          </div>  
          <div class="carousel-item">
            <img src="noss-fitness.jpg" class="d-block w-100">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" ></script>
         </div>
     

    
    <div class="sifirla"> </div>


<div class="slideriçinboyunabosluk col-lg-12 col-md-6"></div>

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