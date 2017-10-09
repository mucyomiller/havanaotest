<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
class ApiController extends Controller
{
    public function index(Request $request){
 if($request->isMethod('POST')){
    $token = env('API_TOKEN');
///
$curl = \curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.havanao.com/api/sale/purchase?api_token={$token}",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "{\n\t  \"amount\": \"{$request->input('amount')}\",\n      \"customer\": \"{$request->input('customer')}\",\n      \"transactionid\": \"{$request->input('transactionid')}\",\n      \"comment\": \"{$request->input('comment')}\"\n}",
  CURLOPT_HTTPHEADER => array(
    "content-type: application/json"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  echo $response;
}

///
}
else
{
return view('response');
}

    }
}
