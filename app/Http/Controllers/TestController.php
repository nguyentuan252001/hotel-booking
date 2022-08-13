<?php

namespace App\Http\Controllers;

use App\Http\Requests\SendContactRequest;
use App\Mail\SendMail;
use App\Models\Config;
use App\Models\ContactUs;
use App\Models\Phong;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class TestController extends Controller
{
    public function view()
    {
        return view('admin.share.master');
    }

    public function index()
    {
        $data = Phong::where('tinh_trang', 1)->get();

        $phong = Phong::where('tinh_trang', 1)->orderByDESC('gia_mac_dinh')->take(3)->get();
        $review = Review::orderByDESC('id')->take(9)->get();
        $gallery = Config::get();
        return view('client.page.home_page ', compact('data', 'phong', 'review', 'gallery'));
    }

    public function viewJQuery()
    {
        return view('admin.page.vue.jquery ');
    }

    public function viewVue()
    {
        return view('admin.page.vue.vue ');
    }

    public function testData()
    {
        $data = Phong::get();
        return response()->json([
            'data' => $data,
        ]);
    }


    public function sendContactUs(SendContactRequest $request)
    {
        $ip = $request->ip();
        $user_agent  = $request->header('User-Agent');
        $arr         = $this->getDevice($user_agent);
        $system      = $arr[0];
        $browser     = $arr[1];

        ContactUs::create([
            'name'      => $request->name,
            'email'     => $request->email,
            'message'   => $request->message,
            'ip'        => $ip,
            'system'    => $system,
            'browser'   => $browser,

        ]);


        // Gửi Email
        $data['name']     = $request->name;
        $data['message']   = $request->message;
        Mail::to($request->email)->send(new SendMail(
            'Cảm ơn bạn đã đặt câu hỏi cho chúng tôi!',
            $data,
            'mail.contact_us',
        ));


        return response()->json([
            'status' => true,
            'message' =>  'Chúng tôi đã ghi nhận thông tin của bạn',
        ]);
    }


    public function getDevice($user_agent)
    {
        $bname = 'Unknown';
        $platform = 'Unknown';

        //First get the platform?
        if (preg_match('/linux/i', $user_agent)) {
            $platform = 'linux';
        } elseif (preg_match('/macintosh|mac os x/i', $user_agent)) {
            $platform = 'mac';
        } elseif (preg_match('/windows|win32/i', $user_agent)) {
            $platform = 'windows';
        }

        // Next get the name of the useragent yes seperately and for good reason
        if (preg_match('/MSIE/i', $user_agent) && !preg_match('/Opera/i', $user_agent)) {
            $bname = 'Internet Explorer';
            $ub = "MSIE";
        } elseif (preg_match('/Firefox/i', $user_agent)) {
            $bname = 'Mozilla Firefox';
            $ub = "Firefox";
        } elseif (preg_match('/Chrome/i', $user_agent)) {
            $bname = 'Google Chrome';
            $ub = "Chrome";
        } elseif (preg_match('/Safari/i', $user_agent)) {
            $bname = 'Apple Safari';
            $ub = "Safari";
        } elseif (preg_match('/Opera/i', $user_agent)) {
            $bname = 'Opera';
            $ub = "Opera";
        } elseif (preg_match('/Netscape/i', $user_agent)) {
            $bname = 'Netscape';
            $ub = "Netscape";
        }

        return  [$platform, $bname];
    }
}
