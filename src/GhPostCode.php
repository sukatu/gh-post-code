<?php
namespace Sims\GhPostCode;
use Illuminate\Support\Facades\Http;
 
class GhPostCode {
    public function getAddress(String $code){
        $response = Http::post('http://phplaravel-650841-3093458.cloudwaysapps.com/api/get-address', [
            "postcode"=> $code
        ]);

        $response->body();
        $response->json($key = null);
        $response->object();
        $response->collect($key = null);
        $response->status();
        $response->ok();
        $response->successful();
        $response->redirect();
        $response->failed();
        $response->serverError();
        $response->clientError();
        $response = json_decode($response);
       return response()->json($response);

    }
}