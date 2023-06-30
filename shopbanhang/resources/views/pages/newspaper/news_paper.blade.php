<!DOCTYPE html>
<html lang="en">
<head>
<style>
    
    .navbar{margin-bottom:0;}
section{width:100%; float:left;}

.post-title-block{padding:100px 0;}
.post-title-block h1 {color: #fff; font-size: 85px; font-weight: bold; text-transform: capitalize;}
.post-title-block li{font-size:20px; color: #fff;}
.image-block{float:left; width:100%; margin-bottom:10px;}
.footer-link{float:left; width:100%; background:#222222; text-align:center; padding:30px;}
.footer-link a{color:#A9FD00; font-size:18px; text-transform:uppercase;}
</style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
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
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
</head>
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
	
    

 <!-- Static navbar -->
 
 


<section class="post-content-section">
    <div class="container">

        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 ">
               
                <h1 class="text-center">Tin Tức</h1>
                <ul class="list-inline text-center">
                    <li>Tác Giả |</li>
                    <li>Thể Loại |</li>
                    <li>Ngày Tháng |</li>
                </ul>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-12">
                <p class="lead">Nước hoa xịn đang sale dịp 20/10: Mùi best-seller của Narciso, Chanel, Gucci... có giá tốt, bộ 6 chai nước hoa Hàn chưa đến 2 triệu.</p>
<p>Ngoài hoa và đồ trang điểm, nước hoa cũng là món quà được nhiều người lựa chọn trong dịp 20/10. Một số thương hiệu, shop chuyên bán nước hoa cũng đang có ưu đãi khi bạn mua sắm thời gian này.

Thương hiệu nước hoa Hàn Quốc De Memoria sale một số dòng nước hoa. Nước hoa của hãng này có bao bì rất xinh và giá cả cũng phải chăng. Chai #01 mang mùi hương của hoa nhài, hoa huệ và xạ hương.</p>
<div class="image-block">
                     <img src="https://mifashop.net/wp-content/uploads/2020/09/nuoc-hoa-parfum-de-la-nuit-no-1-roja-dove-100ml.jpg" class="img-responsive" >
                 </div>
<p>Chai nước hoa Narciso xinh xắn với mùi hương chính là mận, hoa lưu ly tím, xạ hương... chắc chắn sẽ được lòng chị em. Nước hoa đang sale 20%.</p>
                <blockquote>
  <p>Marketing "đỉnh của chóp": Bán nước hoa... không mùi giá 100 USD, nhanh chóng cháy hàng vì mỗi người xịt lại tỏa ra mùi độc nhất vô nhị.</p>
  <footer>Nước hoa <cite title="Source Title">hương thơm thiên nhiên</cite></footer>
</blockquote>
                <p>Nước hoa không mùi nghe có vẻ vô nghĩa bởi nếu không tỏa ra mùi hương hấp dẫn thì nó sẽ gần như chẳng thể thu hút người mua. Thế nhưng, một công ty đã nghiên cứu và sản xuất ra loại nước hoa như vậy và thậm chí nó còn trở thành sản phẩm bán chạy nhất tại một số nhà phân phối.</p>
                <div class="image-block">
                     <img src="https://tapchilamdep.com/wp-content/uploads/2020/09/Nuoc-hoa-dior.jpg" class="img-responsive" >
                 </div>

<p>Escentric Molecules là tên của loại nước hoa không mùi đó. Điểm đặc biệt là ở mỗi người khác nhau, "mùi hương" sẽ không giống nhau. Nguyên nhân là vì khi xịt lên da, nước hoa sẽ hòa trộn với pheromone (mùi hương hấp dẫn bạn tình tự nhiên) ở người để tạo ra mùi hương độc nhất vô nhị.</p>
                <blockquote>
  <p>Nước hoa Louis Vuitton Les Extraits: Khi tinh hoa hương thơm hoà quyện cùng những tuyệt tác kiến trúc cổ kính.</p>
  
</blockquote>
<div class="image-block">
                     <img src="https://kenh14cdn.com/203336854389633024/2021/10/9/screen-shot-2021-10-09-at-144338-163376547824566225941.png" class="img-responsive" >
                 </div>
                
<p>Nói về Louis Vuitton, người ta không chỉ nhớ tới những chiếc rương tuân theo quy chuẩn savoir-faire khắt khe và tỉ mỉ hay những chiếc túimang đầy tính biểu tượng, mà họ còn nhớ tới một thương hiệu cho ra đời những mùi hương đạt độ tinh tế chạm tới cảm xúc. Như để nối tiếp những dòng nước hoa nổi tiếng của mình, nhà mốt vừa trình làng BST nước hoa đặc sắc mang tên Les Extraits.</p>

             </div>
            <div class="col-lg-3  col-md-3 col-sm-12">
                <div class="well">
                    <h2>Hộp đăng ký</h2>
                    <p>Mô tả biểu mẫu Truy cập tại đây</p>
                    <div class="input-group">
      <input type="text" class="form-control" placeholder="Search for...">
      <span class="input-group-btn">
        <button class="btn btn-default" type="button">Tìm kiếm</button>
      </span>
    </div>
                </div>
                <div class="well">
                    <h2>Share love</h2>
                    <ul class="list-inline">
                        <li><span class="glyphicon glyphicon-heart" aria-hidden="true"></span></li>
                        <li><span class="glyphicon glyphicon-heart" aria-hidden="true"></span></li>
                        <li><span class="glyphicon glyphicon-heart" aria-hidden="true"></span></li>
                        <li><span class="glyphicon glyphicon-heart" aria-hidden="true"></span></li>
                        
                    </ul>
                </div>
                <div class="well">
                    <h2>Về tác giả</h2>
                    <img src="" class="img-rounded" />
                    <p>Bản thân nỗi đau là quan trọng</p>
                    <a href="#" class="btn btn-default">Đọc thêm</a>
                </div>
                <div class="list-group">
                    <a class="list-group-item active" href="#"> <h4 class="list-group-item-heading">Bạn có biết!</h4> <p class="list-group-item-text">Sang trọng, Đẹp, Dẫn dụ, Phù phiếm, Ám ảnh, Gợi nhớ, Khó quên. Đó là những gì mà Kilian Hennessy - bậc thầy mùi hương hướng đến trong hành trình xây dựng đế chế nước hoa Kilian. "Sinh ra đã ngậm thìa vàng" hẳn là cụm từ chính xác dành cho Kilian khi được ra đời với họ Hennessy - đế chế rượu cognac của gia đình Hennessy không còn xa lạ gì với nước Pháp và cả thế giới.</p> </a>
                    <a class="list-group-item" href="#"> <h4 class="list-group-item-heading">Nước hoa Louis Vuitton Les Extraits</h4> <p class="list-group-item-text">Nói về Louis Vuitton, người ta không chỉ nhớ tới những chiếc rương tuân theo quy chuẩn savoir-faire khắt khe và tỉ mỉ hay những chiếc túimang đầy tính biểu tượng, mà họ còn nhớ tới một thương hiệu cho ra đời những mùi hương đạt độ tinh tế chạm tới cảm xúc.</p> </a>
                     </div>
                <div class="well">
                    <div class="media"> <div class="media-left"> <a href="#"> <img data-src="holder.js/64x64" class="media-object" alt="64x64" style="width: 64px; height: 64px;" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIHZpZXdCb3g9IjAgMCA2NCA2NCIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+PCEtLQpTb3VyY2UgVVJMOiBob2xkZXIuanMvNjR4NjQKQ3JlYXRlZCB3aXRoIEhvbGRlci5qcyAyLjYuMC4KTGVhcm4gbW9yZSBhdCBodHRwOi8vaG9sZGVyanMuY29tCihjKSAyMDEyLTIwMTUgSXZhbiBNYWxvcGluc2t5IC0gaHR0cDovL2ltc2t5LmNvCi0tPjxkZWZzPjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+PCFbQ0RBVEFbI2hvbGRlcl8xNTY5MjIxZTM1NSB0ZXh0IHsgZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQgfSBdXT48L3N0eWxlPjwvZGVmcz48ZyBpZD0iaG9sZGVyXzE1NjkyMjFlMzU1Ij48cmVjdCB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSIxMi41IiB5PSIzNi44Ij42NHg2NDwvdGV4dD48L2c+PC9nPjwvc3ZnPg==" data-holder-rendered="true"> </a> </div> <div class="media-body"> <h4 class="media-heading">Tiêu đề</h4> Hương thơm sẽ giúp bạn tự tin hơn trong cuộc sống.</div> </div>
                    <div class="media"> <div class="media-left"> <a href="#"> <img data-src="holder.js/64x64" class="media-object" alt="64x64" style="width: 64px; height: 64px;" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIHZpZXdCb3g9IjAgMCA2NCA2NCIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+PCEtLQpTb3VyY2UgVVJMOiBob2xkZXIuanMvNjR4NjQKQ3JlYXRlZCB3aXRoIEhvbGRlci5qcyAyLjYuMC4KTGVhcm4gbW9yZSBhdCBodHRwOi8vaG9sZGVyanMuY29tCihjKSAyMDEyLTIwMTUgSXZhbiBNYWxvcGluc2t5IC0gaHR0cDovL2ltc2t5LmNvCi0tPjxkZWZzPjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+PCFbQ0RBVEFbI2hvbGRlcl8xNTY5MjIxZTM1NSB0ZXh0IHsgZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQgfSBdXT48L3N0eWxlPjwvZGVmcz48ZyBpZD0iaG9sZGVyXzE1NjkyMjFlMzU1Ij48cmVjdCB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSIxMi41IiB5PSIzNi44Ij42NHg2NDwvdGV4dD48L2c+PC9nPjwvc3ZnPg==" data-holder-rendered="true"> </a> </div> <div class="media-body"> <h4 class="media-heading">Tiêu đề</h4> Hương thơm sẽ giúp bạn tự tin hơn trong cuộc sống.</div> </div>
                    <div class="media"> <div class="media-left"> <a href="#"> <img data-src="holder.js/64x64" class="media-object" alt="64x64" style="width: 64px; height: 64px;" src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9InllcyI/PjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIHZpZXdCb3g9IjAgMCA2NCA2NCIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+PCEtLQpTb3VyY2UgVVJMOiBob2xkZXIuanMvNjR4NjQKQ3JlYXRlZCB3aXRoIEhvbGRlci5qcyAyLjYuMC4KTGVhcm4gbW9yZSBhdCBodHRwOi8vaG9sZGVyanMuY29tCihjKSAyMDEyLTIwMTUgSXZhbiBNYWxvcGluc2t5IC0gaHR0cDovL2ltc2t5LmNvCi0tPjxkZWZzPjxzdHlsZSB0eXBlPSJ0ZXh0L2NzcyI+PCFbQ0RBVEFbI2hvbGRlcl8xNTY5MjIxZTM1NSB0ZXh0IHsgZmlsbDojQUFBQUFBO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1mYW1pbHk6QXJpYWwsIEhlbHZldGljYSwgT3BlbiBTYW5zLCBzYW5zLXNlcmlmLCBtb25vc3BhY2U7Zm9udC1zaXplOjEwcHQgfSBdXT48L3N0eWxlPjwvZGVmcz48ZyBpZD0iaG9sZGVyXzE1NjkyMjFlMzU1Ij48cmVjdCB3aWR0aD0iNjQiIGhlaWdodD0iNjQiIGZpbGw9IiNFRUVFRUUiLz48Zz48dGV4dCB4PSIxMi41IiB5PSIzNi44Ij42NHg2NDwvdGV4dD48L2c+PC9nPjwvc3ZnPg==" data-holder-rendered="true"> </a> </div> <div class="media-body"> <h4 class="media-heading">Tiêu đề</h4> Hương thơm sẽ giúp bạn tự tin hơn trong cuộc sống.</div> </div>
                </div>
            </div>
        </div>
      

    </div> <!-- /container -->
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
    </body>
</html>  