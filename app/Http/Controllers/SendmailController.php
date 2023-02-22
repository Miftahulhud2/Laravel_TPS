<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\sendmail;
// use Laravel\Lumen\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;


class SendmailController extends Controller
{
    //
    public function index($kode)
    {

        $kode = db::table('saksi')->where('kode', $kode)->get();

        foreach ($kode as $k)
        {
            $data = [
                'name' => $k->nama,
                'email'=> $k->email,
                'kode' => $k->kode,
            ];

        }
        
        Mail::send('mail', $data, function ($message) use ($data) {
            $message->to($data['email'], $data['name'])->subject('Test Email');
        });
        return redirect('/tps/report')->with('success', 'KODE TELAH DIKIRIM KE EMAIL,BUKA DAN MASUKAN');
    }
}
