<?php


namespace imi;


use imi\interfaces\box;

class uri implements box
{
    private $box = [];

    public function __construct($box = [])
    {
        $this->box = $box;
    }

    /**
     * @return array
     */
    public function getBox()
    {
        // TODO: Implement getBox() method.
        return $this->box;
    }
}