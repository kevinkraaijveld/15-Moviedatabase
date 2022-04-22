<!--  Kevin Kraaijveld PHP Moviedatabase / rating / see.php -->
<h3>Rating <?=$rating[0]['film_rating']?>/5</h3>
<div>
  <!-- Dit toont alle films met dezelfde rating-->
<?php
  // Toont alle films met dezelfde rating
  foreach ($rating as $film => $value) {
    $name = $value['film_name'];
    $duration = $value['film_duration'];
    $episodes = $value['film_episodes'];
    $rating = $value['film_rating'];
    $type = $value['type_id'];
    $film_origin= $value['film_origin'];
    $genre_id= $value['genre_id'];
    $genre = $genres[$genre_id-1]['genre_description'];

    // Als type_id gelijk is aan 1 (dus een film is) moet hij de titel als film laten zien
    // Anders is het een serie en moet hij de titel als serie laten zien en dus klikbaar zijn
    if($type==1){
      echo '<h1>' . $name . '</h1>';
      echo '<p>' . "<a href='" . URL . "types/seeType/" . $value['type_id'] . "'>Type: Movie</a>" . '</p>';
    }else{
      echo '<h1>' . "<a href='" . URL . "serie/seeSerie/" . $value['film_id'] . "'>" . $name  . "</a>" . '</h1>';
      echo '<p>' . "<a href='" . URL . "types/seeType/" . $value['type_id'] . "'>Type: Series</a>" . '</p>';
    }
    // Toont het genre
    echo '<p>' . "<a href='" . URL . "genre/seeGenre/" . $value['genre_id'] . "'>Genre: $genre</a>" . '</p>';
    // Toont de totale duur
    echo '<p>' . 'Duur: ' . $duration . ' minuten' .'</p>';
    // Toont aantal afleveringen
    echo '<p>' . 'Aantal afleveringen: ' . $episodes . '</p>';
    // Toont de rating
    echo '<p>' . 'Rating: ' . $rating . '/5' . '</p>';
    // Toont de afkomst
    echo '<p>' . "<a href='" . URL . "film/seeOrigin/" . $value['film_origin'] . "'>Origin: $film_origin</a>" . '</p>';
    // Film aanpassen en verwijderen
    echo "<a class='editthis' href='" . URL . "film/editFilm/" . $value['film_id'] . "'>Edit</a> ";
    echo "<a class='deletethis' href='" . URL . "film/deleteFilm/" . $value['film_id'] . "'>Delete</a>";
  }
?>
</div>
<a class='middle' href='<?=URL?>'>Home</a>
<br>
<br>
<br>
<br>
