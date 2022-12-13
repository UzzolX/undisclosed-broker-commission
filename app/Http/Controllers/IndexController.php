<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Claim;
use App\Mail\StartClaimMail;
use Illuminate\Support\Facades\Mail;

class IndexController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function storeClaim(Request $request)
    {
        $data = $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'used_broker' => 'required',
            'file' => 'required|mimes:pdf,doc,docx|max:9000'
        ]);

        Claim::create([
            'name' => request('name'),
            'email' => request('email'),
            'phone' => request('phone'),
            'used_broker' => request('used_broker'),
        ]);
        Mail::to('jonny@undisclosedbrokercommission.co.uk')->send(new StartClaimMail($data));
        return redirect()->back()->with('message', 'Message sent successfully');
    }
}
