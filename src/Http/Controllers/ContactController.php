<?php

namespace Alamin\Contact\Http\Controllers;

use Alamin\Contact\Mail\contactMail;
use Alamin\Contact\Models\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mail;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('contact::contact');
    }
    /**
     * send message in your directory.
     *
     * @return \Illuminate\Http\Response
     */
    public function send(Request $request)
    {
        Mail::to(config('contact.send_email_to'))->send(new contactMail($request->name, $request->email, $request->message));
        $contact = new Contact;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->message = $request->message;
        $contact->save();
        return redirect()->back()->withSuccess('Message Send Success');

    }

}
