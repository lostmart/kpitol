
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
  </head>

  <body>
    <section id="anounceCarousel" class="clearfix">
      <div class="container">
        <div class="wrapper">
          <div class="row">
            <div class="col-xxs-12">
              <h2 class="anounceCarousel__title">Nos dernieres annonces</h2>
            </div>
          </div>
          <div class="row">
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

          </div> <!--  / .row  -->
          <hr>
        </div>
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
