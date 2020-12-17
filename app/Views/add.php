<form action="<?php echo base_url('home/add_action')?>" method="POST">	
	<table>
		<tr>
			<td>Name</td>
			<td><input type="text" name="name"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="password"></td>
		</tr>
		<tr>
			<td>Confirm Password</td>
			<td><input type="password" name="c_password"></td>
		</tr>
		<tr>
			<td colspan="2">
				<input type="submit" name="submit" value="submit">
			</td>
		</tr>
	</table>
</form>