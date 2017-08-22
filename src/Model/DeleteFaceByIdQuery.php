<?php


namespace SSitdikov\FindFaceAPI\Model;


class DeleteFaceByIdQuery implements \JsonSerializable
{

    private $id = 0;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id)
    {
        $this->id = $id;
    }

    public function getPath($path = 'faces')
    {
        return $path . '/id/' . $this->getId();
    }
    public function jsonSerialize()
    {
        // TODO: Implement jsonSerialize() method.
    }


}