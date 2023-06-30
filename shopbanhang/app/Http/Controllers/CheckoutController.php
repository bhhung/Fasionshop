<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class CheckoutController extends Controller
{
    public function login_checkout() {
        $cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get();
        $brand_product = DB::table('tbl_brand')->where('brand_status','0')->orderby('brand_id','desc')->get();
        return view('pages.checkout.login_checkout')->with('category',$cate_product)->with('brand',$brand_product);
    }
    public function add_user(Request $request) {
        $data = array();
        $data['name'] = $request->name;
        $data['phone'] = $request->phone;
        $data['email'] = $request->email;
        $data['password'] = md5($request->password);

        $id = DB::table('users')->insertGetId($data);

        Session::put('id',$id);
        Session::put('name',$request->name);
        return Redirect::to('/login-checkout');
    }
    public function checkout() {
        $cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get();
        $brand_product = DB::table('tbl_brand')->where('brand_status','0')->orderby('brand_id','desc')->get();
        return view('pages.checkout.show_checkout')->with('category',$cate_product)->with('brand',$brand_product);
    }
    public function save_checkout_customer(Request $request) {
        $data = array();
        $data['shipping_name'] = $request->shipping_name;
        $data['shipping_phone'] = $request->shipping_phone;
        $data['shipping_email'] = $request->shipping_email;
        $data['shipping_notes'] = $request->shipping_notes;
        $data['shipping_address'] = $request->shipping_address;

        $shipping_id = DB::table('tbl_shipping')->insertGetId($data);

        Session::put('shipping_id',$shipping_id);
       
        return Redirect::to('/payment');
    }
    public function payment() {
        $cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get();
        $brand_product = DB::table('tbl_brand')->where('brand_status','0')->orderby('brand_id','desc')->get();

        return view('pages.checkout.payment')->with('category',$cate_product)->with('brand',$brand_product);
    }
    public function order_place(Request $request) {
        //insert payment method
        $data = array();
        $data['payment_method'] = $request->payment_option;
        $data['payment_status'] = 'Đang chờ xử lý';
        $payment_id = DB::table('tbl_payment')->insertGetId($data);
  
        // //insert order
        // $order_data = array();
        // $order_data['customer_id'] = Session::get('customer_id');
        // $order_data['shipping_id'] =  Session::get('shipping_id');
        // $order_data['payment_id'] = $payment_id;
        // $order_data['order_total'] = 'Đang chờ xử lý';
        // $order_data['order_status'] = 'Đang chờ xử lý';
        // $order_id = DB::table('tbl_order')->insertGetId($data);

        //  //insert order details
        //  $order_d_data = array();
        //  $order_d_data['order_id'] =  $order_id;
        //  $order_d_data['product_id'] =  Session::get('shipping_id');
        //  $order_d_data['product_name'] = $payment_id;
        //  $order_d_data['product_price'] = $value->product_price;
        //  $order_d_data['product_sales_quantity'] = 'Đang chờ xử lý';
        //  $order_id = DB::table('tbl_order')->insertGetId($data);
       if($data['payment_method'] == 'Thanh toán thẻ ATM') {
           echo 'Thanh toán thẻ ATM';
       }elseif($data['payment_method'] == 'Nhận tiền mặt') {
           return view('pages.checkout.handcash');
       }else {
           echo 'Thẻ ghi nợ';
       }
        //return Redirect::to('/payment');
    }
    public function logout_checkout() {
        Session::flush();
        return Redirect::to('/login-checkout');
    }
    public function login_user(Request $request) {
        $email = $request->email_account;
        $password = md5($request->password_account);
        $result = DB::table('users')->where('email',$email)->where('password',$password)->first();
        if($result) {
           Session::put('id',$result->id);
            return Redirect::to('/');
        }else{
            return Redirect::to('/login-checkout');
        }     
    }
    public function register_checkout() {
        return view('pages.checkout.register_checkout');
    }
}
