<form action="<?php echo base_url('home/edit_action/'.$user->id)?>" method="POST">	
	<table>
		<tr>
			<td>Name</td>
			<td><input type="text" name="name"  value="<?php echo $user->name?>" required></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="password" required></td>
		</tr>
		<tr>
			<td>Confirm Password</td>
			<td><input type="password" name="c_password" required></td>
		</tr>
		<tr>
			<td colspan="2">
				<input type="submit" name="submit" value="submit">
			</td>
		</tr>
	</table>
</form>