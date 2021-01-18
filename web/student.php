<?php require_once "web/header.php"; ?>

<div class="container mt-5">
	<a href="index.php?action=student-add" class="btn btn-primary">Add Student</a>
	<div class="table-responsive">
		<table class="table">
			<thead>
				<tr>
					<th>Student Name</th>
					<th>Roll number</th>
					<th>Date of birth</th>
					<th>Class</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php 
					if (!empty($result)) {
						// echo "<pre>";
						// print_r($result);

						foreach ($result as $k => $v) {
							// echo "<pre>";
							// print_r($v);
							?>
							<tr class="success">
								<td><?php echo $result[$k]["name"]; ?></td>
								<td><?php echo $result[$k]["roll_no"]; ?></td>
								<td><?php echo $result[$k]["DOB"]; ?></td>
								<td><?php echo $result[$k]["class"]; ?></td>
								<td><a href="index.php?action=student-edit&id=<?php echo $result[$k]["id"]; ?>">Edit</a>
									<a href="index.php?action=student-delete&id=<?php echo $result[$k]["id"]; ?>" onclick= "return del();">Delete</a></td>
							</tr>
							<?php } ?>
					}

			</tbody>
		</table>
	</div>
</div>

<script type="text/javascript">
	function del() {
		var ans = confirm("Are You sure you wanna Delete ?");
		if (ans==true) {
			return true;
		}
		else {
			return false;
		}
		return false;
	}
</script>

</body>
</html>