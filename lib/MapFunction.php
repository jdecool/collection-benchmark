<?php

namespace Bench;

function square(int $n) {
    return $n ** 2;
}

class MapFunction
{
    public function square(array $data): array
    {
        return array_map('Bench\square', $data);
    }
}
