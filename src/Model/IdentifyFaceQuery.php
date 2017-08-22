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

    function jsonSerialize()
    {
        return [
            'photo' => $this->getPhoto(),
            'mf_selector' => $this->getMfSelector(),
            'bbox' => $this->getBbox(),
            'threshold' => $this->getThreshold(),
            'n' => $this->getNumOfResults(),
        ];
    }


}