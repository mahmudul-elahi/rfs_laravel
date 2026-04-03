<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreEmailRequest;
use App\Mail\AdminEmailReply;
use App\Models\Email;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $emails = Email::orderBy('is_fav', 'desc')->latest()
            ->paginate(10);
        return view('backend.emails.index', compact('emails'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEmailRequest $request)
    {
        $data = $request->validated();

        Email::create($data);

        return back()->with('success', 'Message sent successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Email $email)
    {
        if (! $email->is_read) {
            $email->forceFill([
                'is_read' => true,
                'read_at' => now(),
            ])->save();
        }

        return view('backend.emails.show', compact('email'));
    }

    public function reply(Request $request, Email $email)
    {
        $validated = $request->validate([
            'recipient_email' => ['required', 'email', 'max:255'],
            'subject' => ['required', 'string', 'max:255'],
            'message' => ['required', 'string'],
        ]);

        Mail::to($validated['recipient_email'])->send(new AdminEmailReply(
            recipientName: $email->full_name,
            subjectLine: $validated['subject'],
            messageBody: $validated['message'],
        ));

        return redirect()
            ->route('emails.show', $email)
            ->with('success', 'Reply sent successfully.');
    }

    /**
     * Update the specified resource in storage.
     */
    public function mark_as_read(Email $email)
    {
        $email->forceFill([
            'is_read' => true,
            'read_at' => now(),
        ])->save();

        return back();
    }

    /**
     * Update the specified resource in storage.
     */
    public function fav(Email $email)
    {
        $email->forceFill([
            'is_fav' => ! $email->is_fav,
        ])->save();

        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Email $email)
    {
        $email->delete();

        return back()->with('success', 'Email moved to trash.');
    }
}
