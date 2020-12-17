<a href="<?php echo base_url('home/add')?>">Add User</a>
<table style="width: 100%;text-align: center;">
	<tr>
		<th>No</th>
		<th>Nama</th>
		<th>Password</th>
		<th>Created Date</th>
		<th>Updated Date</th>
		<th>Action</th>
	</tr>
	<?php
		$x = 1;
		foreach ($users as $user) {
	?>
	<tr>
		<td><?php echo $x++?></td>
		<td><?php echo $user->name?></td>
		<td><?php echo $user->password?></td>
		<td><?php echo $user->u_date?></td>
		<td><?php echo $user->u_update?></td>
		<td>
			<a href="<?php echo base_url('home/edit/'.$user->id)?>">Edit</a>
			<a href="<?php echo base_url('home/delete/'.$user->id)?>">Delete</a>
		</td>
	</tr>
	<?php		
		}
	?>
</table>
	
