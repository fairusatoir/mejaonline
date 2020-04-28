<!-- footer -->
  <div class="container-fluid" id="footer">
    <div class="row">
      <div class="col-xs-3 text-white">
        <!-- <img src="asset/img/Brand1.png"> -->
        <p style="padding-left: 1.3vw;margin-top: 8px; font-family: Eras Demi ITC; font-size: 17px">
        Toko Meja Online yang menawaran berbagai macam produk Meja asli kayu Nusantara dan juga memberikan informasi tentang produk meja yang ditawarkan agar pembeli tidak hanya senang membeli meja namun juga menetahui tentang asal-usul produk yang dinikmati.</p>
       
      </div>
      
      <div class="col-xs-3 col-xs-offset-1 text-white">
        <h3 style="font-family:Cooper Std Black">Hubungi Kami</h3>
        <hr>
        <a href="https://www.facebook.com/#" target="_blank"><img style="width: 40px; height: 40px; margin-right: 1vw;" src="asset/img/facebook.png"></a>
        <a href="https://www.youtube.com" target="_blank"><img style="width: 40px; height: 40px; margin-right: 1vw;" src="asset/img/youtube.png"></a>
        <a href="https://www.instagram.com/#" target="_blank"><img style="width: 40px; height: 40px; margin-right: 1vw;" src="asset/img/instagram.png"></a>
        <h5 style="margin-top: 7vh; font-family: News706 BT; font-size: 15px">Kantor Pusat :</h5>
        <div id="map" style="width:20vw;height:3vh;border-radius:5px"></div>
        <b> Jl. Telekomunikasi Jl. Terusan Buah Batu, Sukapura, Kec. Dayeuhkolot, Bandung </b>
          <!-- <script>
            function myMap() {
              var mapOptions = {
                  center: new google.maps.LatLng(-7.276476, 112.795118),
                  zoom: 16,
                  mapTypeId: google.maps.MapTypeId.HYBRID
              }
              var map = new google.maps.Map(document.getElementById("map"), mapOptions);
            }
          </script> -->
          <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDfbNrFraqA4e6NB-zwCqbzpwDrGIwbbEg&callback=myMap"></script> -->
      </div>
      
      <div class="col-xs-3 col-xs-offset-1 text-white">
      <h3 style="font-family:Cooper Std Black">Komentar Pelanggan </h3>
      <hr>
      <br>
        <form action="./proses/komentar.php" method="post" role="form">
          <div class="form-group">
            <label for="nama">Nama : </label>
            <input type="text" class="form-control" name="nama" placeholder="Nama">
          </div>
          <div class="form-group">
            <label for="email">Email : </label>
            <input type="text" class="form-control" name="email" placeholder="Email">
          </div>
          <div class="form-group">
            <label for="pesan">Pesan : </label>
            <textarea class="form-control" name="pesan" placeholder="Masukkan pesan "></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Kirim</button>
        </form>
      </div>

    </div>
    <div class="row" id="cpy">
      <div class="col-xs-12">
        <p style="color : white; text-align: center;">&copy; MejaOnline</p>
      </div>
    </div>
  </div>
<!-- end of footer -->