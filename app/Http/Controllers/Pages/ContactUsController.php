<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;
use App\Mail\ContactMail;
use Butschster\Head\Facades\Meta;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{
    public function index()
    {
        Meta::prependTitle("Contact Us");

        return view("contact-us.index");
    }

    public function sendEmail(ContactRequest $request)
    {
        Mail::to(env("MAIL_FROM_ADDRESS"))->send(new ContactMail($request->validated()));

        return redirect()->back()->with("success", "Email is sent successfully");
    }
}
