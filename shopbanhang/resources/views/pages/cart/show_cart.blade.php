
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
   

    </style>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="{{asset('public/frontend/css/h1.css')}}" rel="stylesheet">
   	<script src="js/jquery-1.11.1.min.js"></script>
       <link href="{{asset('public/frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/animate.css')}}" rel="stylesheet">
	<link href="{{asset('public/frontend/css/main.css')}}" rel="stylesheet">
	<link href="{{asset('public/frontend/css/responsive.css')}}" rel="stylesheet">
	<link href="{{asset('public/frontend/css/main1.css')}}" rel="stylesheet">
	<link href="{{asset('public/frontend/css/sweetalert.css')}}" rel="stylesheet">
	
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
</head>
<body>
<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> +84 905 899 053</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> Tvquy.20it12@vku.udn.vn</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="index.html"><img src="{{('public/frontend/images/home/logo.png')}}" alt="" /></a>
						</div>
				
						<div class="btn-group pull-right">
							<div class="btn-group">
							<form action="{{URL::to('/tim-kiem')}}" method="post">
								{{csrf_field()}}
								<div class="search_box pull-right">
							<input type="text" name="keywords_submit"  placeholder="Từ Khóa"/>	
						
							<input type="submit" style="color:black;" name="search_items" class="btn btn-warning btn-sm" value="Tìm kiếm">		
						</div>
                    </form>
							</div>
							
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav" >
							<li><a href="{{URL::to ('/trang-chu')}}"><i class="fa fa-home"></i> Trang Chủ</a></li>
							<?php
								$id = Session::get('id');
								$shipping_id = Session::get('shipping_id');
								if($id!=NULL && $shipping_id!=NULL) {
								?>	
				               <li><a href="{{URL::to ('/checkout')}}"><i class="fa fa-crosshairs" ></i> Thanh Toán</a></li>							
								<?php
								}elseif($id!=NULL && $shipping_id==NULL) {
								?>
								<li><a href="{{URL::to ('/payment')}}"><i class="fa fa-crosshairs" ></i> Thanh Toán</a></li>
								<?php
								}else{
								?>
								<li><a href="{{URL::to ('/login-checkout')}}"><i class="fa fa-crosshairs" ></i> Thanh Toán</a></li>
								<?php
								}
								?>
                                
								<li><a href="{{URL::to ('/news-paper')}}"><i class="fa fa-bell"></i> Tin Tức</a></li>
								<li><a href="{{URL::to ('/save-cart')}}"><i class="fa fa-shopping-cart"></i> Giỏ hàng</a></li>
								<?php
								$id = Session::get('id');
								if($id!=NULL) {
								?>	
								<li><a href="{{URL::to ('/logout-checkout')}}"><i class="fa fa-sign-out"></i> Đăng Xuất</a></li>							
								
								<?php
								}else{
								?>
								<li><a href="{{URL::to ('/login-checkout')}}"><i class="fa fa-sign-out"></i> Đăng Nhập</a></li>
								<?php
								}
								?>
								
							</ul>
						</div>
					</div>
				</div>
			</div>
			
		</div><!--/header-middle-->
					
	</header><!--/header-->
    <section id="slider"><!--slider-->
		<div class="container" >
			<div class="row">
			<div class="col-sm-12">
					<img src="{{('public/frontend/images/slider2.jpg')}}" alt="" class="center">
				</div>
			</div>
		</div>
	</section><!--/slider-->
	
        
<h2 class="text-center" style="font-size:30;color:#db8834; margin-bottom:20px;">Giỏ Hàng Của Bạn</h2>
<div class="container"> 
 <table id="cart" class="table table-hover table-condensed"> 
  <thead> 
   <tr> 
    <th style="width:50%">Tên sản phẩm</th> 
    <th style="width:10%">Giá</th> 
    <th style="width:8%">Số lượng</th> 
    <th style="width:22%" class="text-center">Thành tiền</th> 
    <th style="width:22%" class="text-center">Hành Động</th> 
    <th style="width:10%"> </th> 
   </tr> 
  </thead> 
  <tbody><tr> 
  @foreach($product_cart as $key => $value)
   <td data-th="Product"> 
    <div class="row"> 
     <div class="col-sm-2 hidden-xs"><img src="{{URL::to('public/uploads/product/'.$value->product_image)}}" alt="Sản phẩm 1" class="img-responsive" width="100">
     </div> 
     <div class="col-sm-10"> 
      <h4 class="nomargin">{{$value->product_name}}</h4> 
      <p>{{$value->category_name}}</p> 
     </div> 
    </div> 
   </td> 
   <td data-th="Price">{{number_format($value->product_price).'VNĐ'}}</td> 
   <td data-th="Quantity"><input class="form-control text-center" value="1" min="1" type="number">
   </td> 
   <td data-th="Subtotal" class="text-center">{{number_format($value->product_price).'VNĐ'}}</td> 
   <td class="actions" data-th="">
   
    <button class="btn btn-info btn-sm" style="background:red; margin-top:19px;">Delete</i>
    </button> 
   </td> 
  </tr> 
  <tr> 
  
   @endforeach
  </tr> 
  </tbody><tfoot> 
    
   <tr> 
    <td><a href="http://localhost:8080/shopnuochoa/trang-chu" class="btn btn-warning"><i class="fa fa-angle-left"></i> Tiếp tục mua hàng</a>
    </td> 
    <td colspan="2" class="hidden-xs"> </td> 
    <td class="hidden-xs text-center"><strong>Tổng tiền {{number_format($value->product_price).'VNĐ'}}</strong>
    </td> 
	<?php
								$id = Session::get('id');
								if($id!=NULL) {
								?>	
				            							
							   <td><a href="{{URL::to('/checkout')}}" class="btn btn-success btn-block">Thanh toán <i class="fa fa-angle-right"></i></a>
    </td>  
								<?php
								}else{
								?>
								
								<td><a href="{{URL::to('/login-checkout')}}" class="btn btn-success btn-block">Thanh toán <i class="fa fa-angle-right"></i></a>
    </td>  
								<?php
								}
								?>
   
    </td>  
   </tr> 
  </tfoot> 
 </table>
</div>
<br><br><br><br>
<footer id="footer"><!--Footer-->
		<div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="companyinfo">
							<h2><span> Về Chúng Tôi</span></h2>
							<p> Chúng tôi thực sự biết ơn bạn vì đã chọn chúng tôi làm nhà cung cấp dịch vụ và cho chúng tôi cơ hội phát triển.</p>
						</div>
					</div>
					<div class="col-sm-7">
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
										<img src="{{('public/frontend/images/footer-1.jpg')}}" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Khuyến Mãi</p>
								<h2><?php echo date('Y.m.d'); ?></h2>
							</div>
						</div>
						
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
									<img src="{{('public/frontend/images/footer-2.jpg')}}" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Giá Rẻ</p>
								<h2><?php echo date('Y.m.d'); ?></h2>
							</div>
						</div>
						
						
						<div class="col-sm-3">
							<div class="video-gallery text-center">
								<a href="#">
									<div class="iframe-img">
									<img src="{{('public/frontend/images/footer-3.jpg')}}" alt="" />
									</div>
									<div class="overlay-icon">
										<i class="fa fa-play-circle-o"></i>
									</div>
								</a>
								<p>Hợp Lý</p>
								<h2><?php echo date('Y.m.d'); ?></h2>
								</div>
						</div>
					</div>
					<div class="col-sm-3">
						<div class="address">
							<img src="{{('public/frontend/images/map.png')}}" alt="" />
							<p>Số 122,Lê Duẫn,Sơn Trà,Đà Nẵng</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>DỊCH VỤ</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Trợ giúp trực tuyến</a></li>
								<li><a href="#">Liên hệ chúng tôi</a></li>
								<li><a href="#">Tình trạng đặt hàng</a></li>
								<li><a href="#">Thay đổi địa điểm</a></li>
								<li><a href="#">Câu hỏi thường gặp</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>Sản Phẩm</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Chanel</a></li>
								<li><a href="#">Gucci</a></li>
								<li><a href="#">Dior</a></li>
								<li><a href="#">Calvin Klein</a></li>
								<li><a href="#">Lacoste</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>CHÍNH SÁCH</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Điều khoản sử dụng</a></li>
								<li><a href="#">Chính sách bảo mật</a></li>
								<li><a href="#">Chính sách hoàn lại tiền</a></li>
								<li><a href="#">Hệ thống thanh toán</a></li>
								<li><a href="#">Hệ thống vé</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>GIỚI THIỆU</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Thông tin công ty</a></li>
								<li><a href="#">Nghề nghiệp</a></li>
								<li><a href="#">Vị trí cửa hàng</a></li>
								<li><a href="#">Chương trình liên kết</a></li>
								<li><a href="#">Bản quyền</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2>Chi Tiết</h2>
							<form action="#" class="searchform">
								<input type="text" placeholder="Địa Chỉ Email Của Bạn" />
								<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
								<p>Nhận các bản cập nhật gần đây nhất từ
                                <br />trang web của chúng tôi và được cập nhật bản thân của bạn ...</p>
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © <?php echo date('Y'); ?>. Mọi quyền được bảo lưu.</p>
					<p class="pull-right">Designed by <span><a target="_blank" href="http://localhost:8080/shopbanhang/">Văn Qúy</a></span></p>
				</div>
			</div>
		</div>
		
		
	</footer>
</body>
</html>
