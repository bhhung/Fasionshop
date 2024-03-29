@extends('admin_layout')
@section('admin_content')
<style>
    span.text-alert {
  color: red;
}

</style>

<div class="row">
            <div class="col-lg-12">
                    <section class="panel">
                        <header class="panel-heading">
                            Thêm Danh Mục Sản Phẩm
                        </header>
                        <div class="panel-body">
                        
                            <div class="position-center">
                                <form role="form" action="{{URL::to('/save-category-product')}}" method="post">
                                  {{csrf_field()}}
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên danh mục</label>
                                    <input type="text" data-validation="length" data-validation-length="min3" data-validation-error-msg="Bạn không thể để trống"
                                    name="category_product_name" class="form-control" id="exampleInputEmail1" placeholder="Tên danh mục">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Mô tả danh mục</label>
                                    <textarea style="resize:none" rows="8" class="form-control" name="category_product_desc" id="ckeditor2" placeholder="Mô tả danh mục"></textarea>
                                </div>
                                <div class="form-group">
                                <label for="exampleInputPassword1">Hiển Thị</label>
                                <select name="category_product_status" class="form-control input-sm m-bot15">
                               <option value="0">Hiển thị</option>
                               <option value="1">Ẩn</option>
                            </select>
                            <?php 
             $message = Session::get('message');
             if ($message) {
                 echo '<span class="text-alert"> '.$message.'</span>';
                 Session::put('message',null);
             } 
            ?>
                                </div>
                                <button type="submit" name="add_category_product" class="btn btn-info">Thêm danh mục</button>
                            </form>
                            </div>

                        </div>
                    </section>

            </div>
@endsection