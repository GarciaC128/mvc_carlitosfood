<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8" />
	<title>Modelo-vista-controlador</title>
</head>
<body>
    <h1>Base de datos bd_carlitosfood</h1>
	<h1>Tabla empleados</h1>
	<table border="1">
		<tr>
			<td><strong>Platillo</strong></td>
			<td><strong>Precio</strong></td>
			<td><strong>Descripción</strong></td>
			<td><strong>Ingredientes</strong></td>
			<td><strong>Categoria</strong></td>
			<td><strong>Calorias</strong></td>
			<td><strong>Imagen</strong></td>
		</tr>
		<?php
			for($i=0;$i<count($pd);$i++)
			{
				?>
					<tr>
						<td><?php echo $pd[$i]["platillo"]; ?></td>
						<td><?php echo $pd[$i]["precio"]; ?> MX.</td>
						<td><?php echo $pd[$i]["descripción"];?></td>
						<td><?php echo $pd[$i]["ingredientes"]; ?></td>
						<td><?php echo $pd[$i]["categoria"]; ?></td>
						<td><?php echo $pd[$i]["calorias"]; ?></td>
						<td><?php echo '<img width="100" src="data:image/jpg;base64,' . base64_encode($pd[$i]["imagen"]). '"/>' ?></td>
					</tr>
				<?php
			}
		?>
	</table>
</body>
</html>