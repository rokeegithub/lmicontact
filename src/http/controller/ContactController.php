<?php

namespace lmi\contact\http\controller;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use lmi\contact\model\Contact;
use Illuminate\Support\Facades\Mail;
use lmi\contact\Mail\ContactMail;

class ContactController extends Controller
{
    //

    public function index()
    {
        # code...
        return view('contact::contact');
    }

    public function send(Request $request)
    {
        # code...
        //  Mail::to('naglenirbhay27@gmail.com')->send(new ContactMail());
        Mail::to(config('contact.sendemailto'))->send(new ContactMail($request->message));

        Contact::create($request->all());
        return redirect(route('contact'));
    }
}
