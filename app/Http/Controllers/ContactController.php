<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $request->validate([
            'name'    => ['required', 'string', 'max:100'],
            'email'   => ['required', 'email', 'max:150'],
            'message' => ['required', 'string', 'max:2000'],
        ]);

        // Onboarding task: no mail/DB yet. Later: Mail::to(...)->send(...) or save to a table.

        return redirect()->route('contact')
            ->with('success', 'Thanks! Your message is sent. We will reply within one working day.');
    }
}
