<?php

namespace Bench;

class MapLambda
{
    public function square(array $data): array
    {
        return array_map(function($d) {
            return $d ** 2;
        }, $data);
    }
}
