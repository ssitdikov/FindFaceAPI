<?php


namespace SSitdikov\FindFaceAPI\Model;


class CreateGallery implements \JsonSerializable
{

    private $gallery = '';

    /**
     * CreateGallery constructor.
     * @param string $gallery
     */
    public function __construct($gallery = '')
    {
        $this->gallery = $gallery;
    }


    /**
     * @return string
     */
    public function getGallery(): string
    {
        return $this->gallery;
    }

    /**
     * @param string $gallery
     */
    public function setGallery(string $gallery)
    {
        $this->gallery = $gallery;
    }

    public function jsonSerialize()
    {
        return [
            'name' => $this->getGallery()
        ];
    }


}