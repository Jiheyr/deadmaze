<?php

$file = explode('¤',zlib_decode(file_get_contents("http://transformice.com/langues/deadmeat_en")));
$dic = [];
foreach($file as $couple)
{
	$couple = explode('=',$couple);
	if (isset($couple[0]) and isset($couple[1]))
	{
		$dic[$couple[0]] = $couple[1];
	}
}

?>

<head>
	<link rel="stylesheet" href="css/bootstrap.css">
</head>
<div class="container">
<table class="table table-striped table-hover table-sm">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Image</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Recipe</th>
      <th scope="col">Salvaging</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
	<?php
	for($i=0;$i<1000;$i++)
	{
		
		$url = "http://transformice.com/images/x_deadmeat/x_objets/" . $i . ".png";
		if (@getimagesize($url)) 
		{
		echo '<tr>';
		echo '<th scope="row">' . $i . '</th>';
		echo '<td><img src="' . $url . '" onerror="this.style.display=\'none\';"/><br /></td>';
		if (isset($dic["item." . $i . ".nom"]))
		{
			echo '<td>' . $dic["item." . $i . ".nom"] . '</td>';
		}
		else
		{
			echo '<td></td>';
		}
		if (isset($dic["item." . $i . ".desc"]))
		{
			echo '<td>' . $dic["item." . $i . ".desc"] . '</td>';
		}
		else
		{
			echo '<td></td>';
		}
		echo '<td>-</td>';
		echo '<td>-</td>';
		echo '<td><a class="btn btn-primary" href="object.php?id=' . $i . '" role="button">Modifier</a></td>';
		echo '</tr>';
		}
		
	}
	?>
  </tbody>
</table>
</div>