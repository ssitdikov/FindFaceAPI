<?php
/**
 * User: Salavat Sitdikov
 */

namespace SSitdikov\FindFaceAPI\Model;


class IdentifyFaceQuery extends Face
{

    /**
     * @var float
     */
    private $threshold = 0.75;

    /**
     * @var int
     */
    private $numOfResults = 5;

    /**
     * @var string
     */
    private $gallery = '';

    /**
     * @return float
     */
    public function getThreshold(): float
    {
        return $this->threshold;
    }

    /**
     * @param float $threshold
     */
    public function setThreshold(float $threshold)
    {
        $this->threshold = $threshold;
    }

    /**
     * @return int
     */
    public function getNumOfResults(): int
    {
        return $this->numOfResults;
    }

    /**
     * @param int $numOfResults
     */
    public function setNumOfResults(int $numOfResults)
    {
        $this->numOfResults = $numOfResults;
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

    public function hasGallery()
    {
        return $this->getGallery() ? true : false;
    }

    public function jsonSerialize()
    {
        return [
            'photo' => $this->getPhoto(),
            'mf_selector' => $this->getMfSelector(),
            'bbox' => $this->getBbox(),
            'threshold' => $this->getThreshold(),
            'n' => $this->getNumOfResults(),
        ];
    }

    public function getPath($path = 'identify')
    {
        if ($this->hasGallery()) {
            return 'faces/gallery/' . $this->getGallery() . '/identify';
        }
        return $path;
    }


}