<form method="post" action="">
<?php
function setDefaultValue($param1)
{
	if(!empty($_POST[$param1]))
	{
		echo $_POST[$param1];
	}
	else 
	{
		echo "";
	}
}

$data = ['username' => 'text', 'password' => 'password'];

//////////////////////////////////////////
////// function creataInputs
/// erzeugt input elemente mit dazugehörigen label elementen
/// $array(assoc array) = eindimensionales assoziatives array $keys = {for, name, value attribut} $values = {type attribut}
/// $class(string) =  name der css klasse der input elemente
function createInputs($array, $class)
{	
	foreach ($array as $name => $type) 
	{
		if(!empty($_POST[$name]))
		{
			$value = $_POST[$name];
			echo "<label for=$name>$name</label>";
			echo "<input class=$class type=$type name=$name required='required' value=$value>";
		}
		else 
		{
			echo "<label for=$name>$name</label>";
			echo "<input class=$class type=$type name=$name required='required' value=''>";
		}
	}
}

createInputs($data, "frickeln");

?>
<input type="submit" name="submit" value="submit">
</form>