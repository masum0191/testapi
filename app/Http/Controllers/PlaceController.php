<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlaceController extends Controller
{
    public function place($lat ,$long) {

       
        $client = new Client();
        
        $request = new Request('GET', 'GET https://maps.googleapis.com/maps/api/place/nearbysearch/json?location='.$lat.','.$long.'&radius={radius}&key=i have no api key
        ', $headers);
        $res = $client->sendAsync($request, $options)->wait();
        echo $res->getBody();
        

    }
}
