<?php
session_start();
require_once "include/functions.php";
require_once 'include/database.php';
	
class Film
{
	//////////////////////////////////////////
	/////// selectRand
	// selektiert nach Zufall 10 verschiedene filme
	// zurückgegeben wird ein assoc array mit den geholten daten
	public static function selectRand($db)
	{
		try
		{	
			$stmt = $db->query("SELECT films.id, title, directors.director, GROUP_CONCAT(genre) AS genres FROM films
								JOIN directors ON directors_id = directors.id
								JOIN films_genres ON films.id = films_genres.films_id
								JOIN genres ON films_genres.genres_id = genres.id
								GROUP BY title
								ORDER BY RAND()
									LIMIT 10");
						
			return $daten = $stmt->fetchAll();
		}
		
		catch(PDOException $e) 
		{
			print $e->getMessage();
		}
	}
}

$daten = Film::selectRand($db);

druckeTabelle($daten, "datatable", "film", $show = "aus", $edit = "aus", $delete = "aus");

?>