<?php include("header.php");?>
<body>
	<div class="position-absolute top-50 start-50 translate-middle text-center">
		<div class="card cards p-5 shadow rounded-3" style="width:480px">
			<form action="register_db.php" method="post" id="registerForm">
				<img src="img/logo.png" class="shadow-lg mb-3" width="100px" >
				<h3>Register</h3>
				<div class="form-floating mb-3">
					<input type="text" class="form-control" id="username" name="username" placeholder="ชื่อผู้ใช้" required>
					<label for="username">ชื่อผู้ใช้</label>
				</div>
				<div class="form-floating mb-3">
					<input type="password" class="form-control" id="password" name="password" placeholder="รหัสผ่าน" required>
					<label for="password">รหัสผ่าน</label>
				</div>
				<div class="form-floating mb-3">
					<input type="text" class="form-control" id="name" name="name" placeholder="ชื่อ - นามสกุล" required>
					<label for="name">ชื่อ - นามสกุล</label>
				</div>
				<div class="form-floating mb-3">
					<input type="email" class="form-control" id="email" name="email" placeholder="เมลล์" required>
					<label for="email">เมลล์</label>
				</div>
					<button type="submit" class="btn btn-dark" name="btn_sumit">ลงทะเบียนเลย!</button>
				</form>
				<span class="mt-1">มีบัญชีผู้ใช้แล้วไป<a href="index.php"> ลงชื่อเข้าใช้เลย!</a></span>
			</div>
		</div>
	</body>
	<?php include("footer.php");?>