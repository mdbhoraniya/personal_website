<!DOCTYPE html>
<html>
<body>
	<table border="2" cellspacing="2" cellpadding="5">
		<tr>
			<td>Name</td>
			<td><?php echo $name;?></td>
		</tr>
		<tr>
			<td>Mobile</td>
			<td><a href="tel:<?php echo $mobile;?>"><?php echo $mobile;?></a></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><a href="mailto:<?php echo $email;?>"><?php echo $email;?></a></td>
		</tr>
		<tr>
			<td>Message</td>
			<td><?php echo $message;?></td>
		</tr>
		<tr>
			<td>User Agent</td>
			<td><?php echo $user_agent;?></td>
		</tr>
		<tr>
			<td>Platform</td>
			<td><?php echo $platform;?></td>
		</tr>
		<tr>
			<td>IP Address</td>
			<td><?php echo $ip_address;?></td>
		</tr>
	</table>
</body>
</html>