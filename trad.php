<head>
	<link rel="stylesheet" href="css/bootstrap.css">
</head>
<div class="container-fluid">
<div class="row">
  <div class="col-sm-12">
<table class="table table-striped table-hover table-layout" style="table-layout:fixed;">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Key</th>
      <th scope="col">Value</th>
    </tr>
  </thead>
<?php

	$f = file_get_contents("http://transformice.com/langues/deadmeat_en");
	$newfile = zlib_decode($f);
	
	$trads = explode('¤',$newfile);
	
	foreach($trads as $t)
	{
		$couple = explode('=',$t);
		echo '<tr><td>' . $couple[0] . '</td><td>' . $couple[1] . '</td></tr>';
	}
 
?>
<!--
<table class="table table-striped table-hover table-sm">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Image</th>
      <th scope="col">Name</th>
      <th scope="col">Recipe</th>
      <th scope="col">Salvaging</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>

  </tbody>
</table>
-->
</div>
</div>
</div>