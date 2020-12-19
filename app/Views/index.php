<div style="width: 70%;margin-right: auto;margin-left: auto;">
	<h3>CI 4 CRUD & RESTFUL Example</h3>
	<a href="<?php echo base_url('home/add')?>" style="margin-bottom : 20px;">Add User</a>
</div>
<table style="width: 70%;text-align: center;margin-top: 20px;margin-bottom: 50px;margin-right: auto;margin-left: auto;" border="1">
	<tr>
		<th colspan="6" style="padding: 10px">Users List From Database (Native & RESTful)</th>
	</tr>
	<tr>
		<th>No</th>
		<th>Name</th>
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
<br>
<table style="width: 70%;margin-right: auto;margin-left: auto;" border="1">
	<tr>
		<th colspan="5" style="padding: 10px">Try for RESTful API (Use Postman or etc.)</th>
	</tr>
	<tr>
		<th>Method</th>
		<th>End Point</th>
		<th>Description</th>
	</tr>
	<tr>
		<td>GET</td>
		<td>/api/users</td>
		<td>List Of All Users</td>
	</tr>
	<tr>
		<td>GET</td>
		<td>/api/users/(:num)</td>
		<td>Show a User by ID</td>
	</tr>
	<tr>
		<td>POST</td>
		<td>/api/users</td>
		<td>Create New User</td>
	</tr>
	<tr>
		<td>PUT</td>
		<td>/api/users/(:num)</td>
		<td>Update an User</td>
	</tr>
	<tr>
		<td>DELETE</td>
		<td>/api/users/(:num)</td>
		<td>Delete an User</td>
	</tr>
</table>
<div style="width: 70%;margin-right: auto;margin-left: auto;">
	<p style="margin-right: auto;margin-left: auto;">Required Format for RESTful API is JSON. use raw with name and password field for create and update</p>
	<p>This is Example for using POSTman</p>
	<img src="<?php echo base_url('public/img/Example.png')?>" style="width: 100%">
</div>
	
