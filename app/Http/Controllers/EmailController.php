<?php

namespace App\Http\Controllers;

use App\Mail\Email;
use App\Mail\EmailAtach;
use App\Models\User;
use App\Notifications\Informasi;
// use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class EmailController extends Controller
{
    public function kirimemail()
    {
        Mail::to('isti@gmail.com')->send(new Email());
        // return new Email();
    }
    public function attach()
    {
        $text = [
            'subject' => 'Pengiriman dari controller'  
        ];
        Mail::to('isti@gmail.com')->send(new EmailAtach($text));
    }
    public function notif()
    {
        $user = User::first();
        // dd($user);
        $data = [
            'line1' => 'Pesanan Anda Telah Diterima Oleh Kurir',
            'action' => 'Klik Ok',
            'line2' => 'Batas Pengiriman Tanggal ....'
        ];

        $user->notify(new informasi($data));
    }
}
