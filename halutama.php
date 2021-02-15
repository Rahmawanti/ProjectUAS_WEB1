<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Starbucks Website</title>
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
  <link rel="stylesheet" href="assets/css/halutama.css">

</head>

<body>
  <!-- navbar -->
  <nav class="navbar navbar-default navbar-static-top">
    <div class="container" id="navbar">
      <div class="navbar-header">

        <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
      </div>
      <div class="collapse navbar-collapse" id="navcol-1">
        <ul class="nav navbar-nav navbar-right">
          <li role="presentation"><a href="#home">HOME</a></li>
          <li role="presentation"><a href="#menu1">MENU</a></li>
          <li role="presentation"><a href="#gallery">GALLERY</a></li>
          <li role="presentation"><a href="#about">ABOUT US</a></li>
          <li role="presentation"><a href="view3.php">PROFILE</a></li>
          <li role="presentation"><a href="config/logout.php">LOGOUT</a></li>

          
        </ul>
      </div>
    </div>
  </nav>
  <!-- navbar -->

  <!-- jumbotron -->
  <div id="background">
    <div class="jumbotron">
    </div>
  </div>
  <!-- jumbotron -->

  <!-- container atas -->
  <div id="home">
    <div class="isi">
      <div class="container atas">
        <h1>Keunggulan Starbucks</h1>
        <div class="row">
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <i class="glyphicon glyphicon-credit-card"></i>
            <h3>Starbuks Card</h3>
            <p class="text-justify">Keuntungan memiliki Starbucks Card itu banyak banget. Yang paling istimewa adalah, kamu akan mendapatkan produk gratis dengan menukarkan stars! Setiap pembelian minuman (bukan kemasan botol), makanan (di atas 25 ribu), whole bean kemasan, atau VIA Ready Brew pack dengan Starbucks Card, kamu akan mendapatkan 1 star. Setelah jumlahnya cukup, stars yang sudah kamu kumpulkan bisa ditukarkan dengan produk Starbucks gratis.

              Misalnya saja, 10 stars bisa ditukarkan dengan satu makanan atau satu minuman ukuran Grande.</p>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <i class="glyphicon glyphicon-signal"></i>
            <h3>Free Wifi</h3>
            <p class="text-justify">Yup, untuk kamu yang "main" di social media tentunya butuh banget yang namanya internet dong, nah Starbucks ini "ngertiin" banget dengan menyediakan free wifi. Dan sebenarnya, free wifi ini hanya berlaku untuk satu pembelian saja loh. Coba deh kalau kamu lagi jajan di Starbucks biasanya ada sticker yang tertempel di kaca atau pintu masuk tentang free wifi ini beserta dengan persyaratannya. Di dalam perkembangannya, sebelum wifi ini free for everyone, kamu harus punya Starbucks Card terlebih dulu loh untuk bisa menggunakannya.</p>
          </div>
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <i class="glyphicon glyphicon-lock"></i>
            <h3>Secret Recipe</h3>
            <p class="text-justify">Yes, Starbucks memiliki secret recipe yang bisa kamu pesan loh. Secret recipe ini adalah minuman yang tidak terdapat di dalam menu Starbucks pada umumnya. Kamu juga bisa request pesananmu mau seperti apa, tapi ingat ya resiko ditanggung sendiri.

              Beberapa secret recipe yang biasa di pesan yaitu Cotton Candy Cream Frappucino, Ore*o Cream Frappucino dan Yaku*lt</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- container atas -->

 <!-- container menu makanan -->
 <div id="menu1">
  <div class="container bawah">
    <span style="float: right">
      <a class="btn" href="view.php">Lihat</a>
    </span>
    <h1>Makanan</h1>
    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"><img class="img-circle" src="assets/img/velvet.jpg" width="300px" height="300px">
        <h3>Cake red velvet roll</h3>
        <p class="text-justify">Kue red velvet roll merupakan menu yang selalu ada di Starbucks. Salah satu menu andalan dari Starbucks ini mempunyai rasa yang manis ditambah dengan krim keju yang gurih serta taburan kacang di pinggiran kue ini. Kue ini sangat pas dinikmati dengan kopi  atau teh jenis apapun.</p>
      </div>
      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"><img class="img-circle" src="assets/img/choco.jpg" width="300px" height="300px">
        <h3>Sumatra choco eclairs</h3>
        <p class="text-justify">Kue yang empuk dengan isian cokelat dan taburan kacangnya benar-benar akan memanjakan para pencinta cokelat.

          Namun perlu diketahui, kue ini menggunakan dark chocolate jadi rasanya agak sedikit pahit. Tapi buat pencinta cokelat hal itu tidak menjadi masalah dan malah tidak membuat enek saat memakannya.</p>
      </div><div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"><img class="img-circle" src="assets/img/oatmel.jpg" width="300px" height="300px">
        <h3>Raisin oatmeal scones</h3>
        <p class="text-justify">Kue yang menjadi best seller ini menjadi pilihan yang tepat saat bermain ke Starbucks. Camilan yang satu ini rasanya tidak terlalu manis jadi cocok buat kamu yang tidak suka kue terlalu manis.</p>
      </div>
    </div>
  </div>
</div>



<!-- container menu makanan -->

  <!-- container menu minuman -->
  <div id="menu">
    <div class="container">
      <span style="float: right">
        <a class="btn" href="view1.php">Lihat</a>
      </span>
      <h1>Minuman</h1>
      <div class="row">
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
          <div class="thumbnail"><img src="assets/img/cream.jpg">
          <div class="caption">
            <h3>Raspberry Cream Frappuccino Red Velvet Cookies</h3>
            <p class="text-justify">Frappucino Starbucks ini punya rasa seperti kue cheesecake. Kamu bisa pesan ke barista kalau ada bahan-bahan berikut:

              White Chocolate Mocha Frappuccino
              Sirup raspberi Whipped cream</p>
            
          </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
          <div class="thumbnail"><img src="assets/img/key.jpg">
          <div class="caption">
            <h3>Key Lime Pie Frappuccino</h3>
            <p class="text-justify">Punya cita rasa yang segar, minuman ini masuk secret menu dari Starbucks karena nggak semua gerai punya bahan-bahannya!

              Jus jeruk nipis
              2 pump white mocha
              2 pump sirup vanilla
              1 pump sirup cinnamon dolce
              Whipped cream</p>
            
          </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
          <div class="thumbnail"><img src="assets/img/cotton.jpg">
          <div class="caption">
            <h3>Cotton Candy Frappuccino
            </h3>
            <p class="text-justify">Rasa Frappuccino ini dijamin mengingatkan kamu pada rasa kembang gula. Langsung pesan Cotton Candy Frappuccino ke barista dengan tambahan:

              Vanilla Bean Frappuccino
              1-2 extra pumps raspberry syrup</p>
            
          </div>
          </div>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
          <div class="thumbnail"><img src="assets/img/blue.jpg">
          <div class="caption">
            <h3>Blue Drink</h3>
            <p class="text-justify">Blue Drink sepertinya sangat jarang disajikan di Starbucks Indonesia. Penyebabnya adalah beberapa bahan mungkin tidak selalu tersedia setiap harinya.

              Passion Tango Tea
              Susu kedelai
              Sirup vanilla</p>
            
          </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- container menu -->
   <!-- gallery -->
   <div id="gallery">
    <div class="container">
      <h1>Gallery</h1>
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" id="satu"><img class="img-responsive" src="assets/img/l.jpg" width="800px"></div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" id="tiga"><img class="img-responsive" src="assets/img/o.jpg" width="800px"></div>
      </div>
    </div>
  </div>
  <!-- gallery -->

   <!-- about -->
   <div id="about">
    <div class="container footer">
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <h1> <img src="assets/img/sb.png" width="180px"></h1>
        <h2>About Us</h2>
        <a href="https://customerservice.starbucks.com/">Customer Service</a><br><br>
        <a href="https://www.starbucks.com/responsibility/global-report/policies">Policies and Standards</a>
        
        <p></p>
      </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
          <h2>Newsletter Subscription</h2>
          <div class="input-group input-group-lg">
            <input type="text" class="form-control" value="Your Email">
            <div class="input-group-btn">
              <button class="btn btn-primary" type="submit">Subscribe </button>
            </div>
          </div>
          <div id="icon"><i class="fa fa-instagram"></i><i class="fa fa-facebook-official"></i><i class="fa fa-twitter-square"></i><i class="fa fa-youtube-play"></i></div>
        </div>
    </div>
  </div>
  <!-- about -->

  <!-- kaki -->
  <div id="kaki">
    <div class="container">
      <h5 class="text-center">&copy; Copyright by 18111128_RAHMAWANTI_TIF RP 18 CID A_UASWEB1</h5>
    </div>
  </div>
  <!-- kaki -->
  <script src="assets/js/jquery.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>