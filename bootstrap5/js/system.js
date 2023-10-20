$(document).ready(function() {
	$("#registerForm").submit(function (e) {
		e.preventDefault();

		let RegisUrl = $(this).attr("action");
		let reqMethod = $(this).attr("method");
		let formData = $(this).serialize();

		$.ajax({
			url: RegisUrl,
			type: reqMethod,
			data: formData,

			success: function(data) {
				let result =  JSON.parse(data);
				if(result.status == "success"){
					console.log("Success", result)
					Swal.fire("ลงทะเบียนสำเร็จ", result.msg, result.status).then(function() {
						window.location.href = "index.php?page=1";
					})
				}else{
					console.log("Error", result) 
					Swal.fire("อ้ะ!", result.msg, result.status).then(function() {
						window.location.reload();
					})
				}
			}
		})
	})
})


$(document).ready(function() {
	$("#loginForm").submit(function (e) {
		e.preventDefault();

		let LoginUrl = $(this).attr("action");
		let reqMethod = $(this).attr("method");
		let formData = $(this).serialize();

		$.ajax({
			url: LoginUrl,
			type: reqMethod,
			data: formData,

			success: function(data) {
				let result =  JSON.parse(data);
				if(result.status == "success"){
					console.log("Success", result)
					Swal.fire("ล็อกอินสำเร็จ!", result.msg, result.status).then(function() {
						window.location.href = "profile.php?page=1";
					})
				}else{
					console.log("Error", result) 
					Swal.fire("อ้ะ!", result.msg, result.status).then(function() {
						window.location.reload();
					})
				}
			}
		})
	})
})


function logout() {
	Swal.fire({
		title: "คุณแน่ใจหรือไม่?",
		text: "คุณต้องการออกจากระบบหรือไม่?",
		icon: "question",
		showCancelButton: true,
		confirmButtonText: "ใช่",
		cancelButtonText: "ไม่ใช่"
	}).then((result) => {
		if (result.isConfirmed) {
            window.location.href = "logout.php";
        }
    });
}


function showpass() {
    var passwordInput = document.getElementById("MyPass");
    if (passwordInput.type === "password") {
        passwordInput.type = "text"; // เปลี่ยนเป็น "text" เพื่อแสดงรหัสผ่าน
    } else {
        passwordInput.type = "password"; // เปลี่ยนเป็น "password" เพื่อซ่อนรหัสผ่าน
    }
}



