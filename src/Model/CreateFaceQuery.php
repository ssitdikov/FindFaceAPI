<?php
/**
 * User: Salavat Sitdikov
 */

namespace SSitdikov\FindFaceAPI\Model;


class CreateFaceQuery extends Face
{

    /**
     * @var string
     */
    private $meta = '';

    /**
     * @var string[]
     */
    private $galleries = [];

    /**
     * @var bool
     */
    private $emotions = true;

    /**
     * @var bool
     */
    private $gender = true;

    /**
     * @var bool
     */
    private $age = true;

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

    /**
     * @return string
     */
    public function getMeta(): string
    {
        return $this->meta;
    }

    /**
     * @param string $meta
     */
    public function setMeta(string $meta)
    {
        $this->meta = $meta;
    }

    /**
     * @return string[]
     */
    public function getGalleries(): array
    {
        return $this->galleries;
    }

    /**
     * @param string[] $galleries
     */
    public function setGalleries(array $galleries)
    {
        $this->galleries = $galleries;
    }

    /**
     * @return bool
     */
    public function isEmotions(): bool
    {
        return $this->emotions;
    }

    /**
     * @param bool $emotions
     */
    public function setEmotions(bool $emotions)
    {
        $this->emotions = $emotions;
    }

    /**
     * @return bool
     */
    public function isGender(): bool
    {
        return $this->gender;
    }

    /**
     * @param bool $gender
     */
    public function setGender(bool $gender)
    {
        $this->gender = $gender;
    }

    /**
     * @return bool
     */
    public function isAge(): bool
    {
        return $this->age;
    }

    /**
     * @param bool $age
     */
    public function setAge(bool $age)
    {
        $this->age = $age;
    }

    function jsonSerialize()
    {
        return [
            'photo' => $this->getPhoto(),
            'mf_selector' => $this->getMfSelector(),
            'bbox' => $this->getBbox(),
            'meta' => $this->getMeta(),
            'galleries' => $this->getGalleries(),
            'emotions' => $this->isEmotions(),
            'gender' => $this->isGender(),
            'age' => $this->isAge(),
        ];
    }

}