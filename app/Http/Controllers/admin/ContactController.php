<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function submitContact(Request $request)
    {
        $recaptchaSecret = "6LcwYKorAAAAAN3LC7AkSyFujHTGunBWEcohyJd5";
        $response = $request->input('g-recaptcha-response');

        $verify = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$recaptchaSecret}&response={$response}");
        $captcha = json_decode($verify);

        if ($captcha->success && $captcha->score >= 0.5) {
            return back()->with('success', 'Message sent successfully!');
        } else {
            return back()->withErrors(['captcha' => 'Suspicious activity detected. Please try again.']);
        }
    }

}
