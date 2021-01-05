<?php

namespace App\Providers;

use App\Models\HieuUngModel;
use App\Models\LoaiPhongModel;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\DB;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        view()->composer('common.header',function($view){
            // session('custommername');
            if(Auth::guard('taikhoan')->check()){
                $id_kh = Auth::guard('taikhoan')->user()->id_kh;
                $tenkh = DB::table('khachhang')->where('id_kh',$id_kh)->first();
                // print_r($tenkh);
                $view->with('tenkh',$tenkh);
            }
            // $chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
            //     $res = "";
            //     for ($i = 0; $i < 10; $i++) {
            //         $res .= $chars[mt_rand(0, strlen($chars)-1)];
            //     }
            //     echo $res;
            // $view->with('loai_sp',$loai_sp);
        });
        view()->composer('common.offcanvasmenusectionbegin',function($view){
            // session('custommername');
            if(Auth::guard('taikhoan')->check()){
                $id_kh = Auth::guard('taikhoan')->user()->id_kh;
                $tenkh = DB::table('khachhang')->where('id_kh',$id_kh)->first();
                // print_r($tenkh);
                $view->with('tenkh',$tenkh);
            }
            // $chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
            //     $res = "";
            //     for ($i = 0; $i < 10; $i++) {
            //         $res .= $chars[mt_rand(0, strlen($chars)-1)];
            //     }
            //     echo $res;
            // $view->with('loai_sp',$loai_sp);
        });
        view()->composer('pages.mail',function($view){
            // session('custommername');
            if(Auth::guard('taikhoan')->check()){
                $id_kh = Auth::guard('taikhoan')->user()->id_kh;
                $tenkh = DB::table('khachhang')->where('id_kh',$id_kh)->first();
                // print_r($tenkh);
                $view->with('tenkh',$tenkh);
            }
            // $chars = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
            //     $res = "";
            //     for ($i = 0; $i < 10; $i++) {
            //         $res .= $chars[mt_rand(0, strlen($chars)-1)];
            //     }
            //     echo $res;
            // $view->with('loai_sp',$loai_sp);
        });
        view()->composer('admin.common.header',function($view){
            session('admin');
            // $view->with('loai_sp',$loai_sp);
        });
        view()->composer('common.header',function($view){
            $loai_sp= LoaiPhongModel::all();
            $gioithieu = DB::table('gioithieu')->get();
            $view->with('gioithieu',$gioithieu);
            $view->with('loai_sp',$loai_sp);
        });
        Paginator::useBootstrap();
        view()->composer('masterpage',function($view){
            $hieuung= HieuUngModel::where('trangthai', 'On')->first();
            $loaiphong = LoaiPhongModel::all();
            $view->with('hieuung',$hieuung);
            $view->with('loaiphong',$loaiphong);
        });
        view()->composer('common.offcanvasmenusectionbegin',function($view){

            $loai_sp= LoaiPhongModel::all();
            $gioithieu = DB::table('gioithieu')->get();
            $view->with('gioithieu',$gioithieu);
            $view->with('loai_sp',$loai_sp);
        });
    }
}
