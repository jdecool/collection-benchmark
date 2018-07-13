<?php

namespace Bench;

use Illuminate\Support\Collection;

class CollectionLoop
{
    public function square(Collection $data)
    {
        return $data->map(function($d) {
            return $d ** 2;
        });
    }
}
