<?php


namespace SSitdikov\FindFaceAPI\Model;


class VerifyFaceQuery implements \JsonSerializable
{

    /**
     * @var string
     */
    private $photo1 = '';

    /**
     * @var string
     */
    private $photo2 = '';

    /**
     * @var int[]
     */
    private $bbox1 = [];

    /**
     * @var int[]
     */
    private $bbox2 = [];

    /**
     * @var string
     */
    private $mf_selector = Face::MF_SELECTOR_BIGGES;

    /**
     * @var float
     */
    private $threshold = 0.75;

    /**
     * @return string
     */
    public function getPhoto1(): string
    {
        return $this->photo1;
    }

    /**
     * @param string $photo1
     */
    public function setPhoto1(string $photo1)
    {
        $this->photo1 = $photo1;
    }

    /**
     * @return string
     */
    public function getPhoto2(): string
    {
        return $this->photo2;
    }

    /**
     * @param string $photo2
     */
    public function setPhoto2(string $photo2)
    {
        $this->photo2 = $photo2;
    }

    /**
     * @return array
     */
    public function getBbox1(): array
    {
        return $this->bbox1;
    }

    /**
     * @param array $bbox1
     */
    public function setBbox1(array $bbox1)
    {
        $this->bbox1 = $bbox1;
    }

    /**
     * @return array
     */
    public function getBbox2(): array
    {
        return $this->bbox2;
    }

    /**
     * @param array $bbox2
     */
    public function setBbox2(array $bbox2)
    {
        $this->bbox2 = $bbox2;
    }

    /**
     * @return string
     */
    public function getMfSelector(): string
    {
        return $this->mf_selector;
    }

    /**
     * @param string $mf_selector
     */
    public function setMfSelector(string $mf_selector)
    {
        $this->mf_selector = $mf_selector;
    }

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


    public function jsonSerialize()
    {
        // TODO: Implement jsonSerialize() method.
    }


}