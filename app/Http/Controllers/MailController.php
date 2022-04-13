<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\sendEmail;

use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Post;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class MailController extends Controller
{
    public static function sendRegistrationEmail($Name, $emailAddress)
    {
        $data = [
            'Name' => $Name
        ];
        Mail::to($emailAddress)->send(new sendEmail($data));
    }
}
