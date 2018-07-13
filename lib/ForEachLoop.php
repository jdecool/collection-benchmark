<?php

namespace Bench;

class ForEachLoop
{
    public function square(array $data): array
    {
        $result = [];

        foreach ($data as $d) {
            $result[] = $d ** 2;
        }

        return $result;
    }
}
