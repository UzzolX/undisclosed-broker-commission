<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Mail\ContactFormMail;
use App\Mail\StartClaimMail;
use App\Models\Claim;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        $data = $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'message' => 'required',
        ]);

        Contact::create([
            'name' => request('name'),
            'email' => request('email'),
            'phone' => request('phone'),
            'message' => request('message')
        ]);
        Mail::to('jonny@undisclosedbrokercommission.co.uk')->send(new ContactFormMail($data));
        return redirect()->back()->with('message', 'Message sent successfully');
    }

    public function storeClaimMail(Request $request)
    {
        $data = $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'message' => 'required',
        ]);

        Contact::create([
            'name' => request('name'),
            'email' => request('email'),
            'phone' => request('phone'),
            'message' => request('message')
        ]);
        Mail::to('jonny@undisclosedbrokercommission.co.uk')->send(new ContactFormMail($data));
        return redirect()->back()->with('message', 'Message sent successfully');
    }

    public function storeClaimTopMail(Request $request)
    {
        $data = $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'used_broker' => 'required',
        ]);

        Claim::create([
            'name' => request('name'),
            'email' => request('email'),
            'phone' => request('phone'),
            'used_broker' => request('used_broker')
        ]);
        Mail::to('jonny@undisclosedbrokercommission.co.uk')->send(new StartClaimMail($data));
        return redirect()->back()->with('message', 'Message sent successfully');
    }
}
