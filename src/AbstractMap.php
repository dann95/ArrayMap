<?php


namespace Map;

use Map\Contracts\BasicMap;
use Map\Contracts\WalkableArrayMap;

class AbstractMap implements    BasicMap,
                                WalkableArrayMap
{

    public function getRange()
    {
        // TODO: Implement getRange() method.
    }

    public function getCenter()
    {
        // TODO: Implement getCenter() method.
    }

    public function getEmptyTile()
    {
        // TODO: Implement getEmptyTile() method.
    }

    public function generateEmptyMap()
    {
        // TODO: Implement generateEmptyMap() method.
    }

    public function walk(array $directions)
    {
        // TODO: Implement walk() method.
    }

    public function getPointer()
    {
        // TODO: Implement getPointer() method.
    }

    public function setPointer(array $pointer)
    {
        // TODO: Implement setPointer() method.
    }

    public function getSize()
    {
        // TODO: Implement getSize() method.
    }

    public function setRange(array $range)
    {
        // TODO: Implement setRange() method.
    }

    public function setSize(array $size)
    {
        // TODO: Implement setSize() method.
    }

    public function getActualPosition()
    {
        // TODO: Implement getActualPosition() method.
    }

    public function setNameToPosition()
    {
        // TODO: Implement setNameToPosition() method.
    }

    public function setAttributesToPosition(array $attributes)
    {
        // TODO: Implement setAttributesToPosition() method.
    }
}