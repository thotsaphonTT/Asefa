<?php include("header.php"); ?>
<body>
	<div class="position-absolute top-50 start-50 translate-middle text-center">
		<div class="card cards p-5 shadow rounded-3" style="border:none;width:400px;">
		<form action="login_db.php" method="post" id="loginForm">
			<img src="img/logo.png" class="shadow-lg mb-5" width="100px" class="mb-3" >
			<div class="form-floating mb-3">
				<input type="text" class="form-control" id="floatingInput" name="username" placeholder="Username or Email" required>
				<label for="floatingInput">Username or Email</label>
			</div>
			
			<div class="form-floating mb-3">
				<input type="password" class="form-control" id="MyPass" name="password" placeholder="Password" required>
				<label for="MyPass">Password</label>
			</div>
			<div class="form-check text-start mb-3">
				<input class="form-check-input" type="checkbox" onclick="showpass();" id="Mypass">
				<label class="form-check-label" for="Mypass">
					แสดงรหัสผ่าน
				</label>
			</div>
			
			<button type="submit" class="btn rounded btn-dark text-white" name="submit">เข้าสู่ระบบ</button>
			
		</form>
		<span class="mt-1">ยังไม่มีบัญชีผู้ใช้หรือป่าว? <a href="register.php" class="">ลงทะเบียน</a></span>
		</div>
	</div>
</body>
<?php include("footer.php"); ?>