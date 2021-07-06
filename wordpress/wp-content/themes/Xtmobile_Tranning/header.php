<!DOCTYPE html>
<html lang="vi">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<?php wp_head();?>
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i">
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/libs/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/libs/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/css/main.css">
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory');?>/css/responsive.css">
	</head>
	<body <?php body_class(); ?>
		<div id="wallpaper">
			<header>
				<div class="main-header">
					<div class="container">
						<div class="row">
							<div class="col-6 col-xs-6 col-sm-6 col-md-3 col-lg-3 order-md-0 order-0">
								<div class="logo">
									<a href="<?php bloginfo('url');?>"><img src="<?php bloginfo('stylesheet_directory');?>/images/logo.png" alt=""></a>
								</div>
							</div>
							<div class="col-12 col-xs-12 col-sm-12 col-md-6 col-lg-6 order-md-1 order-2">
								<div class="form-seach-product">
										<div class="input-seach">
											<input type="text" name="s" id="" class="form-control" placeholder="Bạn muốn tìm gì ?">
											<button type="submit" class="btn-search-pro"><i class="fa fa-search"></i></button>
										</div>
										<div class="clear"></div>
									</form>
								</div>
							</div>
							<div class="col-6 col-xs-6 col-sm-6 col-md-3 col-lg-3 order-md-2 order-1" style="text-align: right">
								<a href="#" class="icon-cart">
									<div class="icon">
										<i class="fa fa-shopping-cart" aria-hidden="true"></i>
										<span>3</span>
									</div>
									<div class="info-cart">
										<p>Giỏ hàng</p>
										<span>2.500.000đ</span>
									</div>
									<span class="clear"></span>
								</a>
							</div>
						</div>
					</div>
				</div>
				<!-- <div class="main-menu-header">
					<div class="container">
						<div id="nav-menu">
							<ul>
								<li class="current-menu-item"><a href="#">Trang chủ</a></li>
								<li><a href="#">Giới thiệu</a></li>
								<li>
									<a href="#">Sản phẩm</a>
									<ul>
										<li><a href="#">Điện thoại</a></li>
										<li><a href="#">Máy tính bảng</a></li>
										<li><a href="#">Laptop</a></li>
										<li><a href="#">Sản phẩm khác</a></li>
									</ul>
								</li>
								<li><a href="#">Tin tức</a></li>
								<li><a href="#">Tuyển dụng</a></li>
								<li><a href="#">Liên hệ</a></li>
							</ul>
							<div class="clear"></div>
						</div>
					</div>
				</div> -->
			</header>