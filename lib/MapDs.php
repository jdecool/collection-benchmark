<?php

namespace Bench;

use Ds\Map;

class MapDs
{
    public function square(Map $data)
    {
        return $data->map(function($d) {
            return $d ** 2;
        });
    }
}
