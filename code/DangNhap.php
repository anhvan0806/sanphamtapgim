<?php
session_start();
?>
<html>
<head>
	<title>Đăng Nhập</title>
	<meta charset="utf-8">
</head>
<body>
<?php
	//Gọi file connection.php ở bài trước
	require_once("XuLyDangKy.php");
	// Kiểm tra nếu người dùng đã ân nút đăng nhập thì mới xử lý
	if (isset($_POST["btn_submit"])) {
		// lấy thông tin người dùng
		$username = $_POST["username"];
		$password = $_POST["password"];
		//làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt 
		//mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection
		$username = strip_tags($username);
		$username = addslashes($username);
		$password = strip_tags($password);
		$password = addslashes($password);
		if ($username == "" || $password =="") {
			echo "Tên Tài Khoản hoặc Mật Khẩu bạn không được để trống!";
		}else{
			$sql = "select * from users where username = '$username' and password = '$password' ";
			$query = mysqli_query($conn,$sql);
			$num_rows = mysqli_num_rows($query);
			if ($num_rows==0) {
				echo "Tên Tài Khoản hoặc Mật Khẩu không đúng !";
			}else{
				//tiến hành lưu tên đăng nhập vào session để tiện xử lý sau này
				$_SESSION['username'] = $username;
                // Thực thi hành động sau khi lưu thông tin vào session
                // ở đây mình tiến hành chuyển hướng trang web tới một trang gọi là index.php
                header('Location: XuLyDangNhap.php');
			}
		}
	}
?>
	<form method="POST" action="DangNhap.php">
	<fieldset>
	    <legend>Đăng nhập</legend>
	    	<table>
	    		<tr>
	    			<td>Tên Tài Khoản</td>
	    			<td><input type="text" name="username" size="30"></td>
	    		</tr>
	    		<tr>
	    			<td>Mật Khẩu</td>
	    			<td><input type="password" name="password" size="30"></td>
	    		</tr>
	    		<tr>
	    			<td colspan="2" align="center"> <input name="btn_submit" type="submit" value="Đăng Nhập"></td>
	    		</tr>
	    	</table>
  </fieldset>
  </form>
</body>
</html>