<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class SendEmailController extends Controller
{
    function send(Request $request)
    {
        $this->validate($request, [
            'name'     =>  'required',
            'email'  =>  'required|email',
            'message' =>  'required',
        ]);

        $data = array(
            'name'      =>  $request->name,
            'message'   =>   $request->message,
            'email'   =>   $request->email,
            'title'   =>   $request->title
        );

        if (!empty($data['title'])) {
            return back()->with('status', 'Sua mensagem caiu na armadilha.');
        } else {
            Mail::to('contato@reradvocacia.com')->send(new SendMail($data));
            return back()->with('status', 'Mensagem enviada com sucesso!');
        }
    }
}
