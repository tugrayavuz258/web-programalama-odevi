<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hobilerim</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="hobilerimloginli.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">





</head>
<body>
    <div class="container"> 

        <div calss="row">
            <div class="header col-lg-12 col-md-12">
   
                <div class="headerlinktablolarigeneldiv1">
                    <div class="tabloicerigidiv">
                        <tr>
                            <td>
                                <a class="headerlinkler" href="hakkindaloginli.php"> HAKKINDA </a>
                            </td>
        
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
                        <a class="headerlinkler" href="login.html">  (tikla cikis yap) <br> <?php session_start(); echo $_SESSION["kullaniciAdi"];  ?> </a>
                        </td>
        
                    </tr>
                </div>
                </div>
        
        
        <div class="sifirla"> </div>
        </div>
        <div  class="headerileyazilararasiboyunabosluk col-12 col-md-6"> &nbsp;</div>




       

        <div class="foto col-lg-4 col-md-4"> 
       
       <div id="image" >  
         
               <button id="buton" onclick="fetchdata()">Fotoğraf Getir</button>
            
               <script>
                   const button = document.getElementById("buton");
                   const dog = document.getElementById("image");
                   const fetchdata = () => {
                     fetch("https://dog.ceo/api/breeds/image/random")
                       .then((response) => response.json())
                       .then((data) => {
                         dog.innerHTML = `<div class="card">
                 <div class="cardImg"><img src="${data.message}" alt="" /></div>
                 
                 </div>`;
                       });
                   };
                 </script>
       
       
       </div>
       </div>
       
       
       <div class="arabosluk col-lg-4 col-md-4"></div>
       
       <div class="yazilar col-lg-4 col-md-4">
       
           <p>Köpekler, dünyanın en sadık ve sevgi dolu evcil hayvanları arasında yer alır. Bir köpek sahibi olarak köpeklerin sunduğu sevgi ve bağlılık hakkında konuşmak, benim için büyük bir zevktir.    </p>
           <p>Köpekler, sahiplerine olan sevgilerini koşulsuz bir şekilde ifade eden hayvanlardır. Onları sevdiğinizde, size inanılmaz bir mutluluk ve sevinçle karşılık verirler. Köpekler, sadık dostlar olarak bilinir ve sizinle her anınızı paylaşmaktan büyük bir mutluluk duyarlar. Onlarla vakit geçirmek, sizinle oyun oynamak ve size eşlik etmek için sabırsızlanırlar. Bu sevgi dolu varlıklar, hayatınızı daha da anlamlı hale getirebilir.</p>
           <p> Köpeklerin sevgisi, insanlar üzerinde olumlu etkileri olan birçok fayda sağlar. Öncelikle, köpekler stresi azaltabilir ve ruh halinizi iyileştirebilir. Onlarla vakit geçirmek, endorfin ve oksitosin gibi mutluluk hormonlarının salınımını artırır. Bu da size daha iyi bir duygusal durum ve genel bir mutluluk sağlar.</p>
           <p>Ayrıca, köpekler sosyal varlıklardır ve onlarla zaman geçirmek, sosyal bağlantılarınızı güçlendirmenize yardımcı olur. Köpek sahipleri genellikle birbirleriyle köpekleri üzerinden ortak bir noktada buluşur ve köpek parklarında veya sokakta yürürken diğer köpek sahipleriyle rahatlıkla iletişim kurabilirler. Bu şekilde, köpeklerin sevgisi, insanlar arasında yeni dostluklar ve ilişkilerin oluşmasını sağlayabilir.</p>
           <P> Ayrıca, köpekler size birçok öğretici deneyim sunar. Onları eğitmek ve sorumluluklarını yerine getirmek, size disiplin ve sabır kazandırır. Ayrıca, onları beslemek, yürüyüşe çıkarmak ve temel ihtiyaçlarını karşılamak için düzenli bir rutine sahip olmanız gerektiğinden, disiplinli ve düzenli bir yaşam tarzını benimsemenize yardımcı olur.</P>
       
       
       </div>
       
       
       
       
       
       <div class="sifirla"> </div>
       
       
 


    































        

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