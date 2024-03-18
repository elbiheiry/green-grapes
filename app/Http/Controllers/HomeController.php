<?php

namespace App\Http\Controllers;

use App\Mail\SendEmail;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpKernel\Exception\HttpException;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function sendMail(Request $request)
    {
        $validation = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|numeric',
            'subject' => 'required|max:255',
            'message' => 'required',
        ] , [] , [
            'name' => 'الإسم بالكامل',
            'email' => 'البريد الإلكتروني',
            'phone' => 'رقم الهاتف',
            'subject' => 'عنوان الرسالة',
            'message' => 'الرسالة',
        ]);

        if ($validation->fails()) {
            throw new HttpResponseException(response()->json($validation->errors()->first(), 400));
        }

        try {
            $details = $request->all();

            Mail::to('info@greengrapes.com.sa')->send(new SendEmail($details));

            return response()->json('تم إرسال الرسالة بنجاح' , 200);
        } catch (\Throwable $th) {
            return response()->json('حدث خطأ ما برجاء المحاولة مرة أخري لاحقا' , 400);
        }
        
    }
}
