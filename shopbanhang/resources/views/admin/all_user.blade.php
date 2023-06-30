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
      Quản Lý Tài Khoản Khách Hàng
    </div>
    <div class="row w3-res-tb">
    
      <div class="col-sm-4">
      </div>
      <div class="col-sm-3">
        
      </div>
    </div>
    <div class="table-responsive">

      <table class="table table-striped b-t b-light">
        <thead>
          <tr>
          
            <th>Tên User</th>
            <th>Email</th>
            <th>Password</th>
            <th>Số điện thoại</th>
          </tr>
        </thead>
        <tbody>
             @foreach($users as $row)
          <tr>
            <td>{{$row->name}}</td>
            <td>{{$row->email}}</td>
            <td>{{$row->password}}</td>
            <td>{{$row->phone}}</td>    
             <td>
            
             </td>
          </tr>
          @endforeach
             
          
         </tbody>
      </table>
    </div>
   
  </div>
</div>
@endsection