<?php require_once "web/header.php"; ?>

<form name="frmAdd" action="" method="post" id="frmAdd">
	<div class="container">
		<div class="form-group">
			<label for="name">Name</label>
			<input type="text" name="name" id="name" class="form-control" required>
		</div>
		<div class="form-group">
			<label for="Roll number">Roll number</label>
			<input type="text" name="roll_number" id="roll_number" class="form-control" required>
		</div>
		<div class="form-group">
			<label for="Date of Birth">Name</label>
			<input type="date" name="dob" id="dob" class="form-control" required>
		</div>
		<div class="form-group">
			<label for="Class">Class</label>
			<input type="text" name="class" id="class" class="form-control" required>
		</div>
		<div class="submit-btn">
			<input type="submit" name="add" class="btn btn-primary" value="Add">
		</div>
		</div> 
</form>
<script type="text/javascript" src="https://codex.jquery.com/jquery-2.1.1.min.js"></script>

</body>
</html>