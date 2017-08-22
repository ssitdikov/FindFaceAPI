<?php


namespace SSitdikov\FindFaceAPI\Model;


class MetasListQuery implements \JsonSerializable
{

    /**
     * @var string
     */
    private $gallery = '';

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

    /**
     * @return bool
     */
    public function hasGallery()
    {
        return $this->getGallery() ? true : false;
    }


    public function jsonSerialize()
    {
        return 0;
    }

    public function getPath($path = 'meta')
    {
        if ($this->hasGallery()) {
            return $path . '/gallery/' . $this->getGallery();
        }
        return $path;
    }


}