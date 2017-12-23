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
	<link rel="stylesheet" href="dist/css/AdminLTE.min.css">
</head>

<body class="hold-transition skin-red layout-top-nav">
<div class="content-wrapper">
<section class="content">
	<div class="row">
		<div class="col-md-3">
			<div class="box box-primary">
				<div class="box-header with-border" style="text-align:center;">
					<h3 class="box-title"><img src="http://transformice.com/images/x_deadmeat/x_objets/<?php echo $_GET['id']; ?>.png"></h3>
				</div>
				<div class="box-body">
				<h5><b><?php echo $dic["item." . $_GET['id'] . ".nom"]; ?></b>
				<small><br /><i><?php echo $dic["item." . $_GET['id'] . ".desc"]; ?></i></small></h5>
				<br /><br /><b>Recipe:</b><br />
				<img src="res_img?id=12&sup=1" style="padding-right:10px;"/><img src="res_img?id=13&sup=10" style="padding-right:10px;"/>
				<br /><br /><b>Salvaging:</b><br />
				<img src="res_img?id=13&inf=0&sup=4" style="padding-right:10px;"/><img src="res_img?id=1&sup=1" style="padding-right:10px;"/><img src="res_img?id=12&sup=1" style="padding-right:10px;"/>
				</div>
			</div>
		</div>
		<div class="col-md-6">
					<table class="table table-striped table-hover table-sm">
					  <thead class="thead-dark">
						<tr>
						  <th scope="col">#</th>
						  <th scope="col">Image</th>
						  <th scope="col">Name</th>
						  <th scope="col">Quantity (to craft)</th>
						  <th scope="col">Quantity (by salvaging)</th>
						</tr>
					  </thead>
					  <tbody>
						<?php
						for($i=0;$i<50;$i++)
						{
							
							$url = "http://transformice.com/images/x_deadmeat/x_interfaces/ressources/" . $i . ".png";
							if (@getimagesize($url)) 
							{
							echo '<tr>';
							echo '<th scope="row">' . $i . '</th>';
							echo '<td><img src="' . $url . '" onerror="this.style.display=\'none\';"/><br /></td>';
							if (isset($dic["ressources." . $i . ".nom"]))
							{
								echo '<td>' . $dic["ressources." . $i . ".nom"] . '</td>';
							}
							else
							{
								echo '<td></td>';
							}
							echo '<td><input class="number" id="number" placeholder="min" type="number"><input class="number" id="number" placeholder="max" type="number"></td>';
							echo '<td><input class="number" id="number" placeholder="min" type="number"><input class="number" id="number" placeholder="max" type="number"></td>';
							echo '</tr>';
							}
							
						}
						?>
					  </tbody>
					</table>
		</div>
	</div>
</section>
</body>

</body>