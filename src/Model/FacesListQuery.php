<?php


namespace SSitdikov\FindFaceAPI\Model;


class FacesListQuery implements \JsonSerializable
{

    /**
     * @var string
     */
    private $gallery = '';

    /**
     * @var int
     */
    private $min_id = 0;

    /**
     * @var int
     */
    private $max_id = 0;

    /**
     * FacesListQuery constructor.
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

    /**
     * @return bool
     */
    public function hasGallery()
    {
        return $this->getGallery() ? true : false;
    }

    /**
     * @return int
     */
    public function getMinId(): int
    {
        return $this->min_id;
    }

    /**
     * @param int $min_id
     */
    public function setMinId(int $min_id)
    {
        $this->min_id = $min_id;
    }

    /**
     * @return int
     */
    public function getMaxId(): int
    {
        return $this->max_id;
    }

    /**
     * @param int $max_id
     */
    public function setMaxId(int $max_id)
    {
        $this->max_id = $max_id;
    }

    public function jsonSerialize()
    {
        return 0;
    }

    public function getPath($path = 'faces')
    {
        $minMaxPath = '?' . ($this->getMaxId() ? 'max_id=' . $this->getMaxId() . '&' : '')
            . ($this->getMinId() ? 'min_id=' . $this->getMinId() : '');
        if ($this->hasGallery()) {
            return $path . '/gallery/' . $this->getGallery() . $minMaxPath;
        }
        return $path . $minMaxPath;
    }


}