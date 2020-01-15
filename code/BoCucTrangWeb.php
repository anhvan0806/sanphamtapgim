<?php
session_start();
function Add_Tieu_De()
{
    echo '
<div class="Tieu_De">
        <section>
            <div class="Tieu_De_Trai">
              <a href="https://www.facebook.com/profile.php?id=100006139637336"><i class="fa fa-facebook"></i></a> 
              <a href="https://www.facebook.com/profile.php?id=100006139637336"><i class="fa fa-twitter"></i></a>
              <a href="https://www.facebook.com/profile.php?id=100006139637336"><i class="fa fa-google"></i></a>
              <a href="https://www.facebook.com/profile.php?id=100006139637336"><i class="fa fa-youtube"></i></a>
            </div> 
            <ul class="Tieu_De_Phai">
                <li><a href="index.php"><i class="fa fa-home"></i> Trang chủ</a></li>
                <li><a href=""><i class="fa fa-newspaper-o"></i> Tin tức</a></li>
                <li><a href=""><i class="fa fa-handshake-o"></i> Tuyển dụng</a></li>
                <li><a href=""><i class="fa fa-info-circle"></i> Giới thiệu</a></li>
                <li><a href="code/LienHe.php"><i class="fa fa-phone"></i> Liên hệ</a></li>
            </ul> 
        </section>
    </div>'
;
}
//////////
function Add_Nhom_Tieu_De()
{
    echo '<div class="header group">
        <div class="smallmenu" id="openmenu" onclick="smallmenu(1)">≡</div>
        <div style="display: none;" class="smallmenu" id="closemenu" onclick="smallmenu(0)">×</div>
        <div class="logo">
            <a href="index.php">
                <img src="" alt="" title="">
            </a>
        </div> <!-- End Logo -->

        <div class="content">
            <div class="search-header">
                <form class="input-search" method="get" action="index.php">
                    <div class="autocomplete">
                        <input id="search-box" name="search" autocomplete="off" type="text" placeholder="Nhập từ khóa tìm kiếm...">
                        <button type="submit">
                            <i class="fa fa-search"></i>
                            Tìm kiếm
                        </button>
                    </div>
                </form> <!-- End Form search -->
                <div class="tags">
                    <strong>Từ khóa: </strong>
                </div>
            </div> <!-- End Search header -->

            <div class="tools-member">
                <div class="member">
                    <a onclick="checkTaiKhoan()" id="btnTaiKhoan">
                        <i class="fa fa-user"></i>
                        Tài khoản
                    </a>
                    <div class="menuMember hide">
                        <a href="code/DangNhap.php">Đăng Nhập</a>
                        <a href="code/DangKy.php">Đăng Ký</a>
                    </div>
                </div> <!-- End Member -->

                <div class="cart">
                    <a href=" ">
                        <i class="fa fa-shopping-cart"></i>
                        <span>Giỏ hàng</span>
                        <span class="cart-number"></span>
                    </a>
                </div> <!-- End Cart -->

                <!-- <div class="check-order">
                    <a>
                        <i class="fa fa-truck"></i>
                        <span>Đơn hàng</span>
                    </a>
                </div>  -->
            </div><!-- End Tools Member -->
        </div> <!-- End Content -->
    </div> <!-- End Header -->

'
	;}
//////////
function Add_Anh()
{
    echo '<div id="Anh"><img src=""></div>';}
///////
function Add_Noi_Dung()
{
    echo '<div id="Noi_Dung">
	<div id="Trai">
		<ul>
			<li><img src="img/1.jpg"><H2>BPI Sports Best BCAA, 30 Servings</H2>490.000đ</li>
			<li><img src="img/2.jpg"><H2>Sữa tăng cơ Top Whey Protein chính hãng</H2> 490.000đ</li>
			<li><img src="img/3.jpg"><H2>    
Thực phẩm bổ sung Whey Gold Standard, 2Lbs (900g)</H2>490.000đ</li>
			<li><img src="img/4.jpg"><H2>Combo 02 Thực phẩm tăng cơ giảm mỡ cho người tập GYM [ Bữa ăn cân bằng Vsante ] + Tặng kèm bình lắc – Vị Đào</H2> 490.000đ</li>
			<li><img src="img/5.jpg"><H2>Bột giảm mỡ Nutrabolics Carnibolic, 30 Servings</H2>490.000đ</li>
			<li><img src="img/5.jpg"><H2>    
MyProtein Impact Whey Protein, 1 Kg (40 Servings)</H2>490.000đ</li>
		</ul>
	</div>
	<div id="Phai">
		<div class="Phai_1">
			<h3>Danh mục tin tức</h3>
			<ul>
				<li><a href=""></a>Số Điện Thoại</li>
				<li><a href="">                 </a></li>
				<li><a href="">                 </a></li>
				<li><a href="">                 </a></li>
				<li><a href="">                 </a></li>
			</ul>
		</div>
	</div>
</div>'
	;}
///////
function Add_Ket_Thuc()
{
    echo '<div id="Ket_Thuc">Văn Khải Ái</div>'
    ;}
 //////
