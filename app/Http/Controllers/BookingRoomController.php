<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomerBooking;
use App\Jobs\sendMailJob;
use App\Models\ChiTietPhong;
use App\Models\HoaDon;
use App\Models\Phong;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BookingRoomController extends Controller
{
    public function bookingProcess(CustomerBooking $request)
    {
        $data = $request->all();
        $phong =  Phong::where('id', $data['booking-roomtype'])->first();
        $data['booking-from']   =  Carbon::createFromFormat('d-m-Y', Str::substr($data['booking-date'], 0, 10))->format('Y-m-d');
        $data['booking-to']     =  Carbon::createFromFormat('d-m-Y', Str::substr($data['booking-date'], 13))->format('Y-m-d');
        $data['booking-room']   = intval(ceil($data['booking-adults'] / $phong->so_khach));
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
        DB::beginTransaction();
        try {
            $ngay_bd = Carbon::parse($data['booking-from']);
            $ngay_kt = Carbon::parse($data['booking-to']);
            $so_ngay = $ngay_kt->diffInDays($ngay_bd);

            $phong =  Phong::where('id', $data['booking-roomtype'])->first();
            $tong_tien = $phong->gia_mac_dinh * $so_ngay * $data['booking-room'];

            $hoaDon = HoaDon::create([
                'ho_va_ten' => $data['booking-name'],
                'email' => $data['booking-email'],
                'ngay_bat_dau' => $data['booking-from'],
                'ngay_ket_thuc' => $data['booking-to'],
                'so_phong_dat' => $data['booking-room'],
                'loai_phong_dat' => $data['booking-roomtype'],
                'tong_tien' => $tong_tien,
            ]);
            $so_hoa_don = (10000 + $hoaDon->id * 1);

            $data['ho_va_ten'] = $data['booking-name'];
            $data['tu_ngay'] = Carbon::parse($data['booking-from'])->format('d/y/Y');
            $data['den_ngay'] = Carbon::parse($data['booking-to'])->format('d/y/Y');
            $data['so_khach'] = $data['booking-adults'] . ' Người lớn và ' . $data['booking-children'] . ' Trẻ em';
            $data['so_phong_dat'] = $data['booking-room'];
            $data['loai_phong_dat'] = $phong->ma_phong;
            $data['tong_tien_thanh_toan'] = number_format($tong_tien, 0) . 'đ';
            $data['tien_dat_coc'] =  number_format($tong_tien * 0.3, 0) . 'đ';
            $data['noi_dung_chuyen_khoan'] = 'HD' . $so_hoa_don;

            sendMailJob::dispatch($data['booking-email'], 'Xác Nhận Đặt Phòng', $data, 'mail.order');

            toastr()->success("Đặt phòng thành công");
            DB::commit();
        } catch (Exception $e) {
            DB::rollBack();
        }
    }
}
