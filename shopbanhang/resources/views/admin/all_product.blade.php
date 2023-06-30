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
      Liệt kê sản phẩm
    </div>
    <div class="row w3-res-tb">
     
      <div class="col-sm-4">
      </div>
      <form action="{{URL::to('/search-product')}}" method="post">
          {{csrf_field()}}
      <div class="col-sm-3">
        
       
      </div>
      </form>
    </div>
    <div class="table-responsive">
    <?php 
             $message = Session::get('message');
             if ($message) {
                 echo '<span class="text-alert" style="margin-left: 59px;"> '.$message.'</span>';
                 Session::put('message',null);
             } 
            ?>
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
            <th>Hiển thị</th>
            <th>Ngày thêm</th>
            <th>Hành động</th>
            
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          @foreach($all_product as $key => $pro)
          <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
            <td>{{ $pro -> product_name}}</td>
            <td>{{ $pro -> product_price}}</td>
            <td><img src = "public/uploads/product/{{ $pro -> product_image}}" height="80" width="80"></td>
            <td>{{ $pro -> category_name}}</td>
            <td>{{ $pro -> brand_name}}</td>
            <td><span class="text-ellipsis">
              <?php
                   if($pro -> product_status == 0){
                     ?>
                     <a href="{{URL::to('/unactive-product/'.$pro->product_id)}}"><span class="fa-eye-styling fa fa-eye"></span></a>
                     <?php
                      }else{
                     ?>      
                    <a href="{{URL::to('/active-product/'.$pro->product_id)}}"><span class="fa-eye-styling fa fa-eye-slash"></span></a>
                    <?php 
                   }
              
              ?>            
            </span></td>
            <td><span class="text-ellipsis"><?php echo date('Y.m.d'); ?></span></td>
            <td>
              <a href="{{URL::to('/edit-product/'.$pro->product_id)}}" class="active styling-edit" ui-toggle-class="">
              <button type="submit" class="btn btn-success">Sửa</button></a>
                <a onclick="return confirm('Bạn có chắc chắn muốn xóa không?')" href="{{URL::to('/delete-product/'.$pro->product_id)}}" class="active styling-edit" ui-toggle-class="">
                <button type="submit" class="btn btn-danger">Xóa</button>
                </a>
            </td>
          </tr>
          @endforeach
         </tbody>
      </table>
    </div>
   
  </div>
</div>
@endsection