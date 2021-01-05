<?php

namespace App\Http\Controllers;

use App\Models\KhachHangModel;
use App\Models\OrdersDetailsModel;
use App\Models\OrdersModel;
use App\Models\TaiKhoanModel;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    //
    public function orders(){
        $hoadon=OrdersModel::all();
        $khachhang = TaiKhoanModel::join('khachhang','taikhoan.id_kh','=','khachhang.id_kh')->get();
        // dd($khachhang);
        return view('admin.pageadmin.order',compact('hoadon','khachhang'));
    }
    public function ordersdelete($id){
        OrdersModel::where('id_hd',$id)->delete();
        return redirect()->route('orders')->with('message','Xóa Thành Công');
    }
    public function orders_details($id){
        $chitiet = OrdersModel::where('id_hd',$id)->first();
        // dd($chitiet);
        $chitietHD = OrdersDetailsModel::where('id_hd',$id)->join('phong','phong.id_phong','=','chi_tiet_hoa_don.id_phong')->join('loai_phong','loai_phong.id_loai_phong','=','phong.id_loai_phong')->select('id_hd','dongia','chi_tiet_hoa_don.soluong','ten_loai_phong')->get();
        // dd($chitietHD);
        return view('admin.pageadmin.orders-details',compact('chitiet','chitietHD'));
    }
}
