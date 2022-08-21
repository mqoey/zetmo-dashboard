<?php

namespace App\Http\Controllers;

use App\Models\Municipality;
use App\Models\vc;
use Illuminate\Http\Request;
use Ladumor\OneSignal\OneSignal;

class NotificationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function sendPush(Request $request)
    {
        // $fields['include_player_ids'] = ['xxxxxxxx'];
        // $msg = 'This message will appear outside your apps UI.';
        // OneSignal::sendPush($fields, $msg);

        $client = new \GuzzleHttp\Client();

        $response = $client->request('POST', 'https://onesignal.com/api/v1/notifications', [
            'body' => '{"app_id": "94a96e23-e548-4d1d-b406-9209bc0cc958","included_segments":["Subscribed Users"],"contents":{"en": "'.$request['message'].'"},"name":"INTERNAL_CAMPAIGN_NAME"}',
            'headers' => [
                'Accept' => 'application/json',
                'Authorization' => 'Basic NzJiZTM1OTQtYTk3Ny00OWFmLWI5YjMtY2U3YjE4MjNkMGM3i',
                'Content-Type' => 'application/json',
            ],
        ]);
        return back();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('notifications.index')
            ->with('areas', "")
            ->with('municipalities', Municipality::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }
}
