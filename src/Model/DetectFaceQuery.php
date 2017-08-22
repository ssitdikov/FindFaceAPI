<?php


namespace SSitdikov\FindFaceAPI\Model;


class DetectFaceQuery implements \JsonSerializable
{

    private $photo = '';
    private $emotions = true;
    private $gender = true;
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

    public function jsonSerialize()
    {
        return [
            'photo' => $this->getPhoto(),
            'emotions' => $this->isEmotions(),
            'gender' => $this->isGender(),
            'age' => $this->isAge(),
        ];
    }


}