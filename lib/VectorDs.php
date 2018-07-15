<?php

namespace Bench;

use Ds\Vector;

class VectorDs
{
    public function square(Vector $data)
    {
        return $data->map(function($d) {
            return $d ** 2;
        });
    }
}
