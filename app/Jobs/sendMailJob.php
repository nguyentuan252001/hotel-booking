<?php

namespace App\Jobs;

use App\Mail\SendMail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class sendMailJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    private $mail_to;
    private $tieu_de;
    private $data;
    private $view;
    public function __construct($mail_to, $tieu_de, $data, $view)
    {
        $this->mail_to  = $mail_to;
        $this->tieu_de  = $tieu_de;
        $this->data     = $data;
        $this->view     = $view;
    }

    public function handle()
    {
        Mail::to($this->mail_to)->send(new SendMail($this->tieu_de, $this->data, $this->view));
    }
}
