<?php

namespace Bench;

use Spatie\Typed\Collection;
use Spatie\Typed\T;

class SpatieTyped
{
    public function square(array $data): array
    {
        $collection = (new Collection(T::int()))->set($data);
        foreach ($collection as $k => $v) {
            $collection[$k] = $v ** 2;
        }

        return $collection;
    }
}
