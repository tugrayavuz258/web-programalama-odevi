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





        


 
        <button id="fetchButton" onclick="fetchAndDisplayImage()">Fotoğraf Getir</button>
    <script>
    async function fetchAndDisplayImage() {
    const url = 'https://online-movie-database.p.rapidapi.com/actors/get-all-videos?nconst=nm0001667';
    const options = {
      method: 'GET',
      headers: {
        'X-RapidAPI-Key': '280094c9f1msh343aa602d5f2261p13dbdbjsn113aa031bb79',
        'X-RapidAPI-Host': 'online-movie-database.p.rapidapi.com'
      }
    };

    try {
      const response = await fetch(url, options);
      const result = await response.text();
      console.log(result);

      // Gelen verileri kullanarak fotoğrafı görüntüleyebilirsiniz
      // Örneğin, bir resim etiketi (<img>) oluşturup verileri içine yerleştirebilirsiniz
      const imageElement = document.createElement("img");
      // Fotoğraf URL'sini buraya yerleştirin
      imageElement.src = "https://example.com/path/to/image.jpg";
      document.body.appendChild(imageElement);
    } catch (error) {
      console.error(error);
    }
  }
      </script>


    































        

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