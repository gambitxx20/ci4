<a href="<?php echo base_url('home/add')?>">Add</a>
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
	
