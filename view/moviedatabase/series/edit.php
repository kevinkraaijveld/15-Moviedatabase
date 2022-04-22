<!--  Kevin Kraaijveld PHP Moviedatabase / series / edit.php -->
<h3>Pas een aflevering aan</h3>
<div>
  <!-- Dit formulier gaat naar de functie 'saveChange' in SerieController.php-->
  <form action="<?=URL?>serie/saveChange" method="POST" autocomplete="off">
    <label for="fname">Naam aflevering</label>
    <input type="text" id="episode_name" name="episode_name" minlength="2" maxlength="10" value="<?= $thisEpisode[0]['episode_name']?>" required>
    <!-- Dit toont een readonly met de titel van de serie, deze kan niet worden aangepast -->
    <label for="fname">Naam serie</label>
    <input type="text" placeholder="<?echo $thisEpisode[0]['film_name'];?>" readonly>
    <!-- Haalt het aantal seizoenen uit het database en maakt daar een dropdown van -->
    <!-- Als het season_id gelijk is aan het film_season moet deze selected zijn -->
    <!-- De andere seizoenen zitten als niet geselecteerd in de dropdown  -->
    <label for="fname">Seizoen</label>
    <select name="season_id">
        <?php
        $cursea = $thisEpisode[0]['season_id'];
        $numb = $thisEpisode[0]['film_season'];
        for ($i = 1; $i <= $numb; $i++) : ?>
        <?php if($cursea==$i){?>
          <option value="<?= $i?>" selected>

        <?php }else{ ?>
          <option value="<?= $i?>">
        <?php }?>
            <?= $i?>
          </option>
        <?php endfor; ?>
    </select>
    <!-- Welk nummer de aflevering heeft in het seizoen -->
    <label for="fname">Aflevering nummer</label>
    <input type="text" id="episode_nr" name="episode_nr" minlength="2" maxlength="10" value="<?= $thisEpisode[0]['episode_nr']?>" required>
    <!-- Hoe lang een aflevering duurt -->
    <label for="fname">Duur aflevering</label>
    <input type="text" id="episode_duration" name="episode_duration" minlength="2" maxlength="10" value="<?= $thisEpisode[0]['episode_duration']?>" required>
    <!-- Geeft het episode_id als hidden waarde mee -->
    <input type="hidden" name="episode_id" value="<?= $thisEpisode[0]['episode_id'] ?>">

    <input type="submit" value="Versturen">
    <input type="button" name="cancel" value="Annuleren" onClick="window.location='/Moviedatabase_MVC/serie/seeSerie/<?= $thisEpisode[0]['film_id']?>';" />
  </form>
</div>
