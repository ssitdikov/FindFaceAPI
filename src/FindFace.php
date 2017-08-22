<?php
/**
 * User: Salavat Sitdikov
 */

namespace SSitdikov\FindFaceAPI;


use SSitdikov\FindFaceAPI\Model\CreateFaceQuery;
use SSitdikov\FindFaceAPI\Model\CreateGallery;
use SSitdikov\FindFaceAPI\Model\DetectFaceQuery;
use SSitdikov\FindFaceAPI\Model\Face;
use SSitdikov\FindFaceAPI\Model\FacesListByMeta;
use SSitdikov\FindFaceAPI\Model\FacesListQuery;
use SSitdikov\FindFaceAPI\Model\IdentifyFaceQuery;
use SSitdikov\FindFaceAPI\Model\MetasListQuery;
use SSitdikov\FindFaceAPI\Model\VerifyFaceQuery;

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

    public function createFace(CreateFaceQuery $query)
    {
        $result = $this->callApi('face', $query);
        return $result;
    }

    public function identify(IdentifyFaceQuery $query)
    {
        $result = $this->callApi($query->getPath(), $query);
        return $result;
    }

    public function detect(DetectFaceQuery $query)
    {
        $result = $this->callApi('detect', $query);
        return $result;
    }

    public function verify(VerifyFaceQuery $query)
    {
        $result = $this->callApi('verify', $query);
        return $result;
    }

    public function metasList(MetasListQuery $query)
    {
        $result = $this->callApi($query->getPath('meta'), $query, 'GET');
        return $result;

    }

    public function facesList(FacesListQuery $query)
    {
        $result = $this->callApi($query->getPath('faces'), $query, 'GET');
        return $result;
    }

    /**
     * @param FacesListByMeta $query
     * @return mixed
     * @TODO Refactor it to one method FacesList
     */
    public function facesListByMeta(FacesListByMeta $query)
    {
        $result = $this->callApi($query->getPath('faces'), $query, 'GET');
        return $result;
    }

    public function createGallery(CreateGallery $query)
    {
        $result = $this->callApi('galleries', $query);
        return $result;
    }

    public function galleryList()
    {
        $result = $this->callApi('galleries', new CreateGallery(), 'GET');
        return $result;
    }

    public function deleteGallery($name)
    {
        return $this->callApi('galleries/' . $name, new CreateGallery(), 'DELETE');
    }

    public function deleteFaceById($id)
    {
        return $this->callApi('faces/id/' . $id, new CreateGallery(), 'DELETE');
    }

    /**
     * @param $path
     * @param \JsonSerializable $body
     * @param string $method
     * @return mixed
     * @throws \Exception
     *
     * @TODO Maybe aggregate only $body context and get path from it ?
     */
    private function callApi($path, \JsonSerializable $body, $method = 'POST')
    {
        $uri = self::BASE_URI . self::FF_VERSION . '/' . trim($path, '/') . '/';

        $context_options = array(
            'http' => array(
                'method' => $method,
                'header' => [
                    'Authorization: Token ' . $this->token,
                    'Content-Type: application/json',
                ],
            )
        );
        $body = json_encode($body);
        if (!empty($body)) {
            $context_options['http']['content'] = $body;
        }
        $context = stream_context_create($context_options);
        $result = file_get_contents($uri, false, $context);
        if ($result) {
            return json_decode($result);
        } else {
            if ($method !== 'DELETE') {
                throw  new \Exception('Empty answer from API');
            } else {
                return json_encode($result);
            }
        }
    }


}