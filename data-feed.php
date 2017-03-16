
<?php
$xml = simplexml_load_file('kpitol.xml');
$type_transaction = $xml->bien->type_transaction;

/* foreach($xml->bien as $bien){
  echo $bien->id_agence. '<br>
  Telephone: ' . $bien->telephone_agence . '<br>
  Telephone: ' . $bien->nom_negociateur . '<hr>';
}
*/
 ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Martin Pedraza">
    <link rel="icon" href="img/kpitol-favicon.png">
    <title>Kpitol</title>
    <link href="css/app.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond|Open+Sans+Condensed:300" rel="stylesheet">
    <style>
      .mainForm__minMax{width: 25%; float: left; margin-right: 2px}
      .mainForm__labelMinMax{line-height: 3.5rem; margin-right: 25px;}
      .btn-primary{width: 85%}
      .form-group{width: 85%; margin: 10px auto !important}
      .mainForm__title{margin-left: -10px;}
      .left-sideForm{background: transparent; border-radius: 1px; z-index: -10; box-shadow: 0px 1px 3px #cecece;}
      .anounceCarousel__fav{top: 108px !important;}
    </style>
  </head>

  <body>
    <nav class="navbar navbar-default" id="myNavbar">
      <div class="wrapper row">
        <div class="col-xs-8 visible-sm-block">
          <a class="navbar-brand myNavbar__brand" href="#">
            Kpitol<br>
            <span class="myNavbar__brand_subtitle">immobilier</span>
          </a>
          <img src="img/kpitol-chevalier.png" alt="Kpitol logo" class="myNavbar__logo_img">
        </div>
        <div class="col-xs-4 col-md-12 myNavbar__rightSide visible-sm-block visible-md-block visible-lg-block">
          <a href="https://twitter.com/kpitolimmo" target="_blank">
            <i class="fa fa-twitter myNavbar__social" aria-hidden="true"></i>
          </a>
          <a href="https://www.facebook.com/kpitolimmo" target="_blank">
            <i class="fa fa-facebook myNavbar__social" aria-hidden="true"></i>
          </a>
          <span class="pull-right myNavbar__rowTop">Suivez-nous sur:</span>
        </div>
      </div>
      <hr class="col-lg-12 visible-lg-block visible-md-block myNavbar__line">
      <div class="container">
        <div class="wrapper">
          <div class="row">
            <div class="col-lg-12 visible-lg-block visible-md-block myNavbar__logoRow">
              <a class="navbar-brand myNavbar__brand" href="#">
                Kpitol<br>
                <span class="myNavbar__brand_subtitle">immobilier</span>
              </a>
              <img src="img/kpitol-chevalier.png" alt="Kpitol logo" class="myNavbar__logo_img">
              <span class="myNavbar__brand_subtitle2">Notre expertise au votre service de votre projet.</span>
            </div>
          </div>
        </div>
      </div>
      <hr class="col-lg-12 visible-lg-block visible-md-block myNavbar__line">
      <div class="container">
        <div class="wrapper">
          <div class="row">
            <div class="col-xs-8 visible-xs-block">
              <a class="navbar-brand myNavbar__brand" href="#">
                Kpitol<br>
                <span class="myNavbar__brand_subtitle">immobilier</span>
              </a>
              <img src="img/kpitol-chevalier.png" alt="Kpitol logo" class="myNavbar__logo_img">
            </div>
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
              <ul class="nav navbar-nav">
                <li class="active"><a class="myNavbar__items" href="#">Qui sommes nous</a></li>
                <li><a class="myNavbar__items" href="#">Vous souhaitez acheter</a></li>
                <li><a class="myNavbar__items" href="#">Vous souhaitez vendre</a></li>
                <li><a class="myNavbar__items" href="#">Carrières</a></li>
                <li><a class="myNavbar__items" href="#">Contact</a></li>
                <li class="visible-xs-block">
                  <span class="pull-left myNavbar__social--text">Suivez-nous sur:</span>
                  <a href="https://twitter.com/kpitolimmo" target="_blank" class="myNavbar__social--collapsable">
                    <i id="twitter" class="fa fa-twitter" aria-hidden="true"></i>
                  </a>
                  <a href="https://www.facebook.com/kpitolimmo" target="_blank" class="myNavbar__social--collapsable">
                    <i class="fa fa-facebook" aria-hidden="true"></i>
                  </a></li>
              </ul>
            </div><!-- /.nav-collapse -->
          </div><!-- /.navbar-collapse -->
        </div><!--  /.wrapper  -->
      </div> <!-- /.container  -->
    </nav>

    <section id="anounceCarousel" class="clearfix">
      <div class="container-fix">
          <div class="row">
            <div class="container">
              <div class="col-md-3 left-sideForm">
                <div class="mainForm__container clearfix">
                  <form class="form-horizontal text-center">
                    <h2 class="mainForm__title">Formulaire de recherche:</h2>
                    <div class="form-group">
                        <select class="form-control">
                          <option selected disabled>Selectionne</option>
                          <option>Fonds de Commerce</option>
                          <option>Droit au Bail</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select class="form-control">
                          <option selected disabled>Selectionne</option>
                          <option>Fonds de Commerce</option>
                          <option>Droit au Bail</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="Code Postal">
                    </div>
                    <div class="form-group">
                        <select class="form-control">
                          <option selected disabled>Km autor</option>
                          <option>Fonds de Commerce</option>
                          <option>Droit au Bail</option>
                        </select>
                    </div>
                    <div class="form-group">

                        <input class="form-control mainForm__minMax" type="text" placeholder="0" id="priceMin">
                        <label for="priceMin" class="pull-left mainForm__labelMinMax">Min</label>
                        <input class="form-control mainForm__minMax" type="text" placeholder="Illimité" id="priceMax">
                        <label for="priceMax" class="pull-left mainForm__labelMinMax">Max</label>
                    </div>
                    <div class="form-group" style="text-align: center">
                      <button type="submit" class="btn btn-primary">Rechercher <i class="fa fa-search" aria-hidden="true"></i></button>
                    </div>
                  </form>
                </div> <!-- / .mainForm__container  -->

              </div>
              <div class="anounceCarousel__wrapper clear-fix col-md-9 pull-right">
                <h2 class="anounceCarousel__title">Toutes nos annonces</h2>
              <?php foreach($xml->bien as $bien){
                echo '
              <div class="col-md-4 col-sm-6 col-xs-12 anounceCarousel__item">
                <div class="anounceCarousel__localite"> ' .
                  $bien->code_postal . '
                </div>
                <div class="anounceCarousel__fav">
                  <i class="fa fa-heart" aria-hidden="true"></i>
                </div>
                <img class="img-thumbnail" src="img/restaurant-kpitol.jpg" alt="kapitol restaurant">
                <h3 class="anounceCarousel__title2">' . $bien->titre . '</h3>
                <p class="anounceCarousel__surface">' . $bien->surface_habitable . ' m<span>2</span></p>
                <p class="anounceCarousel__prix">' . $bien->prix . ' €</p>
              </div> ';
            } ?>
          </div> <!--  / . anounceCarousel__wrapper -->
          </div> <!--  / .row  -->

        </div> <!---  /.container -->
      </div>
    </section>

    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/bootstrap-sass/assets/javascripts/bootstrap.min.js"></script>
  </body>
</html>




<?php
/*echo 'Type de transaction: ' . $type_transaction. '<br>
Type de Transaction: ' . $xml->bien->type_bien . '<br>
Titre: ' . $xml->bien->titre . '<br>
Description: ' . $xml->bien->description_internet . ' ' . $xml->bien->nom_negociateur . '<br>
Surface: ' . $xml->bien->surface_habitable .' m2 <br>
Prix: ' . $xml->bien->prix . ' € <br>
Acroche: ' . $xml->bien->accroche . '<br>
Professionnel: ' . $xml->bien->professionnel . '<br>
Activites: ' . $xml->bien->activites . '<br>
<img class="img-thumbnail" src=" ' . $xml->bien->images->image[0] . ' " alt=" ' . $xml->bien->description_internet . ' ">
<img class="img-thumbnail" src=" ' . $xml->bien->images->image[1] . ' " alt="kapitol restaurant">'; */
?>
