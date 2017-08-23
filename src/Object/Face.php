<?php


namespace SSitdikov\FindFaceAPI\Object;


class Face
{
    /**
     * @var int
     */
    private $id = 0;

    /**
     * @var string
     */
    private $timestamp = '';

    /**
     * @var string
     */
    private $photo_hash = '';

    /**
     * @var string
     */
    private $meta = '';

    /**
     * @var string[]
     */
    private $galleries = [];

    /**
     * @var string
     */
    private $photo = '';

    /**
     * @var string
     */
    private $thumbnail = '';

    /**
     * @var BBox
     */
    private $bbox;

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

    /**
     * @return string
     */
    public function getTimestamp(): string
    {
        return $this->timestamp;
    }

    /**
     * @param string $timestamp
     */
    public function setTimestamp(string $timestamp)
    {
        $this->timestamp = $timestamp;
    }

    /**
     * @return string
     */
    public function getPhotoHash(): string
    {
        return $this->photo_hash;
    }

    /**
     * @param string $photo_hash
     */
    public function setPhotoHash(string $photo_hash)
    {
        $this->photo_hash = $photo_hash;
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
    public function getThumbnail(): string
    {
        return $this->thumbnail;
    }

    /**
     * @param string $thumbnail
     */
    public function setThumbnail(string $thumbnail)
    {
        $this->thumbnail = $thumbnail;
    }

    /**
     * @return \SSitdikov\FindFaceAPI\Object\BBox
     */
    public function getBbox(): \SSitdikov\FindFaceAPI\Object\BBox
    {
        return $this->bbox;
    }

    /**
     * @param \SSitdikov\FindFaceAPI\Object\BBox $bbox
     */
    public function setBbox(\SSitdikov\FindFaceAPI\Object\BBox $bbox)
    {
        $this->bbox = $bbox;
    }

    public static function create($json)
    {
        $obj = new self();
        $obj->setId($json->id);
        $obj->setPhoto($json->photo);
        $obj->setGalleries($json->galleries);
        $obj->setMeta($json->meta);
        $obj->setPhotoHash($json->photo_hash);
        $obj->setThumbnail($json->thumbnail);
//        $obj->set
    }


}