<!DOCTYPE html>
<html>
<head>
	<title>Testing Jancok</title>
</head>
<body>
	<table style="width: 100%;text-align: center;">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>password</th>
		</tr>
		<?php
			foreach ($students as $std) {
		?>
		<tr>
			<td><?php echo $std->id?></td>
			<td><?php echo $std->name?></td>
			<td><?php echo $std->password?></td>
		</tr>
		<?php		
			}
		?>
	</table>
</body>
</html>