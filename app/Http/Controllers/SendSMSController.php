<?php

namespace App\Http\Controllers;


use GuzzleHttp\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Client\RequestException;

class SendSMSController extends Controller
{
    public function send(Request $request)

    {
        $url = 'http://172.17.0.1:8080/secure/send';
        $authorization = 'Basic ZXhjaGFuZ2VfdHJhbnM6dHhub3ZzbXA=';
        $contentType = 'application/json';

        $payload = [
            'to' => '2347033274155',
            'from' => 'LAPO MFB',
            'content' => 'this is an hello message.',
            'dlr' => 'yes',
            'dlr-level' => 3,
            'dlr-method' => 'POST',
            'dlr-url' => 'http://localhost:8200/web/public/sms/dlr',
        ];

        try {
            $client = new Client();
            $response = $client->post($url, [
                'headers' => [
                    'Authorization' => $authorization,
                    'Content-Type' => $contentType,
                ],
                'json' => $payload,
            ]);

            $responseBody = $response->getBody()->getContents();
            $responseCode = $response->getStatusCode();

            // Log or process the response
            Log::info('Response Code: ' . $responseCode);
            Log::info('Response: ' . $responseBody);

            return response()->json([
                'status' => 'success',
                'response_code' => $responseCode,
                'response' => json_decode($responseBody, true),
            ]);
        } catch (RequestException $e) {
            // Handle the error
            $errorMessage = $e->getMessage();
            Log::error('Error: ' . $errorMessage);

            return response()->json([
                'status' => 'error',
                'message' => $errorMessage,
            ], 500);
        }
    }
}
