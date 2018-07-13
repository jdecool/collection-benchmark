<?php

namespace Bench;

use Innmind\Immutable\Map;

class Immutable
{
    public function square(Map $data): Map
    {
        return $data->map(function($d) {
            return $d ** 2;
        });
    }
}
