<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;

use App\Mail\ContactUsMail;

class MailController extends Controller
{
    public function sendEmail(Request $request)
    {
        try {

            //$recipients = ['n.yushi1992@gmail.com', 'gattsman@gmail.com'];
            
            $recipients = ['nhanvothanh719@gmail.com'];
            $cc = ['n.yushi1992@gmail.com', 'gattsman@gmail.com', 'nhanvtgcd191366@fpt.edu.vn'];
            
            Mail::to($recipients)->cc($cc)->send(new ContactUsMail($request));
            
            return response([
                'message' => 'Send email successfully!',
                'name' => $recipients,
                'status' => 200,
            ]);

        } catch (Exception $exception) {
            
            return response([
                'message' => $exception->getMessage(),
                'status' => 500,
            ]);

        }
    }
}
