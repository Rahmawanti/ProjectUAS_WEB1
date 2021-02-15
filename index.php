<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Starbucks Website</title>
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <style type="text/css">
            .justify { text-align: justify;}
        </style>
            
    </head>
    <body>
        <section>
            <div class="circle"></div>
            <header>
                <a href="#" ><img src="assets/img/2.png" class="logo"></a>
                <ul>
                    <li><a href="register.php" >SignUp</a></li>
                    
                </ul>
            </header>
            
            <div class="content">
                <div class="textBox">
                    <h2>It's not just Coffee<br>It's <span>Starbucks</span></h2>
                    <h3>Sejarah Starbuks</h3>
                    <p class="justify">Starbucks Corporation adalah sebuah perusahaan kopi dan jaringan kedai kopi global asal Amerika Serikat yang berkantor pusat di Seattle,
                    Washington.</p>
                    <a href="haldetail1.php">Learn More</a><br><br>
                    
                    <h3>Fasilitas</h3>
                    <p class="justify">Akses Internet Wi-Fi bervariasi di sejumlah daerah. Pemegang kartu di AS & Kanada bisa mengakses Internet selama 2 jam melalui AT&T Inc. di Amerika Serikat dan Bell Canada di Kanada.</p>
                    <a href="haldetail2.php">Learn More</a><br><br>

                    <h3>Sejarah Masuknya Starbucks Ke Indonesia</h3>
                    <p class="justify">Gerai pertama Starbucks Coffee Indonesia berada di Plaza Indonesia yang dioperasikan pada 17 Mei 2002.</p>
                    <a href="haldetail3.php">Learn More</a><br><br><br><br>

                </div>
                
                <div class="imgBox">
                    <img src="assets/img/img1.png" class="starbucks">
                </div>
            </div>
            <ul class="thumb">
                <li><img src="assets/img/thumb1.png" onclick="imgSlider('assets/img/img1.png');changeCircleColor('#017143')"></li>
                <li><img src="assets/img/thumb2.png" onclick="imgSlider('assets/img/img2.png');changeCircleColor('#eb7495')"></li>
                <li><img src="assets/img/thumb3.png" onclick="imgSlider('assets/img/img3.png');changeCircleColor('#d752b1')"></li>
            </ul>
            <ul class="sci">
                <li><a href="#"><img src="assets/img/facebook.png"></a></li>
                <li><a href="#"><img src="assets/img/twitter.png"></a></li>
                <li><a href="#"><img src="assets/img/instagram.png"></a></li>
            </ul>
        </section>

        
        <div id="kaki">
        <div class="container">
        <h5 class="text-center">&copy; Copyright by 18111128_RAHMAWANTI_TIF RP 18 CID A_UASWEB1</h5>
         </div>
        </div>

        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>

        <script type="text/javascript">
        function imgSlider(anything){
            document.querySelector('.starbucks').src=anything;
        }

        function changeCircleColor(color){
            const circle=document.querySelector('.circle');
            circle.style.background=color;  
        }
        </script>
        
    
    </body>
</html>