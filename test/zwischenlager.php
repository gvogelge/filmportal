<?php
OFT IN BENUTZUNG
echo "<pre>";
print_r($buch);
exit;

echo "<pre>";
echo "<hr>";
print_r ($result_isbn);
echo "<hr>";
print_r ($result_verlag);
echo "<hr>";
print_r ($result_autor);
exit;

echo "<pre>";
print_r($_POST);
exit;


WHERE films.plot LIKE '%$q%' OR
WHERE films.runtime LIKE '%$q%' OR
WHERE films.release_year LIKE '%$q%' OR
WHERE films.imdbID LIKE '%$q%' OR
WHERE directors.director LIKE '%$q%' OR
WHERE genres.genre LIKE '%$q%' OR
WHERE languages.language LIKE '%$q%' OR
WHERE actors.actor LIKE '%$q%' OR
WHERE countries.country LIKE '%$q%'

unset($array['id']);
unset($array['users_id']);
unset($array['films_id']);
unset($array['film'])
?>


<?php
	

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
?>