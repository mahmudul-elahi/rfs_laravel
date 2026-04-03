<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Mail\ContactSubmissionNotification;
use App\Models\Email;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index()
    {
        return view('frontend.contact.index');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'full_name' => 'required|string',
            'company_name' => 'required|string',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:255',
            'details' => 'required|string',
        ]);

        $email = Email::create($validated);

        $recipientEmail = Setting::where('key', 'contact_email')->value('value')
            ?: env('MAIL_TO_ADDRESS', config('mail.from.address'));

        if ($recipientEmail) {
            Mail::to($recipientEmail)->send(new ContactSubmissionNotification($email));
        }

        return redirect()->back()->with('success', 'הודעתך נשלחה בהצלחה!');
    }
}
