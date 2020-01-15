<!DOCTYPE html>
<html>
<head>
 <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
	<title>Trang Chủ</title>
  <!-- Load font awesome icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- Bo Cuc Trang web -->
  <link rel="stylesheet" type="text/css" href="css/BoCucTrangWeb.css">
  <link rel="stylesheet" type="text/css" href="css/BoCucTrangWeb/TieuDe.css">
  <link rel="stylesheet" type="text/css" href="css/NhomTieuDe.css">
  <!-- -->
  <script src="js/Jquery.min.js"></script>
   <!-- -->
   <script src="js/dungchung.js"></script>
  <script src="js/trangchu.js"></script>
   <!-- Slider -->
  <link rel="stylesheet" href="css/ion.rangeSlider.css">
  <link rel="stylesheet" href="css/ion.rangeSlider.skinHTML5.css">
  <script src="js/ion.rangeSlider.min.js"></script>
	<style type="text/css">
		
	</style>
	<?php require_once "code/BoCucTrangWeb.php"; ?>
</head>
<body>

<?php Add_Tieu_De(); ?>
<?php Add_Nhom_Tieu_De(); ?>
<?php Add_Anh(); ?>
<?php Add_Noi_Dung(); ?>
<?php Add_Ket_Thuc(); ?>

<i class="fa fa-arrow-up" id="goto-top-page" onclick="gotoTop()"></i>
<i class="fa fa-arrow-down" id="goto-bot-page" onclick="gotoBot()"></i> 

</body>
</html>