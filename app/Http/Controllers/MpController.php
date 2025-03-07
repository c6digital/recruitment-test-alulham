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

    public function send_to_mailchimp($email, $first_name, $last_name, $phone) {
        // 'https://${dc}.api.mailchimp.com/3.0/lists/{list_id}/members/{subscriber_hash}';
        // $response = Http::put('');
    }

    public function send_email($id, Request $request): RedirectResponse
    {
        // TODO: sending the email and sending to mailchimp ought to be done async,
        // as background tasks

        $mp = Mp::findOrFail($id);

        $first_name = $request->request->get('first_name');
        $last_name = $request->request->get('last_name');
        $email = $request->request->get('email');
        $message = $request->request->get('message');
        $subscribe = $request->request->get('mailing-list') === 'yes';
        $phone = $request->request->get('phone');

        // Important TODO: To send to the actual MP, swap this!
        // $recipient = $mp->email;
        $recipient = $email;

        if ($recipient) {
            $emailPayload = [
                'from_name' => $first_name . ' ' . $last_name,
                'from_email' => $email,
                'msg' => $message,
                'mp' => $mp
            ];
            Mail::to($recipient)->send(new ConstituentMessage($emailPayload));
        }

        if ($subscribe) {
            $this->send_to_mailchimp($email, $first_name, $last_name, $phone);
        }

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
