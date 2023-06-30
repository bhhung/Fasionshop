<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="js/jquery-1.11.1.min.js"></script>
</head>
<body style="background-color:#db8834;">
<div id="login-overlay" class="modal-dialog" style="margin-top:120px;">
 <div class="modal-content">
  <div class="modal-header">
   <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Đóng</span>
   </button>
   <h4 class="modal-title" id="myModalLabel">Đăng Ký Tài Khoản </h4>
  </div>
  <div class="modal-body">
   <div class="row">
    <div class="col-xs-6">
     <div class="well">
     <form action="{{URL::to('/add-user')}}" method="post">
	{{csrf_field()}}
    <div class="form-group">
           <label for="username" class="control-label">Họ và Tên</label>
           <input class="form-control"   name="name"  required="" placeholder="Tên của bạn" type="text"><span class="help-block"></span> 
       </div>
       <div class="form-group">
           <label for="username" class="control-label">Tài khoản</label>
           <input class="form-control"  name="email"  required="" placeholder="Email" type="email"><span class="help-block"></span> 
       </div>
       <div class="form-group">
           <label for="password" class="control-label">Mật khẩu</label>
           <input type="password" class="form-control"   name="password"  required=""  placeholder="Password" ><span class="help-block"></span> 
       </div>
       <div class="form-group">
           <label for="password" class="control-label">Số điện thoại</label>
           <input type="text" class="form-control"  name="phone"  required=""  placeholder="Số điện thoại" ><span class="help-block"></span> 
       </div>
       
      
       <button type="submit" class="btn btn-success btn-block">Đăng ký</button>
       
      </form>
     </div>
    </div>
    <div class="col-xs-6">
     <p class="lead"> <span class="text-success">Shop Nước Hoa</span>
     </p>
     <ul class="list-unstyled" style="line-height: 2">
      <li><span class="fa fa-check text-success"></span> <a href="#">Sản phẩm chính hảng 100%</a>
      </li>
      <li><span class="fa fa-check text-success"></span> <a href="#">Với nhiều thương hiệu khác nhau</a>
      </li>
      <li><span class="fa fa-check text-success"></span> <a href="#">Không tốn phí giao hàng</a>
      </li>
      <li><span class="fa fa-check text-success"></span> <a href="#">Nhiều khuyến mãi</a>
      </li>
      <li><span class="fa fa-check text-success"></span> <a href="#">Là lựa chọn tốt nhất dành cho bạn</a>
      </li>
     </ul>
     
     </p>
    </div>
   </div>
  </div>
 </div>
</div> 

</body>
</html>


