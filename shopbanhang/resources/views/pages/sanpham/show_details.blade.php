@extends('welcome')
@section('content')
@foreach($product_details as $key => $value)
<div class="product-details"><!--product-details-->
						<div class="col-sm-5">
							<div class="view-product">
								<img src="{{URL::to('public/uploads/product/'.$value->product_image)}}" alt="" />
								<h3>Hot</h3>
							</div>
							<div id="similar-product" class="carousel slide" data-ride="carousel">
								
				
							</div>

						</div>
						<div class="col-sm-7">
							<div class="product-information"><!--/product-information-->
								<img src="images/product-details/new.jpg" class="newarrival" alt="" />
								<h2>{{$value->product_name}}</h2>
								<p> ID Sản Phẩm: {{$value->product_id}}</p>
                                <form action="{{URL::to('/save-cart')}}" method="post">
                                    {{csrf_field()}}
                                <p style="font-size:30px;color:#db8834;">Giá: {{number_format($value->product_price).'VNĐ'}}</p>
								<i><p><b>Tình Trạng:</b> Còn Hàng</p></i>
								<i><p><b>Điều Kiện:</b> Mới 100%</p></i>
								<i><p><b>Thương Hiệu:</b> {{$value->brand_name}}</p></i>
                               <i><p><b>Danh Mục:</b> {{$value->category_name}}</p></i>
                               <i> <span><label>Số Lượng:</label>
									<input name="qty" type="number" min="1" value="1" />
                                    <input name="productId_hidden" type="hidden"  value="{{$value->product_id}}" /></span></i>
                                <button type="submit" class="btn btn-fefault cart">
										<i class="fa fa-shopping-cart"></i>
										Thêm Giỏ Hàng
									</button>
                                    </form>
								<a href=""><img src="images/product-details/share.png" class="share img-responsive"  alt="" /></a>
							</div><!--/product-information-->
						</div>
					</div>
@endforeach
                    <div class="tab-pane fade active in" id="reviews" >
								<div class="col-sm-12">
									<ul>
										<li><a href=""><i class="fa fa-user"></i>EUGEN</a></li>
										<li><a href=""><i class="fa fa-clock-o"></i><?php  echo date("H:i A"); ?></a></li>
										<li><a href=""><i class="fa fa-calendar-o"></i><?php  echo date("d M Y"); ?></a></li>
									<h3 style="text-align: center; color: #db8834">Đánh Giá Sản Phẩm</h3>
									<p><b>Viết đánh giá của bạn</b></p>
									
									<form action="#">
										<span>
											<input type="text" placeholder="Tên của bạn"/>
											<input type="email" placeholder="Địa chỉ email"/>
										</span>
										<textarea name="" ></textarea>
									
										<button type="button" class="btn btn-default pull-right">
											Gửi
										</button>
									</form>
								</div>
							</div>
							
                    @endsection