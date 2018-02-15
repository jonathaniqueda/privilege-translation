<?php

namespace App\Http\Controllers;

use App\Mail\ContactEmail;
use Illuminate\Http\Request;
use Mail;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        if ($request->isMethod('POST')) {
            $this->validate($request, [
                'name' => 'required',
                'email' => 'required|email',
                'phone' => 'required',
                'service' => 'required',
            ]);

            Mail::send(new ContactEmail($request->all()));

            $request->session()->flash('status', trans('general.contact_success'));
            return redirect()->back();
        }

        return view('contact');
    }
}