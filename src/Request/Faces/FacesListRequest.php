<?php


namespace SSitdikov\FindFaceAPI\Request\Faces;


use SSitdikov\FindFaceAPI\Request\IRequest;

class FacesListRequest implements IRequest
{

    private $gallery = '';

    private $meta = '';

    private $min_id = 0;

    private $max_id = 0;

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

    public function getPath(): string
    {
        $gallery = '';
        $meta = '';
        if ($this->getGallery())
        {
            $gallery = 'gallery/' . $this->getGallery() . '/';
        }
        if ($this->getMeta())
        {
            $meta = 'meta/' . $this->getMeta() . '/';
        }
        $query = '?' . ($this->getMinId() ? 'min_id=' . $this->getMinId() . '&' : '')
            . ($this->getMaxId() ? 'max_id=' . $this->getMaxId() : '');

        return trim('faces/' . ($gallery ?: '') . ($meta ?: '') . ($query ?: '') , '/?&');
    }

    public function getMethod(): string
    {
        return self::GET;
    }

    public function getOptions(): array
    {
        return [];
    }


}