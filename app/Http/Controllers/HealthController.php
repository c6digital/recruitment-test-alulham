<?php

namespace App\Http\Controllers;

use App\Models\HealthCondition;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HealthController extends Controller
{
    public function show()
    {
        return view('form');
    }

    public function results(Request $request)
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
        $constituency_code = $response->json()['result']['codes']['parliamentary_constituency'];

        $depression_prevalence = HealthCondition::where('condition', 'Depression')
            ->where('pcon_code', $constituency_code)
            ->pluck('prevalence')[0];

        $share_msg = 'Testing testing!';

        return view('results', [
            'constituency_name' => $constituency_name,
            'depression_prevalence' => $depression_prevalence,
            'share_msg' => $share_msg,
        ]);
    }
}
