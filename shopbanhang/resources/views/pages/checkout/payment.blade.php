<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
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
    <link href="{{asset('public/frontend/css/payment.css')}}" rel="stylesheet">
</head>
<style>
    .btn.btn-primary {
    background: #FE980F;
    border: 0 none;
    border-radius: 0;
    margin-top: -1px;
}
</style>

<body>
    	
<div class="container">
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-md-4">
            <div class="payment-card">
                <i class="fa fa-cc-visa payment-icon-big text-success"></i>
                <h2>
                    **** **** **** 1060
                </h2>
                <div class="row">
                    <div class="col-sm-6">
                        <small>
                            <strong>Hạn sử dụng:</strong> 1/16
                        </small>
                    </div>
                    <div class="col-sm-6 text-right">
                        <small>
                            <strong>Name:</strong> Văn Qúy
                        </small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="payment-card">
                <i class="fa fa-cc-mastercard payment-icon-big text-warning"></i>
                <h2>
                    **** **** **** 7002
                </h2>
                <div class="row">
                    <div class="col-sm-6">
                        <small>
                            <strong>Hạn sử dụng:</strong> 1/16
                        </small>
                    </div>
                    <div class="col-sm-6 text-right">
                        <small>
                            <strong>Name:</strong> Văn Qúy
                        </small>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="payment-card">
                <i class="fa fa-cc-discover payment-icon-big text-danger"></i>
                <h2>
                    **** **** **** 3466
                </h2>
                <div class="row">
                    <div class="col-sm-6">
                        <small>
                            <strong>Hạn sử dụng:</strong> 1/16
                        </small>
                    </div>
                    <div class="col-sm-6 text-right">
                        <small>
                            <strong>Name:</strong> Văn Qúy
                        </small>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="row">

        <div class="col-lg-12">

            <div class="ibox">
                <div class="ibox-title">
                Phương thức thanh toán
                </div>
                <div class="ibox-content">

                    <div class="panel-group payments-method" id="accordion">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="pull-right">
                                    <i class="fa fa-cc-paypal text-success"></i>
                                </div>
                                <h5 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">PayPal</a>
                                </h5>
                            </div>
                            
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <div class="pull-right">
                                    <i class="fa fa-cc-amex text-success"></i>
                                    <i class="fa fa-cc-mastercard text-warning"></i>
                                    <i class="fa fa-cc-discover text-danger"></i>
                                </div>
                                <h5 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Thẻ tín dụng</a>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse in">
                                <div class="panel-body">

                                    <div class="row">
                                        <div class="col-md-4">
                                            <h2 style="color:#db8834;">Hình thức thanh toán</h2>
                                            <form action="{{URL::to('/order-place')}}" method="post">
                                                {{csrf_field()}}
                                            <span>
                                                <label><input type="checkbox" name="payment_option" value="Thanh toán thẻ ATM">&nbsp;Trả bằng thẻ ATM</label>
                                            </span><br>
                                            <span>
                                                <label><input type="checkbox" name="payment_option" value="Nhận tiền mặt">&nbsp;Nhận tiền mặt</label>
                                            </span><br>
                                            <span>
                                                <label><input type="checkbox" name="payment_option" value="Thanh toán thẻ ghi nợ">&nbsp;Thanh toán thẻ ghi nợ</label>
                                            </span>

                                            <p class="m-t">
                                                Vui lòng nhập đúng số tài khoản và số tiền bạn cần phải chuyển.Nếu bạn nhập sai thì phải tự chịu trách nhiệm.Xin cảm ơn.

                                            </p>
                                          
                                        </div>
                                        <div class="col-md-8">

                                           
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                        <div class="form-group">
                                                            <label>Số tài khoản</label>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control" name="Number" placeholder="Số tài khoản hợp lệ" >
                                                                <span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xs-7 col-md-7">
                                                    <div class="form-group">
                                                            <label>Chủ tài khoản</label>
                                                            <input type="text" class="form-control" name="nameCard" placeholder="Họ và Tên">
                                                        </div>
                                
                                                    </div>
                                                    <div class="col-xs-5 col-md-5 pull-right">
                                                    <div class="form-group">
                                                            <label>Ngày thanh toán</label>
                                                            <input type="text" class="form-control" name="Expiry" placeholder="MM / YY" >
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-xs-12">
                                                    <div class="form-group">
                                                            <label>Số tiền thanh toán</label>
                                                            <input type="text" class="form-control" name="CVC" placeholder="VNĐ" >
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="row">
                                                    <div class="col-xs-8">
                                                   <a href="{{URL::to('/')}}" class="btn btn-success"><< Trở về</a> 
                                                    </div>
                                                    <div class="col-xs-4">
                                                        <input type="submit" value="Thực hiện thanh toán" name="send_order_place" class="btn btn-primary">
                                                    
                                                    </div>
                                                </div>
                                            </form>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
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