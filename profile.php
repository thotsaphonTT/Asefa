<?php
include("header.php"); 
$page = $_GET['page'];
?>
<body>
	<div class="p-5">
		<div class="container">
			<div class="row">
				<div class="col-4">
					<div class="card shadow rounded-3" >
						<div class="card-body">
							<h3 class="card-title">Resume</h3>
							<p class="card-text">Position Apprentice</p>
						</div>
						<img src="img/profile.png">
						<div class="p-3 ms-4">
							<p><i class="fa-solid fa-user me-3"></i> ทศพร  เทียนทอง</p>
							<p><i class="fa-solid fa-cake-candles me-3"></i> 13 ตุลาคม พ.ศ.2546</p>
							<p><i class="fa-solid fa-graduation-cap me-3"></i>1/3/2566 ถึง 16/2/2567</p>
							<p><i class="fa-solid fa-envelope me-3"></i> thotsaphon061@gmail.com</p>
							<p><i class="fa-solid fa-phone me-3"></i> 083-443-1273</p>
						</div>
					</div>
				</div>
				<div class="col-8">
					<nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark text-white shadow rounded-3">
						<div class="container-fluid">
							<a class="navbar-brand" href="#">
								<img src="img/houses.png" width="50px">
							</a>
							<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon"></span>
							</button>
							<div class="collapse navbar-collapse" id="navbarSupportedContent">
								<ul class="navbar-nav me-auto mb-2 mb-lg-0">
									<li class="nav-item ">
										<a class="nav-link active link-light" aria-current="page" href="profile.php?page=1">Profile</a>
									</li>
									<li class="nav-item dropdown">
										<a class="nav-link dropdown-toggle link-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
											เครื่องมือ
										</a>
										<ul class="dropdown-menu link-light">
											<li><a class="dropdown-item" href="profile.php?page=2">เครื่องคิดเลข</a></li>
											<li><a class="dropdown-item Disabled" href="pos_index.php?page=pos">ระบบ POS</a></li>
											<li><a class="dropdown-item Disabled" href="#">coming soon!</a></li>
										</ul>
									</li>
								</ul>
								<span class="navbar-text" >
									<?php if (!empty($_SESSION['name'])) { ?>
										user: <?php echo $_SESSION['name'];?>
									<?php } ?>
								</span>
									<button type="submit" class="btn btn-danger ms-3" name="submit" onclick="logout();"><i class="fa-solid fa-right-from-bracket"></i></button>
							</div>
						</div>
					</nav>
					<?php if ($page == '1') {
						include("profile_data.php");
					}else{
						include("calculator.php");
					}?>	
				</div>
			</div>
		</div>
	</div>
</body>
<?php include("footer.php"); ?>