<?php 
  require('config/db.php');
  session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Toko Online Meja</title>
  <link rel="stylesheet" type="text/css" href="plugin/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="asset/css/main.css">
  <link rel="icon" type="image/gif/png" href="asset/img/Title.png">
</head>
<body>

<?php include('component/nav.php'); ?>
<div class="container-fluid" id="isi" >
  

  <div class="row">
    <div class="col-xs-2 col-xs-offset-5" id="produk-laris">
      <h3 style="font-family: Blacksword; font-size:2.2em;"><strong>Produk Meja</strong></h3>
    </div>
  </div>
  


  <!-- Laman Produk-->
  
  <div class="container" id="produk">
    <div class="tab-content">
      <!-- pria -->
      <div id="pria" class="tab-pane fade in active">
      <ul>
      <?php 
        require("config/db.php");
        $limit = 4;
        $sql = mysqli_query($conn, "SELECT count(idProduk) FROM tabel_produk");
        $row = mysqli_fetch_array($sql);
        $rec_count = $row[0];
        if(isset($_GET['page'])){
          $page = $_GET['page'] + 1;
          $offset = $limit * $page;
        }else{
          $page = 0;
          $offset = 0;
        }
        $left_rec = $rec_count - ($page * $limit);
        $queryPria = "SELECT * FROM tabel_produk LIMIT $offset,$limit";
        $query_pria = mysqli_query($conn, $queryPria);

        while($arrayPria = mysqli_fetch_array($query_pria)){
          echo '
            <li>
              <a href="#'.$arrayPria['idProduk'].'">
                <img src="admin/proses/'.$arrayPria['path'].'" alt="'.$arrayPria['nama'].'">
                <span></span>
              </a>
              <div class="overlay" id="'.$arrayPria['idProduk'].'">
                <a href="#" class="close"><i class="glyphicon glyphicon-remove"></i></a>
                <img src="admin/proses/'.$arrayPria['path'].'">
                <div class="keterangan">
                  <div class="container">
                    <h4><strong>'.$arrayPria['nama'].'</strong></h4>
                    <p>'.$arrayPria['keterangan'].'</p>
                    <h5>Rp.'.$arrayPria['harga'].'</h5>
                    <button type="button" class="btn btn-success">Stock : '.$arrayPria['stock'].'</button>
                    ';
              if(isset($_SESSION['idUser'])){
                if($arrayPria['stock'] > 0){
                  echo '
                  <a href="proses/beli.php?idProduk='.$arrayPria['idProduk'].'&idUser='.$iduser.'"><button type="button" class="btn btn-info">Masukkan Keranjang</button></a>
                ';
                }else{
                  echo '
                  <button type="button" class="btn btn-info disabled">Masukkan Keranjang</button>
                ';
                }
              }else{
                echo '
                  <button type="button" class="btn btn-info disabled">Masukkan Keranjang</button>
                ';
              }
              echo '
            </div>
          </div>
        </div>
      </li>  
          ';
        }
        ?>
      <div class="clear"></div>
    </ul>

    <div class="container-fluid" id="paging">
      <div class="paging">
      <?php 
      if($left_rec < $limit){
          $last = $page - 2;
          echo "<a href = \"?page=$last\"><button type='button' class='btn btn-primary left'>Previous</button></a>";
        }else if($page > 0){
          $last = $page - 2;
          echo "<a href = \"?page=$last\"><button type='button' class='btn btn-primary left'>Previous</button></a>";
          echo "<a href = \"?page=$page\"><button type='button' class='btn btn-primary right'>Next</button></a>";
        }else if( $page == 0 ) {
          echo "<a href = \"?page=$page\"><button type='button' class='btn btn-primary right'>Next</button></a>";
        }
       ?>
    </div>
    </div>
    </div>
    <!-- end of pria -->

    
    </div>
    
  </div>
  <!-- kontent end of produkumum -->
</div>



<?php include('component/footer.php'); ?>


<script type="text/javascript" src="plugin/Javascript/jquery.min.js"></script>
<script type="text/javascript" src="plugin/bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" src="asset/js/script.js"></script>
</body>
</html>