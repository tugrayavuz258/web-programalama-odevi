<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com
/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>iletisim</title>
    <link rel="stylesheet" type="text/css" href="iletisimloginli.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    

    <script>
            function uyaricikar()
            {
                window.alert("UYARI BUTONUNA TIKLADINIZ!!!");
            }


    </script>
</head>
<body>





<div class="container"> 
    <div class="row"> 

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
                        <a class="headerlinkler" href="login.html">  (tikla cikis yap) <br> <?php session_start(); echo $_SESSION["kullaniciAdi"];  ?> </a>
                        </td>
                </tr>
            </div>
            </div>
    
    
    <div class="sifirla"> </div>
    </div>

    <div class="loginheaderboslukdiv col-lg-12 col-md-12 "> &nbsp;</div>
    
    
    <div class= "logindiv col-lg-12 col-md-12">
        <form action="iletilensayfa.php" method="POST"> 
        <div class="loginyazisi_ic"> <b>VERİ GİRİŞLERİ </b></div> <br> 
        <div class ="labelSekliYazi_ic">   <b> e-posta:</b></div> 
        <div class="iceriyetextboxekleme_ic">  <input type="email" placeholder="Buraya e-posta girin"  name="emaililetisim"  >  </div> <br>
        <div class ="labelSekliYazi_ic">   <b> sifre:</b></div> 
        <div class="iceriyetextboxekleme_ic">  <input type="password" placeholder="sifrenizi buraya girin"  name="passwordiletisim"   >  </div> <br>
        <div class ="labelSekliYazi_ic">   <b> Baslik:</b></div> 
        <div class="iceriyetextboxekleme_ic">  <input type="text" placeholder="Sorununuz icin baslik belirleyin"  name="baslikiletisim"   >  </div> <br>
        <div class ="labelSekliYazi_ic">   <b> Cinsiyet:</b></div>
        <div class="iceriyetextboxekleme_ic">  <input type="radio"   name="cinsiyet"  value="erkek" checked> erkek  </div> <br>
        <div class="iceriyetextboxekleme_ic">  <input type="radio"   name="cinsiyet"  value="kadin" > kadin </div> <br>
        <div class ="labelSekliYazi_ic">   <b> sube seçimi:</b></div>
        <div class="iceriyetextboxekleme_ic">  <input type="checkbox"   name="sube"  value="Asubesi" checked> A subesi </div> <br>
        <div class="iceriyetextboxekleme_ic">  <input type="checkbox"   name="sube"  value="Bsubesi" >  B subesi </div> <br>
        <div class ="labelSekliYazi_ic">   <b> Dosya yukle:</b></div>
        <div class="iceriyetextboxekleme_ic">  <input type="file"   name="dosya"  >  </div>  <br>
        <div class ="labelSekliYazi_ic">   <b> Sorununuz ne hakkinda</b></div>  
        <div class="iceriyetextboxekleme_ic"> 
            <select name="Sorun">
                <option value="baglanti">baglanti</option>
                <option value="egitmen">Egitmen</option>
                <option value="ders icerigi">Ders icerigi</option>         
                </select>
        </div> <br>
        <div class ="labelSekliYazi_ic">   <b> egitmen sec:</b></div>  
        <div class="iceriyetextboxekleme_ic"> 
            <input type="text" list="egitmenler" name="egitmen">
            <datalist id="egitmenler">
              <option value="Heski">Hüseyin Eski</option>
              <option value="COZ">Cemil Öz</option>
            </datalist>
        
        
        
        
        </div> <br>

        <div class ="labelSekliYazi_ic">   <b> Sorununuz hakkinda detay veriniz</b></div>  
        <textarea name="mesaj" rows="5" cols="25">
            
            </textarea>










        <div class="iceriyebuttonekleme_ic">   <input type="button" value="Tikla ve uyari cikar" class="btn btn-primary btm-lg" onclick="uyaricikar()"> </div><br>
        <div class="iceriyebuttonekleme_ic">   <input type="reset" value="Veri girisini sifirlayin" class="btn btn-primary btm-lg"> </div><br>
        <div class="iceriyebuttonekleme_ic">  <input type="submit" value="giris yap" class="btn btn-primary btm-lg"> </div>
    </form>
    <div class="sifirla"> </div>
    </div>
    
    
    <div class="footericinboslukdiv col-lg-12 col-md-12 "> &nbsp;</div>


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