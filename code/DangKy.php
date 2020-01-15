<html>
	<head>
		<title>Đăng Ký</title>
		<style type="text/css">
			#DK{
				margin-right: -80px;
			}
			#QL{
				float: right;
			}
		</style>
	</head>
	<body>
		<?php
		require_once("XuLyDangKy.php");
		if (isset($_POST["btn_submit"])) {
  			//lấy thông tin từ các form bằng phương thức POST
  			$username = $_POST["username"];
  			$password = $_POST["pass"];
 			 $name = $_POST["name"];
  			$email = $_POST["email"];
  			//Kiểm tra điều kiện bắt buộc đối với các field không được bỏ trống
			  if ($username == "" || $password == "" || $name == "" || $email == "") {
				   echo "Bạn vui lòng nhập đầy đủ thông tin";
  			}else{
  					// Kiểm tra tài khoản đã tồn tại chưa
  					$sql="select * from users where username='$username'";
					$kt=mysqli_query($conn, $sql);
 
					if(mysqli_num_rows($kt)  > 0){
						echo "Tài khoản đã tồn tại";
					}else{
						//thực hiện việc lưu trữ dữ liệu vào db
	    				$sql = "INSERT INTO users(
	    					username,
	    					password,
	    					name,
						    email
	    					) VALUES (
	    					'$username',
	    					'$password',
						    '$name',
	    					'$email'
	    					)";
					    // thực thi câu $sql với biến conn lấy từ file connection.php
   						mysqli_query($conn,$sql);
				   		echo "Chúc mừng bạn đã đăng ký thành công";
					}
									    
					
			  }
	}
	?>



	<form action="DangKy.php" method="post">
		<table>
			<tr>
				<td colspan="2">Đăng Ký</td>
			</tr>	
			<tr>
				<td>Tên Tài Khoản :</td>
				<td><input type="text" id="username" name="username"></td>
			</tr>
			<tr>
				<td>Mật Khẩu :</td>
				<td><input type="password" id="pass" name="pass"></td>
			</tr>
			<tr>
				<td>Họ Và Tên:</td>
				<td><input type="text" id="name" name="name"></td>
			</tr>
			<tr>
				<td>Email :</td>
				<td><input type="text" id="email" name="email"></td>
			</tr>
			<tr>
				<td colspan="5" align="center">
					<input type="submit" id="DK" name="btn_submit" value="Đăng Ký">
					<input type="button" id="QL" onclick="location.href='http://localhost:81/testweb/index.php';" value="Trang Chủ" /></td>
			</tr>
		</table>
	</form>
	</body>
	</html>