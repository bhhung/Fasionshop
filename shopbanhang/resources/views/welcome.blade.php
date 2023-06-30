<!DOCTYPE html>
<html lang="en">
<head>
	<style>
		*{
			padding: 0;
            margin: 0;
            text-decoration:  none;
            list-style: none;
            box-sizing: border-box;
			
		
		}
		body{
	    font-family:montserrat;
		
		
		}
		.category ul{
		
		height: 36.5vh;
		margin-left:0;
		width:240px;
		background:#EEEEEE;
		overflow-y:auto;
	}
	.category li{
		height: 40px;
		outline: none;
	}
	.category ul li a{
		display:block;
		height: 100%;
		width: 100%;
		line-height:70px;
		font-size:16px;
		color:black;
		padding-left:10%;
		text-decoration:  none;

	}
	.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 100%;
  margin-top:5px;
  
}
.image-category{
	margin-top:150px;
	
}
 .image {
	margin-right:1000px;
} 


													
	</style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Shop Bán Hàng</title>
    <link href="{{asset('public/frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/animate.css')}}" rel="stylesheet">
	<link href="{{asset('public/frontend/css/main.css')}}" rel="stylesheet">
	<link href="{{asset('public/frontend/css/responsive.css')}}" rel="stylesheet">
	<link href="{{asset('public/frontend/css/main1.css')}}" rel="stylesheet">
	<link href="{{asset('public/frontend/css/sweetalert.css')}}" rel="stylesheet">	
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="{{('public/frontend/images/ico/favicon.ico')}}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->
<body style="margin-top:0px;">
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container" >
				<div class="row" >
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
					<img src="{{('public/frontend/images/slider1.jpg')}}" alt="" class="center">
				</div>
			</div>
		</div>
	</section><!--/slider-->
	
     <section>
       <div class="container">
		  <div class="row">
			  <div class="col-sm-3">
				  <div class="left-sidebar" style="margin-top:12px;">
			 <h2 style="color:red;"><span style="color:#f08f2e;">Danh Mục</h2>
					 <div class="panel-group category-products" id="accordian">
					   @foreach($category as $key => $cate)
					 <div class="panel panel-default">
						 <div class="category">
						 <i><h4 class="panel-title" style="font-size: 19px;margin-left:15px;"><a href="{{URL::to('/danh-muc-san-pham/'.$cate->category_id)}}">{{$cate->category_name}}</a></h4></i><br>
						 
                         
						
						  
						  </div>
						  
						  </div>
						  @endforeach
						  </div>
						  
						  
						  <div class="brands_products" style="margin-top:150px;"><!--brands_products-->
					  <i><h2 style="color:red;"><span style="color:#f08f2e;">Thương Hiệu</h2></i>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
								@foreach($brand as $key => $brand)
									<li><a href="{{URL::to('/thuong-hieu-san-pham/'.$brand->brand_id)}}"> <span class="pull-right"><i class="fa fa-check"></i></span>{{$brand->brand_name}}</a></li>
								
									@endforeach
								</ul>
							</div>
						</div><!--/brands_products-->
						  
						  <div class="image-category">
						  <img src="{{('public/frontend/images/poster.jpg')}}" alt="" />
						  </div>
						  <!-- <div class="image-category">
						  <img src="{{('public/frontend/images/poster-2.png')}}" alt="" />
						  </div> -->
                      </div> 
					  
						<div class="container">
		      <div class="row">
			  <div class="col-sm-3">
			   <div class="image" style="margin-top:250px;" >
					<!-- <img src="{{('public/frontend/images/poster-1.jpg')}}" alt="" /> -->
					</div>
					</div>
					</div>
</div>
					</div>
								
					<!---->		   
					<div class="col-sm-9 padding-right">
					@yield('content')

					<!---->				
			  </div>
			
			  <div class="recommended_items"><!--recommended_items-->
						<h2 class="title text-center">Lacoste</h2>
						
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel" >
							<div class="carousel-inner" >
								<div class="item active">	
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
												<img src="{{('public/frontend/images/image-1.jpg')}}" alt="" />
												<h2 style="color:#f08f2e;">Giá: 275.000₫</h2>
													<p>Nước Hoa Nam Lacoste Essential</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>
												
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
												<img src="{{('public/frontend/images/image-2.jpg')}}" alt="" />
												<h2 style="color:#f08f2e;">Giá: 495.000₫</h2>
													<p>Lacoste Eau de Lacoste L.12.12 Blanc</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>
												
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
												<img src="{{('public/frontend/images/image-3.jpg')}}" alt="" />
												<h2 style="color:#f08f2e;">Giá: 599.000₫</h2>
													<p>Nước hoa Lacoste Eau de Lacoste </p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>
												
											</div>
										</div>
									</div>
								</div>
								<div class="item">	
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
												<img src="{{('public/frontend/images/image-4.jpg')}}" alt="" />
												<h2 style="color:#f08f2e;">Giá: 650.000₫</h2>
													<p>Nước hoa nam Lacoste L.12.12 Noir </p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>
												
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
												<img src="{{('public/frontend/images/image-5.jpg')}}" alt="" />
												<h2 style="color:#f08f2e;">Giá: 455.000₫</h2>
													<p>Nước hoa nam Lacoste Eau de Lacoste </p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>
												
											</div>
										</div>
									</div>
									<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
									<img src="{{('public/frontend/images/image-6.jpg')}}" alt="" />
										<h2 style="color:#f08f2e;">Giá: 295.000₫</h2>
										<p>Nước Hoa Lacoste Pour Homme</p>
										<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm Vào Giỏ</a>
									</div>
									
								</div>
								
							</div>
						</div>
                           
								</div>
							</div>
							 <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev" >
								<i class="fa fa-angle-left"></i>
							  </a>
							  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
								<i class="fa fa-angle-right"></i>
							  </a>			
						</div>
					</div>
		  </div>
		  
	   </div>
	   
	   
     </section>
	 
	 
	
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
	

  
    <script src="{{asset('public/frontend/js/jquery.js')}}"></script>
	<script src="{{asset('public/frontend/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('public/frontend/js/jquery.scrollUp.min.js')}}"></script>
	<script src="{{asset('public/frontend/js/price-range.js')}}"></script>
    <script src="{{asset('public/frontend/js/jquery.prettyPhoto.js')}}"></script>
    <script src="{{('public/frontend/js/main.js')}}"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<!-- <script type="text/javascript">
        $(document).ready(function(){
            $('.add-to-cart').click(function(){

                var id = $(this).data('id_product');
                // alert(id);
                var cart_product_id = $('.cart_product_id_' + id).val();
                var cart_product_name = $('.cart_product_name_' + id).val();
                var cart_product_image = $('.cart_product_image_' + id).val();
                var cart_product_quantity = $('.cart_product_quantity_' + id).val();
                var cart_product_price = $('.cart_product_price_' + id).val();
                var cart_product_qty = $('.cart_product_qty_' + id).val();
                var _token = $('input[name="_token"]').val();
                    $.ajax({
                        url: '{{url('/add-cart-ajax')}}',
                        method: 'POST',
                        data:{cart_product_id:cart_product_id,cart_product_name:cart_product_name,cart_product_image:
						cart_product_image,cart_product_price:cart_product_price,cart_product_qty:cart_product_qty,_token:
						_token},
						success: function(data) {
							alert(data);
						}
					});
				});
			}); -->
</body>
</html>