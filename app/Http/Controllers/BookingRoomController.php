<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomerBooking;
use App\Models\ChiTietPhong;
use App\Models\HoaDon;
use App\Models\Phong;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BookingRoomController extends Controller
{
    public function bookingProcess(CustomerBooking $request)
    {
        $data = $request->all();
        $phong =  Phong::where('id', $data['booking-roomtype'])->first();
        $data['booking-from'] =  Carbon::createFromFormat('d-m-Y', Str::substr($data['booking-date'], 0, 10))->format('Y-m-d');
        $data['booking-to'] =  Carbon::createFromFormat('d-m-Y', Str::substr($data['booking-date'], 13))->format('Y-m-d');
        $data['booking-room'] = intval(ceil($data['booking-adults'] / $phong->so_khach));
        $check = true;

        if ($data['booking-room'] < 1) {
            $check = false;
            toastr()->error('Số phòng đặt không hợp lệ');
        }
        if ($data['booking-from'] < date('Y-m-d')) {
            $check = false;
            toastr()->error('Ngày đặt phải lớn hơn hoặc bằng ngày hiện tại!');
        }
        if ($data['booking-from'] >  $data['booking-to']) {
            $check = false;
            toastr()->error('Ngày rời đi phải lớn hơn hoặc bằng ngày đến!');
        }
        if (!$check) {
            return redirect('/');
        } else {
            $this->createHoaDon($data);
            return redirect('/');
        }
    }

    public function createHoaDon($data)
    {
        HoaDon::create([
            'ho_va_ten' => $data['booking-name'],
            'email' => $data['booking-email'],
            'ngay_bat_dau' => $data['booking-from'],
            'ngay_ket_thuc' => $data['booking-to'],
            'so_phong_dat' => $data['booking-room'],
            'loai_phong_dat' => $data['booking-roomtype'],
        ]);
        toastr()->success("Tạo hóa đơn thành công");
    }
}
