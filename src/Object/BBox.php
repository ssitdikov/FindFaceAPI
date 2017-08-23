<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 23.08.17
 * Time: 2:55
 */

namespace SSitdikov\FindFaceAPI\Object;


class BBox
{

    /**
     * @var int
     */
    private $x1 = 0;

    /**
     * @var int
     */
    private $y1 = 0;

    /**
     * @var int
     */
    private $x2 = 0;

    /**
     * @var int
     */
    private $y2 = 0;

    /**
     * @return int
     */
    public function getX1()
    {
        return $this->x1;
    }

    /**
     * @param int $x1
     */
    public function setX1($x1)
    {
        $this->x1 = $x1;
    }

    /**
     * @return int
     */
    public function getY1()
    {
        return $this->y1;
    }

    /**
     * @param int $y1
     */
    public function setY1($y1)
    {
        $this->y1 = $y1;
    }

    /**
     * @return int
     */
    public function getX2()
    {
        return $this->x2;
    }

    /**
     * @param int $x2
     */
    public function setX2($x2)
    {
        $this->x2 = $x2;
    }

    /**
     * @return int
     */
    public function getY2()
    {
        return $this->y2;
    }

    /**
     * @param int $y2
     */
    public function setY2($y2)
    {
        $this->y2 = $y2;
    }

}