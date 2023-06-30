@extends('admin_layout')
@section('admin_content')
<style>
  span.text-alert {
    color: red;

}
</style>
<div class="table-agile-info">
  <div class="panel panel-default">
    <div class="panel-heading">
       Kết quả tìm kiếm
    </div>
    <div class="row w3-res-tb">
     
      <div class="col-sm-4">
      </div>
      
    </div>
    <div class="table-responsive">
   
      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
            <th style="width:20px;">
              <label class="i-checks m-b-none">
                <input type="checkbox"><i></i>
              </label>
            </th>
            <th>Tên sản phẩm</th>
            <th>Giá</th>
            <th>Hình ảnh</th>
            <th>Danh mục</th>
            <th>Thương hiệu</th>
            <th>Ngày thêm</th>
            
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
           @foreach($search_product as $key => $pro)
          <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
            <td>{{ $pro -> product_name}}</td>
            <td>{{ $pro -> product_price}}</td>
            <td><img src = "public/uploads/product/{{ $pro -> product_image}}" height="80" width="80"></td>
            <td>{{ $pro -> category_name}}</td>
            <td>{{ $pro -> brand_name}}</td>
            
            <td><span class="text-ellipsis"><?php echo date('Y.m.d'); ?></span></td>
           
          </tr>
          @endforeach
         </tbody>
      </table>
    </div>
   
  </div>
</div>
@endsection