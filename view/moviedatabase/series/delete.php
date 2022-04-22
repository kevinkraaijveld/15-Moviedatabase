<!--  Kevin Kraaijveld PHP Moviedatabase / series / delete.php -->
<h3>Verwijder een aflevering aan</h3>
<div>
  <!-- Dit formulier gaat naar de functie 'deleteAEpisode' in SerieController.php-->
  <form action="<?=URL?>serie/deleteAEpisode/<?=$thisEpisode[0]['episode_id']?>" method="POST" autocomplete="off">
    <!-- De naam van de aflevering -->
    <label for="fname">Naam aflevering</label>
    <input type="text" id="episode_name" name="episode_name" minlength="2" maxlength="10" placeholder="<?= $thisEpisode[0]['episode_name']?>" readonly>
    <!-- In welke serie de aflevering zit -->
    <label for="fname">Naam serie</label>
    <input type="text" placeholder="<?echo $thisEpisode[0]['film_name'];?>" readonly>
    <!-- In welk seizoen de aflevering zit -->
    <label for="fname">Seizoen</label>
    <input type="text" id="season_id" name="season_id" minlength="2" maxlength="10" placeholder="<?= $thisEpisode[0]['season_id']?>" readonly>
    <!-- Welk nummer de aflevering heeft in het seizoen -->
    <label for="fname">Aflevering nummer</label>
    <input type="text" id="episode_nr" name="episode_nr" minlength="2" maxlength="10" placeholder="<?= $thisEpisode[0]['episode_nr']?>" readonly>
    <!-- Hoe lang een aflevering duurt -->
    <label for="fname">Duur aflevering</label>
    <input type="text" id="episode_duration" name="episode_duration" minlength="2" maxlength="10" placeholder="<?= $thisEpisode[0]['episode_duration']?>" readonly>
    <!-- Geeft het episode_id als hidden waarde mee -->
    <input type="hidden" name="episode_id" placeholder="<?= $thisEpisode[0]['episode_id'] ?>">

    <input type="submit" value="Versturen">
    <input type="button" name="cancel" value="Annuleren" onClick="window.location='/Moviedatabase_MVC/serie/seeSerie/<?= $thisEpisode[0]['film_id']?>';" />
  </form>
</div>
