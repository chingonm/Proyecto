<?php include("../function/function.php");?>
<?php arriba();?>

<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
    <li data-target="#carousel-example-generic" data-slide-to="5"></li>
  </ol>



  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="../img/Apple_Main.jpg" alt="...">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    <div class="item">
        <img src="../img/Apple_Main.jpg" alt="Apple">
        <div class="carousel-caption">
          <h4>Apple.</h4>
          <p>El lider de la inovacion.</p>
        </div>
      </div>
        <div class="item">
        <img src="../img/Google_Main.jpg" >
        <div class="carousel-caption">
          <h4>Google.</h4>
          <p>El Gigante de sillicon valley.</p>
        </div>
      </div>
    <div class="item">
        <img src="../img/android.jpg" >
        <div class="carousel-caption">
          <h4>Android</h4>
          <p>Sistema operativo movil</p>
        </div>
      </div>
    <div class="item">
        <img src="../img/xbox.png" >
        <div class="carousel-caption">
          <h4>Xbox</h4>
          <p>...</p>
        </div>
      </div>
    <div class="item">
        <img src="../img/ProdApple.jpg" >
        <div class="carousel-caption">
          <h4>ISomething</h4>
          <p>Productos de apple</p>
        </div>
      </div>
    ...
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<?php abajo();?>