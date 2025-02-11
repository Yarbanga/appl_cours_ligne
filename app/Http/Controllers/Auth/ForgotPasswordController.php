<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;

class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;
    

    public function sendResetLinkEmail(Request $request) 
    {
        $this->validate($request, ['email' => 'required|email']);

        $response = $this->broker()->sendResetLink(

             array_merge(
                 $request->only('email'),
                ['confirmation_token' => null]
             ) 
        );

        if ($response === Password::RESET_LINK_SENT) {  

            return back()->with('status', trans($response));
        }

        return back()->withErrors(
            ['email' => trans($response)]
        );

    }

    // public function broker() 
    // {
    //     return Password::broker();
    // }
    
}
