<?php

namespace App\Http\Controllers;

use App\Models\LoaiPhongModel;
use App\Models\MaGiamGiaModel;
use App\Models\PhongModel;
use Illuminate\Http\Request;
use Cart;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
session_start();
class CartController extends Controller
{
    //

    public function cart(){
        // session()->forget('cart');
        // Session->destroy('cart');
        // echo ${ghichu};
        // print_r(\session()->get('ghichu'));
        // echo \session('ghichu');


        return view('pages.cart');
    }
    public function postghichu(Request $request){
        $data = $request->all();
        // print_r($data);
        \session()->put('ghichu',$data['ghichu']);
        print_r(\session('ghichu'));
    }
    public function addtoCart(request $request){
        $data = $request->all();
        $cart = session()->get('cart');
        if($cart==true){
            $is_avaiable = 0;
            foreach($cart as $key=>$val){
                if($val['product_id']==$data['cart_product_id']){
                    $is_avaiable++;
                    // $cart[$data['cart_product_id']]['product_qty']++;
                    // session()->put('cart',$cart);
                }
            }
            if($is_avaiable==0){
                $cart[$data['cart_product_id']] = array(
                    'product_id' => $data['cart_product_id'],
                    'product_loai' => $data['cart_product_ten_loai_phong'],
                    'product_image' => $data['cart_product_image'],
                    'product_qty' => 1,
                    'product_gia' => $data['cart_product_gia'],
                );
                session()->put('cart',$cart);
            }
            else {
                $cart[$data['cart_product_id']]['product_qty']++;
                session()->put('cart',$cart);
            }
        } else {
            $cart[$data['cart_product_id']] = array(
                    'product_id' => $data['cart_product_id'],
                    'product_loai' => $data['cart_product_ten_loai_phong'],
                    'product_image' => $data['cart_product_image'],
                    'product_qty' => 1,
                    'product_gia' => $data['cart_product_gia'],
            );
        }
        session()->put('cart',$cart);
        session()->save();

        // $id = $data['cart_product_id'];
        // if(!session()->has('cart')){
        //     $cart =[
        //         $data['cart_product_id'] => [
        //             'product_id' => $data['cart_product_id'],
        //             'product_loai' => $data['cart_product_ten_loai_phong'],
        //             'product_image' => $data['cart_product_image'],
        //             'product_qty' => 1,
        //             'product_gia' => $data['cart_product_gia'],
        //         ]
        //     ];
        //     session()->put('cart',$cart);
        // } elseif(!isset($cart[$data['cart_product_id']])){
        //     $cart[$data['cart_product_id']] = [
        //         'product_id' => $data['cart_product_id'],
        //         'product_loai' => $data['cart_product_ten_loai_phong'],
        //         'product_image' => $data['cart_product_image'],
        //         'product_qty' => 1,
        //         'product_gia' => $data['cart_product_gia'],
        //         ];
        //     session()->put('cart',$cart);
        // } elseif(isset($cart[$data['cart_product_id']])){
        //     if (array_key_exists($data['cart_product_id'], $cart)) {
        //         $cart[$data['cart_product_id']]['product_qty']++;
        //         session()->put('cart',$cart);
        //     }
        //     $cart[$data['cart_product_id']] = [
        //         'product_id' => $data['cart_product_id'],
        //         'product_loai' => $data['cart_product_ten_loai_phong'],
        //         'product_image' => $data['cart_product_image'],
        //         'product_qty' => $cart[$data['cart_product_id']]['product_qty']++,
        //         'product_gia' => $data['cart_product_gia'],
        //     ];
        //     session()->put('cart',$cart);
                // $cart[$data['cart_product_id']]['product_qty']++;
                // session()->put('cart', $cart);

        // }

        // print_r($data);

        // if(isset($cart[$data['cart_product_id']])){

        // }
        // redirect()->route('cart');
        // if($cart[$data['cart_product_id']]){
        //     $cart[$data['cart_product_id']] = [
        //         'product_loai' => $data['cart_product_ten_loai_phong'],
        //         'product_image' => $data['cart_product_image'],
        //         'product_qty' => $cart[$data['cart_product_id']]['product_qty']++,
        //         'product_gia' => $data['cart_product_gia'],
        // ];
        // session()->put('cart', $cart);
        // }
    }
    public function trashcart($id){
        // $data = $request->all();
        // echo $id;
        $cart=session()->get('cart');
        if($cart==true){
            foreach($cart as $key=>$val){
                if($key==$id){
                    unset($cart[$key]);
                }
            }
            session()->put('cart', $cart);
        }
        // print_r($data);
        // session()->forget('cart',$id);
        // $cart[$data['cart_product_id']]
    }
    public function updatecart($id,$value){
        $cart=session()->get('cart');
        if($cart==true){
            foreach($cart as $key=>$val){
                if($key==$id){
                    $cart[$id]['product_qty'] = $value;
                }
                // echo $key;
                // echo $value;
            }
            session()->put('cart', $cart);
        }
    }
    public function check_coupon(Request $request){
        $data = $request->all();
        $coupon = MaGiamGiaModel::where('magiamgia',$data['inputma'])->first();
        if($coupon){
            $count_coupon = $coupon->count();
            if($coupon->soluong>0){
                if($count_coupon>0){
                    $count_session = session()->get('coupon');
                    if($count_session==true){
                        $is_avaiable = 0;
                        if($is_avaiable==0){
                            $cou[] = array(
                                'coupon_code' => $coupon->magiamgia,
                                'coupon_condition' => $coupon->dieu_kien_giam,
                                'coupon_number' => $coupon->gia_giam,
                            );
                            session()->put('coupon',$cou);
                        }
                    }else{
                        $cou[] = array(
                            'coupon_code' => $coupon->magiamgia,
                            'coupon_condition' => $coupon->dieu_kien_giam,
                            'coupon_number' => $coupon->gia_giam,
                        );
                        session()->put('coupon',$cou);
                    }
                    session()->save();
                    // print_r($test);
                    // return redirect()->route('cart')->with('message','Áp dụng mã thành công');
                }
            }else{
                return redirect()->with('message','Mã giảm giá không tồn tại');
            }
        }else{
            return redirect()->with('message','Mã giảm giá không tồn tại');
        }
        // print_r($data);
    }
    public function remove_coupon(){
        session()->forget('coupon');
    }
}
