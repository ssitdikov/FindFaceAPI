<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 23.08.17
 * Time: 2:58
 */

namespace SSitdikov\FindFaceAPI;


use GuzzleHttp\Client;
use GuzzleHttp\Exception\BadResponseException;
use SSitdikov\FindFaceAPI\Object\Face;
use SSitdikov\FindFaceAPI\Request\IRequest;

class FindFaceAPI
{

    const BASE_URI = 'https://api.findface.pro/';

    const FF_VERSION = 'v1';


    /**
     * @var \GuzzleHttp\Client
     */
    private $client;

    public function __construct($token)
    {
        $this->client = new Client([
          'headers' => [
            'Authorization' => 'Token ' . $token,
            'Content-Type' => 'application/json',
          ]
        ]);
    }

    public function facesList(IRequest $request)
    {
        $result = $this->callApi($request);
        if (isset($result->results) && !empty($result->results)){
            $faces = [];
            foreach ($result->results as $face)
            {
                $faces[] = Face::class;
            }
        }
        return $result;
    }

    public function callApi(IRequest $request)
    {
        $url = self::BASE_URI . '/' . self::FF_VERSION . '/' . $request->getPath();
        try {
            $response = $this->client->request($request->getMethod(), $url, $request->getOptions());
        } catch (BadResponseException $exception)
        {
            $response = $exception->getResponse();
        }
        return json_decode($response->getBody()->getContents());
    }


}