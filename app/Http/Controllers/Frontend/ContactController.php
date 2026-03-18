<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Email;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validate = $request->validate([
            'full_name' => 'required|string',
            'company_name' => 'required|string',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:255',
            'details' => 'required|string',
        ]);

        Email::create([
            'full_name' => $request->full_name,
            'company_name' => $request->company_name,
            'email' => $request->email,
            'phone' => $request->phone,
            'details' => $request->details
        ]);

        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}
