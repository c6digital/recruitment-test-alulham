<?php

namespace App\Http\Controllers;

use App\Models\Mp;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PostcodeLookupController extends Controller
{
    public function get()
    {
        return view('postcode_lookup_form');
    }

    public function post(Request $request): RedirectResponse
    {
        $postcode = $request->request->get('postcode');

        # get the postcode from the post data
        $response = Http::get('api.postcodes.io/postcodes/' . $postcode);

        # TODO: check status code
        if ($response->status() != 200) {
            return redirect(route('health.show'))->with('errorMsg', 'Something went wrong');
        }

        # look up the constituency
        $constituency_name = $response->json()['result']['parliamentary_constituency'];

        // IMPORTANT TODO: decent likelihood that not all names match!
        // We should fix this to use codes instead!
        $mp = Mp::where('pcon_name', $constituency_name)->first();

        return redirect()->route('mp.write', ['id' => $mp->id]);
    }
}
