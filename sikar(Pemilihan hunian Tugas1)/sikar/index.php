<!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="website sistem pakar">
    <meta name="author" content="mr k">
    <link rel="icon" href="image/icon.png">

    <title>Sistem Pakar</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://getbootstrap.com/docs/4.1/dist/css/bootstrap.min.css" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="css/carousel.css" rel="stylesheet">
</head>
<body>
	<?php
		include ('navbar.php');
	?>
	
    <main role="main">
        <!-- Carousel -->
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="first-slide" src="image/popo.jpg" alt="First slide">
            <div class="container">
              <div class="carousel-caption text-left">
                <h1>Hunian Nyaman.</h1>
                <p>Pemilihan hunian yang pas nyaman adalah keinginan setiap individu. </p>
                <p><button type="button" class="btn btn-lg btn-info" data-target="#exampleModal" data-toggle="modal" data-whatever="@getbootstrap">Mulai</button></p>
              </div>
            </div>
          </div>
      </div> <!-- Carousel -->

      <!---------------- MODAL ----------------->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Identitas User</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <form action="simpan-session.php" method="post" enctype="multipart/form-data" role="form">
            <div class="modal-body">
                <div class="form-group">
                  <label for="recipient-name" class="col-form-label">Nama :</label>
                  <input type="text" name="nama" class="form-control" id="input-ame" placeholder="isikan nama anda" required autofocus >
                </div>
                <div class="form-group">
                  <label for="message-text" class="col-form-label">Umur :</label>
                  <input type="number" name="umur" class="form-control col-sm-8" placeholder="isikan umur anda" required >
                </div>
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-info">Lanjut ></button>
                </div>
              </form>
            </div>
            
          </div>
        </div>
      </div>






      <!-- Marketing messaging and featurettes
      ================================================== -->
      <!-- Wrap the rest of the page in another container to center all the content. -->

      <div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <div class="row">
          <div class="col-lg-4">
            <img class="rounded-circle" src="image/po.png" alt="Generic placeholder image" width="140" height="140">
            <h2>Pemilihan lingkungan hunian</h2>
            <p></p>
            <p>Website ini dibuat untuk menentukan pilihan yang tepat dalam menentukan hunian yang nyaman</p>
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->



    </main>

	<!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://getbootstrap.com/docs/4.1/dist/js/bootstrap.min.js"></script>
</html>