<form method="post" action="index.php?action=new_book">

<label for ="title">Title</label>
<input type="text" id="title" name="title" required="required" value="<?php setDefaultValue('title');?>">

<label for ="director">Director</label>
<input type="text" id="director" name="director" required="required" value="<?php setDefaultValue('director');?>">

<label for ="year">Jahr</label>
<input type="text" id="year" name="year" required="required" value="<?php setDefaultValue('year');?>">

<label for ="runtime">Runtime</label>
<input type="text" id="runtime" name="runtime" required="required" value="<?php setDefaultValue('runtime');?>">

<label for ="poster">Poster(URL)</label>
<input type="text" id="poster" name="poster" required="required" value="<?php setDefaultValue('poster');?>">

<label for ="country">Land</label>
<input type="text" id="country" name="country" required="required" value="<?php setDefaultValue('country');?>">

<label for ="actor">Schauspieler 1</label>
<input type="text" id="actor" name="actor" required="required" value="<?php setDefaultValue('actor');?>">

<label for ="actor">Schauspieler 2</label>
<input type="text" id="actor" name="actor" required="required" value="<?php setDefaultValue('actor');?>">

<!-- Mehrfachauswahl -->
<label for="language_id">Sprache</label>
<select name="language_id" required="required">
<?php
$language = new Language();
$languages = $language->selectAll($db);
druckeOptions($sprachen, 'sprache'); // druckt Option Elemente, siehe in functions.php
?>
</select>

<label for="genres_id">Genre</label>
<select name="genres_id[]" required="required">
<?php
$genre_fuer_buch = new Genre_fuer_buch();
$genres = $genre_fuer_buch->selectAll($db); 
druckeOptions($genres, 'genre'); // druckt Option Elemente, siehe in functions.php
?>
</select>

<label for="genres_id">Genre 2</label>
<select name="genres_id[]">
<?php
echo '<option selected="selected" value="0">kein zweites Genre</option>'; // ein Option Element mit dem Wert "0" für kein zweites Genre
druckeOptions($genres, 'genre'); // druckt Option Elemente, siehe in functions.php
?>
</select>
<br>
<label for="plot">Beschreibung</label>
<textarea cols="35" rows="10" name="plot" placeholder="maximal 1024 Zeichen erlaubt..." required="required">
<?php setDefaultValue('plot');?>
</textarea>

<input type="submit" id="submit" name="submit" value="neues Buch speichern">
</form>