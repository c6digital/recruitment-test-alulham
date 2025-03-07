<?php

namespace App\Http\Controllers;

use App\Models\Mp;
use App\Mail\ConstituentMessage;
use App\Mail\ThankYouMessage;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use MailchimpMarketing\ApiClient;

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

        $request->session()->put('message', $message);

        return redirect()->route('mp.user_details', ['id' => $mp->id]);
    }

    public function get_user_details($id, Request $request) {
        $mp = Mp::findOrFail($id);

        $message = session('message');
        return view('user_details', [
            'mp' => $mp,
            'message' => $message
        ]);
    }

    public function send_to_mailchimp($email, $first_name, $last_name, $phone) {
        $client = new ApiClient();

        $client->setConfig([
            'apiKey' => Config::get('services.mailchimp.key'),
            'server' => Config::get('services.mailchimp.server_prefix'),
        ]);

        $audienceId = Config::get('services.mailchimp.audience_id');
        $subscriberHash = md5(strtolower($email));

        $response = $client->lists->setListMember($audienceId, $subscriberHash, [
            "email_address" => $email,
            "status_if_new" => "pending",
        ]);
    }

    public function send_email($id, Request $request): RedirectResponse
    {
        // TODO: sending the emails and sending to mailchimp ought to be done async,
        // as background tasks

        $mp = Mp::findOrFail($id);

        $validated = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'mailing-list' => 'required',
            'message' => '',
        ]);

        $full_name = $validated['first_name'] . ' ' . $validated['last_name'];
        $subscribe = $validated['mailing-list'] === 'yes';

        // Important TODO: To send to the actual MP, swap this!
        // $recipient = $mp->email;
        $recipient = $validated['email'];

        if ($recipient) {
            $emailPayload = [
                'from_name' => $full_name,
                'from_email' => $validated['email'],
                'msg' => $validated['message'],
                'mp' => $mp
            ];
            Mail::to($recipient)->send(new ConstituentMessage($emailPayload));
        }

        Mail::to($validated['email'])->send(new ThankYouMessage([
            'name' => $full_name
        ]));


        if ($subscribe) {
            $this->send_to_mailchimp(
                $validated['email'],
                $validated['first_name'],
                $validated['last_name'],
                $validated['phone']
            );
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
