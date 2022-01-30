<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Janji Jiwa's Merchandise</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="style.css?<?php echo time();?>" rel="stylesheet">
    <link href="beli.php" rel="next">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          
          <div class="navbar-header">
            <img src="img/logo.jpg">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"></a>
          </div>
      
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#rumah">Welcome</a></li>
              <li><a href="#produk">Merchandise</a></li>
              <li><a href="#beli">Beli</a></li>
            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>

    <div id="rumah">
      <div class="container">
        <div class="row">
          <div class="home-text">
            <h1>Janji Jiwa's Merchandise</h1>
            <p class="animate-text">
              <span >Yang berasal dari hati,</span>
              <span >akan sampai ke hati.</span>
              <span >Kopi Dari Hati</span>
              <span >Teman Sejiwa~</span>
            </p>
          </div>
          <br>
          <br>
          <br>
          <br>
          <a href="#produk">
            <button type="button" class="btn btn-default btn-lg" id="tombol">
              <span class="glyphicon glyphicon-chevron-down" aria-hidden="true"></span>
            </button></a>
        </div>
      </div>
    </div>

    
    <div id="hitam"></div>
    <!--Halaman 2-->
    <div id="produk">
      <h1>Produk Kami</h1>
      <div class="img-ut">
        <!--Kaos-->
      <div id="Kaos-on">
          <img id="kaos"src="img/kaos janji jiwa" alt="kaos Janji Jiwa">
        <div class="deskripsi" id="des-kaos">
          <h2 style="overflow-y: hidden;">Kaos Janji Jiwa</h2>
          <p style="overflow-y: hidden;">Kaos berbordir tulisan Janji Jiwa. Tidak Mudah Luntur Dengan kain berkualitas.<br><br>Harga = Rp 100.000,00</p>
        </div>
      </div>
      <!--mug-->
      <div id="mug-on" class="off">
        <img id="mug"src="img/mug janji jiwa.jpg" alt="mug Janji Jiwa">
        <div class="deskripsi" id="des-mug">
          <h2 style="overflow-y: hidden;">Mug Janji Jiwa</h2>
          <p style="overflow-y: hidden;">Mug dengan bahan keramik,kualitas bagus.<br><br>Harga = Rp 50.000,00</p>
        </div>
      </div>
      </div>
      <!--mug selesai-->
      <div class="menubar" style="overflow-y: hidden;">
        <h2>MENU</h2>
        <h3 class="active">Kaos</h3>
        <h3>Mug</h3>
      </div>
    </div>

    <!--Halaman 3-->
    <div id="beli">
      <h1>Form Pembelian Merchandise</h1>
      <form action="beli.php" method="post">
        <div class="form-grup">
          <label for="dropdown"class="label">Pilih produk</label><br>
          <select id="dropdown" name="dropdown" required>
            <option disabled selected value>--pilih produk--</option>
            <option value="Kaos">Kaos Janji Jiwa</option>
            <option value="Mug">Mug Janji Jiwa</option>
          </select>
        </div>
        <label for="quantity"class="label">Jumlah</label><br>
        <input name="quantity" type="number" id="quantity" placeholder="Jumlah yang dibeli" required>
        <label for="email"class="label">Email</label><br>
        <input name="email"type="email"id="email"placeholder="Ketikkan email aktif" required>

        <button type="submit">Beli</button>
    </form>
      
    </div>



    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script>
      //halaman 1
      const txts =document.querySelector(".animate-text").children,txtsLen=txts.length;
      let index=0;

      function animasi(){
        for(let i=0;i<txtsLen;i++){
          txts[i].classList.remove("text-in");
        }
        txts[index].classList.add("text-in");  
        if(index == txtsLen -1){
          index = 0;
        }
        else{
          index++;
        }
        setTimeout(animasi,2300);
      }
      window.onload=animasi;
    //halaman 2
     let mug = document.querySelector('.menubar h3:nth-child(3)');
     let kaos = document.querySelector('.menubar h3:nth-child(2)');
     let mugOn = document.getElementById("mug-on");
     let kaosOn = document.getElementById("Kaos-on")

     mug.addEventListener('click',function(){
       kaos.classList.remove('active');
       mug.classList.add('active');
       mugOn.classList.remove('off')
       kaosOn.classList.add('off');
     })
     kaos.addEventListener('click',function(){
       mug.classList.remove('active');
       kaos.classList.add('active');
       kaosOn.classList.remove('off')
       mugOn.classList.add('off');
     })
     
    </script>
  </body>
</html>