<!DOCTYPE html>
<html lang="en">
<head>

    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
</head>
<body style="background-color:#db8834;;font-family: 'Montserrat', sans-serif;">

<div class="container mt-5 mb-5">
    <div class="row d-flex justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="text-left logo p-2 px-5"> <img src="{{('public/frontend/images/logo.png')}}"height="80" width="100"> </div>
                <div class="invoice p-4">
                    <h5>Đơn đặt hàng của bạn đang được xử lý!</h5> <span class="font-weight-bold d-block mt-4">Xin chào....</span> <span>Đơn hàng của bạn chúng tôi đã nhận được.Chúng tôi sẽ liên lạc <br> với bạn trong thời gian sớm nhất, mọi thắc mắc xin vui lòng liên hệ ở phần hỗ trợ.</span>
                    <div class="payment border-top mt-3 mb-3 border-bottom table-responsive">
                        <table class="table table-borderless">
                            <tbody>
          
                                <tr>
                                    <td>
                                        <div class="py-2"> <span class="d-block text-muted">Ngày đặt hàng</span> <span><?php echo date('Y/F/d') ?></span> </div>
                                    </td>
                                    <td>
                                        <div class="py-2"> <span class="d-block text-muted">Đặt hàng không</span> <span>MT12332345</span> </div>
                                    </td>
                                    <td>
                                        <div class="py-2"> <span class="d-block text-muted">Thanh toán</span> <span style="font-size:17px;color:red;">Tiền mặt</span> </div>
                                    </td>
                                    <td>
                                        <div class="py-2"> <span class="d-block text-muted">Tình trạng</span> <span>Đang xử lý...</span><div class="spinner-border text-danger" role="status">
                                       <span class="sr-only">Loading...</span></div> </div>
                                    </td>
                                </tr>
                               
                            </tbody>
                        </table>
                    </div>
                  
                    <div class="row d-flex justify-content-end">
                        <div class="col-md-5">
                        
                        </div>
                    </div>
                    <p>Chúng tôi sẽ gửi email xác nhận vận chuyển khi hàng được vận chuyển thành công!</p>
                    <p class="font-weight-bold mb-0">Cảm ơn đã đi mua sắm cùng chúng tôi!</p> <span>Erfume Team</span>
                </div>
                <div class="d-flex justify-content-between footer p-3"> <span>Tiếp tục mua hàng <a href="{{URL::to('/')}}"> trở về</a></span> <span><?php echo date('d,F  Y') ?></span> </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>