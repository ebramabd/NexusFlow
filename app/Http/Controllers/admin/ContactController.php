<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{

    public function send_message(Request $request)
    {
        $validated = $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email',
            'message' => 'required|string',
        ]);

        try {
            Mail::to('info@contempuseng.com')->send(
                new ContactFormMail($validated['name'], $validated['email'], $validated['message'])
            );

            return back()->with('success', 'Your message has been sent successfully!');
        } catch (Exception $e) {
            Log::error('Mail sending failed: '.$e->getMessage());

            return back()->withErrors(['mail_error' => 'Something went wrong while sending your message. Please try again later.'])
                ->withInput();
        }
    }

    /* public function submitContact(Request $request)
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
    }*/
}
