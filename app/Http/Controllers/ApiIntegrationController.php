<?php

namespace App\Http\Controllers;

use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ApiIntegrationController extends Controller
{
    /**
     * @return Application|Factory|View|\Illuminate\Foundation\Application
     */
    public function __invoke()
    {
        return view('index');
    }

    /**
     * @param Request $request
     *
     * @return false|string
     * @throws GuzzleException
     */
    public function api(Request $request)
    {
        try {
            $response = Http::get($request->post('url'));

            /**
             * Validate JSON
             */
            $responseObj = json_decode($response->body());
            $validatorObj = json_decode(file_get_contents(__DIR__ . '/../../JsonSchema/api.json'));
            $validator    = new \JsonSchema\Validator;
            $validator->validate($responseObj, $validatorObj);

            /**
             * Check Validation JSON
             */
            if ($validator->isValid()) {

            return json_encode([
                'success' => true,
                'raw'     => $responseObj,
                'html'    => view('table', [
                    'obj' => $responseObj,
                ])->render(),
            ], JSON_PRETTY_PRINT);
            } else {
                return json_encode(
                    [
                        'success' => false,
                        'message' => 'Something went wrong in the JSON Schema Validation',
                        'errors'  => $validator->getErrors(),
                    ], JSON_PRETTY_PRINT
                );
            }
        } catch (\Exception $e) {
            return json_encode(
                [
                    'success'   => false,
                    'message'   => 'Something went wrong in API request',
                    'exception' => $e->getMessage(),
                ], JSON_PRETTY_PRINT
            );
        }
    }
}
