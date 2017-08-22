<?php
/**
 * User: Salavat Sitdikov
 */

namespace SSitdikov\FindFaceAPI\Model;


abstract class Face implements \JsonSerializable
{

    const MF_SELECTOR_REJECT = 'reject';
    const MF_SELECTOR_BIGGES = 'biggest';
    const MF_SELECTOR_ALL = 'all';

    /**
     * @var string
     */
    protected $photo;

    /**
     * @var string
     */
    protected $mf_selector = self::MF_SELECTOR_BIGGES;

    /**
     * @var int[]
     */
    protected $bbox = [];

    /**
     * @return string
     */
    public function getPhoto(): string
    {
        return $this->photo;
    }

    /**
     * @param string $photo
     */
    public function setPhoto(string $photo)
    {
        $this->photo = $photo;
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
     * @return int[]
     */
    public function getBbox(): array
    {
        return $this->bbox;
    }

    /**
     * @param int[] $bbox
     */
    public function setBbox(array $bbox)
    {
        $this->bbox = $bbox;
    }


}