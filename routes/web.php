<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BookingRoomController;
use App\Http\Controllers\ChiTietPhongController;
use App\Http\Controllers\ConfigController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\HoaDonController;
use App\Http\Controllers\KhuVucController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PhongController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\SpecialRoomController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;


Route::get('/jquery', [TestController::class, 'viewJQuery']);
Route::get('/vue', [TestController::class, 'viewVue']);
Route::get('/data', [TestController::class, 'testData']);

Route::post('/send-contact-us', [TestController::class, 'sendContactUs']);

Route::get('/login', [CustomerController::class, 'viewLogin']);
Route::get('/register', [CustomerController::class, 'viewRegister']);
Route::post('/login', [CustomerController::class, 'actionLogin']);
Route::post('/register', [CustomerController::class, 'actionRegister']);
Route::get('/active/{hash}', [CustomerController::class, 'activeCustomer']);
Route::get('/forgot-password', [CustomerController::class, 'viewForgotPassword']);
Route::post('/forgot-password', [CustomerController::class, 'actionForgotPassword']);
Route::get('/change-password/{hash}', [CustomerController::class, 'viewChangePassword']);
Route::post('/change-password', [CustomerController::class, 'actionChangePassword']);

Route::get('/', [TestController::class, 'index']);
Route::get('/list-room', [PhongController::class, 'viewListRoom']);
Route::get('/detail-room/{id}', [PhongController::class, 'viewDetailRoom']);

Route::post('/booking-process', [BookingRoomController::class, 'bookingProcess']);


Route::get('/admin/login', [AdminController::class, 'viewLogin']);
Route::post('/admin/login', [AdminController::class, 'actionLogin']);

Route::get('news/{str}', [NewsController::class, 'viewNews']);

Route::group(['prefix' => '/admin', 'middleware' => 'adminMiddle'], function () {
    Route::get('/logout', [AdminController::class, 'logout']);

    Route::group(['prefix' => '/hoa-don'], function () {
        Route::get('/', [HoaDonController::class, 'index']);
        Route::get('/data', [HoaDonController::class, 'data']);
        Route::post('/update', [HoaDonController::class, 'update']);
        Route::post('/delete', [HoaDonController::class, 'destroy']);
    });

    Route::group(['prefix' => '/lien-he'], function () {
        Route::get('/', [ContactUsController::class, 'index']);
        Route::get('/data', [ContactUsController::class, 'getData']);
        Route::post('/send-mail', [ContactUsController::class, 'sendMail']);
    });

    Route::group(['prefix' => '/khu-vuc'], function () {
        Route::get('/', [KhuVucController::class, 'index']);
        Route::post('/', [KhuVucController::class, 'store']);

        Route::get('/edit-old/{id}', [KhuVucController::class, 'edit']);
        Route::get('/delete-old/{id}', [KhuVucController::class, 'delete_old']);

        Route::post('/edit', [KhuVucController::class, 'edit_new']);
        Route::get('/index', [KhuVucController::class, 'index_new']);
        Route::post('/index', [KhuVucController::class, 'store_new']);
        Route::get('/data', [KhuVucController::class, 'data']);
        Route::post('/changeStatus', [KhuVucController::class, 'changeStatus']);
        Route::post('/delete', [KhuVucController::class, 'destroy']);
        Route::post('/update', [KhuVucController::class, 'update_new']);

        Route::post('/check-ma-khu', [KhuVucController::class, 'checkMaKhu']);
    });

    Route::group(['prefix' => '/phong'], function () {
        Route::get('/', [PhongController::class, 'index']);
        Route::get('/data', [PhongController::class, 'getData']);

        Route::post('/create', [PhongController::class, 'store']);
        Route::post('/destroy', [PhongController::class, 'destroy']);
        Route::post('/edit', [PhongController::class, 'edit']);
        Route::post('/update', [PhongController::class, 'update']);
        Route::post('/view-mota', [PhongController::class, 'viewMota']);
    });

    Route::group(['prefix' => '/gia-phong'], function () {
        Route::get('/', [SpecialRoomController::class, 'index']);
        Route::post('/create', [SpecialRoomController::class, 'store']);
        Route::get('/data', [SpecialRoomController::class, 'getData']); // Lấy thông tin tất cả giá phòng
        Route::post('/edit', [SpecialRoomController::class, 'edit']); // Lấy dữ liệu của phòng cần edit
        Route::post('/update', [SpecialRoomController::class, 'update']); // Lấy dữ liệu của phòng cần edit
        Route::post('/delete', [SpecialRoomController::class, 'destroy']);
        Route::post('/changeStatus', [SpecialRoomController::class, 'changeStatus']);
    });

    Route::group(['prefix' => '/chi-tiet-phong'], function () {
        Route::get('/', [ChiTietPhongController::class, 'index']);
        Route::get('/loadData', [ChiTietPhongController::class, 'loadData']);
        Route::post('/create', [ChiTietPhongController::class, 'store']);
        Route::post('/delete', [ChiTietPhongController::class, 'delete']);
        Route::get('/edit/{id}', [ChiTietPhongController::class, 'edit']);
        Route::post('/update', [ChiTietPhongController::class, 'update']);
        Route::post('/changeStatus', [ChiTietPhongController::class, 'changeStatus']);
        Route::post('/getListPhong', [ChiTietPhongController::class, 'getListPhong']);
    });

    Route::group(['prefix' => '/cau-hinh'], function () {
        Route::get('/', [ConfigController::class, 'index']);
        Route::post('/', [ConfigController::class, 'store']);
        Route::get('/data', [ConfigController::class, 'data']);
    });

    Route::group(['prefix' => '/tin-tuc'], function () {
        Route::get('/', [NewsController::class, 'index']);
        Route::post('/create', [NewsController::class, 'store']);
        Route::get('/data', [NewsController::class, 'data']);
        Route::post('/changeStatus', [NewsController::class, 'changeStatus']);
        Route::post('/delete', [NewsController::class, 'destroy']);
        Route::post('/update', [NewsController::class, 'update']);
    });

    Route::group(['prefix' => '/review'], function () {
        Route::get('/', [ReviewController::class, 'index']);
        Route::post('/create', [ReviewController::class, 'store']);
        Route::get('/data', [ReviewController::class, 'data']);
        Route::post('/changeStatus', [ReviewController::class, 'changeStatus']);
        Route::post('/delete', [ReviewController::class, 'destroy']);
        Route::post('/update', [ReviewController::class, 'update']);
    });

    Route::group(['prefix' => '/tai-khoan'], function () {
        Route::get('/', [AdminController::class, 'index']);
        Route::post('/create', [AdminController::class, 'store']);
        Route::get('/data', [AdminController::class, 'data']);
    });
});

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => []], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});
