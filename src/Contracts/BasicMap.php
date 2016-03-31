<?php

namespace Map\Contracts;

interface BasicMap
{
    public function getMapName();
    public function getArea();
    public function getEmptyTile();
    public function generateEmptyMap();
}