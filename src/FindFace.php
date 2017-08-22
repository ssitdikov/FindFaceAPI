<?php
/**
 * User: Salavat Sitdikov
 */

namespace SSitdikov\FindFaceAPI;


use SSitdikov\FindFaceAPI\Model\CreateFaceQuery;
use SSitdikov\FindFaceAPI\Model\Face;
use SSitdikov\FindFaceAPI\Model\IdentifyFaceQuery;

class FindFace
{

    const BASE_URI = 'https://api.findface.pro/';

    const FF_VERSION = 'v1';

    private $token = '';

    /**
     * FindFace constructor.
     * @param string $token
     */
    public function __construct($token)
    {
        $this->token = $token;
    }

    public function createFace(CreateFaceQuery $face)
    {
        $result = $this->callApi('face', $face);
        return $result;
    }

    public function identify(IdentifyFaceQuery $face)
    {
        $result = $this->callApi('identify', $face);
        return $result;
    }

    private function callApi($method, \JsonSerializable $body)
    {
        $uri = self::BASE_URI . self::FF_VERSION . '/' . trim($method, '/') . '/';

        $context_options = array(
            'http' => array(
                'method' => 'POST',
                'header' => [
                    'Authorization: Token ' . $this->token,
                    'Content-Type: application/json',
                ],
                'content' => json_encode($body),
            )
        );
        $context = stream_context_create($context_options);
        $result = file_get_contents($uri, false, $context);
        if ($result){
            return json_decode($result);
        } else {
            throw  new \Exception('Empty answer from API');
        }
    }


}