@extends('welcome')
@section('content')

<div class="features_items">

						<i><h2 class="title text-center" style="margin-top:12px;color:#f08f2e;">Sản Phẩm</h2></i>
						@foreach($all_product as $key => $product)
						
						<a href="{{URL::to('/chi-tiet-san-pham/'.$product->product_id)}}">
							
						<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img src="{{URL::to('public/uploads/product/'.$product->product_image)}}" alt="" />
											<h2 style="color:#f08f2e;">{{number_format($product->product_price).'  '.'VNĐ'}}</h2>
											<p>{{$product->product_name}}</p>
											<form action="{{URL::to('/save-cart')}}" method="post">
                                    {{csrf_field()}}
									<button type="submit" class="btn btn-fefault cart">
										<i class="fa fa-shopping-cart"></i>
										Thêm Giỏ Hàng
									</button>
											</form>
										</div>
										
								</div>
							</div>
						</div>
						</a>
						
						@endforeach
						
						</div>
						
						
@endsection