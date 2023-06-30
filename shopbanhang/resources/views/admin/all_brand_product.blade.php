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
      Liệt kê thương hiệu sản phẩm
    </div>
    <div class="row w3-res-tb">
     
      <div class="col-sm-4">
      </div>
      <div class="col-sm-3">
       
      </div>
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
            <th>Tên thương hiệu</th>
            <th>Hiển thị</th>
            <th>Ngày thêm</th>
            <th>Hành động</th>
            
            <th style="width:30px;"></th>
          </tr>
        </thead>
        <tbody>
          @foreach($all_brand_product as $key => $brand_pro)
          <tr>
            <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
            <td>{{ $brand_pro -> brand_name}}</td>
            <td><span class="text-ellipsis">
              <?php
                   if($brand_pro -> brand_status == 0){
                     ?>
                     <a href="{{URL::to('/unactive-brand-product/'.$brand_pro->brand_id)}}"><span class="fa-eye-styling fa fa-eye"></span></a>
                     <?php
                      }else{
                     ?>      
                    <a href="{{URL::to('/active-brand-product/'.$brand_pro->brand_id)}}"><span class="fa-eye-styling fa fa-eye-slash"></span></a>
                    <?php 
                   }
              
              ?>            
            </span></td>
            <td><span class="text-ellipsis"><?php echo date('Y.m.d'); ?></span></td>
            <td>
              <a href="{{URL::to('/edit-brand-product/'.$brand_pro->brand_id)}}" class="active styling-edit" ui-toggle-class="">
              <button type="submit" class="btn btn-success">Sửa</button></a>
                <a onclick="return confirm('Bạn có chắc chắn muốn xóa không?')" href="{{URL::to('/delete-brand-product/'.$brand_pro->brand_id)}}" class="active styling-edit" ui-toggle-class="">
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