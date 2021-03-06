<?php
defined ( 'BASEPATH' ) or exit ( 'No direct script access allowed' );

Permissions::require_authorized ( Permissions::USER_ADMIN );
?>
<!DOCTYPE html>
<html lang="en">

<head>

	<?php
	$this->load->view ( 'include/head_common.php' );
	?>

	<title>CompSoc :: Edit User</title>

</head>

<body>
<?php
$this->load->view ( 'include/navbar.php' );
?>

<!-- Page Content -->
	<div class="container">

	<?php
	$this->load->view ( 'include/notification_message.php' );
	?>

	<?php
	$this->load->view ( 'include/flashdata_message.php' );
	?>

	<div class="row text-center">
			<h1>CompSoc @ University of Leicester</h1>
		</div>

		<div class="row">
			<div class="col-lg-12 text-center">
				<h4>List User Details</h4>
				<br>

				<table class="table table-striped">
					<tbody>
						<tr>
							<th>Full Name</th>
							<th>Email</th>
							<!--<th>Points</th>-->
							<th>View User</th>
							<th>Edit User</th>
							<th>Reset Password</th>
						</tr>
				<?php foreach($users as $user): ?>
					<tr>
							<td><?php echo $user->fullname; ?></td>
							<td><?php echo $user->email; ?></td>
							<!--<td><?php /*echo isset($user->total) ? $user->total : 0;*/ ?></td>-->
							<td><a href="/user/view/<?php echo $user->userid; ?>">View</a></td>
							<td><a href="/user/edit/<?php echo $user->userid; ?>">Edit</a></td>
							<td><a href="/user/reset/<?php echo $user->userid; ?>">Reset</a></td>
						</tr>
				<?php endforeach; ?>
				</tbody>
				</table>
			</div>
		</div>
	<?php
	$this->load->view ( 'include/bootstrapjs.php' );
	?>
</div>
</body>
</html>
