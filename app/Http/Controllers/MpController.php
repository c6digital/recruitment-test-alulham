<?php

namespace App\Http\Controllers;

use App\Models\Mp;
use App\Mail\ConstituentMessage;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;

class MpController extends Controller
{
    public function get($id)
    {
        $mp = Mp::findOrFail($id);
        return view('write_to_mp', [
            'mp' => $mp,
        ]);
    }

    public function save_message($id, Request $request)
    {
        $mp = Mp::findOrFail($id);

        // TODO: could add this to the session?
        // Or store a partial message in the database?
        $message = $request->request->get('message');

        return view('user_details', [
            'mp' => $mp,
            'message' => $message
        ]);
    }

    public function send_email($id, Request $request): RedirectResponse
    {
        $mp = Mp::findOrFail($id);

        // TODO: Swap this
        // $recipient = $mp->email;
        $recipient = $request->request->get('email');

        $emailPayload = [
            'from_name' => $request->request->get('first_name') . ' ' . $request->request->get('last_name'),
            'from_email' => $request->request->get('email'),
            'message' => $request->request->get('message'),
            'mp' => $mp
        ];
        Mail::to($recipient)->send(new ConstituentMessage($emailPayload));

        // TODO: if they opted in, send to Mailchimp
        // TODO: store total sent by constituency

        return redirect()->route('mp.thanks', ['id' => $mp->id]);
    }

    public function thanks($id)
    {
        $mp = Mp::findOrFail($id);
        return view('thanks', [
            'mp' => $mp
        ]);
    }
}
