<!DOCTYPE html>
<html>
<head>
	<title>Liên Hệ</title>
	<link rel="stylesheet" type="text/css" href="css/LienHe.css">
	<style type="text/css">
		#full_name{
			margin-left: 30px;
		}
		#dia{
			margin-left: 45px;
		}
		#em{
			margin-left: 55px;
		}
		#sdt{
			margin-left: 10px;
		}
		#tieu{
			margin-left: 40px;
		}
		#gui{
			background: #0066CC;
			color: #FFFF00;
		}
	</style>
</head>
<body>
	<div id="Noi_Dung">
		<h1>Liên Hệ Với Chúng Tôi</h1>
		<ul><h4>Quý khách vui lòng điền thông tin theo mẫu form dưới đây để liên hệ với chúng tôi:</h4>
			<li>Họ và tên:<input name="full_name" type="text" id="full_name" class="input-large"></li>
			<li>Địa chỉ:<input name="full_name" type="text" id="dia" class="input-large"></li>
			<li>Email:<input name="full_name" type="text" id="em" class="input-large"></li>
			<li>Số điện thoại:<input name="full_name" type="text" id="sdt" class="input-large"></li>
			<li>Tiêu đề:<input name="full_name" type="text" id="tieu" class="input-large"></li>
			<li>Nội Dung:</li>
			<li><textarea name="" rows="2" cols="20" id="" class="area-xlarge"></textarea></li>
			<li><input type="submit" id="gui" name="btn_submit" value="Gửi đi"> 
				<input type="button" id="gui" onclick="location.href='http://localhost:81/testweb/index.php';" value="Trang Chủ" /></li>
		
		</ul>
	</div>
</body>
</html>