<?php

namespace Map\Contracts;


interface WalkableArrayMap
{
    public function walk(array $directions);
    public function getPointer();
    public function setPointer(array $pointer);
    public function getRange();
    public function getSize();
    public function setRange(array $range);
    public function setSize(array $size);
    public function getActualPosition();
    public function setNameToPosition();
    public function setAttributesToPosition(array $attributes);

}