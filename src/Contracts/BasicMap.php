<?php

namespace Map\Contracts;

interface BasicMap
{
    public function getRange();
    public function getCenter();
    public function getEmptyTile();
    public function generateEmptyMap();

}