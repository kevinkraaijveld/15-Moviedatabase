<!--  Kevin Kraaijveld PHP Moviedatabase / series / see.php -->
<?php
  $id = $film[0]['film_id'];
  $data = $film[0];
?>
<h3><?=$data['type_description']?></h3>
<div>
  <?php
    $name = $data['film_name'];
    $rating = $data['film_rating'];
    $seasons = $data['film_season'];
    echo '<h1>' . $name . '</h1>';
    // Als het aantal seizoenen meer is dan 1 moet hij deze laten zien
    if($seasons>1){
      echo '<p>' . 'Aantal seizoenen: ' . $seasons . '</p>';
    }
    // Toont de rating
    echo '<p>' . 'Rating: ' . $rating . '/5' . '</p>';
    // Toont de totale duur
    echo '<p>' . 'Totale duur: ' . $duur[0]['SUM(episode_duration)'] . '</p>';

    // Toont alle afleveringen in een serie
    foreach($episodes as $episode => $value) {
      $episodeNr = $value['episode_nr'];
      $episodeName = $value['episode_name'];
      $seasonNr = $value['season_id'];
      $episode_duration = $value['episode_duration'];
      // Als een aflevering nummer 1 heeft moet er het seizoen nummer boven staan
      if($episodeNr==1){
        echo '<h1>' . 'Seizoen: ' . $seasonNr . '</h1>';
        echo '<h4>' . 'Aflevering ' . $episodeNr . ' ' . $episodeName . '</h4>';
      }else{
        echo '<h4>' . 'Aflevering ' . $episodeNr . ' ' . $episodeName . '</h4>';
      }
      // Toont de duur van een aflevering
      echo '<p>' . 'Duur aflevering: ' . $episode_duration .'</p>';
      // Aflevering aanpassen en verwijderen
      echo "<a class='editthis' href = '" . URL . "serie/editEpisode/" . $value["episode_id"]. "'>Edit</a>";
      echo " ";
      echo "<a class='deletethis' href = '" . URL . "serie/deleteEpisode/" . $value["episode_id"]. "'>Delete</a>";
    }
  ?>
  <!-- Voegt een seizoen aan de serie -->
  <form action="<?=URL?>serie/addSeason" method="post" autocomplete="off">
    <input type="hidden" name="film_id" value="<?= $film[0]['film_id'] ?>">
    <input type="hidden" name="film_season" value="<?= $film[0]['film_season'] ?>">
    <input type="submit" value="+ Voeg een seizoen toe">
  </form>
  <!-- Verwijderd een seizoen van de serie -->
  <form action="<?=URL?>serie/removeSeason" method="post" autocomplete="off">
    <input type="hidden" name="film_id" value="<?= $film[0]['film_id'] ?>">
    <input type="hidden" name="film_season" value="<?= $film[0]['film_season'] ?>">
    <input type="submit" value="- Verwijder een seizoen toe">
  </form>
</div>
<?php
  echo " <a id='createEpisode' href='" . URL . "serie/createEpisode/" . $film[0]['film_id'] . "'>Voeg een aflevering toe</a>"
?>
	<a class='middle' href='<?=URL?>'>Home</a>
  <br>
  <br>
  <br>
  <br>
