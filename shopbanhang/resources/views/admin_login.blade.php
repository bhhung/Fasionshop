<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        :root {
            --bg1 :#696969;
            --bg2 :#db8834;
            --text:#26ade4;
        }
        *{
             margin:0;
            padding:0;
            outline:none; 
        }
        a{
            text-decoration:none;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            
            width: 100vw;
            height: 100vh;
            background: linear-gradient(to bottom right,var(--bg1),var(--bg2));
        }
        .login-form{
    width: 100%;
    max-width: 450px;
    margin: 20px auto;
    background-color: #ffffff;
    padding: 25px;
    border: 2px dotted #cccccc;
    border-radius: 10px;
}
h1{
    color: #db8834;
    font-size: 20px;
    margin-bottom: 30px;
    text-align: center;
}
.input-box{
    margin-bottom: 10px;
    text-align: center;
}
.input-box input{
    padding: 9.5px 1px;
    width: 70%;
    border: 1px solid #cccccc;
    outline: none;
    
}
.btn-box{
    text-align: right;
    margin-top: 30px;
}
.btn-box button{
    width: 95%;
    height:35px;
    margin-bottom: 30px;
    border-radius: 2px;
    background-color: #db8834;
    color: #ffffff;
    border: none;
    outline: none;
}
.btn-box span a{
    color: red; 
}
.checked-box  {
    margin-left: 70px;
}
span.text-alert {
    color: red;
    font-size: 17px;
    margin-left: 110px;
    font-weight: bold;
}




        
    </style>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('public/frontend/css/main1.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/font-awesome.min.css')}}" rel="stylesheet">
</head>
<body>
    <div class="container">
      <div class="login-form">
        <form action="{{URL::to ('/admin-dashboard')}}" method="post">
            {{csrf_field()}}
            <h1>Đăng Nhập</h1>
            <?php 
             $message = Session::get('message');
             if ($message) {
                 echo '<span class="text-alert"> '.$message.'</span>';
                 Session::put('message',null);
             } 
            ?>
            <div class="input-box">
            <i class="fa fa-male"></i>&nbsp;
            <input type="text" name="admin_email" placeholder="Email...">
            </div>
            <div class="input-box">
            <i class="fa fa-unlock-alt"></i>&nbsp;
            <input type="password" name="admin_password" placeholder="Password...">
            </div>
            <div class="checked-box"> 
              <input type="checkbox" checked="checked" name="remember"> Remember me
              </div>
           
            <div class="btn-box">
                <button type="submit">
                    Đăng Nhập
                </button><br>
                <span>Bạn Chưa Có Tài Khoản? Đăng Ký <a href="">Tại đây.</a></span>
        </div>
      
        </form> 
      </div>
    </div>
  
</body>
</html>



