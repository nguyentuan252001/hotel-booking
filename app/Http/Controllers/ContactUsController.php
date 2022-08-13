<?php

namespace App\Http\Controllers;

use App\Jobs\sendMailJob;
use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index()
    {
        return view('admin.page.lien_he.index');
    }

    public function getData()
    {
        $data = ContactUs::orderByDESC('id')->get(); // Những liên hệ mới nhất thì sẽ đưa lên đầu

        return response()->json([
            'data'  => $data,
        ]);
    }

    public function sendMail(Request $request)
    {
        $tieu_de  = $request->tieu_de;
        $noi_dung = $request->noi_dung;
        $data['noi_dung']   = $noi_dung;
        $so_luong           = 0;
        foreach ($request->list as $value) {
            if (isset($value['check']) && $value['check'] == true) {
                $mail_to        = $value['email'];
                $data['name']   = $value['name'];
                // Mail::to($mail_to)->send(new SendMail($tieu_de, $data, 'mail.send_info'));
                sendMailJob::dispatch($mail_to, $tieu_de, $data, 'mail.send_info');
                $so_luong++;
            }
        }

        return response()->json([
            'status'    => true,
            'message'   => 'Đã gửi email cho ' . $so_luong . ' thành viên',
        ]);
    }
}
