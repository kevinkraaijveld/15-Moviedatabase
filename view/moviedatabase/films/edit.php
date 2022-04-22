<!--  Kevin Kraaijveld PHP Moviedatabase / films / edit.php -->
<?php
  $id = $film[0]['film_id'];
  $data = $film[0];
?>
<!-- Pas een film / serie aan -->
<h3>Pas een <?echo$film[0]['type_description']?> aan:</h3>
<div>

<!-- Dit formulier gaat naar de functie 'saveChange' FilmController.php-->
  <form action="<?=URL?>film/saveChange" method="post" autocomplete="off">
    <!-- De naam van een film -->
    <label for="fname">Naam <?echo$film[0]['type_description']?></label>
    <input type="text" id="film_name" name="film_name" minlength="2" maxlength="25" value="<?echo $data['film_name'];?>" required>
    <!-- Toont radio buttons die selected zijn-->
    <?php
      if($data['type_id']=='1'){
        echo '<label><input type="radio" name="type_id" checked  value="1"> Movie<br></label><br>';
      }
      else echo '<label><input type="radio" name="type_id"   value="1"> Movie<br></label><br>';
      if($data['type_id']=='2'){
        echo '<label><input type="radio" name="type_id" checked  value="2"> Serie<br></label>';
        }
      else echo '<label><input type="radio" name="type_id"   value="2"> Serie<br></label>';
    ?>
      <br>
      <br>
    <!-- Toont een dropdown met de genres en selecteerd degene die in het database staat -->
    <label for="fname">Genre</label>
    <select name="genre_id" >
      <?php foreach ($genres as $genre) { ?>
        <?php if($film[0]['genre_id']==$genre['genre_id']){     ?>
            <option value="<?= $genre['genre_id']?>" selected>
              <?= $genre['genre_description']?>
            </option>
        <?php } else{?>
            <option value="<?= $genre['genre_id']?>">
              <?= $genre['genre_description']?>
            </option>
          <?php } ?>
        <?php } ?>
    </select>
    <br>
    <!-- Als het een serie is moet je het aantal seizoenen aan kunnen passen -->
    <?php
      if($film[0]['type_id'] == 2){?>
        <label for="fname">Aantal seizoenen</label>
        <input type="number" id="film_season" name="film_season" minlength="1" maxlength="3"  min="0" max="50" value="<?echo $data['film_season'];?>">
    <?php } ?>
    <!-- Dit toont de duur van een film -->
    <label for="fname">Duur <?echo$film[0]['type_description']?></label>
    <input type="number" id="film_duration" name="film_duration" minlength="2" maxlength="10" value="<?echo $data['film_duration'];?>">
    <!-- Toont de aantal afleveringen -->
    <label for="fname">Aantal afleveringen</label>
    <input type="text" id="film_episodes" name="film_episodes" minlength="1" maxlength="3" value="<?echo $data['film_episodes'];?>">
    <!-- Toont de rating -->
    <label for="fname">Rating</label>
    <input type="number" id="film_rating" name="film_rating" minlength="1" maxlength="1"  min="0" max="5" value="<?echo $data['film_rating'];?>">
    <!-- Toont de origin -->
    <label for="fname">Origin</label>
    <input type="text" id="film_origin" name="film_origin" minlength="1" maxlength="25" value="<?echo $data['film_origin'];?>">
    <!-- Geeft het film_id als hidden waarde mee -->
    <input type="hidden" name="film_id" value="<?= $data['film_id'] ?>">

    <input type="submit" value="Versturen">
    <input type="button" name="cancel" value="Annuleren" onClick="window.location='/Moviedatabase_MVC/';" />
  </form>
</div>
